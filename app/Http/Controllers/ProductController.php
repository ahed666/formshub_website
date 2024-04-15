<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cities;
use App\Models\DeviceModel;
use App\Models\TypeDevice;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Mail\OrderNotification;
use App\Mail\OrderCustomerNotification;
use Illuminate\Support\Facades\Mail;
use Spatie\SchemaOrg\Schema;

class ProductController extends Controller
{
    public function index(){

        $schemaMarkup = Schema::webPage()
        ->name('Products')
        ->description('Discover our range of products and find the perfect solution for your needs.')
        ->url(url()->current());
        $cities=Cities::all();
        $devicesModels=DeviceModel::join('type_of_devices','type_of_devices.model_id','=','devices_models.id')->select('devices_models.*','type_of_devices.*')->get();

        return view('products',compact('cities','devicesModels','schemaMarkup'));
    }


    public function orderProduct(Request $request){

        $request->validate([
            'items' => 'required|array',
        ], [
            'items.required' => trans('main.items_required'),
        ]);
        $order=new Order();
        $order->name=$request->input('fname').' '.$request->input('lname');
        $order->email=$request->input('email');
        $order->mobile_number=$request->input('mobilenumber');
        $order->total=$request->input('total');
        $order->location=$request->input('cityname').' - '.$request->input('address');
        $order->save();
        $selectedItems = $request->input('items', []);
        for ($i = 0; $i < count($selectedItems); $i++) {
            $orderproduct=new OrderProduct();
            $orderproduct->product_id = $selectedItems[$i];
            $orderproduct->order_id = $order->id;
            $orderproduct->quantity = $request->input('quantity_'.$selectedItems[$i]);
            $orderproduct->save();

        }

        $items=OrderProduct::join('type_of_devices','order_products.product_id','=','type_of_devices.id')->join('devices_models','devices_models.id','=','type_of_devices.model_id')->where('order_products.order_id','=',$order->id)
        ->select('type_of_devices.*','devices_models.device_model','order_products.quantity')->get()->toArray();
        $orderData = [
            'id' => $order->id,
            'customer_name' => $order->name,
            'customer_email' => $order->email,
            'customer_mobile_number' => $order->mobile_number,
            'items' => $items, /* ... */ // Provide the array of ordered items
            'total' => $order->total/* ... */// Calculate the order total
        ];

            try {
                // Send email notification to sales
        $recipientEmail = env('SALES_EMAIL', 'info@formshub.net');

        Mail::to($recipientEmail)->send(new OrderNotification($orderData));
        // Send email notification to customer
        Mail::to($order->email)->send(new OrderCustomerNotification($orderData));
            } catch (\Throwable $th) {
                //throw $th;
            }


        return redirect()->back()->with(
            ['success_title'=>trans('main.orderplaced'),
            'success'=>trans('main.ordersendsuccess')]
        );



    }


}

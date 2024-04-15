@extends('layouts.app')
@section('title', 'Kiosk - you can order online')
@section('meta_description', 'Discover our range of interactive kiosks designed to enhance customer engagement. Our kiosks are user-friendly, customizable, and perfect for various industries.')

@section('content')

@php
$title=trans('main.kiosk_title');
$text='';

@endphp
@section('schema_markup')
{!! $schemaMarkup->toScript() !!}
@endsection
<x-header_section :title="$title" :text="$text" />

    <section class="section">
      <x-kiosk_info_slider />
    </section>
      {{-- order products --}}

    <section class="section " id="order-now">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5 aos-init aos-animate" data-aos="fade-up">
              <h2 class="section-heading">{{ __('main.ordernow') }}</h2>
            </div>
          </div>
        <div class="container">
          <div class="order-form">

                <form id="orderForm"  method="POST" action="{{ route('neworder') }}">
                    @csrf
                    <div class="my-2 fs-3 text-black d-flex justify-content-start align-items-start">
                       {{ __('main.delivery info') }}
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-4 col-12 ms-auto  d-flex justify-content-center">
                            <img src="{{ asset('images/website_images/svg/delivery.svg') }}" alt="Image" class="img-formorder">
                        </div>
                        <div class="col-md-8 col-12  " >
                            {{-- name  --}}
                            <div class="form-row my-2">
                                <div class="row">

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="fname">{{ __('main.firstname') }}</label>
                                            <input type="text" class="form-control" id="fname" name="fname" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="lname">{{ __('main.lastname') }}</label>
                                            <input type="text" class="form-control" id="lname" name="lname" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- email and mobile number --}}
                            <div class="form-row my-2">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email">{{ __('main.email') }}</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="mobilenumber">{{ __('main.mobilenumber') }}</label>
                                            <input pattern="^(05|5)\d{8}$" title="Please enter a valid UAE mobile phone number with either '05xxxxxxxx' or '5xxxxxxxx' " type="text" maxlength="10"  class="form-control" id="mobilenumber" name="mobilenumber" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <input type="hidden" name="total" value="" id="total">
                    {{-- adress section --}}
                    <div class="form-row my-2">
                        <div class="row">

                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="address">{{ __('main.city') }}</label>
                                    <select class="form-select form-control" aria-label="Default select example" name="cityname" id="cityname">


                                        @foreach ($cities as $city )
                                            <option value="{{ $city->city_name }}">{{ $city->city_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8 col-12">
                                <div class="form-group">
                                    <label for="city">{{ __('main.address') }}</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- order info section --}}
                    <div class="info-section fs-3 text-black  d-flex justify-content-start align-items-start">
                       {{ __('main.orderinfo') }}
                    </div>

                    <div class="container">
                    <div class="  row   mb-3 ">
                        <div class="col-lg-8 col-sm-12 col-md-12 row">
                            {{-- devices --}}
                            @foreach ($devicesModels as $device )

                                <div class="col-lg-3 col-sm-12 col-md-12  align-items-center mx-2 my-1 my-sm-auto">
                                    <input type="checkbox" class="btn-check" name="items[]" onchange="toggleBorder(this,{{ $device->id }},{{ $device->price }},' {{$device->device_model }}{{ $device->name }}')" value="{{ $device->id }}" id="item_{{ $device->id }}" autocomplete="off" >
                                    <label class="btn border border-1 border-dark d-flex justify-content-center items-center" for="item_{{ $device->id }}">
                                        <img width="100" height="100" class="orderkiosk_image" src="{{ asset($device->image) }}" alt="">
                                    </label>
                                    <div data-bs-toggle="tooltip"  data-bs-html="true" title="{{$device->device_model}} {{$device->name }}" class="custom-element
                                        d-flex justify-content-center align-items-center product_name_div   ">
                                        <span class=" product_name ">{{$device->device_model  }} {{ $device->name }}</span>
                                    </div>
                                    {{-- price --}}
                                    <div class="d-flex justify-content-center mt-2 align-items-center">
                                        <span class="fs-6">{{ $device->price }}{{ __(' AED') }} <span class="vat">{{ __('+VAT') }}</span></span>
                                    </div>
                                    {{-- quantity --}}
                                    <div id="quantityDiv_{{ $device->id }}" class="d-flex justify-content-center my-2 align-items-center hidden ">
                                        <label class="fs-6"  for="quantity_with_stand_{{ $device->id }}">{{ __('QTY: ') }}</label>

                                        <div class=" inline-group">
                                            <div class="input-group-prepend">
                                            <button type="button" onclick="upQuantity({{ $device->id }})" class="btn-minus">
                                                +
                                            </button>
                                            </div>

                                            <input  class="product_qty quantity w-30  border border-1    " readonly type="number" name="quantity_{{ $device->id }}" id="quantity_{{ $device->id }}" value="1" min="1" max="20" onchange="changeQuantity(this,{{ $device->id }})">

                                            <div class="input-group-append">
                                            <button type="button" onclick="downQuantity({{ $device->id }})" class="btn-plus">
                                                -
                                            </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            @endforeach
                        </div>
                        {{-- summary order --}}
                        <div class="col-lg-4 col-sm-12 col-md-12 summary_order container" style="border-radius:10%;">
                            <div class="d-grid w-100 align-items-center  container   my-1 p-2  "  >
                                {{-- items --}}

                                    <div id="invoice_description" class="invoice_description  p-2  "  >
                                        <div class="d-flex justify-content-center items-center">{{ __('main.noitems') }}</div>

                                    </div>
                                    <div id="total_desc" class="hidden "  >
                                        <div  class=" vat_div d-flex   justify-content-between align-items-center p-2">
                                            <span>{{ __('VAT @ 5.00%') }}</span>
                                            <span>AED<span id="total_vat" class="total_vat mx-2">0</span></span>
                                        </div>

                                        <div class=" d-grid mt-4 justify-content-start align-items-center">
                                            <span class="mx-2">{{ __('main.totalprice') }}</span>
                                           <span class="total_price">AED<span id="total_price" class="mx-1">0</span></span>

                                        </span>
                                        </div>
                                    </div>



                            </div>


                            <div class="d-flex justify-content-center align-items-center my-2"  >
                            <button type="submit" class="btn btn-sendorder">{{ __('main.sendorder') }}</button>
                            </div>
                        </div>

                    </div>
                    </div>

                </form>

          </div>
        </div>
    </section>




  <!-- ======= Footer ======= -->
  <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>
  <script src="{{ asset('https://code.jquery.com/jquery-3.6.4.min.js') }}"></script>
  {{-- go to form --}}

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        if (window.location.hash) {
            var element = document.getElementById(window.location.hash.substring(1));
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }
    });
</script>
    @if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: @json($errors->all()),
        });
    </script>
    @endif
    <script>
          var translations = @json(__('main'));
         var vatValue=0.05;
         var  desc=document.getElementById('invoice_description');
         var  total_desc=document.getElementById('total_desc');


        var selectedItems=[];
        var nonEmptyItems = selectedItems.filter(item => item !== undefined && item !== null);
        $(document).ready(function () {
            $('#contactForm').submit(function () {
                $('#submitButton').prop('disabled', true);
                $('#submitButton').prop('value',"Sending..");
            });
        });
        // errors

    // change quantity
    function changeQuantity(input,id){
        console.log(id);
        selectedItems[id].count=input.value;
        updateInvoice();

    }
    function upQuantity(id){
        inputNumber=document.getElementById(`quantity_${id}`);
        var value = parseInt(inputNumber.value, 10); // Convert value to integer
        if (value <20) {
            inputNumber.value = value + 1;
            selectedItems[id].count=inputNumber.value;

            updateInvoice(); // Decrement value
        } else {
            return;
        }
    }
    function downQuantity(id){
        var inputNumber = document.getElementById(`quantity_${id}`);
        var value = parseInt(inputNumber.value, 10); // Convert value to integer
        if (value > 1) {
            inputNumber.value = value - 1;
            selectedItems[id].count=inputNumber.value;

            updateInvoice(); // Decrement value
        } else {
            return;
        }

    }

    // select un select item
    function toggleBorder(checkbox,id,price,name) {
        const label = checkbox.nextElementSibling;
        quantityDiv=document.getElementById('quantityDiv_'+id);
        quantityInput=document.getElementById('quantity_'+id);
        if (checkbox.checked) {
            label.classList.remove('border-dark');
            label.classList.add('border-primary');
            quantityDiv.classList.remove('hidden');
            quantityInput.value=1;

            selectedItems[id]={price:price,name:name,count:document.getElementById('quantity_'+id).value};

            updateInvoice();

        } else {
            label.classList.remove('border-primary');
            label.classList.add('border-dark');
            quantityDiv.classList.add('hidden');
            delete selectedItems[id];

            updateInvoice();

        }
}

   function updateInvoice(){
    total_price=0;

    toggleInvoiceDiv();

    index=0;
    selectedItems.forEach(function(element,i) {
            elementprice=element.price*element.count;
        total_price+=elementprice;
        desc.innerHTML+=`<div class="my-1 d-flex justify-content-between items-center item_desc">
             <span>${index+1}) ${element.name}</span>
             <span>${element.count} * ${element.price} <span class="mx-2">AED ${elementprice}</span></span>
            </div>`;
        index+=1;
     });

     vat=total_price*vatValue;
     total=total_price+vat;
     document.getElementById('total_vat').innerText=vat;
     document.getElementById('total_price').innerText=total;
     document.getElementById('total').value=total;

   }
   function toggleInvoiceDiv(){
    nonEmptyItems = selectedItems.filter(item => item !== undefined && item !== null);
    if(nonEmptyItems.length>0){

        total_desc.classList.remove('hidden');
        desc.innerHTML='';
    }
    else{
        desc.innerHTML=`<div class="d-flex justify-content-center items-center">${translations.noitems}</div>`;

        total_desc.classList.add('hidden');
    }
   }
    </script>

  <script>

  </script>
  @if(session()->has('success'))
    <script>
        console.log('success');
        Swal.fire({
            icon: 'success',
            title: '{{ session('success_title') }}',
            text: '{{ session('success') }}',
            confirmButtonColor:'#1277D1',

        });
    </script>
@endif

@if($errors->has('message'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ $errors->first('message') }}',
        });


    </script>
@endif
@stop

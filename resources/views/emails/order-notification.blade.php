{{-- resources/views/emails/order-notification.blade.php --}}

@component('mail::message')
    # New Order Notification

    Dear Sales Team,

    A new order has been placed with the following details:

    **Customer Name:** {{ $orderData['customer_name'] }}
    **Customer Email:** {{ $orderData['customer_email'] }}
    **Customer Mobile Number:** {{ $orderData['customer_mobile_number'] }}

    **Ordered Items:**
    @foreach ($orderData['items'] as $item)
        - {{ $item['device_model'] }}_{{ $item['name'] }} ({{ $item['quantity'] }} x {{ $item['price'] }} AED)
    @endforeach

    **Order Total:** {{ $orderData['total'] }} AED
    **Order No:** FHORDER-{{ $orderData['id'] }}

    Thank you for your attention.

    {{-- @component('mail::button', ['url' => url('/orders')])
        View Order
    @endcomponent --}}


   <div style="display: flex; justify-content:center; items-align:center">
    <a  style="background-color:#1277D1;padding:8px;color:White;border-radius:20px;text-decoration : none;" href="{{ url(env('WEBAPP_URL') . '/orders') }}">
        View Order
    </a>
   </div>

@endcomponent

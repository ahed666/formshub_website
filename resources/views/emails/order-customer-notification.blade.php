{{-- resources/views/emails/order-notification.blade.php --}}

@component('mail::message')
    # New Order Notification

    Dear Customer,

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



    {{-- @component('mail::button', ['url' => url('/orders')])
        View Order
    @endcomponent --}}




@endcomponent

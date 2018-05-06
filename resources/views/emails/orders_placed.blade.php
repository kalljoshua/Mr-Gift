@component('mail::message')
    # Order Received

    Thank you for your order.

    **Order ID:** {{ $order->id }}

    **Order Email:** {{ $order->user->email }}

    **Order Name:** {{ $order->user->name }}

    **Order Total:** UGX {{ number_format($order->total) }}

    **Items Ordered**

    @foreach ($order->products as $product)
        Name: {{ $product->name }} <br>
        Price: UGX {{ number_format($product->price)}} <br>
        Quantity: {{ $product->pivot->quantity }} <br>
    @endforeach

    You can get further details about your order by logging into our website.

    @component('mail::button', ['url' => config('app.url'), 'color' => 'green'])
        Go to Website
    @endcomponent

    Thank you again for choosing us.

    Regards,<br>
    {{ config('app.name') }}
@endcomponent

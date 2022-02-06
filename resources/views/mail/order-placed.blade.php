@component('mail::message')
Hi {{$order->name}},
<p>Your order is placed successfully.</p>
<p><strong>Product Name:&nbsp;</strong>{{$order->product->name}}</p>
<p><strong>Transaction ID:&nbsp;</strong>{{$order->tran_id}}</p>
<p><strong>Paid Amount:&nbsp;</strong>{{$order->amount}} TK.</p>
@component('mail::button', ['url' => route("customer.profile.my-orders")])
Track Your Order
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent

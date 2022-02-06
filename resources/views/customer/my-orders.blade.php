@extends("customer.layout")
@section("orders","active")
@section("customer-content")
<div class="col-md-10">
    <div class="main-card mb-3 card">
        <div class="card-header">My Orders</div>
        <div class="card-body table-responsive">
            <table class="table text-center">
                <tr>
                    <th>SL.</th>
                    <th>Trx ID</th>
                    <th>Product Name</th>
                    <th>Amount</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach ($orders as $key=>$order)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$order->tran_id}}</td>
                        <td>{{$order->product->name}}</td>
                        <td>{{$order->amount}}&nbsp;TK.</td>
                        <td>{{$order->created_at->format("M d, Y")}}</td>
                        <td>{{$order->status}}</td>
                        <td>
                            <a href="{{route("customer.download-invoice",$order->id)}}" class="btn btn-success">Download Invoice</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
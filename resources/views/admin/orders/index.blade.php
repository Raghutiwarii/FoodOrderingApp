@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center"><strong style="font-size:20px">Pending Orders</strong></h1>
    @foreach ($orders as $order)
    <div class="px-3 py-2 mt-4">
        <div class="card border shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <p class="card-text font-weight-bold">Order ID: {{$order->id}}</p>
                        <p class="card-text font-weight-bold">Date: {{ date_format(date_create($order->date), 'jS F Y') }}</p>
                        <p class="card-text font-weight-bold">Type: {{ $order->type }}</p>
                        <p class="card-text font-weight-bold">Address: {{ $order->deliveryAddress }}</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group">
                            @foreach ($order->food as $food)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="card-text">{{ $food->name }}</p>
                                        <p class="card-text">Quantity: <b>{{ $food->pivot->quantity }}</b></p>
                                        <p class="card-text">Total: <b>₹{{ number_format((float)($food->price * $food->pivot->quantity), 2, '.', '') }}</b> (₹{{ number_format((float)($food->price), 2, '.', '') }} per unit)</p>
                                        <p class="card-text font-weight-bold">Time: {{ date_format(date_create($order->date), 'H:i:s') }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="flex rounded-lg">
                                            <img class="flex h-28 w-44 object-fill rounded-lg" src="{{ $food->picture }}" alt="{{ $food->name }}">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- <div class="col-md-3 d-flex justify-content-center align-items-center">
                        <button class="btn btn-primary" onclick="markAsDelivered({{ $order->id }})">Mark as Delivered</button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    function markAsDelivered(orderId) {
        if (confirm('Are you sure you want to mark this order as delivered?')) {
            axios.delete(`/orders/${orderId}`)
                .then(response => {
                    if (response.status === 200) {
                        location.reload();
                    }
                })
                .catch(error => {
                    console.error('An error occurred while marking the order as delivered.');
                });
        }
    }
</script>
@endsection

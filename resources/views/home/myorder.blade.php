@extends('home.base')


@section('content')
    <div class="container mt-5">
        @if ($order)
            <div class="row">
                <div class="col-12">
                    <h2>My Orders ({{ $count = count($order->orderItem) }})</h2>


                </div>

                @if ($count)
                    <div class="col-8">
                        {{-- product here --}}

                        <div class="card">
                            <div class="card-header">
                                <span class="float-start">
                                Order id: {{$payment->ORDERID}}
                                </span>
                                <span class="float-end">
                                    
                                Total Amount: {{$payment->TXNAMOUNT}}
                                </span>
                            </div>
                            <div class="card-body">
                                @foreach ($order->orderItem as $item)
                                    <div class="card mb-2">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="{{ asset('storage/' . $item->product->image) }}" class="w-100"
                                                        alt="">
                                                </div>
                                                <div class="col-10">
                                                    <h2 class="h5 text-capitalize">{{ $item->product->title }}</h2>
                                                    <div class="container">
                                                        <h6>₹{{ $item->product->discount_price * $item->qty }}/-<del>₹{{ $item->product->price * $item->qty }}/-</del>
                                                        </h6>
                                                    </div>
                                                    <div class="col-4">
                                                        <span>Qty: {{ $item->qty }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="card-footer">
                                <span class="small">{{date("D d-M-Y h:i:s A", strtotime($order->updated_at))}}</span>
                            </div>
                        </div>
                    </div>
                @else
                    <h1 class="display-3 text-secondary fw-bold">Cart is Empty</h1>
                    <a href="{{ route('home.index') }}" class="btn btn-lg btn-dark w-25 mt-3">Shop Now</a>
                @endif
            </div>
        @else
            <div class="card text-center">
                <div class="card-body">
                    <h1 class="text-muted">☹️ Order Empty </h1>
                    <a href="{{ route('home.index') }}" class="btn btn-success">Start Shopping</a>
                </div>
            </div>
        @endif
    </div>
@endsection

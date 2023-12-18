@extends('home.base')


@section('content')
    <div class="container">
        @foreach ($categories as $cat)

            <div class="container my-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-capitalize h4 text-secondary">{{ $cat->cat_title }}</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($cat->products as $item)
                        <div class="col-3">
                            <div class="card">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="" class="w-100"
                                            style="height:80px;object-fit:cover">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-1">
                                            <h6 class="small mb-0">{{$item->title}}</h6>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="text-success fw-bold">Rs. {{$item->discount_price}}/-</span>
                                                    <del class="small text-muted">Rs. {{$item->price}}/-</del></div>
                                            </div>
                                            <a href="{{route('addToCart', $item->id)}}" class="btn btn-success rounded-0 small btn-sm float-end">Add to Cart</a>
                                                    <span class="float-end">
                                                @if ($item->isVeg)
                                                    <img src="{{asset('icons/v.png')}}" width="30px" height="30px" alt="">
                                                @else
                                                <img src="{{asset('icons/nv.png')}}" width="30px" height="30px" alt="">
                                                    
                                                @endif
                                            </span>
                                             </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <hr>
        @endforeach
    </div>
@endsection

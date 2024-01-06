@extends('home.base')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2>Checkout</h2>


            </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <div>Enter Address details for Delivery</div>
                            <div class="text-danger">* Required Fields</div>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <label for="">Fullname</label>
                                            <input type="text" class="form-control" value="{{old('fullname')}}" name="fullname">
                                            @error('fullname')
                                                <p class="text-danger small">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="">alt_contact</label>
                                            <input type="text" class="form-control" value="{{old('alt_contact')}}" name="alt_contact">
                                            @error('alt_contact')
                                                <p class="text-danger small">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="">landmark<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{old('landmark')}}" name="landmark">
                                            @error('landmark')
                                                <p class="text-danger small">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <label for="">street_name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{old('street_name')}}" name="street_name">
                                            @error('street_name')
                                                <p class="text-danger small">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="">area<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{old('area')}}" name="area">
                                            @error('area')
                                                <p class="text-danger small">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="">pincode<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="{{old('pincode')}}" name="pincode">
                                            @error('pincode')
                                                <p class="text-danger small">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <label for="">city<span class="text-danger">*</span></label>
                                            <select class="form-control" value="{{old('city')}}" name="city">
                                                <option value="">Select City</option>
                                                <option value="purnea">purnea</option>
                                                <option value="patna">patna</option>
                                                <option value="bhagalpur">bhagalpur</option>
                                            </select>
                                            @error('city')
                                                <p class="text-danger small">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="">state<span class="text-danger">*</span></label>
                                            <select class="form-control" value="{{old('state')}}" name="state">
                                                <option value="">Select state</option>
                                                <option value="bihar">bihar</option>
                                               
                                            </select>
                                            @error('state')
                                                <p class="text-danger small">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="">Type</label>
                                            <br>
                                            <input type="radio" name="type" value="o"> Office
                                            <input type="radio" name="type" value="h" checked> Home
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" value="Save Address" class="btn btn-success w-100 mt-3 btn-lg">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-4">

                    <form action="{{route('pay.now')}}" method="post">
                        @csrf

                        <input type="text" name="amount" value={{session('amount')}}>
                        
                        <select name="address_id" id="" class="form-select form-select-lg">
                        <option value="">Select Saved Address</option>
                        @foreach ($addresses as $add)
                                
                                <option value="{{$add->id}}">{{$add->street_name}}, {{$add->landmark}}, {{$add->area}} | {{$add->city}} - {{$add->pincode}} ({{$add->state}})</option>
                        @endforeach

                    </select>

                    <div class="mt-3">
                        <input type="submit" class="btn btn-primary w-100 btn-lg" value="Make Payment">
                    </div>
                    </form>

                </div>
        </div>
    @endsection

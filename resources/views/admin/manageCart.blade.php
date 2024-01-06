@extends('admin.adminBase')


@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h2 class="display-6 float-start">Manage Carts ({{ count($totalCarts) }})</h2>

            </div>

            <div class="container">

                <div class="row">
                    <div class="col-12">
                        @foreach ($carts as $item)
                            <div class="card mt-4">
                                <div class="card-header p-1">
                                    <table class="table table-sm">
                                        <tr>
                                            <th>Order Id</th>
                                            <td>{{ $item->id }}</td>
                                            <th>Order By</th>
                                            <td>{{ $item->users->name }}</td>
                                            <th>Contact No</th>
                                            <td>{{ $item->users->email }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card-body mt-1">
                                    <table class="table table-sm">
                                            <tr>
                                                <th>Id</th>
                                                <th>name</th>
                                                <th>Qty</th>
                                                <th>Product Image</th>
                                            </tr>
                                        @foreach ($item->orderItem as $i)
                                            <tr>
                                                <td>{{$i->id}}</td>
                                                <td>{{$i->product->title}}</td>
                                                <td>{{$i->qty}}</td>
                                                <td>
                                                    <img src="{{asset('storage/'. $i->product->image)}}" width="40px" alt="">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        @endforeach
                        
                        {{$carts->links()}}
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
@endsection

@extends('admin.adminBase')


@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <h2 class="display-6">Manage Product ({{count($products)}})</h2>

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>title</th>
                                    <th>IsVeg</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($products as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>
                                            @if($item->isVeg) 
                                                <img src="{{asset('icons/v.png')}}" alt=""> 
                                            @else 
                                                <img src="{{asset("icons/nv.png")}}" alt="">
                                            @endif
                                        </td>
                                        <td>{{$item->discount_price}} <del>{{$item->price}}</del></td>
                                        <td><img src="{{asset("storage/".$item->image)}}" width="100px" alt=""></td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>{{$item->category->cat_title}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="" class="btn btn-danger">X</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                             
                            </tbody>
                        </table>
            </div>
        </div>
    </div>
@endsection
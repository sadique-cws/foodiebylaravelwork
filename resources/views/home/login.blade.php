@extends('home.base')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-4 mx-auto mt-5">
            <div class="card">
                <div class="card-header">Login Here</div>
                <div class="card-body">

                  
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" value="{{old('email')}}" class="form-control">
                            @error('email')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">password</label>
                            <input type="password" name="password" value="{{old('password')}}" class="form-control">
                            @error('password')
                                <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Login" class="btn btn-success w-100">
                        </div>
                    </form>

                    <div class="row">
                        <a href="{{route('signup')}}">Yet not Registered?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
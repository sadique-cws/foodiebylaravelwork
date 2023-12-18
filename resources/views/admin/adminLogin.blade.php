<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN PANEL - {{env("APP_NAME")}} - taste Better</title>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">ADMIN PANEL | {{env("APP_NAME")}}</a>
            

           
        </div>
    </div>
    
    
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto mt-5">
                <div class="card">
                    <div class="card-header">Admin Header</div>
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
                                <input type="submit" value="Admin Login" class="btn btn-danger w-100">
                            </div>
                        </form>

                        @if (session('msg'))
                            <div class="alert alert-danger">{{session('msg')}}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>

        toastr.options = {
            "closeButton":true,
        }

        @if(session('error'))
            toastr.error("<?= session('error');?>")
        @endif
        @if(session('success'))
            toastr.success("{{session('success')}}")
        @endif
    </script>
</body>
</html>
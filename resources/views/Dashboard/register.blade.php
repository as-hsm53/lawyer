<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image2"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    <form class="user" action="registered" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="firstName" value="{{ old('firstName') }}" placeholder="Enter First Name...">
                                            @if ($errors->has('firstName'))
                                                <span class="text-danger"><b>{{ $errors->first('firstName') }}</b></span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" placeholder="Enter Last Name...">
                                            @if ($errors->has('lastName'))
                                                <span class="text-danger"><b>{{ $errors->first('lastName') }}</b></span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <select name="qualification"  class="form-select form-select form-control" aria-label=".form-select example">
                                                <option value="0" selected>Select Your Practise Area</option>
                                                <option value="Family">Family law</option>
                                                <option value="Civil">Civil Law</option>
                                                <option value="Business">Business Law</option>
                                                <option value="Criminal">Criminal Law</option>
                                            </select>
                                            @if ($errors->has('qualification'))
                                                <span class="text-danger"><b>{{ $errors->first('qualification') }}</b></span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <select name="cityId" class="form-select form-select form-control" aria-label=".form-select example">
                                                <option value="0" selected>Select City</option>
                                                @foreach($cities as $c)
                                                <option value="{{$c->id}}">{{$c->city}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('cityId'))
                                                <span class="text-danger"><b>{{ $errors->first('cityId') }}</b></span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Enter Area Address...">
                                            @if ($errors->has('address'))
                                                <span class="text-danger"><b>{{ $errors->first('address') }}</b></span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" name="description" placeholder="About You">{{ old('description') }}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="text-danger"><b>{{ $errors->first('description') }}</b></span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email Address...">
                                            @if ($errors->has('email'))
                                                <span class="text-danger"><b>{{ $errors->first('email') }}</b></span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Enter Password">
                                            @if ($errors->has('password'))
                                                <span class="text-danger"><b>{{ $errors->first('password') }}</b></span>
                                            @endif
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script>
        async function fetchText(){
            let url = 'https://ipinfo.io/json?token=6f257d515ee9fc';
            let response = await fetch(url);
            let data =  await response.json();
            console.log(data);
        }
        fetchText();
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public\assets\css\signup.css">
    <link rel="stylesheet" href="assets/css/style-starter.css">

</head>

<body>
    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                                <form action="{{ route('loginUser') }}" method="POST">
                                    @csrf
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="email" id="emailUser" name="emailUser" class="form-control form-control-lg" value="{{ old('emailUser') }}" />
                                        <label class="form-label" for="emailUser">Your Email</label>
                                        <span class="text-danger">@error('emailUser'){{ $message }}@enderror</span>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="passUser" name="passUser" class="form-control form-control-lg" value="{{ old('passUser') }}"/>
                                        <label class="form-label" for="passUser">Password</label>
                                        <span class="text-danger">@error('passUser'){{ $message }}@enderror</span>
                                    </div>
                                    @if($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                        @endforeach
                                    </div>
                                    @endif
                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3cg">
                                            I agree to all statements in <a href="#" class="text-body"><u>Terms of service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                                            Login
                                        </button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="{{ route('register') }}" class="fw-bold text-body"><u>Register here</u></a></p>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
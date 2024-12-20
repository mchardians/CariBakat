<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | CariBakat</title>
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png" />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/template/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ["{{ asset('assets/template/css/fonts.min.css') }}"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/template/css/atlantis.min.css') }}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lilita+One&display=swap');

        .bg-login-image {
            background: url('{{ asset('assets/template/img/login-image.svg') }}') no-repeat;
            background-position: center;
            background-size: contain;
        }

        .bg-login-image::before {
            content: "Selamat Datang...";
            display: block;
            font-family: "Lilita One", sans-serif;
            font-size: 2.5rem;
            text-align: center;
            color: #fff;
            margin-top: 1.25rem;
        }
    </style>

    @vite([])
</head>

<body style="background-color: #efefee;">
    <img class="img-fluid d-none d-lg-inline-block m-3" src="https://placehold.co/250x80?text=CariBakat+Logo" alt="CariBakat Logo">

    <div class="container container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-12 col-lg-10">
                <div class="card shadow-lg">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-6 col-lg-7 d-none d-md-block d-lg-block bg-login-image"
                                style="background-color: #00b074;"></div>
                            <div class="col-md-6 col-lg-5">
                                <div class="py-3 px-2 m-3">
                                    <img src="https://kbsproperty.co.id/wp-content/uploads/2020/09/dummy-logo-2b.png"
                                        class="img-fluid mb-3 d-block mx-auto" alt="company logo" width="150">

                                    @error('userInvalid')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <span class="font-weight-bold text-small text-danger">{{ $message }}</span>
                                            <button type="button"
                                                class="close d-flex justify-content-center align-items-center"
                                                data-dismiss="alert" aria-label="Close"
                                                style="width: 30px; height: 30px; border-radius: 50%;">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @enderror

                                    <form action="{{ route('auth') }}" method="POST" id="signin-form">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email" value="{{ old('email') }}">
                                        </div>
                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="password">Password</label>
                                                <div class="float-right">
                                                    <a href="{{ route('forgot-password') }}" class="text-small">Lupa Password?</a>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-block"
                                                style="background-color: #00b074;color: #fff;">
                                                Masuk
                                            </button>
                                        </div>
                                    </form>

                                    <div class="text-center mt-3">
                                        Belum memiliki akun ? <a href="{{ route('signup') }}">Daftar</a>
                                    </div>

                                    <div class="text-center mt-3 text-small">
                                        Copyright &copy; 2024. Made with 💙 by <a href="https://github.com/mchardians"
                                            target="_blank">mchardians</a>
                                    </div>
                                    <div class="text-center text-small mt-2">
                                        <a href="{{ route('home') }}" class="text-danger font-weight-bold" style="text-decoration: underline;">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/template/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/template/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/template/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jsvalidation/js/jsvalidation.min.js') }}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\SignInRequest', '#signin-form') !!}
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk | CariBakat</title>
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

        body {
            overflow-x: hidden;
            background-color: #efefee;
        }

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

<body class="row">
    <div class="container align-self-center">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-12 col-lg-10">
                <div class="card overflow-hidden shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-6 col-lg-7 d-none d-md-block d-lg-block bg-login-image" style="background-color: #40A578;"></div>
                            <div class="col-md-6 col-lg-5">
                                <div class="py-4 px-2 m-3">
                                    <img src="#"
                                        class="img-fluid mb-3 d-block mx-auto" alt="company logo"
                                        width="150">

                                    <form action="#" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email2">Email Address</label>
                                            <input type="email" class="form-control" id="email2" name="email"
                                                placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="password">Password</label>
                                                <div class="float-right">
                                                    <a href="#" class="text-small">Lupa Password?</a>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-block" style="background-color: #40A578;color: #fff;">
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
                                        <a href="{{ route('home') }}" style="text-decoration: underline;">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
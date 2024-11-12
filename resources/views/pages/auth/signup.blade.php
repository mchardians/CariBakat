<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar | CariBakat</title>
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
        body {
            font-size: 14px;
            letter-spacing: 0.05em;
            color: #2a2f5b;
            background-color: #efefee;
        }

        .daftar-container {
            width: 400px;
            padding: 60px 25px;
            border-radius: 5px;
            background-color: #fff;
            -webkit-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            -moz-box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
            border: 1px solid #ebecec;
        }

        .show-password {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            cursor: pointer;
        }
    </style>

    @vite([])
</head>

<body>
    <div class="wrapper d-flex justify-content-center align-items-center" style="height: unset;padding: 15px;">
        <div class="container daftar-container">
            <h3 class="text-center" style="font-size: 19px;font-weight: 600;margin-bottom: 25px;">Daftar Akun</h3>
            <form action="#">
                <div class="form-group">
                    <label for="fullname" class="placeholder"><b>Nama Lengkap</b></label>
                    <input id="fullname" name="fullname" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email" class="placeholder"><b>Email</b></label>
                    <input id="email" name="email" type="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="passwordsignin" class="placeholder"><b>Password</b></label>
                    <div class="position-relative">
                        <input id="passwordsignin" name="passwordsignin" type="password" class="form-control" required>
                        <div class="show-password">
                            <i class="icon-eye"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirmpassword" class="placeholder"><b>Konfirmasi Password</b></label>
                    <div class="position-relative">
                        <input id="confirmpassword" name="confirmpassword" type="password" class="form-control"
                            required>
                        <div class="show-password">
                            <i class="icon-eye"></i>
                        </div>
                    </div>
                </div>
                <div class="row text-center" style="padding: 25px 10px 0;">
                    <div class="col-md-6">
                        <a href="{{ route('signin') }}" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Batal</a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="btn btn-success w-100 fw-bold">Daftar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

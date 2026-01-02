<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Payaashan</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font: Be Vietnam Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('siteassets/css/style.css') }}">

</head>

<body>

    <div class="login-bg"></div>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="login-card p-4 shadow">

            <div class="text-center mb-3">
                <img src="{{ asset('siteassets/img/logo.png') }}" width="300" alt="logo">
                <h6 class="fw-bold mt-3" style="color: #007fff;font-size:20px; ">Welcome to Payaashan</h6>
                <p class="text-muted m-0">Make Payroll Easy</p>
            </div>

            <form>
                <div class="mb-3">
                    <label class="form-label fw-semibold" style="font-size:14px;">Username</label>
                    <input type="text" class="form-control" placeholder="Enter Username">
                </div>

                <div class="mb-2">
                    <label class="form-label fw-semibold" style="font-size:14px;">Password</label>
                    <div class="position-relative">
                        <input type="password" id="password" class="form-control" placeholder="Enter Password"
                            style="padding-right:40px;">

                        <i class="bi bi-eye-slash" id="toggleIcon"
                            style="
            position:absolute;
            right:12px;
            top:50%;
            transform:translateY(-50%);
            cursor:pointer;
            font-size:18px;
            color:#666;
       "
                            onclick="togglePassword()"></i>
                    </div>

                </div>

                <div class="row mt-4">
                    <div class="col-md-8">
                        <div class="text-start mb-3">
                            <a href="#" class="text-primary small" style="text-decoration:none;">Forgot Password
                                ?</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                       <button type="button" class="btn btn-primary w-100 py-2 fw-semibold"
                                onclick="window.location='{{ route('createcompany') }}'">
                            Login
                        </button>

            </form>

        </div>
    </div>
    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            const icon = document.getElementById('toggleIcon');

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            } else {
                input.type = "password";
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            }
        }
    </script>

</body>

</html>

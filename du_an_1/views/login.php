<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 500px;
            margin-top: 50px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            width: 50px;
            height: 50px;
            margin: 10px 10px;
            background-color: #0d6efd;
            border: none;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-link {
            color: #6c757d;
            font-size: 18px;
        }

        .btn-link:hover {
            color: #343a40;
        }

        .form-check-label {
            cursor: pointer;
        }

        .social-buttons .btn-link {
            font-size: 20px;
            color: #495057;
        }

        .social-buttons .btn-link:hover {
            color: #212529;
        }
        i{
            font-size: 25px;
            padding: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <form>
            <h3 class="text-center mb-4">Đăng nhập</h3>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Email</label>
                <input type="email" id="form2Example1" class="form-control" placeholder="Nhập email của bạn" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Mật khẩu</label>
                <input type="password" id="form2Example2" class="form-control" placeholder="Nhập mật khẩu của bạn" />
            </div>

            <!-- Checkbox and link -->
            <div class="row mb-4">
                <div class="col d-flex align-items-center">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31">Ghi nhớ</label>
                </div>
                <div class="col text-end">
                    <a href="#!" class="text-decoration-none">Quên mật khẩu?</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="button" class="btn btn-primary btn-block w-100 mb-4">Đăng nhập</button>

            <!-- Social buttons -->
            <div class="text-center">
                <p>Bạn chưa có tài khoản? <a href="signup.php" class="text-decoration-none">Đăng ký</a></p>
                <p>hoặc đăng ký với:</p>
                <div class="social-buttons d-flex justify-content-center">
                    <button type="button" class="btn btn-primary">
                        <i class="fa-brands fa-facebook"></i>
                    </button>
                    <button type="button" class="btn btn-primary">
                        <i class="fa-brands fa-google"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
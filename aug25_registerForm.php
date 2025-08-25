<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net.cn/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Registration Form</title>
    <style>
        body {
            background: linear-gradient(to bottom right, #e3f2fd, #bbdefb); /* Gradient light blue background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            font-size: 1.1rem; /* Slightly larger base font size */
        }
        .card {
            width: 100%;
            max-width: 600px;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #0d6efd; /* Blue header */
            padding: 20px;
        }
        .card-header h3 {
            margin: 0;
            font-size: 1.8rem; /* Enlarged header font size */
            font-weight: bold;
        }
        .card-body {
            padding: 30px;
            background-color: #ffffff; /* White background for the form */
        }
        .form-label {
            font-weight: bold;
            color: #0d6efd;
            font-size: 1.2rem; /* Larger label font size */
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #ced4da;
            font-size: 1.1rem; /* Larger input font size */
        }
        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 5px rgba(13, 110, 253, 0.5);
        }
        .btn-primary {
            background-color: #0d6efd;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 1.1rem; /* Larger button font size */
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
        }
        .btn-secondary {
            border-radius: 10px;
            font-size: 1.1rem; /* Larger button font size */
        }
        .d-flex {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header text-white text-center">
            <h3>Student Registration Form</h3>
        </div>
        <div class="card-body">
            <form action="studentsRegister.php" method="post">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Enter your ID">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password">
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net.cn/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
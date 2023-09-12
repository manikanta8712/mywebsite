<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="<?= base_url(); ?>\assets\bootstrap-5.2.3-dist\css\bootstrap.min.css" type="text/css">
    <script rel="stylesheet" href="<?= base_url(); ?>\assets\bootstrap-5.2.3-dist\js\bootstrap.min.js" type="text/css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style>
        .add_bg {
            padding: 15px;
            width: 400px;
            background-color: rgb(51, 45, 45);
            border-radius: 20px;
            height: 450px;
        }

        .icon {
            position: absolute;
            color: white;
            right: 10px;
            bottom: 20px;
        }
    </style>
</head>

<body style="background-color: rgb(101,24,207);">
    <div class="">
        <div class="container d-flex flex-column align-items-center mt-5 add_bg">

            <h2 class="text-white fw-bold mb-2 text-uppercase">Login</h2>
            <p class="text-white-50 mb-5">Please enter your login and password!</p>
            <div class="col-10 form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" style="background-color: rgb(51, 45, 45);color:whitesmoke">
                <label class="text-white" for="floatingInput">Email address</label>
            </div>
            <div class="col-10 form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" style="background-color: rgb(51, 45, 45);color:whitesmoke">
                <i class="fa-solid fa-eye icon"></i>
                <label class="text-white" for="floatingPassword">Password</label>
            </div>
            <p class="small mt-2 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

            <button class="btn btn-lg px-5" type="submit" style="border: 1px solid white;color:whitesmoke">Login</button>
        </div>
    </div>
    <script>
        $("body").on('click', '.icon', function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $("#floatingPassword");
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }

        });
    </script>
</body>

</html>
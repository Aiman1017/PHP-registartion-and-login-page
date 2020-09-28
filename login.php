<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Login and Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class='login-box'>
            <div class='row'>

                <div class="col-md-6 login-left">
                    <h2> Login Here </h2>
                    <form action="validation.php" method='POST'>
                        <div class='form-group'>
                            <label>Username</label>
                            <input type="text" name='user' class='form-control' require>
                        </div>

                        <div class='form-group'>
                            <label>Password</label>
                            <input type="password" name='password' class='form-control' require>
                        </div>

                        <button type='submit' class='btn btn-primary'>Log In</button>
                    </form>
                </div>

                <div class="col-md-6 login-right">
                    <h2> Registration Here </h2>
                    <form action="register.php" method='POST'>
                        <div class='form-group'>
                            <label>Username</label>
                            <input type="text" name='user' class='form-control' require>
                        </div>

                        <div class='form-group'>
                            <label>Password</label>
                            <input type="password" name='password' class='form-control' require>
                        </div>

                        <button type='submit' class='btn btn-primary'>Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
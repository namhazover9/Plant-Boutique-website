<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2>Login here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" name="password"  class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel"  name="phone" placeholder="0123456789" class="form-control" pattern="[0-9]{10}" required>                          
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="abc@gmail.com" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>

                <div class="col-md-6 login-right">
                    <h2>Register here</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" name="user" placeholder="Username" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <!-- <input type="password" name="password" placeholder="Password" class="form-control" required> -->
                            <input type="password" name="password" placeholder="Password" class="form-control" pattern="^\S{6,}$" 
                            onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); 
                            if(this.checkValidity()) form.password_two.pattern = this.value;"  required>
                        </div>

                        <div class="form-group">
                            <label for="repass">Repassword</label>
                            <!-- <input type="password" name="repassword" placeholder="Repassword" class="form-control" required> -->
                            <input type="password" name="password_two" placeholder="Verify Password" class="form-control"  pattern="^\S{6,}$"
                            onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');"
                            placeholder="Verify Password" required>
                        </div>                      

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel"  name="phone" placeholder="0123456789" class="form-control" pattern="[0-9]{10}" required>                          
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="abc@gmail.com" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2>Login here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" name="password"  class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>

                <div class="col-md-6 login-right">
                    <h2>Register here</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html> -->
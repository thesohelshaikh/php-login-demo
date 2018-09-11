<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <header class="container">
        <h1 class="pt-2">User Login System</h1>
    </header>
    <main class="container align-items-center">

        <form class="py-5 text-center">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="pwd" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="custom-control custom-checkbox py-2">
                <input type="checkbox" class="custom-control-input" id="customControlAutosizing" required>
                <label class="custom-control-label" for="customControlAutosizing">Accept terms and conditions</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="signup.php">Sign up</a>
        </form>

    </main>
</body>

</html>
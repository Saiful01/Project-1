<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <br>
    <h3 class="text-center">Registration Form</h3>
    <hr>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <header class="card-header">
                    <a href="/user/login" class="float-right btn btn-outline-primary mt-1">Log in</a>
                    <h4 class="card-title mt-2">Sign up</h4>
                    @include('include.message')
                </header>
                <article class="card-body">
                    <form method="post" action="/registration/save">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-row">
                            <div class="col form-group">
                                <label>First name </label>
                                <input type="text" name="first_name" class="form-control" placeholder="">
                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>Last name</label>
                                <input type="text" name="last_name" class="form-control" placeholder=" ">
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->
                        <div class="form-group">
                            <label>Organization Name</label>
                            <input type="text" class="form-control" name="organization_name" placeholder="">
                        </div> <!-- form-group end.// -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>City</label>
                                <input type="text" name="city" class="form-control">
                            </div> <!-- form-group end.// -->
                            <div class="form-group col-md-6">
                                <label>Street</label>
                                <input type="text" name="street" class="form-control">


                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row.// -->
                        <div class="form-row">
                            <div class="col form-group">
                                <label>Email </label>
                                <input type="email" name="email" class="form-control" placeholder="">
                            </div> <!-- form-group end.// -->
                            <div class="col form-group">
                                <label>Phone</label>
                                <input type="number" name="phone" class="form-control" placeholder=" ">
                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row end.// -->


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>password</label>
                                <input class="form-control" name="password" id="password" type="password">
                            </div> <!-- form-group end.// -->
                            <div class="form-group col-md-6">
                                <label>Confirm password</label>
                                <input class="form-control" name="confirm_password" type="password"
                                       id="confirm_password">

                            </div> <!-- form-group end.// -->
                        </div> <!-- form-row.// -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Register</button>
                        </div> <!-- form-group// -->

                    </form>
                </article> <!-- card-body end .// -->
                <div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
            </div> <!-- card.// -->
        </div> <!-- col.//-->

    </div> <!-- row.//-->
</div>





</body>
<script>
    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
            $('#message').html('Matching').css('color', 'green');
        } else
            $('#message').html('Not Matching').css('color', 'red');
    });
</script>

</html>

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
    <h3 class="text-center">Login Form</h3>
    <hr>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <header class="card-header">
                    <a href="/" class="float-right btn btn-outline-primary mt-1"> Sign up</a>
                    <h4 class="card-title mt-2">Log in</h4>
                    @include('include.message')
                </header>
                <article class="card-body">
                    <form method="post" action="/user/loginCheck">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="">
                        </div> <!-- form-group end.// -->
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="">
                        </div> <!-- form-group end.// -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Login</button>
                        </div> <!-- form-group// -->

                    </form>
                </article> <!-- card-body end .// -->
            </div> <!-- card.// -->
        </div> <!-- col.//-->

    </div> <!-- row.//-->
</div>





</body>


</html>

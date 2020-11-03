<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script>
        var app = angular.module('myApp', []);

        console.log("My App Initiated")
    </script>
</head>
<body ng-app="myApp">
<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Create License</a>
                </li>

                <li class="nav-item float-right">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->first_name}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/user/logout">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="container" ng-controller="showController">

    <div class="row">


        <p ng-bind="name"></p>
        <p ng-bind="email"></p>


    </div>
    <div class="row">
        <div class="col-md-6 mx-auto" id="license">
            <h6 class="mx-auto"> Create License</h6>
            <div class="row">
                <div class="col-md-4">
                    <lebel>Client Id</lebel>
                </div>
                <div class="col-md-8">
                    <input type="number" ng-change="nameShow(id)"
                           ng-model="id">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <lebel>License Key</lebel>
                </div>
                <div class="col-md-8">
                    <input type="text" name="license_key">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-8">
                    <a class="btn btn-info" href="">Save</a>
                </div>
            </div>


        </div>
    </div>
</div>


</body>

<script>

    app.controller('showController', function ($scope, $http) {
        $scope.showDetails = function (id) {


            $http.get("/client/" + id)
                .then(function (response) {
                    // $scope.myWelcome = response.data;
                    //console.log(response.data);
                    $scope.sub_categories = response.data;

                })
        };


        $scope.nameShow = function (id) {




            $http.get("/user/" + id)
                .then(function (response) {
                    // $scope.myWelcome = response.data;
                    //console.log(response.data);
                    $scope.user_data = response.data;


                    $scope.name= $scope.user_data.email;
                    $scope.email= $scope.user_data.email;

                    console.log( $scope.user_data);

                })

        }


    });

</script>


</html>

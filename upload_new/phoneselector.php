<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="./src/css/style.css">
    <script src="./src/js/script.js"></script>


    <link href="css/themify-icons.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">

    <!-- End -->


    <!-- Theme css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet" id="color_theme">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.js" type="text/javascript"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.28//angular-route.min.js"></script>

</head>

<body class="hero-anime" ng-app="myApp" ng-controller="myController">

    <!-- Header  -->
    <?php require_once('./layout/header.php'); ?>
    <!-- Header End -->




    <br><br><br><br><br><br><br>

    <section>
        <h1 class="text-center grey "><span class="green-color"> Select</span> Your Device</h1>
        <br><br><br>
        <div class="container">

            <div class="row">

                <div class="col-3 align-self-center text-center compnay-logo">
                    <img src="images/iphone12.png" alt="" width="190px" height="auto">
                    <h6><br>iPhone 12</h6>
                </div>

                <div class="col-3 align-self-center text-center compnay-logo">
                    <img src="images/iphone12mini.png" alt="" width="190px" height="auto"><br>
                    <h6><br>iPhone 12 Mini</h6>
                </div>


                <div class="col-3 align-self-center text-center compnay-logo">
                    <img src="images/iphone12pro.png" alt="" width="190px" height="auto"><br>
                    <h6><br>iPhone 12 Pro</h6>
                </div>

                <div class="col-3 align-self-center text-center compnay-logo">
                    <img src="images/iphone12promax.png" alt="" width="190px" height="auto"><br>
                    <h6><br>iPhone 12 Pro Max</h6>
                </div>



            </div>
            <div class="row">

                <div class="col-3 align-self-center text-center compnay-logo">
                    <img src="images/iphone11.png" alt="" width="190px" height="auto"><br>
                    <h6>iPhone 11</h6>
                </div>

                <div class="col-3 align-self-center text-center compnay-logo">
                    <img src="images/iphone11pro.png" alt="" width="190px" height="auto"><br>
                    <h6>iPhone 11 Pro</h6>
                </div>


                <div class="col-3 col-3 align-self-center text-center compnay-logo">
                    <img src="images/iphone11promax.png" alt="" width="190px" height="auto"><br>
                    <h6>iPhone 11 Pro Max</h6>
                </div>

                <div class="col-3 col-3 align-self-center text-center compnay-logo">
                    <img src="images/iphonese2nd.png" alt="" width="190px" height="auto"><br>
                    <h6>iPhone SE (2nd Gen)</h6>
                </div>



            </div>

            <br><br><br>
            <center><a href="#" class="dark-bg btn button repair-button" onclick="history.back()">Go Back</a></center>

        </div>



    </section>


    <br>

    <br><br>

















    <!-- Footer -->

    <style>
        #footer {
            background-image: url(./images/gsm2-footer-bg.png);
            background-repeat: no-repeat;
            background-position: right bottom;
            padding-top: 5%;
            padding-bottom: 5%;
            ;
        }
    </style>

    <!-- Site footer -->
    <?php require_once('layout/footer.php');  ?>
    <!-- Footer End -->


    <script>
        var app = angular.module('myApp', []);
        app.controller('myController', function($scope, $http, $window, $location) {



            $scope.searchdevice = function() {

                if ($scope.devicename != "") {
                    $http.post(
                        "functions/user/findDevice.php", {
                            'devicename': $scope.devicename,
                        }
                    ).then(function(response) {
                        $scope.devicesfound = response.data;
                        console.log($scope.devicesfound);


                    });
                } else {
                    $scope.devicesfound = "";
                }
            }

            $scope.chech_eg = () => {
                $http.post(
                    "functions/user/findEgligibility.php", {
                        'zipcode': $scope.zip_code,
                    }
                ).then(function(response) {

                    console.log(response.data);


                });
            }


        });
        setTimeout(function() {
            $('#exampleModalCenter').modal();
        }, 2000);
    </script>








    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>







</body>

</html>
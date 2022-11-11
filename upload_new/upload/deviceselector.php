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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="hero-anime" ng-app="myApp" ng-controller="myController">

    <!-- Header  -->
    <?php require_once('./layout/header.php'); ?>

    <!-- Header End -->




    <br><br><br><br><br><br><br>

    <section>
        <h1 class="text-center grey "><span class="green-color"> Devices</span> Selector</h1>
        <br><br><br>
        <div class="container">
            <div class="row">

                <div class="col-3 align-self-center text-center compnay-logo">
                    <a href="phoneselector.php"> <img src="images/apple1.png" alt="" width="120px" height="auto"></a>
                    <h6><br>Apple</h6>
                </div>

                <div class="col-3 align-self-center text-center compnay-logo">
                    <img src="images/samsung1.png" alt="" width="120px" height="auto"><br>
                    <h6><br>Samsung</h6>
                </div>


                <div class="col-3 align-self-center text-center compnay-logo">
                    <img src="images/google1.png" alt="" width="120px" height="auto"><br>
                    <h6><br>Google</h6>
                </div>

                <div class="col-3 align-self-center text-center compnay-logo">
                    <img src="images/huawei1.png" alt="" width="120px" height="auto"><br>
                    <h6><br>Huawei</h6>
                </div>



            </div>
            <div class="row">

                <div class="col-3 align-self-center text-center compnay-logo">
                    <img src="images/sony1.png" alt="" width="120px" height="auto"><br>
                    <h6>Sony</h6>
                </div>

                <div class="col-3 align-self-center text-center compnay-logo">
                    <img src="images/oppo1.png" alt="" width="120px" height="auto"><br>
                    <h6>Oppo</h6>
                </div>


                <div class="col-3">

                </div>

                <div class="col-3">

                </div>



            </div>

        </div>



    </section>
    <section>

        <div class="container sec1-dmush3" style="padding-top:85px;padding-bottom:95px ;">
            <h1 class="text-center grey"> <span class="green-color">Frequent </span>
                Booked Repairs </h1>
            <br>
            <br>
            <div class="row">



                <div class="col-4">
                    <div class="card card-repair" style="width: 18rem;">
                        <img class="card-img-top" src="https://apps.tsn.go.tz/public/uploads/adcf136b6856fd92d3078569b84f55e5.jpg" alt="Card image cap">
                        <div class="card-body bg-grey">
                            <br>
                            <h6 class="green-color">Price 200</h6>
                            <p class="card-text white-color">Mobile Screen Repair.</p>
                        </div>
                    </div>
                </div>


                <div class="col-4">
                    <div class="card card-repair" style="width: 18rem;">
                        <img class="card-img-top" src="https://apps.tsn.go.tz/public/uploads/adcf136b6856fd92d3078569b84f55e5.jpg" alt="Card image cap">
                        <div class="card-body bg-grey">
                            <br>
                            <h6 class="green-color">Price 200</h6>
                            <p class="card-text white-color">Mobile Screen Repair.</p>
                        </div>
                    </div>
                </div>


                <div class="col-4">
                    <div class="card card-repair" style="width: 18rem;">
                        <img class="card-img-top" src="https://apps.tsn.go.tz/public/uploads/adcf136b6856fd92d3078569b84f55e5.jpg" alt="Card image cap">
                        <div class="card-body bg-grey">
                            <br>
                            <h6 class="green-color">Price 200</h6>
                            <p class="card-text white-color">Mobile Screen Repair.</p>
                        </div>
                    </div>
                </div>




            </div>
        </div>


    </section>






















    <!-- Footer -->

    <!-- <style>
    #footer {
        background-image: url(./images/gsm2-footer-bg.png);
        background-repeat: no-repeat;
        background-position: right bottom;
        padding-top: 5%;
        padding-bottom: 5%;
        ;
    }
    </style> -->

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
                    if (response.data == "1") {

                        swal("You are eligible or on-site repair ", "", "success");

                    } else if (response.data == "2") {

                        swal("You are eligible for pickup/drop off", "", "success");

                    } else if (response.data == "3") {

                        swal("You are eligible for our mail in service ", "", "success");

                    } else {
                        swal("Egligibility Not Found", "", "error");
                    }


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


    <!-- 
    <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content subscribe_form">

                <div class="modal-body" class="subscribe_form">


                    <br><br><br><br>
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <H2 class="white-color text-center"> <span class="green-color"> Subscribe</span> for 10%
                                    off </H2>
                                <p class="white-color">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,

                                </p>
                                <form action="">

                                    <input type="text" class="input_field">

                                    <input type="submit" class="button" value="Subscribe">

                                </form>

                                <br><br><br><br>
                            </div>

                        </div>

                    </div>



                </div>

            </div>
        </div>
    </div>
 -->



</body>

</html>
<?php
if (isset($_GET['device'])) {
    $device = $_GET['device'];
} else {
    header('Location: index.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="./src/css/style.css">



    <link href="css/themify-icons.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">

    <!-- End -->


    <!-- Theme css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet" id="color_theme">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/EaselPlugin.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .card-header {
            padding: 5px 5px !important;
            margin-bottom: 0;

            border-bottom: 0px solid rgba(0, 0, 0, .125);
        }

        .card {
            border: 0px solid black;
        }
    </style>
</head>

<body class="hero-anime" ng-app="myApp" ng-controller="myController" onload="web_loader()" ng-init="onLoad()">
    <div id="web-loader"></div>
    <!-- Header  -->

    <?php require_once('./layout/header.php'); ?>

    <!-- Header End -->


    <div class="container white-bg" style="padding-top: 150px; padding-bottom: 150px;">
        <div class="row">
            <div class="col">
                <img src="{{deviceDetail.device_img}}" alt="Lamp" width="500" style="text-align: center;">
            </div>
            <div class="col">
                <h2 class="text-left dark-color-text">{{deviceDetail.device_name}}</h2>
                <form id="select-service-form" ng-submit="addToCart()">
                    <p>
                        <button class="btn btn-block btn-primary box-shadow repair-field white-bg text-left" style="border: none; color:#1b1b1b;" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                           Select Services
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <div class="form-check" ng-repeat="service in services">
                                <input type="checkbox" class="form-check-input" id="service_checkbox_{{service.service_id}}" ng-click="ShowHide(service.service_id,service.service_cost)">
                                <label class="form-check-label" for="service_checkbox_{{service.service_id}}">{{service.service_name}} ${{service.service_cost}}</label>

                            </div>
                        </div>
                    </div>
                    <br>
                    <h5>Total ${{TotalCost}}</h5>
                    <br>
                    <button type="submit" class="btn button repair-button">PROCEED</button>
                </form>

                <form id="select-service-form2" ng-submit="chech_eg()" style="display:none;">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Zipcode</label>
                            <input type="text" class="form-control box-shadow repair-field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="zipcode" ng-model="zipcode">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <button type="submit" class="btn button repair-button">CHECK</button>
                        <!-- <center><button type="submit" class="button second-second-anim" style="transform: translate(0px, 0px); opacity: 1;">Check</a></center> -->
                    </form>
<br>
                    <div class="container third-second-anim" style="opacity: 1;">
            <div class="row">

                <div id="onsite" class="col-5 green-bg text-center option-zipcode" style="display: none;">
                    <i aria-hidden="true" class="fa fa-map-marker"></i>
                    <h6>OnSite Repair</h6>
                    <p>Device repair on your location, house</p>
                    <a href="#" class="dark-bg btn button repair-button">Select</a>
                </div>

                <div id="pickup" class="col-5 green-bg text-center option-zipcode" style="display: none;">
                    <i aria-hidden="true" class="fas fa-truck-pickup"></i>
                    <h6>Pickup Repair</h6>
                    <p>Device will be pick and droped from your location</p>
                    <a href="#" class="dark-bg btn button repair-button">Select</a>
                </div>


                <div id="postal" class="col-5 green-bg text-center option-zipcode" style="display: none;">
                    <i aria-hidden="true" class="fas fa-mail-bulk"></i>
                    <h6>Postal Repair</h6>
                    <p>Deliver mobile through envolope sent from us.</p>
                    <a href="#" class="dark-bg btn button repair-button">Select</a>
                </div>




            </div>
        </div>
            </div>
        </div>


    </div>



<!-- 
    <section id="findzip" style=" padding-top:100px; padding-bottom:145px; background-color: #1b1b1b;">

        <div class="container sec1-dmush1">
            <div class="row">
                <div class="col align-self-center">
                    <h1 class="text-center  second-second-anim " style="transform: translate(0px, 0px); opacity: 1;"> <span class="green-color">Enter</span>
                        Zipcode </h1><br>
                    <p class="second-second-anim" style="color: rgb(255, 255, 255); transform: translate(0px, 0px); opacity: 1;">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.</p><br>
                    <form ng-submit="chech_eg()">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-white">Zipcode</label>
                            <input type="text" class="form-control box-shadow repair-field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="zipcode" ng-model="zipcode">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <button type="submit" class="button second-second-anim" style="transform: translate(0px, 0px); opacity: 1; border:none;">Check</a>
                    </form>
                    
                </div>
            </div>
        </div>

        <br>
        <br>

        <br>
        <div class="container third-second-anim" style="opacity: 1;">
            <div class="row justify-content-center">

                <div id="onsite" class="col-3 green-bg text-center option-zipcode" style="display: none;">
                    <i aria-hidden="true" class="fa fa-map-marker"></i>
                    <h6>OnSite Repair</h6>
                    <p>Device repair on your location, house</p>
                    <a href="#" class="dark-bg btn button repair-button">Select</a>
                </div>

                <div id="pickup" class="col-3 green-bg text-center option-zipcode" style="display: none;">
                    <i aria-hidden="true" class="fas fa-truck-pickup"></i>
                    <h6>Pickup Repair</h6>
                    <p>Device will be pick and droped from your location</p>
                    <a href="#" class="dark-bg btn button repair-button">Select</a>
                </div>


                <div id="postal" class="col-3 green-bg text-center option-zipcode" style="display: none;">
                    <i aria-hidden="true" class="fas fa-mail-bulk"></i>
                    <h6>Postal Repair</h6>
                    <p>Deliver mobile through envolope sent from us.</p>
                    <a href="#" class="dark-bg btn button repair-button">Select</a>
                </div>




            </div>
        </div>

    </section> -->


    <!-- Site footer -->
    <?php require_once('layout/footer.php');  ?>
    <!-- Footer End -->



    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });

        var app = angular.module('myApp', []);
        app.controller('myController', function($scope, $http, $window, $location) {
            $scope.TotalCost = 0;
            $scope.cartArray = [];

            $scope.onLoad = () => {
                console.log("gezfsdf")
                $scope.getDeviceDetails();


            }

            $scope.addToCart = (service_id, service_cost, ) => {
                //$scope.chech_eg();

                // $http.post(
                //     "functions/user/addToCart.php", {
                //         'cart': $scope.cartArray,
                //     }
                // ).then(function(response) {
                //     console.log(response.data);
                //     // $scope.services = response.data;
                // });

                // $('html, body').animate({
                //     scrollTop: $("#findzip").offset().top
                // }, 2000);

                document.getElementById('select-service-form').style.display = 'none'; //
                document.getElementById('select-service-form2').style.display = 'block'; //


            }

            $scope.getDeviceDetails = () => {
                $http.post(
                    "functions/user/deviceDetails.php", {
                        'device': "<?php echo $device; ?>",
                    }
                ).then(function(response) {
                    console.log(response.data);
                    $scope.deviceDetail = response.data[0];
                    var id = response.data[0].device_id;
                    $scope.getDeviceServices(id);
                });
            }

            $scope.chech_eg = () => {
                $http.post(
                    "functions/user/findEgligibility.php", {
                        'zipcode': $scope.zipcode,
                    }
                ).then(function(response) {

                    console.log(response.data);

                    if (response.data == "1") {
                        document.getElementById('postal').style.display = 'none';
                        // swal("You are eligible or on-site repair ", "", "success");
                        document.getElementById('onsite').style.display = 'block';
                        document.getElementById('pickup').style.display = 'block';

                    } else if (response.data == "2") {
                        document.getElementById('postal').style.display = 'none';
                        // swal("You are eligible for pickup/drop off", "", "success");
                        document.getElementById('onsite').style.display = 'block';
                        document.getElementById('pickup').style.display = 'block';

                    } else if (response.data == "3") {
                        document.getElementById('onsite').style.display = 'none';
                        document.getElementById('pickup').style.display = 'none';
                        //swal("You are eligible for our mail in service ", "", "success");
                        
                        document.getElementById('postal').style.display = 'block';

                        

                    } else {
                        swal("Egligibility Not Found", "", "error");
                    }


                });

            }


            $scope.ShowHide = function(service_id, cost) {
                //If DIV is visible it will be hidden and vice versa.
                console.log(service_id, "----", cost);
                let costs = parseInt(cost);
                let box = `service_checkbox_${service_id}`;
                if (document.getElementById(box).checked) {

                    let cartItem = {
                        'service_id': service_id,
                        'cost': costs
                    };
                    $scope.cartArray.push(cartItem);

                    console.log("checked");
                    console.log($scope.cartArray);
                } else {
                    console.log($scope.cartArray.length);
                    let arrayLength = $scope.cartArray.length;
                    for (i = 0; arrayLength > i; i++) {
                        console.log($scope.cartArray[i].service_id);
                        if ($scope.cartArray[i].service_id == service_id) {
                            $scope.cartArray.splice(i, 1);
                        }
                    }

                }
                console.log("cart")
                console.log($scope.cartArray);
                $scope.calculateTotal();
            }
            $scope.calculateTotal = () => {
                let arrayLength = $scope.cartArray.length;
                $scope.TotalCost = 0;
                for (i = 0; arrayLength > i; i++) {
                    $scope.TotalCost = $scope.TotalCost + $scope.cartArray[i].cost;
                }
            }



            $scope.getDeviceServices = (id) => {

                $http.post(
                    "functions/user/getDeviceServices.php", {
                        'device_id': id,
                    }
                ).then(function(response) {
                    console.log(response.data);
                    $scope.services = response.data;



                });
            }


        });



        var isOpen = 0;


        $(window).scroll(function() {
            var wh = $(window).height() - 50;
            if ($(window).scrollTop() > $('.sec1-dmush5').offset().top - wh) {
                $('.sec1-dmush5').addClass('scale-in-center');
                if (isOpen == 0) {
                    isOpen = 1;
                    $('#exampleModalCenter').modal();
                }

            }
        });


        const web_loader = () => {
            var preloader = document.getElementById('web-loader')
            preloader.style.display = "none";
        }
    </script>








    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- <script src="./src/js/script.js"></script> -->






</body>

</html>
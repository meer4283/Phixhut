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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.02.min.css">

    <style>
        .autoComplete_wrapper {
            display: block !important;
            position: relative;
        }

        .autoComplete_wrapper>input {
            width: 100% !important;
        }
    </style>

</head>

<body class="hero-anime" ng-app="myApp" ng-controller="myController" onload="web_loader()">
    <div id="web-loader"></div>
    <!-- Header  -->

    <?php require_once('./layout/header.php'); ?>

    <!-- Header End -->
    <section id="home" class="home-banner theme-bg  kenburns-top bg-effect">
        <div id="particles_effect" class="particles-effect"></div>
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="headerBox">
                    <div class="rotate-content">
                        <h1>So,You've smashed your device..</h1>
                        <form autocomplete="off" ng-submit="formSubmit()">
                            <div class="form-group">
                                <label>Type your device name</label>

                                <div class="autoComplete_wrapper">
                                    <input id="autoComplete" class="autoComplete_result" type="search" dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off">
                                </div>
                                <!-- 
                                <input autocomplete="off" type="search" name="name" class="form-control" placeholder="e.g Iphone X" ng-model="devicename" ng-keyup="searchdevice($event)" autocomplete="false" ng-keydown="myFunc($event)" ng-blur="searchRemove()">

                                <div id="search_div" class="search_div_box">
                                    <span class="search_feed_span" ng-repeat="device in devicesfound" id="{{device.slug}}">
                                
                                        <img src="{{device.device_img}}" height="20px" width="auto" alt="" style="display:inline-block">
                                        <a tabindex="-1" href="repair.php?device={{device.slug}}" class="search_feed ">{{device.device_name}} </a>
                                    </span>
                                </div> -->


                                <!-- <input autocomplete="off" type="search" name="name" oninput='onInput()' class="form-control" placeholder="e.g Iphone X" ng-model="devicename" id="search-input" ng-keyup="searchdevice()" autocomplete="false" list="brow">
                                <datalist id="brow" ng-model="device_name_slug">
                                    <option value="{{device.device_name}}" ng-repeat="device in devicesfound">

                                </datalist> -->



                            </div>
                            <p>If you don't know what device you have,You can use our image selector</p>

                            <center>
                                <a href="deviceselector.php" style="padding:10px 20px 10px 20px !important;" class="button text-center btn-sm">Device Selector</a>
                            </center>

                        </form>
                    </div>

                </div>

            </div> <!-- row -->

        </div>
    </section>



    <section style=" padding-top:220px; padding-bottom:145px; background-color: #1b1b1b;">

        <div class="container sec1-dmush1">
            <div class="row">
                <div class="col align-self-start">
                    <img id="second-section-mobile-img" src="./images/ipad.png" alt="">
                </div>
                <div class="col align-self-center">
                    <h1 class="text-left  second-second-anim "> <span class="green-color"> About</span>
                        Us </h1><br>
                    <p class="second-second-anim" style="color:#fff;">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse
                        ctetur adipisicing elit, sed do eiusmod.</p><br>
                    <a href="#" class="button second-second-anim">About Us</a>
                </div>
            </div>
        </div>

        <br>
        <br>


        <h1 class="third-second-anim">Why Choose Us ?</h1>
        <br>
        <div class="container third-second-anim">
            <div class="row">
                <div class="col-1">
                    <img src="./images/gsm2-step-1.png" alt="">
                </div>
                <div class="col-3">
                    <h6 class="white-color">Quantum porter vito</h6>
                    <p>Lorem ipsum dolor mit samet</p>
                </div>

                <div class="col-1">
                    <img src="./images/gsm2-step-1.png" alt="">
                </div>
                <div class="col-3">
                    <h6 class="white-color">Quantum porter vito</h6>
                    <p>Lorem ipsum dolor mit samet</p>
                </div>


                <div class="col-1">
                    <img src="./images/gsm2-step-1.png" alt="">
                </div>
                <div class="col-3">
                    <h6 class="white-color">Quantum porter vito</h6>
                    <p>Lorem ipsum dolor mit samet</p>
                </div>


            </div>
        </div>

    </section>

    <style>
        .card-image {
            position: relative;
        }

        .image-overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 68%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background: rgba(130, 169, 49, 0.3);
        }

        .card:hover .image-overlay {
            opacity: 1;
        }
    </style>


    <section>

        <div class="container sec1-dmush2" style="padding-top:85px;padding-bottom:95px ;">
            <h1 class="text-center grey"> <span class="green-color"> Featured </span>
                Products </h1>
            <br>
            <br>
            <div class="row">



                <div class="col-4 fourth-section-first-card-anim">
                    <div class="card card-repair" style="width: 18rem;">
                        <img class="card-img-top" src="images/featured.jpg" alt="Card image cap">
                        <div class="image-overlay"></div>
                        <div class="card-body bg-grey">
                            <br>
                            <h6 class="green-color" style="z-index: 99;">Price 200</h6>
                            <p class="card-text white-color">Mobile Screen Repair.</p>
                        </div>
                    </div>
                </div>


                <div class="col-4 fourth-section-second-card-anim">
                    <div class="card card-repair" style="width: 18rem;">
                        <img class="card-img-top" src="images/featured.jpg" alt="Card image cap">
                        <div class="image-overlay"></div>
                        <div class="card-body bg-grey">
                            <br>
                            <h6 class="green-color">Price 200</h6>
                            <p class="card-text white-color">Mobile Screen Repair.</p>
                        </div>
                    </div>
                </div>


                <div class="col-4 fourth-section-third-card-anim">
                    <div class="card card-repair" style="width: 18rem;">
                        <img class="card-img-top" src="images/featured.jpg" alt="Card image cap">
                        <div class="image-overlay"></div>
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



    <!-- Blog SEction -->
    <style>
        .snip1518 {

            position: relative;
            overflow: hidden;
            margin: 10px;
            min-width: 250px;
            max-width: 100%;
            display: inline-block;
            background-color: #ffffff;
            color: #2B2B2B;
            text-align: center;
            font-size: 16px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
        }

        .snip1518 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .snip1518 img {
            max-width: 100%;
            vertical-align: top;
            position: relative;
        }

        .snip1518 figcaption {
            padding: 10%;
            padding-bottom: calc(25%);
            background-color: #ffffff;
        }

        .snip1518 h3 {

            text-transform: uppercase;
            font-size: 20px;
            font-weight: 400;
            line-height: 24px;
            margin: 3px 0;
        }

        .snip1518 h5 {
            font-weight: 400;
            margin: 0;
            text-transform: uppercase;
            color: #888;
            letter-spacing: 1px;
        }

        .snip1518 footer {
            border-top: 1px solid rgba(0, 0, 0, 0.065);
            padding: 0 20px;
            font-size: 13px;
            line-height: 50px;
            text-align: left;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .snip1518 footer .icons {
            position: absolute;
            right: 20px;
            top: 0;
        }

        .snip1518 footer .icons>div {
            display: inline-block;
            margin-left: 8px;
        }

        .snip1518 footer .icons i {
            display: inline-block;
            margin-right: 5px;
            font-size: 1em;
        }

        .snip1518 a {
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            position: absolute;
            z-index: 1;
        }
    </style>


    <section class="comb" style="padding-bottom:75px
                        
                        ;padding-top:55px;padding-bottom:75px ;
                        background-color: #82a930c9;
                         background-image: url('./images/GPlay.svg'); 
                         background-attachment: fixed; background-position:
                          center; background-repeat: no-repeat; 
                          background-size: cover;  
                           ">

        <div class="container sec1-dmush3">

            <div class="container">
                <h1 class="text-center grey"> <span class="white-color"> Most Book </span>
                    Service </h1>
                <br>
                <br>

                <div class="row001">
                    <div class="column001 fifth-section-anim">
                        <div class="card001">
                            <a href="most-booked.php?device=samsung-note-10&order=2">
                                <img src="./images/Combo.png" height="auto" width="300px">
                                <h3 style="color:#313131;">Screen Replacement + Ear Piece Repair (Combo)</h3>
                                <p style="color:red;"><strong>Special Offer*<strong></p>
                                <p style="color:#313131;">Price: £329.00</p>
                            </a>
                        </div>
                    </div>
                    <div class="column001 fifth-section-anim">
                        <div class="card001">
                            <a href="most-booked.php?device=samsung-note-10&order=2">
                                <img src="./images/Combo.png" height="auto" width="300px">
                                <h3 style="color:#313131;">Screen Replacement + Ear Piece Repair (Combo)</h3>
                                <p style="color:red;"><strong>Special Offer*<strong></p>
                                <p style="color:#313131;">Price: £329.00</p>
                            </a>
                        </div>
                    </div>
                    <div class="column001 fifth-section-anim">
                        <div class="card001">
                            <a href="most-booked.php?device=samsung-note-10&order=2">
                                <img src="./images/Combo.png" height="auto" width="300px">
                                <h3 style="color:#313131;">Screen Replacement + Ear Piece Repair (Combo)</h3>
                                <p style="color:red;"><strong>Special Offer*<strong></p>
                                <p style="color:#313131;">Price: £329.00</p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>





    </section>

    <style>
        .portfolio {
            display: flex;
            flex-wrap: wrap;
            min-width: 320px;
        }

        .portfolio h2 {
            flex-basis: 100%;
            text-align: center;
            margin: 50px auto 30px;
            text-transform: uppercase;

            letter-spacing: 2px;
            color: #111;
        }

        .card {
            width: 25%;
            overflow: hidden;
            position: relative;
        }

        .card .content {
            z-index: 2;
            width: 100%;
            position: absolute;
            bottom: -104px !important;
            transition: all 0.7s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
            min-height: 100px;
            background: #111;
        }

        .card .image {
            z-index: 1;
            height: 100%;
        }

        .card img {
            height: 100%;
            width: 100%;
            transition: all 0.5s ease;
            transform: scale(1.2);
        }

        .card:hover .content {
            bottom: 0px;
            color: #fff;
        }

        .card:hover .image img {
            transform: scale(1);
        }

        .card .content span:first-child {
            text-transform: uppercase;
            margin-bottom: 10px;
            font-weight: 700;
            letter-spacing: 1px;
            text-align: center;
            color: #fff;
            font-size: 16px;
        }

        .card .content span:last-child {
            font-size: 14px;
            color: #18cfab;
            text-align: center;
            font-weight: 700;
        }


        @media screen and (max-width: 768px) {
            .card {
                width: 50%;
            }

            .card .content {
                bottom: 0;
            }
        }

        @media screen and (max-width: 480px) {
            .card {
                width: 100%;
            }
        }
    </style>





    <div class="portfolio sec1-dmush5">
        <h2 class="grey"><span class="green-color"><strong>OUR </strong></span><strong>GALLERY</strong></h2>
        <a href="#" class="card">
            <div class="content">
                <span class="title">Web Design</span>
                <span class="category">Mobile / Design / Rebranding</span>
            </div>
            <div class="image">
                <img src="https://images.unsplash.com/photo-1509395176047-4a66953fd231?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" alt="" />
            </div>
        </a>

        <a href="#" class="card">
            <div class="content">
                <span class="title">UX Design</span>
                <span class="category">UX / UI / Research </span>
            </div>
            <div class="image">
                <img src="https://images.unsplash.com/photo-1545235617-9465d2a55698?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" alt="" />
            </div>
        </a>

        <a href="#" class="card">
            <div class="content">
                <span class="title">Concepts</span>
                <span class="category">Design / Creative</span>
            </div>
            <div class="image">
                <img src="https://images.unsplash.com/photo-1553531888-a5892402adce?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" alt="" />
            </div>
        </a>

        <a href="#" class="card">
            <div class="content">
                <span class="title">Creative & Cool</span>
                <span class="category">Design / Food</span>
            </div>
            <div class="image">
                <img src="https://images.unsplash.com/photo-1484980859177-5ac1249fda6f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1684&q=80" alt="" />
            </div>
        </a>

        <a href="#" class="card">
            <div class="content">
                <span class="title">AR-VR</span>
                <span class="category">VR / AR / Creative</span>
            </div>
            <div class="image">
                <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1398&q=80" alt="" />
            </div>
        </a>

        <a href="#" class="card">
            <div class="content">
                <span class="title">Logo</span>
                <span class="category">Design / Logo / Clothing</span>
            </div>
            <div class="image">
                <img src="https://images.unsplash.com/photo-1600609842388-3e2ed2a1454a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" alt="" />
            </div>
        </a>

        <a href="#" class="card">
            <div class="content">
                <span class="title">Art</span>
                <span class="category">Drawing / Painting / Abstract</span>
            </div>
            <div class="image">
                <img src="https://images.unsplash.com/photo-1544273677-c433136021d4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" alt="" />
            </div>
        </a>

        <a href="#" class="card">
            <div class="content">
                <span class="title">Native Apps</span>
                <span class="category">Coding / Mobile </span>
            </div>
            <div class="image">
                <img src="https://images.unsplash.com/photo-1551650992-ee4fd47df41f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1400&q=80" alt="" />
            </div>
        </a>

    </div>



    <section style="padding-left:5%;padding-right:5%;background-image:url(./images/gsm2-cta-bg-pattern.png);background-repeat:repeat;background-position:left top;">
        <div class="container-xl sec1-dmush4">
            <div class="row">
                <div class="col sixth-section-first-col">
                    <img src="./images/gsm2-cta-laptop.png" alt="">
                </div>
                <div class="col align-self-center sixth-section-second-col">
                    <h2 class="text-center white-color"> <span class="green-color">Contact </span>us if you want
                        to repair your
                        device really fast</h2>
                </div>
                <div class="col align-self-center text-center sixth-section-third-col">
                    <h2 class="text-center white-color">+34 544 444 444</h2><br>
                    <a href="#" class="button ">Write to us</a>
                </div>
            </div>
        </div>

    </section>



    <div class="section mcb-section mcb-section-dfr8riove sec1-dmush6" style="padding-top:55px;padding-bottom:75px;  padding-left:4%; padding-right:3%;">

        <center>
            <h2 class="grey"><span class="green-color"><strong>OUR </strong></span><strong>Blogs</strong></h2>
        </center>



        <div class="container-lg seveth-section-anim">
            <div class="row">
                <div class="col">
                    <figure class="snip1518">
                        <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample101.jpg" alt="sample101" /></div>
                        <figcaption>
                            <h5>Food</h5>
                            <h3>Everything has beauty, but not everyone sees it</h3>
                            <footer>
                                <div class="date">October 30, 2015</div>
                                <div class="icons">
                                    <div class="views"><i class="ion-eye"></i>2,907</div>
                                    <div class="love"><i class="ion-heart"></i>623</div>
                                </div>
                            </footer>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>



                <div class="col">
                    <figure class="snip1518" class="filter">
                        <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample99.jpg" alt="sample101" /></div>
                        <figcaption>
                            <h5>Food</h5>
                            <h3>Everything has beauty, but not everyone sees it</h3>
                            <footer>
                                <div class="date">October 30, 2015</div>
                                <div class="icons">
                                    <div class="views"><i class="ion-eye"></i>2,907</div>
                                    <div class="love"><i class="ion-heart"></i>623</div>
                                </div>
                            </footer>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>

                <style>
                    .snip1518 .image:before,
                    .snip1518 .image:after {

                        content: "";
                        width: 100%;
                        height: 58%;
                        background: rgba(130, 169, 49, 0.5);
                        position: absolute;
                        left: 0;
                        right: 0;
                        margin: auto;
                        transition: all 0.5s;
                        opacity: 0;
                        z-index: 999;
                    }

                    .snip1518 .image:before {

                        margin-top: -20%;
                    }

                    .snip1518 .image:after {

                        margin-bottom: -20%;
                    }

                    .snip1518:hover .image:before {
                        margin-top: 0%;
                        opacity: 0.8;
                    }

                    .snip1518:hover .image:after {
                        margin-bottom: 0%;
                        opacity: 0.8;

                    }
                </style>

                <div class="col">
                    <figure class="snip1518">
                        <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample107.jpg" alt="sample101" /></div>
                        <figcaption>
                            <h5>Food</h5>
                            <h3>Everything has beauty, but not everyone sees it</h3>
                            <footer>
                                <div class="date">October 30, 2015</div>
                                <div class="icons">
                                    <div class="views"><i class="ion-eye"></i>2,907</div>
                                    <div class="love"><i class="ion-heart"></i>623</div>
                                </div>
                            </footer>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>



            </div>
        </div>




    </div>




    <!-- Contact Section -->
    <!-- 
    <section
        style=" padding-top:55px;padding-bottom:75px ; background-image: url('./images/GPlay.svg');background-attachment: fixed;                       background-position: center;                        background-repeat: no-repeat;                        background-size: cover;">
        <div class="container">
            <h2 class="grey bold6"><span class="green-color">Contact</span> Us Now</h2>
            <div class="row">

                <div class="col-7">


                    <form>
                        <input type="text" class="form-control input-half">
                        <input type="text" class="form-control input-half">

                        <input type="text" class="form-control" style="margin-bottom: 10px;">

                        <textarea name="" id="" cols="80" rows="10" class="form-control"></textarea><br>
                        <input type="submit" value="Contact Now" class="button">
                    </form>
                </div>
                <div class="col-4">
                    <p class="black-color">Duis dignissim mi ut laoreet mollis. Nunc id tellus finibus, eleifend mi vel,
                        maximus justo.
                        Maecenas mi tortor, pellentesque a aliquam ut, fringilla eleifend lectus. Maecenas ultrices
                        tellus sit amet sem placerat tempor. Maecenas eget arcu venenatis, sagittis felis sit amet,
                        dictum nisl.

                        Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus
                        vitae vulputate elit. Fusce interdum justo quis libero ultricies laoreet.</p>
                </div>
            </div>

        </div>
    </section>
 -->


    <!-- Footer -->



    <!-- Site footer -->
    <?php require_once('layout/footer.php');  ?>
    <!-- Footer End -->


    <script>
        const shoow = (slug) => {
            window.location.href = `repair.php?device=${slug}`;
            console.log("sadasd")
        }
    </script>


    <script>
        var app = angular.module('myApp', []);
        app.controller('myController', function($scope, $http, $window, $location) {

            $scope.searchItemCount = 0;
            //document.getElementById("search_div").style.display = 'none';
            $scope.takeToRepair = () => {
                console.log("helllllo");
                var slug = convertToSlug($scope.device_name_slug);
                console.log(slug);
                window.location.href = `repair.php?device=${slug}`;
            }


            $scope.searchRemove = () => {
                //  $scope.hideResultDiv();
            }


            $scope.hideResultDiv = () => {
                document.getElementById("search_div").style.display = 'none';
            }
            $scope.showResultDiv = () => {
                document.getElementById("search_div").style.display = 'block';
            }

            $scope.myFunc = (event) => {
                console.log(event.key);
                if (event.key == 'ArrowDown' && $scope.devicesfound.length > 0) {

                    if ($scope.searchItemCount > 0) {
                        var idsec = `#${$scope.devicesfound[$scope.searchItemCount-1].slug}`;
                        $(idsec).removeClass("intro");
                    }
                    var id = `#${$scope.devicesfound[$scope.searchItemCount].slug}`;
                    console.log(id)
                    $(id).addClass("intro");
                    $scope.devicename = $scope.devicesfound[$scope.searchItemCount].device_name;

                    $scope.searchItemCount++;

                }
                if (event.key == 'ArrowUp' && $scope.devicesfound.length > 0) {
                    console.log('arrow up');
                    if ($scope.searchItemCount > 0) {
                        var idsec = `#${$scope.devicesfound[$scope.searchItemCount+1].slug}`;
                        console.log("idsec", idsec)
                        $(idsec).removeClass("intro");
                        var idsec = `#${$scope.devicesfound[$scope.searchItemCount].slug}`;
                        console.log("idsec", idsec)
                        $(idsec).removeClass("intro");
                        $scope.searchItemCount--;
                        console.log("$scope.searchItemCount", $scope.searchItemCount)
                        var id = `#${$scope.devicesfound[$scope.searchItemCount].slug}`;
                        console.log(id)
                        $(id).addClass("intro");
                        $scope.devicename = $scope.devicesfound[$scope.searchItemCount].device_name;

                    }

                }
            }


            $scope.searchdeviceResult = async (res) => {



                let response = await $http.post(
                    "functions/user/findDevice.php", {
                        'devicename': res,
                    }
                )
                console.log("data", response.data);
                return response.data;


            }

            $scope.searchdevice = async (event) => {
                $scope.showResultDiv();
                console.log("helllo");
                //    document.getElementById("loader").style.display = 'block';
                console.log(event.key);
                if (event.key != 'ArrowDown' && event.key != 'ArrowUp') {
                    if ($scope.devicename != "") {
                        await $http.post(
                            "functions/user/findDevice.php", {
                                'devicename': $scope.devicename,
                            }
                        ).then(function(response) {
                            //  document.getElementById("search_div").style.display = 'block';
                            $scope.devicesfound = response.data;
                            console.log($scope.devicesfound);

                            // setTimeout(function() {
                            //     autocomplete(document.getElementById("myInput"), $scope.devicesfound);

                            //    // document.getElementById("loader").style.display = 'none';
                            // }, 1500);

                            let divId = $scope.devicesfound[0].slug;


                        });
                    } else {
                        $scope.devicesfound = [];
                    }
                    $scope.searchItemCount = 0;
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


            function convertToSlug(string) {
                return string
                    .toString()
                    .trim()
                    .toLowerCase()
                    .replace(/\s+/g, "-")
                    .replace(/[^\w\-]+/g, "")
                    .replace(/\-\-+/g, "-")
                    .replace(/^-+/, "")
                    .replace(/-+$/, "");
            }


            $scope.formSubmit = () => {
                console.log($scope.devicename);

                var slug = convertToSlug($scope.devicename);
                console.log(slug);
                window.location.href = `repair.php?device=${slug}`;
            }

            $scope.shoow = () => {
                console.log("asasd")
            }

            $scope.counnnt = 0;
            const autoCompleteJS = new autoComplete({
                selector: "#autoComplete",
                placeHolder: "Search Devices...",
                data: {

                    src: async (query) => {
                        try {
                            // Fetch Data from external Source
                            var data = await $scope.searchdeviceResult(query);
                            // Data should be an array of `Objects` or `Strings`

                            return data;
                        } catch (error) {
                            return error;
                        }
                    },
                    // Data source 'Object' key to be searched
                    keys: ["device_name"]



                    // src: async (query) => {
                    //     var data = await $scope.searchdeviceResult(query);
                    //     result = {
                    //         results: data
                    //     }
                    //     console.log("array  ", data);
                    //     return data;
                    // },
                    // key: ['device_name'],

                },
                resultsList: {
                    tag: "ul",
                    id: "autoComplete_list",
                    class: "results_list",
                    destination: "#autoComplete",
                    position: "afterend",
                    maxResults: 5,
                    noResults: true,
                    element: (list, data) => {

                        list.setAttribute("data-parent", 'device_name');

                    },
                },
                resultItem: {
                    tag: "li",
                    class: "autoComplete_result",
                    element: (item, data) => {
                        console.log(item);
                        console.log("Data--->", data.value);
                        item.setAttribute("data-parent", data.value.device_name);
                        item.setAttribute("data-redirect", data.value.slug);
                        item.setAttribute("onclick", `shoow('${data.value.slug}')`);



                    },
                    highlight: "autoComplete_highlight",
                    selected: "autoComplete_selected",
                    submit: true,
                },
                events: {
                    input: {
                        selection: (event) => {
                            const selection = event.detail.selection.value.device_name;
                            const slug = event.detail.selection.value.slug;
                            autoCompleteJS.input.value = selection;
                            window.location.href = `repair.php?device=${slug}`;
                        }
                    },


                }
            });



        });




        // Open Subscribe Form Modal

        // setTimeout(function() {
        //     $('#exampleModalCenter').modal();
        // }, 000);

        var isOpen = 0;
        // $(window).scroll(function() {
        //     var wh = $(window).height() - 50;
        //     if ($(window).scrollTop() > $('.sec1-dmush1').offset().top - wh) {
        //         $('.sec1-dmush1').addClass('scale-in-center');
        //     }
        // });

        //         document.addEventListener('keydown', function(e) {
        //     switch (e.keyCode) {
        //         case 37:
        //             // alert('left');
        //             break;
        //         case 38:
        //         //    alert('up');
        //             break;
        //         case 39:
        //             // alert('right');
        //             break;
        //         case 40:
        //             // alert('down');
        //             $('#searchlist')[0].scrollIntoView();
        //             break;
        //     }
        // });

        // $(window).scroll(function() {
        //     var wh = $(window).height() - 50;
        //     if ($(window).scrollTop() > $('.sec1-dmush2').offset().top - wh) {
        //         $('.sec1-dmush2').addClass('scale-in-center');
        //     }
        // });

        // $(window).scroll(function() {
        //     var wh = $(window).height() - 50;
        //     if ($(window).scrollTop() > $('.sec1-dmush3').offset().top - wh) {
        //         $('.sec1-dmush3').addClass('scale-in-center');
        //     }
        // });

        // $(window).scroll(function() {
        //     var wh = $(window).height() - 50;
        //     if ($(window).scrollTop() > $('.sec1-dmush4').offset().top - wh) {
        //         $('.sec1-dmush4').addClass('fade-in-center');
        //     }
        // });

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

        // $(window).scroll(function() {
        //     var wh = $(window).height() - 50;
        //     if ($(window).scrollTop() > $('.sec1-dmush6').offset().top - wh) {
        //         $('.sec1-dmush6').addClass('scale-in-center');
        //     }
        // });

        // $(window).scroll(function() {
        //     var wh = $(window).height() - 50;
        //     if ($(window).scrollTop() > $('.sec1-dmush7').offset().top - wh) {
        //         $('.sec1-dmush7').addClass('scale-in-center');
        //     }
        // });

        const web_loader = () => {
            var preloader = document.getElementById('web-loader')
            preloader.style.display = "none";
        }

        function convertToSlug(string) {
            return string
                .toString()
                .trim()
                .toLowerCase()
                .replace(/\s+/g, "-")
                .replace(/[^\w\-]+/g, "")
                .replace(/\-\-+/g, "-")
                .replace(/^-+/, "")
                .replace(/-+$/, "");
        }
        const onInput = () => {
            var val = document.getElementById("search-input").value;
            var opts = document.getElementById('brow').childNodes;
            for (var i = 0; i < opts.length; i++) {
                if (opts[i].value === val) {
                    // An item was selected from the list!
                    // yourCallbackHere()
                    var slug = convertToSlug(opts[i].value);
                    console.log(slug);
                    window.location.href = `repair.php?device=${slug}`;
                    //  alert(opts[i].value);
                    break;
                }
            }
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>

    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="./src/js/script.js"></script>


    <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content subscribe_form">

                <div class="modal-header" style="border: none;">

                    <button type="button" style="padding-right:30px; padding-top:30px;" class="close" data-dismiss="modal" aria-label="Close">
                        <span style="color:white; font-size:50px" aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body" class="subscribe_form">



                    <br>
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




</body>

</html>
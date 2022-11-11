<style>
    #footer {
       
        background-repeat: no-repeat;
        background-position: right bottom;
        padding-top: 5%;
        padding-bottom: 5%;
        ;
    }
    </style>



<footer style="background-color:#363635;" id="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="./images/logo.png" alt="">
                </div>


                <div class="col">

                    <h4 style="color:white;">Subscribe</h4>
                    <form action="">

                        <input type="email" class="input_field" placeholder="Email Address">

                        <button class="repair-button button"> Subscribe</button>

                    </form>


                </div>
                <div class="col">
                    <h4 style="color:white;">Eligibility Checker</h4>

                    <form method="POST" ng-submit="chech_eg()">

                        <input type="text" class="input_field" placeholder="Enter Zipcode" ng-model="zip_code">

                        <button class="repair-button button">Check Now</button>

                    </form>

                </div>

                <div class="col">
                    <h4 style="color:white;">Subscribe</h4>

                    <p style="color: white !important;" class="bold1">
                        Nullam viverra consectetuer quisque
                        <br> cursus et, porttitor risus.
                    </p>
                    <p>
                        +44 21654154456
                        <br>
                        <a href="#">info@phixhut.com</a>
                    </p>
                </div>

            </div>
        </div>
    </footer>
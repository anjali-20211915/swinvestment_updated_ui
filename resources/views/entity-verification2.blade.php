@extends('addcss')
<!DOCTYPE html>
<html>
    <body>
        <header>

        </header>
        <section class="ind-main-bnr">
          
            <div class="container-fluid">
                <div class="row p-5">
                    <div class="col-sm-3 south1">
                        <img class="south" src="{{url('img/image 1.png')}}" alt="">
                    </div>
                    <!-- <div class="col-sm-2"></div> -->
                    <div class="col-sm-5 south3">
                        <nav class="navbar navbar-expand-sm">
              
                            <!-- Links -->
                            <ul class="navbar-nav ">
                              <li class="nav-item">
                                <a class="nav-link text-white" href="#">Products</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white " href="#">About Us</a>
                              </li>
                             
                            </ul>
                          
                          </nav>
                    </div>
                   
                    <div class="col-sm-4 button header_button py-3  ">
                        <button type="button" class="btn  text-white but  my-2 float-right buts">Sign up</button>
                        <button type="button" class="btn  float-right text-black-50 my-2 but bg-white buts2 mx-3 px-2">Sign In</button>
                    </div>
                </div>
               

            </div>
        </section>
        <section class="ev-content pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="ev-cont pb-4 ">
                            <h1>
                                Entity Verification
                            </h1>
                            <p>To complete the investment, please submit a valid government issued photo identification.(Driver's License, National Photo ID, Passport) You will be re-directed to source, our third party service provider to submit your ID for Verification.</p>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col"></div>
                    <div class="col-md-5 col-sm-12 text-center">
                        <div class="box-content left-box">
                            <h4>Identification</h4>
                            <p>Kindly verify your id John Doe, Click on the upload button below.</p>
                            <a href="{{url('identity-doc2')}}">Upload</a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="box-content right-box ">
                            <h4>Accreditation</h4>
                            <p>Hi, joe please verify your accreditation status, Click on the upload button below.</p>
                            <a href="{{url('identity-doc2')}}">Upload</a>
                        </div>
                    </div>
                    <div class="col"></div>

                </div>
            </div>
        </section>
        <footer class="pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{url('img/image 1.png')}}" alt="logo">
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-md-12 text-center footer-call">
                        <p>Call us at:<a href="tel:602 277 7368"> 602-277-7368</a></p>
                    </div>

                <div class="footer-btm-line"></div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="menu-footer text-center">
                            <ul>
                                <li>Why SWOG</li>
                                <li>Our Team</li>
                                <li>Strategic Partners</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="menu-footer text-center">
                            <ul>
                                <li>SFR Portfolio Funds</li>
                                <li>AZ Fund IV</li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="menu-footer text-center">
                            <ul>
                                <li>Individual</li>
                                <li>Institution</li>
                                <li>Advisors</li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="menu-footer text-center">
                            <ul>
                                <li>Blogs</li>
                                <li>Whitepaper</li>
                                <li>Track Record</li>
                                <li>Events & Webinars</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="row bg-light ">
            <div style="padding-top: 10px;" class=" col-md-6 d-flex justify-content-start align-item-center">
                <p class="foot-p1">©2023 SouthWest Opportunity Group.  All rights reserved.</p>
            </div>
            <div style="padding-top: 10px;" class="col-md-6 d-flex justify-content-end align-item-center">
               <p class="foot-p2">©2023 SouthWest Opportunity Group.  All rights reserved.</p>
            </div>
        </div>
    </body>
</html>
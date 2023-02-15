@extends('addcss')

<!DOCTYPE html>
<html>
    <body>
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
        <section class="main-heading pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="pg-heading text-center">
                            <h1>Upload Your Identity Document</h1>
                                <p>
                                    Let's get you verified
                                </p>
                        </div>
                    </div>
                </div>
                <div class="row text-center img-row">
                    <div class="col-md-3 blank-div">

                    </div>
                      <div class="col-md-3 left-img-div gi">
                        <img src="img/Shutterstock_1841819461 1.png">
                        <p>Your Government Issued ID</p>
                    </div>  
                    <div class="col-md-3 right-img-div gi">
                        <img src="img/Shutterstock_563924869 1.png">
                        <p>Your Smartphone</p>
                    </div>  
                    <div class="col-md-3 blank-div">

                    </div>

                </div>
                <div class="row text-center">
                        <div class="col-md-12">
                            <div class="get-started-btn">
                                <a href="{{url('verification2')}}">Get Started <span><img src="img/Vector.png"></span></a>
                            </div>
                           
                        </div>
                        <div class="col-md-12 mt-5">
                            <div class="powered text-center">
                                <p>Powered by <a href="#">Socure</a></p>
                            </div>

                        </div>
                </div>
                
           
            </div>
        </section>
        <footer class="pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="img/image 1.png" alt="logo">
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
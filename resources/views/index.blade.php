@extends('addcss')
<html>
    <body>
       
      
        <header>

        </header>
        <section class="ind-main-bnr">
          
            <div class="container-fluid ">
                <div class="row p-3">
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
                        <button type="button" class="btn  text-white  my-2 float-right buts">Sign up</button>
                        <button type="button" class="btn  float-right text-black-50 my-2 but bg-white buts2 mx-3 px-2">Sign In</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="ind-bnr-heading banner-contents">
                            <h1>Which of the following best describes you?</h1>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="two-images-mar-top">
            <div class="container">
                <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="left-image position-relative">
                                <a href="{{url('about')}}">
                                <div class="hov">
                                    
                                </div>
                                </a>
                            <a href="{{url('about')}}"><img class="ban-img" src="img/Rectangle 5.png" width="540"></a>
                            <i class="fa-sharp fa-solid fa-arrow-right g-arrow"></i>
                                <h3 class="ind">INDIVIDUAL INVESTOR</h3>
                                <p class="ind-2">I would like to invest on behalf of myself, family or my company.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="right-image position-relative">
                                <a href="{{url('finace-advisor?type=1')}}">
                                <div class="hov">
                                    
                                </div>
                                <a href="{{url('about')}}">
                                <a href="{{url('finace-advisor?type=1')}}"><img src="img/Rectangle 6.png" width="540"></a>
                                <i class="fa-sharp fa-solid fa-arrow-right g-arrow"></i>
                                <h3 class="ind">FINANCIAL ADVISOR</h3>
                                <p class="ind-2">I would like to invest on behalf of clients.</p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <section class="sign">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="sign-content">
                            <p>Already have an account? <a href="#">Sign in</a></p>
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
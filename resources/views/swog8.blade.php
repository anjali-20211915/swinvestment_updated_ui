
@extends('addcss')
<!DOCTYPE html>
<html lang="en">
   
<body>
    <body class="ind-main-bnr">
    <div class="container-fluid">
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
            <button type="button" class="btn  text-white but bg-primary my-2 float-right buts">Sign up</button>
            <button type="button" class="btn  float-right text-black-50 my-2 but bg-white buts2 mx-3 px-2">Sign In</button>
        </div>
    </div>
           

    </div>
        <section class="ind-main-bnr">
            <div class="container-fluid bg-light h-100">
                <div class="container bg-light  ">
                    <div class="row">
                        <img class="my-3 position-relative" src="img/swog2.png" alt="">
                        <!-- <p class="position-absolute invest"><span class="one">1</span> Select Investment</p> -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-hedaing2">
                                Tax Election
                            </h3>
                            <h6 class="">
                                As a non-US person, you may be subject to US tax filing and withholding requirements related to Effectively Connected income (ECI). If you elect to be 
                                treated as an ECI Investor you may mitigate the exposure. Please note that SWOG does nit offer individual tax advice and you should consult your tax
                                advisors regarding the tax consequences of your investment.
                            </h6>
                            <p>Do you elect to be treated as an ECI Investor?</p>
                        </div>
                    </div>

                    
                   
                    
                    <div class="row">
                        <div class="col-sm-12 swog-form my-form2">
                            <form action="{{url('swog9')}}" >
                             
                               
                                <div class="col-sm-6 my-5">
                                    <a type="button" class="btn  btn-outline-primary yes-btn">Yes</a>
                                    <a type="button" class="btn  no-btn mx-5 btn-outline-primary">No</a>
                                </div>
                           
                                <div class="row my-3">
                                    
                                    <div class="col-sm-3">
                                        <button style="padding: 10px 30px;" type="submit" class="btn my-5 btn-primary">Next <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </div>
                                 
                                   
                               
                             
                              
                                   
                                   
                                
                            </form>
                        </div>
                    </div>
                   
                   
                       
                    
                </div>
                
            </div>
        </section>
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
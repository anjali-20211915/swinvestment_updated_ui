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
                                Review and Sign Documents
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <p class="para1">
                                Please check each checkbox to indicate you have read and agree to all terms in the investment documents. You should keep a copy of these documents for your records.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 swog-form my-form2">
                            <form action="{{url('swog13')}}" >
                             
                                <div class="row">
                                    <div class="form-check">
                                        <input style="margin:0!important" checked type="checkbox" class="form-check-input" value="">
                                        <label style="font-size: 14px; font-weight: 900;" class="form-check-label mx-4 my-3">
                                            Click on this checkbox to select all or individually select each below.
                                        </label>
    
                                    </div>
                                 
                                </div>
                                <div class="row">
                                  
                                    <div class="col-sm-11">
                                        <div class="form-check">
                                            <input style="margin:0!important" type="checkbox" class="form-check-input" value="">
                                            <label style="font-size: 14px; font-weight: 900;" class="form-check-label mx-4 my-3">
                                                I have read and agree to the Electronic Communication and Signature Agreement
                                            </label>
        
                                        </div>
                                        <div class="form-check">
                                            <input style="margin:0!important" type="checkbox" class="form-check-input" value="">
                                            <label style="font-size: 14px; font-weight: 900;" class="form-check-label mx-4 my-3">
                                                I have read and agree to the Subscription Agreement including the grant of Power of Attorney as described in Section VI
                                            </label>
        
                                        </div>
                                   
                                        <div class="form-check">
                                            <input style="margin:0!important" type="checkbox" class="form-check-input" value="">
                                            <label style="font-size: 14px; font-weight: 900;" class="form-check-label mx-4 my-3">
                                                I completed or reviewed the Investor Information Form and agree with all of the information and agreements made therein.
                                            </label>
        
                                        </div>
                                        
                                        <div class="form-check">
                                            <input style="margin:0!important" type="checkbox" class="form-check-input" value="">
                                            <label style="font-size: 14px; font-weight: 900;" class="form-check-label mx-4 my-3">
                                                Under penalties of perjury, I certify that I have completed or reviewed the Tax Form and the information it contains is true, complete and correct.
                                            </label>
        
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="main-hedaing2">
                                            Signature
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 ">
                                        <p class="para1">
                                            Type your name to sign the Agreements and Disclosers listed above. 
                                        </p>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           
                                            <input type="email"  class="form-control" id="uname" placeholder="">
                                           
                                          </div>
                                          <h6 class="font-we">Jonathan Doe</h6>
                                    </div>
                               
                                   
                               
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
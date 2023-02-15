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
                                Nature of Participation
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <p class="para1">
                                Please confirm that the following statements apply to your investment in the partnership. If any statements do not apply to you, please provide a detailed explanation below.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 swog-form my-form2">
                            <form action="{{('swog6')}}">
                             
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
                                                I am not investing with the intent to sell, distribute or transfer the investment to any other person or persons.
                                            </label>
        
                                        </div>
                                        <div class="form-check">
                                            <input style="margin:0!important" type="checkbox" class="form-check-input" value="">
                                            <label style="font-size: 14px; font-weight: 900;" class="form-check-label mx-4 my-3">
                                                I am not investing as an agent, nominee, trustee, partner or otherwise on behalf of for the account of, or jointly with any other person or entity.
                                            </label>
        
                                        </div>
                                        <div class="form-check">
                                            <input style="margin:0!important" type="checkbox" class="form-check-input" value="">
                                            <label style="font-size: 14px; font-weight: 900;" class="form-check-label mx-4 my-3">
                                                No person or persons other than myself has a beneficial interest in the investment.
                                            </label>
        
                                        </div>
                                        <div class="form-check">
                                            <input style="margin:0!important" type="checkbox" class="form-check-input" value="">
                                            <label style="font-size: 14px; font-weight: 900;" class="form-check-label mx-4 my-3">
                                                I do not control, am not controlled by, nor am I under common control with, any other existing or prospective investor. 
                                            </label>
        
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    Please provide a detailed explanation of why the statement(s) that you have not confirmed above do not apply to you. Our team may contact you with additional questions.
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="comment">Address:</label>
                                            <textarea class="form-control text-area-new" rows="3" id="comment">Enter details</textarea>
                                        </div>
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
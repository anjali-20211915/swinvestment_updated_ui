@extends('addcss')

<!DOCTYPE html>
<html lang="en">
   
<body>
    <section class="ind-main-bnr">
    <!-- <div class="container">
            <div class="row p-3">
                <div class="col-sm-3 south1">
                    <img class="south" src="image 1.png" alt="">
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4 south3">
                    <nav class="navbar navbar-expand-sm">

                       
                        <ul class="navbar-nav ">
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#">Products</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#">About Us</a>
                          </li>
                         
                        </ul>
                      
                      </nav>
                </div>
               
                <div class="col-sm-3 button ">
                    <button type="button" class="btn btn-primary text-white but bg-primary my-2 float-right buts">Sign up</button>
                    <button type="button" class="btn btn-primary float-right text-black-50 my-2 but bg-white buts mx-3 px-2">Primary</button>
                </div>
            </div>
           

    </div> -->
        <section class="ind-main-bnr ban">
        <div class="container-fluid" style="height: 100vh;">
        <div class="container  center backg">
           
            <div class="row p-3">
                <div class="col-sm-12 south11">
                    <img class="south" src="{{url('img/image 1.png')}}" alt="">
                </div>
            </div>
         <div class="row">
            <div class="col-sm-12 iamgey">
                <img class="imagew" src="img/welcome 1.png" alt="">   
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 joes">
                <p class="joe">
                    JOE, WE ARE EXCITED TO PARTNER WITH YOU
                </p>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 mx-5 mz-5">
                <p class="follow">
                    On the following pages. we’ll ask you few questions to get to know you better. There are no wrong answers!
                </p>
            </div>
         </div>
         <div class="row">
            <div class="col-4">      
            </div>
            <div class="col-4 mx-5">
                <a href="{{url('goal')}}" type="button" class="btn last-btn">Get  Started  <i class="fa-sharp fa-solid fa-arrow-right"></i> </a>
            </div>
            <div class="col-4">
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
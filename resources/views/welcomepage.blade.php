@extends('addcss')

<!DOCTYPE html>
<html lang="en">
<body>
        <section class="ind-main-bnr ban welcome">
            <div class="container-fluid" style="height: 100vh;">
                <div class="container  center backg ">
                
                    <div class="row p-3 m-4">
                        <div class="col-sm-12 south11">
                            <img class="south img-responsive" src="{{url('img/image 1.png')}}" alt="">
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
                        <div class="col-sm-12 mx-5 ">
                            <p class="follow">
                                On the following pages. we’ll ask you few questions to get to know you better. There are no wrong answers!
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">      
                        </div>
                        <div class="col-xs-12 col-sm-4 mx-5">
                            <a href="{{url('entity-verification')}}" type="button" class="btn last-btn">Get Started<i class="mx-3 fa-sharp fa-solid fa-arrow-right"></i> </a>
                        </div>
                        <div class="col-xs col-sm-4">
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
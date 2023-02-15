<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/project.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    </head>
<body>
    <section class="ind-main-bnr">
        <nav class="navbar navbar-expand-sm">
          <div class="container-fluid">
            <!-- <div class="row w-100 p-3"> -->
              <div class="col-xs-12 col-sm-3 south1 position-relative">
                <img class="south" src="{{url('img/image 1.png')}}" alt="">
                <button class="navbar-toggler respo-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                  <i class="fa-solid fa-bars navbar-toggler-icon"></i>
                  
                </button>
              </div>
             
              <div class="col-sm-5 south3">
                <div class="collapse navbar-collapse menu-navbar" id="collapsibleNavbar">
                  <div class="row">
                    <div class="col-xs-12 ">
                      <ul class="navbar-nav  ">
                        <li class="nav-item">
                          <a class="nav-link text-white p-4 text-menu" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white p-4 text-menu " href="#">About Us</a>
                        </li>
                      
                      </ul>
                    </div>
                    <div class="col-xs-12 d-sm-none  button header_button py-3  ">
                      <button type="button" class="btn  text-white  my-2 float-right buts">Sign up</button>
                      <button type="button" class="btn  float-right text-black-50 my-2 but bg-white buts2 mx-3 px-2">Sign In</button>
                    </div>
                  </div>
                  
                 
                </div>
              </div>
              <div class="col-sm-4 d-none d-sm-block button header_button py-3  ">
                <button type="button" class="btn  text-white  my-2 float-right buts">Sign up</button>
                <button type="button" class="btn  float-right text-black-50 my-2 but bg-white buts2 mx-3 px-2">Sign In</button>
              </div>
            </div>
          </div>
        </nav>
      </section>
        <section class="ind-main-bnr">
            <div class="container-fluid bg-light h-100">
                <div class="container bg-light  ">
                    <div class="row">
                        <img class="my-3 position-relative img-responsive-1" src="img/swog2.png" alt="">
                        <!-- <p class="position-absolute invest"><span class="one">1</span> Select Investment</p> -->
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-hedaing2">
                                Accreditation Status
                            </h3>
                            <h6 class="qualified">
                                Are you a qualified purchaser?
                            </h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 ">
                            <p class="para1">
                                Generally, you are a qualified purchaser if any of the following is true.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="page-cont">
                       
                            <ul class="mx-4">
                             <li><img src="img/tir.png" width="30" height="30" alt=""> Investments greater than $5M</li> 
                             <li><img src="img/tir.png" width="30" height="30" alt=""> Acting on behalf of other qualified purchasers who in aggregate own and invest greater than $25M in investments.</li>
                   
                            </ul>
                         </div>
                     
                    </div>
                    <div class="row">
                        <a class="sfc" href="">Read the full SEC definition</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 swog-form my-form2">
                            <form action="{{url('swog8')}}" >
                             
                               
                                <div class="col-xs-12 col-sm-6 my-5 bbtne">
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
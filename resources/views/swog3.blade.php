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
                                Personal Information
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <p class="para1">
                                The following information should match with your government-provided ID. This information will be used to generate legal documents, tax documents and statements. 
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 swog-form my-form2">
                            <form action="{{('swog4')}}" >
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="my-3" for="uname">First Name:</label>
                                            <input type="email"  class="form-control" id="uname" placeholder="John">
                                           
                                          </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="my-3" for="uname">Middle Name: <span style="opacity: 0.4;">(optional)</span> </label>
                                            
                                                
                                            <input type="text" class="form-control" placeholder="Enter your Middle name" name="email">
            
                                          </div>
                                    </div>
                                   
                               
                                </div>
                                <div class="row my-3">
                                    
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="my-2" for="uname">Last Name:</label>
                                            
                                                
                                            <input type="text" class="form-control" placeholder="Enter your Last name" name="email">
            
                                          </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="my-2" for="uname">Suffix<span style="opacity: 0.4;">(optional)</span>  </label>
                                            <input type="text"  class="form-control" id="uname" placeholder="Enter your phone extention">
                                           
                                          </div>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="my-2" for="sel1">Country of citizenship</label>
                                            <select class="form-control" id="sel1">
                                                <option>United States of America</option>
                                                <!-- <option>2</option>
                                                <option>3</option>
                                                <option>4</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="my-2" for="sel1">Date of Birth</label>
                                            <input type="text"  class="form-control" id="uname" placeholder="Enter your phone extention">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <h4>Tax Info</h4>
                                    </div>
                                    <div class="row">
                                    <p>Do you have a Social Security Number or Individual Tax ID Number?</p>
                                </div>
                                <div class="col-sm-6">
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/project.css">
         <style>
            .progress {
                 height: 4px;
            }
      
    .progress-bar {
        background-color: green;
    }
         </style>
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
        <div class="container-fluid ">
            <div class="container  main">
              <div class="row">
                <div class="col-sm-12">
                    <h1 class="main-hedaing">Create Your Account</h1>
                </div>
              </div>
              <div class="row">
               <div class="col-sm-12 main-form2 main-form-main">
                <form action="{{url('step3?type=individual')}}" class="was-validated" method="post">
                    @csrf 
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="uname" name="email">Email Address:</label>
                                <input type="email" name="email" class="form-control" id="uname" placeholder="john@gmail.com">
                               
                              </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group" id="pass">
                                <label for="uname">password:</label>
                                
                                    
                                <input id="password" name="password" type="password" class="form-control" placeholder="Enter your paswword" name="email">
                                
                                 <i class="fa-solid fa-eye iconn-img"></i>  
                               
                               
        
                              </div>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                             
                                </div>
                              </div>
                             
                        </div>
                       
                   
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12 my-5">
                            <p class="lorem acoount-lorem">
                                Lorem ipsum dolor sit amet consectetur. Consectetur mauris in dis quisque aliquam tempus elit. Lorem ipsum dolor sit amet consectetur. Consectetur mauris in dis quisque aliquam tempus elit.0
                            </p>
                          
                        </div>
                    </div>
                    <div class="row foot-btn ">
                        <div class="col-xs-12 col-sm-12 col-md-6 float-left already">
                            
                                <a href="#">Already have an account? Sign in</a>
                           
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 ">
                            <button type="submit" class="btn btn-primary more_btn float-right">Next <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                           
                        </div>
                    </div>
                    
                  </form>
                  
               </div>
            </div>
            </div>
        </div>
      <div class="row bg-light ">
            <div style="padding-top: 10px;" class=" col-md-6 d-flex justify-content-start align-item-center">
                <p class="foot-p1">©2023 SouthWest Opportunity Group.  All rights reserved.</p>
            </div>
            <div style="padding-top: 10px;" class="col-md-6 d-flex justify-content-end align-item-center">
               <p class="foot-p2">©2023 SouthWest Opportunity Group.  All rights reserved.</p>
            </div>
            
        </div>
<script>
      var percentage = 0;
  
  function check(n, m) {
      if (n < 6) {
     
          percentage = 0;
          $(".progress-bar").css("background", "#dd4b39");
      } else if (n < 8) {
          percentage = 20;
          $(".progress-bar").css("background", "#9c27b0");
      } else if (n < 10) {
          percentage = 40;
          $(".progress-bar").css("background", "#ff9800");
      } else {
          percentage = 60;
          $(".progress-bar").css("background", "#4caf50");
      }

      // Check for the character-set constraints
      // and update percentage variable as needed.
      
      //Lowercase Words only
      if ((m.match(/[a-z]/) != null)) 
      {
          percentage += 10;
      }
      
      //Uppercase Words only
      if ((m.match(/[A-Z]/) != null)) 
      {
          percentage += 10;
      }
      
      //Digits only
      if ((m.match(/0|1|2|3|4|5|6|7|8|9/) != null)) 
      {
          percentage += 10;
      }
      
      //Special characters
      if ((m.match(/\W/) != null) && (m.match(/\D/) != null))
      {
          percentage += 10;
      }

      // Update the width of the progress bar
      $(".progress-bar").css("width", percentage + "%");
  }

  // Update progress bar as per the input
  $(document).ready(function() {
      // Whenever the key is pressed, apply condition checks. 
      $("#password").keyup(function() {
          var m = $(this).val();
          var n = m.length;
       
        //   Function for checking
          check(n, m);
      });
  });
</script>
</script>
    
</body>
</html>
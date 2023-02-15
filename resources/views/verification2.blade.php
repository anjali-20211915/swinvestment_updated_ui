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
                    <div class="row p-5">
                        <div class="col-12">
                            <h3 class="accro">
                                Accreditation Verification
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <p class="para1">
                             To complete your investment, please submit the following documents to verify your investment entity. <span class="chose"> Choose the document type.</span>
                            </p>
                        </div>
                    </div>
                    <div class="row ">
                        <form action="{{url('swog')}}" class="was-validated main-form3">
                           <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group mb-3 check-in" id="check1">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text ">
                                            <input class="checkbox-check"  id="takenBefore" type="checkbox" aria-label="Checkbox for following text input">
                                          </div>
                                        </div>
                                        <input type="text" readonly value="Third Party Verification" class="form-control" aria-label="Text input with checkbox">
                                      </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="input-group mb-3 check-in" id="check2">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">
                                          <input class="checkbox-check" id="takenBefore2"  type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                      </div>
                                      <input type="text" readonly value="Proof of income" class="form-control" aria-label="Text input with checkbox">
                                    </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="input-group mb-3 check-in" id="check3">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                        <input class="checkbox-check" id="takenBefore3" type="checkbox" aria-label="Checkbox for following text input">
                                      </div>
                                    </div>
                                    <input type="text" readonly value="Professional License" class="form-control" aria-label="Text input with checkbox">
                                  </div>
                            </div>
                               
                               
                            </div>   
                            <div class="checker1">
                              <div class="row">
                                  <h4>
                                  Instructions
                                  </h4>
                                  <ul class="instrucu">
                                  <li>
                                      If you work with a third party advisor (tax preparer, financial advisor, attorney, accountant , etc.) they can attest to your status as  an Accredited Investor by singing the letter attached below.
                                  </li>
                                  <li>
                                      <a class="btn btn-dark my-4" href="#">DOWNLOAD TEMPLATE</a>
                                  </li>
                                  <li>
                                      Alternatively, you can use am accreditation verification like ParallelMarkets, Verifyinvestor or InvestReasy and upload the letter they provide.
                                  </li>
                                  
                                  </ul>
                              </div>
                              <div class="row ">
                                  <div class="col-sm-9 my-1 tax">
                                  <i class="fa-solid fa-cloud-arrow-up"></i>
                                  <h4>Upload Third Party Verification Letter</h4>
                                  <p>Lorem Ipsum is Lorem Ipsum is simply dummy text
                                      of the printing and type setting industry.</p>
                                  </div>
                                  <div class="col-sm-3 "></div>
                                  <div class="col-sm-6 my-5 ">
                                      <button type="submit" class="btn btn-primary float-left">Next <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                                  
                                  </div>
                              </div>
                          </div>
                         
                          <div class="checker2">
                              <div class="row">
                                  <h4>
                                    Instructions
                                  </h4>
                                  <ul class="instrucu">
                                    <li>
                                      Upload tax documents that show your income meets the required threshold ($200k for individual income, $300k in joint income with your spouse) for the last two years.
                                    </li>
                                    <li>
                                      Acceptable documents include W-2s, K-1s, 1099, or signed IRS Form 1040
                                    </li>
                                  </ul>
                                </div>
                                <div class="row">
                                  <div class="form3">
                                    <form action="swog.html">
                                      <div class="form-group">
                                        <label style="font-weight: 700;" for="usr">What is your current annual income in $USD?:</label>
                                        <input type="text" class="form-control" id="usr">
                                      </div>
                                     
                                      <div class="checkbox d-flex align-items-center">
                                        <h4 class="doc">Upload Documents</h4>
                                        
                                      </div>
                                      <div class="row d-flex align-items-center justify-content-start">
                                        <input type="checkbox" value="" class="mx-4">
                                        <label>I have not filed 2022 tax documents</label>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-9 tax">
                                          <i class="fa-solid fa-cloud-arrow-up"></i>
                                          <h4>2022 Tax Documents</h4>
                                          <p>Lorem Ipsum is Lorem Ipsum is simply dummy text <br>
                                            of the printing and type setting industry.</p>
                                        </div>
                                        <div class="col-sm-3"></div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-9 tax">
                                          <i class="fa-solid fa-cloud-arrow-up"></i>
                                          <h4>2021 Tax Documents</h4>
                                          <p>Lorem Ipsum is Lorem Ipsum is simply dummy text
                                            of the printing and type setting industry.</p>
                                        </div>
                                        <div class="col-sm-3"></div>
                                      </div>
                                      <div class="col-sm-6 my-5 ">
                                        <button type="submit" class="btn btn-primary float-left">Next <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                                       
                                    </div>

                                      
                                    </form>
                                  </div>
                                </div>
                          </div>
                         
                          
                          </form>
                           
                            
                           
                           
                            
                          <div class="checker3">
                            <h4>
                              Instructions
                            </h4>
                            <div class="row">
                               
                                <ul class="instrucu">
                                  <li>
                                    You qualify as an Accredited Investor if you have one of the following financial services licenses. Series 7, Series 65, Series 82
                                  </li>
                                  <li>
                                    Your license must be active and in good standing
                                  </li>
                                  
                                </ul>
                            </div>
                            <div class="row">
                              <div class="col-sm-9 my-1 tax">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                <h4>Upload Professional License</h4>
                                <p>Lorem Ipsum is Lorem Ipsum is simply dummy text
                                  of the printing and type setting industry.</p>
                              </div>
                              <div class="col-sm-3"></div>
                            </div>
                            <form action="swog.html">
                            <div class="col-sm-6 my-5 ">
                                <button type="submit" class="btn btn-primary float-left">Next <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                                
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
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // $('#takenBefore').on('change', function(e) {

            //     $('#takenBefore2').prop('checked', false); 
            // });
          
$("input[type='checkbox']").change(function(){

      $(document).on("change", ".checkbox-check", function () {
        $(".checkbox-check").prop("checked", false);
        $(this).prop("checked", true);
        var a= this.id;
        
       
       
        if(a=="takenBefore"){
          $("#check1").css("border", "2px solid #00334B"); 
          $(".checker1").css("display", "block");
             $(".checker2").css("display", "none");
            $(".checker3").css("display", "none");  
        }
        else if(a=="takenBefore2"){
          $("#check2").css("border", "2px solid #00334B"); 
          $(".checker2").css("display", "block");
          $(".checker1").css("display", "none");
          $(".checker3").css("display", "none");    
        }
        else if(a=="takenBefore3"){
          $("#check3").css("border", "2px solid #00334B"); 
          $(".checker3").css("display", "block");
          $(".checker2").css("display", "none");
          $(".checker1").css("display", "none");     
        }
  
            
    }); 
});


          
        </script>
    </body>
</html>
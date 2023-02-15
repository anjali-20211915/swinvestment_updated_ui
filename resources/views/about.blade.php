@extends('addcss')

<!DOCTYPE html>
<html lang="en">
    
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
                    <h1 class="main-hedaing">Tell us more about yourself</h1>
                </div>
              </div>
              <div class="row">
               <div class="col-sm-12 main-form2">
               <form method="POST" action="{{url('step1') }}" class="was-validated">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="uname">First Name:</label>
                                <input type="name" id="firstname" type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" firstname="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus

                                placeholder="John">
                                @error('firstname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
                               
                            </div>
                    </div>    
                    <div class="col-sm-4">              
                        <div class="form-group">
                                <label for="uname">Last Name:</label>
                                <input type="name" id="lastname" type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" lastname="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus

                                placeholder="John">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                    </div>
</div>
                   
                    </div>
                    <div class="row py-4">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="uname">Date Of Birth</label>
                                <input require type="date" name="dob" id="dob"  class="form-control" placeholder="John"
                                class="form-control @error('dob') is-invalid @enderror">
                               

                                @if($errors->has('dob'))
            <div class="text-danger">{{ $errors->first('dob') }}</div>
            @endif
                              </div>
                        </div>
                        <div class="col-sm-4">

                            <div class="form-group">
                            <label for="uname">Phone Number</label>

                                <input type="number" require class="form-control" name="phoneno" value="{{ old('phoneno') }}"
                                class="form-control @error('phoneno') is-invalid @enderror">

                                @if($errors->has('phoneno'))
            <div class="text-danger">{{ $errors->first('phoneno') }}</div>
            @endif
                            </div>
                        </div>

                    </div>
                        <div class="row py-4">
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label for="comment">Address:</label>
                                    <textarea require class="form-control" rows="3" id="comment" name="address" value="{{ old('address') }}"
                                    class="form-control @error('address') is-invalid @enderror"></textarea>
                                    @if($errors->has('address'))
            <div class="text-danger">{{ $errors->first('address') }}</div>
            @endif
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <button style="margin-top: 80px;" type="submit" class="btn btn-primary float-right">Next <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
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

    
</body>
</html>
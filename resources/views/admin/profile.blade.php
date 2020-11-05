@extends('layouts.master_admin')

@section('content')

@section('title')
Profile | Woato Foundation
@endsection  

<div class="content">             
  <div class="bg-white border rounded">
                <div class="row no-gutters">
                  <div class="col-lg-4 col-xl-3">
                    <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                      <div class="card text-center widget-profile px-0 border-0">
                        <div class="card-img mx-auto rounded-circle">
                          <img src="resource/assets/img/user/1.jpg" alt="user image">
                        </div>
                        <div class="card-body">
                          <h4 class="py-2 text-dark">{{ Auth::user()->name }}</h4>
                          <p>{{ Auth::user()->email }}</p>
                       <!-- <a class="btn btn-primary btn-pill btn-lg my-4" href="#">Follow</a>-->
                        </div>
                      </div>
                      <!--<div class="d-flex justify-content-between ">
                        <div class="text-center pb-4">
                          <h6 class="text-dark pb-2">1503</h6>
                          <p>Friends</p>
                        </div>
                        <div class="text-center pb-4">
                          <h6 class="text-dark pb-2">2905</h6>
                          <p>Followers</p>
                        </div>
                        <div class="text-center pb-4">
                          <h6 class="text-dark pb-2">1200</h6>
                          <p>Following</p>
                        </div>
                      </div>-->
                    
                      <hr class="w-100">
                      <div class="contact-info pt-4">
                        <h5 class="text-dark mb-1">Contact Information</h5>
                        <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                        <p>{{ Auth::user()->email }}</p>
                        <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                        <p>+8801674358675</p>
                       <!-- <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                        <p>Nov 15, 1990</p>
                        <p class="text-dark font-weight-medium pt-4 mb-2">Social Profile</p>
                        <p class="pb-3 social-button">
                          <a href="#" class="mb-1 btn btn-outline btn-twitter rounded-circle">
                            <i class="mdi mdi-twitter"></i>
                          </a>
                          <a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
                            <i class="mdi mdi-linkedin"></i>
                          </a>
                          <a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
                            <i class="mdi mdi-facebook"></i>
                          </a>
                          <a href="#" class="mb-1 btn btn-outline btn-skype rounded-circle">
                            <i class="mdi mdi-skype"></i>
                          </a>
                        </p>-->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8 col-xl-9">
                    <div class="profile-content-right py-5">
                      <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                      <!--  <li class="nav-item">
                          <a class="nav-link" id="timeline-tab" data-toggle="tab" href="javascript:void(0)" role="tab" aria-controls="timeline" aria-selected="false">Timeline</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="javascript:void(0)" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                        </li> -->
                        <li class="nav-item">
                          <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="true">Settings</a>
                        </li>
                      </ul>
                      <div class="tab-content px-3 px-xl-5" id="myTabContent">
                        <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                          <div class="media mt-5 profile-timeline-media">
                            <div class="align-self-start iconbox-45 overflow-hidden mr-3">
                              <img src="assets/img/user/u3.jpg" alt="Generic placeholder image">
                            </div>
                          
                          </div>
                         
                        
                        </div>
                        
                        <div class="tab-pane fade active show" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                          <div class="mt-5">
                            <form>
                              <div class="form-group row mb-6">
                                <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User Image</label>
                                <div class="col-sm-8 col-lg-10">
                                  <div class="custom-file mb-1">
                                    <input type="file" class="custom-file-input" id="coverImage" required="">
                                    <label class="custom-file-label" for="coverImage">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                  </div>
                                </div>
                              </div>
                              <div class="row mb-2">
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" name="firstName" value="{{ Auth::user()->name }}">
                                  </div>
                                </div>

                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" name="lastName" value="{{ Auth::user()->name }}">
                                  </div>
                                </div>
                              </div>

                              <div class="form-group mb-4">
                                <label for="userName">User name</label>
                                <input type="text" class="form-control" name="userName" value="{{ Auth::user()->username }}">
                               <!-- <span class="d-block mt-1">Accusamus nobis at omnis consequuntur culpa tempore saepe animi.</span>-->
                              </div>

                              <div class="form-group mb-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" readonly="">
                              </div>

                              <div class="form-group mb-4">
                                <label for="oldPassword">Old password</label>
                                <input type="password" class="form-control" id="currentPassword">
                              </div>

                              <div class="form-group mb-4">
                                <label for="newPassword">New password</label>
                                <input type="password" class="form-control" id="newPassword">
                              </div>

                              <div class="form-group mb-4">
                                <label for="conPassword">Confirm password</label>
                                <input type="password" class="form-control" id="confirmPassword">
                              </div>

                              <div class="d-flex justify-content-end mt-5">
                                <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
                              </div>

                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</div>


@endsection 
@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a>Profile</a></li>
          <li class="breadcrumb-item">Users</li>
          <!-- <li class="breadcrumb-item ">Profile</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              @if(Auth::guard('admin')->user()->image=='')
                          <img src="{{asset('Backend/images/dummy_image.jpg')}}" class="rounded-circle" alt="Profile">
                        @endif
                        @if(Auth::guard('admin')->user()->image)
                          <img src="{{ asset('Backend/images/' . Auth::guard('admin')->user()->image) }}" class="rounded-circle" alt="Profile">
                        @endif
              <h2>{{Auth::guard('admin')->user()->name}}</h2>
              <!-- <h3>Web Designer</h3> -->
              <!-- <div class="social-links mt-2">
                <a href="twitter.com/{{Auth::guard('admin')->user()->twitter}}" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="facebook.com/{{Auth::guard('admin')->user()->facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="instagram.com/{{Auth::guard('admin')->user()->instagram}}" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="linkedin.com/{{Auth::guard('admin')->user()->linkedin}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div> -->
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <!-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                </li> -->

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <!-- <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p> -->

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">
                    {{Auth::guard('admin')->user()->name}}


                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">{{Auth::guard('admin')->user()->company}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8">{{Auth::guard('admin')->user()->job}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8">{{Auth::guard('admin')->user()->country}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">{{Auth::guard('admin')->user()->address}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">{{Auth::guard('admin')->user()->phone}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{Auth::guard('admin')->user()->email}}</div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="POST" enctype="multipart/form-data" action="{{route('admin.update')}}">
                  @csrf
                  <input type="hidden" name="id" value="{{Auth::guard('admin')->user()->id}}">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        @if(Auth::guard('admin')->user()->image=='')
                          <img src="{{asset('Backend/images/dummy_image.jpg')}}" class="img-fluid img-thumbnail rounded-circle" id="output-img" style="width: 120px; height: 120px;" alt="Profile">
                        @endif
                        @if(Auth::guard('admin')->user()->image)
                          <img src="{{ asset('Backend/images/' . Auth::guard('admin')->user()->image) }}" class="img-fluid img-thumbnail rounded-circle" id="output-img" style="width: 120px; height: 120px;" alt="Profile">
                        @endif
                        <div class="pt-2 iconsection">
                          <a style="width: 70%;" href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><input name="image" type="file" onchange="loadFile(event)"/><i class="bi bi-upload"></i></a>
                          <a href="{{route('admin.delete_img',Auth::guard('admin')->user()->id)}}" id="" style="width: 70%; margin-top: 12px;" href="" class="btn btn-danger btn-sm" title="Remove my profile image">Delete<i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="name" type="text" class="form-control" id="fullName" value="{{Auth::guard('admin')->user()->name}}">
                      </div>
                    </div>

                    <!-- <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div> -->

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="company" type="text" class="form-control" id="company" value="{{Auth::guard('admin')->user()->company}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="job" type="text" class="form-control" id="Job" value="{{Auth::guard('admin')->user()->job}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" value="{{Auth::guard('admin')->user()->country}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="{{Auth::guard('admin')->user()->address}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="{{Auth::guard('admin')->user()->phone}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="{{Auth::guard('admin')->user()->email}}">
                      </div>
                    </div>

                    <!-- <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="{{Auth::guard('admin')->user()->twitter}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="{{Auth::guard('admin')->user()->facebook}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="{{Auth::guard('admin')->user()->instagram}}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="{{Auth::guard('admin')->user()->linkedin}}">
                      </div>
                    </div> -->

                    <div class="float-end">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->
                </div>

                <!-- <div class="tab-pane fade pt-3" id="profile-settings">

                  
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="float-end">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>

                </div> -->

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form method="Post" action="{{route('admin.change.password')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{Auth::guard('admin')->user()->id}}">
                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="newPassword">
                      </div>
                          @error('password')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                    </div>
                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="confirmpassword" type="password" class="form-control" id="renewPassword"  onkeyup='check();'>
                          <span id='message'></span>
                      </div>
                        @error('confirmpassword')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary enableOnInput" disabled='disabled'/>Change Password</button>
                    </div>
                  </form>
                  <!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <script type="text/javascript">
   var loadFile = function (event) {
  var image = document.getElementById("output-img");
  image.src = URL.createObjectURL(event.target.files[0]);
};

</script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

  <script> 

var check = function() {


  if (document.getElementById('newPassword').value ==
    document.getElementById('renewPassword').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  $('.enableOnInput').prop('disabled', false);
  } else {
                $('.enableOnInput').prop('disabled', true);

    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = ' Password and Confirm Password Does not Matching';
  }
} 
</script>  
@include('Admin.include.footer')
@include('Admin.include.script')
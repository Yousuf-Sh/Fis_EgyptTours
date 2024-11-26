@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

  <div class="pagetitle">
      <h1>Registered Members
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/registered-members')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Members</li>
          <li class="breadcrumb-item active">Add Registered Members</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Add Member</h5> -->

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('registered-members.store')}}" enctype="multipart/form-data">
			  @csrf
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Name</label>
                  <input type="text" class="form-control" id="inputName5" name="name" required="">
                </div>
                
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Company</label>
                  <input type="text" class="form-control" id="inputName5" name="company" required="">
                </div>
                <div class="col-md-6">
                <label for="country" class="form-label">Country</label>
                <select id="inputState" class="form-select" name="country_id">
                    <option value="" selected disabled>Select Country</option>
                    @foreach($country as $record)
                       
                    <option value='{{$record->id}}'>{{$record->nicename}}</option>
                  
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Phone</label>
                  <input type="text" class="form-control" id="inputName5" name="phone" required="">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputName5" name="email" required="">
                </div>
                <div class="col-md-6">
                  <label for="newPassword" class="form-label">Password</label>
                  <i class="fa fa-eye" id="togglePassword" style=" position: absolute; top: 89%; left: 46%;"></i>
                  
                  <input type="password" class="form-control" id="newPassword" name="password" required="">
                  @error('password')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                </div>
                <div class="col-md-6">
                  <label for="renewPassword" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="renewPassword" name="confirmpassword" required="" onkeyup='check();'>
                  <span id='message'></span>
                  @error('confirmpassword')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="col-md-12">
                  <label for="inputState" class="form-label">Address</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="address" required=""></textarea>
                </div>
                
                
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Profile Image</label>
                  <input type="file" name="image" id="imgInp"  accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                  <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{asset('Backend/images/dummy_image.jpg')}}" id="output"  width="100" ></a>
                </div>
                <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-danger enableOnInput" disabled='disabled'>Submit</button>
                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                  </div>
                </div>  
              </form><!-- End Multi Columns Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
<script>
  var loadFile1 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output1 = document.getElementById('output1');
      output1.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
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
<script type="text/javascript">
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#newPassword');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa fa-eye');
});
</script>


@include('Admin.include.footer')
@include('Admin.include.script')

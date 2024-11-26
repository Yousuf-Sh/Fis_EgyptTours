
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
          <li class="breadcrumb-item active">Edit Registered Members</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Edit Member</h5> -->

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('registered-members.update')}}" enctype="multipart/form-data">
			  @csrf
              <input type="hidden" name="id" value="{{$profile->id}}">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Name</label>
                  <input type="text" class="form-control" id="inputName5" name="name" value="{{$profile->name}}" required="">
                </div>
                
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Company</label>
                  <input type="text" class="form-control" id="inputName5" name="company" value="{{$profile->company}}" required="">
                </div>
                <div class="col-md-6">
                <label for="country" class="form-label">Country</label>
                <select id="inputState" class="form-select" name="country_id">
                    <option value="" selected disabled>Select Country</option>
                    @foreach($country as $record)
                       
                    <option value='{{$record->id}}' {{$record->id==$profile->country_id?'selected':''}}>{{$record->nicename}}</option>
                  
                    @endforeach
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Phone</label>
                  <input type="text" class="form-control" id="inputName5" name="phone" value="{{$profile->phone}}" required="">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputName5" name="email" value="{{$profile->email}}" required="">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Password</label>
                  <input type="text" class="form-control" id="inputName5" name="password" value="" required="">
                </div>
                <div class="col-md-12">
                  <label for="inputState" class="form-label">Address</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="address" required="">{{$profile->address}}</textarea>
                </div>
                
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Profile Image</label>
                  <input type="file" name="image" id="imgInp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                  @if($profile->image)
                  <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{ asset('Backend/images/' . $profile->image) }}" id="output"  width="100" ></a>
                  @endif
                  @if($profile->image=='')
                  <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{asset('Backend/images/dummy_image.jpg')}}" id="output"  width="100" ></a>
                  @endif
                </div>
                <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-danger submit">Update</button>
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
@include('Admin.include.footer')
@include('Admin.include.script')

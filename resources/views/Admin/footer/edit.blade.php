@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Footer
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/footer')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">Edit Footer</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Home Slider Form</h5> -->

              <!-- Vertical Form -->
              <form class="row g-3"  method="POST" action="{{route('footer.update')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$footer->id}}"/>
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Services</label>
                  <input type="text" name="services" class="form-control" id="inputtitle" placeholder="" value="{{$footer->services}}">
                </div> 
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Testtinomials</label>
                  <input type="text" name="testinomail" class="form-control" id="inputtitle" placeholder="" value="{{$footer->testinomail}}">
                </div> 
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Partenrs</label>
                  <input type="text" name="patner" class="form-control" id="inputtitle" placeholder="" value="{{$footer->partenrs}}">
                </div> 
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Quicklinks</label>
                  <input type="text" name="quicklinks" class="form-control" id="inputtitle" placeholder="" value="{{$footer->quicklinks}}">
                </div> 
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Contact</label>
                  <input type="text" name="contact" class="form-control" id="inputtitle" placeholder="" value="{{$footer->contact}}">
                </div> 
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Faq</label>
                  <input type="text" name="faq" class="form-control" id="inputtitle" placeholder="" value="{{$footer->faq}}">
                </div> 
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Reach Us</label>
                  <input type="text" name="reachus" class="form-control" id="inputtitle" placeholder="" value="{{$footer->reachus}}">
                </div> 
                <div class="col-md-6">

                  <label for="inputState" class="form-label">Address</label>
                  <textarea type="text" class="form-control" id="inputName5" rows="3" name="address" >{{$footer->address}}</textarea>
                </div>
                <div class="col-md-6">

                  <label for="inputState" class="form-label">Description</label>
                  <textarea type="text" class="form-control" id="inputName5" rows="3" name="description" >{{$footer->description}}</textarea>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Home</label>
                  <input type="text" name="home" class="form-control" id="inputtitle" placeholder="" value="{{$footer->home}}">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">About us</label>
                  <input type="text" name="aboutus" class="form-control" id="inputtitle" placeholder="" value="{{$footer->aboutus}}">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Links</label>
                  <input type="text" name="links" class="form-control" id="inputtitle" placeholder="" value="{{$footer->links}}">
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="imgInp"  accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile(event)">
                    <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{ asset('Backend/images/' . $footer->image) }}" id="output"  width="150" ></a>
                </div>
                
                
                <div class="col-md-12" style="text-align: right;">
                  <button type="submit" class="btn btn-primary submit">Submit</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                </div>
              </form><!-- Vertical Form -->

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
@include('Admin.include.footer')
@include('Admin.include.script')
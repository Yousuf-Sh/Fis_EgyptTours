@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>FAQ
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/faq')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">FAQ</li>
          <li class="breadcrumb-item active">Edit FAQ</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Home Slider Form</h5> -->
              <ul class="nav nav-tabs mt-3" id="languageTabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="english-tab" data-bs-toggle="tab" href="#english" role="tab" aria-controls="english" aria-selected="true">English</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="arabic-tab" data-bs-toggle="tab" href="#arabic" role="tab" aria-controls="arabic" aria-selected="false">Arabic</a>
                </li>
              </ul>
              <div class="tab-content" id="languageTabsContent">
                <!-- English Tab Content -->
                <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">
              <!-- Vertical Form -->
              <form class="row g-3"  method="POST" action="{{route('faq.update')}}" enctype="multipart/form-data">
                @csrf
               
                <input type="hidden" name="id" value="{{$Question_description->id}}"/>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Question </label>
                  <input type="text" name="q1" class="form-control" id="inputtitle" placeholder="" value="{{$Question_description->question}}">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Description </label>
                  <textarea type="text" class="form-control" id="inputName5" rows="3" name="qesc1" >{{$Question_description->question_description}}</textarea>
          </div>
{{--                
                <div class="col-md-12" style="text-align: right;">
                  <button type="submit" class="btn btn-primary submit">Update</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                </div> --}}
            
            </div>
            <div class="tab-pane fade" id="arabic" role="tabpanel" aria-labelledby="arabic-tab">
              <div class="row">
            
             
               
                <input type="hidden" name="id" value="{{$Question_description->id}}"/>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Question </label>
                  <input type="text" name="q_ar" class="form-control" id="inputtitle" placeholder="" style="direction:rtl;"value="{{$Question_description->question_ar}}">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Description </label>
                  <textarea type="text" class="form-control" id="inputName5" rows="3"  style="direction:rtl;"name="qesc_ar" >{{$Question_description->question_description_ar}}</textarea>
          </div>
               
                {{-- <div class="col-md-12" style="text-align: right;">
                  <button type="submit" class="btn btn-primary submit">Update</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                </div> --}}
              
            </div>
          </div>
          <div class="col-md-12" style="text-align: right;">
            <button type="submit" class="btn btn-primary submit">Update</button>
            <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
          </div>
        </form>
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
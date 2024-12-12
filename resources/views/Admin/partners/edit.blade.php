@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Partners
      <a type="submit" class="btn btn-danger btn-sm" style="float:right;" href="{{url('admin/partners')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Partners</li>
          <li class="breadcrumb-item active">Edit Partners</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @if(session('failed'))
  <div id="success-message" class="alert alert-danger">
    {{ session('failed') }}
  </div>
  @endif
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              
            <form class="row g-3 my-3" method="POST" action="{{ route('partners.update')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="col-md-6">
                              <label for="name" class="form-label">Name<span>*</span></label>
                              <input type="text" name="name" class="form-control" id="name" value="{{$partner->name}}" required>
                              <input type="hidden" name="partner_id" class="form-control" id="partner_id" value="{{$partner->id}}">
                          </div>
                          <div class="col-md-6">
                              <label for="link" class="form-label">Link</label>
                              <input type="text" name="link" class="form-control" id="link" value="{{$partner->link}}">
                          </div>
                        <div class="col-md-6">
                            <label for="image" class="form-label">Flag<span>*</span></label>
                            <input type="file" name="image1" id="imgInp1" accept="image/*" class="form-control input-default" placeholder="Select image" >

                            <img src="{{ $partner->image ? asset($partner->image) : '' }}" width="100" id="output1" class="my-3">                                
                        </div>

            
                          <div class="col-md-12" style="text-align: right;">
                            <button type="submit" class="btn btn-primary submit btn-sm" id="submitAll">Submit</button>
                        </div>
                        </form>
      </div>
    </div> 

    </div>
      </div>
    </div>
  </div>
</div>
    </section>

  </main><!-- End #main -->
@include('Admin.include.footer')
@include('Admin.include.script')


<script>
  document.addEventListener('DOMContentLoaded', function () {
 

  // Restore the image preview function
  function loadFile(event, outputId) {
      const input = event.target;
      const outputElement = document.getElementById(outputId);
      
      if (outputElement && input.files && input.files[0]) {
          const reader = new FileReader();
          
          reader.onload = function(e) {
              outputElement.src = e.target.result;
              outputElement.style.display = 'block';
          };
          
          reader.readAsDataURL(input.files[0]);
      }
  }

  // Add event listeners to all file inputs for previewing images
  const fileInputs = document.querySelectorAll('input[type="file"]');
  fileInputs.forEach((input) => {
      // Dynamically set output ID based on input ID
      const outputId = input.id.replace('imgInp', 'output');
      
      input.addEventListener('change', (event) => {
          loadFile(event, outputId);
      });
  });

});
</script>

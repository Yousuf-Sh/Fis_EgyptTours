@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blogs
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/slider')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Blogs</li>
          <li class="breadcrumb-item active">Add blogs</li>
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
                @foreach($languages as $index => $language)
                    <li class="nav-item" role="presentation">
                        <a class="nav-link {{ $index === 0 ? 'active' : '' }}" 
                           id="{{ $language->slug }}-tab" 
                           data-bs-toggle="tab" 
                           href="#{{ $language->slug }}" 
                           role="tab" 
                           aria-controls="{{ $language->slug }}" 
                           aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                            {{ ucfirst($language->name) }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="languageTabsContent">
              @foreach($languages as $index => $language)
                  <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" 
                       id="{{ $language->slug }}" 
                       role="tabpanel" 
                       aria-labelledby="{{ $language->slug }}-tab">
                      <form class="row g-3 my-3" method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                          @csrf
                          <div class="col-md-3">
                              <label for="title_{{ $language->slug }}" class="form-label">Title</label>
                              <input type="text" name="{{ $language->slug }}_title" class="form-control" id="title_{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} required>
                              <input type="hidden" name="language" class="form-control" id="language" value="{{ $language->slug }}" required>
                          </div>
                          <div class="col-md-12">
                              <label for="description_{{ $language->slug }}" class="form-label">Content</label>
                              <textarea name="{{ $language->slug }}_description" 
                                class="form-control" id="description_{{ $language->slug }}" 
                                rows="10" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} required></textarea>
                          </div>
                      </form> 
                  </div>
              @endforeach
          </div>
      </div>
    </div> 


            
                        <!-- Image section -->
                        <div class="card">
                          <div class="card-header">
                              Image
                          </div>
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-6">
                                      <label for="image1" class="form-label">Image</label>
                                      <input type="file" name="images[image1]" id="imgInp1" accept="image/*" class="form-control input-default" placeholder="Select image">

                                      <img src="" id="output1" width="100" class="my-3">
                                      
                                  </div>
                                  
                              </div>

                          </div>
                      </div>
                      <div class="col-md-12" style="text-align: right;">
                        <button type="submit" class="btn btn-primary submit" id="submitAll">SUBMIT</button>
                    </div>
                
             
        
      </form>
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
  const submitButton = document.getElementById('submitAll');

  if (!submitButton) {
      console.error('Submit button not found!');
      return;
  }

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

  submitButton.addEventListener('click', function (event) {
      event.preventDefault();

      try {
          // Create a single FormData object
          const formData = new FormData();

          // Explicitly select all forms you want to collect data from
          const forms = document.querySelectorAll('form');
          // alert(videolink);

          forms.forEach((form) => {
              // Collect all form elements
              const elements = form.elements;
              
              for (let element of elements) {
                  if (element.name) {
                      if (element.type === 'file') {
                          // For file inputs, append only if a file is selected
                          if (element.files.length > 0) {
                              formData.append(element.name, element.files[0]);
                          }
                      } else if (element.type !== 'submit') {
                          // Append non-file, non-submit inputs
                          formData.append(element.name, element.value);
                      }
                  }
              }
          });
          if(document.getElementById('video_link')){
               const videolink= document.querySelector('#video_link').value;
              if(videolink != ''){
                  formData.append('video_link',videolink);
              }
          }

          // Specifically handle file inputs for images (as in the original code)
          const imageFileInputs = document.querySelectorAll('input[name^="images["]');
          
          console.log('File Inputs Found:', imageFileInputs.length);

          imageFileInputs.forEach((input) => {
              if (input.files.length > 0) {
                  console.log('Appending File:', input.name, input.files[0]);
                  formData.append(input.name, input.files[0]);
              }
          });

          // Log FormData contents
          for (let pair of formData.entries()) {
              console.log(pair[0] + ': ', pair[1]);
          }

          // Get CSRF token
          const csrfToken = document.querySelector('input[name="_token"]');
          if (!csrfToken) {
              throw new Error('CSRF token not found');
          }

          // Determine submission URL (assuming Laravel route)
          const currentUrl = "{{ route('blogs.store')}}";

          // Submit using fetch
          fetch(currentUrl, {
              method: 'POST',
              body: formData,
              headers: {
                  'X-CSRF-TOKEN': csrfToken.value,
                  'Accept': 'application/json',
              },
          })
          .then((response) => {
              if (!response.ok) {
                  return response.json().then((errorData) => {
                      throw new Error(errorData.message || 'Server error occurred');
                  });
              }
              return response.json();
          })
          .then((data) => {
              // Success handling
              console.log('Server response:', data);

              // Show success message to user
              alert(data.message || 'Forms submitted successfully');

              // Optional: Redirect or update UI
              if (data.redirect) {
                  window.location.href = data.redirect;
              }
          })
          .catch((error) => {
              // Comprehensive error handling
              console.error('Submission error:', error);
              alert('Failed to submit forms. Please try again. ' + error.message);
          });
      } catch (error) {
          // Catch any errors during form preparation
          console.error('Preparation error:', error);
          alert('Error preparing form submission: ' + error.message);
      }
  });
});
</script>
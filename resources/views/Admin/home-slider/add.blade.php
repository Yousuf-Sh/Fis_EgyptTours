@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Home Slider
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/slider')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Slider</li>
          <li class="breadcrumb-item active">Add Home Slider</li>
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
                      <form class="row g-3" method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                          @csrf
                          <div class="col-md-6">
                              <label for="title_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Title</label>
                              <input type="text" name="{{ $language->slug }}_title" class="form-control" id="title_{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} required>
                              <input type="hidden" name="language" class="form-control" id="language" value="{{ $language->slug }}" required>
                          </div>
                          <div class="col-md-6">
                              <label for="button_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Button</label>
                              <input type="text" name="{{ $language->slug }}_button" class="form-control" id="button_{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} required>
                          </div>
                          <div class="col-md-12">
                              <label for="description_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Description</label>
                              <textarea name="{{ $language->slug }}_description" class="form-control" id="description_{{ $language->slug }}" rows="3" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} required></textarea>
                          </div>
                      </form>
                  </div>
              @endforeach
          </div>
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="images" id="imgInp" required="" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile(event)">
                <a href=""><img src="" id="output"  width="100" ></a>
            </div>
            <div class="col-md-12" style="text-align: right;">
              <button type="button" class="btn btn-primary submit" id="submitAll">Submit</button>
            </div>
            
             
            </div> 
        
      </form>
    </div>
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
        var output1 = document.getElementById('output1');
        output.src = reader.result;
        output1.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};

document.addEventListener('DOMContentLoaded', function() {
    
    //alert('hdsjf');
   
    function toggleLanguageTab(lang) {
      console.log('Language tab clicked:', lang);
      if (lang === 'english') {
        document.getElementById('english-tab').classList.add('active');
    document.getElementById('arabic-tab').classList.remove('active');
    document.getElementById('english').classList.add('active', 'show');
    document.getElementById('arabic').classList.remove('active', 'show');
      
        document.getElementById('title-label').textContent = 'Title';
        document.getElementById('label-label').textContent = 'Label';
        document.getElementById('description-label').textContent = 'Description';
        document.getElementById('button-label').textContent = 'Button';
        document.getElementById('imgInp').textContent = 'Image';
      
       
      } else {
    
      document.getElementById('arabic-tab').classList.add('active');
    document.getElementById('english-tab').classList.remove('active');
    document.getElementById('arabic').classList.add('active', 'show');
    document.getElementById('english').classList.remove('active', 'show');
        document.getElementById('arabic').classList.add('active');
        document.getElementById('english').classList.remove('active');
        document.getElementById('arabic').classList.add('rtl');
      
       
      }
    }
  
    // Event listener for English tab click
    document.getElementById('english-tab').addEventListener('click', function() {
      toggleLanguageTab('english');
    });
  
    // Event listener for Arabic tab click
    document.getElementById('arabic-tab').addEventListener('click', function() {
      toggleLanguageTab('arabic');
    });
  
    // Function to handle file input change event
 
  });
 
</script>
@include('Admin.include.footer')
@include('Admin.include.script')
<script>
  document.getElementById('submitAll').addEventListener('click', function () {
      // Find all forms inside the tab content
      const forms = document.querySelectorAll('#languageTabsContent form');

      // Iterate through each form
      forms.forEach(form => {
          // Check if the form has any input (excluding CSRF hidden fields)
          const hasInput = Array.from(form.elements).some(input => {
              return input.type !== 'hidden' && input.value.trim() !== '';
          });

          // Skip empty forms
          if (!hasInput) {
              console.log(`Skipping form: ${form.id} (no input provided)`);
              return;
          }

          // Retrieve the CSRF token from the hidden input in the form
          const csrfToken = form.querySelector('input[name="_token"]');
          if (!csrfToken) {
              console.error(`CSRF token missing in form: ${form.id}`);
              alert(`CSRF token is missing in form: ${form.id}.`);
              return;
          }

          // Create a new FormData object for the form
          const formData = new FormData(form);

          // Debug: Log form data being submitted
          console.log(`Submitting form data for ${form.id}:`);
          for (let [key, value] of formData.entries()) {
              console.log(`${key}: ${value}`);
          }

          // Send an AJAX request to the form's action URL
          fetch(form.action, {
              method: 'POST',
              body: formData,
              headers: {
                  'X-CSRF-TOKEN': csrfToken.value, // Use the token value from the form
              }
          })
              .then(response => {
                  // Handle response statuses
                  if (!response.ok) {
                      return response.json().then(err => {
                          console.error(`Validation errors for ${form.id}:`, err.errors);
                          alert(`Validation errors: ${JSON.stringify(err.errors)}`);
                          throw new Error(`Validation failed for ${form.id}`);
                      });
                  }
                  return response.json();
              })
              .then(data => {
                  console.log(`Form submitted successfully for ${form.id}:`, data);
                  alert("Form submitted successfully for ");
              })
              .catch(error => {
                  console.error(`Error submitting form for ${form.id}:`, error);
                  alert(`Error submitting form for ${form.id}: ${error.message}`);
              });
      });
  });
</script>

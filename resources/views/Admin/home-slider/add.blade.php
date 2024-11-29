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
                <label for="video" class="form-label">Video</label>
                <input type="file" name="video" id="videoInp" accept="video/*" class="form-control input-default" placeholder="Select video" onchange="loadVideo(event)">
                <a href=""><video id="output" width="100" controls></video></a>
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
  var loadVideo = function(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('output');
        output.src = reader.result;
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
 document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('submitAll').addEventListener('click', function () {
        // Create a single FormData object to capture all form data
        const formData = new FormData();

        // Find all forms inside the tab content
        const forms = document.querySelectorAll('#languageTabsContent form');
        
        // Flag to track if any valid data exists
        let hasValidData = false;

        // Iterate through each form to collect data
        forms.forEach(form => {
            // Collect language-specific inputs
            const languageSlug = form.querySelector('input[name="language"]').value;
            
            // Check if the form has any meaningful input
            const titleInput = form.querySelector(`input[name="${languageSlug}_title"]`);
            const buttonInput = form.querySelector(`input[name="${languageSlug}_button"]`);
            const descriptionInput = form.querySelector(`textarea[name="${languageSlug}_description"]`);

            if (titleInput.value.trim() !== '' && 
                buttonInput.value.trim() !== '' && 
                descriptionInput.value.trim() !== '') {
                
                // Add language-specific inputs to formData
                formData.append(`${languageSlug}_title`, titleInput.value);
                formData.append(`${languageSlug}_button`, buttonInput.value);
                formData.append(`${languageSlug}_description`, descriptionInput.value);
                
                hasValidData = true;
            }
        });

        // Handle video upload
        const videoInput = document.getElementById('videoInp');
        if (videoInput.files.length > 0) {
            formData.append('video', videoInput.files[0]);
        }

        // Add CSRF token
        const csrfToken = document.querySelector('input[name="_token"]');
        if (csrfToken) {
            formData.append('_token', csrfToken.value);
        }

        // Check if there's any valid data to submit
        if (!hasValidData) {
            alert('Please fill in at least one language\'s form completely');
            return;
        }

        // Send AJAX request
        fetch('{{ route('slider.store') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                // Remove Content-Type header to let browser set it automatically with FormData
            }
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(err => {
                    console.error('Validation errors:', err);
                    throw new Error(err.message || 'Submission failed');
                });
            }
            return response.json();
        })
        .then(data => {
            console.log('Submission successful:', data);
            alert('Slider created successfully');
            // Optional: redirect or reset form
            // window.location.href = '{{ route('slider.index') }}';
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Submission failed: ' + error.message);
        });
    });

    // Existing video preview functionality
    var loadVideo = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };

    // Attach loadVideo to the video input
    document.getElementById('videoInp').addEventListener('change', loadVideo);
});
</script>

@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Slider
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/slider')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Sliders</li>
          <li class="breadcrumb-item active">Edit slider</li>
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
                  @php
                  // Fetch the testimonial for the current language if it exists
                      $slider = $sliders->where('language', $language->slug)->first();
                    
                  @endphp
                  <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" 
                       id="{{ $language->slug }}" 
                       role="tabpanel" 
                       aria-labelledby="{{ $language->slug }}-tab">
                      <form class="row g-3 my-3" method="POST" action="{{ route('slider.update') }}" enctype="multipart/form-data">
                          @csrf 
                          <div class="col-md-6">
                              <label for="title_{{ $language->slug }}" class="form-label">Title</label>
                              <input type="text" name="{{ $language->slug }}_title" class="form-control" id="title_{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }}
                              value="{{ old("{$language->slug}_title", $slider->title ?? ($language->slug === 'en' ? $PrimarySlider->title : '')) }}" 
                              required>
                              <input type="hidden" name="language" class="form-control" id="language" 
                              value="{{ $language->slug }}" 
                              required>
                              <input type="hidden" name="primary_id" class="form-control" id="primary_id" 
                              value="{{ $PrimarySlider->id}}" 
                              required>
                          </div>
                          {{-- <div class="col-md-6">
                              <label for="btn_{{ $language->slug }}" class="form-label">Button Text</label>
                              <input type="text" name="{{ $language->slug }}_btn" class="form-control" id="btn_{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                              value="{{ old("{$language->slug}_btn", $slider->button_text ?? ($language->slug === 'en' ? $PrimarySlider->button_text : '')) }}" 
                              required>
                          </div> --}}
                          <div class="col-md-12">
                              <label for="description_{{ $language->slug }}" class="form-label">Small Description</label>
                              <textarea name="{{ $language->slug }}_description" 
                                class="form-control ckeditor" id="description_{{ $language->slug }}" 
                                rows="10" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} required>{{ old("{$language->slug}_description", $slider->description ?? ($language->slug === 'en' ? $PrimarySlider->description : '')) }}
                              </textarea>
                          </div>
                          <a href="#" id="addRow_{{ $language->slug }}" class="add-button-link link link-primary">Add a Button</a>

                          <div id="buttonFields_{{ $language->slug }}" style="display: none;">

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
                            Media
                          </div>
                          <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                  <label class="form-label">Select Media Type:</label>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mediaType" id="imageOption" value="image">
                                    <label class="form-check-label" for="imageOption">
                                      Image
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mediaType" id="videoOption" value="video" checked>
                                    <label class="form-check-label" for="videoOption">
                                      Video
                                    </label>
                                  </div>
                                </div>
                              </div>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <label for="video1" class="form-label">Video</label>
                                    <input type="file" name="videos[video1]" id="vidInp1" accept="video/*" class="form-control input-default" placeholder="Select video">
                        
                                    <video src="" id="output1" width="500" class="my-3" controls></video>
                                </div>
                            </div> --}}
                            
                            <!-- Image Section -->
                           <!-- Image Section -->
                            <div id="imageSection" class="row" style="display:none;">
                                <div class="col-md-6">
                                    <label for="image1" class="form-label">Image</label>
                                    <input type="file" name="images[image1]" id="imgInp1" accept="image/*" class="form-control input-default" placeholder="Select image">
                                    <img src="" id="imageOutput" class="my-3 w-100" style="display:none;" />
                                </div>
                            </div>

                            <!-- Video Section -->
                            <div id="videoSection" class="row">
                                <div class="col-md-6">
                                    <label for="video1" class="form-label">Video</label>
                                    <input type="file" name="videos[video1]" id="vidInp1" accept="video/*" class="form-control input-default" placeholder="Select video">
                                    <video src="" id="videoOutput"  class="my-3 w-100" controls style="display:none;"></video>
                                </div>
                            </div>
                        </div>
    </div>
    <div class="col-md-12" style="text-align: right;">
      <button type="submit" class="btn btn-primary submit" id="submitAll">SUBMIT</button>
  </div>

      </div>
    </div>
  </div>
</div>
    </section>

  </main><!-- End #main -->
@include('Admin.include.footer')
@include('Admin.include.script')
{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Media type toggle
      const imageOption = document.getElementById('imageOption');
      const videoOption = document.getElementById('videoOption');
      const imageSection = document.getElementById('imageSection');
      const videoSection = document.getElementById('videoSection');
      
      // Image preview function
      function loadImageFile(event) {
        const input = event.target;
        const outputElement = document.getElementById('output1');
        
        if (outputElement && input.files && input.files[0]) {
          const reader = new FileReader();
          
          reader.onload = function(e) {
            outputElement.src = e.target.result;
            outputElement.style.display = 'block';
          };
          
          reader.readAsDataURL(input.files[0]);
        }
      }
  
      // Video preview function
      function loadVideoFile(event) {
        const input = event.target;
        const outputElement = document.getElementById('output1');
        
        if (outputElement && input.files && input.files[0]) {
          const reader = new FileReader();
          
          reader.onload = function(e) {
            outputElement.src = e.target.result;
            outputElement.style.display = 'block';
          };
          
          reader.readAsDataURL(input.files[0]);
        }
      }
  
      // Toggle media sections
      function toggleMediaSections() {
        if (imageOption.checked) {
          imageSection.style.display = 'block';
          videoSection.style.display = 'none';
          
          // Reset video input
          document.getElementById('vidInp1').value = '';
          document.getElementById('output1').src = '';
          document.getElementById('output1').style.display = 'none';
        } else {
          imageSection.style.display = 'none';
          videoSection.style.display = 'block';
          
          // Reset image input
          document.getElementById('imgInp1').value = '';
          document.getElementById('output1').src = '';
          document.getElementById('output1').style.display = 'none';
        }
      }
  
      // Add event listeners
      imageOption.addEventListener('change', toggleMediaSections);
      videoOption.addEventListener('change', toggleMediaSections);
      
      // File input event listeners
      document.getElementById('imgInp1').addEventListener('change', loadImageFile);
      document.getElementById('vidInp1').addEventListener('change', loadVideoFile);
  
      // Initial toggle
      toggleMediaSections();
  
      // Existing submit button logic (from previous script)
      const submitButton = document.getElementById('submitAll');
  
      if (!submitButton) {
        console.error('Submit button not found!');
        return;
      }
  
      submitButton.addEventListener('click', function (event) {
        event.preventDefault();
  
        try {
          const formData = new FormData();
          const forms = document.querySelectorAll('form');
  
          forms.forEach((form) => {
            const elements = form.elements;
            
            for (let element of elements) {
              if (element.name) {
                if (element.type === 'file') {
                  if (element.files.length > 0) {
                    formData.append(element.name, element.files[0]);
                  }
                } else if (element.type !== 'submit') {
                  formData.append(element.name, element.value);
                }
              }
            }
          });
  
          // Append media type
          formData.append('media_type', imageOption.checked ? 'image' : 'video');
  
          // Log FormData contents
          for (let pair of formData.entries()) {
            console.log(pair[0] + ': ', pair[1]);
          }
  
          const csrfToken = document.querySelector('input[name="_token"]');
          if (!csrfToken) {
            throw new Error('CSRF token not found');
          }
  
          const currentUrl = "{{ route('slider.update')}}";
  
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
            console.log('Server response:', data);
            alert(data.message || 'Forms submitted successfully');
  
            if (data.redirect) {
              window.location.href = data.redirect;
            }
          })
          .catch((error) => {
            console.error('Submission error:', error);
            alert('Failed to submit forms. Please try again. ' + error.message);
          });
        } catch (error) {
          console.error('Preparation error:', error);
          alert('Error preparing form submission: ' + error.message);
        }
      });
    });
  </script> --}}
<script>
$(document).ready(function () {
    $('a.add-button-link').each(function () {
        const languageSlug = $(this).attr('id').split('_')[1]; // Extract the language slug from the ID

        const addButtonLink = $(`#addRow_${languageSlug}`);
        const buttonFieldsContainer = $(`#buttonFields_${languageSlug}`);

        if (!addButtonLink.length || !buttonFieldsContainer.length) {
            console.error(`Missing button field elements for language: ${languageSlug}`);
            return;
        }

        // Function to create a new button field row
        function createButtonFieldRow(slug) {
            return $(`
                <div class="button-field-row">
                    <div class="col-md-6 mt-3">
                        <label for="btn_${slug}" class="form-label">Button Text</label>
                        <input type="text" name="${slug}btn[]" class="form-control" required>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="btn_link_${slug}" class="form-label">Button Link</label>
                        <input type="text" name="${slug}btn_link[]" class="form-control" required>
                        <a href="#" class="remove-button-link link link-danger mt-3">Remove Button</a>
                    </div>
                </div>
            `);
        }

        // Add 1 new row on button click
        addButtonLink.on('click', function (event) {
            event.preventDefault();

            // Append only 1 row
            const newRow = createButtonFieldRow(languageSlug);
            buttonFieldsContainer.append(newRow).show();
        });

        // Handle dynamic removal of rows
        buttonFieldsContainer.on('click', '.remove-button-link', function (event) {
            event.preventDefault();
            $(this).closest('.button-field-row').remove();
            if (!buttonFieldsContainer.children('.button-field-row').length) {
                buttonFieldsContainer.hide();
            }
        });
    });
});




</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Media type toggle elements
    const imageOption = document.getElementById('imageOption');
    const btnAdd = document.getElementById('btnAdd');
    const videoOption = document.getElementById('videoOption');
    const imageSection = document.getElementById('imageSection');
    const videoSection = document.getElementById('videoSection');
    const imageInput = document.getElementById('imgInp1');
    const videoInput = document.getElementById('vidInp1');
    const imageOutput = document.getElementById('imageOutput');
    const videoOutput = document.getElementById('videoOutput');

    // Toggle media sections
    function toggleMediaSections() {
        if (imageOption.checked) {
            imageSection.style.display = 'block';
            imageOutput.style.display = 'block';
            videoSection.style.display = 'none';

            // Reset video input and output
            videoInput.value = '';
            videoOutput.src = '';
            videoOutput.style.display = 'none';
        } else if (videoOption.checked) {
            imageSection.style.display = 'none';
            videoSection.style.display = 'block';
            videoOutput.style.display = 'block';

            // Reset image input and output
            imageInput.value = '';
            imageOutput.src = '';
            imageOutput.style.display = 'none';
        }
    }

    // Image preview function
    function loadImagePreview(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                imageOutput.src = e.target.result;
                imageOutput.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    }

    // Video preview function
    function loadVideoPreview(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                videoOutput.src = e.target.result;
                videoOutput.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    }

    // Event listeners for toggle and preview
    imageOption.addEventListener('change', toggleMediaSections);
    videoOption.addEventListener('change', toggleMediaSections);
    imageInput.addEventListener('change', loadImagePreview);
    videoInput.addEventListener('change', loadVideoPreview);

    // Initialize the form with the default state
    toggleMediaSections();
});

</script>


{{--
<script>
 document.addEventListener('DOMContentLoaded', function () {
    // Select all forms on the page
    const forms = document.querySelectorAll('form');

    forms.forEach((form) => {
        // Get the "Add a Button" and "Button Fields" elements within each form
        const addButtonLink = form.querySelector('.add-button-link');
        const buttonFields = form.querySelector('#buttonFields');
        const removeButtonLink = buttonFields.querySelector('.remove-button-link');

        if (!addButtonLink || !buttonFields || !removeButtonLink) {
            console.error('Missing elements in form:', form);
            return;
        }

        // Show the button fields when "Add a Button" is clicked
        addButtonLink.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default anchor behavior

            // Show the button fields
            buttonFields.style.display = 'block';

            // Hide the "Add a Button" link
            addButtonLink.style.display = 'none';
        });

        // Hide the button fields when "Remove Button" is clicked
        removeButtonLink.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default anchor behavior

            // Hide the button fields
            buttonFields.style.display = 'none';

            // Show the "Add a Button" link
            addButtonLink.style.display = 'inline-block';

            // Optionally clear input values
            const btnTextInput = buttonFields.querySelector('input[name$="_btn_text"]');
            const btnLinkInput = buttonFields.querySelector('input[name$="_btn_link"]');
            if (btnTextInput) btnTextInput.value = '';
            if (btnLinkInput) btnLinkInput.value = '';
        });
    });
});

</script>
--}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const submitButton = document.getElementById('submitAll');
  
    submitButton.addEventListener('click', function (event) {
        event.preventDefault();
  
        try {
            // Create a single FormData object
            const formData = new FormData();
  
            // Get CSRF token ONCE
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || 
                              document.querySelector('input[name="_token"]')?.value;
            
            if (!csrfToken) {
                throw new Error('CSRF token not found');
            }
  
            // Explicitly select all forms you want to collect data from
            const forms = document.querySelectorAll('form');
  
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
                        } else if (element.type !== 'submit' && element.name !== '_token') {
                            // Append non-file, non-submit, non-token inputs
                            formData.append(element.name, element.value);
                        }
                        console.log(`Element Name: ${element.name}, Value: ${element.value}`);
                    } 
                }
            });
            console.log('formData')
  
            // Add token ONCE
            formData.append('_token', csrfToken);
            const currentUrl = forms[0].action;
  
            // Submit using fetch
            fetch(currentUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                },
            })
            .then((response) => {
                if (response.status === 419) {
                    throw new Error('CSRF Token Expired. Please refresh the page.');
                }
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
                alert(data.message || 'Forms submitted successfully');
                
                if (data.redirect) {
                    window.location.href = data.redirect;
                }
            })
            .catch((error) => {
                // Comprehensive error handling
                console.error('Submission error:', error);
                alert(error.message || 'Failed to submit forms. Please try again.');
            });
  
        } catch (error) {
            // Catch any errors during form preparation
            console.error('Preparation error:', error);
            alert('Error preparing form submission: ' + error.message);
        }
    });
});
  </script>


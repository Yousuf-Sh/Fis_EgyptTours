    @include('Admin.include.head')
    @include('Admin.include.header')
    @include('Admin.include.asidebar')

    <main id="main" class="main">

    <div class="pagetitle">
        <h1>Offers
        <a type="submit" class="btn btn-danger" style="float:right;" href="{{route('offers.index')}}">Back</a>
        </h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href={{ route('offers.index') }}>Offers</a></li>
            <li class="breadcrumb-item active">Edit offers</li>
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
                                    <form class="" method="POST" action="{{ route('offers.update', $primaryOffer->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div class="row g3 my-3">
                                            <div class="col-md-6">
                                                <label for="title_{{ $language->slug }}" class="form-label">Title</label>
                                                <input type="text" 
                                                       name="{{ $language->slug }}_title" 
                                                       class="form-control" 
                                                       id="title_{{ $language->slug }}" 
                                                       {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                       value="{{ $offers[$language->slug]->title ?? '' }}"
                                                       required>
                                                <input type="hidden" 
                                                       name="language" 
                                                       value="{{ $language->slug }}"
                                                >
                                            </div>
                        
                                            <div class="col-md-6">
                                                <label for="type_{{ $language->slug }}" class="form-label">Service Type</label>
                                                <input type="text" 
                                                       name="{{ $language->slug }}_type" 
                                                       class="form-control" 
                                                       id="type_{{ $language->slug }}" 
                                                       {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                       value="{{ $offers[$language->slug]->type ?? '' }}"
                                                       required>
                                            </div>
                                        </div>
                                        
                                        <div class="row g-3 mb-3">
                                            <div class="col-md-4">
                                                <label for="feature1_{{ $language->slug }}" class="form-label">Feature 1</label>
                                                <input type="text" 
                                                       name="{{ $language->slug }}_feature1" 
                                                       class="form-control" 
                                                       id="feature1_{{ $language->slug }}" 
                                                       {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }}
                                                       value="{{ $offers[$language->slug]->feature1 ?? '' }}"
                                                       required>
                                            </div>
                        
                                            <div class="col-md-4">
                                                <label for="feature2_{{ $language->slug }}" class="form-label">Feature 2</label>
                                                <input type="text" 
                                                       name="{{ $language->slug }}_feature2" 
                                                       class="form-control" 
                                                       id="feature2_{{ $language->slug }}" 
                                                       {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }}
                                                       value="{{ $offers[$language->slug]->feature2 ?? '' }}"
                                                       required>
                                            </div>
                        
                                            <div class="col-md-4">
                                                <label for="feature3_{{ $language->slug }}" class="form-label">Feature 3</label>
                                                <input type="text" 
                                                       name="{{ $language->slug }}_feature3" 
                                                       class="form-control" 
                                                       id="feature3_{{ $language->slug }}" 
                                                       {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }}
                                                       value="{{ $offers[$language->slug]->feature3 ?? '' }}"
                                                       required>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                        
                        <!-- Prices & Image section -->
                        <div class="card">
                            <div class="card-header">
                            Prices & Image
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="images" id="imgInp" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile(event)">
                                        @if($primaryOffer->image)
                                            <img src="{{ Storage::url($primaryOffer->image) }}" id="output" width="100" classs="my-3">
                                        @endif
                                    </div>
                        
                                    <div class="col-md-6">
                                        <label for="price" class="form-label">Price</label>
                                        <input name="price" class="form-control" id="price" value="{{ $primaryOffer->price }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="discount_price" class="form-label">Discount Price</label>
                                        <input name="discount_price" class="form-control" id="discount_price" value="{{ $primaryOffer->discount_price }}" required>
                                    </div>
                        
                                    <div class="col-md-12" style="text-align: right;">
                                        <button type="submit" class="btn btn-primary submit" id="submitAll">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                
                    
            
            
            </form>
        </div>
    </div>
    </div>
    </div>
    </section>

    </main>
    @include('Admin.include.footer')
    @include('Admin.include.script')

<script>
      document.addEventListener('DOMContentLoaded', function() {
    const submitButton = document.getElementById('submitAll');
    
    if (!submitButton) {
        console.error('Submit button not found!');
        return;
    }

    submitButton.addEventListener('click', function(event) {
        // Prevent default form submission
        event.preventDefault();

        // Comprehensive error handling and logging
        try {
            // Find all forms inside the tab content
            const forms = document.querySelectorAll('#languageTabsContent form');
            
            if (forms.length === 0) {
                throw new Error('No forms found in the specified content area');
            }

            // Validate price inputs
            const priceInput = document.getElementById('price');
            const discountPriceInput = document.getElementById('discount_price');
            
            if (!priceInput || !discountPriceInput) {
                throw new Error('Price or discount price input not found');
            }

            // Create a single FormData object to store all form data
            const formData = new FormData();

            // Collect data from all forms
            forms.forEach((form, formIndex) => {
                // Append all form data (including hidden fields) to formData
                Array.from(form.elements).forEach(input => {
                    if (input.name) {
                        // Handle different input types
                        if (input.type === 'file') {
                            if (input.files.length > 0) {
                                formData.append(input.name, input.files[0]);
                            }
                        } else {
                            formData.append(input.name, input.value);
                        }
                    }
                });
            });

            // Append price fields
            formData.append('price', priceInput.value);
            formData.append('discount_price', discountPriceInput.value);

            // Get CSRF token
            const csrfToken = document.querySelector('input[name="_token"]');
            
            if (!csrfToken) {
                throw new Error('CSRF token not found');
            }

            // Determine submission URL (using Laravel Blade syntax)
            const currentUrl = "{{ route('offers.update', ['id' => $primaryOffer->id]) }}";
            // Improved fetch request with more comprehensive error handling
            fetch(currentUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken.value,
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                // Check if the response is ok (status in the range 200-299)
                if (!response.ok) {
                    // Try to parse error response
                    return response.json().then(errorData => {
                        throw new Error(errorData.message || 'Server error occurred');
                    });
                }
                return response.json();
            })
            .then(data => {
                // Success handling
                console.log('Server response:', data);
                
                // Optional: Show success message to user
                alert(data.message || "Forms submitted successfully");
                
                // Optional: Redirect or update UI
                if (data.redirect) {
                    window.location.href = data.redirect;
                }
            })
            .catch(error => {
                // Comprehensive error handling
                console.error('Submission error:', error);
                
                // User-friendly error message
                alert('Failed to submit forms. ' + error.message);
            });

        } catch (error) {
            // Catch any errors during form preparation
            console.error('Preparation error:', error);
            alert('Error preparing form submission: ' + error.message);
        }
    });
});
</script>

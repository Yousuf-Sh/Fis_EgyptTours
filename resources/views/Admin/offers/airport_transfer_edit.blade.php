@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
<style>
    .add-carPkg_title {
        margin-top: 12px;
        font-size:18px;
        font-weight:700;
        color: #012970;
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Services
            <a type="submit" class="btn btn-danger" style="float:right;" href="{{route('offers.index')}}">Back</a>
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href={{ route('offers.index') }}>Airport Transfer</a></li>
                <li class="breadcrumb-item active">Edit Airport Transfer</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
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
                    <form class="row g-3 my-3 submit-form" method="POST" action="{{ route('update.airport_transfer') }}" enctype="multipart/form-data" id="packageForm">
                        @csrf
                        <input type="hidden" name="p_id" value="{{ $pOffer->id }}">
                        <div class="tab-content" id="languageTabsContent">
                            @foreach($languages as $index => $language)
                                @php
                                    $offer = $offers->where('language','=',$language->slug)->first();
                                @endphp
                                <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" 
                                    id="{{ $language->slug }}" 
                                    role="tabpanel" 
                                    aria-labelledby="{{ $language->slug }}-tab">
                                    <div class="row">
                                        <div class="col-md-12 mt-2">
                                            <label for="title_{{ $language->slug }}" class="form-label">Title</label>
                                            <input name="{{ $language->slug }}_title" 
                                                   class="form-control" 
                                                   id="title_{{ $language->slug }}" 
                                                   style="{{ $language->slug === 'ar' ? 'direction:rtl;' : '' }}"
                                                   value="{{ $offer->title }}">
                                            
                                        </div>
                                        <div class="col-md-12">
                                            <label for="description_{{ $language->slug }}" class="form-label">Description</label>
                                            <textarea name="{{ $language->slug }}_description" 
                                        class="form-control ckeditor" 
                                        id="description_{{ $language->slug }}" 
                                        rows="5" 
                                        style="{{ $language->slug === 'ar' ? 'direction:rtl;' : '' }}">{{ $offer->description }}
                                </textarea>
                                <input type="hidden" name="type" class="form-control" id="type" value="0">
                                        </div>
                                    </div>
                                    <input type="hidden" name="languages[{{ $language->slug }}]" value="{{ $language->slug }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                
                                    <div class="col-md-6">
                        <label for="passengers" class="form-label">Passengers</label>
                        <select name="passengers" class="form-select">
                            <option value="" {{ empty($pOffer->passengers) ? 'selected' : '' }}>Select Passengers</option>
                            <option value="1" {{ $pOffer->passengers == 1 ? 'selected' : '' }}>1</option>
                            <option value="2" {{ $pOffer->passengers == 2 ? 'selected' : '' }}>2</option>
                            <option value="3" {{ $pOffer->passengers == 3 ? 'selected' : '' }}>3</option>
                            <option value="4" {{ $pOffer->passengers == 4 ? 'selected' : '' }}>4</option>
                            <option value="5" {{ $pOffer->passengers == 5 ? 'selected' : '' }}>5</option>
                            <option value="6" {{ $pOffer->passengers == 6 ? 'selected' : '' }}>6</option>
                            <option value="7" {{ $pOffer->passengers == 7 ? 'selected' : '' }}>7</option>
                            <option value="8" {{ $pOffer->passengers == 8 ? 'selected' : '' }}>8</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="bags" class="form-label">Bags</label>
                        <select name="bags" class="form-select">
                            <option value="" {{ empty($pOffer->passengers) ? 'selected' : '' }}>Select Bags</option>
                            <option value="1" {{ $pOffer->bags == 1 ? 'selected' : '' }}>1</option>
                            <option value="2" {{ $pOffer->bags == 2 ? 'selected' : '' }}>2</option>
                            <option value="3" {{ $pOffer->bags == 3 ? 'selected' : '' }}>3</option>
                            <option value="4" {{ $pOffer->bags == 4 ? 'selected' : '' }}>4</option>
                            <option value="5" {{ $pOffer->bags == 5 ? 'selected' : '' }}>5</option>
                            <option value="6" {{ $pOffer->bags == 6 ? 'selected' : '' }}>6</option>
                            <option value="7" {{ $pOffer->bags == 7 ? 'selected' : '' }}>7</option>
                            <option value="8" {{ $pOffer->bags == 8 ? 'selected' : '' }}>8</option>
                        </select>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{$pOffer->image ? asset($pOffer->image) : ''}}" id="output1"  class="my-3 w-100">

                    </div>
                                </div>
                        @foreach($packages as $key => $package)
                                
            <div class="add-carPkg position-relative mt-3">
                <hr>
                <h6 class="add-carPkg_title">Package</h6>
                <button type="button" class="btn btn-danger delete-btn btn-sm" style="position: absolute; top: 20px; right: 10px;">
                    <i class="fa fa-trash text-white"></i> Delete
                </button>
                <div class="row">
                    
                     <div class="col-md-6 mt-2">
                                        <label for="source" class="form-label">Origin</label>
                                        <select name="packages[{{ $key }}][source]" class="form-select">
                                            <option value="">Select Origin</option>
                                            @foreach($sources as $source)
                                                <option value="{{ $source->id }}" {{ $package->source==$source->id? 'selected' : '' }}>{{ $source->name }}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label for="destination" class="form-label">Destination</label>
                                        <select name="packages[{{ $key }}][destination]" class="form-select">
                                            <option value="">Select Destination</option>
                                         @foreach($destinations as $destination)
                                            <option value="{{ $destination->id }}" {{ $package->destination==$destination->id? 'selected' : '' }}>{{ $destination->name }}</option>
                                        @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="text" name="packages[{{ $key }}][price]" class="form-control" placeholder="USD 0.00" value="{{ $package->price ?? '' }}">

                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label for="price" class="form-label">Time</label>
                                        <input type="text" name="packages[{{ $key }}][time]" class="form-control" placeholder="Enter time" value="{{ $package->time ?? '' }}">
                                    </div>
                                    <input type="hidden" value="{{ $package->id }}" name="packages[{{ $key }}][package_id]">

                                    <div class="col-md-6 mt-2" hidden>
                                        <label for="type" class="form-label">Services Type</label>
                                        <select name="packages[{{ $key }}][type]" class="form-select">
                                            
                                            <option value="0">Airport Transfer</option>
                                            
                                        </select>
                                    </div>
                                
                                </div>
                            </div>
                        @endforeach
                                <div id="input-container" class="col-md-12 mt-3" style="text-align: right;">
                                    <button type="button" class="btn btn-primary btn-sm add-field">
                                        <i class="fa fa-plus"></i> Add Package
                                    </button>
                                </div>
                                <div class="col-md-12 mt-3" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
<!-- <script>
document.getElementById('submitAll').addEventListener('click', function () {
    // Find all forms inside the tab content
    const forms = document.querySelectorAll('#languageTabsContent form');
    
    // Get the price and discount price fields
    const price = document.getElementById('price').value;
  //  const discountPrice = document.getElementById('discount_price').value;
    
    // Get the image file if selected
    const imageInput = document.getElementById('imgInp');
    const imageFile = imageInput.files[0];

    // Create a single FormData object to store all form data
    const formData = new FormData();

    // Iterate through each form and append its inputs to the single FormData object
    forms.forEach(form => {
        // Skip empty forms (without any visible input)
        const hasInput = Array.from(form.elements).some(input => {
            return input.value.trim() !== ''; // Include hidden fields as well
        });
        if (!hasInput) {
            console.log(`Skipping form: ${form.id} (no input provided)`);
            return;
        }

        // Append all form data (including hidden fields) to formData
        Array.from(form.elements).forEach(input => {
            formData.append(input.name, input.value);
        });

        // Append the CSRF token if it's not already in the formData (to avoid duplicates)
        const csrfToken = form.querySelector('input[name="_token"]');
        if (csrfToken && !formData.has('_token')) {
            formData.append('_token', csrfToken.value);
        }
    });

    // Append the price and discount price fields to the FormData
    formData.append('price', price);
    formData.append('discount_price', discountPrice);

    // Append image to FormData if an image file is selected
    if (imageFile) {
        formData.append('images', imageFile);
    }else if(!imageFile){
        alert('No file');
    }

    // Debug: Log all form data being submitted
    console.log('Submitting all form data:');
    for (let [key, value] of formData.entries()) {
        console.log(`${key}: ${value}`);
    }

    // Send a single AJAX request to submit the combined form data
    fetch('{{ route('offers.store') }}', {
        method: 'POST',
        body: formData,
        headers: {
            // If you're using a CSRF token globally, you can set it in the headers.
            // 'X-CSRF-TOKEN': csrfToken.value // Only needed if you need to send it separately in headers
        }
    })
        .then(response => {
            // Handle response statuses
            if (!response.ok) {
                return response.json().then(err => {
                    console.error(`Validation errors:`, err.errors);
                    alert(`Validation errors: ${JSON.stringify(err.errors)}`);
                    throw new Error('Validation failed');
                });
            }
            return response.json();
        })
        .then(data => {
            console.log('Forms submitted successfully:', data);
            alert("Forms submitted successfully.");
        })
        .catch(error => {
            console.error('Error submitting forms:', error);
            alert('Error submitting forms: ' + error.message);
        });
});

</script> -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Ensure CKEditor updates its data before form submission
    document.getElementById('packageForm').addEventListener('submit', function() {
        for (const instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
    });
</script>
<script>
$(document).ready(function () {
    // Add new package section
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".add-field").on("click", function () {
        const packageCount = $(".add-carPkg").length;

        const newPackage = `
            <div class="add-carPkg position-relative mt-3">
                <hr>
                <h6 class="add-carPkg_title">Add New Package</h6>
                <button type="button" class="btn btn-danger delete-btn btn-sm" style="position: absolute; top: 20px; right: 10px;">
                    <i class="fa fa-trash text-white"></i> Delete
                </button>
                <div class="row">
                    
                   
                     <div class="col-md-6 mt-2">
                                        <label for="source" class="form-label">Origin</label>
                                        <select name="packages[${packageCount}][source]" class="form-select">
                                            <option value="">Select Origin</option>
                                            @foreach($sources as $source)
                                <option value="{{ $source->id }}">{{ $source->name }}</option>
                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label for="destination" class="form-label">Destination</label>
                                        <select name="packages[${packageCount}][destination]" class="form-select">
                                            <option value="">Select Destination</option>
                                         @foreach($destinations as $destination)
                                <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                            @endforeach
                                            
                                        </select>
                                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" name="packages[${packageCount}][price]" class="form-control" placeholder="Enter Price">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="price" class="form-label">Time</label>
                        <input type="text" name="packages[${packageCount}][time]" class="form-control" placeholder="Enter time">
                    </div>
                    <div class="col-md-6 mt-2" hidden>
                        <label for="type" class="form-label">Services Type</label>
                        <select name="packages[${packageCount}][type]" class="form-select">
                            
                            <option value="0">Airport Transfer</option>
                            
                        </select>
                    </div>
                   
                </div>
            </div>`;

        $("#input-container").append(newPackage);
    });

    // Remove package section
    $(document).on("click", ".delete-btn", function () {
        $(this).closest(".add-carPkg").remove();
    });

    // Submit form via AJAX
    $(".submit-form").on("submit", function (e) {
        e.preventDefault();
        const formData = new FormData(this);

        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response)
                alert("Packages submitted successfully!");
                $(".submit-form")[0].reset();  

$("input[type='file']").val(null); 
            },
            error: function (error) {
                alert("An error occurred.");
                console.error(error);
            },
        });
    });
});



</script>

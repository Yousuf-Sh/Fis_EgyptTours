@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
<style></style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manage Services
            <a type="submit" class="btn btn-danger" style="float:right;" href="{{route('offers.index')}}">Back</a>
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href={{ route('offers.index') }}>Excursions</a></li>
                <li class="breadcrumb-item active">Add Tour Detail</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
   
    
    <section class="section">
    <div class="row">
        @include('Admin.include.inner-services',['offer' => $offer])
        <div class="col-lg-9">
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
                    <div class="tab-content" id="languageTabsContent">
                        @foreach($languages as $index => $language)
                            <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" 
                                 id="{{ $language->slug }}" 
                                 role="tabpanel" 
                                 aria-labelledby="{{ $language->slug }}-tab">

                                <div class="card mt-3">
                                    <div class="card-header">Tours Detail</div>
                                    <div class="card-body">
                                        <form action="{{ route('update.tour_details')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="languages[{{ $language->slug }}]" value="{{ $language->slug }}">
                                            <input type="hidden" name="id" value="{{ $offer->id }}">
                                            <input type="hidden" name="type" value="{{ $offer->type }}">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="price" class="form-label">Duration</label>
                                                    <input name="{{ $language->slug }}_duration" class="form-control" id="duration" 
                                                           value="{{ $offersByLanguage[$language->slug]->duration ?? '' }}">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="location" class="form-label">Tour Location</label>
                                                    <input name="{{ $language->slug }}_location" class="form-control" id="location" 
                                                           value="{{ $offersByLanguage[$language->slug]->location ?? '' }}">
                                                </div>

                                                <div class="col-md-6 mt-3">
                                                    <label for="availability" class="form-label">Tour Availability</label>
                                                    <input name="{{ $language->slug }}_availability" class="form-control" id="availability" 
                                                           value="{{ $offersByLanguage[$language->slug]->availability ?? '' }}">
                                                </div>

                                                <div class="col-md-6 mt-3">
                                                    <label for="pickup" class="form-label">Pickup & Drop Off</label>
                                                    <input name="{{ $language->slug }}_pickup" class="form-control" id="pickup" 
                                                           value="{{ $offersByLanguage[$language->slug]->pickup ?? '' }}">
                                                </div>

                                                <div class="col-md-6 mt-3">
                                                    <label for="type" class="form-label">Tour Type</label>
                                                    <input name="{{ $language->slug }}_pickup_type" class="form-control" id="type" 
                                                           value="{{ $offersByLanguage[$language->slug]->pickup_type ?? '' }}">
                                                </div>
                                            </div>

                                            <div class="col-md-12 mt-3" style="text-align: right;">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
    
    // Get the price and discount price fields
    const price = document.getElementById('price').value;
    const discountPrice = document.getElementById('discount_price').value;
    
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

</script>



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
                <li class="breadcrumb-item active">Add Packages</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            @include('Admin.include.inner-services')
            <div class="col-lg-9">
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

                                    <div class="card-wrapper">
    <!-- Initial visible card -->
    <div class="card mt-3 mb-3" id="first-card">
        <div class="card-header">Package 1</div>
        <button type="button" class="btn btn-danger delete-btn" style="display:none; position:absolute;top:8px;right:8px;text-align: end;">
            <i class="fa fa-trash text-danger text-white"></i>Delete
        </button>
        <div class="card-body">
            <div class="row position-relative mt-2">
                <div class="col-md-6">
                    <label for="price" class="form-label">Date</label>
                    <input name="title[]" class="form-control" placeholder="From May to Sep 2025" required>
                </div>
            </div>
            <div class="row position-relative mt-2">
                <div class="col-md-6">
                    <label for="price" class="form-label">Title</label>
                    <input name="title[]" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price</label>
                    <input name="price[]" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Special Price</label>
                    <input name="special_price[]" class="form-control" required>
                </div>
            </div>
            <div class="row position-relative mt-2">
                <div class="col-md-6">
                    <label for="price" class="form-label">Title</label>
                    <input name="title[]" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price</label>
                    <input name="price[]" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Special Price</label>
                    <input name="special_price[]" class="form-control" required>
                </div>
            </div>
            <div class="row position-relative mt-2">
                <div class="col-md-6">
                    <label for="price" class="form-label">Title</label>
                    <input name="title[]" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price</label>
                    <input name="price[]" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Special Price</label>
                    <input name="special_price[]" class="form-control" required>
                </div>
            </div>
            <div class="row position-relative mt-2">
                <div class="col-md-6">
                    <label for="price" class="form-label">Title</label>
                    <input name="title[]" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price</label>
                    <input name="price[]" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Special Price</label>
                    <input name="special_price[]" class="form-control" required>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12" style="text-align: left;">
    <button type="button" class="btn btn-primary" id="add">
        <i class="fa fa-plus"></i> Add More
    </button>
</div>








                                    <!-- <div class="card mt-3">
                                        <div class="card-header">Package 2</div>
                                        <div class="card-body">
                                            <div class="row position-relative mt-2" >
                                                <div class="col-md-6">
                                                    <label for="price" class="form-label">Date</label>
                                                    <input name="title[]" class="form-control" placeholder="From Oct 2024 to Apr 2025" required>
                                                </div>
                                            </div>
                                            <div class="row position-relative mt-2" id="input-container2">
                                                <div class="col-md-6">
                                                    <label for="price" class="form-label">Title</label>
                                                    <input name="title[]" class="form-control" required>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="price" class="form-label">Price</label>
                                                    <input name="price[]" class="form-control" required>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="price" class="form-label">Special Price</label>
                                                    <input name="special_price[]" class="form-control" required>
                                                </div>
                                                <button type="button" class="btn delete-btn" style="display:none; position:absolute;bottom:0;right:0px;text-align:end;">
                                                    <i class="fa fa-trash text-danger"></i>
                                                </button>
                                            </div>

                                            <div class="col-md-12" id="input-container2" style="text-align: right;">
                                                <button type="button" class="btn btn-primary btn-sm mt-2" id="add2">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="card mt-3">
                                        <div class="card-header">Package 3</div>
                                        <div class="card-body">
                                            <div class="row position-relative mt-2" >
                                                <div class="col-md-6">
                                                    <label for="price" class="form-label">Date</label>
                                                    <input name="title[]" class="form-control" placeholder="Peak (23 Dec 2024 - 7 Jan 2025) / (14 to 23 Apr 2025)" required>
                                                </div>
                                            </div>
                                            <div class="row position-relative mt-2" id="input-container3">
                                                <div class="col-md-6">
                                                    <label for="price" class="form-label">Title</label>
                                                    <input name="title[]" class="form-control" required>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="price" class="form-label">Price</label>
                                                    <input name="price[]" class="form-control" required>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="price" class="form-label">Special Price</label>
                                                    <input name="special_price[]" class="form-control" required>
                                                </div>
                                                <button type="button" class="btn delete-btn" style="display:none; position:absolute;bottom:0;right:0px;text-align:end;">
                                                    <i class="fa fa-trash text-danger"></i>
                                                </button>
                                            </div>

                                            <div class="col-md-12" id="input-container3" style="text-align: right;">
                                                <button type="button" class="btn btn-primary btn-sm mt-2" id="add3">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        
                                    </div> -->
                                    <div class="col-md-12" style="text-align: right;">
                                        <button type="button" class="btn btn-primary submit" id="submitAll">Submit</button>
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


<script>
   $(document).ready(function() {
    var cardIndex = 1;  // Keeps track of the number of cards added

    // Initially hide the delete button in the first card
    $('#first-card .delete-btn').hide();

    // Add More button click event
    $('#add').click(function() {
        cardIndex++;  // Increment card index for new cards

        // Clone the first card template and remove its 'id'
        var newCard = $('#first-card').clone();  
        newCard.removeAttr('id').show();  // Remove the 'id' and make it visible

        // Update the card number (Package 1, Package 2, etc.)
        newCard.find('.card-header').html('Package ' + cardIndex);  

        // Make input names unique by appending a timestamp
        newCard.find('input').each(function() {
            var name = $(this).attr('name');
            $(this).attr('name', name.replace(/\[\]/, '[' + new Date().getTime() + ']')); // Ensure unique names
        });

        // Show the delete button for the new card
        newCard.find('.delete-btn').show();

        // Append the new card to the card-wrapper
        newCard.appendTo('.card-wrapper');
    });

    // Delete button functionality
    $(document).on('click', '.delete-btn', function() {
        $(this).closest('.card').remove();  // Remove the card when delete button is clicked
    });
});


</script>


<script>
    $(document).ready(function() {
        // Add new input field set with delete button when "Add" button is clicked
        $('#add2').click(function() {
            var newInputField = $('<div class="row position-relative new-input-field mt-3">' +
                '<div class="col-md-6">' +
                    '<label for="price" class="form-label">Title</label>' +
                    '<input name="title[]" class="form-control" required>' +
                '</div>' +
                '<div class="col-md-2">' +
                    '<label for="price" class="form-label">Price</label>' +
                    '<input name="price[]" class="form-control" required>' +
                '</div>' +
                '<div class="col-md-3">' +
                    '<label for="price" class="form-label">Special Price</label>' +
                    '<input name="special_price[]" class="form-control" required>' +
                '</div>' +
                '<button type="button" class="btn delete-btn" style="position:absolute; bottom:0; right:0px;text-align:end;">' +
                    '<i class="fa fa-trash text-danger"></i>' +
                '</button>' +
            '</div>');

            // Append the new input field set before the Add button container
            $('#input-container2').after(newInputField);
        });

        // Delegate event for dynamically created delete buttons
        $(document).on('click', '.delete-btn', function() {
            // Remove the closest input field set (the parent div of the clicked delete button)
            $(this).closest('.new-input-field').remove();
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Add new input field set with delete button when "Add" button is clicked
        $('#add3').click(function() {
            var newInputField = $('<div class="row position-relative new-input-field mt-3">' +
                '<div class="col-md-6">' +
                    '<label for="price" class="form-label">Title</label>' +
                    '<input name="title[]" class="form-control" required>' +
                '</div>' +
                '<div class="col-md-2">' +
                    '<label for="price" class="form-label">Price</label>' +
                    '<input name="price[]" class="form-control" required>' +
                '</div>' +
                '<div class="col-md-3">' +
                    '<label for="price" class="form-label">Special Price</label>' +
                    '<input name="special_price[]" class="form-control" required>' +
                '</div>' +
                '<button type="button" class="btn delete-btn" style="position:absolute; bottom:0; right:0px;text-align:end;">' +
                    '<i class="fa fa-trash text-danger"></i>' +
                '</button>' +
            '</div>');

            // Append the new input field set before the Add button container
            $('#input-container3').after(newInputField);
        });

        // Delegate event for dynamically created delete buttons
        $(document).on('click', '.delete-btn', function() {
            // Remove the closest input field set (the parent div of the clicked delete button)
            $(this).closest('.new-input-field').remove();
        });
    });
</script>



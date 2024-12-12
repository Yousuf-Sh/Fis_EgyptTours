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
                <li class="breadcrumb-item active">Add Tour Highlights</li>
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
                                    <form action="{{ route('update.tour_higlights')}}" method="POST">
                                    @csrf
                                    <div class="card mt-3" id="package-card">
                                        <button class="btn btn-danger" id="delete-package" style="display:none;position:absolute;top:8;right:8;">Delete package</button> 
                                        <div class="card-header">Package</div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="price" class="form-label">Title</label>
                                                    <input name="title" class="form-control" id="title" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} required>
                                                </div>
                                            </div>
                                            <!-- <div class="row position-relative">
                                                <div class="col-md-11 mt-2">
                                                    <label for="price" class="form-label">Attributes</label>
                                                    <input name="title2" class="form-control" id="title2" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} required>
                                                </div>
                                                <button type="button" class="btn" id="delete" style="display:none; position:absolute;bottom:0;right:-55px;">
                                                    <i class="fa fa-trash text-danger"></i>
                                                </button>
                                            </div> -->

                                            <div class="col-md-12" id="input-container" style="text-align: right;">
                                                <button type="button" class="btn btn-primary btn-sm mt-2 add-field">
                                                    <i class="fa fa-plus">Add Atributes</i> 
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Button to add more packages (appears after the latest card) -->
                                    <div class="">
                                        <button class="btn btn-primary" id="add-more-packages">Add more packages</button>
                                    </div>




                                    
                                    
                                    <div class="col-md-12" style="text-align: right;">
                                        <button type="button" class="btn btn-primary submit" id="submitAll">Submit</button>
                                    </div>
</form>
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
    $(document).ready(function() {
        // Add more package (entire card) when "Add more packages" button is clicked
        $('#add-more-packages').click(function() {
            // Create a new package card
            var newPackageCard = $(
                '<div class="card mt-3">' +
                    '<div class="card-header">Package</div>' +
                    '<button class="btn btn-danger delete-package" style="display:block;position:absolute;top:8px;right:8px;">Delete package</button>' +
                    '<div class="card-body">' +
                        '<div class="row">' +
                            '<div class="col-md-6">' +
                                '<label for="price" class="form-label">Title</label>' +
                                '<input name="title" class="form-control" required>' +
                            '</div>' +
                        '</div>' +
                        '<div class="row position-relative">' +
                            '<div class="col-md-11 mt-2">' +
                                '<label for="price" class="form-label">Attributes</label>' +
                                '<input name="title2" class="form-control" required>' +
                            '</div>' +
                            '<button type="button" class="btn" id="delete" style="display:none; position:absolute;bottom:0;right:-55px;">' +
                                '<i class="fa fa-trash text-danger"></i>' +
                            '</button>' +
                        '</div>' +
                        '<div class="col-md-12" id="input-container" style="text-align: right;">' +
                            '<button type="button" class="btn btn-primary btn-sm mt-2 add-field">' +
                                '<i class="fa fa-plus"></i>' +
                            '</button>' +
                        '</div>' +
                    '</div>' +
                '</div>'
            );

            // Append the new package card after the last card
            $('#add-more-packages').before(newPackageCard);
        });

        // Add new input field when the "Add" button inside a package card is clicked
        $(document).on('click', '.add-field', function() {
            var newInputField = $('<div class="col-md-11 mt-2 position-relative">' +
                '<input name="newTitle" class="form-control" required>' +
                '<button type="button" class="btn delete-btn" style="display:block; position:absolute; bottom:0; right:-55px;">' +
                '<i class="fa fa-trash text-danger"></i>' +
                '</button>' +
                '</div>');
            
            // Append the new input field inside the current card's input container
            $(this).closest('.card-body').find('#input-container').before(newInputField);
        });

        // Delegate event for dynamically created delete buttons (input fields)
        $(document).on('click', '.delete-btn', function() {
            // Remove the closest input field (the parent div of the clicked delete button)
            $(this).closest('.col-md-11').remove();
        });

        // Delegate event for dynamically created delete package buttons
        $(document).on('click', '.delete-package', function() {
            // Remove the closest package card (the parent div of the clicked delete button)
            $(this).closest('.card').remove();
        });
    });
</script>



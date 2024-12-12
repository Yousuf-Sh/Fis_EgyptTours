@include('Admin.include.head')

@include('Admin.include.header')
@include('Admin.include.asidebar')


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manage Services
            <a type="submit" class="btn btn-danger" style="float:right;" href="{{route('offers.index')}}">Back</a>
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href={{ route('offers.index') }}>Excursions</a></li>
                <li class="breadcrumb-item active">Add Gallery</li>
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
                        <!-- <ul class="nav nav-tabs mt-3" id="languageTabs" role="tablist">
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
                        </ul> -->
                        <div class="tab-content" id="languageTabsContent">
    @foreach($languages as $index => $language)
    <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="{{ $language->slug }}" role="tabpanel" aria-labelledby="{{ $language->slug }}-tab">
    <div class="card mt-3">
    <div class="card-header">Gallery</div>
    <div class="card-body">
        <form action="{{ route('update.gallery')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $offer->id }}">
            <input type="hidden" name="type" value="{{ $offer->type }}">

            <div class="wrapper-pic">
                <div class="container-pic">
                    <div class="upload-container">
                        <div class="border-container" id="drag-area">
                            <div class="icons fa-4x" id="upload-icon">
                                <i class="fa fa-file-image" data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
                            </div>
                            <input type="file" id="file-upload"  style="opacity: 0;" name="gallery_images[]" multiple>
                            <p>Drag and drop images here, or 
                                <a href="#" id="file-browser">browse</a> your computer.
                            </p>
                            <div id="file-previews" class="d-flex flex-wrap mt-3"></div> <!-- For image previews -->
                        </div>
                    </div>
                </div>
                <button id="delete-all-btn" class="btn btn-danger mt-3" style="display: none;">Delete All</button>
            </div>

            <div class="col-md-12" style="text-align: right;">
                <button type="submit" class="btn btn-primary submit" id="submitAll">Submit</button>
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

@include('Admin.include.footer')
@include('Admin.include.script')


<!-- 
<script>
    $(document).ready(function() {
    // Trigger file input when clicking "Browse"
    $("#file-browser").click(function (e) {
        e.preventDefault();
        $("#file-upload").trigger("click");
    });

    // Handle file selection (through browse or drag and drop)
    $("#file-upload").change(function(e) {
        handleFileUpload(e.target.files);
    });

    // Handle drag-and-drop
    const dragArea = document.getElementById('drag-area');

    dragArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        dragArea.style.backgroundColor = "#e0e0e0"; // Change background color on hover
    });

    dragArea.addEventListener('dragleave', function() {
        dragArea.style.backgroundColor = "#f9f9f9"; // Restore original background color
    });

    dragArea.addEventListener('drop', function(e) {
        e.preventDefault();
        dragArea.style.backgroundColor = "#f9f9f9"; // Restore background color after drop
        handleFileUpload(e.dataTransfer.files);
    });

    // Function to handle the file uploads (both drag and drop and browse)
    function handleFileUpload(files) {
        const previewContainer = document.getElementById('file-previews');
        const uploadIcon = document.getElementById('upload-icon');
        const deleteAllButton = document.getElementById('delete-all-btn');
        previewContainer.innerHTML = ''; // Clear the preview container

        let hasImages = false;

        Array.from(files).forEach(file => {
            console.log(`File type: ${file.type}`); // Log the file type

            // Check if the file is an image
            if (file.type.startsWith('image')) {
                console.log(`Processing image: ${file.name}`); // Log when an image is being processed

                const reader = new FileReader();

                reader.onload = function(e) {
                    const imgElement = document.createElement('img');
                    imgElement.src = e.target.result;
                    imgElement.classList.add('image-preview'); // Add a class for styling

                    // Append the image to the preview container
                    previewContainer.appendChild(imgElement);

                    hasImages = true; // Set flag if at least one image is uploaded
                    console.log(`Image preview added: ${file.name}`); // Log image added
                };

                reader.readAsDataURL(file); // Read the file as a data URL
            } else {
                // Handle non-image files
                console.log(`Non-image file: ${file.name}`); // Log non-image file
                alert('Only image files are allowed!');
            }
        });
        hasImages = true;
        // If images have been uploaded, hide the upload icon and show the "Delete All" button
        if (hasImages) {
            uploadIcon.style.display = 'none'; // Hide the upload icon
            deleteAllButton.style.display = 'block'; // Show the "Delete All" button
        } else {
            deleteAllButton.style.display = 'none'; // Hide the "Delete All" button if no images
        }
    }

    // Handle "Delete All" button click
    $("#delete-all-btn").click(function() {
        const previewContainer = document.getElementById('file-previews');
        previewContainer.innerHTML = ''; // Clear the preview container
        const uploadIcon = document.getElementById('upload-icon');
        const deleteAllButton = document.getElementById('delete-all-btn');

        uploadIcon.style.display = 'block'; // Show the upload icon again
        deleteAllButton.style.display = 'none'; // Hide the "Delete All" button again
    });
});

</script> -->
<script>
$(document).ready(function () {
    const $dragArea = $('#drag-area');
    const $fileUpload = $('#file-upload');
    const $filePreviews = $('#file-previews');
    const $deleteAllBtn = $('#delete-all-btn');
    const $fileBrowserLink = $('#file-browser');

    let selectedFiles = []; // To store selected files

    // Handle drag and drop functionality
    $dragArea.on('dragover', function (e) {
        e.preventDefault();
        $(this).addClass('active');
    });

    $dragArea.on('dragleave', function () {
        $(this).removeClass('active');
    });

    $dragArea.on('drop', function (e) {
        e.preventDefault();
        $(this).removeClass('active');
        handleFiles(e.originalEvent.dataTransfer.files);
    });

    // Handle file input click via the "browse" link
    $fileBrowserLink.on('click', function (e) {
        e.preventDefault();
        $fileUpload.click();
    });

    // Handle file input change event
    $fileUpload.on('change', function () {
        handleFiles(this.files);
    });

    // Handle file selection
    function handleFiles(files) {
        $.each(files, function (index, file) {
            if (!selectedFiles.some((f) => f.name === file.name)) {
                selectedFiles.push(file);
                displayFilePreview(file);
            }
        });
        toggleDeleteAllButton();
    }

    // Display file previews
    function displayFilePreview(file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            const previewHtml = `
                <div class="file-preview m-2 position-relative">
                    <img src="${e.target.result}" alt="${file.name}" class="img-thumbnail" style="width: 100px; height: 100px;">
                    <button class="btn btn-sm btn-danger position-absolute top-0 end-0 remove-btn" data-name="${file.name}">
                        &times;
                    </button>
                </div>
            `;
            $filePreviews.append(previewHtml);
        };

        reader.readAsDataURL(file);
    }

    // Remove a file preview
    $filePreviews.on('click', '.remove-btn', function () {
        const fileName = $(this).data('name');
        selectedFiles = selectedFiles.filter((file) => file.name !== fileName);
        $(this).closest('.file-preview').remove();
        toggleDeleteAllButton();
    });

    // Handle delete all button
    $deleteAllBtn.on('click', function () {
        selectedFiles = [];
        $filePreviews.empty();
        toggleDeleteAllButton();
    });

    // Toggle delete all button visibility
    function toggleDeleteAllButton() {
        $deleteAllBtn.toggle(selectedFiles.length > 0);
    }
});

    </script>
    <script>
        $(document).ready(function () {
    const $fileUpload = $('#file-upload');
    const $form = $('form');

    $form.on('submit', function(e) {
        // Create a new FileList to hold all selected files
        const dataTransfer = new DataTransfer();
        
        // Add all selected files to the input
        selectedFiles.forEach(file => {
            dataTransfer.items.add(file);
        });

        // Update the file input with all files
        $fileUpload[0].files = dataTransfer.files;
    });
});
    </script>









@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Manage Videos
            <a type="submit" class="btn btn-danger" style="float:right;" href="{{route('offers.index')}}">Back</a>
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('offers.index') }}">Excursions</a></li>
                <li class="breadcrumb-item active">Add Videos</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            @include('Admin.include.inner-services')
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="languageTabsContent">
                            @foreach($languages as $index => $language)
                            <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="{{ $language->slug }}" role="tabpanel" aria-labelledby="{{ $language->slug }}-tab">
                                <div class="card mt-3">
                                    <div class="card-header">Video Gallery</div>
                                    <div class="card-body">
                                        <form action="{{ route('update.reviews') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $offer->id }}">
                                            <input type="hidden" name="type" value="{{ $offer->type }}">

                                            <div class="wrapper-video">
                                                <div class="container-video">
                                                    <div class="upload-container">
                                                        <div class="border-container" id="drag-area">
                                                            <div class="icons fa-4x" id="upload-icon">
                                                                <i class="fa fa-file-video" data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
                                                            </div>
                                                            <input type="file" id="file-upload" style="opacity: 0;" name="gallery_videos[]" multiple accept="video/*">
                                                            <p>Drag and drop videos here, or 
                                                                <a href="#" id="file-browser">browse</a> your computer.
                                                            </p>
                                                            <div id="file-previews" class="d-flex flex-wrap mt-3"></div>
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
</main>

@include('Admin.include.footer')
@include('Admin.include.script')

<script>
$(document).ready(function () {
    const $dragArea = $('#drag-area');
    const $fileUpload = $('#file-upload');
    const $filePreviews = $('#file-previews');
    const $deleteAllBtn = $('#delete-all-btn');
    const $fileBrowserLink = $('#file-browser');

    let selectedFiles = [];

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
                if (file.type.startsWith('video/')) {
                    selectedFiles.push(file);
                    displayVideoPreview(file);
                } else {
                    alert('Only video files are allowed!');
                }
            }
        });
        toggleDeleteAllButton();
    }

    // Display video previews
    function displayVideoPreview(file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            const previewHtml = `
                <div class="file-preview m-2 position-relative">
                    <video width="100" height="100" controls>
                        <source src="${e.target.result}" type="${file.type}">
                        Your browser does not support the video tag.
                    </video>
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

    // Ensure all files are added before form submission
    $('form').on('submit', function(e) {
        const dataTransfer = new DataTransfer();
        
        selectedFiles.forEach(file => {
            dataTransfer.items.add(file);
        });

        $fileUpload[0].files = dataTransfer.files;
    });
});
</script>
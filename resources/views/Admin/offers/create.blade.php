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
        <li class="breadcrumb-item active">Add offers</li>
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
                            <form class="" method="POST" action="{{ route('offers.store.excursion') }}" enctype="multipart/form-data" id="packageForm">
                                @csrf
                                <!-- <div class="row g3 my-3">

                                    <div class="col-md-6">
                                        <label for="title_{{ $language->slug }}" class="form-label">Title</label>
                                        <input type="text" name="{{ $language->slug }}_title" class="form-control" id="title_{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} required>
                                        <input type="hidden" name="language_{{ $language->slug }}" class="form-control" id="language_{{ $language->slug }}" value="{{ $language->slug }}" required>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="type_{{ $language->slug }}" class="form-label">Service Type</label>
                                        <input type="text" name="{{ $language->slug }}_type" class="form-control" id="type_{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} required>
                                    </div>
                                </div>
                                
                                <div class="row g-3 mb-3">

                                    <div class="col-md-4">
                                        <label for="price_{{ $language->slug }}" class="form-label">Feature 1</label>
                                        <input type="text" name="{{ $language->slug }}_feature1" class="form-control" id="feature1_{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} required>
                                    </div>


                                    <div class="col-md-4">
                                        <label for="feature2_{{ $language->slug }}" class="form-label">Feature 2</label>
                                        <input type="text" name="{{ $language->slug }}_feature2" class="form-control" id="feature2_{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} required>
                                    </div>


                                    <div class="col-md-4">
                                        <label for="feature3_{{ $language->slug }}" class="form-label">Feature 3</label>
                                        <input name="{{ $language->slug }}_feature3" class="form-control" id="feature3_{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} required>
                                    </div>


                                </div> -->
                                <div class="row">
                                        <div class="col-md-12 mt-2">
                                            <label for="title_{{ $language->slug }}" class="form-label">Title</label>
                                            <input name="{{ $language->slug }}_title" 
                                                   class="form-control" 
                                                   id="title_{{ $language->slug }}" 
                                                   style="{{ $language->slug === 'ar' ? 'direction:rtl;' : '' }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="description_{{ $language->slug }}" class="form-label">Description</label>
                                            <textarea name="{{ $language->slug }}_description" 
          class="form-control ckeditor" 
          id="description_{{ $language->slug }}" 
          rows="5" 
          style="{{ $language->slug === 'ar' ? 'direction:rtl;' : '' }}">
</textarea>
<input type="hidden" name="type" class="form-control" id="type" value="1">
                                        </div>
                                    </div>
                                    <input type="hidden" name="languages[{{ $language->slug }}]" value="{{ $language->slug }}">
                               
                                
                           
                        </div>
                    @endforeach
                </div>
                </div>
        </div> 
        <div class="card">
            <div class="card-header">
              Prices & Image
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="imgInp" required="" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile(event)">
                        <a href=""><img src="" id="output"  width="100" ></a>
                    </div>

                    <div class="col-md-6">
                        <label for="price" class="form-label">Price</label>
                        <input name="price" class="form-control" id="price" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} >
                    </div>
                    <div class="col-md-6">
                        <label for="discount_price" class="form-label"> Discount Price</label>
                        <input name="discount_price" class="form-control" id="discount_price" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} >
                    </div>
                   
    <input type="hidden" name="type" class="form-control" id="type" value="1" readonly>


                    <div class="col-md-12" style="text-align: right;">
                        <button type="submit" class="btn btn-primary submit" id="submitAll">Submit</button>
                    </div>
                </div>
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
}



</script>
@include('Admin.include.footer')
@include('Admin.include.script')
<script>
    // Ensure CKEditor updates its data before form submission
    document.getElementById('packageForm').addEventListener('submit', function() {
        for (const instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
    });
</script>


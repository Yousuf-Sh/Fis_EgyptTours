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
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">Edit Home Slider</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section ">
      <div class="row mt-3">
        

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Home Slider Form</h5> -->
              <ul class="nav nav-tabs mt-3" id="languageTabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="english-tab" data-bs-toggle="tab" href="#english" role="tab" aria-controls="english" aria-selected="true">English</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="arabic-tab" data-bs-toggle="tab" href="#arabic" role="tab" aria-controls="arabic" aria-selected="false">Arabic</a>
                </li>
              </ul>
              <div class="tab-content" id="languageTabsContent">
                <!-- English Tab Content -->
                <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">
                  <!-- English Form Content -->
                  <form class="row g-3" method="POST" action="{{ route('slider.update') }}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="id" value="{{ $slider->id }}" />
                      <!-- English Form Fields -->
                      <!-- Title -->
                      <div class="col-md-6">
                          <label for="inputtitle" id="title-label" class="form-label">Title</label>
                          <input type="text" name="title" class="form-control" id="inputtitle" placeholder="" value="{{ $slider->title }}">
                      </div> 
                      <!-- Short Description -->
                      <div class="col-md-6">
                        <label for="inputState" id="button-label" class="form-label">Button</label>
                        <input type="text" name="button" class="form-control" id="inputtitle" placeholder="" value="{{ $slider->button }}">
                    </div>
              
                      <div class="col-md-12">
                          <label for="inputState" id="description-label" class="form-label">Short Description</label>
                          <textarea type="text" class="form-control" id="inputName5" rows="3" name="short_description">{{ $slider->short_description }}</textarea>
                      </div>
                      <!-- Label -->
                      {{-- <div class="col-md-6">
                          <label for="inputtitle" id="label-label" class="form-label">Label</label>
                          <input type="text" name="label" class="form-control" id="inputtitle" placeholder="" value="{{ $slider->label }}" >
                      </div>  --}}
                      <!-- Button -->
                    
                </div>
                <div class="tab-pane fade" id="arabic" role="tabpanel" aria-labelledby="arabic-tab">
                <!-- Arabic Form Content -->
                <div class="row">
                    <input type="hidden" name="id" value="{{ $slider->id }}" />
                    <!-- Arabic Form Fields -->
                    <!-- Title -->
                    <div class="col-md-6">
                        <label for="inputtitle" id="arabic_title" class="form-label text-right">Title</label>
                        <input type="text" name="arabic_title" class="form-control" style="direction: rtl;" placeholder="أدخل العنوان باللغة العربية" value="{{ $slider->arabic_title }}">
                    </div> 
                    <!-- Short Description -->
                    <div class="col-md-6">
                      <label for="inputState" id="arabic_button" class="form-label">Button</label>
                      <input type="text" name="arabic_button" class="form-control" style="direction: rtl;"placeholder="أدخل نص الزر باللغة العربية" value="{{ $slider->arabic_button }}">
                  </div>
                    <div class="col-md-12">
                        <label for="inputState" id="arabic_short_description" class="form-label">Short Description</label>
                        <textarea type="text" class="form-control " rows="3" style="direction: rtl;"name="arabic_short_description" placeholder="أدخل الوصف باللغة العربية">{{ $slider->arabic_short_description }}</textarea>
                    </div>
                    <!-- Label -->
                    {{-- <div class="col-md-6">
                        <label for="inputtitle" id="arabic_label"class="form-label">Label</label>
                        <input type="text" name="arabic_label" class="form-control" style="direction: rtl;"placeholder="أدخل التسمية باللغة العربية" value="{{ $slider->arabic_label }}" >
                    </div>  --}}
                    <!-- Button -->
                    
                    <!-- Image Upload -->
                    {{-- <div class="col-md-6">
                        <label for="image" id="arabic_images"  class="form-label">Image</label>
                        <input type="file" name="images" accept="image/*" class="form-control input-default" placeholder="Select Arabic image" onchange="loadFile1(event)">
                        <a href=""><img src="{{ asset('Backend/images/' . $slider->images) }}" id="output1"  width="150" ></a>
                    </div> --}}
                    <!-- Submit Button -->
                      <!-- Image Upload -->
                      
                    <!-- End Arabic Form -->
                </div>
              </div>
            <div class="col-md-6">
              <label for="image" id="imgInp" class="form-label">Update Image</label>
              <input type="file" name="images" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
              <a ><img src="{{ asset('Backend/images/' . $slider->images) }}" id="output"  width="150" ></a>
          </div>
          <div class="col-md-12" style="text-align: right;">
              <button type="submit" class="btn btn-primary submit"> Update</button>
          </div>
        </form>
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

        // Update Arabic tab image preview
        var output1 = document.getElementById('output1');
        if (output1) {
            output1.src = reader.result;
        }
    };
    reader.readAsDataURL(event.target.files[0]);
};

// var loadFile1 = function(event) {
//     var reader= new FileReader();
//     reader.onload = function(){
//         var output = document.getElementById('output1');
//         output.src = reader.result;

//         // Update English tab image preview
//         var output2 = document.getElementById('output');
//         if (output2) {
//             output2.src = reader.result;
//         }
//     };
//     reader.readAsDataURL(event.target.files[0]);
//};

  document.addEventListener('DOMContentLoaded', function() {
    
      //alert('hdsjf');
     
      function toggleLanguageTab(lang) {
        console.log('Language tab clicked:', lang);
        if (lang === 'english') {
          document.getElementById('english-tab').classList.add('active');
      document.getElementById('arabic-tab').classList.remove('active');
      document.getElementById('english').classList.add('active', 'show');
      document.getElementById('arabic').classList.remove('active', 'show');
          // document.getElementById('english').classList.add('show', 'active');
          // document.getElementById('arabic').classList.remove('show', 'active');
          // Update labels to English
          document.getElementById('title-label').textContent = 'Title';
          document.getElementById('label-label').textContent = 'Label';
          document.getElementById('description-label').textContent = 'Description';
          document.getElementById('button-label').textContent = 'Button';
          document.getElementById('imgInp').textContent = 'Image';
        
          // document.querySelectorAll('[name^="arabic_"]').forEach(function(element) {
          //       element.style.display = 'none';
          //   });
          //   document.querySelectorAll('[name^="english_"]').forEach(function(element) {
          //       element.style.display = '';
          //       element.classList.remove('rtl'); 
          //   });
        } else {
        //   var englishTitle = document.querySelector('[name="title"]').value;
        // var englishLabel = document.querySelector('[name="label"]').value;
        // var englishDescription = document.querySelector('[name="short_description"]').value;
        // var englishButton = document.querySelector('[name="button"]').value;
        
        // // Update corresponding Arabic input fields with English values
        // document.querySelector('[name="arabic_title"]').value = englishTitle;
        // document.querySelector('[name="arabic_label"]').value = englishLabel;
        // document.querySelector('[name="arabic_short_description"]').value = englishDescription;
        // document.querySelector('[name="arabic_button"]').value = englishButton;
        document.getElementById('arabic-tab').classList.add('active');
      document.getElementById('english-tab').classList.remove('active');
      document.getElementById('arabic').classList.add('active', 'show');
      document.getElementById('english').classList.remove('active', 'show');
          document.getElementById('arabic').classList.add('active');
          document.getElementById('english').classList.remove('active');
          document.getElementById('arabic').classList.add('rtl');
          // document.getElementById('arabic').classList.add('show', 'active');
          // document.getElementById('english').classList.remove('show', 'active');
          // Update labels to Arabic
          // document.getElementById('arabic_title').textContent = 'العنوان';
          // document.getElementById('arabic_short_description').textContent = 'التسمية';
          // document.getElementById('arabic_label').textContent = 'الوصف';
          // document.getElementById('arabic_button').textContent = 'زر';
          // document.getElementById('arabic_images').textContent = 'صورةر';
          // document.querySelectorAll('[name^="arabic_"]').forEach(function(element) {
          //       element.style.display = 'none';
          //   });
          //   document.querySelectorAll('[name^="english_"]').forEach(function(element) {
          //       element.style.display = '';
          //       element.classList.add('rtl'); // Add RTL class
          //   });
         
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
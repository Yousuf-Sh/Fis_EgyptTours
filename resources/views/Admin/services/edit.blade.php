
@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Services
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/services')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Services</li>
          <li class="breadcrumb-item active">Add Services Details</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-body">
                      <!-- Language Tabs -->
                      <ul class="nav nav-tabs mt-3" id="languageTabs" role="tablist">
                          @foreach($languages as $index => $language)
                              @if($language->slug == $service->language)
                                  <li class="nav-item" role="presentation">
                                      <a class="nav-link active" 
                                         id="{{ $language->slug }}-tab" 
                                         data-bs-toggle="tab" 
                                         href="#{{ $language->slug }}" 
                                         role="tab" 
                                         aria-controls="{{ $language->slug }}" 
                                         aria-selected="true">
                                          {{ ucfirst($language->name) }}
                                      </a>
                                  </li>
                              @endif
                          @endforeach
                      </ul>
  
                      <div class="tab-content" id="languageTabsContent">
                          @foreach($languages as $index => $language)
                              @if($language->slug == $service->language)
                                  <div class="tab-pane fade show active" 
                                       id="{{ $language->slug }}" 
                                       role="tabpanel" 
                                       aria-labelledby="{{ $language->slug }}-tab">
                                      <!-- Multi Columns Form -->
                                      <form class="row g-3" method="POST" action="{{ route('services.update') }}" enctype="multipart/form-data">
                                          @csrf
                                          <input type="hidden" name="id" value="{{$service->id}}">
                                          <div class="col-md-12">
                                              <label for="title_{{ $language->slug }}" class="form-label">
                                                  {{ ucfirst($language->name) }} Title
                                              </label>
                                              <input type="text" 
                                                     name="title" 
                                                     class="form-control" value="{{$service->title}}"
                                                     id="title_{{ $language->slug }}" 
                                                     {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }}>
                                          </div>
  
                                          <div class="col-md-6">
                                              <label for="feature1_{{ $language->slug }}" class="form-label">Feature 1</label>
                                              <input type="text" 
                                                     name="feature1" 
                                                     class="form-control" value="{{$service->feature1}}"
                                                     id="feature1_{{ $language->slug }}">
                                          </div>
  
                                          <div class="col-md-6">
                                              <label for="feature2_{{ $language->slug }}" class="form-label">Feature 2</label>
                                              <input type="text" 
                                                     name="feature2" value="{{$service->feature2}}"
                                                     class="form-control" 
                                                     id="feature2_{{ $language->slug }}">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="feature2_{{ $language->slug }}" class="form-label">Feature 3</label>
                                            <input type="text" 
                                                   name="feature3" value="{{$service->feature3}}"
                                                   class="form-control" 
                                                   id="feature2_{{ $language->slug }}">
                                        </div>
                                        <div class="col-md-6">
                                          <label for="feature2_{{ $language->slug }}" class="form-label">Feature 4</label>
                                          <input type="text" 
                                                 name="feature4" value="{{$service->feature4}}"
                                                 class="form-control" 
                                                 id="feature2_{{ $language->slug }}">
                                      </div>
                                          <!-- Add other form fields here -->
                                          <hr>
                                          <h3 class="text-center">Transportation</h3>
                                        </hr>
                                        <div class="col-md-6">
                                          <label for="title_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Heading</label>
                                          <input type="text" name="tr_title" value="{{$service->tr_title}}" class="form-control" id="title_{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }}>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="description_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Short Description</label>
                                            <textarea name="tr_description"  class="form-control" id="description_{{ $language->slug }}" rows="3" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} >{{$service->tr_description}}</textarea>
                                        </div>
                                        <div class="col-md-6">
                                          <label for="title_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Heading</label>
                                          <input type="text" name="tr_title1" value="{{$service->tr_title1}}" class="form-control" id="title_{{ $language->slug }}"  {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }}>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="description_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Short Description</label>
                                            <textarea name="tr_description1" class="form-control" id="description_{{ $language->slug }}" rows="3" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} >{{$service->tr_description1}}</textarea>
                                        </div>
                                        
                                                                              <div class="col-md-6">
                                          <label for="title_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Heading</label>
                                          <input type="text" name="tr_title2"  value="{{$service->tr_title2}}" class="form-control" id="title_{{ $language->slug }}"  {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }}>
                                        </div>
                                                                              <div class="col-md-6">
                                                                                  <label for="description_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Short Description</label>
                                                                                  <textarea name="tr_description2" class="form-control" id="description_{{ $language->slug }}" rows="3" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} >{{$service->tr_description2}}</textarea>
                                                                              </div>
                                                                            
                                                                             
                                          @foreach($images as $service)
                                          <div class="row mt-3">
                                              <!-- Image 1 -->
                                              @if($service->image) 
                                              <div class="col-md-4">
                                                  <label for="image" class="form-label">Image 1</label>
                                                  <input type="file" 
                                                         name="image" 
                                                      
                                                         class="form-control input-default" 
                                                         onchange="loadFile(event, 'output_{{ $service->id }}_1')">
                                                  <a href="#">
                                                      <img src="{{ asset('Backend/images/' . $service->image) }}" 
                                                           id="output_{{ $service->id }}_1" 
                                                           width="150">
                                                  </a>
                                              </div>
                                              @endif
                                          
                                              <!-- Image 2 -->
                                              @if($service->image1) 
                                              <div class="col-md-4">
                                                  <label for="image1" class="form-label">Image 2</label>
                                                  <input type="file" 
                                                         name="image1" 
                                                         
                                                         class="form-control input-default"
                                                         onchange="loadFile(event, 'output_{{ $service->id }}_2')">
                                                  <a href="#">
                                                      <img src="{{ asset('Backend/images/' . $service->image1) }}" 
                                                           id="output_{{ $service->id }}_2" 
                                                           width="150">
                                                  </a>
                                              </div>
                                              @endif
                                          
                                              <!-- Image 3 -->
                                              @if($service->image2) 
                                              <div class="col-md-4">
                                                  <label for="image2" class="form-label">Image 3</label>
                                                  <input type="file" 
                                                         name="image2" 
                                                        
                                                         class="form-control input-default" 
                                                         onchange="loadFile(event, 'output_{{ $service->id }}_3')">
                                                  <a href="#">
                                                      <img src="{{ asset('Backend/images/' . $service->image2) }}" 
                                                           id="output_{{ $service->id }}_3" 
                                                           width="150">
                                                  </a>
                                              </div>
                                              @endif
                                          </div>
                                          @endforeach
                                          

  
                                          <!-- Submit Button -->
                                          <div class="col-md-12 mt-4">
                                              <button type="submit" class="btn btn-primary">Save</button>
                                          </div>
                                      </form>
                                  </div>
                              @endif
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
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
<script>
  var loadFile1 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output1 = document.getElementById('output1');
      output1.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile2 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output1 = document.getElementById('output1');
      output1.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile3 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output1 = document.getElementById('output1');
      output1.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile4 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output1 = document.getElementById('output1');
      output1.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
 

</script>
@include('Admin.include.footer')
@include('Admin.include.script')

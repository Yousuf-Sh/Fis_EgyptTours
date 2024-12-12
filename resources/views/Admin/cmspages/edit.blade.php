@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <main id="main" class="main">
    <style>
    /* RTL styling for Arabic content */
    /* #arabic {
        direction: ltr;
        text-align: right;
    } */

    #arabic .form-label {
        text-align: right;
    }

    /* #arabic .form-control {
        direction:  ltr; /* Reset direction for form controls */
        /* text-align: right;
    } */ 
   
    /* Add more RTL styles as needed */
    </style>

    <div class="pagetitle">
      <h1>CMS Pages
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/cms')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">CMS</li>
          <li class="breadcrumb-item active">Edit  CMS Pages</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
@if($primaryCms->slug=='explore-more')
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
                                <form class="" method="POST" action="{{ route('cmspages.update', $primaryCms->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="row g3 my-3">
                                        <div class="col-md-12 mt-3">
                                            <label for="title_{{ $language->slug }}" class="form-label">Heading</label>
                                            <input type="text" 
                                                   name="{{ $language->slug }}_title" 
                                                   class="form-control" 
                                                   id="title_{{ $language->slug }}" 
                                                   {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                   value="{{ $cmsRecords[$language->slug]->title ?? '' }}"
                                                   required>
                                            <input type="hidden" 
                                                   name="language" 
                                                   value="{{ $language->slug }}"
                                            >
                                        </div>
                    
                                        <div class="col-md-12 mt-3">
                                            <label for="para_1_{{ $language->slug }}" class="form-label">Description </label>
                                            <textarea 
                                                name="{{ $language->slug }}_para_1" 
                                                class="form-control ckeditor mb-3" 
                                                id="para_1_{{ $language->slug }}" 
                                                {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                rows="7"
                                                required>{{ $cmsRecords[$language->slug]->short_description ?? '' }}</textarea>
                                        </div>
                                        <!-- <div class="col-md-12 mt-3">
                                            <label for="para_2_{{ $language->slug }}" class="form-label">Description 2</label>
                                            <textarea 
                                                name="{{ $language->slug }}_para_2" 
                                                class="form-control" 
                                                id="para_1_{{ $language->slug }}" 
                                                {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                rows="7"
                                                required>{{ $cmsRecords[$language->slug]->short_description1 ?? '' }}</textarea>
                                        </div> -->
                                    </div>
                                    <!-- Add Button Link -->
                                
                                    <a href="#" id="addRow_{{ $language->slug }}" class="add-button-link link link-primary">Add a Button</a>

<div id="buttonFields_{{ $language->slug }}" style="display: none;">
    
</div>

                            </div>
                                </form>
                        @endforeach
                    </div>
                    
                      
                        <!-- Image section -->
                        <div class="card">
                          <div class="card-header">
                            Media
                          </div>
                          <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                  <label class="form-label">Select Media Type:</label>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mediaType" id="imageOption" value="image">
                                    <label class="form-check-label" for="imageOption">
                                      Image
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mediaType" id="videoOption" value="video" checked>
                                    <label class="form-check-label" for="videoOption">
                                      Video
                                    </label>
                                  </div>
                                </div>
                              </div>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <label for="video1" class="form-label">Video</label>
                                    <input type="file" name="videos[video1]" id="vidInp1" accept="video/*" class="form-control input-default" placeholder="Select video">
                        
                                    <video src="" id="output1" width="500" class="my-3" controls></video>
                                </div>
                            </div> --}}
                            
                            <!-- Image Section -->
                           <!-- Image Section -->
                            <div id="imageSection" class="row" style="display:none;">
                                <div class="col-md-6">
                                    <label for="image1" class="form-label">Image</label>
                                    <input type="file" name="images[image1]" id="imgInp1" accept="image/*" class="form-control input-default" placeholder="Select image">
                                    <img src="" id="imageOutput" class="my-3 w-100" style="display:none;" />
                                </div>
                            </div>

                            <!-- Video Section -->
                            <div id="videoSection" class="row">
                                <div class="col-md-6">
                                    <label for="video1" class="form-label">Video</label>
                                    <input type="file" name="videos[video1]" id="vidInp1" accept="video/*" class="form-control input-default" placeholder="Select video">
                                    <video src="" id="videoOutput"  class="my-3 w-100" controls style="display:none;"></video>
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
@elseif($primaryCms->slug=='about-services')
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
                                <form class="" method="POST" action="{{ route('cmspages.update', $primaryCms->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="row g3 my-3">
                                        <div class="col-md-6">
                                            <label for="title_{{ $language->slug }}" class="form-label">Heading 1</label>
                                            <input type="text" 
                                                    name="{{ $language->slug }}_title" 
                                                    class="form-control" 
                                                    id="title_1_{{ $language->slug }}" 
                                                    {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                    value="{{ $cmsRecords[$language->slug]->title ?? '' }}"
                                                    required>
                                            <input type="hidden" 
                                                    name="language" 
                                                    value="{{ $language->slug }}"
                                            >
                                        </div>
                    
                                        <div class="col-md-6">
                                            <label for="title_2_{{ $language->slug }}" class="form-label">Heading 2</label>
                                            <input type="text" 
                                                    name="{{ $language->slug }}_heading_2" 
                                                    class="form-control mb-2" 
                                                    id="title_{{ $language->slug }}" 
                                                    {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                    value="{{ $cmsRecords[$language->slug]->title1 ?? '' }}"
                                                    required>
                                            {{-- <input type="hidden" 
                                                    name="language" 
                                                    value="{{ $language->slug }}"
                                            > --}}
                                        </div>
                    
                                        <div class="col-md-6">
                                            <label for="title_3_{{ $language->slug }}" class="form-label">Heading 3</label>
                                            <input type="text" 
                                                    name="{{ $language->slug }}_heading_3" 
                                                    class="form-control mb-2" 
                                                    id="title_{{ $language->slug }}" 
                                                    {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                    value="{{ $cmsRecords[$language->slug]->title2 ?? '' }}"
                                                    required>
                                            {{-- <input type="hidden" 
                                                    name="language" 
                                                    value="{{ $language->slug }}"
                                            > --}}
                                        </div>
                    
                                        <div class="col-md-6">
                                            <label for="title_4_{{ $language->slug }}" class="form-label">Heading 4</label>
                                            <input type="text" 
                                                    name="{{ $language->slug }}_heading_4" 
                                                    class="form-control mb-2" 
                                                    id="title_{{ $language->slug }}" 
                                                    {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                    value="{{ $cmsRecords[$language->slug]->title3 ?? '' }}"
                                                    required>
                                            {{-- <input type="hidden" 
                                                    name="language" 
                                                    value="{{ $language->slug }}"
                                            > --}}
                                        </div>
                    
                                        <div class="col-md-6">
                                            <label for="para_1_{{ $language->slug }}" class="form-label">Description</label>
                                            <textarea 
                                                name="{{ $language->slug }}_para_1" 
                                                class="form-control mb-3 ckeditor" 
 
                                                id="para_1_{{ $language->slug }}" 
                                                {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                rows="10"
                                                required>{{ $cmsRecords[$language->slug]->short_description ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="para_2_{{ $language->slug }}" class="form-label">Description 2</label>
                                            <textarea 
                                                name="{{ $language->slug }}_para_2" 
                                                class="form-control mb-3 ckeditor" 
                                                id="para_1_{{ $language->slug }}" 
                                                {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                rows="10"
                                                required>{{ $cmsRecords[$language->slug]->short_description1 ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="para_3_{{ $language->slug }}" class="form-label">Description 3</label>
                                            <textarea 
                                                name="{{ $language->slug }}_para_3" 
                                                class="form-control  mb-3" 
                                                id="para_1_{{ $language->slug }}" 
                                                {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                rows="10"
                                                required>{{ $cmsRecords[$language->slug]->short_description2 ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="para_4_{{ $language->slug }}" class="form-label">Description 4</label>
                                            <textarea 
                                                name="{{ $language->slug }}_para_4" 
                                                class="form-control mb-3" 
                                                id="para_1_{{ $language->slug }}" 
                                                {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }}
                                                rows="10" 
                                                required>{{ $cmsRecords[$language->slug]->short_description3 ?? '' }}</textarea>
                                        </div>
                                    </div>
                                            <!-- Add Button Link -->
                                            
                                            <a href="#" id="addRow_{{ $language->slug }}" class="add-button-link link link-primary">Add a Button</a>

<div id="buttonFields_{{ $language->slug }}" style="display: none;">
    
</div>
                        
                                    </form>
                            </div>
                        @endforeach
                    </div>
                    
                            
                        <!-- Image section -->
                    <div class="card">
                        <div class="card-header">
                            Images
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="image1" class="form-label">Image 1</label>
                                    <input type="file" name="images[image1]" id="imgInp1" accept="image/*" class="form-control input-default" placeholder="Select image">
                                    @if($primaryCms->image1)
                                    <img src="{{ Storage::url($primaryCms->image1) }}" id="output1" width="100" class="my-3">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="image2" class="form-label">Image 2</label>
                                    <input type="file" name="images[image2]" id="imgInp2" accept="image/*" class="form-control input-default" placeholder="Select image">
                                    @if($primaryCms->image2)
                                    <img src="{{ Storage::url($primaryCms->image2) }}" id="output2" width="100" class="my-3">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="image3" class="form-label">Image 3</label>
                                    <input type="file" name="images[image3]" id="imgInp3" accept="image/*" class="form-control input-default" placeholder="Select image">
                                    @if($primaryCms->image3)
                                    <img src="{{ Storage::url($primaryCms->image3) }}" id="output3" width="100" class="my-3">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="image4" class="form-label">Image 4</label>
                                    <input type="file" name="images[image4]" id="imgInp4" accept="image/*" class="form-control input-default" placeholder="Select image">
                                    @if($primaryCms->image4)
                                    <img src="{{ Storage::url($primaryCms->image4) }}" id="output4" width="100" class="my-3">
                                    @endif
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
@elseif($primaryCms->slug=='memories')
    <section class="section">
        <div class="row">
        
            <div class="col-lg-12">
                <div class="card">
                
            </div>
            
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
                                <form class="" method="POST" action="{{ route('cmspages.update', $primaryCms->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="row g3 my-3">
                                        <div class="col-md-6">
                                            <label for="title_{{ $language->slug }}" class="form-label">Heading</label>
                                            <input type="text" 
                                                    name="{{ $language->slug }}_title" 
                                                    class="form-control" 
                                                    id="title_{{ $language->slug }}" 
                                                    {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                    value="{{ $cmsRecords[$language->slug]->title ?? '' }}"
                                                    required>
                                            <input type="hidden" 
                                                    name="language" 
                                                    value="{{ $language->slug }}"
                                            >
                                        </div>
                                        {{-- <div class="col-md-6 mt-3">
                                <label for="btn_{{ $language->slug }}" class="form-label">Button Text</label>
                                <input type="text" name="{{ $language->slug }}btn" class="form-control" id="btn{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                value="{{ old("{$language->slug}_btn", $primaryCms->button_text ?? ($language->slug === 'en' ? $primaryCms->button_text : '')) }}" 
                                required>
                            </div> --}}
                    
                                        <div class="col-md-12">
                                            <label for="para_1_{{ $language->slug }}" class="form-label my-3">Description</label>
                                            <textarea 
                                                name="{{ $language->slug }}_para_1" 
                                                class="form-control ckeditor mb-3" 
                                                id="para_1_{{ $language->slug }}" 
                                                {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                rows="10"
                                                required>{{ $cmsRecords[$language->slug]->short_description ?? '' }}</textarea>
                                        </div>
                                    </div>
                                 <!-- Add Button Link -->
                                
                                 <a href="#" id="addRow_{{ $language->slug }}" class="add-button-link link link-primary">Add a Button</a>

<div id="buttonFields_{{ $language->slug }}" style="display: none;">
    
</div>
            
                                </form>
                            </div>
                        @endforeach
                    </div>
                    
                        
                        <!-- Prices & Image section -->
                        
                        <!-- Image section -->
                        <div class="card">
                          <div class="card-header">
                            Media
                          </div>
                          <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                  <label class="form-label">Select Media Type:</label>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mediaType" id="imageOption" value="image">
                                    <label class="form-check-label" for="imageOption">
                                      Image
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mediaType" id="videoOption" value="video" checked>
                                    <label class="form-check-label" for="videoOption">
                                      Video
                                    </label>
                                  </div>
                                </div>
                              </div>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <label for="video1" class="form-label">Video</label>
                                    <input type="file" name="videos[video1]" id="vidInp1" accept="video/*" class="form-control input-default" placeholder="Select video">
                        
                                    <video src="" id="output1" width="500" class="my-3" controls></video>
                                </div>
                            </div> --}}
                            
                            <!-- Image Section -->
                           <!-- Image Section -->
                            <div id="imageSection" class="row" style="display:none;">
                                <div class="col-md-6">
                                    <label for="image1" class="form-label">Image</label>
                                    <input type="file" name="images[image1]" id="imgInp1" accept="image/*" class="form-control input-default" placeholder="Select image">
                                    <img src="" id="imageOutput" class="my-3 w-100" style="display:none;" />
                                </div>
                            </div>

                            <!-- Video Section -->
                            <div id="videoSection" class="row">
                                <div class="col-md-6">
                                    <label for="video1" class="form-label">Video</label>
                                    <input type="file" name="videos[video1]" id="vidInp1" accept="video/*" class="form-control input-default" placeholder="Select video">
                                    <video src="" id="videoOutput"  class="my-3 w-100" controls style="display:none;"></video>
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
@elseif($primaryCms->slug=='tour-video')
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
                                <form class="" method="POST" action="{{ route('cmspages.update', $primaryCms->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="row g3 my-3">
                                        <div class="col-md-6">
                                            <label for="title_{{ $language->slug }}" class="form-label">Heading</label>
                                            <input type="text" 
                                                    name="{{ $language->slug }}_title" 
                                                    class="form-control" 
                                                    id="title_{{ $language->slug }}" 
                                                    {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                    value="{{ $cmsRecords[$language->slug]->title ?? '' }}"
                                                    required>
                                            <input type="hidden" 
                                                    name="language" 
                                                    value="{{ $language->slug }}"
                                            >
                                        </div>
                                       {{-- <div class="col-md-6 mt-3">
                                <label for="btn_{{ $language->slug }}" class="form-label">Button Text</label>
                                <input type="text" name="{{ $language->slug }}btn" class="form-control" id="btn{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                value="{{ old("{$language->slug}_btn", $primaryCms->button_text ?? ($language->slug === 'en' ? $primaryCms->button_text : '')) }}" 
                                required>
                            </div> --}}
                    
                                        
                                    </div>
                                    <div class="row g3 my-3">
                                        <div class="col-md-12">
                                            <label for="para_1_{{ $language->slug }}" class="form-label">Description</label>
                                            <textarea 
                                                name="{{ $language->slug }}_para_1" 
                                                class="form-control  mb-3 ckeditor" 
                                                id="para_1_{{ $language->slug }}" 
                                                {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                rows="10"
                                                required>{{ $cmsRecords[$language->slug]->short_description ?? '' }}</textarea>
                                        </div>
                                        
                    
                                    </div>
                                 <!-- Add Button Link -->
                                
                                 <a href="#" id="addRow_{{ $language->slug }}" class="add-button-link link link-primary">Add a Button</a>

<div id="buttonFields_{{ $language->slug }}" style="display: none;">
    
</div>
            
            
                                </form>
                            </div>
                        @endforeach
                    </div>
                    
                        
                     
                        <!-- Image section -->
                        <div class="card">
                          <div class="card-header">
                            Media
                          </div>
                          <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                  <label class="form-label">Select Media Type:</label>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mediaType" id="imageOption" value="image">
                                    <label class="form-check-label" for="imageOption">
                                      Image
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mediaType" id="videoOption" value="video" checked>
                                    <label class="form-check-label" for="videoOption">
                                      Video
                                    </label>
                                  </div>
                                </div>
                              </div>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <label for="video1" class="form-label">Video</label>
                                    <input type="file" name="videos[video1]" id="vidInp1" accept="video/*" class="form-control input-default" placeholder="Select video">
                        
                                    <video src="" id="output1" width="500" class="my-3" controls></video>
                                </div>
                            </div> --}}
                            
                            <!-- Image Section -->
                           <!-- Image Section -->
                            <div id="imageSection" class="row" style="display:none;">
                                <div class="col-md-6">
                                    <label for="image1" class="form-label">Image</label>
                                    <input type="file" name="images[image1]" id="imgInp1" accept="image/*" class="form-control input-default" placeholder="Select image">
                                    <img src="" id="imageOutput" class="my-3 w-100" style="display:none;" />
                                </div>
                            </div>

                            <!-- Video Section -->
                            <div id="videoSection" class="row">
                                <div class="col-md-6">
                                    <label for="video1" class="form-label">Video</label>
                                    <input type="file" name="videos[video1]" id="vidInp1" accept="video/*" class="form-control input-default" placeholder="Select video">
                                    <video src="" id="videoOutput"  class="my-3 w-100" controls style="display:none;"></video>
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <label for="video_link" class="form-label">Video Link</label>
                                    <input type="text" 
                                    name="video_link" id="video_link" 
                                    class="form-control input-default" 
                                    placeholder="Insert Youtube Link"
                                    value="{{ $primaryCms->title2 ?? $primaryCms->title2 }}"> 
                                    @if( $primaryCms->title2)   
                                    <a href="{{$primaryCms->title2 }}" class="btn btn-primary mt-3" target="_blank">Go To video</a>                               
                                    @endif
                            </div>
                        </div>
                    </div>
                
                    
            
            
            </form>
        </div>
    </div>
    </div>
    </div>
    </section>
@elseif($primaryCms->slug=='faq')
   {{--<section class="section">
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
                                <form class="" method="" action="{{ route('cmspages.update', $primaryCms->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="row g3 my-3">
                                        <div class="col-md-6">
                                            <label for="title_1_{{ $language->slug }}" class="form-label">Question 1</label>
                                            <input type="text" 
                                                    name="{{ $language->slug }}_title" 
                                                    class="form-control" 
                                                    id="title_1_{{ $language->slug }}" 
                                                    {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                    value="{{ $cmsRecords[$language->slug]->title1 ?? '' }}"
                                                    required>
                                            <input type="hidden" 
                                                    name="language" 
                                                    value="{{ $language->slug }}"
                                            >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="title_2_{{ $language->slug }}" class="form-label">Question 2</label>
                                            <input type="text" 
                                                    name="{{ $language->slug }}_Qtitle_2" 
                                                    class="form-control" 
                                                    id="title_2_{{ $language->slug }}" 
                                                    {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                    value="{{ $cmsRecords[$language->slug]->title2 ?? '' }}"
                                                    required>
                                           
                                        </div>
                                        <div class="col-md-6">
                                            <label for="title_3_{{ $language->slug }}" class="form-label">Question 3</label>
                                            <input type="text" 
                                                    name="{{ $language->slug }}_Qtitle_3" 
                                                    class="form-control" 
                                                    id="title_3_{{ $language->slug }}" 
                                                    {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                    value="{{ $cmsRecords[$language->slug]->title3 ?? '' }}"
                                                    required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="title_4_{{ $language->slug }}" class="form-label">Question 4</label>
                                            <input type="text" 
                                                    name="{{ $language->slug }}_Qtitle_4" 
                                                    class="form-control" 
                                                    id="title_4_{{ $language->slug }}" 
                                                    {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                    value="{{ $cmsRecords[$language->slug]->title4 ?? '' }}"
                                                    required>
                                        </div>
                                        
                    
                                        
                                    </div>
                                    <div class="row g3 my-3">
                                        <div class="col-md-6">
                                            <label for="para_1_{{ $language->slug }}" class="form-label">Answer 1</label>
                                            <textarea 
                                                name="{{ $language->slug }}_para_1" 
                                                class="form-control  mb-3" 
                                                id="para_1_{{ $language->slug }}" 
                                                {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                rows="10"
                                                required>{{ $cmsRecords[$language->slug]->tagline1 ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="para_2_{{ $language->slug }}" class="form-label">Answer 2</label>
                                            <textarea 
                                                name="{{ $language->slug }}_para_2" 
                                                class="form-control  mb-3" 
                                                id="para_2_{{ $language->slug }}" 
                                                {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                rows="10"
                                                required>{{ $cmsRecords[$language->slug]->tagline2 ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="para_3_{{ $language->slug }}" class="form-label">Answer 3</label>
                                            <textarea 
                                                name="{{ $language->slug }}_para_3" 
                                                class="form-control  mb-3" 
                                                id="para_3_{{ $language->slug }}" 
                                                {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                rows="10"
                                                required>{{ $cmsRecords[$language->slug]->tagline3 ?? '' }}</textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="para_4_{{ $language->slug }}" class="form-label">Answer 4</label>
                                            <textarea 
                                                name="{{ $language->slug }}_para_4" 
                                                class="form-control  mb-3" 
                                                id="para_4_{{ $language->slug }}" 
                                                {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                rows="10"
                                                required>{{ $cmsRecords[$language->slug]->tagline4 ?? '' }}</textarea>
                                        </div>
                                        
                    
                                    </div>
                                 <!-- Add Button Link -->
                                
                                 <a href="#" id="addRow_{{ $language->slug }}" class="add-button-link link link-primary">Add a Button</a>

<div id="buttonFields_{{ $language->slug }}" style="display: none;">
    
</div>
                            </div>
            
            
                                </form>
                            </div>
                        @endforeach
                    </div>
                    
                        
                        <!-- Image section -->
                    <div class="card">
                        <div class="card-header">
                            Image
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="image1" class="form-label">Image</label>
                                    <input type="file" name="images[image1]" id="imgInp1" accept="image/*" class="form-control input-default" placeholder="Select image">
                                    @if($primaryCms->image1)
                                    <img src="{{ Storage::url($primaryCms->image1) }}" id="output1" width="100" class="my-3">
                                    @endif
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
    --}}
    <section class="section">
        <div class="row">
        
            <div class="col-lg-12">
                <div class="card">
                
            </div>
            
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
                                <form class="" method="POST" action="{{ route('cmspages.update', $primaryCms->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="row g3 my-3">
                                        <div class="col-md-6">
                                            <label for="title_{{ $language->slug }}" class="form-label">Heading</label>
                                            <input type="text" 
                                                    name="{{ $language->slug }}_title" 
                                                    class="form-control" 
                                                    id="title_{{ $language->slug }}" 
                                                    {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                    value="{{ $cmsRecords[$language->slug]->title ?? '' }}"
                                                    required>
                                            <input type="hidden" 
                                                    name="language" 
                                                    value="{{ $language->slug }}"
                                            >
                                        </div>
                                        {{-- <div class="col-md-6 mt-3">
                                <label for="btn_{{ $language->slug }}" class="form-label">Button Text</label>
                                <input type="text" name="{{ $language->slug }}btn" class="form-control" id="btn{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                value="{{ old("{$language->slug}_btn", $primaryCms->button_text ?? ($language->slug === 'en' ? $primaryCms->button_text : '')) }}" 
                                required>
                            </div> --}}  
                    
                                        <div class="col-md-12">
                                            <label for="para_1_{{ $language->slug }}" class="form-label my-3">Description</label>
                                            <textarea 
                                                name="{{ $language->slug }}_para_1" 
                                                class="form-control ckeditor mb-3" 
                                                id="para_1_{{ $language->slug }}" 
                                                {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} 
                                                rows="10"
                                                required>{{ $cmsRecords[$language->slug]->short_description ?? '' }}</textarea>
                                        </div>
                                    </div>
                                    <a href="#" id="addRow_{{ $language->slug }}" class="add-button-link link link-primary">Add a Button</a>

<div id="buttonFields_{{ $language->slug }}" style="display: none;">
    
</div>
                                </form>
                            </div>
                        @endforeach
                    </div>
                    
                        
                        <!-- Prices & Image section -->
                        
                        <!-- Image section -->
                        <div class="card">
                          <div class="card-header">
                            Media
                          </div>
                          <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                  <label class="form-label">Select Media Type:</label>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mediaType" id="imageOption" value="image">
                                    <label class="form-check-label" for="imageOption">
                                      Image
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mediaType" id="videoOption" value="video" checked>
                                    <label class="form-check-label" for="videoOption">
                                      Video
                                    </label>
                                  </div>
                                </div>
                              </div>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <label for="video1" class="form-label">Video</label>
                                    <input type="file" name="videos[video1]" id="vidInp1" accept="video/*" class="form-control input-default" placeholder="Select video">
                        
                                    <video src="" id="output1" width="500" class="my-3" controls></video>
                                </div>
                            </div> --}}
                            
                            <!-- Image Section -->
                           <!-- Image Section -->
                            <div id="imageSection" class="row" style="display:none;">
                                <div class="col-md-6">
                                    <label for="image1" class="form-label">Image</label>
                                    <input type="file" name="images[image1]" id="imgInp1" accept="image/*" class="form-control input-default" placeholder="Select image">
                                    <img src="" id="imageOutput" class="my-3 w-100" style="display:none;" />
                                </div>
                            </div>

                            <!-- Video Section -->
                            <div id="videoSection" class="row">
                                <div class="col-md-6">
                                    <label for="video1" class="form-label">Video</label>
                                    <input type="file" name="videos[video1]" id="vidInp1" accept="video/*" class="form-control input-default" placeholder="Select video">
                                    <video src="" id="videoOutput"  class="my-3 w-100" controls style="display:none;"></video>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="col-md-12" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary submit" id="submitAll">Update</button>
                                </div>
                
                
                    
            
            
            </form>
        </div>
    </div>
    </div>
    </div>
    </section>
@endif 
  </main>
  <script>
$(document).ready(function () {
    $('a.add-button-link').each(function () {
        const languageSlug = $(this).attr('id').split('_')[1]; // Extract the language slug from the ID

        const addButtonLink = $(`#addRow_${languageSlug}`);
        const buttonFieldsContainer = $(`#buttonFields_${languageSlug}`);

        if (!addButtonLink.length || !buttonFieldsContainer.length) {
            console.error(`Missing button field elements for language: ${languageSlug}`);
            return;
        }

        // Function to create a new button field row
        function createButtonFieldRow(slug) {
            return $(`
                <div class="button-field-row">
                    <div class="col-md-6 mt-3">
                        <label for="btn_${slug}" class="form-label">Button Text</label>
                        <input type="text" name="${slug}btn" class="form-control" required>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="btn_link_${slug}" class="form-label">Button Link</label>
                        <input type="text" name="${slug}_btn_link" class="form-control" required>
                        <a href="#" class="remove-button-link link link-danger mt-3">Remove Button</a>
                    </div>
                </div>
            `);
        }

        // Toggle the visibility of the container and add/remove rows
        addButtonLink.on('click', function (event) {
            event.preventDefault();

            if (buttonFieldsContainer.is(':visible')) {
                // Hide the container and clear all rows
                buttonFieldsContainer.hide().empty();
                addButtonLink.show(); // Show the add button back
            } else {
                // Show the container, append a new row, and hide the add button
                const newRow = createButtonFieldRow(languageSlug);
                buttonFieldsContainer.append(newRow).show();
                addButtonLink.hide(); // Hide the add button
            }
        });

        // Handle dynamic removal of rows
        buttonFieldsContainer.on('click', '.remove-button-link', function (event) {
            event.preventDefault();
            $(this).closest('.button-field-row').remove();
            if (!buttonFieldsContainer.children('.button-field-row').length) {
                buttonFieldsContainer.hide();
                addButtonLink.show(); // Show the add button back
            }
        });
    });
});






</script>
  {{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
    const submitButton = document.getElementById('submitAll');

    if (!submitButton) {
        console.error('Submit button not found!');
        return;
    }

    // Enhanced function to dynamically preview images
    function loadFile(event, outputId) {
        const input = event.target;
        const outputElement = document.getElementById(outputId);
        
        if (outputElement && input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                outputElement.src = e.target.result;
                outputElement.style.display = 'block';
            };
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    // Add event listeners to all file inputs for previewing images
    const fileInputs = document.querySelectorAll('input[type="file"]');
    fileInputs.forEach((input) => {
        // Dynamically set output ID based on input ID
        const outputId = input.id.replace('imgInp', 'output');
        
        input.addEventListener('change', (event) => {
            loadFile(event, outputId);
        });
    });

    // Handle form submission
    submitButton.addEventListener('click', function (event) {
        event.preventDefault();

        try {
            const forms = document.querySelectorAll('#languageTabsContent form');
          
          if (forms.length === 0) {
              throw new Error('No forms found in the specified content area');
          }
            // Create a single FormData object
            const formData = new FormData();
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

            // Specifically handle file inputs for images
            const fileInputs = document.querySelectorAll('input[name^="images["]');
            
            console.log('File Inputs Found:', fileInputs.length);

            fileInputs.forEach((input) => {
                if (input.files.length > 0) {
                    console.log('Appending File:', input.name, input.files[0]);
                    formData.append(input.name, input.files[0]);
                }
            });

            // Log FormData contents
            for (let pair of formData.entries()) {
                console.log(pair[0] + ': ', pair[1]);
            }

            // Get CSRF token
            const csrfToken = document.querySelector('input[name="_token"]');
            if (!csrfToken) {
                throw new Error('CSRF token not found');
            }

            // Determine submission URL (assuming Laravel route)
            const currentUrl = "{{ route('cmspages.update', ['id' => $primaryCms->id]) }}";

            // Submit using fetch
            fetch(currentUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken.value,
                    'Accept': 'application/json',
                },
            })
            .then((response) => {
                if (!response.ok) {
                    return response.json().then((errorData) => {
                        throw new Error(errorData.message || 'Server error occurred');
                    });
                }
                return response.json();
            })
            .then((data) => {
                // Success handling
                console.log('Server response:', data);

                // Show success message to user
                alert(data.message || 'Forms submitted successfully');

                // Optional: Redirect or update UI
                if (data.redirect) {
                    window.location.href = data.redirect;
                }
            })
            .catch((error) => {
                // Comprehensive error handling
                console.error('Submission error:', error);
                alert('Failed to submit forms. Please try again. ' + error.message);
            });
        } catch (error) {
            // Catch any errors during form preparation
            console.error('Preparation error:', error);
            alert('Error preparing form submission: ' + error.message);
        }
    });
});
</script> --}}

<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Media type toggle elements
    const imageOption = document.getElementById('imageOption');
    const btnAdd = document.getElementById('btnAdd');
    const videoOption = document.getElementById('videoOption');
    const imageSection = document.getElementById('imageSection');
    const videoSection = document.getElementById('videoSection');
    const imageInput = document.getElementById('imgInp1');
    const videoInput = document.getElementById('vidInp1');
    const imageOutput = document.getElementById('imageOutput');
    const videoOutput = document.getElementById('videoOutput');

    // Toggle media sections
    function toggleMediaSections() {
        if (imageOption.checked) {
            imageSection.style.display = 'block';
            imageOutput.style.display = 'block';
            videoSection.style.display = 'none';

            // Reset video input and output
            videoInput.value = '';
            videoOutput.src = '';
            videoOutput.style.display = 'none';
        } else if (videoOption.checked) {
            imageSection.style.display = 'none';
            videoSection.style.display = 'block';
            videoOutput.style.display = 'block';

            // Reset image input and output
            imageInput.value = '';
            imageOutput.src = '';
            imageOutput.style.display = 'none';
        }
    }

    // Image preview function
    function loadImagePreview(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                imageOutput.src = e.target.result;
                imageOutput.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    }

    // Video preview function
    function loadVideoPreview(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                videoOutput.src = e.target.result;
                videoOutput.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    }

    // Event listeners for toggle and preview
    imageOption.addEventListener('change', toggleMediaSections);
    videoOption.addEventListener('change', toggleMediaSections);
    imageInput.addEventListener('change', loadImagePreview);
    videoInput.addEventListener('change', loadVideoPreview);

    // Initialize the form with the default state
    toggleMediaSections();
});

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    // For each CKEditor instance
    if (CKEDITOR && CKEDITOR.instances) {
        Object.keys(CKEDITOR.instances).forEach(function(instanceName) {
            var editor = CKEDITOR.instances[instanceName];
            
            // Add change event listener
            editor.on('change', function() {
                // Explicitly update the textarea with the editor's content
                editor.updateElement();
            });
        });
    }
});
    </script>
<script>

    document.addEventListener('DOMContentLoaded', function () {
    const submitButton = document.getElementById('submitAll');

    if (!submitButton) {
        console.error('Submit button not found!');
        return;
    }

    // Restore the image preview function
    function loadFile(event, outputId) {
        const input = event.target;
        const outputElement = document.getElementById(outputId);
        
        if (outputElement && input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                outputElement.src = e.target.result;
                outputElement.style.display = 'block';
            };
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    // Add event listeners to all file inputs for previewing images
    const fileInputs = document.querySelectorAll('input[type="file"]');
    fileInputs.forEach((input) => {
        // Dynamically set output ID based on input ID
        const outputId = input.id.replace('imgInp', 'output');
        
        input.addEventListener('change', (event) => {
            loadFile(event, outputId);
        });
    });

    submitButton.addEventListener('click', function (event) {
        event.preventDefault();

        try {
            // Create a single FormData object
            const formData = new FormData();

            // Explicitly select all forms you want to collect data from
            const forms = document.querySelectorAll('form');
            // alert(videolink);

            forms.forEach((form) => {
                // Collect all form elements
                const elements = form.elements;
                
                for (let element of elements) {
                    if (element.name) {
                        if (element.type === 'file') {
                            // For file inputs, append only if a file is selected
                            if (element.files.length > 0) {
                                formData.append(element.name, element.files[0]);
                            }
                        } else if (element.type !== 'submit') {
                            // Append non-file, non-submit inputs
                            formData.append(element.name, element.value);
                        }
                    }
                }
            });
            if(document.getElementById('video_link')){
                 const videolink= document.querySelector('#video_link').value;
                if(videolink != ''){
                    formData.append('video_link',videolink);
                }
            }

            // Specifically handle file inputs for images (as in the original code)
            const imageFileInputs = document.querySelectorAll('input[name^="images["]');
            
            console.log('File Inputs Found:', imageFileInputs.length);

            imageFileInputs.forEach((input) => {
                if (input.files.length > 0) {
                    console.log('Appending File:', input.name, input.files[0]);
                    formData.append(input.name, input.files[0]);
                }
            });

            // Log FormData contents
            for (let pair of formData.entries()) {
                console.log(pair[0] + ': ', pair[1]);
            }

            // Get CSRF token
            const csrfToken = document.querySelector('input[name="_token"]');
            if (!csrfToken) {
                throw new Error('CSRF token not found');
            }

            // Determine submission URL (assuming Laravel route)
            const currentUrl = "{{ route('cmspages.update', ['id' => $primaryCms->id]) }}";

            // Submit using fetch
            fetch(currentUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken.value,
                    'Accept': 'application/json',
                },
            })
            .then((response) => {
                if (!response.ok) {
                    return response.json().then((errorData) => {
                        throw new Error(errorData.message || 'Server error occurred');
                    });
                }
                return response.json();
            })
            .then((data) => {
                // Success handling
                console.log('Server response:', data);

                // Show success message to user
                alert(data.message || 'Forms submitted successfully');

                // Optional: Redirect or update UI
                if (data.redirect) {
                    window.location.href = data.redirect;
                }
            })
            .catch((error) => {
                // Comprehensive error handling
                console.error('Submission error:', error);
                alert('Failed to submit forms. Please try again. ' + error.message);
            });
        } catch (error) {
            // Catch any errors during form preparation
            console.error('Preparation error:', error);
            alert('Error preparing form submission: ' + error.message);
        }
    });
});
</script>

<script>
    $(document).ready(function () {
        // Function to handle button field toggling
        function setupButtonFieldToggle(form) {
            // Select necessary elements within the form
            const addButtonLink = form.querySelector('.add-button-link');
            const buttonFields = form.querySelector('#buttonFields');
            const removeButtonLink = buttonFields ? buttonFields.querySelector('.remove-button-link') : null;

            // Validate required elements
            if (!addButtonLink || !buttonFields || !removeButtonLink) {
                console.error('Missing button field elements in form', form);
                return;
            }

            // Show button fields when "Add a Button" is clicked
            addButtonLink.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent scrolling to top

                // Show the button fields
                buttonFields.style.display = 'block';

                // Hide the "Add a Button" link
                addButtonLink.style.display = 'none';
            });

            // Hide button fields when "Remove Button" is clicked
            removeButtonLink.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent scrolling to top

                // Hide the button fields
                buttonFields.style.display = 'none';

                // Show the "Add a Button" link
                addButtonLink.style.display = 'inline-block';

                // Clear input values
                const btnTextInput = buttonFields.querySelector(`input[name="{{ $language->slug }}btn"]`);
                const btnLinkInput = buttonFields.querySelector(`input[name="{{ $language->slug }}btn_link"]`);

                if (btnTextInput) btnTextInput.value = '';
                if (btnLinkInput) btnLinkInput.value = '';
            });
        }

        // Apply the setup to all forms
        const forms = document.querySelectorAll('form');
        forms.forEach((form) => {
            setupButtonFieldToggle(form);
        });
    });
</script>

@include('Admin.include.footer')
@include('Admin.include.script')

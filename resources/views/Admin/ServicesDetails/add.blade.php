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
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <ul class="nav nav-tabs mt-3" id="languageTabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="english-tab" data-bs-toggle="tab" href="#english" role="tab" aria-controls="english" aria-selected="true">English</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="arabic-tab" data-bs-toggle="tab" href="#arabic" role="tab" aria-controls="arabic" aria-selected="false">Arabic</a>
                </li>
              </ul>
              <div class="tab-content" id="languageTabsContent">
              <!-- <h5 class="card-title">Edit About Us</h5> -->
              <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('cmspages.update')}}" enctype="multipart/form-data">
			          @csrf
                @if($cms->id=='111')
                 <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title" value="{{$cms->title}}">
                </div>
                {{-- <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5" name="tagline" value="{{$cms->tagline}}">
                </div> --}}
                <div class="col-md-6">
                  <label for="title" class="form-label">Logo</label>
                  <input type="text" class="form-control" id="inputName5"  name="logo" value="{{$cms->logo}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName6" name="short_description">{{$cms->short_description}}</textarea>
                </div>
                {{-- <input type="hidden" name="id" value="{{$cms->id}}"/> --}}
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title1" value="{{$cms->title1}}">
                </div>
                {{-- <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5" name="tagline1" value="{{$cms->tagline1}}">
                </div> --}}
                <div class="col-md-6">
                  <label for="title" class="form-label">Logo</label>
                  <input type="text" class="form-control" id="inputName5" name="logo1" value="{{$cms->logo1}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName6" name="short_description1">{{$cms->short_description1}}</textarea>
                </div>
                {{-- <input type="hidden" name="id" value="{{$cms->id}}"/> --}}
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title2" value="{{$cms->title2}}">
                </div>
                {{-- <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5" name="tagline2" value="{{$cms->tagline2}}">
                </div> --}}
                <div class="col-md-6">
                  <label for="title" class="form-label">Logo</label>
                  <input type="text" class="form-control" id="inputName5"  name="logo2" value="{{$cms->logo2}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName6" name="short_description2">{{$cms->short_description2}}</textarea>
                </div>
                 @elseif($cms->id=='115')
                 <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title" value="{{$cms->title}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5" name="tagline" value="{{$cms->tagline}}">
                </div>
                {{-- <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName6" name="short_description">{{$cms->short_description}}</textarea>
                </div> --}}
                {{-- <div class="col-md-12">
                  <label for="description" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="description">{{$cms->description}}</textarea>
                </div> --}}
                {{-- <div class="col-md-6">
                  <label for="inputState" class="form-label">Image</label>
                  <input type="file" name="image" id="imgInp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                  <a href=""><img src="{{ asset('Backend/images/' . $cms->image) }}" id="output"  width="100" ></a>
                </div> --}}
                {{-- <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Update</button>
                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                  </div>
                </div>  
               --}}
                {{-- @elseif($cms->id=='113') --}}
                @elseif($cms->id=='116')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title" value="{{$cms->title}}">
                </div>
               
                <div class="col-md-6">
                  <label for="title" class="form-label">Header Tagline</label>
                  <input type="text" class="form-control" id="inputName5"
                   name="tagline"   value="{{$cms->tagline}}">
                </div>
               
               
               
                

              @elseif($cms->id=='113')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-12">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title" value="{{$cms->title}}">
                </div>
                <div class="col-md-12">
                  <label for="title" class="form-label">Header tagline1</label>
                  <input type="text" class="form-control" id="inputName5" name="tagline" value="{{$cms->tagline}}">
                </div>
                <div class="col-md-12">
                  <label for="title" class="form-label">Header tagline2</label>
                  <input type="text" class="form-control" id="inputName5" name="tagline1" value="{{$cms->tagline1}}">
                </div>
                <div class="col-md-12">
                  <label for="description" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="short_description">{{$cms->short_description}}</textarea>
                </div>
                @elseif($cms->id=='114')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                  <div class="col-md-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="inputName5" name="title" value="{{$cms->title}}">
                  </div>
                  <div class="col-md-12">
                  <label for="description" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="short_description">{{$cms->short_description}}</textarea>
                </div>
                {{-- <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Update</button>
                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                  </div>
                </div>   --}}
                
                @elseif($cms->id=='117')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                  <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="inputName5" name="title" value="{{$cms->title}}">
                  </div>
                  <div class="col-md-6">
                    <label for="title" class="form-label">Tagline</label>
                    <input type="text" class="form-control" id="inputName5" name="tagline" value="{{$cms->tagline}}">
                  </div>
                  {{-- <div class=" mt-3">
                    <div class="col-md-12" style="text-align: right;">
                      <button type="submit" class="btn btn-primary submit">Update</button>
                      <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                    </div>
                  </div>   --}}
                   @elseif($cms->id=='117')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                  <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="inputName5" name="title" value="{{$cms->title}}">
                  </div>
                  <div class="col-md-6">
                    <label for="title" class="form-label">Tagline</label>
                    <input type="text" class="form-control" id="inputName5" name="tagline" value="{{$cms->tagline}}">
                  </div>
                  {{-- <div class=" mt-3">
                    <div class="col-md-12" style="text-align: right;">
                      <button type="submit" class="btn btn-primary submit">Update</button>
                      <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                    </div>
                  </div>   --}}
                  @elseif($cms->id=='118')
                  <input type="hidden" name="id" value="{{$cms->id}}"/>
                  <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->title}}">
                  </div>
                  <div class="col-md-6">
                    <label for="title" class="form-label">Tagline</label>
                    <input type="text" class="form-control" id="inputName5"  name="tagline" value="{{$cms->tagline}}">
                  </div>
                  
                  <div class="col-md-12">
                    <label for="short description" class="form-label">Short Description</label>
                    <textarea type="text" class="form-control ckeditor" id="inputName5"  name="arabic_short_description">{{$cms->short_description}}</textarea>
                  </div>

                  @elseif($cms->id=='119')
                  <input type="hidden" name="id" value="{{$cms->id}}"/>
                  <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->title}}">
                  </div>
                  <div class="col-md-6">
                    <label for="title" class="form-label">Tagline</label>
                    <input type="text" class="form-control" id="inputName5"  name="tagline" value="{{$cms->tagline}}">
                  </div>
                  
                  <div class="col-md-12">
                    <label for="title" class="form-label">Header Tagline</label>
                    <input type="text" class="form-control" id="inputName5"  name="tagline1" value="{{$cms->tagline1}}">
                  </div>
                  <div class="col-md-12">
                    <label for="short description" class="form-label">Short Description</label>
                    <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
                  </div>
                  {{-- <div class=" mt-3">
                    <div class="col-md-12" style="text-align: right;">
                      <button type="submit" class="btn btn-primary submit">Update</button>
                      <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                    </div>
                  </div>  --}}
            
            
              @elseif($cms->id=='120')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline" value="{{$cms->tagline}}">
              </div>
              <div class="col-md-12">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline1" value="{{$cms->tagline1}}">
              </div>
              
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
              </div>

              
              @elseif($cms->id=='121')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline" value="{{$cms->tagline}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline1" value="{{$cms->tagline1}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label"> Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline2" value="{{$cms->tagline2}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description1">{{$cms->short_description1}}</textarea>
              </div>
              
              @elseif($cms->id=='122')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline" value="{{$cms->tagline}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">header Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline1" value="{{$cms->tagline1}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline2" value="{{$cms->tagline2}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
              </div>
              @elseif($cms->id=='123')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline" value="{{$cms->tagline}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline1" value="{{$cms->tagline1}}">
              </div>
              
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
              </div>
            

              @elseif($cms->id=='124')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline" value="{{$cms->tagline}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline1" value="{{$cms->tagline1}}">
              </div>
              
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
              </div>


              @elseif($cms->id=='125')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-12">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->title}}">
              </div>
             
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title1" value="{{$cms->title1}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline1" value="{{$cms->tagline1}}">
              </div>
              
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description1">{{$cms->short_description1}}</textarea>
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title2" value="{{$cms->title2}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline2" value="{{$cms->tagline2}}">
              </div>
              

              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description2">{{$cms->short_description2}}</textarea>
              </div>
           <div class="col-md-12">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline3" value="{{$cms->tagline3}}">
              </div>
             

              @elseif($cms->id=='126')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline" value="{{$cms->tagline}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
              </div>
             
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title1" value="{{$cms->title1}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline1" value="{{$cms->tagline1}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description1">{{$cms->short_description1}}</textarea>
              </div>
              
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title2" value="{{$cms->title2}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline2" value="{{$cms->tagline2}}">
              </div>

              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description2">{{$cms->short_description2}}</textarea>
              </div>
             
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline3" value="{{$cms->tagline3}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline4" value="{{$cms->tagline4}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline5" value="{{$cms->tagline5}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline6" value="{{$cms->tagline6}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline7" value="{{$cms->tagline7}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description3">{{$cms->short_description3}}</textarea>
              </div>

              @elseif($cms->id=='127')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->	title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline1" value="{{$cms->tagline1}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
              </div>
             
              <div class="col-md-12">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline2" value="{{$cms->tagline2}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description1">{{$cms->short_description1}}</textarea>
              </div>
              <div class="col-md-12">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline3" value="{{$cms->tagline3}}">
              </div>
              @elseif($cms->id=='128')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->	title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline1" value="{{$cms->tagline1}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
              </div>
             
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline2" value="{{$cms->tagline2}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline3" value="{{$cms->tagline3}}">
              </div>
              <div class="col-md-12">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline4" value="{{$cms->tagline4}}">
              </div>
              @elseif($cms->id=='129')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->	title}}">
              </div>
             
              <div class="col-md-12">
                <label for="title" class="form-label">Header tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline" value="{{$cms->	tagline}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
              </div>
             
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description1">{{$cms->short_description1}}</textarea>
              </div>
             


              @elseif($cms->id=='134')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline" value="{{$cms->tagline}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
              </div>
             
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title1" value="{{$cms->title1}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline1" value="{{$cms->tagline1}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description1">{{$cms->short_description1}}</textarea>
              </div>
              
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title2" value="{{$cms->title2}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline2" value="{{$cms->tagline2}}">
              </div>

              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description2">{{$cms->short_description2}}</textarea>
              </div>
             
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline3" value="{{$cms->tagline3}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline4" value="{{$cms->tagline4}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline5" value="{{$cms->tagline5}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline6" value="{{$cms->tagline6}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description3">{{$cms->short_description3}}</textarea>
              </div>

              @elseif($cms->id=='127')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->	title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline1" value="{{$cms->tagline1}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
              </div>
             
              <div class="col-md-12">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline2" value="{{$cms->tagline2}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description1">{{$cms->short_description1}}</textarea>
              </div>
              <div class="col-md-12">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline3" value="{{$cms->tagline3}}">
              </div>
              @elseif($cms->id=='128')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->	title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline1" value="{{$cms->tagline1}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
              </div>
             
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline2" value="{{$cms->tagline2}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline3" value="{{$cms->tagline3}}">
              </div>
              <div class="col-md-12">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline4" value="{{$cms->tagline4}}">
              </div>
              @elseif($cms->id=='129')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->	title}}">
              </div>
             
              <div class="col-md-12">
                <label for="title" class="form-label">Header tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="tagline" value="{{$cms->	tagline}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description">{{$cms->short_description}}</textarea>
              </div>
             
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="short_description1">{{$cms->short_description1}}</textarea>
              </div>
             

              {{-- @elseif($cms->id=='130')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-12">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->	title}}">
              </div>
             
              @for($i = 0; $i < 10; $i++)
              <div class="col-md-6">
              
                <label for="taglines">Taglines (English):</label>
                  
                <input type="text" class="form-control mb-2" id="tagline_{{ $i }}" name="taglines[]" value="{{ isset($cms->taglines[$i]) ? $cms->taglines[$i] : '' }}">
                  </div>
                 @endfor
               --}}
             
             
 
               @elseif($cms->id=='131')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5" name="tagline" value="{{$cms->tagline}}">
              </div>
              @elseif($cms->id=='132')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5" name="tagline" value="{{$cms->tagline}}">
              </div>
              @elseif($cms->id=='133')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="title" value="{{$cms->title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5" name="tagline" value="{{$cms->tagline}}">
              </div>
          @endif
            </div>
            <div class="tab-pane fade" id="arabic" role="tabpanel" aria-labelledby="arabic-tab">
              <!-- Multi Columns Form -->
             <div class="row">
			          @csrf
                @if($cms->id=='111')
                 <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title" value="{{$cms->arabic_title}}">
                </div>

                {{-- <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline" value="{{$cms->arabic_tagline}}">
                </div> --}}
                <div class="col-md-6">
                  <label for="title" class="form-label">Logo</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_logo" value="{{$cms->arabic_logo}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title" value="{{$cms->arabic_title1}}">
                </div>
                {{-- <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline1" value="{{$cms->arabic_tagline1}}">
                </div> --}}
                <div class="col-md-6">
                  <label for="title" class="form-label">Logo</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_logo1" value="{{$cms->arabic_logo1}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description1">{{$cms->arabic_short_description1}}</textarea>
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title2" value="{{$cms->arabic_title2}}">
                </div>
                {{-- <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline2" value="{{$cms->arabic_tagline2}}">
                </div> --}}
                <div class="col-md-6">
                  <label for="title" class="form-label">Logo</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_logo2" value="{{$cms->arabic_logo2}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description2">{{$cms->arabic_short_description2}}</textarea>
                </div>
                @elseif( $cms->id=='115')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
               <div class="col-md-6">
                 <label for="title" class="form-label">Title</label>
                 <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title" value="{{$cms->arabic_title}}">
              </div>
               <div class="col-md-6">
                 <label for="title" class="form-label">Tagline</label>
                 <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline" value="{{$cms->arabic_tagline}}">
               </div> 
              
               


                @elseif($cms->id=='116')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
 <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title" value="{{$cms->arabic_title}}">
                </div>
              
                <div class="col-md-6">
                  <label for="title" class="form-label">Header Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_tagline" value="{{$cms->arabic_tagline}}">
                </div>
                {{-- <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
                </div> --}}
                

                @elseif($cms->id=='113')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-12">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title" value="{{$cms->arabic_title}}">
                </div>
                <div class="col-md-12">
                  <label for="title" class="form-label">Header Tagline1</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_tagline" value="{{$cms->arabic_tagline}}">
                </div>
                <div class="col-md-12">
                  <label for="title" class="form-label">Header Tagline2</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_tagline1" value="{{$cms->arabic_tagline1}}">
                </div>
               <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
                </div>
                @elseif( $cms->id=='114')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title" value="{{$cms->arabic_title}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
                </div>
                {{-- <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Update</button>
                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                  </div>
                </div>   --}}
                
                @elseif($cms->id=='117')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title" value="{{$cms->arabic_title}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline" value="{{$cms->arabic_tagline}}">
                </div>
          

                @elseif($cms->id=='118')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title" value="{{$cms->arabic_title}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline" value="{{$cms->arabic_tagline}}">
                </div>
                
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
                </div>

                @elseif($cms->id=='119')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title" value="{{$cms->arabic_title}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline" value="{{$cms->arabic_tagline}}">
                </div>
                
                <div class="col-md-12">
                  <label for="title" class="form-label">Header Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline1" value="{{$cms->arabic_tagline1}}">
                </div>
                
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
                </div>
              
              

                @elseif($cms->id=='120')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title" value="{{$cms->arabic_title}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline" value="{{$cms->arabic_tagline}}">
                </div>
                <div class="col-md-12">
                  <label for="title" class="form-label">Header Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline1" value="{{$cms->arabic_tagline1}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
                </div>
              

                @elseif($cms->id=='121')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title" value="{{$cms->arabic_title}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline" value="{{$cms->arabic_tagline}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Header Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline1" value="{{$cms->arabic_tagline1}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label"> Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline2" value="{{$cms->arabic_tagline2}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description1">{{$cms->arabic_short_description1}}</textarea>
                </div>

                @elseif($cms->id=='122')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title" value="{{$cms->arabic_title}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline" value="{{$cms->arabic_tagline}}">
                </div>

                <div class="col-md-6">
                  <label for="title" class="form-label">Header Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline1" value="{{$cms->arabic_tagline1}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label"> Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline2" value="{{$cms->arabic_tagline2}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
                </div>

                @elseif($cms->id=='125')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-12">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title" value="{{$cms->arabic_title}}">
                </div>
                {{-- <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline" value="{{$cms->arabic_tagline}}">
                </div> --}}
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
                </div>

                
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" 
                  name="arabic_title1" value="{{$cms->arabic_title1}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline1" value="{{$cms->arabic_tagline1}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description1">{{$cms->arabic_short_description1}}</textarea>
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title2" value="{{$cms->arabic_title2}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" 
                  name="arabic_tagline2" value="{{$cms->arabic_tagline2}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;" name="arabic_short_description2">{{$cms->arabic_short_description2}}</textarea>
                </div>
                <div class="col-md-12">
                  <label for="title" class="form-label">Header Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" 
                  name="arabic_tagline3" value="{{$cms->arabic_tagline3}}">
                </div>
                @elseif($cms->id=='124')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"name="arabic_title" value="{{$cms->arabic_title}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline" value="{{$cms->arabic_tagline}}">
                </div>
                <div class="col-md-12">
                  <label for="title" class="form-label">Header Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  style="direction: rtl;" name="arabic_tagline1" value="{{$cms->arabic_tagline1}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;"name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
                </div>

                @elseif($cms->id=='123')
                <input type="hidden" name="id" value="{{$cms->id}}"/>
                <div class="col-md-6">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5"  name="arabic_title" value="{{$cms->arabic_title}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  name="arabic_tagline" value="{{$cms->arabic_tagline}}">
                </div>
                <div class="col-md-6">
                  <label for="title" class="form-label">Header Tagline</label>
                  <input type="text" class="form-control" id="inputName5"  name="arabic_tagline1" value="{{$cms->arabic_tagline1}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5"  name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
                </div>
                @elseif($cms->id=='126')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="arabic_title" style="direction: rtl;"  value=" {{$cms->arabic_title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="arabic_tagline" value="{{$cms->arabic_tagline}}" style="direction: rtl;" >
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" style="direction: rtl;"  id="inputName5"  name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
              </div>
             
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" style="direction: rtl;" id="inputName5"  name="arabic_title1" value="{{$cms->arabic_title1}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" style="direction: rtl;" id="inputName5"  name="arabic_tagline1" value="{{$cms->arabic_tagline1}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" style="direction: rtl;"  id="inputName5"  name="arabic_short_description1">{{$cms->arabic_short_description1}}</textarea>
              </div>
              
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_title2" value="{{$cms->arabic_title2}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_tagline2" value="{{$cms->arabic_tagline2}}">
              </div>

              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" style="direction: rtl;"  class="form-control ckeditor" id="inputName5"  name="arabic_short_description2">{{$cms->arabic_short_description2}}</textarea>
              </div>
            
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_tagline3" value="{{$cms->arabic_tagline3}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"   name="arabic_tagline4" value="{{$cms->arabic_tagline4}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_tagline5" value="{{$cms->arabic_tagline5}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_tagline6" value="{{$cms->arabic_tagline6}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_tagline7" value="{{$cms->arabic_tagline7}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" style="direction: rtl;"  id="inputName5"  name="arabic_short_description3">{{$cms->arabic_short_description3}}</textarea>
              </div>

              @elseif($cms->id=='134')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5"  name="arabic_title" style="direction: rtl;"  value=" {{$cms->arabic_title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="arabic_tagline" value="{{$cms->arabic_tagline}}" style="direction: rtl;" >
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" style="direction: rtl;"  id="inputName5"  name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
              </div>
             
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" style="direction: rtl;" id="inputName5"  name="arabic_title1" value="{{$cms->arabic_title1}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" style="direction: rtl;" id="inputName5"  name="arabic_tagline1" value="{{$cms->arabic_tagline1}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" style="direction: rtl;"  id="inputName5"  name="arabic_short_description1">{{$cms->arabic_short_description1}}</textarea>
              </div>
              
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_title2" value="{{$cms->arabic_title2}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_tagline2" value="{{$cms->arabic_tagline2}}">
              </div>

              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" style="direction: rtl;"  class="form-control ckeditor" id="inputName5"  name="arabic_short_description2">{{$cms->arabic_short_description2}}</textarea>
              </div>
            
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_tagline3" value="{{$cms->arabic_tagline3}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"   name="arabic_tagline4" value="{{$cms->arabic_tagline4}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_tagline5" value="{{$cms->arabic_tagline5}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_tagline6" value="{{$cms->arabic_tagline6}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" style="direction: rtl;"  id="inputName5"  name="arabic_short_description2">{{$cms->arabic_short_description2}}</textarea>
              </div>
              @elseif($cms->id=='127')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_title" value="{{$cms->arabic_title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"  name="arabic_tagline1" value="{{$cms->arabic_tagline1}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;" name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
              </div>
             
              <div class="col-md-12">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="arabic_tagline2" value="{{$cms->arabic_tagline2}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  name="arabic_short_description2">{{$cms->arabic_short_description2}}</textarea>
              </div>
              <div class="col-md-12">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="arabic_tagline3" value="{{$cms->arabic_tagline3}}">
              </div>


              @elseif($cms->id=='128')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_title" value="{{$cms->arabic_title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  style="direction: rtl;"  name="arabic_tagline1" value="{{$cms->arabic_tagline1}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;" name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
              </div>
             
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="arabic_tagline2" value="{{$cms->arabic_tagline2}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="arabic_tagline3" value="{{$cms->arabic_tagline3}}">
              </div>
              <div class="col-md-12">
                <label for="title" class="form-label">Tagline</label>
                <input type="text" class="form-control" id="inputName5"  name="arabic_tagline4" value="{{$cms->arabic_tagline4}}">
              </div>
              @elseif($cms->id=='129')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_title" value="{{$cms->arabic_title}}">
              </div>
              <div class="col-md-12">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_tagline" value="{{$cms->arabic_tagline}}">
              </div>
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;" name="arabic_short_description">{{$cms->arabic_short_description}}</textarea>
              </div>
             
              <div class="col-md-12">
                <label for="short description" class="form-label">Short Description</label>
                <textarea type="text" class="form-control ckeditor" id="inputName5"  style="direction: rtl;" name="arabic_short_description1">{{$cms->arabic_short_description1}}</textarea>
              </div>
             
              @elseif($cms->id=='131')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_title" value="{{$cms->arabic_title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_tagline" value="{{$cms->arabic_tagline}}">
              </div>
              @elseif($cms->id=='132')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_title" value="{{$cms->arabic_title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_tagline" value="{{$cms->arabic_tagline}}">
              </div>
             
              @elseif($cms->id=='133')
              <input type="hidden" name="id" value="{{$cms->id}}"/>
              <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_title" value="{{$cms->arabic_title}}">
              </div>
              <div class="col-md-6">
                <label for="title" class="form-label">Header Tagline</label>
                <input type="text" class="form-control" id="inputName5" style="direction: rtl;"  name="arabic_tagline" value="{{$cms->arabic_tagline}}">
              </div>
                @endif
                
              <!-- End Multi Columns Form -->

            </div>
          </div>
          @if($cms->id=='111' || $cms->id=='115'  ||$cms->id=='114'   || $cms->id=='119' || $cms->id=='120' || $cms->id=='129'|| $cms->id=='131' || $cms->id=='122' | $cms->id=='123')
          <div class="col-md-6 ">
            <label for="inputState" class="">Image</label>
            <input type="file" name="image" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image) }}" id="output"  width="100" ></a>
          </div>
          @elseif($cms->id=='121')
          <div class="col-md-6 ">
            <label for="inputState" class="">Header Image</label>
            <input type="file" name="image" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image) }}" id="output"  width="100" ></a>
          </div>
          @elseif($cms->id=='132')
          <div class="col-md-6 ">
            <label for="inputState" class="">Header Image</label>
            <input type="file" name="image" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image) }}" id="output"  width="100" ></a>
          </div>
          @elseif($cms->id=='133')
          <div class="col-md-6 ">
            <label for="inputState" class="">Header Image</label>
            <input type="file" name="image" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image) }}" id="output"  width="100" ></a>
          </div>
          @elseif($cms->id=='127')
          <div class="row">
          <div class="col-md-6 ">
            <label for="inputState" class="">Header Image</label>
            <input type="file" name="image" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image) }}" id="output"  width="100" ></a>
          </div>
          <div class="col-md-6 ">
            <label for="inputState" class="">Header Image</label>
            <input type="file" name="image1" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile1(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image1) }}" id="output1"  width="100" ></a>
          </div>
        </div>
        @elseif($cms->id=='124')
          <div class="row">
          <div class="col-md-6 ">
            <label for="inputState" class="">Image</label>
            <input type="file" name="image" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image) }}" id="output"  width="100" ></a>
          </div>
          <div class="col-md-6 ">
            <label for="inputState" class="">Header Image</label>
            <input type="file" name="image1" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile1(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image1) }}" id="output1"  width="100" ></a>
          </div>
        </div>
        @elseif($cms->id=='128')
          <div class="row">
          <div class="col-md-6 ">
            <label for="inputState" class="">Image</label>
            <input type="file" name="image" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image) }}" id="output"  width="100" ></a>
          </div>
          <div class="col-md-6 ">
            <label for="inputState" class="">Header Image</label>
            <input type="file" name="image1" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile1(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image1) }}" id="output1"  width="100" ></a>
          </div>
        </div>
          @elseif($cms->id=='125')
          <div class="row">
          <div class="col-md-6 ">
            <label for="inputState" class="">Image</label>
            <input type="file" name="image" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image) }}" id="output"  width="100" ></a>
          </div>
         
          <div class="col-md-6 ">
            <label for="inputState" class="">Header Image</label>
            <input type="file" name="image1" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile1(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image1) }}" id="output1"  width="100" ></a>
          </div>
        </div>
          @elseif( $cms->id=='134')
          <div class="row">
          <div class="col-md-6 ">
            <label for="inputState" class="">Image</label>
            <input type="file" name="image" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image) }}" id="output"  width="100" ></a>
          </div><div class="col-md-6 ">
            <label for="inputState" class="">Image</label>
            <input type="file" name="image1" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile1(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image1) }}" id="output1"  width="100" ></a>
          </div>
          <div class="col-md-6 ">
            <label for="inputState" class="">Image</label>
            <input type="file" name="image2" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile2(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image2) }}" id="output2"  width="100" ></a>
          </div>
          <div class="col-md-6 ">
            <label for="inputState" class="">Image</label>
            <input type="file" name="image3" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile3(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image3) }}" id="output3"  width="100" ></a>
          </div>
          </div>
         


          @elseif($cms->id=='126')
          <div class="row">
          <div class="col-md-6 ">
            <label for="inputState" class="">Image</label>
            <input type="file" name="image" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image) }}" id="output"  width="100" ></a>
          </div><div class="col-md-6 ">
            <label for="inputState" class="">Image</label>
            <input type="file" name="image1" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile1(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image1) }}" id="output1"  width="100" ></a>
          </div>
          <div class="col-md-6 ">
            <label for="inputState" class="">Image</label>
            <input type="file" name="image2" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile2(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image2) }}" id="output2"  width="100" ></a>
          </div>
          <div class="col-md-6 ">
            <label for="inputState" class="">Image</label>
            <input type="file" name="image3" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile3(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image3) }}" id="output3"  width="100" ></a>
          </div>
          <div class="col-md-6 ">
            <label for="inputState" class="">Image</label>
            <input type="file" name="image4" id="imgInnpp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile4(event)">
            <a href=""><img src="{{ asset('Backend/images/' . $cms->image4) }}" id="output4"  width="100" ></a>
          </div>
          </div>
          @endif
          <div class=" mt-3">
            <div class="col-md-12" style="text-align: right;">
              <button type="submit" class="btn btn-primary submit">Update</button>
              <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
            </div>
          </div> 
        </form>
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
    var loadFile1 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output1');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
    var loadFile2 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output2');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
    var loadFile3 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output3');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };

     var loadFile4 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output4');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
  </script>

@include('Admin.include.footer')
@include('Admin.include.script')

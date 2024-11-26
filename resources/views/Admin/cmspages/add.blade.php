
@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
  <main id="main" class="main">
<style>
    .add{
  cursor: pointer;
  }
</style>
    <div class="pagetitle">
      <h1>CMS Pages
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/cms')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">Add CMS Pages</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Add About Us</h5> -->

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('cmspages.store')}}" enctype="multipart/form-data">
			  @csrf
        <h4 class="card-title">HOME</h4>
                <h5 class="card-title">Top Section</h5>
                <div class="col-md-6">
                  <label for="title1" class="form-label">Title</label>
                  <input type="text" class="form-control ckeditor" id="inputName5" name="title1" required="">
                </div>
                <div class="col-md-12">
                  <label for="short_description1" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="short_description1"></textarea>
                </div>
                <div class="row" id="ipapprove">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Icon</label>
                  <input type="text" class="form-control" id="inputName5" name="cms[0][icon1]">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="cms[0][title1]">
                </div>             
              </div>
              <div class="appending_services">
      <div>
      
      </div>
    </div>
    <div class="row">
                  <div class="col-md-12">
                    <a class="btn1 btn btn-primary add_services">
                      <span class="fa fa-plus ">Add More</span>
                    </a>
                  </div>
                </div>
                <h5 class="card-title">Mid Section</h5>
                <div class="col-md-6">
                  <label for="title2" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title2" required="">
                </div>
                <div class="col-md-6">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="number" class="form-control" id="inputName5" name="phone" required="">
                </div>
                <div class="col-md-12">
                  <label for="short_description2" class="form-label">Short Description</label>
                  <textarea type="text"  class="form-control ckeditor" id="inputName5" name="short_description2"></textarea>
                </div>
                
                <h5 class="card-title">Bottom Section</h5>
                <div class="col-md-6">
                  <label for="title3" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title3" required="">
                </div>
                <div class="col-md-6">
                  <label for="short_description3" class="form-label">Short Description</label>
                  <textarea rows="3" type="text" class="form-control" id="inputName5" name="short_description3"></textarea>
                </div>
                <div class="col-md-12">
                  <label for="description2" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="description2"></textarea>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Image</label>
                  <input type="file" name="image1" id="imgInp" required="" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                  <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{asset('Backend/images/dummy_image.jpg')}}" id="output"  width="100" ></a>
                </div>
                <h4 class="card-title">ABOUT US Section</h4>
                <div class="col-md-12">
                  <label for="short_description2" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="short_description"></textarea>
                </div>
                <div class="col-md-12">
                  <label for="description" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="description"></textarea>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Image</label>
                  <input type="file" name="image" id="imgInp" required="" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile1(event)">
                  <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{asset('Backend/images/dummy_image.jpg')}}" id="output1"  width="100" ></a>
                </div>
              <div class="row" id="ipapprove">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Icon</label>
                  <input type="text" class="form-control" id="inputName5" name="cms[0][icon]">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="cms[0][title]">
                </div>
                <div class="col-md-12">
                  <label for="inputState" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="cms[0][description]"></textarea>
                </div>
             
              </div>
                
    <div class="appending_div">
      <div>
      
      </div>
    </div>
    <div class="row">
                  <div class="col-md-12">
                    <a class="btn1 btn btn-primary add">
                      <span class="fa fa-plus ">Add More</span>
                    </a>
                  </div>
                </div>

                <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Submit</button>
                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                  </div>
                </div>  
              </form><!-- End Multi Columns Form -->

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
</script>
<script type="text/javascript">
 $(document).ready(function() {
   $('select[name="category_id"]').on('change', function(){
       var category_id = $(this).val();
       if(category_id) {
           $.ajax({
               url:"{{ url('/catagory/subcategory/ajax')}}/"+category_id,
               type:"GET",
               dataType:"json",
               success:function(data) {

                  var d =$('select[name="subcategory_id"]').empty();
                     $.each(data, function(key,value){
                     $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.title+ '</option>');
});
},
});
} else {
           alert('danger');
}
});
});
</script>
<script>
$(document).ready(function(){
  var i = 0;
  $('.add_services').on('click', function() {
    i++;
    var field = '<br> <div class="row"><div class="col-md-6"><label for="inputState" class="form-label">Icon</label> '+i+': <input class="form-control" type="text" name="cms['+ i +'][icon1]"> </div> <div class="col-md-6"><label for="inputState" class="form-label">Title</label> '+i+':  <input class="form-control" type="text" name="cms['+ i +'][title1]"></div></div>';
    $('.appending_services').append(field);
  });
});

</script>
<script>
$(document).ready(function(){
  var i = 0;
  $('.add').on('click', function() {
    i++;
    var field = '<br> <div class="row"><div class="col-md-6"><label for="inputState" class="form-label">Icon</label> '+i+': <input class="form-control" type="text" name="cms['+ i +'][icon]"> </div> <div class="col-md-6"><label for="inputState" class="form-label">Title</label> '+i+':  <input class="form-control" type="text" name="cms['+ i +'][title]"></div></div><div class="row"><div class="col-md-6"><label for="inputState" class="form-label">Service Description</label> '+i+':<textarea type="text" class="form-control ckeditor" id="inputName5" name="cms['+ i +'][description]"></textarea> </div></div>';
    $('.appending_div').append(field);
  });
});

</script>
@include('Admin.include.footer')
@include('Admin.include.script')

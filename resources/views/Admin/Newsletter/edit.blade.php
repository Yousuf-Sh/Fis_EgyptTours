@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">
    <style>
      .card-body {
        padding: 20px 20px 20px 20px;
      }
    </style>
    <div class="pagetitle">
      <h1>Contact Us
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/newsletter')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">General Settings</li>
          <li class="breadcrumb-item active">Edit Contact Us</li>
        </ol>
      </nav>
    </div> 
    <!-- End Page Title -->
    <section class="section">
      <div class="card">
        <div class="card-body">
          <!-- Multi Columns Form -->
          <form class="" method="POST" action="{{route('Newsletter.update')}}" enctype="multipart/form-data">
            <input type="hidden" value="{{$Newsletter->id}}" name="id">
            @csrf
            <div class="row">
                
             
              <div class="col-md-6">
                <label for="inputState" class="form-label"><strong>email :</strong></label>
                <span>{{$Newsletter->email}}</span>
              </div>
              
              
             
              <div class="col-md-12 mt-3" style="text-align: right;">
                <button type="submit" class="btn btn-primary submit">Submit</button>
                <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
              </div>
            </div>        
          </form>
        </div>
      </div>
    </section>
  </main>
@include('Admin.include.footer')
@include('Admin.include.script')
@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">
    <div class="pagetitle">
        <h1>Contact Us
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('/admin/contact')}}">Back</a>
        </h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">General Settings</li>
            <li class="breadcrumb-item active">Add Contact Us</li>
          </ol>
        </nav>
      </div>  
    <!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
             

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('contact.store')}}" enctype="multipart/form-data">
              @csrf
                <div class="col-md-6">
                  <label for="inputState" class="form-label">name</label>
                  <input type="text" class="form-control" id="inputName5" name="name" value="" required>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">address </label>
                  <input type="text" class="form-control" id="inputName5" name="address"  required>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">services</label>
                  <input type="text" class="form-control" id="inputName5" name="services"  required>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">phone</label>
                  <input type="number" class="form-control" id="inputName5" name="phone"  required>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">email</label>
                  <input type="text" class="form-control" id="inputName5" name="email"  required>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">message</label>
                  <input type="text" class="form-control" id="inputName5" name="message"  required>
                </div>
                
             
          
             <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary submit">Submit</button>
                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                  </div>
                </div> 
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
    
    </script>
  </main>
@include('Admin.include.footer')
@include('Admin.include.script')
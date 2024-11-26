@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
<main id="main" class="main">
<div class="pagetitle">
      <h1>Contact</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Submissions</li>
          <li class="breadcrumb-item active">View Contact</li>
        </ol>
      </nav>
    </div>
   <!-- End Page Title -->
  


   <section class="section addEvent">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <!-- <ul class="nav nav-pills mb-1 mt-3" id="pills-tab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active buttnview" id="detailTab-tab" data-bs-toggle="pill" data-bs-target="#detailTab" type="button" role="tab" aria-controls="detailTab" aria-selected="true">Member Record</button>
                     </li>
                  </ul> -->
                  <div class="tab-content pt-2" id="myTabContent">
                     <div class="tab-pane fade show active" id="detailTab" role="tabpanel" aria-labelledby="home-tab">
                        <div class="col-lg-12">
                           <div class="d-flex justify-content-end align-items-end">
                              <a href="{{url('/admin/Newsletter')}}" class="btn btn-primary m-1 backbtnn">Back</a>
                              <!-- <a href="#" class="btn btn-primary m-1">Save</a> -->
                              
                           </div>
                        </div>  
                  </div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="card eventDetailCard">
                                 <!-- <div class="card-header profpicname">
                                 Submitted Record
                                 </div> -->
                                 <div class="card-body">

                                    <div class="row">
                                       {{-- <div class="col-md-6">
                                          <div class="viewMemberContent">
                                             <p class="mt-4">
                                                <strong>Name:</strong>
                                                   {{$contact->name}}
                                                
                                             </p>
                                          </div>
                                       </div> --}}
                                       <div class="col-md-6">
                                          <div class="viewMemberContent">
                                          <p class="mt-4">
                                                <strong>Email:</strong>
                                             {{$Newsletter->email}}
                                             </p>
                                          </div>
                                       </div>
                                      
                                    
                                       
                                       {{-- <div class="col-md-6">
                                          <div class="viewMemberContent">
                                          <p class="mt-4">
                                             <strong>Message:</strong>
                                                
                                             {{$Newsletter->message}}
                                             </p>
                                          </div>
                                       </div>  --}}
                                       <div class="col-md-6">
                                          <div class="viewMemberContent">
                                          <p class="mt-4">
                                             <strong>Message Reply:</strong>
                                                
                                             {{$Newsletter->reply}}
                                             </p>
                                          </div>
                                       </div>  
                                          </div>
                                       </div>
                                       <div class="container ml-4">
                                          <div class="row">
                                       <form class=""  method="POST" action="{{route('Newsletter.update')}}" enctype="multipart/form-data">
                                          @csrf
                                          <input type="hidden" name="id" value="{{$Newsletter->id}}"/>
                                          <div class="col-md-6">
                                             <strong for="inputState" class="form-label">Reply</strong>
                                             <textarea type="text" class="form-control" id="inputName5" rows="3" name="reply"></textarea>
                                           </div>
                                          <div class="col-md-12" style="text-align: right;">
                                             <button type="submit" class="btn btn-primary submit">Update Reply</button>
                                             <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                                           </div>
                                       </form>
                                       </div>
                                    </div>
                                    </div>
                                 </div> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> 
                
            </div>
         </div>
      </div>
      
</section>
</main>

@include('Admin.include.footer')
@include('Admin.include.script')
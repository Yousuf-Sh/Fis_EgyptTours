
@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
<main id="main" class="main">
<div class="pagetitle">
      <h1>Registered Members</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Members</li>
          <li class="breadcrumb-item active">Registered Members</li>
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

                        <div class="row">
                           <div class="col-lg-12">
                              <div class="card eventDetailCard">
                                 <!-- <div class="card-header profpicname">
                                 Submitted Record
                                 </div> -->
                                 <div class="card-body">

                                    <div class="row">
                                       <div class="col-md-9">
                                          <div class="viewMemberContent">
                                             <p class="mb-1">
                                                {{$member->name}}
                                                   
                                                
                                             </p>
                                             <p class="mt-2">
                                             {{$member->company}}
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <p class="mb-1">
                                                   <strong>Address:</strong><br>
                                                   
                                             {!!$member->address!!}
                                             
                                               
                                          </p>
                                          <p class="mb-1">
                                             {{$member->email}}
                                          </p>
                                          <p class="mb-1">
                                             {{$member->phone}}
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <p class="mb-1">
                                                   <strong>Image:</strong><br>
                                                   
                                                   @if($member->image)
                  <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{ asset('Backend/images/' . $member->image) }}" id="output"  width="100" ></a>
                  @endif
                  @if($member->image=='')
                  <a href=""  onClick="delete(1)"><span class="fa fa-close"><img src="{{asset('Backend/images/dummy_image.jpg')}}" id="output"  width="100" ></a>
                  @endif
                                             
                                               
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> 
                  <div class="col-lg-12">
                        <div class="d-flex justify-content-end align-items-end">
                           <a href="{{url('/admin/registered-members')}}" class="btn btn-primary m-1 backbtnn">Back</a>
                           <!-- <a href="#" class="btn btn-primary m-1">Save</a> -->
                           
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
@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

    @if (session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif (session('fail'))
    <div id="success-message" class="alert alert-danger">
        {{ session('fail') }}
    </div>
    @endif
  <main id="main" class="main" >
  <div class="pagetitle">
      <h1>Offers</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">Manage Offers</li>
        </ol>
      </nav>
    </div>
    <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header d-flex">
            <a href="{{route('offers.create')}}" title="click to Add New Row" class="btn1 btn btn-primary my-auto ms-auto add">
              <span class="fa fa-plus text-white"> Add</span>
            </a>
          </div>
          <div class="card-body"> 

            <!-- Table with stripped rows -->
            <div class="table-responsive">
              <table class="table table1" id="example">
                <thead>
                  <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Language</th>
                    <th scope="col">Title</th>
                    <th scope="col">Offer Type</th>
                    <th scope="col">Feature 1</th>
                    <th scope="col">Feature 2</th>
                    <th scope="col">Feature 3</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount Price</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($offers as $key => $offer)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$offer->language}}</td>
                    <td>{{$offer->title}}</td>
                    <td>{{$offer->type}}</td>
                    <td>{{$offer->feature1}}</td>
                    <td>{{$offer->feature2}}</td>
                    <td>{{$offer->feature3}}</td>
                    <td>{{$offer->price}}</td>
                    <td>{{$offer->discount_price}}</td>
                    <td>{{$offer->created_at}}</td>
                    
                    <td>
                      <div class="d-flex">
                        <a href="{{route('offers.edit',$offer->id)}}" title="Click to Edit" class="text-info"><span class="fa fa-pencil"></span></a>&nbsp;
                        <form action="{{ route('offers.destroy', $offer->id) }}" method="POST" style="display: inline;" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-link text-danger delete-btn" title="Click to Delete">
                                <span class="fa fa-trash"></span>
                            </button>
                        </form>
                        
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>  
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
    </section>

  </main><!-- End #main -->

  @include('Admin.include.footer')
@include('Admin.include.script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function () {
        // Hide success message after 2.5 seconds
        setTimeout(function () {
            $("#success-message").fadeOut("slow", function () {
                $(this).remove(); // Remove the element from the DOM after fading out
            });
        }, 2500);
    });
</script>



<!-- Delete Confirmation -->
<script>
    $(document).ready(function () {
        // Attach click event to all delete buttons
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();

                // Get the form element and its action attribute
                const form = this.closest('form'); // Closest form to the button
                const href = form.getAttribute('action'); // Get the action URL

                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to delete this offer?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#4caf50',
                    cancelButtonColor: '#f44336',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then(result => {
                    if (result.isConfirmed) {
                        // Submit the form
                        form.submit();
                    }
                });
            });
        });
    });
</script>

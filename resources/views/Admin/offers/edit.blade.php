@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

<main id="main" class="main">

<div class="pagetitle">
    <h1>Offers
    <a type="submit" class="btn btn-danger" style="float:right;" href="{{route('offers.index')}}">Back</a>
    </h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{ route('offers.index') }}>Offers</a></li>
        <li class="breadcrumb-item active">Edit offers</li>
    </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="row">
    

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                            <form class="" method="POST" action="{{ route('offers.update',$offer->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row g3 my-3">

                                    <div class="col-md-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title" {{ $offer->language === 'ar' ? 'style=direction:rtl;' : '' }} required value="{{ $offer->title }}">
                                        <input type="hidden" name="language" class="form-control" id="language"  required value="{{ $offer->language }}">
                                    </div>


                                    <div class="col-md-6">
                                        <label for="type" class="form-label">Offer Type</label>
                                        <input type="text" name="type" class="form-control" id="type" {{ $offer->language === 'ar' ? 'style=direction:rtl;' : '' }} required value="{{ $offer->type }}">
                                    </div>
                                </div>
                                
                                <div class="row g-3 mb-3">

                                    <div class="col-md-4">
                                        <label for="price" class="form-label">Feature 1</label>
                                        <input type="text" name="feature1" class="form-control" id="feature1" {{ $offer->language === 'ar' ? 'style=direction:rtl;' : '' }} required value="{{ $offer->feature1 }}">
                                    </div>


                                    <div class="col-md-4">
                                        <label for="feature2" class="form-label">Feature 2</label>
                                        <input type="text" name="feature2" class="form-control" id="feature2" {{ $offer->language === 'ar' ? 'style=direction:rtl;' : '' }} required value="{{ $offer->feature2 }}">
                                    </div>


                                    <div class="col-md-4">
                                        <label for="feature3" class="form-label">Feature 3</label>
                                        <input name="feature3" class="form-control" id="feature3" {{ $offer->language === 'ar' ? 'style=direction:rtl;' : '' }} required value="{{ $offer->feature3 }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="images" id="imgInp"  accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile(event)">
                                        <a href="{{ asset('storage/' . $offer->image) }}"><img src="{{ asset('storage/' . $offer->image) }}" id="output"  width="100" class="my-3"></a>
                                    </div>
                
                                    <div class="col-md-6">
                                        <label for="price" class="form-label">Price</label>
                                        <input name="price" class="form-control" id="price" {{ $offer->language === 'ar' ? 'style=direction:rtl;' : '' }} required value="{{ $offer->price }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="discount_price" class="form-label"> Discount Price</label>
                                        <input name="discount_price" class="form-control" id="discount_price" {{ $offer->language === 'ar' ? 'style=direction:rtl;' : '' }} required value="{{ $offer->discount_price }}">
                                    </div>
                
                                  

                                    


                                </div>
                                <div class="col-md-12" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary submit" id="submitAll">Submit</button>
                                </div>
                                
                            </form>
                </div>
        </div>  
        
        
        
            
       
    
    {{-- </form> --}}
</div>
    </div>
</div>
</div>
</div>
</section>

</main>
@include('Admin.include.footer')
 @include('Admin.include.script')

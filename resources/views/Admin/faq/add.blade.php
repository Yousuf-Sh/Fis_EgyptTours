@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
<style>
    .full-width-button {
  width: 40%;
  padding: 10px;
 
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
    </style>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Frequently Asked Question
            <a href="{{url('admin/faq')}}" class="btn btn-danger" style="float:right;">Back</a>
        </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">ADD</li>
                <li class="breadcrumb-item active">Add FAQ</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row question-container">
            <div class="col-md-12">
                <form class="row g-3" method="POST" action="{{ route('faq.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <button type="button" class="btn btn-success mb-3 text-white" id="add_button">{{ __('Add Questions') }}</button>
                        <div class="mt-3" id="addQuestion">
                            <!-- Existing English questions row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">{{ __('Question (English)') }}</label>
                                    <input type="text" name="q1[]" class="form-control" id="inputtitle" placeholder="" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">{{ __('Description Question (English)') }}</label>
                                    <textarea type="text" class="form-control" id="inputName5" rows="3" name="qesc1[]" required></textarea>
                                </div>
                                {{-- <div class="col-md-2">
                                    <div class="form-group mt-4">
                                        <button type="button" class="btn btn-danger btn-circle " id="remove">{{ __('Remove') }}</button>
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                  <label for="inputState" class="form-label">{{ __('Question (Arabic)') }}</label>
                                  <input type="text" name="question_ar[]" class="form-control" style="direction:rtl;"id="inputtitle" placeholder="" required>
                              </div>
                              <div class="col-md-4">
                                  <label for="inputState" class="form-label">{{ __('Description Question (Arabic)') }}</label>
                                  <textarea type="text" class="form-control" id="inputName5" rows="3" style="direction:rtl;" name="question_description_ar[]" required></textarea>
                              </div>
                        <div class="col-3 text-left">     
                    <button type="button" class="btn btn-danger btn-circle remove" id="remove">{{ __('Remove') }}</button>
        <button type="submit" class="btn btn-primary submit">{{ __('Submit') }}</button>
        <!-- <button type="reset" class="btn btn-secondary">{{ __('Reset') }}</button> -->
    </div>
    </div>
            </div>
        </div>
        <!-- End of Arabic questions row -->
    </div>
    
                           
                 
                  
                            </div>
                            <!-- End of English questions row -->
                        </div>
                        
                </form>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<script>
    // $('#add_button').click(function(e){
    //     e.preventDefault();
    //     $("#addQuestion").append(`
    //     <div class="row question-container">
    //                             <div class="col-md-6">
    //                                 <label for="inputState" class="form-label">{{ __('Question (English)') }}</label>
    //                                 <input type="text" name="q1[]" class="form-control" id="inputtitle" placeholder="" required>
    //                             </div>
    //                             <div class="col-md-4">
    //                                 <label for="inputState" class="form-label">{{ __('Description Question (English)') }}</label>
    //                                 <textarea type="text" class="form-control" id="inputName5" rows="3" name="qesc1[]" required></textarea>
    //                             </div>
                               
    //                             <div class="col-md-6">
    //                               <label for="inputState" class="form-label">{{ __('Question (Arabic)') }}</label>
    //                               <input type="text" name="question_ar[]" class="form-control" style="direction:rtl;"id="inputtitle" placeholder="" required>
    //                           </div>
    //                           <div class="col-md-4">
    //                               <label for="inputState" class="form-label">{{ __('Description Question (Arabic)') }}</label>
    //                               <textarea type="text" class="form-control" id="inputName5" rows="3" style="direction:rtl;" name="question_description_ar[]" required></textarea>
    //                           </div>
    //                           <div class="col-3 text-left">     
    //                 <button type="button" class="btn btn-danger btn-circle remove" id="remove">{{ __('Remove') }}</button>
       
        
    // </div>
    //                       </div>
    //     `);
    //     $(".submit").show();
    // });
    
//     $(document).on('click', '#remove', function(e) {
//     e.preventDefault();
//     $(this).closest('.row').find('.col-md-6:first').remove(); // Remove the English question
//     $(this).closest('.row').find('.col-md-4:first').remove(); // Remove the English question description
//     $(this).closest('.row').find('.col-md-2:first').remove(); // Remove the remove button column
// });

// $(document).on('click', '#remove_ar', function(e) {
//     e.preventDefault();
//     $(this).closest('.row').find('.col-md-6:last').remove(); // Remove the Arabic question
//     $(this).closest('.row').find('.col-md-4:last').remove(); // Remove the Arabic question description
//     $(this).closest('.row').find('.col-md-2:last').remove(); // Remove the remove button column
// });
//  $(document).on('click','#remove',function(e){
//       e.preventDefault();
      
//       let row_item=$(this).parent().parent().parent();
// //alert(row_item)
// if ($(this).closest(row_item).siblings().length > 0) {
//             $(this).closest(row_item).remove();
//           //  calc_total();
//         }   
//     });


//     $(document).on('click','#remove',function(e){
//         e.preventDefault();
//         $(this).closest('.row').remove();
//     });
// </script>

<script>
    $(document).ready(function() {
        $('#add_button').click(function(e) {
            e.preventDefault();
            $("#addQuestion .row:last-child .submit").hide();
            $("#addQuestion").append(`
            <div class="row question-container">
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">{{ __('Question (English)') }}</label>
                                    <input type="text" name="q1[]" class="form-control" id="inputtitle" placeholder="" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">{{ __('Description Question (English)') }}</label>
                                    <textarea type="text" class="form-control" id="inputName5" rows="3" name="qesc1[]" required></textarea>
                                </div>
                               
                                <div class="col-md-6">
                                  <label for="inputState" class="form-label">{{ __('Question (Arabic)') }}</label>
                                  <input type="text" name="question_ar[]" class="form-control" style="direction:rtl;"id="inputtitle" placeholder="" required>
                              </div>
                              <div class="col-md-4">
                                  <label for="inputState" class="form-label">{{ __('Description Question (Arabic)') }}</label>
                                  <textarea type="text" class="form-control" id="inputName5" rows="3" style="direction:rtl;" name="question_description_ar[]" required></textarea>
                              </div>
                              <div class="col-3 text-left">     
                    <button type="button" class="btn btn-danger btn-circle remove" id="remove">{{ __('Remove') }}</button> <button type="submit" class="btn btn-primary submit">{{ __('Submit') }}</button>
       
        <!-- <button type="reset" class="btn btn-secondary">{{ __('Reset') }}</button> -->
    </div>
                          </div>
        `);
            // Show the submit button
           
        });
        
        $(document).on('click', '#remove', function(e) {
            e.preventDefault();
            $(this).closest('.row').remove();
            $("#addQuestion .row:last-child .submit").show();
        });
    });
</script>
@include('Admin.include.footer')
@include('Admin.include.script')

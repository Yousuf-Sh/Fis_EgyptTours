  
<!-- Vendor JS Files -->

  <script src="{{asset('Backend/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
  <script src="{{asset('Backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  

  <script src="{{asset('Backend/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('Backend/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('Backend/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('Backend/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('Backend/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('Backend/vendor/php-email-form/validate.js')}}"></script>

 <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script> 


  
 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.bootstrap5.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.js"></script>

<!-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> -->
<!-- <script src="{{asset('Backend/js/ckeditor.js')}}" ></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.3.2/ckeditor.js"></script>
<script>
	$(document).ready(function() {
		// Set a timeout to hide the success message after 3 seconds (3000 ms)
		setTimeout(function() {
			$("#success-message").fadeOut("slow", function() {
				$(this).remove(); // Remove the element from the DOM after fading out
			});
		}, 2500); // 3000 ms = 3 seconds
	});
</script>
<!-- <script type="text/javascript">
    $(document).ready(function () {
        CKEDITOR.replace('.ckeditor', {
            enterMode: CKEDITOR.ENTER_BR, // Sets Enter to insert <br>
            shiftEnterMode: CKEDITOR.ENTER_BR, // Sets Shift+Enter to insert <br>
            allowedContent: true, // Disable content filtering to prevent unwanted tags
            autoParagraph: false, // Disable automatic wrapping in <p>
            forcePasteAsPlainText: true, // Optional: Paste content as plain text
        });
    });
</script> -->

<script type="text/javascript">
    $(document).ready(function () {
      CKEDITOR.replace('editor1', {
        enterMode: CKEDITOR.ENTER_BR, // Use <br> instead of <p>
        shiftEnterMode: CKEDITOR.ENTER_BR, // Use <br> for Shift+Enter
        autoParagraph: false, // Prevent automatic <p> wrapping
        allowedContent: true, // Allow unrestricted HTML content
        extraAllowedContent: '*[*]', // Ensure all content passes through
        on: {
            instanceReady: function (evt) {
            // Ensure existing content is not wrapped in <p>
            this.dataProcessor.writer.setRules('*', {
                indent: false,
                breakBeforeOpen: false,
                breakAfterOpen: false,
                breakBeforeClose: false,
                breakAfterClose: false
            });
          }
        }
      });
    });
</script>

  
  <script>

    jQuery(document).ready(function ($) {
      $('#example').DataTable({
      });
    });
  </script>

  <script>
    $(document).ready(function(){
      console.log("aaaa");
        $("i.toggle-sidebar-btn").click(function(){
            $("body").toggleClass("toggle-sidebar");
        });
    });
  </script>

 
</body>

</html>
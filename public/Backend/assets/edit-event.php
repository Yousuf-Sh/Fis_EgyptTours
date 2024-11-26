<?php include'includes/head.php' ?>
<?php include'includes/header.php' ?>
<?php include'includes/sidebar.php' ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Event</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Event</a></li>
          <li class="breadcrumb-item active">Edit Event</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section addEvent">
        <div class="row">
	        <div class="col-lg-12">
	        	<div class="card">
	        		<div class="card-body">
	        			<h5 class="card-title">Edit Event</h5>
	        			<div class="row">
	        				<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label>Start Date</label>
	        						<input type="text" name="" class="form-control">
	        					</div>
	        				</div>
	        				<div class="col-lg-4">
	        					<div class="mb-3">
	        						<label>End Date</label>
	        						<input type="text" name="" class="form-control">
	        					</div>
	        				</div>
	        				<div class="col-lg-4">
		        				<div class="mb-3">
	        						<label>Event Category</label>
	        						<select class="form-select">
	        							<option value="0">Select Category</option>
	        							<option value="1">1</option>
	        						</select>
	        					</div>
        					</div>
        					<div class="col-lg-4">
		        				<div class="mb-3">
	        						<label>Event Location</label>
	        						<select class="form-select">
	        							<option value="0">Select Location</option>
	        							<option value="1">1</option>
	        						</select>
	        					</div>
        					</div>
        					<div class="col-lg-4">
		        				<div class="mb-3">
	        						<label>Event City</label>
	        						<input type="text" name="" class="form-control">
	        					</div>
        					</div>
	        			</div>
	        			<div class="row">
	        				<div class="col-lg-12">
	        					<div class="d-flex justify-content-end align-items-end">
			        				<a href="#" class="btn btn-secondary m-1">Clear</a>
			        				<a href="#" class="btn btn-primary m-1">Submit</a>
			        				<a href="#" class="btn btn-secondary m-1">Cancel</a>
			        			</div>
		        			</div>

	        			</div>
	        		</div>
	        	</div>
	    	</div>
    	</div>
    </section>
</main>

<?php include'includes/footer.php' ?>
<?php include 'base.php' ?>

<?php startblock('content') ?>
<div class="container">
	<div class="row col-lg-12">
		<h1>Add Kid</h1>
		<hr>
		<form action="workers/add_kid_to_db.php" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="InputName">Name</label>
		    <input type="text" class="form-control" id="InputName" name="InputName" placeholder="Name">
		  </div>
		  <div class="form-group">
		    <label for="InputAge">Age</label>
		    <input type="number" class="form-control" min="1" max="50" value="1" id="InputAge" name="InputAge" placeholder="Age">
		  </div>
		  <div class="form-group">
		    <label for="InputDescription">Description</label>
		    <textarea id="InputDescription" class="form-control" rows="3"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="InputCountry">Country</label>
		    <input type="text" class="form-control" id="InputCountry" name="InputCountry" placeholder="Country">
		  </div>
		  <div class="form-group">
		    <label for="fileToUpload">Picture</label>
		    <input type="file" id="fileToUpload" name="fileToUpload">
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>

	</div>
</div>

<?php endblock() ?>


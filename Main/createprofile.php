<?php

//onload, you need previous profile data
// set var as an empty array
// check if previous data, sql = select * from biodata where userid = sessionuserdid
// set var to sql data if true 

// to update image
// set form enctype to multipart
// acccess file using $_FILE['']
// check if file is empty, if empty($_FILE['']) and if file is not in folder, echo no file in folder
// but if empty file, and file in folder, ignore
// but if file is not empty, and file in folder, update with new file
// rename file as profile id (id autoincrement can be used)
// read up how to save uploaded files

// create a new biodata tbl
// using session var id, sql = select userid from biodatatbl where userid = sessionuserid
//if yes, run sql update, sql = update biodata set fullname = postdata where userid = sessionuserid
// if no, run sql insert, sql = insert all data including userid as sessionuserid

include "header.php";
include_once "../Includes/dbh.inc.php";



?>

<form action="../Includes/createupdates.inc.php" method="post" enctype="multipart/form-data">

	<section id="hero" class="hero d-flex align-items-center">
		<div class="container">
			<div class="main-body">
				<div class="row">
					<div class="col-lg-4">
						<div class="card">
							<div class="card-body">
								<div class="d-flex flex-column align-items-center text-center">
									<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
									<div class="mt-3">
										<h4>John Doe</h4>
										<p class="text-primary mb-1" >Full Stack Developer</p>
										<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
										<p class="text-muted font-size-sm">Email</p>					
									</div>
								</div>
							</div>
						</div>
					</div>
					<form action="../Includes/createupdates.inc.php" method="POST" enctype="multipart/form-data">
						<div class="col-lg-8">
						<div class="card">
							<div class="card-body">
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">First Name</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" name="fname" class="form-control" placeholder="First name" required>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Last Name</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Description</h6>
									</div>
									<div class="col-sm-9 text-secondary">
									<textarea class="form-control" name="description" rows="3" required></textarea>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Phone</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" name="phone" class="form-control" placeholder="(239) 816-9029" required>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Address</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" name="address" class="form-control" placeholder="Home address" required>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Github</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" name="github" class="form-control" placeholder="github.com">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Twitter</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" name="twitter" class="form-control" placeholder="twitter.com">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0"></h6>Facebook
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" name="facebook" class="form-control" placeholder="facebook.com">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0"></h6>profile image
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="file" name="userimage" class="form-control" >
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3"></div>
									<div class="col-sm-9 text-secondary">
										<input type="submit" name="insert" class="btn btn-primary" value="CREATE PROFILE">
									</div>
								</div>
							</div>
						</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</section>
</form>



<?php
include "footer.php";
?>
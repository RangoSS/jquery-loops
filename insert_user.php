
<link rel="stylesheet" type="text/css" href="css/formsStyles.css">

<div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block btn-sm">Register New User</button></div>


<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Register</h3>
		</div>
		<div class="modal-body">
			
            <!-- content goes here -->
			<form method="post">
				<div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first name">
              </div>
              <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last name">
              </div>
              <div class="form-group">
                <label for="cellphone">cellphone</label>
                <input type="text" class="form-control" id="cellphone" name="cellphone" placeholder="cellphone">
              </div>
              <div class="form-group">
                <label for="job">Job</label>
                <input type="text" class="form-control" id="job" name="job" placeholder="job">
              </div>
              <div class="form-group">
                <label for="email">Email address</label><span class="myemail" style="color: red;visibility: hidden;">Correct your email</span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              
              <button type="button" id="checkValidate" class="btn btn-success btn-block btn-sm" onclick="validateAfter();">Submit</button>
            </form>

		</div>
		<div class="modal-footer">
			<div class="btn-group btn-group-justified" role="group" aria-label="group button">
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
				</div>
				<div class="btn-group btn-delete hidden" role="group">
					<button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
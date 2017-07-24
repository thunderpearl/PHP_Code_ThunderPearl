

<?php include('public_header.php'); ?>

<div class="container">  <!-- container class of bootstrap -->

<!-- We have removed the opening form tag else we would have to give the url in "action"-->

	<!-- This below code is also opening a form hence works as open form tag -->

	<!-- this below "form_open" will act as opening form tag with base url,
	 where we will pass controller and its method to be called -->
    <!-- In config.php we must have base_url set to codeigniter's path using local host, that's it -->
	<?php echo form_open('login/admin_login',['class'=>'form-horizontal']); ?>
    <!-- form_open will take the complete url automatically where it is present --> <!-- Here, above we are passing the controller and method inside
	the form_open -->
	<!-- So, when submit will be pressed the data will be sent to above controller and method. -->

	<!-- The opening form tag was using form-horizontal class, so we gave it above as well -->
  <fieldset>
    <legend>Admin Login</legend>

        <!-- This below code will be executed when we will have flash data and that will
		 be there when username or password entered will be wrong. -->
    <?php if( $error = $this->session->flashdata('login_failed')): ?> <!-- $error will get the
		second parameter of 'login_failed' flashdata  -->

    	<div class="row">
    		<div class="col-lg-6">
    			<div class="alert alert-dismissible alert-danger">     <!-- This is for having the red error box  -->
    				<?php echo $error; ?>  <!-- This error message will
						be that second parameter passed while setting the "flash_data" in login.php -->

    			</div>
    		</div>
    	</div>

    <?php endif ; ?>

    <div class="row">
    	<div class="col-lg-6"> <!-- This will take 6 rows -->
    		<div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      			<div class="col-lg-10">

			        <!-- This below code will also give same result as line <input type="text" class = "form-comtrol.........."> -->
			        <!-- Just check the source code to confirm -->
			        <?php echo form_input(['name'=>'username', 'class'=>'form-control', 'placeholder'=>'Username', 'value'=> set_value('username')]); ?>
			        <!-- This set_value('username') will keep the right format value entered in the field -->
                </div>
    		</div>
    	</div>

    	<div class="col-lg-6">  <!-- This will take 6 rows --> <!-- Combining both 6 rows will make is 12 rows i.e. our standard for division of page into the 12 columns -->
    		<?php echo form_error('username',"<p class='text-danger'>","</p>"); ?>  <!-- This is to give some color to the error message -->
    	</div>
    </div>



    <div class="row">         <!-- Bootstrap classes used here -->
    	<div class="col-lg-6">
    		<div class="form-group">
      			<label for="inputEmail" class="col-lg-2 control-label">Password</label>
      			<div class="col-lg-10">
        			<?php echo form_password(['name'=>'password', 'class'=>'form-control', 'placeholder'=>'Password' ]); ?>
      			</div>
    		</div>
    	</div>

    	<div class="col-lg-6">
    		<?php echo form_error('password',"<p class='text-danger'>","</p>"); ?>
    	</div>

    </div>




    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">

        <!--<button type="reset" class="btn btn-default">Cancel</button>-->
        <?php echo form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-default']); ?>

        <!--<button type="submit" class="btn btn-primary">Submit</button>-->
        <?php echo form_submit(['name'=>'submit', 'value'=>'Login', 'class'=>'btn btn-primary']); ?>
      </div>
    </div>
  </fieldset>
</form>
</div>

<!--<?php // echo validation_errors(); ?>-->  <!-- This error will be shown when there is some error in username and password  -->

<?php include('public_footer.php'); ?>




<?php include_once('admin_header.php'); ?>
	
<div class="container">
	<?php echo form_open("admin/update_article/{$article->id}",['class'=>'form-horizontal']); ?> <!-- form_open will take the complete url automatically where it is present --> <!-- Here, above we are passing the controller and method inside the form_open -->
	<!-- So, when submit will be pressed the above controller and method will be called -->

	<!-- The opening form tag was using form-horizontal class, so we gave it above as well -->

	<!-- Below one parameter is key and other is value -->
	<!-- Received value from userdata('user_id') will be set to 'user_id' -->

	<fieldset>
		<legend>Edit Article</legend>

		<div class="row">
			<div class="col-lg-6"> <!-- This will take 6 rows -->
				<div class="form-group">
					<label for="inputEmail" class="col-lg-4 control-label">Article Title</label>
					<div class="col-lg-8">
						
						<!-- This below code will also give same result as line <input type="text" class = "form-comtrol.........."> -->
						<!-- Just check the source code to confirm -->

	<!--when setting the value we are giving the second parameter which is default value and in this case it will pick up
	 the previous value as it is used for editing the article-->					
	<?php echo form_input(['name'=>'title', 'class'=>'form-control', 'placeholder'=>'Article Title', 'value'=>set_value('title',$article->title)]); ?>
						<!-- This set_value('username') will keep the right format value entered in the field -->
					</div>
				</div>
			</div>

			<div class="col-lg-6">  <!-- This will take 6 rows --> <!-- Combining both 6 rows will make is 12 rows i.e. our standard for division of page into the 12 columns -->
				<?php echo form_error('title'); ?>  <!-- This is to give some color to the error message -->
			</div>
		</div>



		<div class="row">         <!-- Bootstrap classes used here -->
			<div class="col-lg-6">  
				<div class="form-group">
					<label for="inputEmail" class="col-lg-4 control-label">Article Body</label>
					<div class="col-lg-8">
		<?php echo form_textarea(['name'=>'body', 'class'=>'form-control', 'placeholder'=>'Article Body', 'value'=>set_value('body',$article->body)]);?>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<?php echo form_error('body'); ?>
			</div>	

		</div>




		<div class="form-group">
			<div class="col-lg-10 col-lg-offset-2"> 

				<!--<button type="reset" class="btn btn-default">Cancel</button>-->
				<?php echo form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-default']); ?> 

				<!--<button type="submit" class="btn btn-primary">Submit</button>-->
				<?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']); ?> 
			</div>
		</div>
	</fieldset>
</form>

</div>

<?php include_once('admin_footer.php'); ?>
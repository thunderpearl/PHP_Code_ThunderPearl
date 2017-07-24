

<?php include("question_header.php"); ?>

<div class="container">
	<h3>Question.1</h3>
	<p class="text-info"><strong>Who is the richest man of the world in year 2016?</strong></p>
	<?php echo form_open('questoin_section1/answers', ['class'=>'form-horizontal']); ?>

	<fieldset>

		<div class="row">
			<div class="col-lg-3">
			<?php echo form_radio(['name'=>'radio','value'=>'Bill Gates']); ?>   <!-- If we will give different name then it will become different field not an option.  -->
				<p>Bill Gates</p>
			</div>


			<div class="col-lg-3">
				<?php echo form_radio(['name'=>'radio','value'=>'Carlos Slim']); ?>
				<p>Carlos Slim</p>
			</div>

			<div class="col-lg-3">
				<?php echo form_radio(['name'=>'radio','value'=>'Larry Elison']); ?>
				<p>Larry Elison</p>
			</div>

			<div class="col-lg-3">
				<?php echo form_radio(['name'=>'radio','value'=>'Mark Zuckerberg']); ?>
				<p>Mark Zuckerberg</p>
			</div>

		</div>


		<div class="form-group">
			<div class="col-lg-10 col-lg-offset-10"> 

				<!--<button type="reset" class="btn btn-default">Cancel</button>-->
				<?php echo form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-default']); ?> 

				<!--<button type="submit" class="btn btn-primary">Submit</button>-->
				<?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']); ?> 
			</div>
		</div>

	</fieldset>


	<?php echo form_close(); ?>
</div>

<?php include("question_footer.php") ?>


<?php include ('admin_header.php'); ?>
	<div class="container">

		<div class="row">
			<div class="col-lg-6 col-lg-offset-6">
				<?php echo anchor('admin/store_article', 'Add Article', ['class'=>'btn btn-lg btn-primary pull-right']); ?>
				<!-- This anchor's 1st parameter is controller and it's method which we want to call, 2nd is the name on button or link & 3rd is class for stylingss -->
			</div>
		</div>

		<?php if( $feedback = $this->session->flashdata('feedback')): // This $feedback will get the message passed as 2nd parameter in admin controller and this is hte way of getting the flash data.
					$feedback_class=$this->session->flashdata('feedback_class');
		?>

			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<div class="alert alert-dismissible <?php echo $feedback_class ;?>">     <!-- This is for having the red error box  -->
						<?php echo $feedback; ?>

					</div>
				</div>
			</div>

		<?php endif ; ?>

		<table class="table table-striped">
			<thead>
				<tr>
					<th>S. No.</th>
					<th>Title</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>

				<?php if(count($articles) ):

					$count = $this->uri->segment(3, 0); // second parameter is set 0 bcoz at first page we wont be having 3rd segment of uri so it can returm false that's why we gave the default value i.e. 0.
					 foreach($articles as $article): ?>    <!-- $article have came from "admin/dashboard" here hence we need to pass "id"  for the working of "EDIT" Button -->
						<tr>
							<td><?php echo ++$count ;?></td>
							<td>
								<?php echo $article->title ;?> <!--From "articlesmodel" we will recieve the articles in $articles in "admin" controller -->
								<!--Those $articles will be passed in view and stored in 'articles' -->
								<!--Those 'articles' will be recieved in dashboard in form of $articles which we will populate with foreach.-->
							</td>

							<td>
								<div class="row">
									<div class="col-lg-2">
										<!-- below we have used curly brackets though it can work withput that also -->
										<?php echo anchor("admin/edit_article/{$article->id}",'Edit',['class'=>'btn btn-primary']); ?>
										<!--<a href="" class="btn btn-primary">EDIT</a>--> <!--This we took from boots watch-->
									</div>

									<div class="col-lg-2">
										<?=
										form_open('admin/delete_article'),
										form_hidden('article_id', $article->id),
										form_submit(['name'=>'submit', 'value'=>'Delete', 'class'=>'btn btn-danger']),
										form_close();
										?>
									</div>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>

				<?php else: ?>
					<tr>
						<td colspan="3">
							No Records Found
						</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>

		<?php echo $this->pagination->create_links(); ?>
		<!-- This above code is for the pagination of codeigniter -->

		<!-- Below code was here to get the idea and design for the pagination required. So, now we will use teh pagination by codeigniter as above.-->
		<!--
		<ul class="pagination">
			<li><a href=""><</a></li>
			<li><a href="">1</a></li>
			<li><a href="">2</a></li>
			<li><a href="">3</a></li>
			<li class="active"><a href="">4</a></li>
			<li><a href="">5</a></li>
			<li><a href="">></a></li>
		</ul>
		-->
	</div>

<?php include ('admin_footer.php'); ?>

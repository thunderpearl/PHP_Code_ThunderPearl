

<?php include('public_header.php'); ?>

	<div class="container">
		<h1>All Articles</h1>
		<hr>

		<table class="table">
			<thead>
				<tr>
					<th>Sr. No.</th>
					<th>Article's Title</th>
					<th>Published On</th>
				</tr>
			</thead>

			<tbody>
				<tr>

				<?php if(count($articles)): ?>
				<?php $count = $this->uri->segment(3, 0); ?>
				<?php foreach($articles as $article): ?>	

					<td><?php echo ++$count; ?></td>
					<td><?php echo $article->title; ?></td>
					<td><?php echo date('d M y H:i:s', strtotime($article->created_at)); ?></td>

				</tr>

				<?php endforeach; ?>
				
				<?php else: ?>
					<tr>	
						<td colspan="3">No Records Found</td>
					</tr>	
				<?php endif; ?>	
			</tbody>
		</table>

		<?php echo $this->pagination->create_links(); ?>

	</div>

<?php include('public_footer.php'); ?>



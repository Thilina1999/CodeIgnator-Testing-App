<?php include 'partials/header.php' ?>
<?php include 'partials/navbar.php' ?>

<style>
	.homeBlog {
		padding-top: 70px;
	}
</style>

<div class="container px-20 pt-5 homeBlog">
	<?php if ($this->session->flashdata('msgLogin')) {
		echo "<div class=\"alert alert-success\" role=\"alert\">" . $this->session->flashdata('msgLogin') . "</div>";
	} ?>
	<div class="container mt-3">
		<div class="row">
			<?php
			if ($result) {
				foreach ($result as $key => $value) {
					echo "							<div class=\"col-md-6 pb-3\">
<div class=\"card\">
					<div class=\"card-body\">
						<h5 class=\"card-title\">" . $value['blog_title'] . "</h5>
						<p class=\"card-title\">Publish On: " . $value['created_on'] . "</p>
					</div>
					<div class=\"card-body\">
					<p class=\"card-text\">" . $value['blog_dec'] . "</p>
					</div>
				</div>
				</div>";
				}
			} else {
				echo "<div class=\"text-center\">no record avalable</div>";
			} ?>

		</div>
	</div>

</div>


<?php include 'partials/footer.php' ?>

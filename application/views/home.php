<?php include 'partials/header.php' ?>
<?php include 'partials/navbar.php' ?>

<style>
	.homeBlog {
		padding-top: 70px;
	}

</style>

<div class="container homeBlog">
<?php if ($this->session->flashdata('msgLogin')) {
    echo "<div class=\"alert alert-success\" role=\"alert\">".$this->session->flashdata('msgLogin')."</div>";
} ?>
	<h2>
		Blog Post
	</h2>
</div>


<?php include 'partials/footer.php' ?>
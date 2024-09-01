<?php include 'partials/header.php' ?>
<?php include 'partials/navbar.php' ?>

<?php if ($this->session->flashdata('blogmsg')) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">".$this->session->flashdata('blogmsg')."</div>";
} ?>

<section class="vh-100">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card shadow-lg" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Add a Blog</h2>
                            <form action="<?php echo site_url('addBlog'); ?>" enctype="multipart/form-data" method="post">
                                <div data-mdb-input-init class="form-floating mb-4">
                                    <input type="text" id="title" class="form-control" name="title" />
                                    <label class="form-label" for="title">Titlte</label>
                                    <?php echo form_error('title'); ?>

                                </div>


                                <div data-mdb-input-init class="form-floating mb-4">
                                    <textarea id="description" class="form-control" name="description"
                                    style="height: 200px"></textarea>
                                    <label class="form-label" for="description">Description</label>
                                    <?php echo form_error('description'); ?>

                                </div>


                                <div class="d-flex justify-content-center">
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-success btn-block btn-lg fw-bolder text-white">
                                        <!-- <lable class="text-white">Register</lable> -->
                                        Add a New Blog
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php' ?>
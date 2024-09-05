<?php include 'partials/header.php' ?>

<?php if ($this->session->flashdata('msgLogin')) {
    echo "<div class=\"alert alert-danger\" role=\"alert\">".$this->session->flashdata('msgLogin')."</div>";
} ?>

<?php if ($this->session->flashdata('msgRister')) {
    echo "<div class=\"alert alert-success\" role=\"alert\">".$this->session->flashdata('msgRister')."</div>";
} ?>

<section class="vh-100">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card shadow-lg" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Login</h2>
                            <form action="<?php echo site_url('loginUser'); ?>" enctype="multipart/form-data" method="post">
                                <div data-mdb-input-init class="form-floating mb-4">
                                    <input type="email" id="email" class="form-control"
                                        name="email" />
                                    <label class="form-label" for="email">Email</label>
                                    <?php echo form_error('email'); ?>

                                </div>

                                <div data-mdb-input-init class="form-floating mb-4">
                                    <input type="password" id="password" class="form-control"
                                        name="password" />
                                    <label class="form-label" for="password">Password</label>
                                    <?php echo form_error('password'); ?>

                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-success btn-block btn-lg fw-bolder text-white">
                                        <!-- <lable class="text-white">Register</lable> -->
                                         Login
                                    </button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have did not have an account? <a href="<?php echo base_url('signup'); ?>"
                                        class="fw-bold text-body"><u>Register here</u></a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php' ?>
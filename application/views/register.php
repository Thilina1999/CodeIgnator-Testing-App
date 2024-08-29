<?php include 'partials/header.php' ?>

<hr>
<div class="container px-5">

    <?php if ($this->session->flashdata('msg')) {
        echo "<h3>".$this->session->flashdata('msg')."</h3>";
    } ?>

    <h2>Register</h2>
    <?php echo validation_errors(); ?>
    <form action="<?php echo site_url('Register/RegisterUser'); ?>" enctype="multipart/form-data" method="post">

    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="input" id="name" class="form-control" name="name" />
        <label class="form-label" for="name">Enter the Name</label>
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="input" id="userName" class="form-control" name="userName" />
        <label class="form-label" for="userName">Enter the User Name</label>
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="email" class="form-control" name="email" />
        <label class="form-label" for="email">Email address</label>
    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="password" class="form-control" name="password"/>
        <label class="form-label" for="password">Password</label>
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="passwordAgain" class="form-control" name="passwordAgain" />
        <label class="form-label" for="passwordAgain">Password Again</label>
    </div>

    <!-- Submit button -->
    <button type="submit" data-mdb-button-init data-mdb-ripple-init
        class="btn btn-primary btn-block mb-4">Register</button>
        </form>
</div>

<?php include 'partials/footer.php' ?>
<?php include 'partials/header.php' ?>

<hr>
<div class="container px-5">
    <h2>Register</h2>
    <?php echo form_open('Register/RegisterUser'); ?>
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="input" id="name" class="form-control" />
        <label class="form-label" for="name">Enter the Name</label>
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="form2Example1" class="form-control" />
        <label class="form-label" for="form2Example1">Email address</label>
    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Password</label>
    </div>

    <!-- 2 column grid layout for inline styling -->


    <!-- Submit button -->
    <button type="submit" data-mdb-button-init data-mdb-ripple-init
        class="btn btn-primary btn-block mb-4">Register</button>
    <?php echo form_close() ?>

</div>

<?php include 'partials/footer.php' ?>
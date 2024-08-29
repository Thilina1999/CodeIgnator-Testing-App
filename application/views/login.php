<?php include 'partials/header.php' ?>
<hr>
<div class="container px-5">
    <?php if ($this->session->flashdata('errmsg')) {
        echo "<h3>".$this->session->flashdata('errrmsg')."</h3>";
    } ?>
    <h2>Login</h2>
    <?php echo validation_errors(); ?>
    <?php echo form_open('Login/LoginUser'); ?>
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="email" class="form-control" name="email" />
        <label class="form-label" for="email">Email address</label>
    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="form2Example2" class="form-control" name="password" />
        <label class="form-label" for="form2Example2">Password</label>
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
        <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
        </div>

    </div>

    <!-- Submit button -->
    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign
        in</button>

    <?php echo form_close() ?>
</div>


<?php include 'partials/footer.php' ?>
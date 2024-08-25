<?php include 'partials/header.php' ?>
<hr>
<div class="container px-5">
    <h2>Login</h2>
    <form>
        <!-- Email input -->
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
        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign
            in</button>

    </form>
</div>


<?php include 'partials/footer.php' ?>
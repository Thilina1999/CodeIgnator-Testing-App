<?php include 'partials/header.php' ?>
<?php include 'partials/navbar.php' ?>

<style>
    .homeDashBorad {
        padding-top: 100px;
    }

    html,
    body,
    .intro {
        height: 100%;
    }

    table td,
    table th {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    .card {
        border-radius: .5rem;
    }

    .mask-custom {
        background: rgba(24, 24, 16, .2);
        border-radius: 2em;
        backdrop-filter: blur(25px);
        border: 2px solid rgba(255, 255, 255, 0.05);
        background-clip: padding-box;
        box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
    }
</style>

<section class="intro homeDashBorad">
<?php if ($this->session->flashdata('blogmsg')) {
    echo "<div class=\"alert alert-success\" role=\"alert\">".$this->session->flashdata('blogmsg')."</div>";
} ?>
    <div class="bg-image h-100">
        <div class="mask h-100">
            <div class="container">
                <div>
                    <h1>Dashboard</h1>
                </div>
                <div class="text-md-end text-start pb-3">
                    <a href="<?php echo site_url('/addForm'); ?>">

                        <button type="button" class="btn btn-primary">
                            <i class="bi bi-plus-lg"></i> Add
                        </button>
                    </a>

                </div>

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Update On</th>
                                                <th scope="col">Update</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Monsters</td>
                                                <td>Status</td>
                                                <td>122122</td>
                                                <td>
                                                    <a href="<?php echo site_url('/updateBlog/3'); ?>">
                                                    <button type="button" class="btn btn-danger btn-sm px-3">
                                                        <i class="bi bi-box-arrow-up-right"></i>
                                                    </button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo site_url('/deleteBlog/3'); ?>">
                                                    <button type="button" class="btn btn-danger px-3">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'partials/footer.php' ?>
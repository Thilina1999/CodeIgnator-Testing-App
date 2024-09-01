<nav class="navbar navbar-expand-lg shadow-lg fixed-top bg-light navbar-scroll navbar-light">
    <div class="container">
        <a class="navbar-brand nav-link ms-auto align-items-center mx-2 h3" href="#">Blog Post</a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#!"><i class="fas fa-plus-circle pe-2"></i>Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#!"><i class="fas fa-bell pe-2"></i>Alerts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#!">
                        <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg"
                            class="rounded-circle" style="width: 30px; height: 30px;" alt="Avatar" />
                        <?php if ($this->session->userdata('name')) {
                            echo "<span>".$this->session->userdata('name')."</span>";
                        } ?>
                    </a>
                </li>
                <li class="nav-item ms-3 ">
                    <a class="btn btn-black btn-rounded bg-dark text-white" href="#!">Sign out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
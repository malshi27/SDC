    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0" style="margin-top: -10px; margin-bottom: -10px;">
            <a href="index.html" class="navbar-brand p-0">
               <img src="img/Screenshot__197_-removebg-preview.png" alt="logo" width="200" height="100" >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a>
                <a href="about.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">About</a>
                    <a href="programs.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'programs.php' ? 'active' : '' ?>">Programs</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Program</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div> -->
                    <div class="nav-item dropdown">
    <a href="accreditions.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'accreditions.php' ? 'active' : '' ?>" id="accreditDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Accreditations & Awards
    </a>
    <ul class="dropdown-menu" aria-labelledby="accreditDropdown">
        <li><a class="dropdown-item" href="ISO.php">ISO</a></li>
        <li><a class="dropdown-item" href="SEDA.php">SEDA</a></li>
      
    </ul>
</div>




                    <a href="gallery.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : '' ?>">Gallery</a>
                    <a href="news.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'news.php' ? 'active' : '' ?>">News</a>
                    <a href="contactus.php" class="nav-item nav-link <?= basename($_SERVER['PHP_SELF']) == 'contactus.php' ? 'active' : '' ?>">Contact us</a>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"> <i class="fa fa-search" style="color: #fb913c; margin-left: -200px;"></i></butaton>
                
            </div>
        </nav>

        

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

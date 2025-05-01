<?php include './componets/header.php'; ?>
<?php include './componets/top.php'; ?>
<?php include './componets/menu.php'; ?>
    
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Gallery</h1>
                    <a href="index.php" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="gallery.php" class="h5 text-white">Gallery</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

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

    <div class="gallery-container">
    <div class="gallery-item">
        <img src="img/blog-1.jpg" alt="Image 1">
    </div>
    <div class="gallery-item">
        <img src="img/blog-2.jpg" alt="Image 2">
    </div>
    <div class="gallery-item">
        <img src="img/blog-3.jpg" alt="Image 3">
    </div>
    <div class="gallery-item">
        <img src="img/carousel-1.jpg" alt="Image 4">
    </div>
    <div class="gallery-item">
        <img src="img/carousel-2.jpg" alt="Image 5">
    </div>
    <div class="gallery-item">
        <img src="img/carousel-3.png" alt="Image 6">
    </div>
    <div class="gallery-item">
        <img src="img/carousel-1.jpg" alt="Image 7">
    </div>
    <div class="gallery-item">
        <img src="img/blog-3.jpg" alt="Image 8">
    </div>
</div>

<?php include './componets/footer.php'; ?>
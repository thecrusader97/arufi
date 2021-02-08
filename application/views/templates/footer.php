<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<!-- Footer -->
<footer class="page-footer font-small bg-dark text-light pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid column -->
        <div class="text-center">

            <!-- Content -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Arufi.Collection</h5>
            <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                consectetur
                adipisicing elit.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

    </div>
    <!-- Footer Links -->

    <hr>

    <!-- Call to action -->
    <?php if ($this->session->userdata('username')) { ?>

    <ul class="list-unstyled list-inline text-center py-2 ketengah">
        <li class="list-inline-item">
            <?= anchor('auth/logout', '<div class="btn btn-danger text-center">Logout</div>') ?>
        </li>
        <?php } else { ?>
        <li class="list-inline-item">
            <?= anchor('auth/login', '<div class="btn btn-primary text-center">Login</div>') ?>
        </li>
        <?php } ?>
    </ul>
    <!-- Call to action -->

    <hr>

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
                <i class="fab fa-facebook-f"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
                <i class="fab fa-twitter"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
                <i class="fab fa-google-plus-g"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
                <i class="fab fa-linkedin-in"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
                <i class="fab fa-dribbble"> </i>
            </a>
        </li>
    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">2019
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url() ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url() ?>assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
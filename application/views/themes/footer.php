<footer>
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="widget">
                    <h5 class="widgetheading">Kategori</h5>
                    <?php foreach ($kategori as $row) : ?>
                        <ul class="link-list">
                            <li><a href="#"><?= $row['category']; ?></a></li>
                        </ul>
                    <?php endforeach; ?>

                </div>
            </div>
            <div class="span4">
                <div class="widget">
                    <h5 class="widgetheading">Alamat</h5>
                    <address>
                        <strong>Kantor Desa Pesona Manud Jaya</strong><br>
                        Jl. Danau Toba Pesona Manud Jaya, Desa Pesona Manud Jaya,<br>
                        Kabupaten Samosir, Sumatera Utara. Kode Pos 22359. Indonesia
                    </address>
                    <p>
                        <i class="icon-phone"></i> 0852-1111-2222 <br>
                        <i class="icon-envelope-alt"></i> pesonamanudjaya@gmail.com
                    </p>
                </div>
            </div>
            <div class="span4">
                <div class="widget">
                    <h5 class="widgetheading">Testimonial</h5>
                    <p>
                        Silahkan posting testimoni Anda disini
                    </p>
                    <form class="subscribe">
                        <div class="input-append">
                            <input class="span2" id="appendedInputButton" type="text" placeholder="Testimoni...">
                            <button class="btn btn-theme" type="submit" onclick="funcSuccess()">Posting</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <div class="copyright">
                        <p><span>&copy; Copyright <?= date('Y'); ?>. Desa Pesona Manud Jaya</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>
<!-- Fancybox CSS library -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fancybox/dist/jquery.fancybox.min.css'); ?>">

<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>
    function funcSuccess() {
        alert("Terima kasih,Kami akan menghubungi secepatnya.");
    }
</script>
<script src="<?php echo base_url('public/'); ?>js/jquery.js"></script>
<script src="<?php echo base_url('public/'); ?>js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url('public/'); ?>js/bootstrap.js"></script>

<script src="<?php echo base_url('public/'); ?>js/modernizr.custom.js"></script>
<script src="<?php echo base_url('public/'); ?>js/toucheffects.js"></script>
<script src="<?php echo base_url('public/'); ?>js/google-code-prettify/prettify.js"></script>
<script src="<?php echo base_url('public/'); ?>js/jquery.bxslider.min.js"></script>
<script src="<?php echo base_url('public/'); ?>js/camera/camera.js"></script>
<script src="<?php echo base_url('public/'); ?>js/camera/setting.js"></script>

<script src="<?php echo base_url('public/'); ?>js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url('public/'); ?>js/portfolio/jquery.quicksand.js"></script>
<script src="<?php echo base_url('public/'); ?>js/portfolio/setting.js"></script>

<script src="<?php echo base_url('public/'); ?>js/jquery.flexslider.js"></script>
<script src="<?php echo base_url('public/'); ?>js/animate.js"></script>
<script src="<?php echo base_url('public/'); ?>js/inview.js"></script>

<!-- Template Custom JavaScript File -->
<script src="<?php echo base_url('public/'); ?>js/custom.js"></script>

<!-- DataTable js -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

<!-- Fancybox JS library -->
<script language="JavaScript" type="text/javascript" src="<?php echo base_url('assets/fancybox/dist/jquery.fancybox.min.js'); ?>"></script>

<!-- Initialize fancybox -->
<script>
    $("[data-fancybox]").fancybox();
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

</body>

</html>
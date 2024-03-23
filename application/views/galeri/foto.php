<section id="content">
    <div class="container">
        <div class="row">

            <div class="gallery">
                <?php if (!empty($gallery)) { ?>
                    <?php
                    foreach ($gallery as $row) {
                        $uploadDir = base_url() . 'upload_file/images/';
                        $imageURL = $uploadDir . $row["galery"];
                    ?>
                        <div class="span8">
                            <a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["title"]; ?>">
                                <img src="<?php echo $imageURL; ?>" alt="" />
                                <p><?php echo $row["title"]; ?></p>
                            </a>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <div class="span8">
                        <div class="alert alert-danger">No image(s) found...</div>
                    </div>
                <?php } ?>
            </div>

            <!-- Fancybox CSS library -->
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fancybox/dist/jquery.fancybox.min.css'); ?>">

            <!-- Fancybox JS library -->
            <script src="<?php echo base_url('assets/fancybox/dist/jquery.fancybox.min'); ?>"></script>

            <!-- Initialize fancybox -->
            <script>
                $("[data-fancybox]").fancybox();
            </script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>SMK Pasunda Subang</title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/images/logo/pasundan.png">
    <link rel='stylesheet' href='<?php echo base_url(); ?>public/stylesheets/rt-plugins.css' />
    <link rel='stylesheet' href='<?php echo base_url(); ?>public/stylesheets/app.css' />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />

    <meta property="og:title" content="Website SMK Pasundan Subang" />
    <meta property="og:description" content="Website Profile SMK Pasundan Subang" />
    <meta property="og:url" content="" />

</head>

<body class=" font-gilroy font-medium text-gray text-lg leading-[27px]">
    <main id="swup" class="transition-fade">
        <!-- call header -->
        <?php $this->load->view('layouts/header'); ?>

        <!-- Begin Page Content -->
        <?php echo $contents; ?>
        <!-- /.container-fluid -->

        <!-- call footer -->
        <?php $this->load->view('layouts/footer'); ?>

    </main>
    <div class="rt-mobile-menu-overlay"></div>
    <script defer src="https://www.google.com/recaptcha/enterprise.js?render=explicit"></script>
    <script defer src="<?php echo base_url(); ?>public/javascripts/popper.min.js"></script>
    <script defer src="<?php echo base_url(); ?>public/javascripts/jquery-3.6.0.min.js"></script>
    <script defer src="<?php echo base_url(); ?>public/javascripts/rt-plugins.js"></script>
    <script defer src="https://unpkg.com/phosphor-icons"></script>
    <script defer src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    <script defer src="<?php echo base_url(); ?>public/javascripts/nanobar.js"></script>
    <script defer src="<?php echo base_url(); ?>public/javascripts/app.js"></script>
    <script defer src="<?php echo base_url(); ?>public/javascripts/vue.global.js"></script>
    <script defer src="<?php echo base_url(); ?>public/javascripts/axios.min.js"></script>
    <script defer src="<?php echo base_url(); ?>public/javascripts/scripts.js"></script>
</body>

</html>
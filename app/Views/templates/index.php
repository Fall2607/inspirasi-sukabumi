<!DOCTYPE html>
<html lang="en">
<?= $this->include('templates/header'); ?>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <!-- ======= Sidebar ======= -->
    <?= $this->include('templates/sidebar'); ?>
    <main class="main-content position-relative border-radius-lg ">
        <?= $this->include('templates/navbar'); ?>
        <!-- Content -->
        <?= $this->renderSection('page-content'); ?>
    </main>
    <?= $this->include('templates/bottom'); ?>
</body>

</html>
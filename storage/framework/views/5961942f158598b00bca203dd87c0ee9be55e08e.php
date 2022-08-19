<?php $__env->startSection('title','Сайт-визитка'); ?>
<?php $__env->startSection('innerContent'); ?>
    <?php
    if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
        echo 'We don\'t have mysqli!!!';
    } else {
        echo 'Phew we have it!';
    }
        ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.portfolioDetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/nasavasa.ru/resources/views/pages/test.blade.php ENDPATH**/ ?>
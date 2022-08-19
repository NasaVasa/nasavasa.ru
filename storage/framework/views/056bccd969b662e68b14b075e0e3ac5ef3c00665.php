<?php $__env->startSection("content"); ?>
    <section class="ban_area">
        <div class="ban_inner d-flex align-items-center">
            <div class="container">
                <div class="ban_content text-right">
                    <h1 class="title-content"><?php echo $__env->yieldContent('title'); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <?php echo $__env->yieldContent("innerContent"); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/nasavasa.ru/resources/views/layouts/inner.blade.php ENDPATH**/ ?>
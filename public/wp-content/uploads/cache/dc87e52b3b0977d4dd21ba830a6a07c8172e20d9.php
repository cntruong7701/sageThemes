<section class="wrap mt-60">
    <?php $__currentLoopData = $data->module['container']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex flex-col text-center lg:w-3/4 md:w-full mx-auto mb-10">
            <?php echo $item->content; ?>

        </div>
        <div class="carousel3">
            <?php $__currentLoopData = $item->slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="inline-block">
                    <img src="<?php echo $item_logo->logo->url; ?>" class="xl:pl-0 md:pl-50" alt="<?php echo $item_logo->logo->alt; ?>">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php
// var_dump($data->module['container']);
?>

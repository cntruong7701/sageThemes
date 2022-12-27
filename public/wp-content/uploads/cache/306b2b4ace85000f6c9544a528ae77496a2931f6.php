<section class="wrap mod-threecol">
    <div class="cus-container flex flex-col items-center justify-center mx-auto max-w-552">
        <div class="flex flex-col items-center text-center w-full mb-16">
            <?php echo $data->module['content']; ?>

        </div>
        <div class="xl:flex items-start min-h-240">
            <?php $__currentLoopData = $data->module['column']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="info-col self">
                    <div>
                        <img class="info-icon w-40 h-40" src="<?php echo e($item->icon->url); ?>" alt="<?php echo e($item->icon->alt); ?>">
                    </div>
                    <?php echo $item->content; ?>

                    <div class="mt-auto">
                        <a href="<?php echo e($item->link->url); ?>" class="btn-outline-brown">
                            <span class="text-base font-bold"><?php echo e($item->link->title); ?></span>
                            <span class="icomoon icon-chevron-right w-3"></span>
                        </a>
                    </div>
                </div>
                <?php if($item->midicon): ?>
                    <div class="rotate">
                        <img class="xl:my-25 md:my-83 md:mx-auto" src="<?php echo e($item->midicon->url); ?>"
                            alt="<?php echo e($item->midicon->alt); ?>">

                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php
// var_dump($data->module['column']);
?>

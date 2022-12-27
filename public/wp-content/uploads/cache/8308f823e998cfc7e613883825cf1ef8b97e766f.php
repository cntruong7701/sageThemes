<section class="mod-banner cus-container xl:mb-0 md:mb-70 relative items-center min-h-429">
    <div class="bg-img w-full  ">
        <img class="w-full md:h-385 lazy" src="<?php echo App::getLogo()['load']; ?>" data-src="<?php echo e($data->module['background']->url); ?>" alt="<?php echo $data->module['background']->alt; ?>">
    </div>
    <div class="flex inset xl:flex-row xl:text-left md:flex-col md:text-center">
        <div class=" flex flex-col text-white max-w-250 xl:mx-0 xl:items-start md:mx-auto md:items-center">
            <?php $__currentLoopData = $data->module['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $item->description; ?>

                <a href="<?php echo e($item->link->url); ?>" class="btn_aboutUs btn-brown mt-16 w-121 h-27 hover:text-yellow">
                    <span><?php echo e($item->link->title); ?></span>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="3xl:ml-113 2xl:ml-35 xl:w-full xl:mt-0 md:w-4/5 md:mx-auto md:mt-35">
            <img src="<?php echo App::getLogo()['load']; ?>" data-src="<?php echo e($data->module['image']->url); ?>" class="lazy" alt="<?php echo $data->module['image']->alt; ?>">
        </div>
    </div>
</section>
<?php 
// var_dump($data->module['content']);

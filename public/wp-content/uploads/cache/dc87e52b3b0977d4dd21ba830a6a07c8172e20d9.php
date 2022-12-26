<section class="wrap mt-60">
    <div class="flex flex-col text-center lg:w-3/4 md:w-full mx-auto">
        <?php echo $data->module['content']; ?>

    </div>
    <div class="carousel3">
        <?php $__currentLoopData = $data->module['slider']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="inline-block">
                <img src="<?php echo $item->logo->url; ?>" class="xl:pl-0 md:pl-50" alt="<?php echo $item->logo->alt; ?>">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="inline-block">
            <img src="<?php echo App::getLogo()['advance']; ?>" class="xl:pl-0 md:pl-50" alt="<?php echo App::getLogo()['alt']; ?>">
        </div>
    </div>
</section>
<?php 
// var_dump($data->module['slider']);

<section class="wrap w-full bg-slate-100 mb-56">
    <div class="w-4/5 mx-auto">
        <div class="flex xl:flex-row md:flex-col">
            <div class="xl:w-1/2 2xl:mx-25 xl:my-50 md:w-full md:mb-25">
                <?php echo $data->module['content']; ?>

            </div>
            <div class="carousel2 xl:w-1/2 md:w-full 2xl:mx-25 2xl:my-40 xl:mt-83">
                <?php for($i=1;$i<=3;$i++): ?>
                    <div class="grid-col2">
                        <div class="grid-col2">
                            <?php $__currentLoopData = $data->module['logo']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="">
                                    <img src="<?php echo e($item->image->url); ?>" alt="<?php echo e($item->image->alt); ?>"
                                        class="w-135 2xl:h-60 mb-21 my-21">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<?php
// var_dump($data->module['content']);
// var_dump($data->module['logo']);

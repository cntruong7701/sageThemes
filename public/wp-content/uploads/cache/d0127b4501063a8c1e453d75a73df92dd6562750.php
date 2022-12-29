<section class="cus-container wrap">
    <div class="w-4/5 mx-auto center mb-50">
        <?php $__currentLoopData = $data->module['top']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex flex-col width 3xl:px-40 2xl:px-20 margin-col-top">
                <img src="<?php echo $item->icon->url; ?>" class="w-62 h-74" alt="<?php echo $item->icon->alt; ?>">
                <?php echo $item->des; ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="relative 2xl:w-4/5 xl:w-full 2xl:ml-100">
        <span class="text-lg font-bold text-brown-400 2xl:p-0 xl:p-56 lg:p-33">THE LATEST</span>
        <div class="flex 2xl:flex-row justify-between md:flex-col 2xl:p-0 xl:px-56 lg:px-33">

            <?php $__currentLoopData = $data->module['bottom']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="shadow-2xl 2xl:w-1/2 2xl:m-0 xl:mb-16 lg:mb-17 xl:w-full rounded-b-4xl">
                    <img class="w-full lazy" src="<?php echo App::getLogo()['load']; ?>" data-src="<?php echo $item->image->url; ?>" alt="<?php echo $item->image->alt; ?>">
                    <div class="w-4/5 py-39 mx-auto">
                        <?php echo $item->content; ?>

                        <button class="text-lg font-bold text-brown-400">
                            <span>READ MORE</span>
                            <span class="icomoon icon-chevron-right"></span>
                        </button>
                    </div>
                </div>
                <div class="2xl:w-1/2 md:w-full 2xl:ml-14 2xl:flex 2xl:flex-col 2xl:justify-between">
                    <div class="2xl:w-4/5 xl:w-full px-28 py-15 2xl:mb-11 md:mb-16 shadow-2xl rounded-4xl">
                        <?php echo $item->content; ?>

                        <button class="text-lg font-bold text-brown-400">
                            <span>READ MORE</span>
                            <span class="icomoon icon-chevron-right"></span>
                        </button>
                    </div>
                    <div class="2xl:w-4/5 xl:w-full px-28 py-15 shadow-2xl rounded-4xl">
                        <?php echo $item->content; ?>

                        <button class="text-lg font-bold text-brown-400">
                            <span>READ MORE</span>
                            <span class="icomoon icon-chevron-right"></span>
                        </button>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="absolute top-0 right-0">
            <img src="<?php echo App::getLogo()['load']; ?>" data-src="<?php echo App::getBanner()['Hide']; ?>" alt="<?php echo App::getBanner()['alt']; ?>"
                class="lazy h-200">
        </div>
    </div>
</section>

<?php 
// var_dump($data->module['bottom']);

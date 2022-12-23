<section class="mod-banner cus-container relative items-center mt-t25 min-h-429">
    <div class="bg-img w-full  ">
        <img class="w-full md:h-385" src="<?php echo e($data->module['image1']->url); ?>" alt="<?php echo e($data->module['image1']->alt); ?>">
    </div>
    <div class="flex absolute xl:top-80 xl:right-0 3xl:left-13% 2xl:left-10% xl:left-37 xl:flex-row xl:text-left md:flex-col md:text-center md:top-54">
        <div class=" flex flex-col text-white max-w-250 xl:mx-0 xl:items-start md:mx-auto md:items-center">
            <?php echo $data->module['content']; ?>

            <a href="" class="btn_aboutUs mt-16">ABOUT US</a>
        </div>
        <div class="3xl:ml-113 2xl:ml-35 xl:w-full xl:mt-0 md:w-4/5 md:mx-auto md:mt-35">
            <img src="<?php echo e($data->module['image']->url); ?>" class="" alt="<?php echo e($data->module['image']->alt); ?>">
        </div>
    </div>
</section>
<?php
// var_dump($data);
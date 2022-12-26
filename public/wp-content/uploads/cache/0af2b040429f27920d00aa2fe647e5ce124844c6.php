<section class="w-full wrap mt-50 mb-80">
    <div class="xl:w-5/6 xl:flex md:w-full">
    <div class="xl:w-1/2 md:w-full relative bg-slate-100 2xl:h-392">
        <img src="<?php echo e($data->module['image']->url); ?>" alt="<?php echo e($data->module['image']->alt); ?>" class="3xl:w-11/12 2xl:w-full h-[1000px] xl:absolute top-[-10%] xl:ml-75 shadow-blue-200 mx-auto ">
    </div>
    <div class="xl:w-1/2 md:w-4/5 mod_padding xl:mt-0 md:mt-70 md:mx-auto">
        <?php echo $data->module['content']; ?>

        <button class="w-102 h-27 rounded-13 btn-brown text-base font-bold mt-16">LEARN MORE</button>
    </div>
    </div>
</section>
<?php 
// var_dump($data);
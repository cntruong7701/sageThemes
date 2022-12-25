<section class="mod-banner cus-container xl:mb-0 md:mb-70 relative items-center min-h-429">
    <div class="bg-img w-full  ">
        <img class="w-full md:h-385" src="{{ $data->module['image']->url }}" alt="{!! $data->module['image']->alt !!}">
    </div>
    <div class="flex inset xl:flex-row xl:text-left md:flex-col md:text-center">
        <div class=" flex flex-col text-white max-w-250 xl:mx-0 xl:items-start md:mx-auto md:items-center">
            {!! $data->module['content'] !!}
            <a href="" class="btn_aboutUs mt-16">ABOUT US</a>
        </div>
        <div class="3xl:ml-113 2xl:ml-35 xl:w-full xl:mt-0 md:w-4/5 md:mx-auto md:mt-35">
            <img src="{{ $data->module['image1']->url }}" class="" alt="{!! $data->module['image1']->alt !!}">
        </div>
    </div>
</section>
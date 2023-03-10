<section class="mod-banner cus-container xl:mb-0 md:mb-70 relative items-center min-h-429">
    <div class="bg-img w-full  ">
        <img class="w-full md:h-385 lazy" src="{!! App::getLogo()['load'] !!}" data-src="{{ $data->module['background']->url }}" alt="{!! $data->module['background']->alt !!}">
    </div>
    <div class="flex inset xl:flex-row xl:text-left md:flex-col md:text-center">
        <div class=" flex flex-col text-white max-w-250 xl:mx-0 xl:items-start md:mx-auto md:items-center">
            @foreach ($data->module['content'] as $item)
                {!! $item->description !!}
                <a href="{{$item->link->url}}" class="btn_aboutUs btn-brown mt-16 w-121 h-27 hover:text-yellow">
                    <span>{{$item->link->title}}</span>
                </a>
            @endforeach

        </div>
        <div class="3xl:ml-113 2xl:ml-35 xl:w-full xl:mt-0 md:w-4/5 md:mx-auto md:mt-35">
            <img src="{!! App::getLogo()['load'] !!}" data-src="{{ $data->module['image']->url }}" class="lazy" alt="{!! $data->module['image']->alt !!}">
        </div>
    </div>
</section>
<?php 
// var_dump($data->module['content']);

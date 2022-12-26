<section class="wrap mt-60">
    <div class="flex flex-col text-center lg:w-3/4 md:w-full mx-auto">
        {!! $data->module['content'] !!}
    </div>
    <div class="carousel3">
        @foreach ($data->module['slider'] as $item)
            <div class="inline-block">
                <img src="{!! $item->logo->url !!}" class="xl:pl-0 md:pl-50" alt="{!! $item->logo->alt !!}">
            </div>
        @endforeach
        <div class="inline-block">
            <img src="{!! App::getLogo()['advance'] !!}" class="xl:pl-0 md:pl-50" alt="{!! App::getLogo()['alt'] !!}">
        </div>
    </div>
</section>
<?php 
// var_dump($data->module['slider']);

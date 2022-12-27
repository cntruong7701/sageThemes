<section class="wrap mt-60">
    @foreach ($data->module['container'] as $item)
        <div class="flex flex-col text-center lg:w-3/4 md:w-full mx-auto mb-10">
            {!! $item->content !!}
        </div>
        <div class="carousel3">
            @foreach ($item->slider as $item_logo)
                <div class="inline-block">
                    <img src="{!! $item_logo->logo->url !!}" class="xl:pl-0 md:pl-50" alt="{!! $item_logo->logo->alt !!}">
                </div>
            @endforeach
        </div>
    @endforeach
</section>
<?php
// var_dump($data->module['container']);
?>

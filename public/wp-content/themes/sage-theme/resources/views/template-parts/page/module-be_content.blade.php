<section class="wrap mb-76 mt-150">
    <div class="2xl:flex w-4/5 xl:flex-none xl:justify-center mx-auto mt-100">
        <div class="title 2xl:w-2/5 2xl:mr-45 md:w-full lg:mx-auto md:mx-auto">
            <div class="Line-4"></div>
            {!! $data->module['title'] !!}
        </div>
        <div class="info 2xl:w-3/5 md:w-full grid-col lg:flex-none lg:mx-auto">
            @foreach ($data->module['right'] as $item)
                <div>
                    {!! $item->content !!}
                </div>
            @endforeach
        </div>
    </div>
</section>
<?php
//  var_dump($data->module['right']);
?>

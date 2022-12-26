<section class="wrap w-full bg-slate-100 mb-56">
    <div class="w-4/5 mx-auto">
        <div class="flex xl:flex-row md:flex-col">
            <div class="xl:w-1/2 2xl:mx-25 xl:my-50 md:w-full md:mb-25">
                {!! $data->module['content'] !!}
            </div>
            <div class="carousel2 xl:w-1/2 md:w-full 2xl:mx-25 2xl:my-40 xl:mt-83">
                @for($i=1;$i<=3;$i++)
                    <div class="grid-col2">
                        <div class="grid-col2">
                            @foreach ($data->module['logo'] as $item)
                                <div class="">
                                    <img src="{{ $item->image->url }}" alt="{{ $item->image->alt }}"
                                        class="w-135 2xl:h-60 mb-21 my-21">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>

<?php
// var_dump($data->module['content']);
// var_dump($data->module['logo']);

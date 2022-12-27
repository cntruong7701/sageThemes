<section class="wrap w-full bg-slate-100 mb-56">
    <div class="w-4/5 mx-auto">
        <div class="flex xl:flex-row md:flex-col xl:pt-0 md:pt-50">

            @foreach ($data->module['container'] as $item)
                <div class="xl:w-1/2 2xl:mx-25 xl:my-50 md:w-full md:mb-25">
                    {!! $item->content !!}
                </div>
                <div class="carousel2 xl:w-1/2 md:w-full 2xl:mx-25 2xl:my-40 xl:mt-20">
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="grid-col2">
                            <div class="grid-col2">
                                @foreach ($item->logo as $item1)
                                    <div class="">
                                        <img src="{{ $item1->image->url }}" alt="{{ $item1->image->alt }}"
                                            class="w-135 2xl:h-60 mb-21 my-21">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endfor
                </div>
            @endforeach
        </div>
    </div>
</section>

<?php 
// var_dump($data->module['container']);
// var_dump($data->module['logo']);

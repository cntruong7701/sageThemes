<section class="wrap mod-threecol">
    <div class="cus-container flex flex-col items-center justify-center mx-auto max-w-552">
        <div class="flex flex-col items-center text-center w-full mb-16">
            {!! $data->module['content'] !!}
        </div>
        <div class="xl:flex items-start min-h-240">
            @foreach ($data->module['column'] as $item)
                <div class="info-col self">
                    <div>
                        <img class="info-icon w-40 h-40" src="{{ $item->icon->url }}" alt="{{ $item->icon->alt }}">
                    </div>
                    {!! $item->content !!}
                    <div class="mt-auto">
                        <a href="{{ $item->link->url }}" class="hover:text-brown-400">
                            <span class="text-base font-bold">{{ $item->link->title }}</span>
                            <span class="icomoon icon-chevron-right w-3"></span>
                        </a>
                    </div>
                </div>
                @if ($item->midicon)
                    <div class="rotate">
                        <img class="xl:my-25 md:my-83 md:mx-auto" src="{{ $item->midicon->url }}"
                            alt="{{ $item->midicon->alt }}">

                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
<?php
// var_dump($data->module['column']);
?>

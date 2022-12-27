<section class="wrap mb-103">
    <div
        class="max-w-1000 max-h-231 mx-auto relative carousel py-60 xl:pl-56 2xl:pr-115 xl:pr-72 lg:py-55 lg:pr-22 lg:pl-19  w-4/5 shadow-2xl rounded-5xl ">
        @foreach ($data->module['testimonial'] as $item)
            <div class="w-full flex justify-center">
                <div class="quote">
                    <h2>{{ $item->post_content }}</h2>
                    <p>
                        <?php
                        $name = get_field('name', $item->ID);
                        echo esc_html($name); 
                        ?>
                    </p>
                    <p>
                        <?php
                        $pos = get_field('position', $item->ID);
                        echo esc_html($pos); 
                        ?>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section>

<?php 
//  var_dump($data->module['testimonial']);

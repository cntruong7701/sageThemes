<section class="wrap">
    <div class="cus-container">
        <div class="2xl:flex xl:w-4/5 xl:flex-none xl:justify-center mx-auto mt-100">
            <div class="title 2xl:w-2/5 2xl:mr-45 xl:w-full lg:w-3/4 lg:mx-auto md:w-3/4 md:mx-auto">
                <div class="Line-4"></div>
                <?php echo $data->module['title']; ?>

            </div>
            <div class="info 2xl:w-3/5 xl:w-full xl:flex lg:flex-none lg:mx-auto">
                <div class="column1 mr-2.5 xl:w-1/2 md:w-3/4 md:mx-auto">
                    <div class="xl:w-4/5">
                        <?php echo $data->module['content1']; ?>

                    </div>
                    <div class="xl:w-4/5">
                        <?php echo $data->module['content2']; ?>

                    </div>
                </div>
                <div class="column2 xl:w-1/2 md:w-3/4 md:mx-auto">
                    <div class="xl:w-4/5">
                        <?php echo $data->module['content3']; ?>

                    </div>
                    <div class="xl:w-4/5">
                        <?php echo $data->module['content4']; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
// var_dump($data);

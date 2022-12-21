<?php
    $class = 'xl:w-4/5';
?>

<section class="wrap 2xl:flex xl:w-4/5 xl:flex-none xl:justify-center mx-auto mt-100">
    <div class="title 2xl:w-2/5 2xl:mr-[90px] xl:w-full lg:w-3/4 lg:mx-[auto] md:w-3/4 md:mx-[auto]">
        <div class="Line-4"></div>
        <h2>
            <?php echo App::title(); ?>

        </h2>
    </div>
    <div class="info 2xl:w-3/5 xl:w-full xl:flex lg:flex-none lg:mx-[auto]">
        <div class="column1 mr-2.5 xl:w-1/2 md:w-3/4 md:mx-[auto]">
            <?php echo $__env->make('partials/custom/content', [
                'title1' => $data->title1,
                'sub1' => $data->sub1,
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo e(Page::filterContent([
                'title2' => $data->title2,
                'sub2' => $data->sub2
            ])); ?>

            
        </div>
        <div class="column2 xl:w-1/2 md:w-3/4 md:mx-[auto]">
            <div class="xl:w-4/5">
                <h3>Leverage Real-Time Data for Better Decision-Making</h3>
                <p>
                    Accelerate business decisions with better, more accurate
                    system-to-system data and comprehensive reporting that results in deep, actionable
                    insights. Stay ahead of potential disruptions and maintain a finger on the pulse of your
                    supply chain from anywhere in the world.
                </p>
            </div>
            <div class="xl:w-4/5">
                <h3>Enhance Team Dynamics & Employee Satisfaction</h3>
                <p>
                    When your labor force has the tools they need to succeed, the workplace
                    runs like a well-oiled machine. With Encompass ERP, every stakeholder across your supply
                    chain—from purchasing to Point-of-Sale—has what they need to do their jobs effectively.
                </p>
            </div>
        </div>
    </div>
</section>

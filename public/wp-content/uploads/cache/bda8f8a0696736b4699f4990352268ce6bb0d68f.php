<header id="header" class="module header w-full top-0 left-0 relative z-200 border-b-1 bg-sky-800" data-module="header">
    <nav class="p-5 bg-sky-800 shadow xl:flex xl:items-center xl:justify-around">
        <div class="flex justify-around items-center xl:w-auto md:w-4/5 xl:mx-0 md:mx-auto">
            <div class="lg:w-full relative">
                <a id="header-logo" class="navbar-brand header-logo py-5 inline-block align-middle"
                    href="<?php echo App::getLogo()['href']; ?>">
                    <img src="<?php echo App::getLogo()['url']; ?>" alt="<?php echo App::getLogo()['alt']; ?>" class="w-full">
                </a>
            </div>
            <div class="xl:hidden block">
                <button class="navbar-toggler hamburger-menu p-4 mt-0 cursor-pointer" type="button"
                    data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar block bg-white relative ml-auto w-16 h-2"></span>
                    <span class="icon-bar block bg-white relative ml-auto w-16 h-2 mt-3"></span>
                    <span class="icon-bar block bg-white relative ml-auto w-16 h-2 mt-3"></span>
                    <span class="sr-only">Open Menu</span>
                </button>
            </div>
        </div>
        <?php echo App::getMainNav(); ?>

    </nav>
</header>

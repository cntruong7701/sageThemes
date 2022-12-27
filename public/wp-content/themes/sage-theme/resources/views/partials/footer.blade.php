<footer id="footer" class="wrap xl:h-205 md:h-215 module footer mt-60 bg-white">
    <div class="w-full relative">
        <div class="absolute right-0 left-0">
            <img class="w-full h-205" src="{!! App::getBanner()['bgFooter'] !!}" alt="{!! App::getLogo()['alt'] !!}">
        </div>
        <div class="absolute xl:top-82 md:top-65 w-full">
            <div class="flex flex-col xl:w-4/5 md:w-full justify-between mx-auto xl:items-start md:items-center">
                <div class="2xl:relative xl:absolute md:relative 2xl:mb-22">
                    <img src="{!! App::getLogo()['logoFooter'] !!}" alt="{!! App::getLogo()['alt'] !!}">
                </div>
                <div class="flex w-full 2xl:items-center xl:items-end md:items-center xl:flex-row md:flex-col">
                    <div class="flex xl:mr-25 justify-between 2xl:items-center xl:items-end md:items-center h-41 xl:w-1/4 md:w-2/5 2xl:p-0 xl:py-9">
                        <div>
                            <span
                                class="icomoon icon-youtube text-brown-400 2xl:text-2xl xl:text-base md:text-2xl 2xl:pr-10 xl:pr-5"></span>
                        </div>
                        <div>
                            <span
                                class="icomoon icon-instagram text-brown-400 2xl:text-2xl xl:text-base md:text-2xl 2xl:pr-10 xl:pr-5"></span>
                        </div>
                        <div>
                            <span
                                class="icomoon icon-twitter text-brown-400 2xl:text-2xl xl:text-base md:text-2xl 2xl:pr-10 xl:pr-5"></span>
                        </div>
                        <div>
                            <span
                                class="icomoon icon-facebook text-brown-400 2xl:text-2xl xl:text-base md:text-2xl 2xl:pr-10 xl:pr-5"></span>
                        </div>
                        <div>
                            <span
                                class="icomoon icon-linkedin2 text-brown-400 2xl:text-2xl xl:text-base md:text-2xl 2xl:pr-10 xl:pr-5"></span>
                        </div>
                    </div>
                    <div class="flex xl:w-70% md:w-full justify-between 2xl:items-center xl:items-end md:items-center 2xl:flex-row md:flex-col">
                        {!! App::getFooterNav() !!}
                        <div class="px-10 py-5 border-2 rounded-4xl 2xl:mb-0 xl:mb-16">
                            <a href="" class="text-white font-bold">CONTACT</a>
                        </div>
                        
                        
                        
                    </div>
                </div>
                <p>© Encompass Technologies 2021</p>
            </div>
        </div>
    </div>
</footer>

<!-- endblock -->
<noscript>
    <div id="mod-noscript" class="mod-noscript bg-black text-white fixed inset-0 z-200">
        <div class="table w-full h-full">
            <div class="table-cell align-middle text-center">
                <div class="container last-mb-none">
                    <h3>To use web better, please enable Javascript.</h3>
                </div>
            </div>
        </div>
    </div>
</noscript>

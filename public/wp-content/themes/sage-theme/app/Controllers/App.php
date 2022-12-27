<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use App\Services\Queries;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        $title = "";
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            $title = get_the_archive_title();
        }
        if (is_search()) {
            $title = sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            $title = __('Not Found', 'sage');
        }
        if (empty($title)) {
            $title = get_the_title();
        }
        return $title;
    }

    public static function getLogo()
    {
        $logo = get_field('ns_header_logo', ACF_OPTION);
        $url = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/logo-sagetheme.svg';
        $logoFooter = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/footerLogo.svg';
        $aperity = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/aperity-logo.png';
        $load = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/load.png';
        $cba = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/cba-logo.png';
        $provi = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/provi-logo.png';
        $salsify = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/salsify-logo.png';
        $script = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/script-logo.png';
        $untappd = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/untappd-logo.png';
        $advance = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/logofooter/advance.png';
        $barringer = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/logofooter/barringer.png';
        $eagle = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/logofooter/eagle_rock.png';
        $firestone = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/logofooter/firestone_logo_small1.png';
        $towns = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/logofooter/Towns.png';
        $whistle = ($logo && $logo['url']) ? $logo['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/logofooter/WhistlePig_Logo_Primary.png';
        $alt = ($logo && $logo['alt']) ? $logo['alt'] : 'logo';
        $href = home_url();
        return compact('url', 'logoFooter', 'load', 'aperity', 'cba', 'provi', 'salsify', 'script', 'untappd', 'advance', 'barringer', 'eagle', 'firestone', 'towns', 'whistle','alt', 'href');
    }

    public static function getBanner()
    {
        $banner = get_field('ns_header_banner', ACF_OPTION);
        $Banner = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/bg_Banner.png';
        $Business = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/BusinessImg.png';
        $Hide = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/bgHide.png';
        $lorem = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/lorem.jpg';
        $bgFooter = ($banner && $banner['url']) ? $banner['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/footer1.png';
        $alt = ($banner && $banner['alt']) ? $banner['alt'] : 'banner';
        $alt1 = ($banner && $banner['alt']) ? $banner['alt'] : 'business';
        $href = home_url();
        return compact('Banner', 'Business', 'Hide', 'lorem', 'bgFooter', 'alt', 'alt1', 'href');
    }

    public static function getIcon()
    {
        $icon = get_field('ns_header_Icon', ACF_OPTION);
        $icon1 = ($icon && $icon['url']) ? $icon['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/icon1.svg';
        $icon2 = ($icon && $icon['url']) ? $icon['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/icon2.svg';
        $icon3 = ($icon && $icon['url']) ? $icon['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/icon3.svg';
        $icon4 = ($icon && $icon['url']) ? $icon['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/icon4.svg';
        $alt = ($icon && $icon['alt']) ? $icon['alt'] : 'icon';
        $href = home_url();
        return compact('icon1', 'icon2', 'icon3', 'icon4', 'alt', 'href');
    }

    public static function getBannerR()
    {
        $bannerR = get_field('ns_header_banner', ACF_OPTION);
        $url = ($bannerR && $bannerR['url']) ? $bannerR['url'] : TEMPLATE_ASSETS_URL . '/images/sage-theme/BannerR.png';
        $alt = ($bannerR && $bannerR['alt']) ? $bannerR['alt'] : 'bannerR';
        $href = home_url();
        return compact('url', 'alt', 'href');
    }

    public static function getFooterAddress()
    {
        return get_field('ns_footer_address', ACF_OPTION);
    }

    public static function getCopyRight()
    {
        return get_field('ns_copyright', ACF_OPTION);
    }

    public static function getTrackingCode($position = '')
    {
        if ($position) {
            switch ($position) {
                case 'in_head':
                    $code = get_field('ns_tracking_head', ACF_OPTION);
                    break;
                case 'after_open_body':
                    $code = get_field('ns_tracking_after_body', ACF_OPTION);
                    break;
                case 'before_close_body':
                    $code = get_field('ns_tracking_before_body', ACF_OPTION);
                    break;
                default:
                    $code = '';
                    break;
            }
            return $code;
        }
        return '';
    }

    public static function getFavicon()
    {
        $favicon = get_field('ns_favicon', ACF_OPTION);
        return $favicon ? $favicon : '';
    }

    public static function getAppleIcon()
    {
        $icon = get_field('ns_apple_touch_icon', ACF_OPTION);
        return $icon ? $icon : '';
    }
    /**
     * Get content 404.
     *
     * @return string
     */
    public static function getContent404()
    {
        return Queries::getOptionField('ns_404_page_content');
    }

    /**
     * Get Main Menu
     */
    public static function getMainNav()
    {
        $location = 'primary_navigation';
        if (has_nav_menu($location)) {
            return wp_nav_menu(array(
                THEME_LOCATION => $location,
                CONTAINER => false,
                DEPTH => 2,
                WALKER => new \App\Services\Nav\C8ThemeHeaderMenu(),
                'menu_class' => 'wrap list-none py-32 px-40 xl:flex xl:items-center m-0 z-a-1 xl:z-auto xl:static absolute bg-sky-800 w-full left-0 xl:w-auto
                xl:py-0 xl:opacity-100 opacity-0 top-t200 transition-all ease-in duration-500',
                'menu_id' => 'main-menu',
                ECHO_TEXT => false,
            ));
        } else {
            return '';
        }
    }
    /**
     * Get Footer Menu
     */
    public static function getFooterNav()
    {
        $location = 'footer_navigation';
        if (has_nav_menu($location)) {
            return wp_nav_menu(array(
                THEME_LOCATION => $location,
                CONTAINER => false,
                DEPTH => 2,
                WALKER => new \App\Services\Nav\C8ThemeFooterMenu(),
                'menu_class' => 'flex list-none w-full xl:justify-between md:justify-around 2xl:mr-25 order xl:mb-0 md:mb-15',
                ECHO_TEXT => false,
            ));
        } else {
            return '';
        }
    }

    // public static function getTitle()
    // {

    //     return "Module";
    // }
}

<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use Config;

class Helper
{
    public static function applClasses()
    {
        // default data value
        $dataDefault = [
            'mainLayoutType' => 'vertical-modern-menu',
            'pageHeader' => false,
            'bodyCustomClass' => '',
            'navbarLarge' => true,
            'navbarBgColor' => '',
            'isNavbarDark' => null,
            'isNavbarFixed' => true,
            'activeMenuColor' => '',
            'isMenuDark' => null,
            'isMenuCollapsed' => false,
            'activeMenuType' => '',
            'isFooterDark' => null,
            'isFooterFixed' => false,
            'templateTitle' => '',
            'defaultLanguage' => 'cz',
            'largeScreenLogo' => 'images/logo/materialize-logo-color.png',
            'smallScreenLogo' => 'images/logo/materialize-logo.png',
            'isFabButton' => false,
            'direction' => env('MIX_CONTENT_DIRECTION', 'ltr'),
        ];

        // if any key missing of array from custom.php file it will be merge and set a default value from dataDefault array and store in data variable
        $data = array_merge($dataDefault, config('custom.custom'));

        // all available option of materialize template
        $allOptions = [
            'mainLayoutType' => array('vertical-modern-menu'),
            'pageHeader' => array(true, false),
            'navbarLarge' => array(true, false),
            'isNavbarDark' => array(null, true, false),
            'isNavbarFixed' => array(true, false),
            'isMenuDark' => array(null, true, false),
            'isMenuCollapsed' => array(true, false),
            'activeMenuType' => array('sidenav-active-rounded' => 'sidenav-active-rounded', 'sidenav-active-square' => 'sidenav-active-square', 'sidenav-active-fullwidth' => 'sidenav-active-fullwidth'),
            'isFooterDark' => array(null, true, false),
            'isFooterFixed' => array(false, true),
            'isFabButton' => array(false, true),
            'defaultLanguage' => array('cz' => 'cz', 'en' => 'en', 'ru' => 'ru'),
            'direction' => array('ltr', 'rtl'),
        ];

        //if any options value empty or wrong in custom.php config file then set a default value
        foreach ($allOptions as $key => $value) {
            if (gettype($data[$key]) === gettype($dataDefault[$key])) {
                if (is_string($data[$key])) {
                    $result = array_search($data[$key], $value);
                    if (empty($result)) {
                        $data[$key] = $dataDefault[$key];
                    }
                }
            } else {
                if (is_string($dataDefault[$key])) {
                    $data[$key] = $dataDefault[$key];
                } elseif (is_bool($dataDefault[$key])) {
                    $data[$key] = $dataDefault[$key];
                } elseif (is_null($dataDefault[$key])) {
                    is_string($data[$key]) ? $data[$key] = $dataDefault[$key] : '';
                }
            }
        }

        // if any of template logo is not set or empty is set to default logo
        if (empty($data['largeScreenLogo'])) {
            $data['largeScreenLogo'] = $dataDefault['largeScreenLogo'];
        }
        if (empty($data['smallScreenLogo'])) {
            $data['smallScreenLogo'] = $dataDefault['smallScreenLogo'];
        }
        //mainLayoutTypeClass array contain default class of body element

        $mainLayoutTypeClass = [
            'vertical-modern-menu' => 'vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns'
        ];
        //sidenavMain array contain default class of sidenav
        $sidenavMain = [
            'vertical-modern-menu' => 'sidenav-main nav-expanded nav-lock nav-collapsible'
        ];
        //sidenavMainColor array contain sidenav menu's color class according to layout types
        $sidenavMainColor = [
            'vertical-modern-menu' => 'sidenav-light'
        ];

        //activeMenuTypeClass array contain active menu class of sidenav according to layout types
        $activeMenuTypeClass = [
            'vertical-modern-menu' => 'sidenav-active-square'
        ];

        //navbarMainClass array contain navbar's default classes
        $navbarMainClass = [
            'vertical-modern-menu' => 'navbar-main navbar-color nav-collapsible no-shadow nav-expanded sideNav-lock'
        ];
        //navbarMainColor array contain navabar's color classes according to layout types
        $navbarMainColor = [
            'vertical-modern-menu' => 'navbar-dark gradient-45deg-indigo-purple'
        ];

        //navbarLargeColor array contain navbarlarge's default color classes
        $navbarLargeColor = [
            'vertical-modern-menu' => 'gradient-45deg-indigo-purple'
        ];

        //mainFooterClass array contain Footer's default classes
        $mainFooterClass = [
            'vertical-modern-menu' => 'page-footer footer gradient-shadow'
        ];

        //mainFooterColor array contain footer's color classes
        $mainFooterColor = [
            'vertical-modern-menu' => 'footer-dark gradient-45deg-indigo-purple'
        ];

        //  above arrary override through dynamic data
        $layoutClasses = [
            'mainLayoutType' => $data['mainLayoutType'],
            'mainLayoutTypeClass' => $mainLayoutTypeClass[$data['mainLayoutType']],
            'sidenavMain' => $sidenavMain[$data['mainLayoutType']],
            'navbarMainClass' => $navbarMainClass[$data['mainLayoutType']],
            'navbarMainColor' => $navbarMainColor[$data['mainLayoutType']],
            'pageHeader' => $data['pageHeader'],
            'bodyCustomClass' => $data['bodyCustomClass'],
            'navbarLarge' => $data['navbarLarge'],
            'navbarLargeColor' => $navbarLargeColor[$data['mainLayoutType']],
            'navbarBgColor' => $data['navbarBgColor'],
            'isNavbarDark' => $data['isNavbarDark'],
            'isNavbarFixed' => $data['isNavbarFixed'],
            'activeMenuColor' => $data['activeMenuColor'],
            'isMenuDark' => $data['isMenuDark'],
            'sidenavMainColor' => $sidenavMainColor[$data['mainLayoutType']],
            'isMenuCollapsed' => $data['isMenuCollapsed'],
            'activeMenuType' => $data['activeMenuType'],
            'activeMenuTypeClass' => $activeMenuTypeClass[$data['mainLayoutType']],
            'isFooterDark' => $data['isFooterDark'],
            'isFooterFixed' => $data['isFooterFixed'],
            'templateTitle' => $data['templateTitle'],
            'largeScreenLogo' => $data['largeScreenLogo'],
            'smallScreenLogo' => $data['smallScreenLogo'],
            'defaultLanguage' => $allOptions['defaultLanguage'][$data['defaultLanguage']],
            'mainFooterClass' => $mainFooterClass[$data['mainLayoutType']],
            'mainFooterColor' => $mainFooterColor[$data['mainLayoutType']],
            'isFabButton' => $data['isFabButton'],
            'direction' => $data['direction'],
        ];
        // set default language if session hasn't locale value the set default language
        if (!session()->has('locale')) {
            app()->setLocale($layoutClasses['defaultLanguage']);
        }
        return $layoutClasses;
    }
    // updatesPageConfig function override all configuration of custom.php file as page requirements.
    public static function updatePageConfig($pageConfigs)
    {
        $demo = 'custom';
        if (isset($pageConfigs)) {
            if (count($pageConfigs) > 0) {
                foreach ($pageConfigs as $config => $val) {
                    Config::set('custom.' . $demo . '.' . $config, $val);
                }
            }
        }
    }
}

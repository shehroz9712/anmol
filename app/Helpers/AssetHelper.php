<?php

/**
 * AssetHelper
 *
 */

/**
 * Return's admin assets directory
 *
 * CALLING PROCEDURE
 *
 * In controller call it like this:
 * $adminAssetsDirectory = adminAssetsDir() . $site_settings->site_logo;
 *
 * In View call it like this:
 * {{ asset(adminAssetsDir() . $site_settings->site_logo) }}
 *
 * @param $folder
 * @return bool
 */
function uploadsDir($folder = '')
{
    return 'uploads/' . $folder;
}

function uploadsUrl($folder, $file = '')
{
    return $file != '' && file_exists('uploads/' . $folder . '/' . $file) ? url('uploads') . '/' . $folder . '/' . $file : '';
}

function adminHasAssets($image)
{
    if (!empty($image) && file_exists(uploadsDir() . $image)) {
        return true;
    } else {
        return false;
    }
}

function defaultUserImage()
{
    return 'assets/admin/img/avatar.png';
}

function defaultStoreCoverUrl()
{
    return 'assets/front/images/store-cover.png';
}

///////////////////////////////////////////////////////

/**
 * Used to generate URL of the CSS file for front end
 */
function frontCss($file = '')
{
    return asset('assets/front/css/' . $file);
}
function frontSlick($file = '')
{
    return asset('assets/front/slick/' . $file);
}

/**
 * Used to generate URL of the fonts file for front end
 */
function frontFont($file = '')
{
    return asset('assets/front/fonts/' . $file);
}

/**
 * Used to generate URL of the image file for front end
 */
function frontImage($file = '')
{
    return asset('assets/front/img/' . $file);
}
function uploads($file = '')
{
    return asset('uploads/' . $file);
}

/**
 * Used to generate URL of the JavaScript file for front end
 */
function frontJs($file = '')
{
    return asset('assets/front/js/' . $file);
}
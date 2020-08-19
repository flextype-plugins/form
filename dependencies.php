<?php

declare(strict_types=1);

/**
 * @link http://digital.flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Plugin\Form;

use Flextype\Plugin\Form\Models\Fieldsets;
use Flextype\Plugin\Form\Models\Form;
use Flextype\Plugin\Form\Twig\FormTwigExtension;
use function array_merge;
use function strtolower;
use function substr;

/**
 * Add Form Model to Flextype container
 */
$flextype->container()['form'] = static function () use ($flextype) {
    return new Form($flextype);
};

/**
 * Add Fieldsets Model to Flextype container
 */
$flextype->container()['fieldsets'] = static function () use ($flextype) {
    return new Fieldsets($flextype);
};

/**
 * Add Form Twig extension
 */
$flextype->container('twig')->addExtension(new FormTwigExtension($flextype));

/**
 * Add Assets
 */
$_admin_css = $flextype->container('registry')->has('assets.admin.css') ? $flextype->container('registry')->get('assets.admin.css') : [];
$_site_css  = $flextype->container('registry')->has('assets.site.css') ? $flextype->container('registry')->get('assets.site.css') : [];

if ($flextype->container('registry')->get('plugins.form.settings.load_on_admin')) {
    $flextype->container('registry')->set(
        'assets.admin.css',
        array_merge($_admin_css, [
            'project/plugins/form/assets/dist/css/form-vendor-build.min.css',
            'project/plugins/form/assets/dist/css/form-build.min.css',
        ])
    );
}

if ($flextype->container('registry')->get('plugins.form.settings.load_on_site')) {
    $flextype->container('registry')->set(
        'assets.site.css',
        array_merge($_site_css, [
            'project/plugins/form/assets/dist/css/form-vendor-build.min.css',
            'project/plugins/form/assets/dist/css/form-build.min.css',
        ])
    );
}

if ($flextype->container('registry')->get('flextype.settings.locale') === 'en_US') {
    $_locale = 'en';
} else {
    $_locale = substr(strtolower($flextype->container('registry')->get('flextype.settings.locale')), 0, 2);
}

if ($_locale !== 'en') {
    $trumbowyg_locale_js = 'project/plugins/form/assets/dist/lang/trumbowyg/langs/' . $_locale . '.min.js';
    $flatpickr_locale_js = 'project/plugins/form/assets/dist/lang/flatpickr/l10n/' . $_locale . '.js';
} else {
    $trumbowyg_locale_js = '';
    $flatpickr_locale_js = '';
}

$_admin_js = $flextype->container('registry')->has('assets.admin.js') ? $flextype->container('registry')->get('assets.admin.js') : [];
$_site_js  = $flextype->container('registry')->has('assets.site.js') ? $flextype->container('registry')->get('assets.site.js') : [];

if ($flextype->container('registry')->get('plugins.form.settings.load_on_admin')) {
    $flextype->container('registry')->set(
        'assets.admin.js',
        array_merge($_admin_js, [
            'project/plugins/form/assets/dist/js/form-vendor-build.min.js',
            $trumbowyg_locale_js,
            $flatpickr_locale_js,
            'project/plugins/form/assets/dist/js/form-build.min.js',
        ])
    );
}

if ($flextype->container('registry')->get('plugins.form.settings.load_on_site')) {
    $flextype->container('registry')->set(
        'assets.site.js',
        array_merge($_site_js, [
            'project/plugins/form/assets/dist/js/form-vendor-build.min.js',
            $trumbowyg_locale_js,
            $flatpickr_locale_js,
            'project/plugins/form/assets/dist/js/form-build.min.js',
        ])
    );
}

<?php

declare(strict_types=1);

/**
 * @link http://digital.flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Plugin\Form;

use Flextype\Plugin\Form\Models\Form;
use Flextype\Plugin\Form\Models\Fieldsets;
use Flextype\Plugin\Form\Twig\FormTwigExtension;

/**
 * Add Form Model to Flextype container
 */
$flextype['form'] = static function ($container) {
    return new Form($container);
};

/**
 * Add Fieldsets Model to Flextype container
 */
$flextype['fieldsets'] = static function ($container) {
    return new Fieldsets($container);
};

/**
 * Add Form Twig extension
 */
$flextype->twig->addExtension(new FormTwigExtension($flextype));

/**
 * Add Assets
 */
$_admin_css = ($flextype['registry']->has('assets.admin.css')) ? $flextype['registry']->get('assets.admin.css') : [];
$_site_css  = ($flextype['registry']->has('assets.site.css')) ? $flextype['registry']->get('assets.site.css') : [];

if ($flextype['registry']->get('plugins.form.settings.load_on_admin')) {
    $flextype['registry']->set('assets.admin.css',
                           array_merge($_admin_css, ['project/plugins/form/assets/dist/css/form-vendor-build.min.css',
                            'project/plugins/form/assets/dist/css/form-build.min.css']));
}

if ($flextype['registry']->get('plugins.form.settings.load_on_site')) {
    $flextype['registry']->set('assets.site.css',
                           array_merge($_site_css, ['project/plugins/form/assets/dist/css/form-vendor-build.min.css',
                            'project/plugins/form/assets/dist/css/form-build.min.css']));
}

if ($flextype['registry']->get('flextype.settings.locale') == 'en_US') {
    $_locale = 'en';
} else {
    $_locale = substr(strtolower($flextype['registry']->get('flextype.settings.locale')), 0, 2);
}

if ($_locale != 'en') {
    $trumbowyg_locale_js = 'project/plugins/form/assets/dist/lang/trumbowyg/langs/' . $_locale . '.min.js';
    $flatpickr_locale_js = 'project/plugins/form/assets/dist/lang/flatpickr/l10n/' . $_locale . '.js';
} else {
    $trumbowyg_locale_js = '';
    $flatpickr_locale_js = '';
}

$_admin_js = ($flextype['registry']->has('assets.admin.js')) ? $flextype['registry']->get('assets.admin.js') : [];
$_site_js  = ($flextype['registry']->has('assets.site.js')) ? $flextype['registry']->get('assets.site.js') : [];

if ($flextype['registry']->get('plugins.form.settings.load_on_admin')) {
    $flextype['registry']->set('assets.admin.js',
                           array_merge($_admin_js, ['project/plugins/form/assets/dist/js/form-vendor-build.min.js',
                           $trumbowyg_locale_js,
                           $flatpickr_locale_js,
                           'project/plugins/form/assets/dist/js/form-build.min.js']));
}

if ($flextype['registry']->get('plugins.form.settings.load_on_site')) {
    $flextype['registry']->set('assets.site.js',
                           array_merge($_site_js, ['project/plugins/form/assets/dist/js/form-vendor-build.min.js',
                           $trumbowyg_locale_js,
                           $flatpickr_locale_js,
                           'project/plugins/form/assets/dist/js/form-build.min.js']));
}

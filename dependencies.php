<?php

declare(strict_types=1);

/**
 * @link https://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Plugin\Form;

use Flextype\Plugin\Form\Models\Fieldsets;
use Flextype\Plugin\Form\Models\Form;
use Flextype\Plugin\Form\Twig\FormTwigExtension;
use Flextype\Plugin\Twig\Twig\FlextypeTwig;
use function array_merge;
use function strtolower;
use function substr;

/**
 * Add Form Model to Flextype container
 */
flextype()->container()['form'] = fn() => new Form();

/**
 * Add Fieldsets Model to Flextype container
 */
flextype()->container()['fieldsets'] = fn() => new Fieldsets();

/**
 * Add Form Twig extension
 */
FlextypeTwig::macro('form', fn() => flextype('form'));

/**
 * Add Assets
 */
$adminCSS = flextype('registry')->has('assets.admin.css') ? flextype('registry')->get('assets.admin.css') : [];
$siteCSS  = flextype('registry')->has('assets.site.css') ? flextype('registry')->get('assets.site.css') : [];

if (flextype('registry')->get('plugins.form.settings.load_on_admin')) {
    flextype('registry')->set(
        'assets.admin.css',
        array_merge($adminCSS, [
            'project/plugins/form/assets/dist/css/form-vendor-build.min.css',
            'project/plugins/form/assets/dist/css/form-build.min.css',
        ])
    );
}

if (flextype('registry')->get('plugins.form.settings.load_on_site')) {
    flextype('registry')->set(
        'assets.site.css',
        array_merge($siteCSS, [
            'project/plugins/form/assets/dist/css/form-vendor-build.min.css',
            'project/plugins/form/assets/dist/css/form-build.min.css',
        ])
    );
}

if (flextype('registry')->get('flextype.settings.locale') === 'en_US') {
    $_locale = 'en';
} else {
    $_locale = substr(strtolower(flextype('registry')->get('flextype.settings.locale')), 0, 2);
}

if ($_locale !== 'en') {
    $trumbowygLocaleJS = 'project/plugins/form/assets/dist/lang/trumbowyg/langs/' . $_locale . '.min.js';
    $flatpickrLocaleJS = 'project/plugins/form/assets/dist/lang/flatpickr/l10n/' . $_locale . '.js';
} else {
    $trumbowygLocaleJS = '';
    $flatpickrLocaleJS = '';
}

$adminJS = flextype('registry')->has('assets.admin.js') ? flextype('registry')->get('assets.admin.js') : [];
$siteJS  = flextype('registry')->has('assets.site.js') ? flextype('registry')->get('assets.site.js') : [];

if (flextype('registry')->get('plugins.form.settings.load_on_admin')) {
    flextype('registry')->set(
        'assets.admin.js',
        array_merge($adminJS, [
            'project/plugins/form/assets/dist/js/form-vendor-build.min.js',
            $trumbowygLocaleJS,
            $flatpickrLocaleJS,
            'project/plugins/form/assets/dist/js/form-build.min.js',
        ])
    );
}

if (flextype('registry')->get('plugins.form.settings.load_on_site')) {
    flextype('registry')->set(
        'assets.site.js',
        array_merge($siteJS, [
            'project/plugins/form/assets/dist/js/form-vendor-build.min.js',
            $trumbowygLocaleJS,
            $flatpickrLocaleJS,
            'project/plugins/form/assets/dist/js/form-build.min.js',
        ])
    );
}

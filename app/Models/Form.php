<?php

declare(strict_types=1);

/**
 * @link http://digital.flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Plugin\Form\Models;

use Flextype\Component\Arrays\Arrays;
use function str_replace;
use function strlen;
use function strpos;
use function substr_replace;

class Form
{
    /**
     * Render form
     *
     * @param array $fieldset Fieldset
     * @param array $values   Fieldset values
     *
     * @return string Returns form based on fieldset
     *
     * @access public
     */
    public function render(array $fieldset, array $values = []) : string
    {
        return flextype('twig')->fetch(
            'plugins/form/fieldsets/base.html',
            [
                'fieldset' => $fieldset,
                'values' => $values,
                'query' => $_GET,
            ]
        );
    }

    /**
     * Get element value
     *
     * @param string $element    Form Element
     * @param array  $values     Form Values
     * @param array  $properties Field properties
     *
     * @return mixed Returns form element value
     *
     * @access public
     */
    public function getElementValue(string $element, array $values, array $properties)
    {
        if (Arrays::has($values, $element)) {
            $field_value = Arrays::get($values, $element);
        } elseif (Arrays::has($properties, 'default')) {
            $field_value = $properties['default'];
        } else {
            $field_value = '';
        }

        return $field_value;
    }

    /**
     * Get element name
     *
     * @param string $element Element
     *
     * @return string Returns form element name
     *
     * @access public
     */
    public function getElementName(string $element) : string
    {
        $pos = strpos($element, '.');

        if ($pos === false) {
            $field_name = $element;
        } else {
            $field_name = str_replace('.', '][', "$element") . ']';
        }

        $pos = strpos($field_name, ']');

        if ($pos !== false) {
            $field_name = substr_replace($field_name, '', $pos, strlen(']'));
        }

        return $field_name;
    }

    /**
     * Get element id
     *
     * @param string $element Element
     *
     * @return string Returns form element id
     *
     * @access public
     */
    public function getElementID(string $element) : string
    {
        $pos = strpos($element, '.');

        if ($pos === false) {
            $field_name = $element;
        } else {
            $field_name = str_replace('.', '_', "$element");
        }

        return $field_name;
    }
}

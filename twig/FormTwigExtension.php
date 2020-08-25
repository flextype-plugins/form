<?php

declare(strict_types=1);

/**
 * Flextype (http://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype\Plugin\Form\Twig;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class FormTwigExtension extends AbstractExtension implements GlobalsInterface
{
    /**
     * Constructor
     */
    public function __construct()
    {

    }

    /**
     * Register Global variables in an extension
     */
    public function getGlobals() : array
    {
        return [
            'form' => new FormTwig(),
        ];
    }
}

class FormTwig
{
    /**
     * Flextype Application
     */


    /**
     * Constructor
     */
    public function __construct()
    {

    }

    public function render(array $fieldset, array $values = []) : string
    {
        return flextype('form')->render($fieldset, $values);
    }

    public function getElementID(string $element) : string
    {
        return flextype('form')->getElementID($element);
    }

    public function getElementName(string $element) : string
    {
        return flextype('form')->getElementName($element);
    }

    public function getElementValue(string $element, array $values, array $properties)
    {
        return flextype('form')->getElementValue($element, $values, $properties);
    }
}

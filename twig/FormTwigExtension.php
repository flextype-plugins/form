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
     * Flextype Application
     */
    protected $flextype;

    /**
     * Constructor
     */
    public function __construct($flextype)
    {
        $this->flextype = $flextype;
    }

    /**
     * Register Global variables in an extension
     */
    public function getGlobals() : array
    {
        return [
            'form' => new FormTwig($this->flextype),
        ];
    }
}

class FormTwig
{
    /**
     * Flextype Application
     */
    protected $flextype;

    /**
     * Constructor
     */
    public function __construct($flextype)
    {
        $this->flextype = $flextype;
    }

    public function render(array $fieldset, array $values = []) : string
    {
        return $this->flextype->container('form')->render($fieldset, $values);
    }

    public function getElementID(string $element) : string
    {
        return $this->flextype->container('form')->getElementID($element);
    }

    public function getElementName(string $element) : string
    {
        return $this->flextype->container('form')->getElementName($element);
    }

    public function getElementValue(string $element, array $values, array $properties)
    {
        return $this->flextype->container('form')->getElementValue($element, $values, $properties);
    }
}

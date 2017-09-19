<?php

namespace Anax\HTMLForm;

/**
 * Ordinary input form element
 */
class FormElementInput extends FormElement
{
    
    /**
     * Constructor
     *
     * @param string $name       of the element.
     * @param array  $attributes to set to the element. Default is an empty array.
     */
    // public function __construct($name, $attributes = [])
    // {
    //     parent::__construct($name, $attributes);
    //     $this['type'] = 'text';
    //     $this->UseNameAsDefaultLabel();
    // }



    /**
     * Get HTML code for a element.
     *
     * @return string HTML code for the element.
     */
    public function getHTML()
    {
        $details = $this->getHTMLDetails();
        extract($details);

        // @codingStandardsIgnoreStart
        return <<<EOD
<{$wrapperElement}{$wrapperClass}>
<label for='$id'>$label</label>
<br/>
<input id='$id'{$type}{$class}{$name}{$value}{$autofocus}{$required}{$readonly}{$placeholder}{$title}{$multiple}{$pattern}{$max}{$min}{$step}/>
{$messages}
</{$wrapperElement}>
<p class='cf-desc'>{$description}</p>
EOD;
        // @codingStandardsIgnoreEnd
    }
}

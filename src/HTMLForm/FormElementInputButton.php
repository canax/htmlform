<?php

namespace Anax\HTMLForm;

/**
 * Ordinary input form element
 */
class FormElementInputButton extends FormElement
{
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
<span>
<input id='$id'{$type}{$class}{$name}{$value}{$autofocus}{$readonly}{$novalidate}{$title} />
</span>
EOD;
        // @codingStandardsIgnoreEnd
    }
}

<?php

namespace Anax\HTMLForm;

/**
 * HTML Form elements.
 */
class FormTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test
     */
    public function testCreate1()
    {
        $form = new Form();
        $form->create();

        $res = $form->getHTML();
        $exp = <<<EOD
\n<form id='anax/htmlform' method='post'>
<input type="hidden" name="anax/htmlform-id" value="anax/htmlform" />
<fieldset>



</fieldset>
</form>\n
EOD;

        $this->assertEquals($res, $exp, "Empty form missmatch.");
    }



    /**
     * Test
     *
     * @return void
     *
     */
    public function testCreate2()
    {
        $form = new Form();
        $form->create([
            "enctype" => "multipart/form-data"
        ]);

        $res = $form->getHTML();
        $exp = <<<EOD
\n<form id='anax/htmlform' method='post' enctype='multipart/form-data'>
<input type="hidden" name="anax/htmlform-id" value="anax/htmlform" />
<fieldset>



</fieldset>
</form>\n
EOD;

        $this->assertEquals($res, $exp, "Form with enctype missmatch.");
    }



    /**
     * Test
     *
     * @return void
     *
     */
/*    public function testCreate2()
    {
        $form = new \Mos\HTMLForm\CForm();

        $form->create([], [
            'test' => [
                'type' => 'select',
                'options' => [
                    'default' => 'Select...',
                    '01' => 'January',
                ],
            ],
        ]);
        
        echo $form->getHTML();
        $res = $form->getHTML();
        $exp = <<<EOD
\n<form method='post'>
<fieldset>



</fieldset>
</form>\n
EOD;

        $this->assertEquals($res, $exp, "Empty form render missmatch.");
    }*/
}

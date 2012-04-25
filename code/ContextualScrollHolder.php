<?php
/*
MIT License

Copyright (c) 2012 Luis E. S. Dias - www.smartbyte.com.br

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

class ContextualScrollHolder extends Page {
    static $db = array(
        'FontSize' => 'Int',
        'Height' => 'Int',
        'Width' => 'Int',
        'Padding' => 'Int',
        'MarginBottom' => 'Int',
        'BackgroundColor' => 'Varchar'
    );

    public function populateDefaults() {
        parent::populateDefaults();
        $this->FontSize = 16;
        $this->Height = 640;
        $this->Width = 800;
        $this->Padding = 20;
        $this->MarginBottom = 40;
        $this->BackgroundColor = '#eee';
    }
    
    function getCMSValidator() 
    { 
      return new RequiredFields('FontSize','Height','Width','Padding','MarginBottom'); 
    }
    
    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Content.Main',new NumericField('FontSize','Font Size'),'Content');
        $fields->addFieldToTab('Root.Content.Main',new NumericField('Height'),'Content');
        $fields->addFieldToTab('Root.Content.Main',new NumericField('Width'),'Content');
        $fields->addFieldToTab('Root.Content.Main',new NumericField('Padding'),'Content');
        $fields->addFieldToTab('Root.Content.Main',new NumericField('MarginBottom','Margin Bottom'),'Content');
        $fields->addFieldToTab('Root.Content.Main',new TextField('BackgroundColor','Background Color'),'Content');
        $fields->removeFieldFromTab('Root.Content.Main', 'Content'); 
        return $fields;
    }    
}

class ContextualScrollHolder_Controller extends Page_Controller {
    
}
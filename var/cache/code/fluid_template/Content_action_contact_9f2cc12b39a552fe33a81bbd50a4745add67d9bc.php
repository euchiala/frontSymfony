<?php

class Content_action_contact_9f2cc12b39a552fe33a81bbd50a4745add67d9bc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'flux' => 
  array (
    0 => 'FluidTYPO3\\Flux\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
  'project' => 
  array (
    0 => 'EW72\\Project\\ViewHelpers',
  ),
));
}

/**
 * section Configuration
 */
public function section_754164850f38c1ecdaf6b8ed894cb192bc36c5f4(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['name'] = NULL;
$arguments4['label'] = NULL;
$arguments4['default'] = NULL;
$arguments4['required'] = false;
$arguments4['exclude'] = false;
$arguments4['transform'] = NULL;
$arguments4['enabled'] = true;
$arguments4['requestUpdate'] = false;
$arguments4['displayCond'] = NULL;
$arguments4['inherit'] = true;
$arguments4['inheritEmpty'] = true;
$arguments4['clear'] = false;
$arguments4['variables'] = array (
);
$arguments4['extensionName'] = NULL;
$arguments4['config'] = array (
);
$arguments4['validate'] = 'trim';
$arguments4['size'] = 1;
$arguments4['multiple'] = false;
$arguments4['minItems'] = 0;
$arguments4['maxItems'] = 1;
$arguments4['itemListStyle'] = NULL;
$arguments4['selectedListStyle'] = NULL;
$arguments4['items'] = NULL;
$arguments4['emptyOption'] = false;
$arguments4['translateCsvItems'] = NULL;
$arguments4['itemsProcFunc'] = NULL;
$arguments4['renderType'] = 'selectSingle';
$arguments4['showIconTable'] = false;
$arguments4['name'] = 'type';
$arguments4['label'] = 'type';
$arguments4['items'] = 'Allgemein, Allgemein, Allgemein';

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['name'] = NULL;
$arguments6['label'] = NULL;
$arguments6['default'] = NULL;
$arguments6['required'] = false;
$arguments6['exclude'] = false;
$arguments6['transform'] = NULL;
$arguments6['enabled'] = true;
$arguments6['requestUpdate'] = false;
$arguments6['displayCond'] = NULL;
$arguments6['inherit'] = true;
$arguments6['inheritEmpty'] = true;
$arguments6['clear'] = false;
$arguments6['variables'] = array (
);
$arguments6['extensionName'] = NULL;
$arguments6['config'] = array (
);
$arguments6['eval'] = 'trim';
$arguments6['size'] = 32;
$arguments6['maxCharacters'] = NULL;
$arguments6['minimum'] = NULL;
$arguments6['maximum'] = NULL;
$arguments6['placeholder'] = NULL;
$arguments6['name'] = 'Name';
$arguments6['label'] = 'Name';
$arguments6['maxCharacters'] = 255;

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['name'] = NULL;
$arguments8['label'] = NULL;
$arguments8['default'] = NULL;
$arguments8['required'] = false;
$arguments8['exclude'] = false;
$arguments8['transform'] = NULL;
$arguments8['enabled'] = true;
$arguments8['requestUpdate'] = false;
$arguments8['displayCond'] = NULL;
$arguments8['inherit'] = true;
$arguments8['inheritEmpty'] = true;
$arguments8['clear'] = false;
$arguments8['variables'] = array (
);
$arguments8['extensionName'] = NULL;
$arguments8['config'] = array (
);
$arguments8['eval'] = 'trim';
$arguments8['size'] = 32;
$arguments8['maxCharacters'] = NULL;
$arguments8['minimum'] = NULL;
$arguments8['maximum'] = NULL;
$arguments8['placeholder'] = NULL;
$arguments8['name'] = 'E-Mail';
$arguments8['label'] = 'E-Mail';
$arguments8['maxCharacters'] = 255;

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['name'] = NULL;
$arguments10['label'] = NULL;
$arguments10['default'] = NULL;
$arguments10['required'] = false;
$arguments10['exclude'] = false;
$arguments10['transform'] = NULL;
$arguments10['enabled'] = true;
$arguments10['requestUpdate'] = false;
$arguments10['displayCond'] = NULL;
$arguments10['inherit'] = true;
$arguments10['inheritEmpty'] = true;
$arguments10['clear'] = false;
$arguments10['variables'] = array (
);
$arguments10['extensionName'] = NULL;
$arguments10['config'] = array (
);
$arguments10['eval'] = 'trim';
$arguments10['size'] = 32;
$arguments10['maxCharacters'] = NULL;
$arguments10['minimum'] = NULL;
$arguments10['maximum'] = NULL;
$arguments10['placeholder'] = NULL;
$arguments10['name'] = 'Betreff';
$arguments10['label'] = 'Betreff';
$arguments10['maxCharacters'] = 255;

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['aria'] = NULL;
$arguments12['name'] = NULL;
$arguments12['value'] = NULL;
$arguments12['property'] = NULL;
$arguments12['autofocus'] = NULL;
$arguments12['rows'] = NULL;
$arguments12['cols'] = NULL;
$arguments12['disabled'] = NULL;
$arguments12['placeholder'] = NULL;
$arguments12['errorClass'] = 'f3-form-error';
$arguments12['readonly'] = NULL;
$arguments12['required'] = false;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['name'] = 'myTextArea';
$arguments12['value'] = 'This is shown inside the textarea';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
    ';
return $output3;
};
$arguments1 = array();
$arguments1['id'] = NULL;
$arguments1['label'] = NULL;
$arguments1['description'] = NULL;
$arguments1['enabled'] = true;
$arguments1['variables'] = array (
);
$arguments1['options'] = NULL;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments1['extensionName'] = NULL;
$arguments1['id'] = 'ContactPage';
$arguments1['label'] = 'ContactPage';
$arguments1['description'] = 'contact_page';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
';

return $output0;
}
/**
 * section Preview
 */
public function section_f1fbb2b43dca281d0138f4fcc92543ad143ef0b1(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output14 = '';

$output14 .= '
    <h1>Kontakt :</h1>
    title : ';
$array15 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headtitle', $array15)]);

$output14 .= ' <br>
    Type : ';
$array16 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array16)]);

$output14 .= ' <br>
    Name : ';
$array17 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('Name', $array17)]);

$output14 .= '<br>
    E-Mail : ';
$array18 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('E-Mail', $array18)]);

$output14 .= '<br>
    Betreff : ';
$array19 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('Betreff', $array19)]);

$output14 .= '<br>
';

return $output14;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
  <div class="row">
    <div class="col-md-6">
        <div class="form-contact">
            <h1>Kontakt :</h1>
        <select name="pets" id="pet-select">
            <option value="">Allgemain</option>
            <option value="dog">Allgemain</option>
            <option value="cat">Allgemain</option>
        </select></br>
        <input type="text" id="Name" name="Name" placeholder="Name"></br>
        <input type="text" id="Mail" name="Mail" placeholder="E-Mail"></br>
        <input type="text" id="Betreff" name="Betreff" placeholder="Betreff"></br>
        <textarea id="area_txt" name="Text" srows="15" cols="33" placeholder="Text">
        </div>
    </div>
    <div class="col-md-6">
bo,njout
    </div>
</div>
';
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output20 = '';

$output20 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['name'] = NULL;
$arguments21['name'] = 'Default';

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output20 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['name'] = NULL;
$arguments29['label'] = NULL;
$arguments29['default'] = NULL;
$arguments29['required'] = false;
$arguments29['exclude'] = false;
$arguments29['transform'] = NULL;
$arguments29['enabled'] = true;
$arguments29['requestUpdate'] = false;
$arguments29['displayCond'] = NULL;
$arguments29['inherit'] = true;
$arguments29['inheritEmpty'] = true;
$arguments29['clear'] = false;
$arguments29['variables'] = array (
);
$arguments29['extensionName'] = NULL;
$arguments29['config'] = array (
);
$arguments29['validate'] = 'trim';
$arguments29['size'] = 1;
$arguments29['multiple'] = false;
$arguments29['minItems'] = 0;
$arguments29['maxItems'] = 1;
$arguments29['itemListStyle'] = NULL;
$arguments29['selectedListStyle'] = NULL;
$arguments29['items'] = NULL;
$arguments29['emptyOption'] = false;
$arguments29['translateCsvItems'] = NULL;
$arguments29['itemsProcFunc'] = NULL;
$arguments29['renderType'] = 'selectSingle';
$arguments29['showIconTable'] = false;
$arguments29['name'] = 'type';
$arguments29['label'] = 'type';
$arguments29['items'] = 'Allgemein, Allgemein, Allgemein';

$output28 .= FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['name'] = NULL;
$arguments31['label'] = NULL;
$arguments31['default'] = NULL;
$arguments31['required'] = false;
$arguments31['exclude'] = false;
$arguments31['transform'] = NULL;
$arguments31['enabled'] = true;
$arguments31['requestUpdate'] = false;
$arguments31['displayCond'] = NULL;
$arguments31['inherit'] = true;
$arguments31['inheritEmpty'] = true;
$arguments31['clear'] = false;
$arguments31['variables'] = array (
);
$arguments31['extensionName'] = NULL;
$arguments31['config'] = array (
);
$arguments31['eval'] = 'trim';
$arguments31['size'] = 32;
$arguments31['maxCharacters'] = NULL;
$arguments31['minimum'] = NULL;
$arguments31['maximum'] = NULL;
$arguments31['placeholder'] = NULL;
$arguments31['name'] = 'Name';
$arguments31['label'] = 'Name';
$arguments31['maxCharacters'] = 255;

$output28 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output28 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['name'] = NULL;
$arguments33['label'] = NULL;
$arguments33['default'] = NULL;
$arguments33['required'] = false;
$arguments33['exclude'] = false;
$arguments33['transform'] = NULL;
$arguments33['enabled'] = true;
$arguments33['requestUpdate'] = false;
$arguments33['displayCond'] = NULL;
$arguments33['inherit'] = true;
$arguments33['inheritEmpty'] = true;
$arguments33['clear'] = false;
$arguments33['variables'] = array (
);
$arguments33['extensionName'] = NULL;
$arguments33['config'] = array (
);
$arguments33['eval'] = 'trim';
$arguments33['size'] = 32;
$arguments33['maxCharacters'] = NULL;
$arguments33['minimum'] = NULL;
$arguments33['maximum'] = NULL;
$arguments33['placeholder'] = NULL;
$arguments33['name'] = 'E-Mail';
$arguments33['label'] = 'E-Mail';
$arguments33['maxCharacters'] = 255;

$output28 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output28 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['name'] = NULL;
$arguments35['label'] = NULL;
$arguments35['default'] = NULL;
$arguments35['required'] = false;
$arguments35['exclude'] = false;
$arguments35['transform'] = NULL;
$arguments35['enabled'] = true;
$arguments35['requestUpdate'] = false;
$arguments35['displayCond'] = NULL;
$arguments35['inherit'] = true;
$arguments35['inheritEmpty'] = true;
$arguments35['clear'] = false;
$arguments35['variables'] = array (
);
$arguments35['extensionName'] = NULL;
$arguments35['config'] = array (
);
$arguments35['eval'] = 'trim';
$arguments35['size'] = 32;
$arguments35['maxCharacters'] = NULL;
$arguments35['minimum'] = NULL;
$arguments35['maximum'] = NULL;
$arguments35['placeholder'] = NULL;
$arguments35['name'] = 'Betreff';
$arguments35['label'] = 'Betreff';
$arguments35['maxCharacters'] = 255;

$output28 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output28 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['aria'] = NULL;
$arguments37['name'] = NULL;
$arguments37['value'] = NULL;
$arguments37['property'] = NULL;
$arguments37['autofocus'] = NULL;
$arguments37['rows'] = NULL;
$arguments37['cols'] = NULL;
$arguments37['disabled'] = NULL;
$arguments37['placeholder'] = NULL;
$arguments37['errorClass'] = 'f3-form-error';
$arguments37['readonly'] = NULL;
$arguments37['required'] = false;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['name'] = 'myTextArea';
$arguments37['value'] = 'This is shown inside the textarea';

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output28 .= '
    ';
return $output28;
};
$arguments26 = array();
$arguments26['id'] = NULL;
$arguments26['label'] = NULL;
$arguments26['description'] = NULL;
$arguments26['enabled'] = true;
$arguments26['variables'] = array (
);
$arguments26['options'] = NULL;
$arguments26['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments26['extensionName'] = NULL;
$arguments26['id'] = 'ContactPage';
$arguments26['label'] = 'ContactPage';
$arguments26['description'] = 'contact_page';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output25 .= '
';
return $output25;
};
$arguments23 = array();
$arguments23['name'] = NULL;
$arguments23['name'] = 'Configuration';

$output20 .= NULL;

$output20 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
    <h1>Kontakt :</h1>
    title : ';
$array42 = array (
);
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headtitle', $array42)]);

$output41 .= ' <br>
    Type : ';
$array43 = array (
);
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array43)]);

$output41 .= ' <br>
    Name : ';
$array44 = array (
);
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('Name', $array44)]);

$output41 .= '<br>
    E-Mail : ';
$array45 = array (
);
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('E-Mail', $array45)]);

$output41 .= '<br>
    Betreff : ';
$array46 = array (
);
$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('Betreff', $array46)]);

$output41 .= '<br>
';
return $output41;
};
$arguments39 = array();
$arguments39['name'] = NULL;
$arguments39['name'] = 'Preview';

$output20 .= NULL;

$output20 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return '
  <div class="row">
    <div class="col-md-6">
        <div class="form-contact">
            <h1>Kontakt :</h1>
        <select name="pets" id="pet-select">
            <option value="">Allgemain</option>
            <option value="dog">Allgemain</option>
            <option value="cat">Allgemain</option>
        </select></br>
        <input type="text" id="Name" name="Name" placeholder="Name"></br>
        <input type="text" id="Mail" name="Mail" placeholder="E-Mail"></br>
        <input type="text" id="Betreff" name="Betreff" placeholder="Betreff"></br>
        <textarea id="area_txt" name="Text" srows="15" cols="33" placeholder="Text">
        </div>
    </div>
    <div class="col-md-6">
bo,njout
    </div>
</div>
';
};
$arguments47 = array();
$arguments47['name'] = NULL;
$arguments47['name'] = 'Main';

$output20 .= NULL;

$output20 .= '

';

return $output20;
}


}
#
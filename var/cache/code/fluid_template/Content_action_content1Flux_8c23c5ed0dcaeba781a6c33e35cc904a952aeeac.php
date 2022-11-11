<?php

class Content_action_content1Flux_8c23c5ed0dcaeba781a6c33e35cc904a952aeeac extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
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
$arguments4['eval'] = 'trim';
$arguments4['size'] = 32;
$arguments4['maxCharacters'] = NULL;
$arguments4['minimum'] = NULL;
$arguments4['maximum'] = NULL;
$arguments4['placeholder'] = NULL;
$arguments4['name'] = 'headtitle';
$arguments4['label'] = 'Header';
$arguments4['maxCharacters'] = 255;

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper
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
$arguments6['validate'] = 'trim';
$arguments6['size'] = 1;
$arguments6['multiple'] = false;
$arguments6['minItems'] = 0;
$arguments6['maxItems'] = 1;
$arguments6['itemListStyle'] = NULL;
$arguments6['selectedListStyle'] = NULL;
$arguments6['items'] = NULL;
$arguments6['emptyOption'] = false;
$arguments6['translateCsvItems'] = NULL;
$arguments6['itemsProcFunc'] = NULL;
$arguments6['renderType'] = 'selectSingle';
$arguments6['showIconTable'] = false;
$arguments6['name'] = 'type';
$arguments6['label'] = 'type';
$arguments6['items'] = 'h1, h2, h3';

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

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
$arguments8['name'] = 'descs';
$arguments8['label'] = 'Text';
$arguments8['maxCharacters'] = 255;

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

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
$arguments1['id'] = 'home_example';
$arguments1['label'] = 'home_example';
$arguments1['description'] = 'home_example';

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
$output10 = '';

$output10 .= '
    <h1>Content Element</h1>
    title : ';
$array11 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headtitle', $array11)]);

$output10 .= ' <br>
    Type : ';
$array12 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array12)]);

$output10 .= ' <br>
    description : ';
$array13 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('descs', $array13)]);

$output10 .= '<br>
';

return $output10;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output14 = '';

$output14 .= '
    <div class="head_title">
       <h1>Konakt</h1>
    </div>
    <div class="content ';
$array15 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('scolor', $array15)]);

$output14 .= '-border">
        <span class="body_text"> ';
$array16 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array16)]);

$output14 .= ' </span>
        <span class="path ';
$array17 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('scolor', $array17)]);

$output14 .= '-path" style="float: right;">
            <i class="fa fa-arrow-right white-color" aria-hidden="true"></i>
        </span>
    </div>
    <div class="head_desc">
        ';
$array18 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('descs', $array18)]);

$output14 .= '
    </div>
';

return $output14;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output19 = '';

$output19 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['name'] = NULL;
$arguments20['name'] = 'Default';

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output19 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['name'] = NULL;
$arguments28['label'] = NULL;
$arguments28['default'] = NULL;
$arguments28['required'] = false;
$arguments28['exclude'] = false;
$arguments28['transform'] = NULL;
$arguments28['enabled'] = true;
$arguments28['requestUpdate'] = false;
$arguments28['displayCond'] = NULL;
$arguments28['inherit'] = true;
$arguments28['inheritEmpty'] = true;
$arguments28['clear'] = false;
$arguments28['variables'] = array (
);
$arguments28['extensionName'] = NULL;
$arguments28['config'] = array (
);
$arguments28['eval'] = 'trim';
$arguments28['size'] = 32;
$arguments28['maxCharacters'] = NULL;
$arguments28['minimum'] = NULL;
$arguments28['maximum'] = NULL;
$arguments28['placeholder'] = NULL;
$arguments28['name'] = 'headtitle';
$arguments28['label'] = 'Header';
$arguments28['maxCharacters'] = 255;

$output27 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['name'] = NULL;
$arguments30['label'] = NULL;
$arguments30['default'] = NULL;
$arguments30['required'] = false;
$arguments30['exclude'] = false;
$arguments30['transform'] = NULL;
$arguments30['enabled'] = true;
$arguments30['requestUpdate'] = false;
$arguments30['displayCond'] = NULL;
$arguments30['inherit'] = true;
$arguments30['inheritEmpty'] = true;
$arguments30['clear'] = false;
$arguments30['variables'] = array (
);
$arguments30['extensionName'] = NULL;
$arguments30['config'] = array (
);
$arguments30['validate'] = 'trim';
$arguments30['size'] = 1;
$arguments30['multiple'] = false;
$arguments30['minItems'] = 0;
$arguments30['maxItems'] = 1;
$arguments30['itemListStyle'] = NULL;
$arguments30['selectedListStyle'] = NULL;
$arguments30['items'] = NULL;
$arguments30['emptyOption'] = false;
$arguments30['translateCsvItems'] = NULL;
$arguments30['itemsProcFunc'] = NULL;
$arguments30['renderType'] = 'selectSingle';
$arguments30['showIconTable'] = false;
$arguments30['name'] = 'type';
$arguments30['label'] = 'type';
$arguments30['items'] = 'h1, h2, h3';

$output27 .= FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output27 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['name'] = NULL;
$arguments32['label'] = NULL;
$arguments32['default'] = NULL;
$arguments32['required'] = false;
$arguments32['exclude'] = false;
$arguments32['transform'] = NULL;
$arguments32['enabled'] = true;
$arguments32['requestUpdate'] = false;
$arguments32['displayCond'] = NULL;
$arguments32['inherit'] = true;
$arguments32['inheritEmpty'] = true;
$arguments32['clear'] = false;
$arguments32['variables'] = array (
);
$arguments32['extensionName'] = NULL;
$arguments32['config'] = array (
);
$arguments32['eval'] = 'trim';
$arguments32['size'] = 32;
$arguments32['maxCharacters'] = NULL;
$arguments32['minimum'] = NULL;
$arguments32['maximum'] = NULL;
$arguments32['placeholder'] = NULL;
$arguments32['name'] = 'descs';
$arguments32['label'] = 'Text';
$arguments32['maxCharacters'] = 255;

$output27 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output27 .= '
    ';
return $output27;
};
$arguments25 = array();
$arguments25['id'] = NULL;
$arguments25['label'] = NULL;
$arguments25['description'] = NULL;
$arguments25['enabled'] = true;
$arguments25['variables'] = array (
);
$arguments25['options'] = NULL;
$arguments25['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments25['extensionName'] = NULL;
$arguments25['id'] = 'home_example';
$arguments25['label'] = 'home_example';
$arguments25['description'] = 'home_example';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output24 .= '
';
return $output24;
};
$arguments22 = array();
$arguments22['name'] = NULL;
$arguments22['name'] = 'Configuration';

$output19 .= NULL;

$output19 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
    <h1>Content Element</h1>
    title : ';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headtitle', $array37)]);

$output36 .= ' <br>
    Type : ';
$array38 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array38)]);

$output36 .= ' <br>
    description : ';
$array39 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('descs', $array39)]);

$output36 .= '<br>
';
return $output36;
};
$arguments34 = array();
$arguments34['name'] = NULL;
$arguments34['name'] = 'Preview';

$output19 .= NULL;

$output19 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
    <div class="head_title">
       <h1>Konakt</h1>
    </div>
    <div class="content ';
$array43 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('scolor', $array43)]);

$output42 .= '-border">
        <span class="body_text"> ';
$array44 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array44)]);

$output42 .= ' </span>
        <span class="path ';
$array45 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('scolor', $array45)]);

$output42 .= '-path" style="float: right;">
            <i class="fa fa-arrow-right white-color" aria-hidden="true"></i>
        </span>
    </div>
    <div class="head_desc">
        ';
$array46 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('descs', $array46)]);

$output42 .= '
    </div>
';
return $output42;
};
$arguments40 = array();
$arguments40['name'] = NULL;
$arguments40['name'] = 'Main';

$output19 .= NULL;

$output19 .= '

';

return $output19;
}


}
#
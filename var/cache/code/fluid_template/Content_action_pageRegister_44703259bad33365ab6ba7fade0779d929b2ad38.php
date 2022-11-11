<?php

class Content_action_pageRegister_44703259bad33365ab6ba7fade0779d929b2ad38 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments4['name'] = 'registerText';
$arguments4['label'] = 'Register Text';
$arguments4['maxCharacters'] = 255;

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Wizard\LinkViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['label'] = 'Select link';
$arguments10['hideParent'] = false;
$arguments10['variables'] = array (
);
$arguments10['extensionName'] = NULL;
$arguments10['activeTab'] = 'file';
$arguments10['width'] = 500;
$arguments10['height'] = 500;
$arguments10['allowedExtensions'] = false;
$arguments10['blindLinkOptions'] = '';
$arguments10['blindLinkFields'] = '';

$output9 .= FluidTYPO3\Flux\ViewHelpers\Wizard\LinkViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
        ';
return $output9;
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
$arguments6['name'] = 'registerTarget';
$arguments6['label'] = 'Register Button';
// Rendering Array
$array8 = array();
$array8['renderType'] = 'inputLink';
$arguments6['config'] = $array8;

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

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
$arguments1['id'] = 'page_register';
$arguments1['label'] = 'page_register';
$arguments1['description'] = 'page_register';

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

return '
    <h1>Anmelden :</h1>
';
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output12 = '';

$output12 .= '
    <div class="grid-right">
        <div class="register-msg">
            <p>';
$array13 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('registerText', $array13)]);

$output12 .= '</p>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return '<button class="favorite styled" type="button">MITGLID WERDEN</button>';
};
$arguments14 = array();
$arguments14['parameter'] = NULL;
$arguments14['target'] = '';
$arguments14['class'] = '';
$arguments14['title'] = '';
$arguments14['language'] = NULL;
$arguments14['additionalParams'] = '';
$arguments14['additionalAttributes'] = array (
);
$arguments14['useCacheHash'] = NULL;
$arguments14['addQueryString'] = false;
$arguments14['addQueryStringMethod'] = 'GET';
$arguments14['addQueryStringExclude'] = '';
$arguments14['absolute'] = false;
$arguments14['parts-as'] = 'typoLinkParts';
$array16 = array (
);$arguments14['parameter'] = $renderingContext->getVariableProvider()->getByPath('registerTarget', $array16);

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output12 .= '
        </div>
    </div>
';

return $output12;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output17 = '';

$output17 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['name'] = NULL;
$arguments18['name'] = 'Default';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output17 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['name'] = NULL;
$arguments26['label'] = NULL;
$arguments26['default'] = NULL;
$arguments26['required'] = false;
$arguments26['exclude'] = false;
$arguments26['transform'] = NULL;
$arguments26['enabled'] = true;
$arguments26['requestUpdate'] = false;
$arguments26['displayCond'] = NULL;
$arguments26['inherit'] = true;
$arguments26['inheritEmpty'] = true;
$arguments26['clear'] = false;
$arguments26['variables'] = array (
);
$arguments26['extensionName'] = NULL;
$arguments26['config'] = array (
);
$arguments26['eval'] = 'trim';
$arguments26['size'] = 32;
$arguments26['maxCharacters'] = NULL;
$arguments26['minimum'] = NULL;
$arguments26['maximum'] = NULL;
$arguments26['placeholder'] = NULL;
$arguments26['name'] = 'registerText';
$arguments26['label'] = 'Register Text';
$arguments26['maxCharacters'] = 255;

$output25 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Wizard\LinkViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['label'] = 'Select link';
$arguments32['hideParent'] = false;
$arguments32['variables'] = array (
);
$arguments32['extensionName'] = NULL;
$arguments32['activeTab'] = 'file';
$arguments32['width'] = 500;
$arguments32['height'] = 500;
$arguments32['allowedExtensions'] = false;
$arguments32['blindLinkOptions'] = '';
$arguments32['blindLinkFields'] = '';

$output31 .= FluidTYPO3\Flux\ViewHelpers\Wizard\LinkViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
        ';
return $output31;
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
$arguments28['name'] = 'registerTarget';
$arguments28['label'] = 'Register Button';
// Rendering Array
$array30 = array();
$array30['renderType'] = 'inputLink';
$arguments28['config'] = $array30;

$output25 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output25 .= '
    ';
return $output25;
};
$arguments23 = array();
$arguments23['id'] = NULL;
$arguments23['label'] = NULL;
$arguments23['description'] = NULL;
$arguments23['enabled'] = true;
$arguments23['variables'] = array (
);
$arguments23['options'] = NULL;
$arguments23['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments23['extensionName'] = NULL;
$arguments23['id'] = 'page_register';
$arguments23['label'] = 'page_register';
$arguments23['description'] = 'page_register';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '
';
return $output22;
};
$arguments20 = array();
$arguments20['name'] = NULL;
$arguments20['name'] = 'Configuration';

$output17 .= NULL;

$output17 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return '
    <h1>Anmelden :</h1>
';
};
$arguments34 = array();
$arguments34['name'] = NULL;
$arguments34['name'] = 'Preview';

$output17 .= NULL;

$output17 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
    <div class="grid-right">
        <div class="register-msg">
            <p>';
$array39 = array (
);
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('registerText', $array39)]);

$output38 .= '</p>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return '<button class="favorite styled" type="button">MITGLID WERDEN</button>';
};
$arguments40 = array();
$arguments40['parameter'] = NULL;
$arguments40['target'] = '';
$arguments40['class'] = '';
$arguments40['title'] = '';
$arguments40['language'] = NULL;
$arguments40['additionalParams'] = '';
$arguments40['additionalAttributes'] = array (
);
$arguments40['useCacheHash'] = NULL;
$arguments40['addQueryString'] = false;
$arguments40['addQueryStringMethod'] = 'GET';
$arguments40['addQueryStringExclude'] = '';
$arguments40['absolute'] = false;
$arguments40['parts-as'] = 'typoLinkParts';
$array42 = array (
);$arguments40['parameter'] = $renderingContext->getVariableProvider()->getByPath('registerTarget', $array42);

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output38 .= '
        </div>
    </div>
';
return $output38;
};
$arguments36 = array();
$arguments36['name'] = NULL;
$arguments36['name'] = 'Main';

$output17 .= NULL;

$output17 .= '

';

return $output17;
}


}
#
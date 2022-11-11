<?php

class Content_action_page_646ade06ac46ac451d60bc703fc99e6fe2907aad extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['name'] = NULL;
$arguments12['label'] = NULL;
$arguments12['default'] = NULL;
$arguments12['required'] = false;
$arguments12['exclude'] = false;
$arguments12['transform'] = NULL;
$arguments12['enabled'] = true;
$arguments12['requestUpdate'] = false;
$arguments12['displayCond'] = NULL;
$arguments12['inherit'] = true;
$arguments12['inheritEmpty'] = true;
$arguments12['clear'] = false;
$arguments12['variables'] = array (
);
$arguments12['extensionName'] = NULL;
$arguments12['config'] = array (
);
$arguments12['eval'] = 'trim';
$arguments12['size'] = 32;
$arguments12['maxCharacters'] = NULL;
$arguments12['minimum'] = NULL;
$arguments12['maximum'] = NULL;
$arguments12['placeholder'] = NULL;
$arguments12['name'] = 'joinText';
$arguments12['label'] = 'Join Text';
$arguments12['maxCharacters'] = 255;

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Wizard\LinkViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['label'] = 'Select link';
$arguments18['hideParent'] = false;
$arguments18['variables'] = array (
);
$arguments18['extensionName'] = NULL;
$arguments18['activeTab'] = 'file';
$arguments18['width'] = 500;
$arguments18['height'] = 500;
$arguments18['allowedExtensions'] = false;
$arguments18['blindLinkOptions'] = '';
$arguments18['blindLinkFields'] = '';

$output17 .= FluidTYPO3\Flux\ViewHelpers\Wizard\LinkViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
            ';
return $output17;
};
$arguments14 = array();
$arguments14['name'] = NULL;
$arguments14['label'] = NULL;
$arguments14['default'] = NULL;
$arguments14['required'] = false;
$arguments14['exclude'] = false;
$arguments14['transform'] = NULL;
$arguments14['enabled'] = true;
$arguments14['requestUpdate'] = false;
$arguments14['displayCond'] = NULL;
$arguments14['inherit'] = true;
$arguments14['inheritEmpty'] = true;
$arguments14['clear'] = false;
$arguments14['variables'] = array (
);
$arguments14['extensionName'] = NULL;
$arguments14['config'] = array (
);
$arguments14['eval'] = 'trim';
$arguments14['size'] = 32;
$arguments14['maxCharacters'] = NULL;
$arguments14['minimum'] = NULL;
$arguments14['maximum'] = NULL;
$arguments14['placeholder'] = NULL;
$arguments14['name'] = 'joinTarget';
$arguments14['label'] = 'Join Button';
// Rendering Array
$array16 = array();
$array16['renderType'] = 'inputLink';
$arguments14['config'] = $array16;

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

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
$arguments1['id'] = 'page_login';
$arguments1['label'] = 'page_login';
$arguments1['description'] = 'page_login';

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
$output20 = '';

$output20 .= '
    <h1>Anmelden :</h1>
    Title : ';
$array21 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array21)]);

$output20 .= ' <br>
    Button Regestrieren : ';
$array22 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array22)]);

$output20 .= ' <br>
    Desc : ';
$array23 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array23)]);

$output20 .= ' <br>
    Button Mitglied : ';
$array24 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array24)]);

$output20 .= ' <br>
';

return $output20;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output25 = '';

$output25 .= '
    <div class="grid-right">
        <div class="register-msg">
            <p>';
$array26 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('registerText', $array26)]);

$output25 .= '</p>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return '<button class="favorite styled" type="button">HIER REGISTRIEREN</button>';
};
$arguments27 = array();
$arguments27['parameter'] = NULL;
$arguments27['target'] = '';
$arguments27['class'] = '';
$arguments27['title'] = '';
$arguments27['language'] = NULL;
$arguments27['additionalParams'] = '';
$arguments27['additionalAttributes'] = array (
);
$arguments27['useCacheHash'] = NULL;
$arguments27['addQueryString'] = false;
$arguments27['addQueryStringMethod'] = 'GET';
$arguments27['addQueryStringExclude'] = '';
$arguments27['absolute'] = false;
$arguments27['parts-as'] = 'typoLinkParts';
$array29 = array (
);$arguments27['parameter'] = $renderingContext->getVariableProvider()->getByPath('registerTarget', $array29);

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output25 .= '
        </div>
        <div class="join-msg">
            <p>';
$array30 = array (
);
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('joinText', $array30)]);

$output25 .= '</p>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return '<button class="favorite styled" type="button">MITGLIED WERDEN</button>';
};
$arguments31 = array();
$arguments31['parameter'] = NULL;
$arguments31['target'] = '';
$arguments31['class'] = '';
$arguments31['title'] = '';
$arguments31['language'] = NULL;
$arguments31['additionalParams'] = '';
$arguments31['additionalAttributes'] = array (
);
$arguments31['useCacheHash'] = NULL;
$arguments31['addQueryString'] = false;
$arguments31['addQueryStringMethod'] = 'GET';
$arguments31['addQueryStringExclude'] = '';
$arguments31['absolute'] = false;
$arguments31['parts-as'] = 'typoLinkParts';
$array33 = array (
);$arguments31['parameter'] = $renderingContext->getVariableProvider()->getByPath('joinTarget', $array33);

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output25 .= '
        </div>
    </div>
';

return $output25;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output34 = '';

$output34 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['name'] = NULL;
$arguments35['name'] = 'Default';

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output34 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['name'] = NULL;
$arguments43['label'] = NULL;
$arguments43['default'] = NULL;
$arguments43['required'] = false;
$arguments43['exclude'] = false;
$arguments43['transform'] = NULL;
$arguments43['enabled'] = true;
$arguments43['requestUpdate'] = false;
$arguments43['displayCond'] = NULL;
$arguments43['inherit'] = true;
$arguments43['inheritEmpty'] = true;
$arguments43['clear'] = false;
$arguments43['variables'] = array (
);
$arguments43['extensionName'] = NULL;
$arguments43['config'] = array (
);
$arguments43['eval'] = 'trim';
$arguments43['size'] = 32;
$arguments43['maxCharacters'] = NULL;
$arguments43['minimum'] = NULL;
$arguments43['maximum'] = NULL;
$arguments43['placeholder'] = NULL;
$arguments43['name'] = 'registerText';
$arguments43['label'] = 'Register Text';
$arguments43['maxCharacters'] = 255;

$output42 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Wizard\LinkViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['label'] = 'Select link';
$arguments49['hideParent'] = false;
$arguments49['variables'] = array (
);
$arguments49['extensionName'] = NULL;
$arguments49['activeTab'] = 'file';
$arguments49['width'] = 500;
$arguments49['height'] = 500;
$arguments49['allowedExtensions'] = false;
$arguments49['blindLinkOptions'] = '';
$arguments49['blindLinkFields'] = '';

$output48 .= FluidTYPO3\Flux\ViewHelpers\Wizard\LinkViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
        ';
return $output48;
};
$arguments45 = array();
$arguments45['name'] = NULL;
$arguments45['label'] = NULL;
$arguments45['default'] = NULL;
$arguments45['required'] = false;
$arguments45['exclude'] = false;
$arguments45['transform'] = NULL;
$arguments45['enabled'] = true;
$arguments45['requestUpdate'] = false;
$arguments45['displayCond'] = NULL;
$arguments45['inherit'] = true;
$arguments45['inheritEmpty'] = true;
$arguments45['clear'] = false;
$arguments45['variables'] = array (
);
$arguments45['extensionName'] = NULL;
$arguments45['config'] = array (
);
$arguments45['eval'] = 'trim';
$arguments45['size'] = 32;
$arguments45['maxCharacters'] = NULL;
$arguments45['minimum'] = NULL;
$arguments45['maximum'] = NULL;
$arguments45['placeholder'] = NULL;
$arguments45['name'] = 'registerTarget';
$arguments45['label'] = 'Register Button';
// Rendering Array
$array47 = array();
$array47['renderType'] = 'inputLink';
$arguments45['config'] = $array47;

$output42 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output42 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['name'] = NULL;
$arguments51['label'] = NULL;
$arguments51['default'] = NULL;
$arguments51['required'] = false;
$arguments51['exclude'] = false;
$arguments51['transform'] = NULL;
$arguments51['enabled'] = true;
$arguments51['requestUpdate'] = false;
$arguments51['displayCond'] = NULL;
$arguments51['inherit'] = true;
$arguments51['inheritEmpty'] = true;
$arguments51['clear'] = false;
$arguments51['variables'] = array (
);
$arguments51['extensionName'] = NULL;
$arguments51['config'] = array (
);
$arguments51['eval'] = 'trim';
$arguments51['size'] = 32;
$arguments51['maxCharacters'] = NULL;
$arguments51['minimum'] = NULL;
$arguments51['maximum'] = NULL;
$arguments51['placeholder'] = NULL;
$arguments51['name'] = 'joinText';
$arguments51['label'] = 'Join Text';
$arguments51['maxCharacters'] = 255;

$output42 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output42 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Wizard\LinkViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['label'] = 'Select link';
$arguments57['hideParent'] = false;
$arguments57['variables'] = array (
);
$arguments57['extensionName'] = NULL;
$arguments57['activeTab'] = 'file';
$arguments57['width'] = 500;
$arguments57['height'] = 500;
$arguments57['allowedExtensions'] = false;
$arguments57['blindLinkOptions'] = '';
$arguments57['blindLinkFields'] = '';

$output56 .= FluidTYPO3\Flux\ViewHelpers\Wizard\LinkViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
            ';
return $output56;
};
$arguments53 = array();
$arguments53['name'] = NULL;
$arguments53['label'] = NULL;
$arguments53['default'] = NULL;
$arguments53['required'] = false;
$arguments53['exclude'] = false;
$arguments53['transform'] = NULL;
$arguments53['enabled'] = true;
$arguments53['requestUpdate'] = false;
$arguments53['displayCond'] = NULL;
$arguments53['inherit'] = true;
$arguments53['inheritEmpty'] = true;
$arguments53['clear'] = false;
$arguments53['variables'] = array (
);
$arguments53['extensionName'] = NULL;
$arguments53['config'] = array (
);
$arguments53['eval'] = 'trim';
$arguments53['size'] = 32;
$arguments53['maxCharacters'] = NULL;
$arguments53['minimum'] = NULL;
$arguments53['maximum'] = NULL;
$arguments53['placeholder'] = NULL;
$arguments53['name'] = 'joinTarget';
$arguments53['label'] = 'Join Button';
// Rendering Array
$array55 = array();
$array55['renderType'] = 'inputLink';
$arguments53['config'] = $array55;

$output42 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output42 .= '
    ';
return $output42;
};
$arguments40 = array();
$arguments40['id'] = NULL;
$arguments40['label'] = NULL;
$arguments40['description'] = NULL;
$arguments40['enabled'] = true;
$arguments40['variables'] = array (
);
$arguments40['options'] = NULL;
$arguments40['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments40['extensionName'] = NULL;
$arguments40['id'] = 'page_login';
$arguments40['label'] = 'page_login';
$arguments40['description'] = 'page_login';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output39 .= '
';
return $output39;
};
$arguments37 = array();
$arguments37['name'] = NULL;
$arguments37['name'] = 'Configuration';

$output34 .= NULL;

$output34 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
    <h1>Anmelden :</h1>
    Title : ';
$array62 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array62)]);

$output61 .= ' <br>
    Button Regestrieren : ';
$array63 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array63)]);

$output61 .= ' <br>
    Desc : ';
$array64 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array64)]);

$output61 .= ' <br>
    Button Mitglied : ';
$array65 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('header', $array65)]);

$output61 .= ' <br>
';
return $output61;
};
$arguments59 = array();
$arguments59['name'] = NULL;
$arguments59['name'] = 'Preview';

$output34 .= NULL;

$output34 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
    <div class="grid-right">
        <div class="register-msg">
            <p>';
$array69 = array (
);
$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('registerText', $array69)]);

$output68 .= '</p>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return '<button class="favorite styled" type="button">HIER REGISTRIEREN</button>';
};
$arguments70 = array();
$arguments70['parameter'] = NULL;
$arguments70['target'] = '';
$arguments70['class'] = '';
$arguments70['title'] = '';
$arguments70['language'] = NULL;
$arguments70['additionalParams'] = '';
$arguments70['additionalAttributes'] = array (
);
$arguments70['useCacheHash'] = NULL;
$arguments70['addQueryString'] = false;
$arguments70['addQueryStringMethod'] = 'GET';
$arguments70['addQueryStringExclude'] = '';
$arguments70['absolute'] = false;
$arguments70['parts-as'] = 'typoLinkParts';
$array72 = array (
);$arguments70['parameter'] = $renderingContext->getVariableProvider()->getByPath('registerTarget', $array72);

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output68 .= '
        </div>
        <div class="join-msg">
            <p>';
$array73 = array (
);
$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('joinText', $array73)]);

$output68 .= '</p>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return '<button class="favorite styled" type="button">MITGLIED WERDEN</button>';
};
$arguments74 = array();
$arguments74['parameter'] = NULL;
$arguments74['target'] = '';
$arguments74['class'] = '';
$arguments74['title'] = '';
$arguments74['language'] = NULL;
$arguments74['additionalParams'] = '';
$arguments74['additionalAttributes'] = array (
);
$arguments74['useCacheHash'] = NULL;
$arguments74['addQueryString'] = false;
$arguments74['addQueryStringMethod'] = 'GET';
$arguments74['addQueryStringExclude'] = '';
$arguments74['absolute'] = false;
$arguments74['parts-as'] = 'typoLinkParts';
$array76 = array (
);$arguments74['parameter'] = $renderingContext->getVariableProvider()->getByPath('joinTarget', $array76);

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output68 .= '
        </div>
    </div>
';
return $output68;
};
$arguments66 = array();
$arguments66['name'] = NULL;
$arguments66['name'] = 'Main';

$output34 .= NULL;

$output34 .= '

';

return $output34;
}


}
#
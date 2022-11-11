<?php

class Content_action_formContent_356cc4042b1cf24ee7593869220a0933784ac488 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'formContent';
$arguments1['label'] = 'formContent';
$arguments1['description'] = 'formContent';

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
$output6 = '';

$output6 .= '
    <h1>Kontakt :</h1>
    title : ';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headtitle', $array7)]);

$output6 .= ' <br>
    Type : ';
$array8 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array8)]);

$output6 .= ' <br>
    Name : ';
$array9 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('Name', $array9)]);

$output6 .= '<br>
    E-Mail : ';
$array10 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('E-Mail', $array10)]);

$output6 .= '<br>
    Betreff : ';
$array11 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('Betreff', $array11)]);

$output6 .= '<br>
';

return $output6;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output12 = '';

$output12 .= '
  <div class="row">
    ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\FormViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['section'] = NULL;
$arguments34['partial'] = NULL;
$arguments34['delegate'] = NULL;
$arguments34['renderable'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['optional'] = false;
$arguments34['default'] = NULL;
$arguments34['contentAs'] = NULL;
$arguments34['debug'] = true;
$array36 = array (
);$arguments34['partial'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage.templateName', $array36);
// Rendering Array
$array37 = array();
$array38 = array (
);$array37['page'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage', $array38);
$arguments34['arguments'] = $array37;

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
            <div class="actions">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['section'] = NULL;
$arguments39['partial'] = NULL;
$arguments39['delegate'] = NULL;
$arguments39['renderable'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['optional'] = false;
$arguments39['default'] = NULL;
$arguments39['contentAs'] = NULL;
$arguments39['debug'] = true;
$arguments39['partial'] = 'Form/Navigation';
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['form'] = $renderingContext->getVariableProvider()->getByPath('form', $array42);
$arguments39['arguments'] = $array41;

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output33 .= '
            </div>
        ';
return $output33;
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['aria'] = NULL;
$arguments17['action'] = NULL;
$arguments17['arguments'] = array (
);
$arguments17['controller'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['pluginName'] = NULL;
$arguments17['pageUid'] = NULL;
$arguments17['object'] = NULL;
$arguments17['pageType'] = 0;
$arguments17['noCache'] = false;
$arguments17['noCacheHash'] = NULL;
$arguments17['section'] = '';
$arguments17['format'] = '';
$arguments17['additionalParams'] = array (
);
$arguments17['absolute'] = false;
$arguments17['addQueryString'] = false;
$arguments17['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments17['addQueryStringMethod'] = 'GET';
$arguments17['fieldNamePrefix'] = NULL;
$arguments17['actionUri'] = NULL;
$arguments17['objectName'] = NULL;
$arguments17['hiddenFieldClassName'] = NULL;
$arguments17['enctype'] = NULL;
$arguments17['method'] = NULL;
$arguments17['name'] = NULL;
$arguments17['onreset'] = NULL;
$arguments17['onsubmit'] = NULL;
$arguments17['target'] = NULL;
$arguments17['novalidate'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$array19 = array (
);$arguments17['object'] = $renderingContext->getVariableProvider()->getByPath('form', $array19);
$array20 = array (
);$arguments17['action'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.controllerAction', $array20);
$array21 = array (
);$arguments17['method'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.httpMethod', $array21);
$array22 = array (
);$arguments17['id'] = $renderingContext->getVariableProvider()->getByPath('form.identifier', $array22);
$array23 = array (
);$arguments17['section'] = $renderingContext->getVariableProvider()->getByPath('form.identifier', $array23);
$array24 = array (
);$arguments17['enctype'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.httpEnctype', $array24);
// Rendering Boolean node
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['0'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.addQueryString', $array26);

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
$array28 = array (
);$arguments17['argumentsToBeExcludedFromQueryString'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.argumentsToBeExcludedFromQueryString', $array28);
$array29 = array (
);$arguments17['additionalParams'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.additionalParams', $array29);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['element'] = NULL;
$arguments30['property'] = NULL;
$arguments30['renderingOptionProperty'] = NULL;
$array32 = array (
);$arguments30['element'] = $renderingContext->getVariableProvider()->getByPath('form', $array32);
$arguments30['property'] = 'fluidAdditionalAttributes';
$arguments17['additionalAttributes'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output16 .= TYPO3\CMS\Form\ViewHelpers\FormViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
    ';
return $output16;
};
$arguments13 = array();
$arguments13['renderable'] = NULL;
$array15 = array (
);$arguments13['renderable'] = $renderingContext->getVariableProvider()->getByPath('form', $array15);

$output12 .= TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
</div>
';

return $output12;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output43 = '';

$output43 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['name'] = NULL;
$arguments44['name'] = 'Default';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output43 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['name'] = NULL;
$arguments52['label'] = NULL;
$arguments52['default'] = NULL;
$arguments52['required'] = false;
$arguments52['exclude'] = false;
$arguments52['transform'] = NULL;
$arguments52['enabled'] = true;
$arguments52['requestUpdate'] = false;
$arguments52['displayCond'] = NULL;
$arguments52['inherit'] = true;
$arguments52['inheritEmpty'] = true;
$arguments52['clear'] = false;
$arguments52['variables'] = array (
);
$arguments52['extensionName'] = NULL;
$arguments52['config'] = array (
);
$arguments52['validate'] = 'trim';
$arguments52['size'] = 1;
$arguments52['multiple'] = false;
$arguments52['minItems'] = 0;
$arguments52['maxItems'] = 1;
$arguments52['itemListStyle'] = NULL;
$arguments52['selectedListStyle'] = NULL;
$arguments52['items'] = NULL;
$arguments52['emptyOption'] = false;
$arguments52['translateCsvItems'] = NULL;
$arguments52['itemsProcFunc'] = NULL;
$arguments52['renderType'] = 'selectSingle';
$arguments52['showIconTable'] = false;
$arguments52['name'] = 'type';
$arguments52['label'] = 'type';
$arguments52['items'] = 'Allgemein, Allgemein, Allgemein';

$output51 .= FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
    ';
return $output51;
};
$arguments49 = array();
$arguments49['id'] = NULL;
$arguments49['label'] = NULL;
$arguments49['description'] = NULL;
$arguments49['enabled'] = true;
$arguments49['variables'] = array (
);
$arguments49['options'] = NULL;
$arguments49['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments49['extensionName'] = NULL;
$arguments49['id'] = 'formContent';
$arguments49['label'] = 'formContent';
$arguments49['description'] = 'formContent';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output48 .= '
';
return $output48;
};
$arguments46 = array();
$arguments46['name'] = NULL;
$arguments46['name'] = 'Configuration';

$output43 .= NULL;

$output43 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
    <h1>Kontakt :</h1>
    title : ';
$array57 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headtitle', $array57)]);

$output56 .= ' <br>
    Type : ';
$array58 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array58)]);

$output56 .= ' <br>
    Name : ';
$array59 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('Name', $array59)]);

$output56 .= '<br>
    E-Mail : ';
$array60 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('E-Mail', $array60)]);

$output56 .= '<br>
    Betreff : ';
$array61 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('Betreff', $array61)]);

$output56 .= '<br>
';
return $output56;
};
$arguments54 = array();
$arguments54['name'] = NULL;
$arguments54['name'] = 'Preview';

$output43 .= NULL;

$output43 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
  <div class="row">
    ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\FormViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['section'] = NULL;
$arguments86['partial'] = NULL;
$arguments86['delegate'] = NULL;
$arguments86['renderable'] = NULL;
$arguments86['arguments'] = array (
);
$arguments86['optional'] = false;
$arguments86['default'] = NULL;
$arguments86['contentAs'] = NULL;
$arguments86['debug'] = true;
$array88 = array (
);$arguments86['partial'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage.templateName', $array88);
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['page'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage', $array90);
$arguments86['arguments'] = $array89;

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
            <div class="actions">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['section'] = NULL;
$arguments91['partial'] = NULL;
$arguments91['delegate'] = NULL;
$arguments91['renderable'] = NULL;
$arguments91['arguments'] = array (
);
$arguments91['optional'] = false;
$arguments91['default'] = NULL;
$arguments91['contentAs'] = NULL;
$arguments91['debug'] = true;
$arguments91['partial'] = 'Form/Navigation';
// Rendering Array
$array93 = array();
$array94 = array (
);$array93['form'] = $renderingContext->getVariableProvider()->getByPath('form', $array94);
$arguments91['arguments'] = $array93;

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output85 .= '
            </div>
        ';
return $output85;
};
$arguments69 = array();
$arguments69['additionalAttributes'] = NULL;
$arguments69['data'] = NULL;
$arguments69['aria'] = NULL;
$arguments69['action'] = NULL;
$arguments69['arguments'] = array (
);
$arguments69['controller'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['pluginName'] = NULL;
$arguments69['pageUid'] = NULL;
$arguments69['object'] = NULL;
$arguments69['pageType'] = 0;
$arguments69['noCache'] = false;
$arguments69['noCacheHash'] = NULL;
$arguments69['section'] = '';
$arguments69['format'] = '';
$arguments69['additionalParams'] = array (
);
$arguments69['absolute'] = false;
$arguments69['addQueryString'] = false;
$arguments69['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments69['addQueryStringMethod'] = 'GET';
$arguments69['fieldNamePrefix'] = NULL;
$arguments69['actionUri'] = NULL;
$arguments69['objectName'] = NULL;
$arguments69['hiddenFieldClassName'] = NULL;
$arguments69['enctype'] = NULL;
$arguments69['method'] = NULL;
$arguments69['name'] = NULL;
$arguments69['onreset'] = NULL;
$arguments69['onsubmit'] = NULL;
$arguments69['target'] = NULL;
$arguments69['novalidate'] = NULL;
$arguments69['class'] = NULL;
$arguments69['dir'] = NULL;
$arguments69['id'] = NULL;
$arguments69['lang'] = NULL;
$arguments69['style'] = NULL;
$arguments69['title'] = NULL;
$arguments69['accesskey'] = NULL;
$arguments69['tabindex'] = NULL;
$arguments69['onclick'] = NULL;
$array71 = array (
);$arguments69['object'] = $renderingContext->getVariableProvider()->getByPath('form', $array71);
$array72 = array (
);$arguments69['action'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.controllerAction', $array72);
$array73 = array (
);$arguments69['method'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.httpMethod', $array73);
$array74 = array (
);$arguments69['id'] = $renderingContext->getVariableProvider()->getByPath('form.identifier', $array74);
$array75 = array (
);$arguments69['section'] = $renderingContext->getVariableProvider()->getByPath('form.identifier', $array75);
$array76 = array (
);$arguments69['enctype'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.httpEnctype', $array76);
// Rendering Boolean node
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['0'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.addQueryString', $array78);

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments69['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression79(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$array80 = array (
);$arguments69['argumentsToBeExcludedFromQueryString'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.argumentsToBeExcludedFromQueryString', $array80);
$array81 = array (
);$arguments69['additionalParams'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.additionalParams', $array81);
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['element'] = NULL;
$arguments82['property'] = NULL;
$arguments82['renderingOptionProperty'] = NULL;
$array84 = array (
);$arguments82['element'] = $renderingContext->getVariableProvider()->getByPath('form', $array84);
$arguments82['property'] = 'fluidAdditionalAttributes';
$arguments69['additionalAttributes'] = TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output68 .= TYPO3\CMS\Form\ViewHelpers\FormViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output68 .= '
    ';
return $output68;
};
$arguments65 = array();
$arguments65['renderable'] = NULL;
$array67 = array (
);$arguments65['renderable'] = $renderingContext->getVariableProvider()->getByPath('form', $array67);

$output64 .= TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
</div>
';
return $output64;
};
$arguments62 = array();
$arguments62['name'] = NULL;
$arguments62['name'] = 'Main';

$output43 .= NULL;

$output43 .= '

';

return $output43;
}


}
#
<?php

class Content_action_contentEvents_099719fb72d61aa8c7801cb99640119f0a267fee extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    <!-- ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['value'] = NULL;
$arguments4['value'] = 'common';
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output3 .= FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

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
$arguments6['name'] = 'events_input';
$arguments6['label'] = 'events input';
$arguments6['maxCharacters'] = 255;

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
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
$arguments8['validate'] = 'trim';
$arguments8['cols'] = 85;
$arguments8['rows'] = 10;
$arguments8['defaultExtras'] = '';
$arguments8['enableRichText'] = false;
$arguments8['renderType'] = '';
$arguments8['format'] = '';
$arguments8['richtextConfiguration'] = NULL;
$arguments8['placeholder'] = NULL;
$arguments8['name'] = 'pastEventsDesc';
$arguments8['label'] = 'Past Events Description';
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array10['0'] = 'true';

$expression11 = function($context) {return TRUE;};
$arguments8['enableRichText'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

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
$arguments1['id'] = 'page_events';
$arguments1['label'] = 'page_events';
$arguments1['description'] = 'page_events';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= ' -->
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['value'] = NULL;
$arguments15['value'] = 'common';
$renderChildrenClosure16 = ($arguments15['value'] !== null) ? function() use ($arguments15) { return $arguments15['value']; } : $renderChildrenClosure16;
$output14 .= FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['name'] = NULL;
$arguments17['label'] = NULL;
$arguments17['default'] = NULL;
$arguments17['required'] = false;
$arguments17['exclude'] = false;
$arguments17['transform'] = NULL;
$arguments17['enabled'] = true;
$arguments17['requestUpdate'] = false;
$arguments17['displayCond'] = NULL;
$arguments17['inherit'] = true;
$arguments17['inheritEmpty'] = true;
$arguments17['clear'] = false;
$arguments17['variables'] = array (
);
$arguments17['extensionName'] = NULL;
$arguments17['config'] = array (
);
$arguments17['eval'] = 'trim';
$arguments17['size'] = 32;
$arguments17['maxCharacters'] = NULL;
$arguments17['minimum'] = NULL;
$arguments17['maximum'] = NULL;
$arguments17['placeholder'] = NULL;
$arguments17['name'] = 'events_input';
$arguments17['label'] = 'Events Header';
$arguments17['maxCharacters'] = 255;

$output14 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output14 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['name'] = NULL;
$arguments19['label'] = NULL;
$arguments19['default'] = NULL;
$arguments19['required'] = false;
$arguments19['exclude'] = false;
$arguments19['transform'] = NULL;
$arguments19['enabled'] = true;
$arguments19['requestUpdate'] = false;
$arguments19['displayCond'] = NULL;
$arguments19['inherit'] = true;
$arguments19['inheritEmpty'] = true;
$arguments19['clear'] = false;
$arguments19['variables'] = array (
);
$arguments19['extensionName'] = NULL;
$arguments19['config'] = array (
);
$arguments19['validate'] = 'trim';
$arguments19['cols'] = 85;
$arguments19['rows'] = 10;
$arguments19['defaultExtras'] = '';
$arguments19['enableRichText'] = false;
$arguments19['renderType'] = '';
$arguments19['format'] = '';
$arguments19['richtextConfiguration'] = NULL;
$arguments19['placeholder'] = NULL;
$arguments19['name'] = 'events_txt';
$arguments19['label'] = 'Events Description';
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array21['0'] = 'true';

$expression22 = function($context) {return TRUE;};
$arguments19['enableRichText'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);

$output14 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output14 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['name'] = NULL;
$arguments23['label'] = NULL;
$arguments23['default'] = NULL;
$arguments23['required'] = false;
$arguments23['exclude'] = false;
$arguments23['transform'] = NULL;
$arguments23['enabled'] = true;
$arguments23['requestUpdate'] = false;
$arguments23['displayCond'] = NULL;
$arguments23['inherit'] = true;
$arguments23['inheritEmpty'] = true;
$arguments23['clear'] = false;
$arguments23['variables'] = array (
);
$arguments23['extensionName'] = NULL;
$arguments23['config'] = array (
);
$arguments23['eval'] = 'trim';
$arguments23['size'] = 32;
$arguments23['maxCharacters'] = NULL;
$arguments23['minimum'] = NULL;
$arguments23['maximum'] = NULL;
$arguments23['placeholder'] = NULL;
$arguments23['name'] = 'events_title';
$arguments23['label'] = 'Past Events';
$arguments23['maxCharacters'] = 255;

$output14 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output14 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['name'] = NULL;
$arguments25['label'] = NULL;
$arguments25['default'] = NULL;
$arguments25['required'] = false;
$arguments25['exclude'] = false;
$arguments25['transform'] = NULL;
$arguments25['enabled'] = true;
$arguments25['requestUpdate'] = false;
$arguments25['displayCond'] = NULL;
$arguments25['inherit'] = true;
$arguments25['inheritEmpty'] = true;
$arguments25['clear'] = false;
$arguments25['variables'] = array (
);
$arguments25['extensionName'] = NULL;
$arguments25['config'] = array (
);
$arguments25['validate'] = 'trim';
$arguments25['cols'] = 85;
$arguments25['rows'] = 10;
$arguments25['defaultExtras'] = '';
$arguments25['enableRichText'] = false;
$arguments25['renderType'] = '';
$arguments25['format'] = '';
$arguments25['richtextConfiguration'] = NULL;
$arguments25['placeholder'] = NULL;
$arguments25['name'] = 'eventsEesc';
$arguments25['label'] = 'Past Events Description';
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array27['0'] = 'true';

$expression28 = function($context) {return TRUE;};
$arguments25['enableRichText'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);

$output14 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output14 .= '
           

        ';
return $output14;
};
$arguments12 = array();
$arguments12['id'] = NULL;
$arguments12['label'] = NULL;
$arguments12['description'] = NULL;
$arguments12['enabled'] = true;
$arguments12['variables'] = array (
);
$arguments12['options'] = NULL;
$arguments12['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments12['extensionName'] = NULL;
$arguments12['id'] = 'content_register';
$arguments12['label'] = 'content register';
$arguments12['description'] = 'content register';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

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

';
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output29 = '';

$output29 .= '

            <div class="title_sidebar">';
$array30 = array (
);
$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('events_input', $array30)]);

$output29 .= '</div>
            <div class="events_txt">';
$array31 = array (
);
$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('events_txt', $array31)]);

$output29 .= '</div>
            <div class="title_sidebar">';
$array32 = array (
);
$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('events_title', $array32)]);

$output29 .= '</div>
            <div class="events_desc">';
$array33 = array (
);
$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('events_desc', $array33)]);

$output29 .= '</div>

';

return $output29;
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
    <!-- ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['value'] = NULL;
$arguments43['value'] = 'common';
$renderChildrenClosure44 = ($arguments43['value'] !== null) ? function() use ($arguments43) { return $arguments43['value']; } : $renderChildrenClosure44;
$output42 .= FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
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
$arguments45['name'] = 'events_input';
$arguments45['label'] = 'events input';
$arguments45['maxCharacters'] = 255;

$output42 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output42 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['name'] = NULL;
$arguments47['label'] = NULL;
$arguments47['default'] = NULL;
$arguments47['required'] = false;
$arguments47['exclude'] = false;
$arguments47['transform'] = NULL;
$arguments47['enabled'] = true;
$arguments47['requestUpdate'] = false;
$arguments47['displayCond'] = NULL;
$arguments47['inherit'] = true;
$arguments47['inheritEmpty'] = true;
$arguments47['clear'] = false;
$arguments47['variables'] = array (
);
$arguments47['extensionName'] = NULL;
$arguments47['config'] = array (
);
$arguments47['validate'] = 'trim';
$arguments47['cols'] = 85;
$arguments47['rows'] = 10;
$arguments47['defaultExtras'] = '';
$arguments47['enableRichText'] = false;
$arguments47['renderType'] = '';
$arguments47['format'] = '';
$arguments47['richtextConfiguration'] = NULL;
$arguments47['placeholder'] = NULL;
$arguments47['name'] = 'pastEventsDesc';
$arguments47['label'] = 'Past Events Description';
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array49['0'] = 'true';

$expression50 = function($context) {return TRUE;};
$arguments47['enableRichText'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);

$output42 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

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
$arguments40['id'] = 'page_events';
$arguments40['label'] = 'page_events';
$arguments40['description'] = 'page_events';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output39 .= ' -->
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['value'] = NULL;
$arguments54['value'] = 'common';
$renderChildrenClosure55 = ($arguments54['value'] !== null) ? function() use ($arguments54) { return $arguments54['value']; } : $renderChildrenClosure55;
$output53 .= FluidTYPO3\Flux\ViewHelpers\Form\Option\GroupViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['name'] = NULL;
$arguments56['label'] = NULL;
$arguments56['default'] = NULL;
$arguments56['required'] = false;
$arguments56['exclude'] = false;
$arguments56['transform'] = NULL;
$arguments56['enabled'] = true;
$arguments56['requestUpdate'] = false;
$arguments56['displayCond'] = NULL;
$arguments56['inherit'] = true;
$arguments56['inheritEmpty'] = true;
$arguments56['clear'] = false;
$arguments56['variables'] = array (
);
$arguments56['extensionName'] = NULL;
$arguments56['config'] = array (
);
$arguments56['eval'] = 'trim';
$arguments56['size'] = 32;
$arguments56['maxCharacters'] = NULL;
$arguments56['minimum'] = NULL;
$arguments56['maximum'] = NULL;
$arguments56['placeholder'] = NULL;
$arguments56['name'] = 'events_input';
$arguments56['label'] = 'Events Header';
$arguments56['maxCharacters'] = 255;

$output53 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output53 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['name'] = NULL;
$arguments58['label'] = NULL;
$arguments58['default'] = NULL;
$arguments58['required'] = false;
$arguments58['exclude'] = false;
$arguments58['transform'] = NULL;
$arguments58['enabled'] = true;
$arguments58['requestUpdate'] = false;
$arguments58['displayCond'] = NULL;
$arguments58['inherit'] = true;
$arguments58['inheritEmpty'] = true;
$arguments58['clear'] = false;
$arguments58['variables'] = array (
);
$arguments58['extensionName'] = NULL;
$arguments58['config'] = array (
);
$arguments58['validate'] = 'trim';
$arguments58['cols'] = 85;
$arguments58['rows'] = 10;
$arguments58['defaultExtras'] = '';
$arguments58['enableRichText'] = false;
$arguments58['renderType'] = '';
$arguments58['format'] = '';
$arguments58['richtextConfiguration'] = NULL;
$arguments58['placeholder'] = NULL;
$arguments58['name'] = 'events_txt';
$arguments58['label'] = 'Events Description';
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array60['0'] = 'true';

$expression61 = function($context) {return TRUE;};
$arguments58['enableRichText'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);

$output53 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output53 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['name'] = NULL;
$arguments62['label'] = NULL;
$arguments62['default'] = NULL;
$arguments62['required'] = false;
$arguments62['exclude'] = false;
$arguments62['transform'] = NULL;
$arguments62['enabled'] = true;
$arguments62['requestUpdate'] = false;
$arguments62['displayCond'] = NULL;
$arguments62['inherit'] = true;
$arguments62['inheritEmpty'] = true;
$arguments62['clear'] = false;
$arguments62['variables'] = array (
);
$arguments62['extensionName'] = NULL;
$arguments62['config'] = array (
);
$arguments62['eval'] = 'trim';
$arguments62['size'] = 32;
$arguments62['maxCharacters'] = NULL;
$arguments62['minimum'] = NULL;
$arguments62['maximum'] = NULL;
$arguments62['placeholder'] = NULL;
$arguments62['name'] = 'events_title';
$arguments62['label'] = 'Past Events';
$arguments62['maxCharacters'] = 255;

$output53 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output53 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['name'] = NULL;
$arguments64['label'] = NULL;
$arguments64['default'] = NULL;
$arguments64['required'] = false;
$arguments64['exclude'] = false;
$arguments64['transform'] = NULL;
$arguments64['enabled'] = true;
$arguments64['requestUpdate'] = false;
$arguments64['displayCond'] = NULL;
$arguments64['inherit'] = true;
$arguments64['inheritEmpty'] = true;
$arguments64['clear'] = false;
$arguments64['variables'] = array (
);
$arguments64['extensionName'] = NULL;
$arguments64['config'] = array (
);
$arguments64['validate'] = 'trim';
$arguments64['cols'] = 85;
$arguments64['rows'] = 10;
$arguments64['defaultExtras'] = '';
$arguments64['enableRichText'] = false;
$arguments64['renderType'] = '';
$arguments64['format'] = '';
$arguments64['richtextConfiguration'] = NULL;
$arguments64['placeholder'] = NULL;
$arguments64['name'] = 'eventsEesc';
$arguments64['label'] = 'Past Events Description';
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array66['0'] = 'true';

$expression67 = function($context) {return TRUE;};
$arguments64['enableRichText'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);

$output53 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output53 .= '
           

        ';
return $output53;
};
$arguments51 = array();
$arguments51['id'] = NULL;
$arguments51['label'] = NULL;
$arguments51['description'] = NULL;
$arguments51['enabled'] = true;
$arguments51['variables'] = array (
);
$arguments51['options'] = NULL;
$arguments51['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments51['extensionName'] = NULL;
$arguments51['id'] = 'content_register';
$arguments51['label'] = 'content register';
$arguments51['description'] = 'content register';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

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
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return '

';
};
$arguments68 = array();
$arguments68['name'] = NULL;
$arguments68['name'] = 'Preview';

$output34 .= NULL;

$output34 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '

            <div class="title_sidebar">';
$array73 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('events_input', $array73)]);

$output72 .= '</div>
            <div class="events_txt">';
$array74 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('events_txt', $array74)]);

$output72 .= '</div>
            <div class="title_sidebar">';
$array75 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('events_title', $array75)]);

$output72 .= '</div>
            <div class="events_desc">';
$array76 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('events_desc', $array76)]);

$output72 .= '</div>

';
return $output72;
};
$arguments70 = array();
$arguments70['name'] = NULL;
$arguments70['name'] = 'Main';

$output34 .= NULL;

$output34 .= '


';

return $output34;
}


}
#
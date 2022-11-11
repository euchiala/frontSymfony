<?php

class Content_action_profile_b06fd6647c34a159f2eb48d75143c9d032fc3789 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments4['name'] = 'title';
$arguments4['label'] = 'Header';

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
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
$arguments6['table'] = 'sys_file_reference';
$arguments6['condition'] = NULL;
$arguments6['mm'] = NULL;
$arguments6['foreignField'] = 'uid_foreign';
$arguments6['foreignLabel'] = 'uid_local';
$arguments6['foreignSelector'] = 'uid_local';
$arguments6['foreignSortby'] = 'sorting_foreign';
$arguments6['foreignDefaultSortby'] = '';
$arguments6['foreignTableField'] = 'tablenames';
$arguments6['foreignUnique'] = NULL;
$arguments6['symmetricField'] = '';
$arguments6['symmetricLabel'] = '';
$arguments6['symmetricSortby'] = '';
$arguments6['localizationMode'] = 'select';
$arguments6['localizeChildrenAtParentLocalization'] = true;
$arguments6['disableMovingChildrenWithParent'] = false;
$arguments6['showThumbs'] = true;
$arguments6['matchFields'] = array (
);
$arguments6['oppositeField'] = '';
$arguments6['collapseAll'] = false;
$arguments6['expandSingle'] = false;
$arguments6['newRecordLinkAddTitle'] = true;
$arguments6['newRecordLinkPosition'] = 'top';
$arguments6['useCombination'] = false;
$arguments6['useSortable'] = true;
$arguments6['showPossibleLocalizationRecords'] = false;
$arguments6['showRemovedLocalizationRecords'] = false;
$arguments6['showAllLocalizationLink'] = false;
$arguments6['showSynchronizationLink'] = false;
$arguments6['enabledControls'] = false;
$arguments6['headerThumbnail'] = false;
$arguments6['foreignMatchFields'] = false;
$arguments6['foreignTypes'] = NULL;
$arguments6['levelLinksPosition'] = 'both';
$arguments6['allowedExtensions'] = 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg';
$arguments6['disallowedExtensions'] = '';
$arguments6['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$arguments6['cropVariants'] = NULL;
$arguments6['name'] = 'image1Sidebar';
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array8['0'] = 1;

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$arguments6['maxItems'] = 1;
$arguments6['minItems'] = 1;
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array10['0'] = 1;

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['collapseAll'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
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
$arguments12['validate'] = 'trim';
$arguments12['cols'] = 85;
$arguments12['rows'] = 10;
$arguments12['defaultExtras'] = '';
$arguments12['enableRichText'] = false;
$arguments12['renderType'] = '';
$arguments12['format'] = '';
$arguments12['richtextConfiguration'] = NULL;
$arguments12['placeholder'] = NULL;
$arguments12['name'] = 'descs';
$arguments12['label'] = 'Text';

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
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
$arguments14['validate'] = 'trim';
$arguments14['size'] = 1;
$arguments14['multiple'] = false;
$arguments14['minItems'] = 0;
$arguments14['maxItems'] = 1;
$arguments14['itemListStyle'] = NULL;
$arguments14['selectedListStyle'] = NULL;
$arguments14['items'] = NULL;
$arguments14['emptyOption'] = false;
$arguments14['translateCsvItems'] = NULL;
$arguments14['itemsProcFunc'] = NULL;
$arguments14['table'] = 'sys_file_reference';
$arguments14['condition'] = NULL;
$arguments14['mm'] = NULL;
$arguments14['foreignField'] = 'uid_foreign';
$arguments14['foreignLabel'] = 'uid_local';
$arguments14['foreignSelector'] = 'uid_local';
$arguments14['foreignSortby'] = 'sorting_foreign';
$arguments14['foreignDefaultSortby'] = '';
$arguments14['foreignTableField'] = 'tablenames';
$arguments14['foreignUnique'] = NULL;
$arguments14['symmetricField'] = '';
$arguments14['symmetricLabel'] = '';
$arguments14['symmetricSortby'] = '';
$arguments14['localizationMode'] = 'select';
$arguments14['localizeChildrenAtParentLocalization'] = true;
$arguments14['disableMovingChildrenWithParent'] = false;
$arguments14['showThumbs'] = true;
$arguments14['matchFields'] = array (
);
$arguments14['oppositeField'] = '';
$arguments14['collapseAll'] = false;
$arguments14['expandSingle'] = false;
$arguments14['newRecordLinkAddTitle'] = true;
$arguments14['newRecordLinkPosition'] = 'top';
$arguments14['useCombination'] = false;
$arguments14['useSortable'] = true;
$arguments14['showPossibleLocalizationRecords'] = false;
$arguments14['showRemovedLocalizationRecords'] = false;
$arguments14['showAllLocalizationLink'] = false;
$arguments14['showSynchronizationLink'] = false;
$arguments14['enabledControls'] = false;
$arguments14['headerThumbnail'] = false;
$arguments14['foreignMatchFields'] = false;
$arguments14['foreignTypes'] = NULL;
$arguments14['levelLinksPosition'] = 'both';
$arguments14['allowedExtensions'] = 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg';
$arguments14['disallowedExtensions'] = '';
$arguments14['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$arguments14['cropVariants'] = NULL;
$arguments14['name'] = 'image2Sidebar';
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array16['0'] = 1;

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['maxItems'] = 1;
$arguments14['minItems'] = 1;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array18['0'] = 1;

$expression19 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['collapseAll'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

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
$arguments1['id'] = 'SideBar';
$arguments1['label'] = 'SideBar';
$arguments1['description'] = 'SideBar';

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
    <h1>Content Element</h1>
    title : ';
$array21 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array21)]);

$output20 .= ' <br>
    image title ';
$array22 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image1Sidebar', $array22)]);

$output20 .= '<br>
    description : ';
$array23 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('descs', $array23)]);

$output20 .= '<br>
';

return $output20;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output24 = '';

$output24 .= '
    <div class="row">
    <div class="col-md-3">
            <div class="navbar">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['data'] = NULL;
$arguments25['typoscriptObjectPath'] = NULL;
$arguments25['currentValueKey'] = NULL;
$arguments25['table'] = '';
$arguments25['typoscriptObjectPath'] = 'lib.header_menu';
$renderChildrenClosure26 = ($arguments25['data'] !== null) ? function() use ($arguments25) { return $arguments25['data']; } : $renderChildrenClosure26;
$output24 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
            </div>
    </div>
    <div class="col-md-9">
        
    </div>
    </div>
';

return $output24;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output27 = '';

$output27 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['name'] = NULL;
$arguments28['name'] = 'Default';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output27 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['name'] = NULL;
$arguments36['label'] = NULL;
$arguments36['default'] = NULL;
$arguments36['required'] = false;
$arguments36['exclude'] = false;
$arguments36['transform'] = NULL;
$arguments36['enabled'] = true;
$arguments36['requestUpdate'] = false;
$arguments36['displayCond'] = NULL;
$arguments36['inherit'] = true;
$arguments36['inheritEmpty'] = true;
$arguments36['clear'] = false;
$arguments36['variables'] = array (
);
$arguments36['extensionName'] = NULL;
$arguments36['config'] = array (
);
$arguments36['eval'] = 'trim';
$arguments36['size'] = 32;
$arguments36['maxCharacters'] = NULL;
$arguments36['minimum'] = NULL;
$arguments36['maximum'] = NULL;
$arguments36['placeholder'] = NULL;
$arguments36['name'] = 'title';
$arguments36['label'] = 'Header';

$output35 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['name'] = NULL;
$arguments38['label'] = NULL;
$arguments38['default'] = NULL;
$arguments38['required'] = false;
$arguments38['exclude'] = false;
$arguments38['transform'] = NULL;
$arguments38['enabled'] = true;
$arguments38['requestUpdate'] = false;
$arguments38['displayCond'] = NULL;
$arguments38['inherit'] = true;
$arguments38['inheritEmpty'] = true;
$arguments38['clear'] = false;
$arguments38['variables'] = array (
);
$arguments38['extensionName'] = NULL;
$arguments38['config'] = array (
);
$arguments38['validate'] = 'trim';
$arguments38['size'] = 1;
$arguments38['multiple'] = false;
$arguments38['minItems'] = 0;
$arguments38['maxItems'] = 1;
$arguments38['itemListStyle'] = NULL;
$arguments38['selectedListStyle'] = NULL;
$arguments38['items'] = NULL;
$arguments38['emptyOption'] = false;
$arguments38['translateCsvItems'] = NULL;
$arguments38['itemsProcFunc'] = NULL;
$arguments38['table'] = 'sys_file_reference';
$arguments38['condition'] = NULL;
$arguments38['mm'] = NULL;
$arguments38['foreignField'] = 'uid_foreign';
$arguments38['foreignLabel'] = 'uid_local';
$arguments38['foreignSelector'] = 'uid_local';
$arguments38['foreignSortby'] = 'sorting_foreign';
$arguments38['foreignDefaultSortby'] = '';
$arguments38['foreignTableField'] = 'tablenames';
$arguments38['foreignUnique'] = NULL;
$arguments38['symmetricField'] = '';
$arguments38['symmetricLabel'] = '';
$arguments38['symmetricSortby'] = '';
$arguments38['localizationMode'] = 'select';
$arguments38['localizeChildrenAtParentLocalization'] = true;
$arguments38['disableMovingChildrenWithParent'] = false;
$arguments38['showThumbs'] = true;
$arguments38['matchFields'] = array (
);
$arguments38['oppositeField'] = '';
$arguments38['collapseAll'] = false;
$arguments38['expandSingle'] = false;
$arguments38['newRecordLinkAddTitle'] = true;
$arguments38['newRecordLinkPosition'] = 'top';
$arguments38['useCombination'] = false;
$arguments38['useSortable'] = true;
$arguments38['showPossibleLocalizationRecords'] = false;
$arguments38['showRemovedLocalizationRecords'] = false;
$arguments38['showAllLocalizationLink'] = false;
$arguments38['showSynchronizationLink'] = false;
$arguments38['enabledControls'] = false;
$arguments38['headerThumbnail'] = false;
$arguments38['foreignMatchFields'] = false;
$arguments38['foreignTypes'] = NULL;
$arguments38['levelLinksPosition'] = 'both';
$arguments38['allowedExtensions'] = 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg';
$arguments38['disallowedExtensions'] = '';
$arguments38['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$arguments38['cropVariants'] = NULL;
$arguments38['name'] = 'image1Sidebar';
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array40['0'] = 1;

$expression41 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments38['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression41(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments38['maxItems'] = 1;
$arguments38['minItems'] = 1;
// Rendering Boolean node
// Rendering Array
$array42 = array();
$array42['0'] = 1;

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments38['collapseAll'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)
					),
					$renderingContext
				);

$output35 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output35 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['name'] = NULL;
$arguments44['label'] = NULL;
$arguments44['default'] = NULL;
$arguments44['required'] = false;
$arguments44['exclude'] = false;
$arguments44['transform'] = NULL;
$arguments44['enabled'] = true;
$arguments44['requestUpdate'] = false;
$arguments44['displayCond'] = NULL;
$arguments44['inherit'] = true;
$arguments44['inheritEmpty'] = true;
$arguments44['clear'] = false;
$arguments44['variables'] = array (
);
$arguments44['extensionName'] = NULL;
$arguments44['config'] = array (
);
$arguments44['validate'] = 'trim';
$arguments44['cols'] = 85;
$arguments44['rows'] = 10;
$arguments44['defaultExtras'] = '';
$arguments44['enableRichText'] = false;
$arguments44['renderType'] = '';
$arguments44['format'] = '';
$arguments44['richtextConfiguration'] = NULL;
$arguments44['placeholder'] = NULL;
$arguments44['name'] = 'descs';
$arguments44['label'] = 'Text';

$output35 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output35 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['name'] = NULL;
$arguments46['label'] = NULL;
$arguments46['default'] = NULL;
$arguments46['required'] = false;
$arguments46['exclude'] = false;
$arguments46['transform'] = NULL;
$arguments46['enabled'] = true;
$arguments46['requestUpdate'] = false;
$arguments46['displayCond'] = NULL;
$arguments46['inherit'] = true;
$arguments46['inheritEmpty'] = true;
$arguments46['clear'] = false;
$arguments46['variables'] = array (
);
$arguments46['extensionName'] = NULL;
$arguments46['config'] = array (
);
$arguments46['validate'] = 'trim';
$arguments46['size'] = 1;
$arguments46['multiple'] = false;
$arguments46['minItems'] = 0;
$arguments46['maxItems'] = 1;
$arguments46['itemListStyle'] = NULL;
$arguments46['selectedListStyle'] = NULL;
$arguments46['items'] = NULL;
$arguments46['emptyOption'] = false;
$arguments46['translateCsvItems'] = NULL;
$arguments46['itemsProcFunc'] = NULL;
$arguments46['table'] = 'sys_file_reference';
$arguments46['condition'] = NULL;
$arguments46['mm'] = NULL;
$arguments46['foreignField'] = 'uid_foreign';
$arguments46['foreignLabel'] = 'uid_local';
$arguments46['foreignSelector'] = 'uid_local';
$arguments46['foreignSortby'] = 'sorting_foreign';
$arguments46['foreignDefaultSortby'] = '';
$arguments46['foreignTableField'] = 'tablenames';
$arguments46['foreignUnique'] = NULL;
$arguments46['symmetricField'] = '';
$arguments46['symmetricLabel'] = '';
$arguments46['symmetricSortby'] = '';
$arguments46['localizationMode'] = 'select';
$arguments46['localizeChildrenAtParentLocalization'] = true;
$arguments46['disableMovingChildrenWithParent'] = false;
$arguments46['showThumbs'] = true;
$arguments46['matchFields'] = array (
);
$arguments46['oppositeField'] = '';
$arguments46['collapseAll'] = false;
$arguments46['expandSingle'] = false;
$arguments46['newRecordLinkAddTitle'] = true;
$arguments46['newRecordLinkPosition'] = 'top';
$arguments46['useCombination'] = false;
$arguments46['useSortable'] = true;
$arguments46['showPossibleLocalizationRecords'] = false;
$arguments46['showRemovedLocalizationRecords'] = false;
$arguments46['showAllLocalizationLink'] = false;
$arguments46['showSynchronizationLink'] = false;
$arguments46['enabledControls'] = false;
$arguments46['headerThumbnail'] = false;
$arguments46['foreignMatchFields'] = false;
$arguments46['foreignTypes'] = NULL;
$arguments46['levelLinksPosition'] = 'both';
$arguments46['allowedExtensions'] = 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg';
$arguments46['disallowedExtensions'] = '';
$arguments46['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$arguments46['cropVariants'] = NULL;
$arguments46['name'] = 'image2Sidebar';
// Rendering Boolean node
// Rendering Array
$array48 = array();
$array48['0'] = 1;

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments46['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);
$arguments46['maxItems'] = 1;
$arguments46['minItems'] = 1;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array50['0'] = 1;

$expression51 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments46['collapseAll'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);

$output35 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output35 .= '
    ';
return $output35;
};
$arguments33 = array();
$arguments33['id'] = NULL;
$arguments33['label'] = NULL;
$arguments33['description'] = NULL;
$arguments33['enabled'] = true;
$arguments33['variables'] = array (
);
$arguments33['options'] = NULL;
$arguments33['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments33['extensionName'] = NULL;
$arguments33['id'] = 'SideBar';
$arguments33['label'] = 'SideBar';
$arguments33['description'] = 'SideBar';

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= '
';
return $output32;
};
$arguments30 = array();
$arguments30['name'] = NULL;
$arguments30['name'] = 'Configuration';

$output27 .= NULL;

$output27 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
    <h1>Content Element</h1>
    title : ';
$array55 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array55)]);

$output54 .= ' <br>
    image title ';
$array56 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image1Sidebar', $array56)]);

$output54 .= '<br>
    description : ';
$array57 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('descs', $array57)]);

$output54 .= '<br>
';
return $output54;
};
$arguments52 = array();
$arguments52['name'] = NULL;
$arguments52['name'] = 'Preview';

$output27 .= NULL;

$output27 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
    <div class="row">
    <div class="col-md-3">
            <div class="navbar">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['data'] = NULL;
$arguments61['typoscriptObjectPath'] = NULL;
$arguments61['currentValueKey'] = NULL;
$arguments61['table'] = '';
$arguments61['typoscriptObjectPath'] = 'lib.header_menu';
$renderChildrenClosure62 = ($arguments61['data'] !== null) ? function() use ($arguments61) { return $arguments61['data']; } : $renderChildrenClosure62;
$output60 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
            </div>
    </div>
    <div class="col-md-9">
        
    </div>
    </div>
';
return $output60;
};
$arguments58 = array();
$arguments58['name'] = NULL;
$arguments58['name'] = 'Main';

$output27 .= NULL;

$output27 .= '
';

return $output27;
}


}
#
<?php

class Content_action_sideBar_9991f1ace32071aedd3f07d7c5d4719de471c2c5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
        <div class="title_sidebar">
        ';
$array27 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array27)]);

$output24 .= '
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['aria'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['alt'] = NULL;
$arguments33['ismap'] = NULL;
$arguments33['longdesc'] = NULL;
$arguments33['usemap'] = NULL;
$arguments33['loading'] = NULL;
$arguments33['src'] = '';
$arguments33['treatIdAsReference'] = false;
$arguments33['image'] = NULL;
$arguments33['crop'] = NULL;
$arguments33['cropVariant'] = 'default';
$arguments33['fileExtension'] = NULL;
$arguments33['width'] = NULL;
$arguments33['height'] = NULL;
$arguments33['minWidth'] = NULL;
$arguments33['minHeight'] = NULL;
$arguments33['maxWidth'] = NULL;
$arguments33['maxHeight'] = NULL;
$arguments33['absolute'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array35['0'] = 1;

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$array37 = array (
);$arguments33['src'] = $renderingContext->getVariableProvider()->getByPath('image.id', $array37);
$array38 = array (
);$arguments33['title'] = $renderingContext->getVariableProvider()->getByPath('image.title', $array38);
$array39 = array (
);$arguments33['alt'] = $renderingContext->getVariableProvider()->getByPath('image.alternative', $array39);

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '<br/>
        ';
return $output32;
};
$arguments28 = array();
$arguments28['each'] = NULL;
$arguments28['as'] = NULL;
$arguments28['key'] = NULL;
$arguments28['reverse'] = false;
$arguments28['iteration'] = NULL;
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['table'] = 'tt_content';
$arguments30['field'] = 'image';
$arguments30['record'] = NULL;
$arguments30['uid'] = NULL;
$arguments30['as'] = NULL;
$arguments30['asObjects'] = false;
$arguments30['field'] = 'image1Sidebar';
$arguments28['each'] = FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);
$arguments28['as'] = 'image';

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output24 .= '
        <div class="head_desc">
            ';
$array40 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('descs', $array40)]);

$output24 .= '
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['additionalAttributes'] = NULL;
$arguments46['data'] = NULL;
$arguments46['aria'] = NULL;
$arguments46['class'] = NULL;
$arguments46['dir'] = NULL;
$arguments46['id'] = NULL;
$arguments46['lang'] = NULL;
$arguments46['style'] = NULL;
$arguments46['title'] = NULL;
$arguments46['accesskey'] = NULL;
$arguments46['tabindex'] = NULL;
$arguments46['onclick'] = NULL;
$arguments46['alt'] = NULL;
$arguments46['ismap'] = NULL;
$arguments46['longdesc'] = NULL;
$arguments46['usemap'] = NULL;
$arguments46['loading'] = NULL;
$arguments46['src'] = '';
$arguments46['treatIdAsReference'] = false;
$arguments46['image'] = NULL;
$arguments46['crop'] = NULL;
$arguments46['cropVariant'] = 'default';
$arguments46['fileExtension'] = NULL;
$arguments46['width'] = NULL;
$arguments46['height'] = NULL;
$arguments46['minWidth'] = NULL;
$arguments46['minHeight'] = NULL;
$arguments46['maxWidth'] = NULL;
$arguments46['maxHeight'] = NULL;
$arguments46['absolute'] = false;
// Rendering Boolean node
// Rendering Array
$array48 = array();
$array48['0'] = 2;

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments46['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);
$array50 = array (
);$arguments46['src'] = $renderingContext->getVariableProvider()->getByPath('image2.id', $array50);
$array51 = array (
);$arguments46['title'] = $renderingContext->getVariableProvider()->getByPath('image2.title', $array51);
$array52 = array (
);$arguments46['alt'] = $renderingContext->getVariableProvider()->getByPath('image2.alternative', $array52);

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '<br/>
        ';
return $output45;
};
$arguments41 = array();
$arguments41['each'] = NULL;
$arguments41['as'] = NULL;
$arguments41['key'] = NULL;
$arguments41['reverse'] = false;
$arguments41['iteration'] = NULL;
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['table'] = 'tt_content';
$arguments43['field'] = 'image';
$arguments43['record'] = NULL;
$arguments43['uid'] = NULL;
$arguments43['as'] = NULL;
$arguments43['asObjects'] = false;
$arguments43['field'] = 'image2Sidebar';
$arguments41['each'] = FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);
$arguments41['as'] = 'image2';

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output24 .= '
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
$output53 = '';

$output53 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['name'] = NULL;
$arguments54['name'] = 'Default';

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output53 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
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
$arguments62['name'] = 'title';
$arguments62['label'] = 'Header';

$output61 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
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
$arguments64['size'] = 1;
$arguments64['multiple'] = false;
$arguments64['minItems'] = 0;
$arguments64['maxItems'] = 1;
$arguments64['itemListStyle'] = NULL;
$arguments64['selectedListStyle'] = NULL;
$arguments64['items'] = NULL;
$arguments64['emptyOption'] = false;
$arguments64['translateCsvItems'] = NULL;
$arguments64['itemsProcFunc'] = NULL;
$arguments64['table'] = 'sys_file_reference';
$arguments64['condition'] = NULL;
$arguments64['mm'] = NULL;
$arguments64['foreignField'] = 'uid_foreign';
$arguments64['foreignLabel'] = 'uid_local';
$arguments64['foreignSelector'] = 'uid_local';
$arguments64['foreignSortby'] = 'sorting_foreign';
$arguments64['foreignDefaultSortby'] = '';
$arguments64['foreignTableField'] = 'tablenames';
$arguments64['foreignUnique'] = NULL;
$arguments64['symmetricField'] = '';
$arguments64['symmetricLabel'] = '';
$arguments64['symmetricSortby'] = '';
$arguments64['localizationMode'] = 'select';
$arguments64['localizeChildrenAtParentLocalization'] = true;
$arguments64['disableMovingChildrenWithParent'] = false;
$arguments64['showThumbs'] = true;
$arguments64['matchFields'] = array (
);
$arguments64['oppositeField'] = '';
$arguments64['collapseAll'] = false;
$arguments64['expandSingle'] = false;
$arguments64['newRecordLinkAddTitle'] = true;
$arguments64['newRecordLinkPosition'] = 'top';
$arguments64['useCombination'] = false;
$arguments64['useSortable'] = true;
$arguments64['showPossibleLocalizationRecords'] = false;
$arguments64['showRemovedLocalizationRecords'] = false;
$arguments64['showAllLocalizationLink'] = false;
$arguments64['showSynchronizationLink'] = false;
$arguments64['enabledControls'] = false;
$arguments64['headerThumbnail'] = false;
$arguments64['foreignMatchFields'] = false;
$arguments64['foreignTypes'] = NULL;
$arguments64['levelLinksPosition'] = 'both';
$arguments64['allowedExtensions'] = 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg';
$arguments64['disallowedExtensions'] = '';
$arguments64['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$arguments64['cropVariants'] = NULL;
$arguments64['name'] = 'image1Sidebar';
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array66['0'] = 1;

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments64['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$arguments64['maxItems'] = 1;
$arguments64['minItems'] = 1;
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array68['0'] = 1;

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments64['collapseAll'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);

$output61 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output61 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['name'] = NULL;
$arguments70['label'] = NULL;
$arguments70['default'] = NULL;
$arguments70['required'] = false;
$arguments70['exclude'] = false;
$arguments70['transform'] = NULL;
$arguments70['enabled'] = true;
$arguments70['requestUpdate'] = false;
$arguments70['displayCond'] = NULL;
$arguments70['inherit'] = true;
$arguments70['inheritEmpty'] = true;
$arguments70['clear'] = false;
$arguments70['variables'] = array (
);
$arguments70['extensionName'] = NULL;
$arguments70['config'] = array (
);
$arguments70['validate'] = 'trim';
$arguments70['cols'] = 85;
$arguments70['rows'] = 10;
$arguments70['defaultExtras'] = '';
$arguments70['enableRichText'] = false;
$arguments70['renderType'] = '';
$arguments70['format'] = '';
$arguments70['richtextConfiguration'] = NULL;
$arguments70['placeholder'] = NULL;
$arguments70['name'] = 'descs';
$arguments70['label'] = 'Text';

$output61 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output61 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['name'] = NULL;
$arguments72['label'] = NULL;
$arguments72['default'] = NULL;
$arguments72['required'] = false;
$arguments72['exclude'] = false;
$arguments72['transform'] = NULL;
$arguments72['enabled'] = true;
$arguments72['requestUpdate'] = false;
$arguments72['displayCond'] = NULL;
$arguments72['inherit'] = true;
$arguments72['inheritEmpty'] = true;
$arguments72['clear'] = false;
$arguments72['variables'] = array (
);
$arguments72['extensionName'] = NULL;
$arguments72['config'] = array (
);
$arguments72['validate'] = 'trim';
$arguments72['size'] = 1;
$arguments72['multiple'] = false;
$arguments72['minItems'] = 0;
$arguments72['maxItems'] = 1;
$arguments72['itemListStyle'] = NULL;
$arguments72['selectedListStyle'] = NULL;
$arguments72['items'] = NULL;
$arguments72['emptyOption'] = false;
$arguments72['translateCsvItems'] = NULL;
$arguments72['itemsProcFunc'] = NULL;
$arguments72['table'] = 'sys_file_reference';
$arguments72['condition'] = NULL;
$arguments72['mm'] = NULL;
$arguments72['foreignField'] = 'uid_foreign';
$arguments72['foreignLabel'] = 'uid_local';
$arguments72['foreignSelector'] = 'uid_local';
$arguments72['foreignSortby'] = 'sorting_foreign';
$arguments72['foreignDefaultSortby'] = '';
$arguments72['foreignTableField'] = 'tablenames';
$arguments72['foreignUnique'] = NULL;
$arguments72['symmetricField'] = '';
$arguments72['symmetricLabel'] = '';
$arguments72['symmetricSortby'] = '';
$arguments72['localizationMode'] = 'select';
$arguments72['localizeChildrenAtParentLocalization'] = true;
$arguments72['disableMovingChildrenWithParent'] = false;
$arguments72['showThumbs'] = true;
$arguments72['matchFields'] = array (
);
$arguments72['oppositeField'] = '';
$arguments72['collapseAll'] = false;
$arguments72['expandSingle'] = false;
$arguments72['newRecordLinkAddTitle'] = true;
$arguments72['newRecordLinkPosition'] = 'top';
$arguments72['useCombination'] = false;
$arguments72['useSortable'] = true;
$arguments72['showPossibleLocalizationRecords'] = false;
$arguments72['showRemovedLocalizationRecords'] = false;
$arguments72['showAllLocalizationLink'] = false;
$arguments72['showSynchronizationLink'] = false;
$arguments72['enabledControls'] = false;
$arguments72['headerThumbnail'] = false;
$arguments72['foreignMatchFields'] = false;
$arguments72['foreignTypes'] = NULL;
$arguments72['levelLinksPosition'] = 'both';
$arguments72['allowedExtensions'] = 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg';
$arguments72['disallowedExtensions'] = '';
$arguments72['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$arguments72['cropVariants'] = NULL;
$arguments72['name'] = 'image2Sidebar';
// Rendering Boolean node
// Rendering Array
$array74 = array();
$array74['0'] = 1;

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments72['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)
					),
					$renderingContext
				);
$arguments72['maxItems'] = 1;
$arguments72['minItems'] = 1;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array76['0'] = 1;

$expression77 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments72['collapseAll'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);

$output61 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output61 .= '
    ';
return $output61;
};
$arguments59 = array();
$arguments59['id'] = NULL;
$arguments59['label'] = NULL;
$arguments59['description'] = NULL;
$arguments59['enabled'] = true;
$arguments59['variables'] = array (
);
$arguments59['options'] = NULL;
$arguments59['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments59['extensionName'] = NULL;
$arguments59['id'] = 'SideBar';
$arguments59['label'] = 'SideBar';
$arguments59['description'] = 'SideBar';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output58 .= '
';
return $output58;
};
$arguments56 = array();
$arguments56['name'] = NULL;
$arguments56['name'] = 'Configuration';

$output53 .= NULL;

$output53 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
    <h1>Content Element</h1>
    title : ';
$array81 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array81)]);

$output80 .= ' <br>
    image title ';
$array82 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image1Sidebar', $array82)]);

$output80 .= '<br>
    description : ';
$array83 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('descs', $array83)]);

$output80 .= '<br>
';
return $output80;
};
$arguments78 = array();
$arguments78['name'] = NULL;
$arguments78['name'] = 'Preview';

$output53 .= NULL;

$output53 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
    <div class="row">
        <div class="col-md-3">
    <div class="navbar">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['data'] = NULL;
$arguments87['typoscriptObjectPath'] = NULL;
$arguments87['currentValueKey'] = NULL;
$arguments87['table'] = '';
$arguments87['typoscriptObjectPath'] = 'lib.header_menu';
$renderChildrenClosure88 = ($arguments87['data'] !== null) ? function() use ($arguments87) { return $arguments87['data']; } : $renderChildrenClosure88;
$output86 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
    </div>
    </div>
    <div class="col-md-9">
        <div class="title_sidebar">
        ';
$array89 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('title', $array89)]);

$output86 .= '
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['aria'] = NULL;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['alt'] = NULL;
$arguments95['ismap'] = NULL;
$arguments95['longdesc'] = NULL;
$arguments95['usemap'] = NULL;
$arguments95['loading'] = NULL;
$arguments95['src'] = '';
$arguments95['treatIdAsReference'] = false;
$arguments95['image'] = NULL;
$arguments95['crop'] = NULL;
$arguments95['cropVariant'] = 'default';
$arguments95['fileExtension'] = NULL;
$arguments95['width'] = NULL;
$arguments95['height'] = NULL;
$arguments95['minWidth'] = NULL;
$arguments95['minHeight'] = NULL;
$arguments95['maxWidth'] = NULL;
$arguments95['maxHeight'] = NULL;
$arguments95['absolute'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array97['0'] = 1;

$expression98 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$array99 = array (
);$arguments95['src'] = $renderingContext->getVariableProvider()->getByPath('image.id', $array99);
$array100 = array (
);$arguments95['title'] = $renderingContext->getVariableProvider()->getByPath('image.title', $array100);
$array101 = array (
);$arguments95['alt'] = $renderingContext->getVariableProvider()->getByPath('image.alternative', $array101);

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '<br/>
        ';
return $output94;
};
$arguments90 = array();
$arguments90['each'] = NULL;
$arguments90['as'] = NULL;
$arguments90['key'] = NULL;
$arguments90['reverse'] = false;
$arguments90['iteration'] = NULL;
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['table'] = 'tt_content';
$arguments92['field'] = 'image';
$arguments92['record'] = NULL;
$arguments92['uid'] = NULL;
$arguments92['as'] = NULL;
$arguments92['asObjects'] = false;
$arguments92['field'] = 'image1Sidebar';
$arguments90['each'] = FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);
$arguments90['as'] = 'image';

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output86 .= '
        <div class="head_desc">
            ';
$array102 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('descs', $array102)]);

$output86 .= '
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['additionalAttributes'] = NULL;
$arguments108['data'] = NULL;
$arguments108['aria'] = NULL;
$arguments108['class'] = NULL;
$arguments108['dir'] = NULL;
$arguments108['id'] = NULL;
$arguments108['lang'] = NULL;
$arguments108['style'] = NULL;
$arguments108['title'] = NULL;
$arguments108['accesskey'] = NULL;
$arguments108['tabindex'] = NULL;
$arguments108['onclick'] = NULL;
$arguments108['alt'] = NULL;
$arguments108['ismap'] = NULL;
$arguments108['longdesc'] = NULL;
$arguments108['usemap'] = NULL;
$arguments108['loading'] = NULL;
$arguments108['src'] = '';
$arguments108['treatIdAsReference'] = false;
$arguments108['image'] = NULL;
$arguments108['crop'] = NULL;
$arguments108['cropVariant'] = 'default';
$arguments108['fileExtension'] = NULL;
$arguments108['width'] = NULL;
$arguments108['height'] = NULL;
$arguments108['minWidth'] = NULL;
$arguments108['minHeight'] = NULL;
$arguments108['maxWidth'] = NULL;
$arguments108['maxHeight'] = NULL;
$arguments108['absolute'] = false;
// Rendering Boolean node
// Rendering Array
$array110 = array();
$array110['0'] = 2;

$expression111 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments108['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)
					),
					$renderingContext
				);
$array112 = array (
);$arguments108['src'] = $renderingContext->getVariableProvider()->getByPath('image2.id', $array112);
$array113 = array (
);$arguments108['title'] = $renderingContext->getVariableProvider()->getByPath('image2.title', $array113);
$array114 = array (
);$arguments108['alt'] = $renderingContext->getVariableProvider()->getByPath('image2.alternative', $array114);

$output107 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '<br/>
        ';
return $output107;
};
$arguments103 = array();
$arguments103['each'] = NULL;
$arguments103['as'] = NULL;
$arguments103['key'] = NULL;
$arguments103['reverse'] = false;
$arguments103['iteration'] = NULL;
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['table'] = 'tt_content';
$arguments105['field'] = 'image';
$arguments105['record'] = NULL;
$arguments105['uid'] = NULL;
$arguments105['as'] = NULL;
$arguments105['asObjects'] = false;
$arguments105['field'] = 'image2Sidebar';
$arguments103['each'] = FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);
$arguments103['as'] = 'image2';

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output86 .= '
    </div>
    </div>
';
return $output86;
};
$arguments84 = array();
$arguments84['name'] = NULL;
$arguments84['name'] = 'Main';

$output53 .= NULL;

$output53 .= '
';

return $output53;
}


}
#
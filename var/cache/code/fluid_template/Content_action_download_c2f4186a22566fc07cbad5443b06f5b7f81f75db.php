<?php

class Content_action_download_c2f4186a22566fc07cbad5443b06f5b7f81f75db extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments4['name'] = 'descreption';
$arguments4['label'] = 'Text';

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
$arguments6['items'] = 'h1 , h2, h3';

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\CheckboxViewHelper
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
$arguments8['name'] = 'hideBorderChech';
$arguments8['label'] = 'Hide Border Checkbox';

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\CheckboxViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output3 .= '

        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
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
$arguments10['validate'] = 'trim';
$arguments10['size'] = 1;
$arguments10['multiple'] = false;
$arguments10['minItems'] = 0;
$arguments10['maxItems'] = 1;
$arguments10['itemListStyle'] = NULL;
$arguments10['selectedListStyle'] = NULL;
$arguments10['items'] = NULL;
$arguments10['emptyOption'] = false;
$arguments10['translateCsvItems'] = NULL;
$arguments10['itemsProcFunc'] = NULL;
$arguments10['table'] = 'sys_file_reference';
$arguments10['condition'] = NULL;
$arguments10['mm'] = NULL;
$arguments10['foreignField'] = 'uid_foreign';
$arguments10['foreignLabel'] = 'uid_local';
$arguments10['foreignSelector'] = 'uid_local';
$arguments10['foreignSortby'] = 'sorting_foreign';
$arguments10['foreignDefaultSortby'] = '';
$arguments10['foreignTableField'] = 'tablenames';
$arguments10['foreignUnique'] = NULL;
$arguments10['symmetricField'] = '';
$arguments10['symmetricLabel'] = '';
$arguments10['symmetricSortby'] = '';
$arguments10['localizationMode'] = 'select';
$arguments10['localizeChildrenAtParentLocalization'] = true;
$arguments10['disableMovingChildrenWithParent'] = false;
$arguments10['showThumbs'] = true;
$arguments10['matchFields'] = array (
);
$arguments10['oppositeField'] = '';
$arguments10['collapseAll'] = false;
$arguments10['expandSingle'] = false;
$arguments10['newRecordLinkAddTitle'] = true;
$arguments10['newRecordLinkPosition'] = 'top';
$arguments10['useCombination'] = false;
$arguments10['useSortable'] = true;
$arguments10['showPossibleLocalizationRecords'] = false;
$arguments10['showRemovedLocalizationRecords'] = false;
$arguments10['showAllLocalizationLink'] = false;
$arguments10['showSynchronizationLink'] = false;
$arguments10['enabledControls'] = false;
$arguments10['headerThumbnail'] = false;
$arguments10['foreignMatchFields'] = false;
$arguments10['foreignTypes'] = NULL;
$arguments10['levelLinksPosition'] = 'both';
$arguments10['allowedExtensions'] = 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg';
$arguments10['disallowedExtensions'] = '';
$arguments10['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$arguments10['cropVariants'] = NULL;
$arguments10['name'] = 'downloadFiles';
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array12['0'] = 1;

$expression13 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression13(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['minItems'] = 1;
$arguments10['maxItems'] = 70;
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array14['0'] = 1;

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['collapseAll'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments10['allowedExtensions'] = 'pdf,zip';

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

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
$arguments1['id'] = 'Download';
$arguments1['label'] = 'Download';
$arguments1['description'] = 'Download';

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
$output16 = '';

$output16 .= '
    description : ';
$array17 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('descreption', $array17)]);

$output16 .= '<br>
    Type :      <';
$array18 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array18)]);

$output16 .= '>';
$array19 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array19)]);

$output16 .= '</';
$array20 = array (
);
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array20)]);

$output16 .= '>
';

return $output16;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output21 = '';

$output21 .= '
  <div class="grid-btn ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('hideBorderChech', $array25);

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments22['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments22['then'] = 'bordershow';

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= ' "  >
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
            <a href="';
$array32 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.url', $array32)]);

$output31 .= '" target="_blank" rel="noopener noreferrer" >';
$array33 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.name', $array33)]);

$output31 .= ' (';
$array34 = array (
);
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.extension', $array34)]);

$output31 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Media\SizeViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['path'] = NULL;
$array39 = array (
);$arguments37['path'] = $renderingContext->getVariableProvider()->getByPath('file.url', $array39);
$renderChildrenClosure38 = ($arguments37['path'] !== null) ? function() use ($arguments37) { return $arguments37['path']; } : $renderChildrenClosure38;return FluidTYPO3\Vhs\ViewHelpers\Media\SizeViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);
};
$arguments35 = array();
$arguments35['value'] = NULL;
$arguments35['decimals'] = 0;
$arguments35['decimalSeparator'] = '.';
$arguments35['thousandsSeparator'] = ',';
$arguments35['units'] = NULL;
$arguments35['decimals'] = 1;
$renderChildrenClosure36 = ($arguments35['value'] !== null) ? function() use ($arguments35) { return $arguments35['value']; } : $renderChildrenClosure36;
$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output31 .= ' )</a>  
    ';
return $output31;
};
$arguments27 = array();
$arguments27['each'] = NULL;
$arguments27['as'] = NULL;
$arguments27['key'] = NULL;
$arguments27['reverse'] = false;
$arguments27['iteration'] = NULL;
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['table'] = 'tt_content';
$arguments29['field'] = 'image';
$arguments29['record'] = NULL;
$arguments29['uid'] = NULL;
$arguments29['as'] = NULL;
$arguments29['asObjects'] = false;
$arguments29['field'] = 'downloadFiles';
$arguments27['each'] = FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);
$arguments27['as'] = 'file';

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output21 .= '
</div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '<';
$array43 = array (
);
$output42 .= $renderingContext->getVariableProvider()->getByPath('type', $array43);

$output42 .= '>';
$array44 = array (
);
$output42 .= $renderingContext->getVariableProvider()->getByPath('type', $array44);

$output42 .= '</';
$array45 = array (
);
$output42 .= $renderingContext->getVariableProvider()->getByPath('type', $array45);

$output42 .= '>';
return $output42;
};
$arguments40 = array();
$arguments40['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output21 .= '
';

return $output21;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output46 = '';

$output46 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['name'] = NULL;
$arguments47['name'] = 'Default';

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output46 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
   
    ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['name'] = NULL;
$arguments55['label'] = NULL;
$arguments55['default'] = NULL;
$arguments55['required'] = false;
$arguments55['exclude'] = false;
$arguments55['transform'] = NULL;
$arguments55['enabled'] = true;
$arguments55['requestUpdate'] = false;
$arguments55['displayCond'] = NULL;
$arguments55['inherit'] = true;
$arguments55['inheritEmpty'] = true;
$arguments55['clear'] = false;
$arguments55['variables'] = array (
);
$arguments55['extensionName'] = NULL;
$arguments55['config'] = array (
);
$arguments55['eval'] = 'trim';
$arguments55['size'] = 32;
$arguments55['maxCharacters'] = NULL;
$arguments55['minimum'] = NULL;
$arguments55['maximum'] = NULL;
$arguments55['placeholder'] = NULL;
$arguments55['name'] = 'descreption';
$arguments55['label'] = 'Text';

$output54 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['name'] = NULL;
$arguments57['label'] = NULL;
$arguments57['default'] = NULL;
$arguments57['required'] = false;
$arguments57['exclude'] = false;
$arguments57['transform'] = NULL;
$arguments57['enabled'] = true;
$arguments57['requestUpdate'] = false;
$arguments57['displayCond'] = NULL;
$arguments57['inherit'] = true;
$arguments57['inheritEmpty'] = true;
$arguments57['clear'] = false;
$arguments57['variables'] = array (
);
$arguments57['extensionName'] = NULL;
$arguments57['config'] = array (
);
$arguments57['validate'] = 'trim';
$arguments57['size'] = 1;
$arguments57['multiple'] = false;
$arguments57['minItems'] = 0;
$arguments57['maxItems'] = 1;
$arguments57['itemListStyle'] = NULL;
$arguments57['selectedListStyle'] = NULL;
$arguments57['items'] = NULL;
$arguments57['emptyOption'] = false;
$arguments57['translateCsvItems'] = NULL;
$arguments57['itemsProcFunc'] = NULL;
$arguments57['renderType'] = 'selectSingle';
$arguments57['showIconTable'] = false;
$arguments57['name'] = 'type';
$arguments57['label'] = 'type';
$arguments57['items'] = 'h1 , h2, h3';

$output54 .= FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output54 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\CheckboxViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['name'] = NULL;
$arguments59['label'] = NULL;
$arguments59['default'] = NULL;
$arguments59['required'] = false;
$arguments59['exclude'] = false;
$arguments59['transform'] = NULL;
$arguments59['enabled'] = true;
$arguments59['requestUpdate'] = false;
$arguments59['displayCond'] = NULL;
$arguments59['inherit'] = true;
$arguments59['inheritEmpty'] = true;
$arguments59['clear'] = false;
$arguments59['variables'] = array (
);
$arguments59['extensionName'] = NULL;
$arguments59['config'] = array (
);
$arguments59['name'] = 'hideBorderChech';
$arguments59['label'] = 'Hide Border Checkbox';

$output54 .= FluidTYPO3\Flux\ViewHelpers\Field\CheckboxViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output54 .= '

        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['name'] = NULL;
$arguments61['label'] = NULL;
$arguments61['default'] = NULL;
$arguments61['required'] = false;
$arguments61['exclude'] = false;
$arguments61['transform'] = NULL;
$arguments61['enabled'] = true;
$arguments61['requestUpdate'] = false;
$arguments61['displayCond'] = NULL;
$arguments61['inherit'] = true;
$arguments61['inheritEmpty'] = true;
$arguments61['clear'] = false;
$arguments61['variables'] = array (
);
$arguments61['extensionName'] = NULL;
$arguments61['config'] = array (
);
$arguments61['validate'] = 'trim';
$arguments61['size'] = 1;
$arguments61['multiple'] = false;
$arguments61['minItems'] = 0;
$arguments61['maxItems'] = 1;
$arguments61['itemListStyle'] = NULL;
$arguments61['selectedListStyle'] = NULL;
$arguments61['items'] = NULL;
$arguments61['emptyOption'] = false;
$arguments61['translateCsvItems'] = NULL;
$arguments61['itemsProcFunc'] = NULL;
$arguments61['table'] = 'sys_file_reference';
$arguments61['condition'] = NULL;
$arguments61['mm'] = NULL;
$arguments61['foreignField'] = 'uid_foreign';
$arguments61['foreignLabel'] = 'uid_local';
$arguments61['foreignSelector'] = 'uid_local';
$arguments61['foreignSortby'] = 'sorting_foreign';
$arguments61['foreignDefaultSortby'] = '';
$arguments61['foreignTableField'] = 'tablenames';
$arguments61['foreignUnique'] = NULL;
$arguments61['symmetricField'] = '';
$arguments61['symmetricLabel'] = '';
$arguments61['symmetricSortby'] = '';
$arguments61['localizationMode'] = 'select';
$arguments61['localizeChildrenAtParentLocalization'] = true;
$arguments61['disableMovingChildrenWithParent'] = false;
$arguments61['showThumbs'] = true;
$arguments61['matchFields'] = array (
);
$arguments61['oppositeField'] = '';
$arguments61['collapseAll'] = false;
$arguments61['expandSingle'] = false;
$arguments61['newRecordLinkAddTitle'] = true;
$arguments61['newRecordLinkPosition'] = 'top';
$arguments61['useCombination'] = false;
$arguments61['useSortable'] = true;
$arguments61['showPossibleLocalizationRecords'] = false;
$arguments61['showRemovedLocalizationRecords'] = false;
$arguments61['showAllLocalizationLink'] = false;
$arguments61['showSynchronizationLink'] = false;
$arguments61['enabledControls'] = false;
$arguments61['headerThumbnail'] = false;
$arguments61['foreignMatchFields'] = false;
$arguments61['foreignTypes'] = NULL;
$arguments61['levelLinksPosition'] = 'both';
$arguments61['allowedExtensions'] = 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg';
$arguments61['disallowedExtensions'] = '';
$arguments61['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$arguments61['cropVariants'] = NULL;
$arguments61['name'] = 'downloadFiles';
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array63['0'] = 1;

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments61['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments61['minItems'] = 1;
$arguments61['maxItems'] = 70;
// Rendering Boolean node
// Rendering Array
$array65 = array();
$array65['0'] = 1;

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments61['collapseAll'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$arguments61['allowedExtensions'] = 'pdf,zip';

$output54 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output54 .= '
    ';
return $output54;
};
$arguments52 = array();
$arguments52['id'] = NULL;
$arguments52['label'] = NULL;
$arguments52['description'] = NULL;
$arguments52['enabled'] = true;
$arguments52['variables'] = array (
);
$arguments52['options'] = NULL;
$arguments52['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments52['extensionName'] = NULL;
$arguments52['id'] = 'Download';
$arguments52['label'] = 'Download';
$arguments52['description'] = 'Download';

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output51 .= '
';
return $output51;
};
$arguments49 = array();
$arguments49['name'] = NULL;
$arguments49['name'] = 'Configuration';

$output46 .= NULL;

$output46 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
    description : ';
$array70 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('descreption', $array70)]);

$output69 .= '<br>
    Type :      <';
$array71 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array71)]);

$output69 .= '>';
$array72 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array72)]);

$output69 .= '</';
$array73 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type', $array73)]);

$output69 .= '>
';
return $output69;
};
$arguments67 = array();
$arguments67['name'] = NULL;
$arguments67['name'] = 'Preview';

$output46 .= NULL;

$output46 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
  <div class="grid-btn ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('hideBorderChech', $array80);

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['then'] = 'bordershow';

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= ' "  >
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
            <a href="';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.url', $array87)]);

$output86 .= '" target="_blank" rel="noopener noreferrer" >';
$array88 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.name', $array88)]);

$output86 .= ' (';
$array89 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.extension', $array89)]);

$output86 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Media\SizeViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['path'] = NULL;
$array94 = array (
);$arguments92['path'] = $renderingContext->getVariableProvider()->getByPath('file.url', $array94);
$renderChildrenClosure93 = ($arguments92['path'] !== null) ? function() use ($arguments92) { return $arguments92['path']; } : $renderChildrenClosure93;return FluidTYPO3\Vhs\ViewHelpers\Media\SizeViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);
};
$arguments90 = array();
$arguments90['value'] = NULL;
$arguments90['decimals'] = 0;
$arguments90['decimalSeparator'] = '.';
$arguments90['thousandsSeparator'] = ',';
$arguments90['units'] = NULL;
$arguments90['decimals'] = 1;
$renderChildrenClosure91 = ($arguments90['value'] !== null) ? function() use ($arguments90) { return $arguments90['value']; } : $renderChildrenClosure91;
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output86 .= ' )</a>  
    ';
return $output86;
};
$arguments82 = array();
$arguments82['each'] = NULL;
$arguments82['as'] = NULL;
$arguments82['key'] = NULL;
$arguments82['reverse'] = false;
$arguments82['iteration'] = NULL;
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['table'] = 'tt_content';
$arguments84['field'] = 'image';
$arguments84['record'] = NULL;
$arguments84['uid'] = NULL;
$arguments84['as'] = NULL;
$arguments84['asObjects'] = false;
$arguments84['field'] = 'downloadFiles';
$arguments82['each'] = FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);
$arguments82['as'] = 'file';

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output76 .= '
</div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '<';
$array98 = array (
);
$output97 .= $renderingContext->getVariableProvider()->getByPath('type', $array98);

$output97 .= '>';
$array99 = array (
);
$output97 .= $renderingContext->getVariableProvider()->getByPath('type', $array99);

$output97 .= '</';
$array100 = array (
);
$output97 .= $renderingContext->getVariableProvider()->getByPath('type', $array100);

$output97 .= '>';
return $output97;
};
$arguments95 = array();
$arguments95['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output76 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output76 .= '
';
return $output76;
};
$arguments74 = array();
$arguments74['name'] = NULL;
$arguments74['name'] = 'Main';

$output46 .= NULL;

return $output46;
}


}
#
<?php

class Default_action_Default_7b3bf4a1ed864bf232a22da3faced70b03ecd198 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Page';
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
return ' ';
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
$arguments1['id'] = 'home';
$arguments1['label'] = 'Startseite';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '

        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return ' ';
};
$arguments9 = array();
$arguments9['name'] = 'column';
$arguments9['label'] = NULL;
$arguments9['colPos'] = NULL;
$arguments9['colspan'] = 1;
$arguments9['rowspan'] = 1;
$arguments9['style'] = NULL;
$arguments9['variables'] = array (
);
$arguments9['extensionName'] = NULL;
$arguments9['colPos'] = 2;
$arguments9['colspan'] = 4;
$arguments9['name'] = 'stage';
$arguments9['label'] = 'Stage';

$output8 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
            ';
return $output8;
};
$arguments6 = array();
$arguments6['name'] = 'row';
$arguments6['label'] = NULL;
$arguments6['variables'] = array (
);
$arguments6['extensionName'] = NULL;

$output5 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return ' ';
};
$arguments14 = array();
$arguments14['name'] = 'column';
$arguments14['label'] = NULL;
$arguments14['colPos'] = NULL;
$arguments14['colspan'] = 1;
$arguments14['rowspan'] = 1;
$arguments14['style'] = NULL;
$arguments14['variables'] = array (
);
$arguments14['extensionName'] = NULL;
$arguments14['colPos'] = 0;
$arguments14['colspan'] = 4;
$arguments14['name'] = 'content';
$arguments14['label'] = 'Hauptbereich';

$output13 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
            ';
return $output13;
};
$arguments11 = array();
$arguments11['name'] = 'row';
$arguments11['label'] = NULL;
$arguments11['variables'] = array (
);
$arguments11['extensionName'] = NULL;

$output5 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output5 .= '
        ';
return $output5;
};
$arguments3 = array();
$arguments3['name'] = 'grid';
$arguments3['label'] = NULL;
$arguments3['variables'] = array (
);
$arguments3['extensionName'] = NULL;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '
    ';

return $output0;
}
/**
 * section Preview
 */
public function section_f1fbb2b43dca281d0138f4fcc92543ad143ef0b1(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return ' ';
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output16 = '';

$output16 .= '
        <main class="lay-main">
            <div id="content" class="l-content">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array19 = array (
);return $renderingContext->getVariableProvider()->getByPath('settings', $array19);
};
$arguments17 = array();
$arguments17['title'] = NULL;
$arguments17['maxDepth'] = 8;
$arguments17['plainText'] = false;
$arguments17['ansiColors'] = false;
$arguments17['inline'] = false;
$arguments17['blacklistedClassNames'] = NULL;
$arguments17['blacklistedPropertyNames'] = NULL;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['column'] = NULL;
$arguments20['order'] = 'sorting';
$arguments20['sortDirection'] = 'ASC';
$arguments20['pageUid'] = 0;
$arguments20['contentUids'] = NULL;
$arguments20['sectionIndexOnly'] = false;
$arguments20['loadRegister'] = NULL;
$arguments20['render'] = true;
$arguments20['hideUntranslated'] = false;
$arguments20['limit'] = NULL;
$arguments20['slide'] = 0;
$arguments20['slideCollect'] = 0;
$arguments20['slideCollectReverse'] = false;
$arguments20['as'] = NULL;
$arguments20['column'] = 0;

$output16 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output16 .= '
            </div>
        </main>
    ';

return $output16;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output22 = '';

$output22 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['name'] = NULL;
$arguments23['name'] = 'Page';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output22 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return ' ';
};
$arguments28 = array();
$arguments28['id'] = NULL;
$arguments28['label'] = NULL;
$arguments28['description'] = NULL;
$arguments28['enabled'] = true;
$arguments28['variables'] = array (
);
$arguments28['options'] = NULL;
$arguments28['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments28['extensionName'] = NULL;
$arguments28['id'] = 'home';
$arguments28['label'] = 'Startseite';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output27 .= '

        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return ' ';
};
$arguments36 = array();
$arguments36['name'] = 'column';
$arguments36['label'] = NULL;
$arguments36['colPos'] = NULL;
$arguments36['colspan'] = 1;
$arguments36['rowspan'] = 1;
$arguments36['style'] = NULL;
$arguments36['variables'] = array (
);
$arguments36['extensionName'] = NULL;
$arguments36['colPos'] = 2;
$arguments36['colspan'] = 4;
$arguments36['name'] = 'stage';
$arguments36['label'] = 'Stage';

$output35 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
            ';
return $output35;
};
$arguments33 = array();
$arguments33['name'] = 'row';
$arguments33['label'] = NULL;
$arguments33['variables'] = array (
);
$arguments33['extensionName'] = NULL;

$output32 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '

            ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return ' ';
};
$arguments41 = array();
$arguments41['name'] = 'column';
$arguments41['label'] = NULL;
$arguments41['colPos'] = NULL;
$arguments41['colspan'] = 1;
$arguments41['rowspan'] = 1;
$arguments41['style'] = NULL;
$arguments41['variables'] = array (
);
$arguments41['extensionName'] = NULL;
$arguments41['colPos'] = 0;
$arguments41['colspan'] = 4;
$arguments41['name'] = 'content';
$arguments41['label'] = 'Hauptbereich';

$output40 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
            ';
return $output40;
};
$arguments38 = array();
$arguments38['name'] = 'row';
$arguments38['label'] = NULL;
$arguments38['variables'] = array (
);
$arguments38['extensionName'] = NULL;

$output32 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output32 .= '
        ';
return $output32;
};
$arguments30 = array();
$arguments30['name'] = 'grid';
$arguments30['label'] = NULL;
$arguments30['variables'] = array (
);
$arguments30['extensionName'] = NULL;

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output27 .= '
    ';
return $output27;
};
$arguments25 = array();
$arguments25['name'] = NULL;
$arguments25['name'] = 'Configuration';

$output22 .= NULL;

$output22 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return ' ';
};
$arguments43 = array();
$arguments43['name'] = NULL;
$arguments43['name'] = 'Preview';

$output22 .= NULL;

$output22 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
        <main class="lay-main">
            <div id="content" class="l-content">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$array50 = array (
);return $renderingContext->getVariableProvider()->getByPath('settings', $array50);
};
$arguments48 = array();
$arguments48['title'] = NULL;
$arguments48['maxDepth'] = 8;
$arguments48['plainText'] = false;
$arguments48['ansiColors'] = false;
$arguments48['inline'] = false;
$arguments48['blacklistedClassNames'] = NULL;
$arguments48['blacklistedPropertyNames'] = NULL;

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['column'] = NULL;
$arguments51['order'] = 'sorting';
$arguments51['sortDirection'] = 'ASC';
$arguments51['pageUid'] = 0;
$arguments51['contentUids'] = NULL;
$arguments51['sectionIndexOnly'] = false;
$arguments51['loadRegister'] = NULL;
$arguments51['render'] = true;
$arguments51['hideUntranslated'] = false;
$arguments51['limit'] = NULL;
$arguments51['slide'] = 0;
$arguments51['slideCollect'] = 0;
$arguments51['slideCollectReverse'] = false;
$arguments51['as'] = NULL;
$arguments51['column'] = 0;

$output47 .= FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output47 .= '
            </div>
        </main>
    ';
return $output47;
};
$arguments45 = array();
$arguments45['name'] = NULL;
$arguments45['name'] = 'Main';

$output22 .= NULL;

$output22 .= '

';

return $output22;
}


}
#
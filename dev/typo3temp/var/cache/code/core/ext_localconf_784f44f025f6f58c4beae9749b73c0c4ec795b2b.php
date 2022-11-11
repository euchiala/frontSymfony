<?php
/**
 * Compiled ext_localconf.php cache file
 */

/**
 * Extension: core
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/core/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Utility\GeneralUtility::class]['moveUploadedFile'][] = \TYPO3\CMS\Core\Resource\Security\SvgHookHandler::class . '->processMoveUploadedFile';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Core\Hooks\BackendUserGroupIntegrityCheck::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Core\Hooks\BackendUserPasswordCheck::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/alt_doc.php']['makeEditForm_accessCheck'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class . '->isAllowedToShowEditForm';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms_inline.php']['checkAccess'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class . '->isAllowedToShowEditForm';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkModifyAccessList'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Core\Hooks\DestroySessionHook::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Core\Hooks\PagesTsConfigGuard::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][\TYPO3\CMS\Core\Hooks\CreateSiteConfiguration::class] = \TYPO3\CMS\Core\Hooks\CreateSiteConfiguration::class;
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['dumpFile'] = \TYPO3\CMS\Core\Controller\FileDumpController::class . '::dumpAction';
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['requirejs'] = \TYPO3\CMS\Core\Controller\RequireJsController::class . '::retrieveConfiguration';

/** @var \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry $rendererRegistry */
$rendererRegistry = \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry::getInstance();
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\AudioTagRenderer::class);
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\VideoTagRenderer::class);
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer::class);
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer::class);
unset($rendererRegistry);

$textExtractorRegistry = \TYPO3\CMS\Core\Resource\TextExtraction\TextExtractorRegistry::getInstance();
$textExtractorRegistry->registerTextExtractor(\TYPO3\CMS\Core\Resource\TextExtraction\PlainTextExtractor::class);
unset($textExtractorRegistry);

$extractorRegistry = \TYPO3\CMS\Core\Resource\Index\ExtractorRegistry::getInstance();
$extractorRegistry->registerExtractionService(\TYPO3\CMS\Core\Resource\OnlineMedia\Metadata\Extractor::class);
unset($extractorRegistry);

// Register base authentication service
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService(
    'core',
    'auth',
    \TYPO3\CMS\Core\Authentication\AuthenticationService::class,
    [
        'title' => 'User authentication',
        'description' => 'Authentication with username/password.',
        'subtype' => 'getUserBE,getUserFE,authUserBE,authUserFE,getGroupsFE,processLoginDataBE,processLoginDataFE',
        'available' => true,
        'priority' => 50,
        'quality' => 50,
        'os' => '',
        'exec' => '',
        'className' => TYPO3\CMS\Core\Authentication\AuthenticationService::class
    ]
);

// add default notification options to every page
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    'TCEMAIN.translateToMessage = Translate to %s:'
);

$metaTagManagerRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry::class);
$metaTagManagerRegistry->registerManager(
    'html5',
    \TYPO3\CMS\Core\MetaTag\Html5MetaTagManager::class
);
$metaTagManagerRegistry->registerManager(
    'edge',
    \TYPO3\CMS\Core\MetaTag\EdgeMetaTagManager::class
);
unset($metaTagManagerRegistry);

// Add module configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    'config.pageTitleProviders.record.provider = TYPO3\CMS\Core\PageTitle\RecordPageTitleProvider'
);


/**
 * Extension: extbase
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/extbase/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

// Register type converters
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\ArrayConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\BooleanConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FloatConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\IntegerConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\ObjectStorageConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\PersistentObjectConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\ObjectConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\StringConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\CoreTypeConverter::class);
// Experimental FAL<->extbase converters
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FileConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FileReferenceConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FolderBasedFileCollectionConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\StaticFileCollectionConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FolderConverter::class);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkFlexFormValue'][] = \TYPO3\CMS\Extbase\Hook\DataHandler\CheckFlexFormValue::class;


/**
 * Extension: frontend
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/frontend/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

// Register all available content objects
$GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects'] = array_merge($GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects'], [
    'TEXT'             => \TYPO3\CMS\Frontend\ContentObject\TextContentObject::class,
    'CASE'             => \TYPO3\CMS\Frontend\ContentObject\CaseContentObject::class,
    'COA'              => \TYPO3\CMS\Frontend\ContentObject\ContentObjectArrayContentObject::class,
    'COA_INT'          => \TYPO3\CMS\Frontend\ContentObject\ContentObjectArrayInternalContentObject::class,
    'USER'             => \TYPO3\CMS\Frontend\ContentObject\UserContentObject::class,
    'USER_INT'         => \TYPO3\CMS\Frontend\ContentObject\UserInternalContentObject::class,
    'FILES'            => \TYPO3\CMS\Frontend\ContentObject\FilesContentObject::class,
    'IMAGE'            => \TYPO3\CMS\Frontend\ContentObject\ImageContentObject::class,
    'IMG_RESOURCE'     => \TYPO3\CMS\Frontend\ContentObject\ImageResourceContentObject::class,
    'CONTENT'          => \TYPO3\CMS\Frontend\ContentObject\ContentContentObject::class,
    'RECORDS'          => \TYPO3\CMS\Frontend\ContentObject\RecordsContentObject::class,
    'HMENU'            => \TYPO3\CMS\Frontend\ContentObject\HierarchicalMenuContentObject::class,
    'LOAD_REGISTER'    => \TYPO3\CMS\Frontend\ContentObject\LoadRegisterContentObject::class,
    'RESTORE_REGISTER' => \TYPO3\CMS\Frontend\ContentObject\RestoreRegisterContentObject::class,
    'TEMPLATE'         => \TYPO3\CMS\Frontend\ContentObject\TemplateContentObject::class,
    'FLUIDTEMPLATE'    => \TYPO3\CMS\Frontend\ContentObject\FluidTemplateContentObject::class,
    'SVG'              => \TYPO3\CMS\Frontend\ContentObject\ScalableVectorGraphicsContentObject::class,
    'EDITPANEL'        => \TYPO3\CMS\Frontend\ContentObject\EditPanelContentObject::class
]);

// Register eID provider for showpic
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['tx_cms_showpic'] = \TYPO3\CMS\Frontend\Controller\ShowImageController::class . '::processRequest';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
	options.saveDocView = 1
	options.saveDocNew = 1
	options.saveDocNew.pages = 0
	options.saveDocNew.sys_file = 0
	options.saveDocNew.sys_file_metadata = 0
	options.disableDelete.sys_file = 1
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    '
# Content selection
styles.content.get = CONTENT
styles.content.get {
    table = tt_content
    select {
        orderBy = sorting
        where = {#colPos}=0
    }
}


# Content element rendering
tt_content = CASE
tt_content {
    key {
        field = CType
    }
    default = TEXT
    default {
        field = CType
        htmlSpecialChars = 1
        wrap = <p style="background-color: yellow; padding: 0.5em 1em;"><strong>ERROR:</strong> Content Element with uid "{field:uid}" and type "|" has no rendering definition!</p>
        wrap.insertData = 1
    }
}
    '
);

// Registering hooks for the tree list cache
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][] = \TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['moveRecordClass'][] = \TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks::class;

// Register for hooks to show preview of tt_content elements in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['image'] =
    \TYPO3\CMS\Frontend\Hooks\PageLayoutView\ImagePreviewRenderer::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['textpic'] =
    \TYPO3\CMS\Frontend\Hooks\PageLayoutView\TextpicPreviewRenderer::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['text'] =
    \TYPO3\CMS\Frontend\Hooks\PageLayoutView\TextPreviewRenderer::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['textmedia'] =
    \TYPO3\CMS\Frontend\Hooks\PageLayoutView\TextmediaPreviewRenderer::class;

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['content'] = 'tt_content';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class)
    ->registerIcon(
        'wizard-backendlayout',
        \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
        ['name' => 'table']
    );

// Include new content elements to modWizards
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:frontend/Configuration/TSconfig/Page/Mod/Wizards/NewContentElement.tsconfig'"
);
// Include FormEngine adjustments
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:frontend/Configuration/TSconfig/Page/TCEFORM.tsconfig'"
);


/**
 * Extension: fluid_styled_content
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/fluid_styled_content/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

// Define TypoScript as content rendering template
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'fluidstyledcontent/Configuration/TypoScript/';


/**
 * Extension: filelist
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/filelist/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1486418731] = \TYPO3\CMS\Filelist\ContextMenu\ItemProviders\FileProvider::class;
$GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1486418734] = \TYPO3\CMS\Filelist\ContextMenu\ItemProviders\FileDragProvider::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/backend.php']['constructPostProcess'][] = \TYPO3\CMS\Filelist\Hook\BackendControllerHook::class . '->addJavaScript';


/**
 * Extension: impexp
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/impexp/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

// Register icons not being part of TYPO3.Icons repository
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'status-reference-hard',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:impexp/Resources/Public/Icons/status-reference-hard.png']
);
$iconRegistry->registerIcon(
    'status-reference-soft',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:impexp/Resources/Public/Icons/status-reference-soft.png']
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/backend.php']['constructPostProcess'][] = \TYPO3\CMS\Impexp\Hook\BackendControllerHook::class . '->addJavaScript';
$GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1486418735] = \TYPO3\CMS\Impexp\ContextMenu\ItemProvider::class;


/**
 * Extension: form
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/form/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

call_user_func(function () {
    // Register upgrade wizard in install tool
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['formFileExtension']
        = \TYPO3\CMS\Form\Hooks\FormFileExtensionUpdate::class;

    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('filelist')) {
        // Context menu item handling for form files
        $GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1530637161]
            = \TYPO3\CMS\Form\Hooks\FormFileProvider::class;

        // File list edit icons
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['fileList']['editIconsHook'][1530637161]
            = \TYPO3\CMS\Form\Hooks\FileListEditIconsHook::class;
    }

    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('impexp')) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/impexp/class.tx_impexp.php']['before_addSysFileRecord'][1530637161]
            = \TYPO3\CMS\Form\Hooks\ImportExportHook::class . '->beforeAddSysFileRecordOnImport';
    }

    // Hook to enrich tt_content form flex element with finisher settings and form list drop down
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][
        \TYPO3\CMS\Form\Hooks\DataStructureIdentifierHook::class
    ] = \TYPO3\CMS\Form\Hooks\DataStructureIdentifierHook::class;

    // Hook to count used forms elements in tt_content
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['softRefParser']['formPersistenceIdentifier'] =
        \TYPO3\CMS\Form\Hooks\SoftReferenceParserHook::class;

    // Register for hook to show preview of tt_content element of CType="form_formframework" in page module
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['form_formframework'] =
        \TYPO3\CMS\Form\Hooks\FormPagePreviewRenderer::class;

    // Add new content element wizard entry
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        "@import 'EXT:form/Configuration/PageTS/modWizards.tsconfig'"
    );

    // Add module configuration
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        'module.tx_form {
    settings {
        yamlConfigurations {
            10 = EXT:form/Configuration/Yaml/FormSetup.yaml
        }
    }
    view {
        templateRootPaths.10 = EXT:form/Resources/Private/Backend/Templates/
        partialRootPaths.10 = EXT:form/Resources/Private/Backend/Partials/
        layoutRootPaths.10 = EXT:form/Resources/Private/Backend/Layouts/
    }
}'
    );

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterSubmit'][1489772699]
        = \TYPO3\CMS\Form\Hooks\FormElementHooks::class;

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['beforeRendering'][1489772699]
        = \TYPO3\CMS\Form\Hooks\FormElementHooks::class;

    // FE file upload processing
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterBuildingFinished'][1489772699]
        = \TYPO3\CMS\Form\Mvc\Property\PropertyMappingConfiguration::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterFormStateInitialized'][1613296803]
        = \TYPO3\CMS\Form\Mvc\Property\PropertyMappingConfiguration::class;

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(
        \TYPO3\CMS\Form\Mvc\Property\TypeConverter\FormDefinitionArrayConverter::class
    );

    // Register "formvh:" namespace
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['formvh'][] = 'TYPO3\\CMS\\Form\\ViewHelpers';

    // Register FE plugin
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Form',
        'Formframework',
        [\TYPO3\CMS\Form\Controller\FormFrontendController::class => 'render, perform'],
        [\TYPO3\CMS\Form\Controller\FormFrontendController::class => 'perform'],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
});


/**
 * Extension: install
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/install/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

// Do not delete this wizard. This makes sure new installations get the TER repository set in the database.
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['extensionManagerTables']
    = \TYPO3\CMS\Install\Updates\ExtensionManagerTables::class;

// v8->v9 wizards below this line
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['typo3DbLegacyExtension']
    = \TYPO3\CMS\Install\Updates\Typo3DbExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['funcExtension']
    = \TYPO3\CMS\Install\Updates\FuncExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['pagesUrltypeField']
    = \TYPO3\CMS\Install\Updates\MigrateUrlTypesInPagesUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['separateSysHistoryFromLog']
    = \TYPO3\CMS\Install\Updates\SeparateSysHistoryFromSysLogUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['rdctExtension']
    = \TYPO3\CMS\Install\Updates\RedirectExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['cshmanualBackendUsers']
    = \TYPO3\CMS\Install\Updates\BackendUserStartModuleUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['pagesLanguageOverlay']
    = \TYPO3\CMS\Install\Updates\MigratePagesLanguageOverlayUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['pagesLanguageOverlayBeGroupsAccessRights']
    = \TYPO3\CMS\Install\Updates\MigratePagesLanguageOverlayBeGroupsAccessRights::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['backendLayoutIcons']
    = \TYPO3\CMS\Install\Updates\BackendLayoutIconUpdateWizard::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['redirects']
    = \TYPO3\CMS\Install\Updates\RedirectsExtensionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['adminpanelExtension']
    = \TYPO3\CMS\Install\Updates\AdminPanelInstall::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['pagesSlugs']
    = \TYPO3\CMS\Install\Updates\PopulatePageSlugs::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['argon2iPasswordHashes']
    = \TYPO3\CMS\Install\Updates\Argon2iPasswordHashes::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['backendUsersConfiguration']
    = \TYPO3\CMS\Install\Updates\BackendUserConfigurationUpdate::class;

// v9->v10 wizards below this line
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['rsaauthExtension']
    = \TYPO3\CMS\Install\Updates\RsaauthExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['feeditExtension']
    = \TYPO3\CMS\Install\Updates\FeeditExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['taskcenterExtension']
    = \TYPO3\CMS\Install\Updates\TaskcenterExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['sysActionExtension']
    = \TYPO3\CMS\Install\Updates\SysActionExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['svgFilesSanitization']
    = \TYPO3\CMS\Install\Updates\SvgFilesSanitization::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['databaseRowsUpdateWizard']
    = \TYPO3\CMS\Install\Updates\DatabaseRowsUpdateWizard::class;

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$icons = [
    'module-install-environment' => 'EXT:install/Resources/Public/Icons/module-install-environment.svg',
    'module-install-maintenance' => 'EXT:install/Resources/Public/Icons/module-install-maintenance.svg',
    'module-install-settings' => 'EXT:install/Resources/Public/Icons/module-install-settings.svg',
    'module-install-upgrade' => 'EXT:install/Resources/Public/Icons/module-install-upgrade.svg',
];

foreach ($icons as $iconIdentifier => $source) {
    $iconRegistry->registerIcon(
        $iconIdentifier,
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => $source]
    );
}

// Register report module additions
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['typo3'][] = \TYPO3\CMS\Install\Report\InstallStatusReport::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['security'][] = \TYPO3\CMS\Install\Report\SecurityStatusReport::class;

// Only add the environment status report if not in CLI mode
if (!\TYPO3\CMS\Core\Core\Environment::isCli()) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['system'][] = \TYPO3\CMS\Install\Report\EnvironmentStatusReport::class;
}


/**
 * Extension: recordlist
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/recordlist/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

// Register element browsers
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['db'] = \TYPO3\CMS\Recordlist\Browser\DatabaseBrowser::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['file'] = \TYPO3\CMS\Recordlist\Browser\FileBrowser::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['file_reference'] = \TYPO3\CMS\Recordlist\Browser\FileBrowser::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ElementBrowsers']['folder'] = \TYPO3\CMS\Recordlist\Browser\FolderBrowser::class;

// Register default link handlers
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    TCEMAIN.linkHandler {
        page {
            handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\PageLinkHandler
            label = LLL:EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf:page
        }
        file {
            handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\FileLinkHandler
            label = LLL:EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf:file
            displayAfter = page
            scanAfter = page
        }
        folder {
            handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\FolderLinkHandler
            label = LLL:EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf:folder
            displayAfter = page,file
            scanAfter = page,file
        }
        url {
            handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\UrlLinkHandler
            label = LLL:EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf:extUrl
            displayAfter = page,file,folder
            scanAfter = telephone
        }
        mail {
            handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\MailLinkHandler
            label = LLL:EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf:email
            displayAfter = page,file,folder,url
            scanBefore = url
        }
        telephone {
            handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\TelephoneLinkHandler
            label = LLL:EXT:recordlist/Resources/Private/Language/locallang_browse_links.xlf:telephone
            displayAfter = page,file,folder,url,mail
            scanBefore = url
        }
    }
');


/**
 * Extension: backend
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/backend/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433106] = \TYPO3\CMS\Backend\Backend\ToolbarItems\ClearCacheToolbarItem::class;
$GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433107] = \TYPO3\CMS\Backend\Backend\ToolbarItems\HelpToolbarItem::class;
$GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433108] = \TYPO3\CMS\Backend\Backend\ToolbarItems\LiveSearchToolbarItem::class;
$GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433109] = \TYPO3\CMS\Backend\Backend\ToolbarItems\ShortcutToolbarItem::class;
$GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433110] = \TYPO3\CMS\Backend\Backend\ToolbarItems\SystemInformationToolbarItem::class;
$GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433111] = \TYPO3\CMS\Backend\Backend\ToolbarItems\UserToolbarItem::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['loginProviders'][1433416747] = [
    'provider' => \TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider::class,
    'sorting' => 50,
    'icon-class' => 'fa-key',
    'label' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.link'
];

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['avatarProviders']['defaultAvatarProvider'] = [
    'provider' => \TYPO3\CMS\Backend\Backend\Avatar\DefaultAvatarProvider::class
];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1460321142] = [
    'nodeName' => 'belayoutwizard',
    'priority' => 40,
    'class' => \TYPO3\CMS\Backend\View\Wizard\Element\BackendLayoutWizardElement::class,
];

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['page'] = 'pages';

// Register standard preview renderer resolver implementation.
// Resolves PreviewRendererInterface implementations for a given table and record.
// Can be replaced with custom implementation by overriding this value in extensions.
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['previewRendererResolver'] = \TYPO3\CMS\Backend\Preview\StandardPreviewRendererResolver::class;

// Include base TSconfig setup
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:backend/Configuration/TSconfig/Page/Mod/Wizards/NewContentElement.tsconfig'"
);

// Register icons not being part of TYPO3.Icons repository
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'status-edit-read-only',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:backend/Resources/Public/Icons/status-edit-read-only.png']
);
$iconRegistry->registerIcon(
    'warning-in-use',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:backend/Resources/Public/Icons/warning-in-use.png']
);
$iconRegistry->registerIcon(
    'warning-lock',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:backend/Resources/Public/Icons/warning-lock.png']
);

// Register BackendLayoutDataProvider for PageTs
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider']['pagets'] = \TYPO3\CMS\Backend\Provider\PageTsBackendLayoutDataProvider::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauthgroup.php']['backendUserLogin']['sendEmailOnLogin'] = \TYPO3\CMS\Backend\Security\EmailLoginNotification::class . '->emailAtLogin';


/**
 * Extension: rte_ckeditor
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/rte_ckeditor/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

// Register FormEngine node type resolver hook to render RTE in FormEngine if enabled
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeResolver'][1480314091] = [
    'nodeName' => 'text',
    'priority' => 50,
    'class' => \TYPO3\CMS\RteCKEditor\Form\Resolver\RichTextNodeResolver::class,
];

if (TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_BE) {
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Page\PageRenderer::class
    )->addRequireJsConfiguration([
        'shim' => [
            'ckeditor' => ['exports' => 'CKEDITOR']
        ],
        'paths' => [
            'ckeditor' => \TYPO3\CMS\Core\Utility\PathUtility::getAbsoluteWebPath(
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('rte_ckeditor', 'Resources/Public/JavaScript/Contrib/')
            ) . 'ckeditor'
        ]
    ]);
}

// Register the presets
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:rte_ckeditor/Configuration/RTE/Default.yaml';
}
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['minimal'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['minimal'] = 'EXT:rte_ckeditor/Configuration/RTE/Minimal.yaml';
}
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'] = 'EXT:rte_ckeditor/Configuration/RTE/Full.yaml';
}


/**
 * Extension: beuser
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/beuser/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauth.php']['logoff_pre_processing'][] = \TYPO3\CMS\Beuser\Hook\SwitchBackUserHook::class . '->switchBack';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/backend.php']['constructPostProcess'][] = \TYPO3\CMS\Beuser\Hook\BackendControllerHook::class . '->addJavaScript';
$GLOBALS['TYPO3_CONF_VARS']['BE']['ContextMenu']['ItemProviders'][1486418730] = \TYPO3\CMS\Beuser\ContextMenu\ItemProvider::class;


/**
 * Extension: dashboard
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/dashboard/ext_localconf.php
 */



if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['dashboard_rss'] ?? null)) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['dashboard_rss'] = [
        'frontend' => \TYPO3\CMS\Core\Cache\Frontend\VariableFrontend::class,
        'backend' => \TYPO3\CMS\Core\Cache\Backend\FileBackend::class,
        'options' => [
            'defaultLifetime' => 900,
        ],
    ];
}


/**
 * Extension: extensionmanager
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/extensionmanager/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

// Register extension list update task
if (!(bool)\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
)->get('extensionmanager', 'offlineMode')) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Extensionmanager\Task\UpdateExtensionListTask::class] = [
        'extension' => 'extensionmanager',
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.name',
        'description' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.description',
        'additionalFields' => '',
    ];
}

// Register extension status report system
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['Extension Manager'][] =
    \TYPO3\CMS\Extensionmanager\Report\ExtensionStatus::class;

// Register extension composer status report
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['Composer Manifest'][] =
    \TYPO3\CMS\Extensionmanager\Report\ExtensionComposerStatus::class;


/**
 * Extension: felogin
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/felogin/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

// Add default TypoScript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants(
    "@import 'EXT:felogin/Configuration/TypoScript/constants.typoscript'"
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    "@import 'EXT:felogin/Configuration/TypoScript/setup.typoscript'"
);

// Add additional TypoScript & TsConfig depending on the value of the feature toggle "felogin.extbase"
$feloginExtbase = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Configuration\Features::class)
    ->isFeatureEnabled('felogin.extbase');

if (!$feloginExtbase) {
    // Add a default TypoScript for the CType "login" with PiBase Plugin
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants(
        "@import 'EXT:felogin/Configuration/TypoScript/PiBase/constants.typoscript'"
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        "@import 'EXT:felogin/Configuration/TypoScript/PiBase/setup.typoscript'"
    );

    // Add login form to new content element wizard
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        "@import 'EXT:felogin/Configuration/TsConfig/Page/PiBase/Mod/Wizards/NewContentElement.tsconfig'"
    );
} else {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Felogin',
        'Login',
        [
            \TYPO3\CMS\FrontendLogin\Controller\LoginController::class => 'login, overview',
            \TYPO3\CMS\FrontendLogin\Controller\PasswordRecoveryController::class => 'recovery,showChangePassword,changePassword'
        ],
        [
            \TYPO3\CMS\FrontendLogin\Controller\LoginController::class => 'login, overview',
            \TYPO3\CMS\FrontendLogin\Controller\PasswordRecoveryController::class => 'recovery,showChangePassword,changePassword'
        ],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    // Add login form to new content element wizard
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        "@import 'EXT:felogin/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig'"
    );
}
unset($feloginExtbase);

// Page module hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['felogin'] = \TYPO3\CMS\FrontendLogin\Hooks\CmsLayout::class;

// Add migration wizards
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Felogin\Updates\MigrateFeloginPlugins::class]
    = \TYPO3\CMS\Felogin\Updates\MigrateFeloginPlugins::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\FrontendLogin\Updates\MigrateFeloginPluginsCtype::class]
    = \TYPO3\CMS\FrontendLogin\Updates\MigrateFeloginPluginsCtype::class;


/**
 * Extension: seo
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/seo/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['metatag'] =
    \TYPO3\CMS\Seo\MetaTag\MetaTagGenerator::class . '->generate';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\CMS\Frontend\Page\PageGenerator']['generateMetaTags']['canonical'] =
    \TYPO3\CMS\Seo\Canonical\CanonicalGenerator::class . '->generate';

$metaTagManagerRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry::class);
$metaTagManagerRegistry->registerManager(
    'opengraph',
    \TYPO3\CMS\Seo\MetaTag\OpenGraphMetaTagManager::class
);
$metaTagManagerRegistry->registerManager(
    'twitter',
    \TYPO3\CMS\Seo\MetaTag\TwitterCardMetaTagManager::class
);
unset($metaTagManagerRegistry);

// Add module configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(trim('
    config.pageTitleProviders {
        seo {
            provider = TYPO3\CMS\Seo\PageTitle\SeoTitlePageTitleProvider
            before = record
        }
    }
'));

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(trim('
    mod.web_info.fieldDefinitions {
        seo {
            label = LLL:EXT:seo/Resources/Private/Language/locallang_webinfo.xlf:seo
            fields = title,uid,slug,seo_title,description,no_index,no_follow,canonical_link,sitemap_changefreq,sitemap_priority
        }
        social_media {
            label = LLL:EXT:seo/Resources/Private/Language/locallang_webinfo.xlf:social_media
            fields = title,uid,og_title,og_description,twitter_title,twitter_description
        }
    }
'));


/**
 * Extension: sys_note
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/sys_note/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

// Hook into the list module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['recordlist/Modules/Recordlist/index.php']['drawHeaderHook']['sys_note'] = \TYPO3\CMS\SysNote\Hook\RecordListHook::class . '->renderInHeader';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['recordlist/Modules/Recordlist/index.php']['drawFooterHook']['sys_note'] = \TYPO3\CMS\SysNote\Hook\RecordListHook::class . '->renderInFooter';
// Hook into the page modules
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawHeaderHook']['sys_note'] = \TYPO3\CMS\SysNote\Hook\PageHook::class . '->renderInHeader';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawFooterHook']['sys_note'] = \TYPO3\CMS\SysNote\Hook\PageHook::class . '->renderInFooter';
// Hook into the info module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/web_info/class.tx_cms_webinfo.php']['drawFooterHook']['sys_note'] = \TYPO3\CMS\SysNote\Hook\InfoModuleHook::class . '->render';


/**
 * Extension: t3editor
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/t3editor/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/file_edit.php']['preOutputProcessingHook'][] = \TYPO3\CMS\T3editor\Hook\FileEditHook::class . '->preOutputProcessingHook';

if (TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_BE) {
    // We need this at a central place because CodeMirror uses relative paths in its module definitions and using PageRenderer is prohibited in FormEngine
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Page\PageRenderer::class
    )->addRequireJsConfiguration([
        'packages' => [
            [
                'name' => 'cm',
                'location' => \TYPO3\CMS\Core\Utility\PathUtility::getAbsoluteWebPath(
                    \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName('EXT:t3editor/Resources/Public/JavaScript/Contrib/cm')
                ),
                'main' => 'lib/codemirror',
            ],
        ],
    ]);
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1433089350] = [
    'nodeName' => 't3editor',
    'priority' => 40,
    'class' => \TYPO3\CMS\T3editor\Form\Element\T3editorElement::class,
];


/**
 * Extension: tstemplate
 * File: C:/xampp/htdocs/front/dev/typo3/sysext/tstemplate/ext_localconf.php
 */



defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['tstemplate'] = \TYPO3\CMS\Tstemplate\Hooks\DataHandlerClearCachePostProcHook::class . '->clearPageCacheIfNecessary';


/**
 * Extension: flux
 * File: C:/xampp/htdocs/front/dev/typo3conf/ext/flux/ext_localconf.php
 */


if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

(function () use ($_EXTCONF) {
    if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['flux'])) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['flux'] = array(
            'frontend' => \TYPO3\CMS\Core\Cache\Frontend\VariableFrontend::class,
            'backend' => \TYPO3\CMS\Core\Cache\Backend\SimpleFileBackend::class,
            'groups' => array('system'),
            'options' => [
                'defaultLifetime' => 2592000,
            ],
        );
    }

    \FluidTYPO3\Flux\Utility\ExtensionConfigurationUtility::initialize($_EXTCONF);

    if (!(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
        // Globally registered fluid namespace
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['flux'] = ['FluidTYPO3\\Flux\\ViewHelpers'];

        // FormEngine integration between TYPO3 forms and Flux Providers
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\FluidTYPO3\Flux\Integration\FormEngine\ProviderProcessor::class] = array(
            'depends' => array(
                \TYPO3\CMS\Backend\Form\FormDataProvider\PageTsConfig::class,
                \TYPO3\CMS\Backend\Form\FormDataProvider\TcaColumnsProcessCommon::class,
                \TYPO3\CMS\Backend\Form\FormDataProvider\TcaColumnsProcessShowitem::class
            ),
            'before' => array(
                \TYPO3\CMS\Backend\Form\FormDataProvider\TcaColumnsRemoveUnused::class
            )
        );

        // FormEngine integration for custom TCA field types used by Flux
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1575276512] = [
            'nodeName' => 'fluxContentTypeValidator',
            'priority' => 40,
            'class' => \FluidTYPO3\Flux\Integration\FormEngine\ContentTypeValidatorNode::class,
        ];
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1575277301] = [
            'nodeName' => 'fluxTemplateSourceDumper',
            'priority' => 40,
            'class' => \FluidTYPO3\Flux\Integration\FormEngine\TemplateSourceDumperNode::class,
        ];
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1578613431] = [
            'nodeName' => 'fluxColumnPosition',
            'priority' => 40,
            'class' => \FluidTYPO3\Flux\Integration\FormEngine\ColumnPositionNode::class,
        ];
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1593341585] = [
            'nodeName' => 'fluxHtmlOutput',
            'priority' => 40,
            'class' => \FluidTYPO3\Flux\Integration\FormEngine\HtmlOutputNode::class,
        ];

        // Small override for record-localize controller to manipulate the record listing to provide child records in list
        if (!class_exists(\TYPO3\CMS\Backend\Controller\Event\AfterPageColumnsSelectedForLocalizationEvent::class)) {
            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Backend\Controller\Page\LocalizationController::class]['className'] = \FluidTYPO3\Flux\Integration\Overrides\LocalizationController::class;
        }

        // Various hooks needed to operate Flux
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing']['flux'] =
            \FluidTYPO3\Flux\Integration\HookSubscribers\DynamicFlexForm::class;
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] =
            \FluidTYPO3\Flux\Integration\HookSubscribers\DataHandlerSubscriber::class;
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][] =
            \FluidTYPO3\Flux\Integration\HookSubscribers\DataHandlerSubscriber::class;
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'][] =
            \FluidTYPO3\Flux\Integration\HookSubscribers\DataHandlerSubscriber::class . '->clearCacheCommand';
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['flux'] =
            \FluidTYPO3\Flux\Integration\HookSubscribers\Preview::class;
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms']['db_new_content_el']['wizardItemsHook']['flux'] =
            \FluidTYPO3\Flux\Integration\HookSubscribers\WizardItems::class;
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['recStatInfoHooks']['flux'] =
            \FluidTYPO3\Flux\Integration\HookSubscribers\ContentIcon::class . '->addSubIcon';
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['record_is_used']['flux'] =
            \FluidTYPO3\Flux\Integration\HookSubscribers\ContentUsedDecision::class . '->isContentElementUsed';

        // The following is a dual registration of the same TCA-manipulating hook; the reason for registering it twice for two
        // different hooks is that extTablesInclusion-PostProcessing does not get executed in FE, resulting in errors due to
        // features provided by this hook subscriber not being loaded.
        if (TYPO3_MODE === 'BE') {
            $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['extTablesInclusion-PostProcessing']['flux'] =
                \FluidTYPO3\Flux\Integration\HookSubscribers\TableConfigurationPostProcessor::class;
        } else {
            $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tstemplate.php']['includeStaticTypoScriptSources'][] =
                \FluidTYPO3\Flux\Integration\HookSubscribers\TableConfigurationPostProcessor::class . '->includeStaticTypoScriptHook';
        }

        $contentTypeManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\FluidTYPO3\Flux\Content\ContentTypeManager::class);
        foreach ($contentTypeManager->fetchContentTypes() as $contentType) {
            $contentTypeManager->registerTypeDefinition($contentType);
            \FluidTYPO3\Flux\Core::registerTemplateAsContentType(
                $contentType->getExtensionIdentity(),
                $contentType->getTemplatePathAndFilename(),
                $contentType->getContentTypeName(),
                $contentType->getProviderClassName()
            );
        }

        /** @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher $signalSlotDispatcher */
        $signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
        $signalSlotDispatcher->connect(
            \TYPO3\CMS\Backend\Controller\EditDocumentController::class,
            'initAfter',
            \FluidTYPO3\Flux\Integration\HookSubscribers\EditDocumentController::class,
            'requireColumnPositionJavaScript'
        );

        if (true === class_exists(\FluidTYPO3\Flux\Core::class)) {
            \FluidTYPO3\Flux\Core::registerConfigurationProvider(\FluidTYPO3\Flux\Content\ContentTypeProvider::class);
            \FluidTYPO3\Flux\Core::registerConfigurationProvider(\FluidTYPO3\Flux\Content\TypeDefinition\RecordBased\RecordBasedContentGridProvider::class);

            // native Outlets, replaceable by short name in subsequent registerOutlet() calls by adding second argument (string, name of type)
            \FluidTYPO3\Flux\Core::registerOutlet('standard');

            // native Pipes, replaceable by short name in subsequent registerPipe() calls by adding second argument (string, name of type)
            \FluidTYPO3\Flux\Core::registerPipe('standard');
            \FluidTYPO3\Flux\Core::registerPipe('controller');
            \FluidTYPO3\Flux\Core::registerPipe('email');
            \FluidTYPO3\Flux\Core::registerPipe('flashMessage');
            \FluidTYPO3\Flux\Core::registerPipe('typeConverter');
        }

        if (\FluidTYPO3\Flux\Utility\ExtensionConfigurationUtility::getOption(\FluidTYPO3\Flux\Utility\ExtensionConfigurationUtility::OPTION_PAGE_INTEGRATION)) {
            \FluidTYPO3\Flux\Core::registerConfigurationProvider(\FluidTYPO3\Flux\Provider\PageProvider::class);
            \FluidTYPO3\Flux\Core::registerConfigurationProvider(\FluidTYPO3\Flux\Provider\SubPageProvider::class);
        }
        if (version_compare(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getExtensionVersion('core'), 9.0, '<')) {
            \FluidTYPO3\Flux\Core::registerConfigurationProvider(\FluidTYPO3\Flux\Provider\PageLanguageOverlayProvider::class);
            \FluidTYPO3\Flux\Core::registerConfigurationProvider(\FluidTYPO3\Flux\Provider\SubPageLanguageOverlayProvider::class);
        }

        if (!\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('fluidpages') && \FluidTYPO3\Flux\Utility\ExtensionConfigurationUtility::getOption(\FluidTYPO3\Flux\Utility\ExtensionConfigurationUtility::OPTION_PAGE_INTEGRATION)) {
            if (version_compare(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getExtensionVersion('core'), 10.4, '>=')) {
                $pageControllerName = \FluidTYPO3\Flux\Controller\PageController::class;
                $pageControllerExtensionName = 'Flux';
            } else {
                $pageControllerName = 'Page';
                $pageControllerExtensionName = 'FluidTYPO3.Flux';
            }

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
                $pageControllerExtensionName,
                'Page',
                [
                    $pageControllerName => 'render,error',
                ],
                [],
                \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_PLUGIN
            );

            $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider']['flux'] = \FluidTYPO3\Flux\Backend\BackendLayoutDataProvider::class;
            $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawHeaderHook'][] = \FluidTYPO3\Flux\Integration\HookSubscribers\PagePreviewRenderer::class . '->render';

            if (\FluidTYPO3\Flux\Utility\ExtensionConfigurationUtility::getOption(\FluidTYPO3\Flux\Utility\ExtensionConfigurationUtility::OPTION_AUTOLOAD)) {
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants(file_get_contents(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('flux', 'Configuration/TypoScript/constants.txt')));
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(file_get_contents(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('flux', 'Configuration/TypoScript/setup.txt')));
            }

            if (\FluidTYPO3\Flux\Utility\ExtensionConfigurationUtility::getOption(\FluidTYPO3\Flux\Utility\ExtensionConfigurationUtility::OPTION_PAGE_LANGUAGE_OVERLAY)) {
                $GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields'] .= ',tx_fed_page_flexform,tx_fed_page_flexform_sub';
            }

            $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ($GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] == '' ? '' : ',') .
                'tx_fed_page_controller_action,tx_fed_page_controller_action_sub,tx_fed_page_flexform,tx_fed_page_flexform_sub,';
        }
    }

    if (\FluidTYPO3\Flux\Utility\ExtensionConfigurationUtility::getOption(\FluidTYPO3\Flux\Utility\ExtensionConfigurationUtility::OPTION_FLEXFORM_TO_IRRE)) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\FluidTYPO3\Flux\Integration\FormEngine\NormalizedDataStructureProvider::class] = [
            'before' => [
                \TYPO3\CMS\Backend\Form\FormDataProvider\TcaColumnsRemoveUnused::class,
            ],
        ];

        $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\FluidTYPO3\Flux\Integration\FormEngine\NormalizedDataConfigurationProvider::class] = [
            'before' => [
                \TYPO3\CMS\Backend\Form\FormDataProvider\InlineOverrideChildTca::class,
            ],
        ];

        \FluidTYPO3\Flux\Integration\NormalizedData\ImplementationRegistry::registerImplementation(
            \FluidTYPO3\Flux\Integration\NormalizedData\FlexFormImplementation::class
        );

        \FluidTYPO3\Flux\Integration\NormalizedData\FlexFormImplementation::registerForTableAndField('tt_content', 'pi_flexform');
    }
})();


/**
 * Extension: vhs
 * File: C:/xampp/htdocs/front/dev/typo3conf/ext/vhs/ext_localconf.php
 */


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/**
 * Polyfill ext-mbstring if not present. Can be removed with TYPO3 8.7 minimum-compatibility.
 */
if (false === function_exists('mb_strlen') || false === function_exists('mb_chr')) {
    if (!function_exists('mb_strlen')) {
        define('MB_CASE_UPPER', 0);
        define('MB_CASE_LOWER', 1);
        define('MB_CASE_TITLE', 2);

        function mb_convert_encoding($s, $to, $from = null) { return FluidTYPO3\Vhs\Mbstring::mb_convert_encoding($s, $to, $from); }
        function mb_decode_mimeheader($s) { return FluidTYPO3\Vhs\Mbstring::mb_decode_mimeheader($s); }
        function mb_encode_mimeheader($s, $charset = null, $transferEnc = null, $lf = null, $indent = null) { return FluidTYPO3\Vhs\Mbstring::mb_encode_mimeheader($s, $charset, $transferEnc, $lf, $indent); }
        function mb_convert_case($s, $mode, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_convert_case($s, $mode, $enc); }
        function mb_internal_encoding($enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_internal_encoding($enc); }
        function mb_language($lang = null) { return FluidTYPO3\Vhs\Mbstring::mb_language($lang); }
        function mb_list_encodings() { return FluidTYPO3\Vhs\Mbstring::mb_list_encodings(); }
        function mb_encoding_aliases($encoding) { return FluidTYPO3\Vhs\Mbstring::mb_encoding_aliases($encoding); }
        function mb_check_encoding($var = null, $encoding = null) { return FluidTYPO3\Vhs\Mbstring::mb_check_encoding($var, $encoding); }
        function mb_detect_encoding($str, $encodingList = null, $strict = false) { return FluidTYPO3\Vhs\Mbstring::mb_detect_encoding($str, $encodingList, $strict); }
        function mb_detect_order($encodingList = null) { return FluidTYPO3\Vhs\Mbstring::mb_detect_order($encodingList); }
        function mb_parse_str($s, &$result = array()) { parse_str($s, $result); }
        function mb_strlen($s, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_strlen($s, $enc); }
        function mb_strpos($s, $needle, $offset = 0, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_strpos($s, $needle, $offset, $enc); }
        function mb_strtolower($s, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_strtolower($s, $enc); }
        function mb_strtoupper($s, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_strtoupper($s, $enc); }
        function mb_substitute_character($char = null) { return FluidTYPO3\Vhs\Mbstring::mb_substitute_character($char); }
        function mb_substr($s, $start, $length = 2147483647, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_substr($s, $start, $length, $enc); }
        function mb_stripos($s, $needle, $offset = 0, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_stripos($s, $needle, $offset, $enc); }
        function mb_stristr($s, $needle, $part = false, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_stristr($s, $needle, $part, $enc); }
        function mb_strrchr($s, $needle, $part = false, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_strrchr($s, $needle, $part, $enc); }
        function mb_strrichr($s, $needle, $part = false, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_strrichr($s, $needle, $part, $enc); }
        function mb_strripos($s, $needle, $offset = 0, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_strripos($s, $needle, $offset, $enc); }
        function mb_strrpos($s, $needle, $offset = 0, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_strrpos($s, $needle, $offset, $enc); }
        function mb_strstr($s, $needle, $part = false, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_strstr($s, $needle, $part, $enc); }
        function mb_get_info($type = 'all') { return FluidTYPO3\Vhs\Mbstring::mb_get_info($type); }
        function mb_http_output($enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_http_output($enc); }
        function mb_strwidth($s, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_strwidth($s, $enc); }
        function mb_substr_count($haystack, $needle, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_substr_count($haystack, $needle, $enc); }
        function mb_output_handler($contents, $status) { return FluidTYPO3\Vhs\Mbstring::mb_output_handler($contents, $status); }
        function mb_http_input($type = '') { return FluidTYPO3\Vhs\Mbstring::mb_http_input($type); }
        function mb_convert_variables($toEncoding, $fromEncoding, &$a = null, &$b = null, &$c = null, &$d = null, &$e = null, &$f = null) { return FluidTYPO3\Vhs\Mbstring::mb_convert_variables($toEncoding, $fromEncoding, $a, $b, $c, $d, $e, $f); }
    }

    if (!function_exists('mb_chr')) {
        function mb_ord($s, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_ord($s, $enc); }
        function mb_chr($code, $enc = null) { return FluidTYPO3\Vhs\Mbstring::mb_chr($code, $enc); }
        function mb_scrub($s, $enc = null) { $enc = null === $enc ? mb_internal_encoding() : $enc; return mb_convert_encoding($s, $enc, $enc); }
    }
}
if (class_exists(\TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class)) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['vhs']['setup'] = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
    )->get('vhs');
} else {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['vhs']['setup'] = unserialize($_EXTCONF);
}

if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['vhs']['setup']['disableAssetHandling']) || !$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['vhs']['setup']['disableAssetHandling']) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['usePageCache'][] = 'FluidTYPO3\\Vhs\\Service\\AssetService';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-output'][] = 'FluidTYPO3\\Vhs\\Service\\AssetService->buildAllUncached';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'][] = 'FluidTYPO3\\Vhs\\Service\\AssetService->clearCacheCommand';
}

if (FALSE === is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['vhs_main'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['vhs_main'] = [
		'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
		'options' => [
			'defaultLifetime' => 804600
		],
		'groups' => ['pages', 'all']
	];
}

if (FALSE === is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['vhs_markdown'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['vhs_markdown'] = [
		'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
		'options' => [
			'defaultLifetime' => 804600
		],
		'groups' => ['pages', 'all']
	];
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['v'] = ['FluidTYPO3\\Vhs\\ViewHelpers'];

// add navigtion hide to fix menu viewHelpers (e.g. breadcrumb)
$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= (TRUE === empty($GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields']) ? '' : ',') . 'nav_hide,shortcut,shortcut_mode';

// add and urltype to fix the rendering of external url doktypes
if (isset($GLOBALS['TCA']['pages']['columns']['urltype'])) {
    $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',url,urltype';
}


/**
 * Extension: front
 * File: C:/xampp/htdocs/front/dev/typo3conf/ext/front/ext_localconf.php
 */



defined('TYPO3_MODE') || exit('Access denied.');

call_user_func(
    function () {
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    }
);
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('DEVELOPER.Front', 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('DEVELOPER.Front', 'Content');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:front/Configuration/TsConfig/*"');

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['front_minimal'] = 'EXT:front/Configuration/RTE/ProjectMinimal.yaml';
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['front_default'] = 'EXT:front/Configuration/RTE/ProjectDefault.yaml';
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['front_headline'] = 'EXT:front/Configuration/RTE/ProjectHeadline.yaml';


/**
 * Extension: oauth2_client
 * File: C:/xampp/htdocs/front/dev/typo3conf/ext/oauth2_client/ext_localconf.php
 */



defined('TYPO3') || die();

if (file_exists(__DIR__ . '/Resources/Private/PHP/autoload.php')) {
    require_once(__DIR__ . '/Resources/Private/PHP/autoload.php');
}

(static function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService(
        'oauth2_client',
        'auth',
        \Waldhacker\Oauth2Client\Authentication\BackendAuthenticationService::class,
        [
            'title' => 'OAuth2 Authentication',
            'description' => 'OAuth2 authentication for backend users',
            'subtype' => 'getUserBE,authUserBE',
            'available' => true,
            'priority' => 75,
            'quality' => 50,
            'os' => '',
            'exec' => '',
            'className' => \Waldhacker\Oauth2Client\Authentication\BackendAuthenticationService::class
        ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService(
        'oauth2_client',
        'auth',
        \Waldhacker\Oauth2Client\Authentication\FrontendAuthenticationService::class,
        [
            'title' => 'OAuth2 Authentication',
            'description' => 'OAuth2 authentication for frontend users',
            'subtype' => 'getUserFE,authUserFE',
            'available' => true,
            'priority' => 75,
            'quality' => 50,
            'os' => '',
            'exec' => '',
            'className' => \Waldhacker\Oauth2Client\Authentication\FrontendAuthenticationService::class
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'oauth2Client',
        'ManageProviders',
        [\Waldhacker\Oauth2Client\Controller\Frontend\ManageProvidersController::class => 'list,deactivate'],
        [\Waldhacker\Oauth2Client\Controller\Frontend\ManageProvidersController::class => 'list,deactivate']
    );

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'oauth2_client_plugin_manage_providers',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        [
            'source' => 'EXT:oauth2_client/Resources/Public/Icons/oauth2_client_plugin_manage_providers.svg'
        ]
    );

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['loginProviders'][\Waldhacker\Oauth2Client\Backend\LoginProvider\Oauth2LoginProvider::PROVIDER_ID] = [
        'provider' => \Waldhacker\Oauth2Client\Backend\LoginProvider\Oauth2LoginProvider::class,
        'sorting' => 25,
        'icon-class' => 'fa-key',
        'label' => 'LLL:EXT:oauth2_client/Resources/Private/Language/locallang_be.xlf:login.link',
    ];

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1616684029] = [
        'nodeName' => 'oauth2providers',
        'priority' => '70',
        'class' => \Waldhacker\Oauth2Client\Backend\Form\RenderType\Oauth2ProvidersElement::class,
    ];

    $GLOBALS['TYPO3_CONF_VARS']['DB']['additionalQueryRestrictions'][\Waldhacker\Oauth2Client\Database\Query\Restriction\Oauth2BeUserProviderConfigurationRestriction::class] = [];
    $GLOBALS['TYPO3_CONF_VARS']['DB']['additionalQueryRestrictions'][\Waldhacker\Oauth2Client\Database\Query\Restriction\Oauth2FeUserProviderConfigurationRestriction::class] = [];

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][1625556930] = \Waldhacker\Oauth2Client\Backend\DataHandling\DataHandlerHook::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][1625556930] = \Waldhacker\Oauth2Client\Backend\DataHandling\DataHandlerHook::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkModifyAccessList'][1625556930] = \Waldhacker\Oauth2Client\Backend\DataHandling\DataHandlerHook::class;

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['oauth2_client_RenameClientConfigsTableUpdateWizard20220122130120'] = \Waldhacker\Oauth2Client\Updates\RenameClientConfigsTableUpdateWizard20220122130120::class;

    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['oauth2_client'] = $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['oauth2_client'] ?? [];
})();


#
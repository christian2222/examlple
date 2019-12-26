<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SimpleParser.Cmsp',
            'Cmspfe',
            [
                'User' => 'list,search,index'
            ],
            // non-cacheable actions
            [
                'User' => 'list,search,index'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    cmspfe {
                        iconIdentifier = cmsp-plugin-cmspfe
                        title = LLL:EXT:cmsp/Resources/Private/Language/locallang_db.xlf:tx_cmsp_cmspfe.name
                        description = LLL:EXT:cmsp/Resources/Private/Language/locallang_db.xlf:tx_cmsp_cmspfe.description
                        tt_content_defValues {
                            CType = list
                            list_type = cmsp_cmspfe
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'cmsp-plugin-cmspfe',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:cmsp/Resources/Public/Icons/user_plugin_cmspfe.svg']
			);
		
    }
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:cmsp/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig">'
);

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

// use same identifier as used in TSconfig for icon
$iconRegistry->registerIcon(
   // use same identifier as used in TSconfig for icon
   'cmsp',
   \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
   // font-awesome identifier ('external-link-square')
   ['name' => 'external-link-square']
);

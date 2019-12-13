<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'GroupProject.NutrispecApp',
            'Nutrispec',
            [
                'Nutritionist' => 'list, show, new, create, edit, update, delete',
                'Clients' => 'list, show, new, create, edit, update, delete',
                'Blog' => 'list, show, new, create, edit, update, delete',
                'Specialization' => 'list, show, new, create, edit, update, delete',
                'ClientReport' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Nutritionist' => 'create, update, delete',
                'Clients' => 'create, update, delete',
                'Blog' => 'create, update, delete',
                'Specialization' => 'create, update, delete',
                'ClientReport' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'GroupProject.NutrispecApp',
            'Nutrispec_Nutritionist_List',
            [
                'Nutritionist' => 'list, show, new, create, edit, update, delete',
                'Clients' => 'list, show, new, create, edit, update, delete',
                'Blog' => 'list, show, new, create, edit, update, delete',
                'Specialization' => 'list, show, new, create, edit, update, delete',
                'ClientReport' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Nutritionist' => 'list, show, new, create, edit, update, delete',
                'Clients' => 'list, show, new, create, edit, update, delete',
                'Blog' => 'list, show, new, create, edit, update, delete',
                'Specialization' => 'list, show, new, create, edit, update, delete',
                'ClientReport' => 'list, show, new, create, edit, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'GroupProject.NutrispecApp',
            'Nutrispec_Client_List',
            [
                'Clients' => 'list, show, new, create, edit, update, delete',
                'Nutritionist' => 'list, show, new, create, edit, update, delete',
                'ClientReport' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Clients' => 'list, show, new, create, edit, update, delete',
                'Nutritionist' => 'list, show, new, create, edit, update, delete',
                'ClientReport' => 'list, show, new, create, edit, update, delete'
            ]
        );



        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        nutrispec {
                            iconIdentifier = nutrispec_app-plugin-nutrispec
                            title = LLL:EXT:nutrispec_app/Resources/Private/Language/locallang_db.xlf:tx_nutrispec_app_nutrispec.name
                            description = LLL:EXT:nutrispec_app/Resources/Private/Language/locallang_db.xlf:tx_nutrispec_app_nutrispec.description
                            tt_content_defValues {
                                CType = list
                                list_type = nutrispecapp_nutrispec
                            }
                        }
                        nutrispec_nutritionist_list {
                            iconIdentifier = nutrispec_app-plugin-nutrispec_nutritionist_list
                            title = Nutritionists List
                            description = Provides a list of all Nutritionists
                            tt_content_defValues {
                                CType = list
                                list_type = nutrispecapp_nutrispec_nutritionist_list
                            }
                        }
                        nutrispec_client_list {
                            iconIdentifier = nutrispec_app-plugin-nutrispec_client_list
                            title = Client List
                            description = Provides a list of all Clients
                            tt_content_defValues {
                                CType = list
                                list_type = nutrispecapp_nutrispec_client_list
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'nutrispec_app-plugin-nutrispec',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:nutrispec_app/Resources/Public/Icons/user_plugin_nutrispec.svg']
			);

            $iconRegistry->registerIcon(
                'nutrispec_app-plugin-nutrispec_nutritionist_list',
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => 'EXT:nutrispec_app/Resources/Public/Icons/user_plugin_nutrispec.svg']
            );
            $iconRegistry->registerIcon(
                'nutrispec_app-plugin-nutrispec_client_list',
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => 'EXT:nutrispec_app/Resources/Public/Icons/user_plugin_nutrispec.svg']
            );
		
    }
);

<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_topic',
        'label' => 'title_sk',
		'label_alt' => 'program',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'program,supervisor_link,title_sk,title_en,goals_sk,goals_en,annotation_sk,annotation_en,literature,note',
        'iconfile' => 'EXT:showmi/Resources/Public/Icons/tx_showmi_dm_topic.png'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, program, supervisor_link, title_sk, title_en, goals_sk, goals_en, annotation_sk, annotation_en, literature, note',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, program, supervisor_link, title_sk, title_en, goals_sk, goals_en, annotation_sk, annotation_en, literature, note, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_showmi_domain_model_topic',
                'foreign_table_where' => 'AND tx_showmi_domain_model_topic.pid=###CURRENT_PID### AND tx_showmi_domain_model_topic.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'program' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_topic.program',
            'config' => [
                'type' => 'radio',
                'default' => '',
                'items' => [
					['LLL:EXT:showmi/Resources/Private/Language/locallang_be.xlf:flexforms_study.4.1.3', '4.1.3'],
					['LLL:EXT:showmi/Resources/Private/Language/locallang_be.xlf:flexforms_study.5.2.48', '5.2.48'],
					['LLL:EXT:showmi/Resources/Private/Language/locallang_be.xlf:flexforms_study.4.1.5', '4.1.5'],
					['LLL:EXT:showmi/Resources/Private/Language/locallang_be.xlf:flexforms_study.4.1.4', '4.1.4'],
					['LLL:EXT:showmi/Resources/Private/Language/locallang_be.xlf:flexforms_study.4.1.2', '4.1.2'],
					['LLL:EXT:showmi/Resources/Private/Language/locallang_be.xlf:flexforms_study.MSc', 'MSc'],
					['LLL:EXT:showmi/Resources/Private/Language/locallang_be.xlf:flexforms_study.Bc', 'Bc'],
					['LLL:EXT:showmi/Resources/Private/Language/locallang_be.xlf:flexforms_study.SVOC', 'SVOC'],
				],
				'eval' => 'required',
            ]
        ],
        'supervisor_link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_topic.supervisor_link',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_showmi_domain_model_personnel',
                'foreign_table_where' => 'AND tx_showmi_domain_model_personnel.status = "now" ORDER BY tx_showmi_domain_model_personnel.surname ASC',
                'size' => 9,
                'minitems' => 0,
                'maxitems' => 1,
				'eval' => 'required',
            ],
        ],
        'title_sk' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_topic.title_sk',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'title_en' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_topic.title_en',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'goals_sk' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_topic.goals_sk',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'full',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 5,
                'eval' => 'trim',
            ],
            
        ],
        'goals_en' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_topic.goals_en',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'full',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 5,
                'eval' => 'trim',
            ],
            
        ],
        'annotation_sk' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_topic.annotation_sk',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'full',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'annotation_en' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_topic.annotation_en',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'full',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
            
        ],
        'literature' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_topic.literature',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'full',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 5,
                'eval' => 'trim',
            ],
            
        ],
        'note' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_topic.note',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
    
    ],
];

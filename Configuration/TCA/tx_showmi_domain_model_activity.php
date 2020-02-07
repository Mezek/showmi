<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_activity',
        'label' => 'title',
        'sortby' => 'sorting',
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
        'searchFields' => 'sender_name,sender_email,date,author,type,place,title,weblink,author_link',
        'iconfile' => 'EXT:showmi/Resources/Public/Icons/tx_showmi_dm_activity.png'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, sender_name, sender_email, date, author, type, place, title, weblink, author_link',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, sender_name, sender_email, date, author, type, place, title, weblink, author_link, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_showmi_domain_model_activity',
                'foreign_table_where' => 'AND tx_showmi_domain_model_activity.pid=###CURRENT_PID### AND tx_showmi_domain_model_activity.sys_language_uid IN (-1,0)',
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

        'sender_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_activity.sender_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
				'max' => '255',
				'default' => 'internal'
            ],
        ],
        'sender_email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_activity.sender_email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,email',
				'max' => '255',
				'default' => 'user@typo3.sk'
            ],
        ],
        'date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_activity.date',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date,required',
                'default' => null,
            ],
        ],
        'author' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_activity.author_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
				'max' => '255'
            ],
        ],
        'type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_activity.type',
            'config' => [
                'type' => 'radio',
                'default' => 'internet',
                'items' => [
					['beseda', 'beseda'],
					['internet', 'internet'],
					['prednáška', 'prednáška'],
					['rozhlas', 'rozhlas'],
					['tlač', 'tlač'],
					['televízia', 'televízia'],
				],
            ],
        ],
        'place' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_activity.place',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
				'max' => '255'
            ],
        ],
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_activity.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
				'max' => '255'
            ],
        ],
        'weblink' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_activity.weblink',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'author_link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:showmi/Resources/Private/Language/locallang_db.xlf:tx_showmi_domain_model_activity.author_link',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
    
    ],
];

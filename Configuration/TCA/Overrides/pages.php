<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$accessibility = [
    'tx_accesskey_page' => [
        'label' => 'LLL:EXT:sitepackage_accesskeys/Resources/Private/Language/locallang.xlf:accesskeyForThisPage',
        'exclude' => 1,
        'config' => [
            'type' => 'input',
            'max' => 1,
            'eval' => 'trim,alpha,unique,lower'
        ],
    ]
];


// Add new fields to pages:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $accessibility );

// Make fields accessibility visible in the TCEforms:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
'pages', // Table name
'--palette--;LLL:EXT:easy_accesskeys/Resources/Private/Language/locallang.xlf:accessibility;tx_easy_accesskeys', // Field list to add
'1', // List of specific types to add the field list to. (If empty, all type entries are affected)
'after:title' // Insert fields before (default) or after one, or replace a field
);

// Add the palette accessibility:
$GLOBALS['TCA']['pages']['palettes']['tx_easy_accesskeys'] = [
'showitem' => 'tx_accesskey_page'
];

<?php

// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:easy_accesskeys/Resources/Private/Language/locallang.xlf:accesskeyList',
        'easy_accesskeys_list',
        'easy_accesskeys_keyboard',
    ],
    'abstract',
    'before'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:easy_accesskeys/Resources/Private/Language/locallang.xlf:accesskeyMenuHidden',
        'easy_accesskeys_menuHidden',
        'easy_accesskeys_keyboard_gray',
    ],
    'abstract',
    'before'
);

<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:easy_accesskeys/Configuration/TSconfig/Page.tsconfig"');



// Register content element icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'easy_accesskeys_keyboard',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:easy_accesskeys/Resources/Public/Icons/keyboard-regular.svg',
    ]
);
$iconRegistry->registerIcon(
    'easy_accesskeys_keyboard_gray',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
        'source' => 'EXT:easy_accesskeys/Resources/Public/Icons/keyboard-regular-gray.svg',
    ]
);

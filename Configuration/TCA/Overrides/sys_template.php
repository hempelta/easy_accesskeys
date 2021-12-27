<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'easy_accesskeys',
        'Configuration/TypoScript/',
        'Easy Accesskeys'
    );
});

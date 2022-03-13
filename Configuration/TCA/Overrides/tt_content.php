<?php
defined('TYPO3') || die();

// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:tinyclassifieds/Resources/Private/Language/locallang_db.xlf:tt_content.tinyclassifieds_list',
        'tinyclassifieds_list',
        'content-special-menu',
    ],
    'textmedia',
    'after'
);

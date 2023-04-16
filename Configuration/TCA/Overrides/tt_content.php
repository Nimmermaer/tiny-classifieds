<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die();

// Adds the content element to the "Type" dropdown
ExtensionManagementUtility::addTcaSelectItem(
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

ExtensionUtility::registerPlugin(
    'tinyclassifieds',
    'list',
    'List',
    'actions-list-alternative'
);

$GLOBALS['TCA']['tt_content']['types']['tinyclassifieds_list'] = $GLOBALS['TCA']['tt_content']['types']['text'];

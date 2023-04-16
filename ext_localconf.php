<?php

declare(strict_types=1);

use Nimmermaer\Tinyclassifieds\Controller\ListController;
use Nimmermaer\Tinyclassifieds\Hooks\Form\AuthorHandling;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(static function () {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterBuildingFinished'][1_647_202_696]
        = AuthorHandling::class;

    ExtensionUtility::configurePlugin(
        'tinyclassifieds',
        'list',
        [
            ListController::class => 'list',
        ],
        [
            ListController::class => 'list',
        ],
        ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );
})();

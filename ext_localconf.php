<?php

declare(strict_types=1);


defined('TYPO3') or die();

(static function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:tinyclassifieds/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig"');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:tinyclassifieds/Configuration/TsConfig/TCEForm.tsconfig"');

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['afterBuildingFinished'][1647202696]
        = \Nimmermaer\Tinyclassifieds\Hooks\Form\AuthorHandling::class;
})();

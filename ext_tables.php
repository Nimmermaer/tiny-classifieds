<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

(static function () {
    ExtensionManagementUtility::addLLrefForTCAdescr(
        'tx_tinyclassifieds_domain_model_classifieds',
        'EXT:tinyclassifieds/Resources/Private/Language/locallang_csh_tx_tinyclassifieds_domain_model_classifieds.xlf'
    );
    ExtensionManagementUtility::allowTableOnStandardPages('tx_tinyclassifieds_domain_model_classifieds');
})();

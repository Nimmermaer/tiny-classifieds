<?php
defined('TYPO3') || die();

(static function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_tinyclassifieds_domain_model_classifieds',
        'EXT:tinyclassifieds/Resources/Private/Language/locallang_csh_tx_tinyclassifieds_domain_model_classifieds.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_tinyclassifieds_domain_model_classifieds');
})();

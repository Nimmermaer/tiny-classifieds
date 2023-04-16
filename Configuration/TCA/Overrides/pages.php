<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

ExtensionManagementUtility::registerPageTSConfigFile(
    'tinyclassifieds',
    'Configuration/TsConfig/All.tsconfig',
    'Tiny classifieds configuration'
);

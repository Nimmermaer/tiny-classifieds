<?php

declare(strict_types=1);

use Nimmermaer\Tinyclassifieds\Domain\Model\Advertisement;
use Nimmermaer\Tinyclassifieds\Domain\Model\FrontendUser;

return [
    FrontendUser::class => [
        'tableName' => 'fe_users',
    ],
    Advertisement::class => [
        'tableName' => 'tx_tinyclassifieds_domain_model_classifieds',
    ],
];

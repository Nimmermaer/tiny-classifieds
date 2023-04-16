<?php

declare(strict_types=1);

namespace Nimmermaer\Tinyclassifieds\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class FrontendUser extends AbstractEntity
{
    public string $username = '';

    public string $email = '';
}

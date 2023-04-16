<?php

declare(strict_types=1);

namespace Nimmermaer\Tinyclassifieds\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Advertisement extends AbstractEntity
{
    public string $title = '';

    public ?FrontendUser $author = null;

    public float $price = 0.00;

    /**
     * @var ObjectStorage<FileReference>|null
     */
    public ?ObjectStorage $images = null;

    public function __construct()
    {
        $this->images = new ObjectStorage();
    }
}

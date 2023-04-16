<?php

declare(strict_types=1);

namespace Nimmermaer\Tinyclassifieds\Hooks\Form;

use TYPO3\CMS\Form\Domain\Model\FormElements\GenericFormElement;
use TYPO3\CMS\Form\Domain\Model\Renderable\RenderableInterface;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

class AuthorHandling
{
    public function afterBuildingFinished(RenderableInterface $renderable):void
    {
        /** @var TypoScriptFrontendController $typoScriptFrontendController */
        $typoScriptFrontendController = $GLOBALS['TSFE'];
        if (is_array($typoScriptFrontendController->fe_user->user)) {
            /** @var GenericFormElement $renderable */
            if ($renderable->getIdentifier() === 'author') {
                $renderable->setDefaultValue($typoScriptFrontendController->fe_user->user['uid']);
            }
        }
    }
}

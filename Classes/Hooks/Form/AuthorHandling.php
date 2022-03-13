<?php

namespace Nimmermaer\Tinyclassifieds\Hooks\Form;

use TYPO3\CMS\Form\Domain\Model\Renderable\RenderableInterface;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

class AuthorHandling
{
    /**
     * @param RenderableInterface $renderable
     * @return void
     */
    public function afterBuildingFinished(RenderableInterface $renderable)
    {
        /** @var TypoScriptFrontendController $typoScriptFrontendController */
        $typoScriptFrontendController = $GLOBALS['TSFE'];
        if (is_array($typoScriptFrontendController->fe_user->user)) {
            /** @var \TYPO3\CMS\Form\Domain\Model\FormElements\GenericFormElement $renderable */
            if ($renderable->getIdentifier() === 'author') {
                $renderable->setDefaultValue($typoScriptFrontendController->fe_user->user['uid']);
            }
        }
    }
}

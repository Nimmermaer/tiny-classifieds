<?php

declare(strict_types=1);

namespace Nimmermaer\Tinyclassifieds\Controller;


/**
 * This file is part of the "tinyclassifieds" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Michael Blunck <mi.blunck@gmail.com>
 */

/**
 * ClassifiedsController
 */
class ClassifiedsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * classifiedsRepository
     *
     * @var \Nimmermaer\Tinyclassifieds\Domain\Repository\ClassifiedsRepository
     */
    protected $classifiedsRepository = null;

    /**
     * @param \Nimmermaer\Tinyclassifieds\Domain\Repository\ClassifiedsRepository $classifiedsRepository
     */
    public function injectClassifiedsRepository(\Nimmermaer\Tinyclassifieds\Domain\Repository\ClassifiedsRepository $classifiedsRepository)
    {
        $this->classifiedsRepository = $classifiedsRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $classifieds = $this->classifiedsRepository->findAll();
        $this->view->assign('classifieds', $classifieds);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Nimmermaer\Tinyclassifieds\Domain\Model\Classifieds $classifieds
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Nimmermaer\Tinyclassifieds\Domain\Model\Classifieds $classifieds): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('classifieds', $classifieds);
        return $this->htmlResponse();
    }
}

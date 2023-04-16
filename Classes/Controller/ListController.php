<?php

declare(strict_types=1);

namespace Nimmermaer\Tinyclassifieds\Controller;

use Nimmermaer\Tinyclassifieds\Domain\Repository\AdvertisementRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Pagination\SimplePagination;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Pagination\QueryResultPaginator;

class ListController extends ActionController
{
    public function __construct(
        private AdvertisementRepository $advertisementRepository
    ) {
    }

    public function listAction(): ResponseInterface
    {
        $advertisements = $this->advertisementRepository->findAll();
        $page = $this->request->hasArgument('page') ? $this->request->getArgument('page') : 1;
        $paginator = new QueryResultPaginator($advertisements, (int) $page, 3);
        $pagination = new SimplePagination($paginator);

        $this->view->assignMultiple([
            'advertisements' => $paginator->getPaginatedItems(),
            'pagination' => $pagination,
        ]);
        return $this->htmlResponse();
    }
}

<?php
declare(strict_types=1);

namespace Nimmermaer\Tinyclassifieds\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 *
 * @author Michael Blunck <mi.blunck@gmail.com>
 */
class ClassifiedsControllerTest extends UnitTestCase
{
    /**
     * @var \Nimmermaer\Tinyclassifieds\Controller\ClassifiedsController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Nimmermaer\Tinyclassifieds\Controller\ClassifiedsController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllClassifiedsFromRepositoryAndAssignsThemToView(): void
    {
        $allClassifieds = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $classifiedsRepository = $this->getMockBuilder(\Nimmermaer\Tinyclassifieds\Domain\Repository\ClassifiedsRepository::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $classifiedsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allClassifieds));
        $this->subject->_set('classifiedsRepository', $classifiedsRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('classifieds', $allClassifieds);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenClassifiedsToView(): void
    {
        $classifieds = new \Nimmermaer\Tinyclassifieds\Domain\Model\Classifieds();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('classifieds', $classifieds);

        $this->subject->showAction($classifieds);
    }
}

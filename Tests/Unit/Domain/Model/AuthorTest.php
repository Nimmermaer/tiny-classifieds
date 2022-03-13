<?php
declare(strict_types=1);

namespace Nimmermaer\Tinyclassifieds\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Michael Blunck <mi.blunck@gmail.com>
 */
class AuthorTest extends UnitTestCase
{
    /**
     * @var \Nimmermaer\Tinyclassifieds\Domain\Model\Author|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Nimmermaer\Tinyclassifieds\Domain\Model\Author::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty(): void
    {
        self::markTestIncomplete();
    }
}

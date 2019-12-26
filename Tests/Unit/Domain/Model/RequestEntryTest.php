<?php
namespace SimpleParser\Cmsp\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class RequestEntryTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \SimpleParser\Cmsp\Domain\Model\RequestEntry
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SimpleParser\Cmsp\Domain\Model\RequestEntry();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getEntrySearchReturnsInitialValueForRequestSearch()
    {
        self::assertEquals(
            null,
            $this->subject->getEntrySearch()
        );
    }

    /**
     * @test
     */
    public function setEntrySearchForRequestSearchSetsEntrySearch()
    {
        $entrySearchFixture = new \SimpleParser\Cmsp\Domain\Model\RequestSearch();
        $this->subject->setEntrySearch($entrySearchFixture);

        self::assertAttributeEquals(
            $entrySearchFixture,
            'entrySearch',
            $this->subject
        );
    }
}

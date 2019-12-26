<?php
namespace SimpleParser\Cmsp\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class RequestSearchTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \SimpleParser\Cmsp\Domain\Model\RequestSearch
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SimpleParser\Cmsp\Domain\Model\RequestSearch();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSearchUserReturnsInitialValueFor()
    {
    }

    /**
     * @test
     */
    public function setSearchUserForSetsSearchUser()
    {
    }

    /**
     * @test
     */
    public function getSearchEntryReturnsInitialValueFor()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSearchEntry()
        );
    }

    /**
     * @test
     */
    public function setSearchEntryForObjectStorageContainingSetsSearchEntry()
    {
        $searchEntry = new ();
        $objectStorageHoldingExactlyOneSearchEntry = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSearchEntry->attach($searchEntry);
        $this->subject->setSearchEntry($objectStorageHoldingExactlyOneSearchEntry);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSearchEntry,
            'searchEntry',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSearchEntryToObjectStorageHoldingSearchEntry()
    {
        $searchEntry = new ();
        $searchEntryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $searchEntryObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($searchEntry));
        $this->inject($this->subject, 'searchEntry', $searchEntryObjectStorageMock);

        $this->subject->addSearchEntry($searchEntry);
    }

    /**
     * @test
     */
    public function removeSearchEntryFromObjectStorageHoldingSearchEntry()
    {
        $searchEntry = new ();
        $searchEntryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $searchEntryObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($searchEntry));
        $this->inject($this->subject, 'searchEntry', $searchEntryObjectStorageMock);

        $this->subject->removeSearchEntry($searchEntry);
    }
}

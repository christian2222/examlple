<?php
namespace SimpleParser\Cmsp\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class UserTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \SimpleParser\Cmsp\Domain\Model\User
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SimpleParser\Cmsp\Domain\Model\User();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getUserSearchReturnsInitialValueForRequestSearch()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getUserSearch()
        );
    }

    /**
     * @test
     */
    public function setUserSearchForObjectStorageContainingRequestSearchSetsUserSearch()
    {
        $userSearch = new \SimpleParser\Cmsp\Domain\Model\RequestSearch();
        $objectStorageHoldingExactlyOneUserSearch = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneUserSearch->attach($userSearch);
        $this->subject->setUserSearch($objectStorageHoldingExactlyOneUserSearch);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneUserSearch,
            'userSearch',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addUserSearchToObjectStorageHoldingUserSearch()
    {
        $userSearch = new \SimpleParser\Cmsp\Domain\Model\RequestSearch();
        $userSearchObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $userSearchObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($userSearch));
        $this->inject($this->subject, 'userSearch', $userSearchObjectStorageMock);

        $this->subject->addUserSearch($userSearch);
    }

    /**
     * @test
     */
    public function removeUserSearchFromObjectStorageHoldingUserSearch()
    {
        $userSearch = new \SimpleParser\Cmsp\Domain\Model\RequestSearch();
        $userSearchObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $userSearchObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($userSearch));
        $this->inject($this->subject, 'userSearch', $userSearchObjectStorageMock);

        $this->subject->removeUserSearch($userSearch);
    }
}

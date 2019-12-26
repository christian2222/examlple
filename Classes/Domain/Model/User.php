<?php
namespace SimpleParser\Cmsp\Domain\Model;


/***
 *
 * This file is part of the "cmSimpleParser" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * User
 */
class User extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Searchrequests
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SimpleParser\Cmsp\Domain\Model\RequestSearch>
     * @cascade remove
     */
    protected $userSearch = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->userSearch = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a RequestSearch
     * 
     * @param \SimpleParser\Cmsp\Domain\Model\RequestSearch $userSearch
     * @return void
     */
    public function addUserSearch(\SimpleParser\Cmsp\Domain\Model\RequestSearch $userSearch)
    {
        $this->userSearch->attach($userSearch);
    }

    /**
     * Removes a RequestSearch
     * 
     * @param \SimpleParser\Cmsp\Domain\Model\RequestSearch $userSearchToRemove The RequestSearch to be removed
     * @return void
     */
    public function removeUserSearch(\SimpleParser\Cmsp\Domain\Model\RequestSearch $userSearchToRemove)
    {
        $this->userSearch->detach($userSearchToRemove);
    }

    /**
     * Returns the userSearch
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SimpleParser\Cmsp\Domain\Model\RequestSearch> $userSearch
     */
    public function getUserSearch()
    {
        return $this->userSearch;
    }

    /**
     * Sets the userSearch
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SimpleParser\Cmsp\Domain\Model\RequestSearch> $userSearch
     * @return void
     */
    public function setUserSearch(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $userSearch)
    {
        $this->userSearch = $userSearch;
    }
}

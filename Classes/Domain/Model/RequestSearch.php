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
 * RequestSearch
 */
class RequestSearch extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * searchUser
     * 
     * @var
     */
    protected $searchUser = null;

    /**
     * Searchentry
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<>
     * @cascade remove
     */
    protected $searchEntry = null;

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
        $this->searchEntry = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the searchUser
     * 
     * @return  $searchUser
     */
    public function getSearchUser()
    {
        return $this->searchUser;
    }

    /**
     * Sets the searchUser
     * 
     * @param string $searchUser
     * @return void
     */
    public function setSearchUser($searchUser)
    {
        $this->searchUser = $searchUser;
    }

    /**
     * Adds a
     * 
     * @param  $searchEntry
     * @return void
     */
    public function addSearchEntry($searchEntry)
    {
        $this->searchEntry->attach($searchEntry);
    }

    /**
     * Removes a
     * 
     * @param $searchEntryToRemove The  to be removed
     * @return void
     */
    public function removeSearchEntry($searchEntryToRemove)
    {
        $this->searchEntry->detach($searchEntryToRemove);
    }

    /**
     * Returns the searchEntry
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $searchEntry
     */
    public function getSearchEntry()
    {
        return $this->searchEntry;
    }

    /**
     * Sets the searchEntry
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $searchEntry
     * @return void
     */
    public function setSearchEntry(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $searchEntry)
    {
        $this->searchEntry = $searchEntry;
    }
}

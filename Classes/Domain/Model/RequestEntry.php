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
 * RequestEntry
 */
class RequestEntry extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * entrySearch
     * 
     * @var \SimpleParser\Cmsp\Domain\Model\RequestSearch
     */
    protected $entrySearch = null;

    /**
     * Returns the entrySearch
     * 
     * @return \SimpleParser\Cmsp\Domain\Model\RequestSearch $entrySearch
     */
    public function getEntrySearch()
    {
        return $this->entrySearch;
    }

    /**
     * Sets the entrySearch
     * 
     * @param \SimpleParser\Cmsp\Domain\Model\RequestSearch $entrySearch
     * @return void
     */
    public function setEntrySearch(\SimpleParser\Cmsp\Domain\Model\RequestSearch $entrySearch)
    {
        $this->entrySearch = $entrySearch;
    }
}

<?php

namespace Mezek\Showmi\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class TopicRepository
 *
 * @package Mezek\Showmi\Domain\Repository
 */
class TopicRepository extends Repository
{
    /**
     * @var array
     */
	protected $defaultOrderings = [
		'program' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
		'supervisor_link' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
	];
	
	/**
	* Find topics for program.
	*
	* @param program settings.program
	* @return object The matching objects if found
	* @api
	*/
	public function findTopics($program)
	{
		$query = $this->createQuery();
		$query->matching($query->equals('program', $program));
		return $query->execute();
	}
}

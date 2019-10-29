<?php

namespace Mezek\Showmi\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class ActivityRepository
 *
 * @package Mezek\Showmi\Domain\Repository
 */
class ActivityRepository extends Repository
{
	/**
	 * @var array
	 */
	protected $defaultOrderings = [
		'date' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING
	];
	
	/**
	* Find all objects with query.
	*
	* @return object The matching objects if found
	* @api
	*/
	public function findInternet()
	{
		$query = $this->createQuery();
		$query->matching($query->equals('type', 'internet'));
		return $query->execute();
	}
}

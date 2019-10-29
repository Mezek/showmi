<?php

namespace Mezek\Showmi\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class PersonnelRepository
 *
 * @package Mezek\Showmi\Domain\Repository
 */
class PersonnelRepository extends Repository
{
    /**
     * @var array
     */
	protected $defaultOrderings = [
		'surname' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
	];
	
	/**
	* Find current staff.
	*
	* @return object The matching objects if found
	* @api
	*/
	public function findCurrent()
	{
		$query = $this->createQuery();
		$query->matching($query->equals('status', 'now'));
		return $query->execute();
	}
	
	/**
	* Find all PhD studentns.
	*
	* @return object The matching objects if found
	* @api
	*/
	public function findStudents()
	{
		$query = $this->createQuery();
		$query->matching(
			$query->logicalAnd(
				[
					$query->equals('status', 'now'),
					$query->equals('phd_student', 'now')
				]
			)
		);
		return $query->execute();
	}

	/**
	* Find department's staff.
	* 
	* @param dept settings.department
	* @return object The matching objects if found
	* @api
	*/
	public function findDepartment($dept)
	{
		$query = $this->createQuery();
		$query->matching(
			$query->logicalAnd(
				[
					$query->equals('status', 'now'),
					$query->equals('department', $dept)
				]
			)
		);
		return $query->execute();
	}
	
	/**
	* Find succesfull defenses.
	* 
	* @return object The matching objects if found
	* @api
	*/
	public function findDefense()
	{
		$query = $this->createQuery();
		$query->matching(
			$query->logicalAnd(
				[
					$query->logicalNot($query->equals('defense', 0)),
					$query->equals('phd_student', 'former')
				]
			)
		);
		$query->setOrderings(
			[
				'defense' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING
			]
		);
		return $query->execute();
	}
} 
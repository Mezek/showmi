<?php
namespace Mezek\Showmi\Controller;

use Mezek\Showmi\Domain\Repository\PersonnelRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/***
 *
 * This file is part of the "Data listings" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Erik Bartoš
 *
 ***/

/**
 * Class PersonnelController
 *
 * @package Mezek\Showmi\Controller
 */
class PersonnelController extends ActionController
{
    /**
     * @var PersonnelRepository
     */
    private $personnelRepository = null;

    /**
     * Inject the personnel repository
     *
     * @param \Mezek\Showmi\Domain\Repository\PersonnelRepository $personnelRepository
     */
    public function injectPersonnelRepository(PersonnelRepository $personnelRepository)
    {
        $this->personnelRepository = $personnelRepository;
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
		$persons = $this->personnelRepository->findAll();
		$this->view->assign('persons', $persons);
    }
	
    /**
     * action current
     *
     * @return void
     */
    public function currentAction()
    {
		$persons = $this->personnelRepository->findCurrent();
		$this->view->assign('persons', $persons);
    }
	
	/**
     * action singlePerson
     *
	 * @param \Mezek\Showmi\Domain\Model\Personnel $person
     * @return void
     */
    public function singlePersonAction(\Mezek\Showmi\Domain\Model\Personnel $person)
    {
		$this->view->assign('person', $person);
    }
	
	/**
     * action students
     *
     * @return void
     */
    public function studentsAction()
    {
		$persons = $this->personnelRepository->findStudents();
		$this->view->assign('persons', $persons);
    }
	
	/**
     * action singleStudent
     *
	 * @param \Mezek\Showmi\Domain\Model\Personnel $person
     * @return void
     */
    public function singleStudentAction(\Mezek\Showmi\Domain\Model\Personnel $person)
    {
		$this->view->assign('person', $person);
    }
	
	/**
     * action department
     *
     * @return void
     */
    public function departmentAction()
    {
		$dept = $this->settings['department'];
		$persons = $this->personnelRepository->findDepartment($dept);
		$this->view->assign('persons', $persons);
    }
	
	/**
     * action defense
     *
     * @return void
     */
    public function defenseAction()
    {
		$persons = $this->personnelRepository->findDefense();
		$this->view->assign('persons', $persons);
    }
	
	/**
     * action singleDefense
     *
	 * @param \Mezek\Showmi\Domain\Model\Personnel $person
     * @return void
     */
    public function singleDefenseAction(\Mezek\Showmi\Domain\Model\Personnel $person)
    {
		$this->view->assign('person', $person);
    }
}

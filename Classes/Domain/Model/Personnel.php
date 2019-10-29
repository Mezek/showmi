<?php

namespace Mezek\Showmi\Domain\Model;

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
 * Personnel
 */
class Personnel extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * sasid
     *
     * @var int
     */
    protected $sasid = 0;

    /**
     * orcid
     *
     * @var string
     */
    protected $orcid = '';

    /**
     * arlid
     *
     * @var string
     */
    protected $arlid = '';

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * surname
     *
     * @var string
     */
    protected $surname = '';

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';
	
    /**
     * status
     *
     * @var string
     */
    protected $status = '';

    /**
     * department
     *
     * @var string
     */
    protected $department = '';

    /**
     * function
     *
     * @var string
     */
    protected $function = '';

    /**
     * functionEn
     *
     * @var string
     */
    protected $functionEn = '';

    /**
     * phone
     *
     * @var string
     */
    protected $phone = '';

    /**
     * doors
     *
     * @var string
     */
    protected $doors = '';

    /**
     * building
     *
     * @var string
     */
    protected $building = '';

    /**
     * phdStudent
     *
     * @var string
     */
    protected $phdStudent = '';

    /**
     * program
     *
     * @var string
     */
    protected $program = '';

    /**
     * supervisor
     *
     * @var string
     */
    protected $supervisor = '';

    /**
     * theme
     *
     * @var string
     */
    protected $theme = '';

    /**
     * defense
     *
     * @var int
     */
    protected $defense = 0;

    /**
     * webpage
     *
     * @var string
     */
    protected $webpage = '';

    /**
     * Personnel constructor.
     *
     * @param int $sasid
	 * @param string $orcid
	 * @param string $arlid
	 * @param string $name
	 * @param string $surname
	 * @param string $title
	 * @param string $email
	 * @param string $status
	 * @param string $department
	 * @param string $function
	 * @param string $functionEn
	 * @param string $phone
	 * @param string $doors
	 * @param string $building
	 * @param string $phdStudent
	 * @param string $program
	 * @param string $supervisor
	 * @param string $theme
	 * @param int $defense
	 * @param string $webpage
     */
    public function __construct($sasid = 0, $orcid = '', $arlid = '', $name = '', $surname = '', $title = '', $email = '', $status = '', $department = '', $function = '', $functionEn = '', $phone = '', $doors = '', $building = '', $phdStudent = '', $program = '', $supervisor = '', $theme = '', $defense = 0, $webpage = '')
    {
        $this->setSasid($sasid);
		$this->setOrcid($orcid);
		$this->setArlid($arlid);
		$this->setName($name);
		$this->setSurname($surname);
		$this->setTitle($title);
		$this->setEmail($email);
		$this->setStatus($status);		
		$this->setDepartment($department);
		$this->setFunction($function);
		$this->setFunctionEn($functionEn);
		$this->setPhone($phone);
		$this->setDoors($doors);
		$this->setBuilding($building);
		$this->setPhdStudent($phdStudent);
		$this->setProgram($program);
		$this->setSupervisor($supervisor);
		$this->setTheme($theme);
		$this->setDefense($defense);
		$this->setWebpage($webpage);
    }

    /**
     * Returns the sasid
     *
     * @return int $sasid
     */
    public function getSasid()
    {
        return $this->sasid;
    }

    /**
     * Sets the sasid
     *
     * @param int $sasid
     * @return void
     */
    public function setSasid($sasid)
    {
        $this->sasid = $sasid;
    }

    /**
     * Returns the orcid
     *
     * @return string $orcid
     */
    public function getOrcid()
    {
        return $this->orcid;
    }

    /**
     * Sets the orcid
     *
     * @param string $orcid
     * @return void
     */
    public function setOrcid($orcid)
    {
        $this->orcid = $orcid;
    }

    /**
     * Returns the arlid
     *
     * @return string $arlid
     */
    public function getArlid()
    {
        return $this->arlid;
    }

    /**
     * Sets the arlid
     *
     * @param string $arlid
     * @return void
     */
    public function setArlid($arlid)
    {
        $this->arlid = $arlid;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the surname
     *
     * @return string $surname
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Sets the surname
     *
     * @param string $surname
     * @return void
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the status
     *
     * @return string $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the status
     *
     * @param string $status
     * @return void
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Returns the department
     *
     * @return string $department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Sets the department
     *
     * @param string $department
     * @return void
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * Returns the function
     *
     * @return string $function
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets the function
     *
     * @param string $function
     * @return void
     */
    public function setFunction($function)
    {
        $this->function = $function;
    }

    /**
     * Returns the functionEn
     *
     * @return string $functionEn
     */
    public function getFunctionEn()
    {
        return $this->functionEn;
    }

    /**
     * Sets the functionEn
     *
     * @param string $functionEn
     * @return void
     */
    public function setFunctionEn($functionEn)
    {
        $this->functionEn = $functionEn;
    }

    /**
     * Returns the phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone
     *
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Returns the doors
     *
     * @return string $doors
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * Sets the doors
     *
     * @param string $doors
     * @return void
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;
    }

    /**
     * Returns the building
     *
     * @return string $building
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Sets the building
     *
     * @param string $building
     * @return void
     */
    public function setBuilding($building)
    {
        $this->building = $building;
    }

    /**
     * Returns the phdStudent
     *
     * @return string $phdStudent
     */
    public function getPhdStudent()
    {
        return $this->phdStudent;
    }

    /**
     * Sets the phdStudent
     *
     * @param string $phdStudent
     * @return void
     */
    public function setPhdStudent($phdStudent)
    {
        $this->phdStudent = $phdStudent;
    }

    /**
     * Returns the program
     *
     * @return string $program
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Sets the program
     *
     * @param string $program
     * @return void
     */
    public function setProgram($program)
    {
        $this->program = $program;
    }

    /**
     * Returns the supervisor
     *
     * @return string $supervisor
     */
    public function getSupervisor()
    {
        return $this->supervisor;
    }

    /**
     * Sets the supervisor
     *
     * @param string $supervisor
     * @return void
     */
    public function setSupervisor($supervisor)
    {
        $this->supervisor = $supervisor;
    }

    /**
     * Returns the theme
     *
     * @return string $theme
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Sets the theme
     *
     * @param string $theme
     * @return void
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    /**
     * Returns the defense
     *
     * @return int $defense
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Sets the defense
     *
     * @param int $defense
     * @return void
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;
    }

    /**
     * Returns the webpage
     *
     * @return string $webpage
     */
    public function getWebpage()
    {
        return $this->webpage;
    }

    /**
     * Sets the webpage
     *
     * @param string $webpage
     * @return void
     */
    public function setWebpage($webpage)
    {
        $this->webpage = $webpage;
    }
}

<?php
namespace Mezek\Showmi\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class PersonnelTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Mezek\Showmi\Domain\Model\Personnel
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Mezek\Showmi\Domain\Model\Personnel();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSasidReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSasid()
        );
    }

    /**
     * @test
     */
    public function setSasidForIntSetsSasid()
    {
        $this->subject->setSasid(12);

        self::assertAttributeEquals(
            12,
            'sasid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrcidReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOrcid()
        );
    }

    /**
     * @test
     */
    public function setOrcidForStringSetsOrcid()
    {
        $this->subject->setOrcid('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'orcid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getArlidReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getArlid()
        );
    }

    /**
     * @test
     */
    public function setArlidForStringSetsArlid()
    {
        $this->subject->setArlid('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'arlid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSurnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSurname()
        );
    }

    /**
     * @test
     */
    public function setSurnameForStringSetsSurname()
    {
        $this->subject->setSurname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'surname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStatusReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStatus()
        );
    }

    /**
     * @test
     */
    public function setStatusForStringSetsStatus()
    {
        $this->subject->setStatus('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'status',
            $this->subject
        );
    }
	
    /**
     * @test
     */
    public function getDepartmentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDepartment()
        );
    }

    /**
     * @test
     */
    public function setDepartmentForStringSetsDepartment()
    {
        $this->subject->setDepartment('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'department',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFunctionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFunction()
        );
    }

    /**
     * @test
     */
    public function setFunctionForStringSetsFunction()
    {
        $this->subject->setFunction('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'function',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFunctionEnReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFunctionEn()
        );
    }

    /**
     * @test
     */
    public function setFunctionEnForStringSetsFunctionEn()
    {
        $this->subject->setFunctionEn('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'functionEn',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPhone()
        );
    }

    /**
     * @test
     */
    public function setPhoneForStringSetsPhone()
    {
        $this->subject->setPhone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'phone',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDoorsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDoors()
        );
    }

    /**
     * @test
     */
    public function setDoorsForStringSetsDoors()
    {
        $this->subject->setDoors('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'doors',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBuildingReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBuilding()
        );
    }

    /**
     * @test
     */
    public function setBuildingForStringSetsBuilding()
    {
        $this->subject->setBuilding('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'building',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhdStudentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPhdStudent()
        );
    }

    /**
     * @test
     */
    public function setPhdStudentForStringSetsPhdStudent()
    {
        $this->subject->setPhdStudent('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'phdStudent',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getProgramReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProgram()
        );
    }

    /**
     * @test
     */
    public function setProgramForStringSetsProgram()
    {
        $this->subject->setProgram('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'program',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSupervisorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSupervisor()
        );
    }

    /**
     * @test
     */
    public function setSupervisorForStringSetsSupervisor()
    {
        $this->subject->setSupervisor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'supervisor',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getThemeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTheme()
        );
    }

    /**
     * @test
     */
    public function setThemeForStringSetsTheme()
    {
        $this->subject->setTheme('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'theme',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDefenseReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getDefense()
        );
    }

    /**
     * @test
     */
    public function setDefenseForIntSetsDefense()
    {
        $this->subject->setDefense(4);

        self::assertAttributeEquals(
            12,
            'defense',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getWebpageReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWebpage()
        );
    }

    /**
     * @test
     */
    public function setWebpageForStringSetsWebpage()
    {
        $this->subject->setWebpage('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'webpage',
            $this->subject
        );
    }
}

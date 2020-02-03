<?php
namespace Mezek\Showmi\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class TopicTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Mezek\Showmi\Domain\Model\Topic
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Mezek\Showmi\Domain\Model\Topic();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
    public function getSupervisorLinkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSupervisorLink()
        );
    }

    /**
     * @test
     */
    public function setSupervisorLinkForStringSetsSupervisorLink()
    {
        $this->subject->setSupervisorLink('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'supervisorLink',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTitleSkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitleSk()
        );
    }

    /**
     * @test
     */
    public function setTitleSkForStringSetsTitleSk()
    {
        $this->subject->setTitleSk('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'titleSk',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTitleEnReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitleEn()
        );
    }

    /**
     * @test
     */
    public function setTitleEnForStringSetsTitleEn()
    {
        $this->subject->setTitleEn('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'titleEn',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGoalsSkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGoalsSk()
        );
    }

    /**
     * @test
     */
    public function setGoalsSkForStringSetsGoalsSk()
    {
        $this->subject->setGoalsSk('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'goalsSk',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGoalsEnReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGoalsEn()
        );
    }

    /**
     * @test
     */
    public function setGoalsEnForStringSetsGoalsEn()
    {
        $this->subject->setGoalsEn('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'goalsEn',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAnnotationSkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAnnotationSk()
        );
    }

    /**
     * @test
     */
    public function setAnnotationSkForStringSetsAnnotationSk()
    {
        $this->subject->setAnnotationSk('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'annotationSk',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAnnotationEnReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAnnotationEn()
        );
    }

    /**
     * @test
     */
    public function setAnnotationEnForStringSetsAnnotationEn()
    {
        $this->subject->setAnnotationEn('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'annotationEn',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLiteratureReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLiterature()
        );
    }

    /**
     * @test
     */
    public function setLiteratureForStringSetsLiterature()
    {
        $this->subject->setLiterature('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'literature',
            $this->subject
        );
    }
	
    /**
     * @test
     */
    public function getNoteReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNote()
        );
    }

    /**
     * @test
     */
    public function setNoteForStringSetsNote()
    {
        $this->subject->setNote('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'note',
            $this->subject
        );
    }
}

<?php
namespace Mezek\Showmi\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ActivityTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Mezek\Showmi\Domain\Model\Activity
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Mezek\Showmi\Domain\Model\Activity();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSenderNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSenderName()
        );
    }

    /**
     * @test
     */
    public function setSenderNameForStringSetsSenderName()
    {
        $this->subject->setSenderName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'senderName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSenderEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSenderEmail()
        );
    }

    /**
     * @test
     */
    public function setSenderEmailForStringSetsSenderEmail()
    {
        $this->subject->setSenderEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'senderEmail',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAuthorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAuthor()
        );
    }

    /**
     * @test
     */
    public function setAuthorForStringSetsAuthor()
    {
        $this->subject->setAuthor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'author',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForStringSetsType()
    {
        $this->subject->setType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'type',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPlaceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPlace()
        );
    }

    /**
     * @test
     */
    public function setPlaceForStringSetsPlace()
    {
        $this->subject->setPlace('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'place',
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
    public function getWeblinkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWeblink()
        );
    }

    /**
     * @test
     */
    public function setWeblinkForStringSetsWeblink()
    {
        $this->subject->setWeblink('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'weblink',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAuthorLinkReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAuthorLink()
        );
    }

    /**
     * @test
     */
    public function setAuthorLinkForStringSetsAuthorLink()
    {
        $this->subject->setAuthorLink('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'authorLink',
            $this->subject
        );
    }
}

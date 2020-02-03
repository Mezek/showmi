<?php
namespace Mezek\Showmi\Domain\Model;

/***
 *
 * This file is part of the "Data listings" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019
 *
 ***/

/**
 * Topic
 */
class Topic extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * program
     *
     * @var string
     */
    protected $program = '';

    /**
     * supervisorLink
     *
     * @var string
     */
    protected $supervisorLink = '';

    /**
     * titleSk
     *
     * @var string
     */
    protected $titleSk = '';

    /**
     * titleEn
     *
     * @var string
     */
    protected $titleEn = '';

    /**
     * goalsSk
     *
     * @var string
     */
    protected $goalsSk = '';

    /**
     * goalsEn
     *
     * @var string
     */
    protected $goalsEn = '';

    /**
     * annotationSk
     *
     * @var string
     */
    protected $annotationSk = '';

    /**
     * annotationEn
     *
     * @var string
     */
    protected $annotationEn = '';

    /**
     * note
     *
     * @var string
     */
    protected $note = '';

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
     * Returns the supervisorLink
     *
     * @return string $supervisorLink
     */
    public function getSupervisorLink()
    {
        return $this->supervisorLink;
    }

    /**
     * Sets the supervisorLink
     *
     * @param string $supervisorLink
     * @return void
     */
    public function setSupervisorLink($supervisorLink)
    {
        $this->supervisorLink = $supervisorLink;
    }

    /**
     * Returns the titleSk
     *
     * @return string $titleSk
     */
    public function getTitleSk()
    {
        return $this->titleSk;
    }

    /**
     * Sets the titleSk
     *
     * @param string $titleSk
     * @return void
     */
    public function setTitleSk($titleSk)
    {
        $this->titleSk = $titleSk;
    }

    /**
     * Returns the titleEn
     *
     * @return string $titleEn
     */
    public function getTitleEn()
    {
        return $this->titleEn;
    }

    /**
     * Sets the titleEn
     *
     * @param string $titleEn
     * @return void
     */
    public function setTitleEn($titleEn)
    {
        $this->titleEn = $titleEn;
    }

    /**
     * Returns the goalsSk
     *
     * @return string $goalsSk
     */
    public function getGoalsSk()
    {
        return $this->goalsSk;
    }

    /**
     * Sets the goalsSk
     *
     * @param string $goalsSk
     * @return void
     */
    public function setGoalsSk($goalsSk)
    {
        $this->goalsSk = $goalsSk;
    }

    /**
     * Returns the goalsEn
     *
     * @return string $goalsEn
     */
    public function getGoalsEn()
    {
        return $this->goalsEn;
    }

    /**
     * Sets the goalsEn
     *
     * @param string $goalsEn
     * @return void
     */
    public function setGoalsEn($goalsEn)
    {
        $this->goalsEn = $goalsEn;
    }

    /**
     * Returns the annotationSk
     *
     * @return string $annotationSk
     */
    public function getAnnotationSk()
    {
        return $this->annotationSk;
    }

    /**
     * Sets the annotationSk
     *
     * @param string $annotationSk
     * @return void
     */
    public function setAnnotationSk($annotationSk)
    {
        $this->annotationSk = $annotationSk;
    }

    /**
     * Returns the annotationEn
     *
     * @return string $annotationEn
     */
    public function getAnnotationEn()
    {
        return $this->annotationEn;
    }

    /**
     * Sets the annotationEn
     *
     * @param string $annotationEn
     * @return void
     */
    public function setAnnotationEn($annotationEn)
    {
        $this->annotationEn = $annotationEn;
    }

    /**
     * Returns the note
     *
     * @return string $note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets the note
     *
     * @param string $note
     * @return void
     */
    public function setNote($note)
    {
        $this->note = $note;
    }
}

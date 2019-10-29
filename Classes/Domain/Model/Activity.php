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
 * Activity
 */
class Activity extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * senderName
     *
     * @var string
     */
    protected $senderName = '';

    /**
     * senderEmail
     *
     * @var string
     */
    protected $senderEmail = '';

    /**
     * date
     *
     * @var \DateTime
     */
    protected $date = '';

    /**
     * author
     *
     * @var string
     */
    protected $author = '';

    /**
     * type
     *
     * @var string
     */
    protected $type = '';

    /**
     * place
     *
     * @var string
     */
    protected $place = '';

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * weblink
     *
     * @var string
     */
    protected $weblink = '';

    /**
     * authorLink
     *
     * @var string
     */
    protected $authorLink = '';

    /**
     * Activity constructor.
     *
     * @param string $senderName
	 * @param string $senderEmail
	 * @param string $date
	 * @param string $author
	 * @param string $type
	 * @param string $place
	 * @param string $title
	 * @param string $weblink
     */
    public function __construct($senderName = '', $senderEmail = '', $date = '', $author = '', $type = '', $place = '', $title = '', $weblink = '')
    {
        $this->setSenderName($senderName);
		$this->setSenderEmail($senderEmail);
		$this->setDate($date);
		$this->setAuthor($author);
		$this->setType($type);
		$this->setPlace($place);
		$this->setTitle($title);
		$this->setWeblink($weblink);
    }

    /**
     * Returns the senderName
     *
     * @return string $senderName
     */
    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * Sets the senderName
     *
     * @param string $senderName
     * @return void
     */
    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
    }

    /**
     * Returns the senderEmail
     *
     * @return string $senderEmail
     */
    public function getSenderEmail()
    {
        return $this->senderEmail;
    }

    /**
     * Sets the senderEmail
     *
     * @param string $senderEmail
     * @return void
     */
    public function setSenderEmail($senderEmail)
    {
        $this->senderEmail = $senderEmail;
    }

    /**
     * Returns the author
     *
     * @return string $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     *
     * @param string $author
     * @return void
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Returns the date
     *
     * @return \DateTime date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param string $date
     * @return void
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Returns the type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param string $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Returns the place
     *
     * @return string $place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets the place
     *
     * @param string $place
     * @return void
     */
    public function setPlace($place)
    {
        $this->place = $place;
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
     * Returns the weblink
     *
     * @return string $weblink
     */
    public function getWeblink()
    {
        return $this->weblink;
    }

    /**
     * Sets the weblink
     *
     * @param string $weblink
     * @return void
     */
    public function setWeblink($weblink)
    {
        $this->weblink = $weblink;
    }

    /**
     * Returns the authorLink
     *
     * @return string $authorLink
     */
    public function getAuthorLink()
    {
        return $this->authorLink;
    }

    /**
     * Sets the authorLink
     *
     * @param string $authorLink
     * @return void
     */
    public function setAuthorLink($authorLink)
    {
        $this->authorLink = $authorLink;
    }
}

<?php
namespace Mezek\Showmi\Controller;

use Mezek\Showmi\Domain\Repository\PersonnelRepository;
use Mezek\Showmi\Domain\Repository\TopicRepository;
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
 * TopicController
 */
class TopicController extends ActionController
{
	/**
	* Personnel repository
	*
	* @var \Mezek\Showmi\Domain\Repository\PersonnelRepository
	* @inject
	*/
	protected $personnelRepository;

	/**
     * @var TopicRepository
     */
    private $topicRepository = null;

    /**
     * Inject the topic repository
     *
     * @param \Mezek\Showmi\Domain\Repository\TopicRepository $topicRepository
     */
    public function injectTopicRepository(TopicRepository $topicRepository)
    {
        $this->topicRepository = $topicRepository;
    }
	
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $topics = $this->topicRepository->findAll();
        $this->view->assign('topics', $topics);
    }

    /**
     * action show
     *
     * @param \Mezek\Showmi\Domain\Model\Topic $topic
     * @return void
     */
    public function showAction(\Mezek\Showmi\Domain\Model\Topic $topic)
    {
        $this->view->assign('topic', $topic);
    }

	/**
     * action thema
     *
     * @return void
     */
    public function themaAction()
    {
		$persons = $this->personnelRepository->findCurrent();
		$this->view->assign('persons', $persons);
		
		$program = $this->settings['program'];
		$thema = $this->topicRepository->findTopics($program);
		$this->view->assign('thema', $thema);
    }
}

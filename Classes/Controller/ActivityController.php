<?php
namespace Mezek\Showmi\Controller;

use Mezek\Showmi\Domain\Repository\ActivityRepository;
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
 * Class ActivityController
 *
 * @package Mezek\Showmi\Controller
 */
class ActivityController extends ActionController
{
    /**
     * @var ActivityRepository
     */
    private $activityRepository = null;

    /**
     * Inject the activity repository
     *
     * @param \Mezek\Showmi\Domain\Repository\ActivityRepository $activityRepository
     */
    public function injectActivityRepository(ActivityRepository $activityRepository)
    {
        $this->activityRepository = $activityRepository;
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $activities = $this->activityRepository->findAll();
        $this->view->assign('activities', $activities);
    }
	
	/**
     * action internet
     *
     * @return void
     */
    public function internetAction()
    {
        $activities = $this->activityRepository->findInternet();
        $this->view->assign('activities', $activities);
    }
}

<?php
namespace Mezek\Showmi\Tests\Unit\Controller;

/**
 * Test case.
 */
class TopicControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Mezek\Showmi\Controller\TopicController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Mezek\Showmi\Controller\TopicController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllTopicsFromRepositoryAndAssignsThemToView()
    {

        $allTopics = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $topicRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $topicRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTopics));
        $this->inject($this->subject, 'topicRepository', $topicRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('topics', $allTopics);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenTopicToView()
    {
        $topic = new \Mezek\Showmi\Domain\Model\Topic();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('topic', $topic);

        $this->subject->showAction($topic);
    }
}

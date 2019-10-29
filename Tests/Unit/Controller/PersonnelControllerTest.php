<?php
namespace Mezek\Showmi\Tests\Unit\Controller;

/**
 * Test case.
 */
class PersonnelControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Mezek\Showmi\Controller\PersonnelController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Mezek\Showmi\Controller\PersonnelController::class)
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
    public function listActionFetchesAllPersonnelsFromRepositoryAndAssignsThemToView()
    {

        $allPersonnels = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $personnelRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $personnelRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPersonnels));
        $this->inject($this->subject, 'personnelRepository', $personnelRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('personnels', $allPersonnels);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}

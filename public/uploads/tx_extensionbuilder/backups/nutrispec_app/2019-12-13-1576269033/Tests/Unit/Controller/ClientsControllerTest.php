<?php
namespace GroupProject\NutrispecApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Kunal Harkare <kunal.harkare@hof-university.de>
 */
class ClientsControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \GroupProject\NutrispecApp\Controller\ClientsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\GroupProject\NutrispecApp\Controller\ClientsController::class)
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
    public function listActionFetchesAllClientssFromRepositoryAndAssignsThemToView()
    {

        $allClientss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $clientsRepository = $this->getMockBuilder(\GroupProject\NutrispecApp\Domain\Repository\ClientsRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $clientsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allClientss));
        $this->inject($this->subject, 'clientsRepository', $clientsRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('clientss', $allClientss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenClientsToView()
    {
        $clients = new \GroupProject\NutrispecApp\Domain\Model\Clients();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('clients', $clients);

        $this->subject->showAction($clients);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenClientsToClientsRepository()
    {
        $clients = new \GroupProject\NutrispecApp\Domain\Model\Clients();

        $clientsRepository = $this->getMockBuilder(\GroupProject\NutrispecApp\Domain\Repository\ClientsRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $clientsRepository->expects(self::once())->method('add')->with($clients);
        $this->inject($this->subject, 'clientsRepository', $clientsRepository);

        $this->subject->createAction($clients);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenClientsToView()
    {
        $clients = new \GroupProject\NutrispecApp\Domain\Model\Clients();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('clients', $clients);

        $this->subject->editAction($clients);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenClientsInClientsRepository()
    {
        $clients = new \GroupProject\NutrispecApp\Domain\Model\Clients();

        $clientsRepository = $this->getMockBuilder(\GroupProject\NutrispecApp\Domain\Repository\ClientsRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $clientsRepository->expects(self::once())->method('update')->with($clients);
        $this->inject($this->subject, 'clientsRepository', $clientsRepository);

        $this->subject->updateAction($clients);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenClientsFromClientsRepository()
    {
        $clients = new \GroupProject\NutrispecApp\Domain\Model\Clients();

        $clientsRepository = $this->getMockBuilder(\GroupProject\NutrispecApp\Domain\Repository\ClientsRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $clientsRepository->expects(self::once())->method('remove')->with($clients);
        $this->inject($this->subject, 'clientsRepository', $clientsRepository);

        $this->subject->deleteAction($clients);
    }
}

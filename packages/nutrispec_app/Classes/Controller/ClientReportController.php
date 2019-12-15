<?php
namespace GroupProject\NutrispecApp\Controller;


use GroupProject\NutrispecApp\Domain\Model\ClientReport;

/***
 *
 * This file is part of the "NutriSpec App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Kunal Harkare <kunal.harkare@hof-university.de>
 *
 ***/
/**
 * ClientReportController
 */
class ClientReportController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * clientReportRepository
     * 
     * @var \GroupProject\NutrispecApp\Domain\Repository\ClientReportRepository
     */
    protected $clientReportRepository = null;

    /**
     * @param \GroupProject\NutrispecApp\Domain\Repository\ClientReportRepository $clientReportRepository
     */
    public function injectClientReportRepository(\GroupProject\NutrispecApp\Domain\Repository\ClientReportRepository $clientReportRepository)
    {
        $this->clientReportRepository = $clientReportRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $clientReports = $this->clientReportRepository->findAll();
        $this->view->assign('clientReports', $clientReports);
    }

    /**
     * action show
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\ClientReport $clientReport
     * @return void
     */
    public function showAction(\GroupProject\NutrispecApp\Domain\Model\ClientReport $clientReport)
    {
        $this->view->assign('clientReport', $clientReport);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\ClientReport $newClientReport
     * @return void
     */
    public function createAction(\GroupProject\NutrispecApp\Domain\Model\ClientReport $newClientReport)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->clientReportRepository->add($newClientReport);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\ClientReport $clientReport
     * @ignorevalidation $clientReport
     * @return void
     */
    public function editAction(\GroupProject\NutrispecApp\Domain\Model\ClientReport $clientReport)
    {
        $this->view->assign('clientReport', $clientReport);
    }

    /**
     * action update
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\ClientReport $clientReport
     * @return void
     */
    public function updateAction(\GroupProject\NutrispecApp\Domain\Model\ClientReport $clientReport)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->clientReportRepository->update($clientReport);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\ClientReport $clientReport
     * @return void
     */
    public function deleteAction(\GroupProject\NutrispecApp\Domain\Model\ClientReport $clientReport)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->clientReportRepository->remove($clientReport);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \GroupProject\NutrispecApp\Domain\Model\Clients $clients
     * @return void
     */
    public function associateAction(\GroupProject\NutrispecApp\Domain\Model\Clients $clients,\GroupProject\NutrispecApp\Domain\Model\Nutritionist $nutritionist)
    {
        $newClientReportAssociation = new ClientReport();
        $newClientReportAssociation->setDate(new \DateTime());
        $newClientReportAssociation->setTitle("My Title");
        $newClientReportAssociation->setInstructions("My Instrutions");
        $newClientReportAssociation->setReport("My Report");
        $newClientReportAssociation->setClient($clients);
        $newClientReportAssociation->setNutritionist($nutritionist);
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->clientReportRepository->add($newClientReportAssociation);
        $this->redirect('list');
    }

}

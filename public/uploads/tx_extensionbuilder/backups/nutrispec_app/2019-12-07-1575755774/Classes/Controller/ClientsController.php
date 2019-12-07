<?php
namespace GroupProject\NutrispecApp\Controller;


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
 * ClientsController
 */
class ClientsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * clientsRepository
     * 
     * @var \GroupProject\NutrispecApp\Domain\Repository\ClientsRepository
     */
    protected $clientsRepository = null;

    /**
     * @param \GroupProject\NutrispecApp\Domain\Repository\ClientsRepository $clientsRepository
     */
    public function injectClientsRepository(\GroupProject\NutrispecApp\Domain\Repository\ClientsRepository $clientsRepository)
    {
        $this->clientsRepository = $clientsRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $clients = $this->clientsRepository->findAll();
        $this->view->assign('clients', $clients);
    }

    /**
     * action show
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Clients $clients
     * @return void
     */
    public function showAction(\GroupProject\NutrispecApp\Domain\Model\Clients $clients)
    {
        $this->view->assign('clients', $clients);
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
     * @param \GroupProject\NutrispecApp\Domain\Model\Clients $newClients
     * @return void
     */
    public function createAction(\GroupProject\NutrispecApp\Domain\Model\Clients $newClients)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->clientsRepository->add($newClients);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Clients $clients
     * @ignorevalidation $clients
     * @return void
     */
    public function editAction(\GroupProject\NutrispecApp\Domain\Model\Clients $clients)
    {
        $this->view->assign('clients', $clients);
    }

    /**
     * action update
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Clients $clients
     * @return void
     */
    public function updateAction(\GroupProject\NutrispecApp\Domain\Model\Clients $clients)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->clientsRepository->update($clients);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Clients $clients
     * @return void
     */
    public function deleteAction(\GroupProject\NutrispecApp\Domain\Model\Clients $clients)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->clientsRepository->remove($clients);
        $this->redirect('list');
    }
}

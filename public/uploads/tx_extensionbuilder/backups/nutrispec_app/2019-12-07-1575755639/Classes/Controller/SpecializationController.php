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
 * SpecializationController
 */
class SpecializationController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * specializationRepository
     * 
     * @var \GroupProject\NutrispecApp\Domain\Repository\SpecializationRepository
     */
    protected $specializationRepository = null;

    /**
     * @param \GroupProject\NutrispecApp\Domain\Repository\SpecializationRepository $specializationRepository
     */
    public function injectSpecializationRepository(\GroupProject\NutrispecApp\Domain\Repository\SpecializationRepository $specializationRepository)
    {
        $this->specializationRepository = $specializationRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $specializations = $this->specializationRepository->findAll();
        $this->view->assign('specializations', $specializations);
    }

    /**
     * action show
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Specialization $specialization
     * @return void
     */
    public function showAction(\GroupProject\NutrispecApp\Domain\Model\Specialization $specialization)
    {
        $this->view->assign('specialization', $specialization);
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
     * @param \GroupProject\NutrispecApp\Domain\Model\Specialization $newSpecialization
     * @return void
     */
    public function createAction(\GroupProject\NutrispecApp\Domain\Model\Specialization $newSpecialization)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->specializationRepository->add($newSpecialization);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Specialization $specialization
     * @ignorevalidation $specialization
     * @return void
     */
    public function editAction(\GroupProject\NutrispecApp\Domain\Model\Specialization $specialization)
    {
        $this->view->assign('specialization', $specialization);
    }

    /**
     * action update
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Specialization $specialization
     * @return void
     */
    public function updateAction(\GroupProject\NutrispecApp\Domain\Model\Specialization $specialization)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->specializationRepository->update($specialization);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Specialization $specialization
     * @return void
     */
    public function deleteAction(\GroupProject\NutrispecApp\Domain\Model\Specialization $specialization)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->specializationRepository->remove($specialization);
        $this->redirect('list');
    }
}

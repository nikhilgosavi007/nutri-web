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
 * NutritionistController
 */
class NutritionistController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * nutritionistRepository
     * 
     * @var \GroupProject\NutrispecApp\Domain\Repository\NutritionistRepository
     */
    protected $nutritionistRepository = null;

    /**
     * @param \GroupProject\NutrispecApp\Domain\Repository\NutritionistRepository $nutritionistRepository
     */
    public function injectNutritionistRepository(\GroupProject\NutrispecApp\Domain\Repository\NutritionistRepository $nutritionistRepository)
    {
        $this->nutritionistRepository = $nutritionistRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $nutritionists = $this->nutritionistRepository->findAll();
        $this->view->assign('nutritionists', $nutritionists);
    }

    /**
     * action show
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Nutritionist $nutritionist
     * @return void
     */
    public function showAction(\GroupProject\NutrispecApp\Domain\Model\Nutritionist $nutritionist)
    {
        $this->view->assign('nutritionist', $nutritionist);
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
     * @param \GroupProject\NutrispecApp\Domain\Model\Nutritionist $newNutritionist
     * @return void
     */
    public function createAction(\GroupProject\NutrispecApp\Domain\Model\Nutritionist $newNutritionist)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->nutritionistRepository->add($newNutritionist);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Nutritionist $nutritionist
     * @ignorevalidation $nutritionist
     * @return void
     */
    public function editAction(\GroupProject\NutrispecApp\Domain\Model\Nutritionist $nutritionist)
    {
        $this->view->assign('nutritionist', $nutritionist);
    }

    /**
     * action update
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Nutritionist $nutritionist
     * @return void
     */
    public function updateAction(\GroupProject\NutrispecApp\Domain\Model\Nutritionist $nutritionist)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->nutritionistRepository->update($nutritionist);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Nutritionist $nutritionist
     * @return void
     */
    public function deleteAction(\GroupProject\NutrispecApp\Domain\Model\Nutritionist $nutritionist)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->nutritionistRepository->remove($nutritionist);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \GroupProject\NutrispecApp\Domain\Model\Nutritionist $nutritionist
     * @return void
     */
    public function profileAction(\GroupProject\NutrispecApp\Domain\Model\Nutritionist $nutritionist, \GroupProject\NutrispecApp\Domain\Model\Clients $client)
    {
        $this->view->assign('nutritionist', $nutritionist);
        $this->view->assign('client', $client);
    }
}

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
 * BlogController
 */
class BlogController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * blogRepository
     * 
     * @var \GroupProject\NutrispecApp\Domain\Repository\BlogRepository
     */
    protected $blogRepository = null;

    /**
     * @param \GroupProject\NutrispecApp\Domain\Repository\BlogRepository $blogRepository
     */
    public function injectBlogRepository(\GroupProject\NutrispecApp\Domain\Repository\BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $blogs = $this->blogRepository->findAll();
        $this->view->assign('blogs', $blogs);
    }

    /**
     * action show
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Blog $blog
     * @return void
     */
    public function showAction(\GroupProject\NutrispecApp\Domain\Model\Blog $blog)
    {
        $this->view->assign('blog', $blog);
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
     * @param \GroupProject\NutrispecApp\Domain\Model\Blog $newBlog
     * @return void
     */
    public function createAction(\GroupProject\NutrispecApp\Domain\Model\Blog $newBlog)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->blogRepository->add($newBlog);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Blog $blog
     * @ignorevalidation $blog
     * @return void
     */
    public function editAction(\GroupProject\NutrispecApp\Domain\Model\Blog $blog)
    {
        $this->view->assign('blog', $blog);
    }

    /**
     * action update
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Blog $blog
     * @return void
     */
    public function updateAction(\GroupProject\NutrispecApp\Domain\Model\Blog $blog)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->blogRepository->update($blog);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Blog $blog
     * @return void
     */
    public function deleteAction(\GroupProject\NutrispecApp\Domain\Model\Blog $blog)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->blogRepository->remove($blog);
        $this->redirect('list');
    }
}

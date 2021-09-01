<?php

namespace NH\Testextension\Controller;

use NH\Testextension\Domain\Model\Dto\LeaveCollection;
use NH\Testextension\Domain\Model\Tree;
use NH\Testextension\Domain\Repository\LeaveRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Http\HtmlResponse;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class TreeController extends ActionController
{
    protected ?LeaveRepository $leaveRepository = null;

    public function injectLeaveRepository(LeaveRepository $leaveRepository)
    {
        $this->leaveRepository = $leaveRepository;
    }

    public function indexAction(): ResponseInterface
    {
        $this->view->assign('leaves', $this->leaveRepository->findAll());
        return new HtmlResponse($this->view->render());
    }

    public function initializeCreateAction()
    {
//        $configuration = $this->arguments->getArgument('leaveCollection')->getPropertyMappingConfiguration();
//        $configuration->allowAllProperties();
//        $configuration->allowCreationForSubProperty('leaves.*');
    }

    public function createAction(LeaveCollection $leaveCollection): ResponseInterface
    {
        $this->view->assign('leaveCollection', $leaveCollection);
        return new HtmlResponse($this->view->render());
    }
}

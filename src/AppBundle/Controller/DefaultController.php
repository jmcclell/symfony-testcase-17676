<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Service\MessageService;

/**
 * @Route(service="app.controller.default")
 */
class DefaultController
{
    protected $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    /**
     * @Route("/test")
     */
    public function indexAction()
    {
        return new Response($this->messageService->getMessage(), 200);
    }

}

<?php

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\JsonModel;

class HealthCheckController extends AbstractActionController
{
    public function healthCheckAction()
    {
        return new JsonModel([
            'status'  => 200,
            'message' => 'healthy'
        ]);
    }
}


<?php
namespace Auth\V1\Rest\Login;

use Laminas\Paginator\Paginator;
use OAuth2\Server as OAuth2Server;
use OAuth2\Request as OAuth2Request;
use Zend\View\Model\JsonModel;

class LoginCollection extends Paginator
{
    public function __construct()
    {
    }

    public function create($data)
    {
        return new JsonModel($data);
    }
}

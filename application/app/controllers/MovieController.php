<?php
declare(strict_types=1);
use GuzzleHttp\Client;

class MovieController extends ControllerBase
{

    public function indexAction()
    {

    }


    public function viewAction()
    {
        $movieId =   $this->dispatcher->getParam(0);


        if($movieId)
        {
            $this->view->setVar("movieId",$movieId);
        }

    }

}


<?php

class SeaBattleController extends AbstractController
{
    protected string $layouts = 'main_layout';

    public function indexAction()
    {
        $this->template->view('index');
    }

    public function ajaxAction()
    {
        echo "Hello world, i am Ajax!!!<br>";
    }
}

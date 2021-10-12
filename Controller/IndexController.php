<?php

class IndexController extends AbstractController
{
    protected string $layouts = 'main_layout';

    public function indexAction()
    {
        $this->template->view('index');
    }

    public function calculatorAction()
    {
        $this->template->view('calculator');
    }
}

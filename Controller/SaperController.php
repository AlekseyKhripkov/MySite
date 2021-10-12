<?php

class SaperController extends AbstractController
{
    protected string $layouts = 'main_layout';

    public function indexAction()
    {
        $this->template->view('index');
    }
}

//
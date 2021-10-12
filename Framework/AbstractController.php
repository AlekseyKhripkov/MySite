<?php

abstract class AbstractController
{
    protected Template $template;
    protected string $layouts;

    public function __construct()
    {
        $this->template = new Template($this->layouts, get_class($this));
    }

    abstract function indexAction();
}

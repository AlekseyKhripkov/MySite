<?php

class Template
{
    protected string $layouts;
    private string $controller;

    public function __construct(string $layouts, string $controller)
    {
        $this->layouts = $layouts;
        $arr = preg_split('/(?=[A-Z])/', $controller);
        $this->controller = strtolower($arr[1]);
    }

    public function view(string $name): void
    {
        $pathLayout = SITE_PATH . 'View' . DS . $this->layouts . '.php';
        $contentPage = SITE_PATH . 'View' . DS . $this->controller . DS . $name . '.php';

        if (file_exists($pathLayout) === false) {
            trigger_error ('Layout `' . $this->layouts . '` does not exist.', E_USER_NOTICE);
            return;
        }
        if (file_exists($contentPage) === false) {
            trigger_error ('Template `' . $name . '` does not exist.', E_USER_NOTICE);
            return;
        }

        include ($pathLayout);
    }
}

<?php

declare(strict_types=1);

namespace App\Controller;

use App\View;
use App\Request;
use App\Model\MaterialModel;

abstract class AbstractController
{
    protected const DEFAULT_ACTION = 'table';
    protected Request $request;
    protected MaterialModel $materialModel;
    protected View $view;

    public function __construct()
    {
        $this->materialModel = new MaterialModel();
        $this->view = new View();
        $this->request = new Request($_GET, $_POST, $_SERVER);
    }

    public function run(): void
    {
        $this->action();
    }

    private function action(): string
    {
        return $this->request->getParam('action', self::DEFAULT_ACTION);
    }
}

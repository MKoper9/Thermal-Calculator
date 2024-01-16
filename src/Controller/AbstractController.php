<?php

declare(strict_types=1);

namespace App\Controller;

use App\View;
use App\Request;
use App\Model\CalculatorModel;
use App\Exception\StorageException;
use App\Exception\ConfigurationException;

abstract class AbstractController
{
    protected const DEFAULT_ACTION = 'list';

    private static array $configuration = [];

    protected CalculatorModel $calculatorModel;
    protected View $view;
    protected Request $request;

    public function __construct(Request $request)
    {
        if (empty(self::$configuration['db'])) {
            throw new ConfigurationException('Configuration error');
        }
        $this->calculatorModel = new CalculatorModel(self::$configuration['db']);

        $this->request = $request;
        $this->view = new View();
    }

    final public function run(): void
    {
        try {
            $action = $this->action() . 'Action';
            if (!method_exists($this, $action)) {
                $action = '' . 'Action';
            }
            $this->$action();
        } catch (StorageException $e) {
            $this->view->render('error', ['message' => $e->getMessage()]);
        }
    }

    public static function initConfiguration(array $configuration): void
    {
        self::$configuration = $configuration;
    }

    private function action(): string
    {
        return $this->request->getParam('action', self::DEFAULT_ACTION);
    }
}

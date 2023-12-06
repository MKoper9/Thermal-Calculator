<?php

declare(strict_types=1);

namespace App\Controller;

use App\View;
use App\Request;
use App\Exception\StorageException;
use App\Exception\NotFoundException;
use App\Exception\ConfigurationException;
use CalculatorModel;

abstract class AbstractController
{
    private static array $configuration = [];

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
            // Log::error($e->getPrevios());
            $this->view->render('error', ['message' => $e->getMessage()]);
        } catch (NotFoundException $e) {
            $this->redirect('/', ['error' => 'noteNotFound']);
        }
    }

    public static function initConfiguration(array $configuration): void
    {
        self::$configuration = $configuration;
    }

    final private function action(): string
    {
        return $this->request->getParam('action', '');
    }
}

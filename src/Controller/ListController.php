<?php

declare(strict_types=1);

namespace App\Controller;

use App\Request;
use App\Model\ListModel;
use App\Exception\ConfigurationException;

class ListController
{
    protected const DEFAULT_ACTION = 'list';

    private static array $configuration = [];
    protected ListModel $listModel;
    protected Request $request;

    public static function initConfiguration(array $configuration): void
    {
        self::$configuration = $configuration;
    }

    public function __construct()
    {
        if (empty(self::$configuration['db'])) {
            throw new ConfigurationException('Configuration error');
        }
        $this->listModel = new ListModel(self::$configuration['db']);
    }

    public function run(): void
    {
        $action = $this->action() . 'Action';
        $this->$action();
    }

    final private function action(): string
    {
        return $this->request->getParam('action', self::DEFAULT_ACTION);
    }
}

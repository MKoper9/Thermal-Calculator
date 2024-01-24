<?php

declare(strict_types=1);

namespace App\Controller;

class MaterialController extends AbstractController
{
    public function getAllMaterials(): void
    {
        $materials = $this->materialModel->getAll();
        $this->view->render(
            'table',
            [
                'materials' => $materials
            ]
        );
    }

}
<?php

namespace App\Website\Documentation\PHP;

use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;

class DetailClass extends ViewAbstract
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        $data  = $this->getApi();
        $class = $this->getUriFragment('class');

        if (isset($data['api'][$class])) {
            $this->template->assign('className', $class);
            $this->template->assign('api', $data['api']);
            $this->template->assign('class', $data['api'][$class]);

            $this->template->assign('name', $this->getName());
            $this->template->set(__DIR__ . '/../../Resource/documentation/api.php');
        } else {
            throw new StatusCode\NotFoundException('Class not available');
        }
    }

}

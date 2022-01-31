<?php

namespace App\Website\Documentation\PHP;

use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;

class DetailMethod extends ViewAbstract
{
    protected function doGet(HttpContextInterface $context): mixed
    {
        $data   = $this->getApi();
        $class  = $this->getUriFragment('class');
        $method = $this->getUriFragment('method');

        if (isset($data['api'][$class]['methods'][$method])) {
            $this->template->assign('className', $class);
            $this->template->assign('methodName', $method);
            $this->template->assign('api', $data['api']);
            $this->template->assign('method', $data['api'][$class]['methods'][$method]);

            $this->template->assign('name', $this->getName());
            $this->template->set(__DIR__ . '/../../Resource/documentation/api.php');
        } else {
            throw new StatusCode\NotFoundException('Method not available');
        }
    }

}

<?php
namespace App\devtool\starter\controllers;

use SPT\Response;
use SPT\Web\ControllerMVVM;

class uninstall extends ControllerMVVM
{
    public function uninstall()
    {
        $args = $this->request->cli->getArgs();
        $solution = isset($args[1]) ? $args[1] : '';

        $try = $this->StarterModel->uninstall($solution);
        if (!$try)
        {
            echo $this->StarterModel->getError() ."\n";
        }
        else
        {
            echo "Uninstall Done!\n";
        }

        return true;
    }
}
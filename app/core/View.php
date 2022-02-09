<?php

namespace app\core;

use Exception;

class View
{
    public function renderView($view, $data = [])
    {

        $file_view = VIEWS . "/$view.php";
        if (file_exists($file_view)) {
            extract($data);
            ob_start();
            require_once($file_view);
            $content = ob_get_clean();
            echo $content;
        } else {
            return throw new Exception("Error view \"$view\" Not Found");
        }
    }
}

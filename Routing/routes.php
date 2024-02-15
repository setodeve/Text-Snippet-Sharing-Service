<?php

use Helpers\DatabaseHelper;
use Helpers\ValidationHelper;
use Response\HTTPRenderer;
use Response\Render\HTMLRenderer;

return [
    '/'=>function(): HTTPRenderer{
        return new HTMLRenderer('create-snipet', []);
    },
    'snipet/'=>function(): HTTPRenderer{
        // IDの検証
        $id = ValidationHelper::integer($_GET['id']??null);
        $snipet = DatabaseHelper::getComputerPartById($id);
        return new HTMLRenderer('parts', ['snipet'=>$snipet]);
    }
];
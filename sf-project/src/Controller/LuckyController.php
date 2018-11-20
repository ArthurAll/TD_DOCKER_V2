<?php

// src/Controller/LuckyController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function indexAction()
    {
        return new Response("Hello World!");
    }
}

<?php

namespace Damin\Controller;

use Damin\DB;

class PageController extends MasterController {
    public function guide()
    {
        $this->render("guide", []);
    }

    public function faq() 
    {
        $this->render("faq", []);
    }

    public function notice()
    {
        $this->render("notice", []);
    }

    public function terms()
    {
        $this->render("terms", []);
    }

    public function privacy()
    {
        $this->render("privacy", []);
    }
}

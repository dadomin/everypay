<?php

namespace Damin\Controller;

use Damin\DB;

class PageController extends MasterController {
    public function guide()
    {
        $this->render("guide", []);
    }
}

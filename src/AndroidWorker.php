<?php

namespace App;

class AndroidWorker implements WorkableInterface, ManageableInterface
{
    public function work()
    {
        return 'Android is working ...';
    }

    public function manage()
    {
        return $this->work();
    }
}

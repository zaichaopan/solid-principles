<?php

namespace App;

class HumanWorker implements WorkableInterface, SleepableInterface, ManageableInterface
{
    public function work()
    {
        return 'Human is working ...';
    }

    public function sleep()
    {
        return 'Human is sleeping ...';
    }

    public function manage()
    {
        return $this->work() . ' ' . $this->sleep();
    }
}

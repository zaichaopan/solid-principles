<?php
namespace Test\Unit;

use App\User;
use App\HumanWorker;
use App\AndroidWorker;
use PHPUnit\Framework\TestCase;

class ManageWorkerTest extends TestCase
{
    /** @test */
    public function test_user_can_manage_workers()
    {
        $user = new User;
        $androidWorker = new AndroidWorker;
        $humanWorker = new HumanWorker;
        $this->assertEquals('Android is working ...', $user->manageWorker($androidWorker));
        $this->assertEquals('Human is working ... Human is sleeping ...', $user->manageWorker($humanWorker));
    }
}

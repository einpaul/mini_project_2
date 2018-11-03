<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()

    {
        $this->assertTrue(true);
    }

    public function testInsertUser()
    {
        $user = new User();
        $user->id=51;
        $user->name='Ein Paul';
        $user->password = 'ein@123';
        $user->email = 'einpaul@example.com';
        $this->assertTrue($user->save());
    }


}

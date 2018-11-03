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

    public function addUserToDatabse()
    {
        $user = new User();
        $user->id=52;
        $user->name='Ein Paul';
        $user->password = 'Einpaul@123';
        $user->email = 'einpaul123@example.com';
        $this->assertTrue($user->save());
        $user->delete();
    }

    public function testUpdate()
    {
        $user = User::latest()->first();
        $user->name='Steve Smith';
        $this->assertTrue($user->save());
    }

    public function testDelete()
    {
        $user = User::latest()->first();
        $this->assertTrue($user->delete());
    }

    public function testUserCount()

    {
        //$this->assertTrue(true);
        $users = User::all();
        $count= $users->count();
        $this->assertEquals(50,$count);
    }


}


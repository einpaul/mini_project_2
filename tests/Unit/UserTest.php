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

    public function testInsert()
    {
        $user = factory(User::class)->make();
        $this->assertTrue($user->save());
    }

    public function testUpdate()
    {
        $user = User::find(2);
        $user->name='Steve Smith';
        $this->assertTrue($user->save());
    }

}


<?php

declare(strict_types=1);

namespace App\Tests\Unit\Domain;

use App\Domain\Email;
use App\Domain\Password;
use App\Domain\User;
use App\Domain\UserId;
use App\Domain\Username;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function setUp(): void
    {
        $this->userId = new UserId(Uuid::uuid5());
        $this->email = new Email('name@domain.com');
        $this->username = new Username('my_username');
        $this->password = new Password('super_secret_password');
    }

    /** @test */
    public function should_require_user_id()
    {
        $this->expectException('Exception');
        User::register(null, $this->email, $this->username, $this->password);
    }

    /** @test */
    public function should_require_email()
    {
        $this->expectException('Exception');
        User::register($this->userId, null, $this->username, $this->password);
    }

    /** @test */
    public function should_require_username()
    {
        $this->expectException('Exception');
        User::register($this->userId, $this->email, null, $this->password);
    }

    /** @test */
    public function should_require_password()
    {
        $this->expectException('Exception');
        User::register($this->userId, $this->email, $this->username, null);
    }

    /** @test */
    public function should_create_new_user()
    {
        $user = User::register($this->userId, $this->email, $this->username, $this->password);
        $this->assertInstanceOf('Mhr\Domain\Model\Users\User', $user);
        $this->assertInstanceOf('Mhr\Domain\Model\Users\UserId', $user->id());
        $this->assertEquals($user->email(), 'name@domain.com');
        $this->assertEquals($user->username(), 'my_username');
    }
}

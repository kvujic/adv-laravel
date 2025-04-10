<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User; /* データベースのテスト */

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
     */

    /* 基本的な単体テスト
    public function testHello() {
        $this->assertTrue(true);

        $arr = [];
        $this->assertEmpty($arr);

        $txt = "Hello World";
        $this->assertEquals('Hello World', $txt);

        $n = random_int(0, 100);
        $this->assertLessThan(100, $n);
    }
    */

    /* アクセスのテスト 
    public function testHello()
    {
        $this->assertTrue(true);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/no_route');
        $response->assertStatus(404);
    }
    */

    /* データベースのテスト */
    use RefreshDatabase;

    public function testHello() {
        User::factory()->create([
            'name'=>'aaa',
            'email'=>'bbb@ccc.com',
            'password'=>'test12345'
        ]);
        $this->assertDatabaseHas('users',[
            'name'=>'aaa',
            'email'=>'bbb@ccc.com',
            'password'=>'test12345'
        ]);
    }
}

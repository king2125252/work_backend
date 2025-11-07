<?php
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_root(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}

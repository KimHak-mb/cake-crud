<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\UserLogesComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\UserLogesComponent Test Case
 */
class UserLogesComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\UserLogesComponent
     */
    protected $UserLoges;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->UserLoges = new UserLogesComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UserLoges);

        parent::tearDown();
    }
}

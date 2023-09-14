<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-09-14 08:41:14',
                'modified' => '2023-09-14 08:41:14',
                'image' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'birthyear' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}

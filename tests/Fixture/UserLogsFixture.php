<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserLogsFixture
 */
class UserLogsFixture extends TestFixture
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
                'user_id' => 1,
                'ip' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-09-13 09:50:49',
                'modified' => '2023-09-13 09:50:49',
            ],
        ];
        parent::init();
    }
}

<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BlogsFixture
 */
class BlogsFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'category_id' => 1,
                'created' => '2023-08-22 07:22:54',
                'modified' => '2023-08-22 07:22:54',
            ],
        ];
        parent::init();
    }
}

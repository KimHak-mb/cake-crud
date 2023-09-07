<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 14,
                'email' => 'hhaakk@gmail.com',
                'password' => '$2y$10$1xXPuM.MZLTs1.zyi89Suu0PPqOISCATTXtgzKuGXnV0HHF79c1Gm',
                'created' => '2023-09-05 08:40:22',
                'modified' => '2023-09-06 04:19:00',
                'image' => 'user_img/1.png',
                'status' => 0,
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}

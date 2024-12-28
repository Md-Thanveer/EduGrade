<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            ['name' => 'Computer Science', 'numberic' => 1],
            ['name' => 'Bio-Maths', 'numberic' => 2],
            ['name' => 'Pure-Science', 'numberic' => 3],
            ['name' => 'Commerce', 'numberic' => 4],
        ];

        foreach ($groups as $group) {
            Group::create($group);
        }
    }
}

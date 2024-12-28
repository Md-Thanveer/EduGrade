<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;
use App\Models\Section;
use App\Models\GroupSection;

class GroupSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = Group::all();
        $sections = Section::all();

        foreach ($groups as $group) {
            foreach ($sections as $section) {
                // Create a new GroupSection record
                $groupSection = GroupSection::create([
                    // If you have specific attributes in the GroupSection model, add them here
                ]);

                // Attach the group and section to this new GroupSection record
                $groupSection->groups()->attach($group->id);
                $groupSection->sections()->attach($section->id);
            }
        }
    }
}

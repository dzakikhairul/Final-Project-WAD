<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AssignAdminRoleSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'Dennis@gmail.com')->first();

        if ($user) {
            $user->assignRole('admin');
        }
    }
}

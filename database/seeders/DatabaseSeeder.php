<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the applications database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name              = 'Administrator';
        $user->email             = 'admin@uraf-ksa.com';
        $user->email_verified_at = now();
        $user->password          = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $user->remember_token    = Str::random(10);
        $user->save();

        $user = new User();
        $user->name              = 'User';
        $user->email             = 'user@uraf-ksa.com';
        $user->email_verified_at = now();
        $user->password          = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $user->remember_token    = Str::random(10);
        $user->save();
    }
}

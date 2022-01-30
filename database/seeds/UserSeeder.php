<?php

use Illuminate\Database\Seeder;
use App\User;
use App\AdminProfile;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 3) as $index) {
            $role = '';
            if($index == 1){
                $role = 'SuperAdmin';
            }
            elseif($index == 2){
                $role = 'Admin';
            }
            elseif($index == 3){
                $role = 'Moderator';
            }

            User::create([
                'email' => Str::lower($role).'@gmail.com',
                'password' => Hash::make('123456789'),
                'role' => $role,
                'status' => 'Active',
                'email_verified_at' => Carbon::now()
            ]);

            AdminProfile::create([
                'email' => Str::lower($role).'@gmail.com',
                'role' => $role,
                'status' => 'Active',
                'name' => $role,
                'created_by' => 'Ibrahim'
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Classes\Constant;
use App\EntityClasses\EntityField;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            EntityField::NAME => 'ONGAGNA EKAKA',
            EntityField::FIRSTNAME => 'Harold Juxielle',
            EntityField::EMAIL => 'juxielle@gmail.com',
            EntityField::TELEPHONE => '077654399',
            EntityField::PASSWORD => bcrypt('1234'),
            EntityField::ROLE_ID => Role::where(EntityField::CODE, Constant::SUPER_ADMIN)->first()->id,
        ]);
        User::create([
            EntityField::NAME => 'MADZOU',
            EntityField::FIRSTNAME => 'Gerdan',
            EntityField::EMAIL => 'gerdan@gmail.com',
            EntityField::TELEPHONE => '076465400',
            EntityField::PASSWORD => bcrypt('gerdan'),
            EntityField::ROLE_ID => Role::where(EntityField::CODE, Constant::SUPER_ADMIN)->first()->id,
        ]);
        User::create([
            EntityField::NAME => 'OKEMBA',
            EntityField::FIRSTNAME => 'Chanick',
            EntityField::EMAIL => 'chanick@gmail.com',
            EntityField::TELEPHONE => '066251488',
            EntityField::PASSWORD => bcrypt('1234'),
            EntityField::ROLE_ID => Role::where(EntityField::CODE, Constant::CUSTOMER)->first()->id,
        ]);
    }
}

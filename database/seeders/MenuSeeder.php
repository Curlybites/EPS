<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::insert(
            [
                [
                    'name' => 'Dashboard',
                    'slug' => 'dashboard',
                    'route' => '/dashboard',
                    'order' => '1',
                    'parent_id' => '',
                    'icon'  => 'dashboard'
                ],
                [
                    'name' => 'Menu',
                    'slug' => 'menu',
                    'route' => '/menu',
                    'order' => '2',
                    'parent_id' => '',
                    'icon'  => 'menu'
                ],
                [
                    'name' => 'User',
                    'slug' => 'user',
                    'route' => '/user',
                    'order' => '3',
                    'parent_id' => '',
                    'icon'  => 'user'
                ]
            ]

        );
    }
}

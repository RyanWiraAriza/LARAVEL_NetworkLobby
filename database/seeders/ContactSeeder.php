<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // php artisan make:seed ContactSeeder
        // php artisan db:seed --class=ContactSeeder
        DB::table('contact')->insert([
            'created_at'=>date('Y-m-d H:i:s'),
            'name'=>'Abe Lincoln',
            'telephone'=>'911',
            'email'=>'abe.lincoln@us.com',
            'instagram'=>'officialAbe'
            
        ]);
        DB::table('contact')->insert([
            'created_at'=>date('Y-m-d H:i:s'),
            'name'=>'Winsconsin',
            'telephone'=>'478',
            'email'=>'wins.consin@uk.com',
            'instagram'=>'officialwins'
            
        ]);
        DB::table('contact')->insert([
            'created_at'=>date('Y-m-d H:i:s'),
            'name'=>'Adolfo',
            'telephone'=>'611',
            'email'=>'adolf@de.com',
            'instagram'=>'officialadolf'
            
        ]);
    }
}

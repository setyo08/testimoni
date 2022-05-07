<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feedback::create([
            'user_id' => '2',
            'message' => 'Sarana dan prasarana dikelola dengan baik. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis labore odit pariatur doloremque quam, suscipit maxime fugit ratione rerum veritatis, nemo culpa qui optio fuga corrupti velit quasi sit ipsa.',
            'ulasan' => 'sarpras',
            'is_show' => 1,
        ]);
        Feedback::create([
            'user_id' => '2',
            'message' => 'Sistem akademik yang sangat menginspirasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis labore odit pariatur doloremque quam, suscipit maxime fugit ratione rerum veritatis, nemo culpa qui optio fuga corrupti velit quasi sit ipsa.',
            'ulasan' => 'akademik',
            'is_show' => 1,
        ]);
        Feedback::create([
            'user_id' => '2',
            'message' => 'Pengelolaan administrasi yang dapat dilakukan dengan mudah. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis labore odit pariatur doloremque quam, suscipit maxime fugit ratione rerum veritatis, nemo culpa qui optio fuga corrupti velit quasi sit ipsa.',
            'ulasan' => 'administrasi',
            'is_show' => 1,
        ]);
    }
}

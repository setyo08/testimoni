<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' =>  'Pelatihan Pemrograman Komputer',
            'content' =>  'Pemrograman adalah proses menulis, menguji dan memperbaiki (debug), dan memelihara kode yang membangun suatu program komputer. Kode ini ditulis dalam berbagai bahasa pemrograman.',
        ]);
        News::create([
            'title' =>  'Pelatihan Seni Tari',
            'content' =>  'Seni tari adalah seni yang menggunakan gerakan tubuh secara berirama yang dilakukan di tempat dan waktu tertentu untuk keperluan mengungkapkan perasaan, maksud danpikiran. Tarian merupakan perpaduan dari beberapa unsur yaitu raga, irama, dan rasa.',
        ]);
        News::create([
            'title' =>  'Pelatihan Menjaga Kebersihan',
            'content' =>  'Kebersihan merupakan upaya yang dilakukan oleh individu untuk menjaga kebersihan pribadinya agar terhindar dari penyakit. Menurut (Mubarak, 2008) kebersihan adalah upaya seseorang dalam memelihara kebersihan dan kesehatan dirinya untuk memperoleh kesejahteraan fisik dan psikologis.',
        ]);
    }
}

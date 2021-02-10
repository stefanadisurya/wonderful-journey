<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('articles')->insert([
            [
                'user_id' => 2,
                'category_id' => 1,
                'title' => 'Kuta Beach, Bali',
                'description' => 'Kuta Beach is a tourist place located in Kuta sub-district, south of Denpasar City, Bali, Indonesia. 
                            This area is a tourist destination for foreign tourists and has been a mainstay tourist attraction for the island of Bali since the early 1970s. 
                            Kuta Beach is often referred to as the sunset beach as opposed to Sanur beach. In addition, I Gusti Ngurah Rai Airfield is located not far from Kuta.',
                'image' => 'kuta.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 2,
                'category_id' => 2,
                'title' => 'Kerinci Mountain, Sumatera',
                'description' => 'Mount Kerinci (also spelled "Kerintji", and known as Mount Gedang, Kurinci Volcano, Kerinchi, Korinci, or Puncak Indrapura) is the highest mountain in Sumatra, the highest volcano in Indonesia, and the highest peak in Indonesia outside Papua. 
                                Mount Kerinci is located right on the border between West Sumatra Province and Jambi Province, in the Bukit Barisan Mountains, near the west coast, and is located about 130 km south of Padang, West Sumatra Province. 
                                This mountain is also the boundary between the Minangkabau ethnic area and the Kerinci tribe, which is surrounded by dense forests of the Kerinci Seblat National Park and is the habitat of the Sumatran tiger and Sumatran rhino.',
                'image' => 'kerinci.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'category_id' => 1,
                'title' => 'Klayar Beach, East Java',
                'description' => 'Klayar Beach is a beach with white sand and rocks and rock cliffs that surround it. 
                                This beach is located in Pacitan, East Java and borders Wonogiri, Central Java. 
                                Precisely located in Sendang Village, Donorojo District, Pacitan Regency, East Java Province. 
                                The distance is about 40 kilometers to the west of the city of Pacitan. 
                                This beach is still in line with Teleng Ria Beach which has been managed as a tourist spot first.',
                'image' => 'klayar.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'category_id' => 2,
                'title' => 'Rinjani Mountain, NTB',
                'description' => "Mount Rinjani is a mountain located on the island of Lombok, West Nusa Tenggara. 
                                The mountain, which is the second highest volcano in Indonesia with an altitude of 3,726 m above sea level and located at latitude 8º25 'latitude and 116º28' east longitude, is a favorite mountain for Indonesian climbers because of its beautiful scenery. 
                                This mountain is part of the Mount Rinjani National Park which has an area of approximately 41,330 ha and it will be proposed to add it to 76,000 ha to the west and east. 
                                Administratively, this mountain is located in three districts: East Lombok, Central Lombok and West Lombok.",
                'image' => 'rinjani.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 2,
                'category_id' => 1,
                'title' => 'Indrayanti Beach, Yogyakarta',
                'description' => 'Pulang Sawal Beach (Indrayanti Beach) or abbreviated as Pulsa Beach is one of the attractive and exotic beaches located in Ngasem Hamlet, Sidoharjo Village, Tepus District, Gunung Kidul Regency, Yogyakarta Special Region. 
                                Indrayanti Beach, Gunungkidul Regency is located right on the east side of Sundak Beach. 
                                Both are bordered by coral hills. Indarayati Beach offers a unique panoramic beauty compared to other beaches in Gunungkidul.',
                'image' => 'indrayanti.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 3,
                'category_id' => 2,
                'title' => 'Bromo Mountain, East Java',
                'description' => 'Mount Bromo (from Sanskrit: Brahma, one of the Main Gods in Hinduism) or in the Tengger language spelled "Brama", 
                                is an active volcano in East Java, Indonesia. This mountain has an altitude of 2,329 meters above sea level and is located in four districts, namely Probolinggo Regency, Pasuruan Regency, Lumajang Regency, and Malang Regency. 
                                Mount Bromo is famous as a major tourist attraction in East Java. As a tourist attraction, Bromo is attractive because of its status as an active volcano. Mount Bromo is included in the Bromo Tengger Semeru National Park area.',
                'image' => 'bromo.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}

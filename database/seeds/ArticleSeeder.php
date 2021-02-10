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
    public function run()
    {
        for($i = 0; $i < 3; $i++) {
            foreach(range(2,3) as $user_id) {
                    foreach(range(1,1) as $category_id) {
                        DB::table('articles')->insert([
                            'user_id' => $user_id,
                            'category_id' => $category_id,
                            'title' => 'Pantai Kuta, Bali',
                            'description' => 'Pantai Kuta adalah sebuah tempat pariwisata yang terletak di kecamatan Kuta, sebelah selatan Kota Denpasar, Bali, Indonesia. 
                                            Daerah ini merupakan sebuah tujuan wisata turis mancanegara dan telah menjadi objek wisata andalan Pulau Bali sejak awal tahun 1970-an. 
                                            Pantai Kuta sering pula disebut sebagai pantai matahari terbenam (sunset beach) sebagai lawan dari Pantai Sanur. 
                                            Selain itu, Lapangan Udara I Gusti Ngurah Rai terletak tidak jauh dari Kuta. -Wikipedia-',
                            'image' => 'kuta.jpg',
                            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        ]);
                }
            }
        }
    }
}

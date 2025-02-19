<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'nama_kategori' => 'MORNING COFFEE',
                'deskripsi' => 'Kopi nikmat untuk memulai pagi dengan semangat.',
                'gambar' => 'thumb_1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'COFFEE & PAPPER',
                'deskripsi' => 'Perpaduan kopi dengan rasa rempah yang khas.',
                'gambar' => 'thumb_2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'GREEN COFFEE',
                'deskripsi' => 'Kopi hijau sehat dengan manfaat alami terbaik.',
                'gambar' => 'thumb_3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'OCEAN COFFEE',
                'deskripsi' => 'Sensasi kopi segar dengan aroma laut yang menenangkan.',
                'gambar' => 'thumb_4.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('products')->insert([
            [
                'category_id' => 1,
                'nama_produk' => 'CAPPUCINO',
                'gambar' => 'product_1.png',
                'deskripsi' => 'Kopi khas Italia dengan campuran espresso dan susu.',
                'harga' => 15000,
                'stok' => 10,
                'total_jual' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'nama_produk' => 'LATTE',
                'gambar' => 'product_2.png',
                'deskripsi' => 'Espresso dengan susu steamed dan busa lembut.',
                'harga' => 16000,
                'stok' => 15,
                'total_jual' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'nama_produk' => 'AMERICANO',
                'gambar' => 'product_3.png',
                'deskripsi' => 'Espresso dengan tambahan air untuk rasa lebih ringan.',
                'harga' => 14000,
                'stok' => 12,
                'total_jual' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'nama_produk' => 'MOCHA',
                'gambar' => 'product_4.png',
                'deskripsi' => 'Kombinasi kopi, cokelat, dan susu dengan rasa manis.',
                'harga' => 18000,
                'stok' => 8,
                'total_jual' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'nama_produk' => 'ESPRESSO',
                'gambar' => 'product_5.png',
                'deskripsi' => 'Kopi pekat dengan cita rasa kuat dan khas.',
                'harga' => 12000,
                'stok' => 20,
                'total_jual' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'nama_produk' => 'FLAT WHITE',
                'gambar' => 'product_6.png',
                'deskripsi' => 'Espresso dengan tekstur susu lebih creamy dan lembut.',
                'harga' => 17000,
                'stok' => 9,
                'total_jual' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'nama_produk' => 'MACCHIATO',
                'gambar' => 'product_7.png',
                'deskripsi' => 'Espresso dengan sedikit busa susu di atasnya.',
                'harga' => 15500,
                'stok' => 11,
                'total_jual' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'nama_produk' => 'AFFOGATO',
                'gambar' => 'product_8.png',
                'deskripsi' => 'Espresso yang disajikan dengan es krim vanila.',
                'harga' => 19000,
                'stok' => 6,
                'total_jual' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'nama_produk' => 'COLD BREW',
                'gambar' => 'product_9.png',
                'deskripsi' => 'Kopi diseduh dingin dengan rasa lebih halus.',
                'harga' => 20000,
                'stok' => 7,
                'total_jual' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'nama_produk' => 'VIETNAMESE COFFEE',
                'gambar' => 'product_10.png',
                'deskripsi' => 'Kopi Vietnam khas dengan susu kental manis.',
                'harga' => 17000,
                'stok' => 10,
                'total_jual' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'judul_blog' => 'TIPS MEMILIH KOPI PREMIUM',
                'excerpt' => 'Berikut berbagai tips untuk memilih kopi premium.',
                'deskripsi' => 'Memilih kopi premium memerlukan perhatian pada asal biji kopi, 
                                metode roasting, serta profil rasa yang diinginkan. Pastikan 
                                kopi yang Anda pilih memiliki aroma kuat dan tidak bercampur 
                                dengan bahan tambahan untuk kualitas terbaik.',
                'gambar' => 'thumb_2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_blog' => 'TREN KOPI 2025',
                'excerpt' => 'Tren kopi yang kini digemari masyarakat di dunia.',
                'deskripsi' => 'Tahun 2025 diprediksi menghadirkan tren kopi baru, seperti 
                                cold brew inovatif, alternatif susu nabati, serta kopi ramah 
                                lingkungan. Banyak pecinta kopi mulai mencari opsi lebih 
                                sehat dan berkelanjutan.',
                'gambar' => 'product_6.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_blog' => 'MANFAAT KOPI BAGI KESEHATAN',
                'excerpt' => 'Beberapa manfaat kopi yang baik bagi tubuh.',
                'deskripsi' => 'Kopi mengandung antioksidan tinggi yang dapat membantu 
                                meningkatkan fokus, mengurangi risiko penyakit jantung, 
                                serta meningkatkan metabolisme tubuh. Namun, konsumsi 
                                berlebihan perlu dihindari agar tidak berdampak buruk.',
                'gambar' => 'thumb_3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_blog' => 'SEJARAH KOPI DI INDONESIA',
                'excerpt' => 'Perjalanan kopi sejak diperkenalkan di Indonesia.',
                'deskripsi' => 'Kopi pertama kali diperkenalkan di Indonesia pada abad ke-17 
                                oleh Belanda. Sejak itu, Indonesia berkembang menjadi salah 
                                satu produsen kopi terbesar dengan berbagai varian unik seperti 
                                Kopi Gayo dan Kopi Toraja.',
                'gambar' => 'product_2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul_blog' => 'BEDA ARABICA DAN ROBUSTA',
                'excerpt' => 'Perbedaan kopi Arabica dan Robusta secara umum.',
                'deskripsi' => 'Kopi Arabica memiliki rasa lebih halus dengan tingkat 
                                keasaman tinggi, sedangkan Robusta lebih pahit dengan kadar 
                                kafein lebih tinggi. Keduanya memiliki penggemar masing-masing 
                                berdasarkan selera pribadi.',
                'gambar' => 'thumb_4.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

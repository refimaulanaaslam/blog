<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        User::create([
            'name' => 'Refi Maulana',
            'username' => 'Refi Maulana',
            'email' => 'Refi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing',
            'id' => 1
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'id' => 2
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal',
            'id' => 3
        ]);

        Post::factory(19)->create();

        // Post::factory()

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Pemrograman web diambil dari 2 suku kata yaitu pemrograman dan web. Pemrograman yang dalam bahasa English adalah programming dan diartikan proses, cara, perbuatan program.',
        //     'body' => ' <p>Definisi Web : jaringan komputer yang terdiri dari kumpulan situs internet yang menawarkan teks dan grafik dan suara dan sumber daya animasi melalui protokol transfer hypertext.
        //     Orang banyak mengenal web dengan istilah WWW (world wide web), World Wide Web adalah layanan internet yang paling populer saat ini internet mulai dikenal dan digunakan secara luas setelah adanya layanan WWW .</p>
        //     <p>WWW adalah halaman-halaman website yang dapat saling terkoneksi satu dengan lainnya (hyperlink) yang membentuk samudra belantara informasi . WWW berjalan dengan protokol HyperText Transfer Protokol (HTTP). Halaman Web merupakan file teks murni (plain text) yang berisi sintaks-sintaks HTML yang dapat dibuka/ dilihat/ diterjemahkan dengan Internet Browser . Sintaks HTML mampu memuat konten text, gambar, audio, video dan animasi.</p> Kini internet identik dengan web, karena kepopuleran web sebagai standar interface pada lanyanan-layanan yang ada di internet, dari awalnya sebagai penyedia informasi, ini digunakan juga untuk komunikasi dari email sampai dengan chatting, sampai dengan melakukan transaksi binsin (commerce) (Betha Sidik,Ir, Pemrograman web dengan HTML, Informatika Bandung, 2005) Banyak keuntungan yang diberikan oleh Aplikasi berbasis Web dari pada aplikasi berbasis destop, sehingga aplikasi berbasis web telah diadopsi oleh perusahaan sebagai bagian dari strategi teknologi informasinya, karena beberapa alasan :
        //     Akses informasi mudah,</p>
        //     <p>Baris isi</p>
        //     <p>Setup server lebih mudah</p>
        //     <p>Baris isi</p>
        //     <p>Informasi mudah didistribusikan</p>
        //     <p>Baris isi</p>
        //     <p>Bebas platform, informasi dapat di sajikan oleh browser web pada sistem operasi mana saja karena adanya standar dokumen berbagai tipe data dapat disajikan</p>
        //     <p>Baris isi HTTP</p>
        //     <p>HTTP (HyperTextTransfer Protocol) adalah protokol yang dipergunakan untuk mentransfer dokumen dalam World Wide Web(WWW). Protokol ini adalah protokol ringan, tidak berstatus dan generik yang dapat dipergunakan berbagai macam tipe dokumen. Pengembangan HTTP dikoordinasi oleh Konsorsium World Wide Web(W3C) dan grup bekerja Internet Engineering Task Force(IETF), bekerja dalam publikasi satu seri RFC, yang paling terkenal RFC 2616, yang menjelaskan HTTP/1,1, versti HTTP yang digunakan umum sekarang ini. HTTP adalah sebuah protokol meminta/menjawab antara clientdan server. Sebuh client HTTP seperti web browser, biasanya memulai permintaan dengan membuat hubungan TCP/IPke porttertentu di tuan rumah yang jauh (biasanya port 80). Sebuah server HTTP yang mendengarkan diport tersebut menunggu client mengirim kode permintaan (request), seperti “GET / HTTP/1.1” (yang akan meminta halaman yang sudah ditentukan), diikuti dengan pesan MIMEyang memiliki beberapa informasi kode kepala yang menjelaskan aspek dari permintaan tersebut, diikut dengan badan dari data tertentu. Beberapa kepala (header) juga bebas ditulis atau tidak, sementara lainnya (seperti tuan rumah) diperlukan oleh protokol HTTP/1,1. Begitu menerima kode permintaan (dan pesan, bila ada), server mengirim kembali kode jawaban, seperti “200 OK”, dan sebuah pesan yang diminta, atau sebuah pesan error atau pesan lainnya.
        //     Sejarah Protokol HTTP pertama kali dipergunakan dalam WWW pada tahun 1990. Pada saat tersebut yang dipakai adalah protokol HTTP versi 0.9. Versi 0.9 ini adalah protokol transfer dokumen secara mentah, maksudnya adalah data dokumen dikirim sesuai dengan isi dari dokumen tersebut tanpa memandang tipe dari dokumen. Kemudian pada tahun 1996 protokol HTTP diperbaiki menjadi HTTP versi 1.0. Perubahan ini untuk mengakomodasi tipe-tipe dokumen yang hendak dikirim beserta enkoding yang dipergunakan dalam pengiriman data dokumen. Sesuai dengan perkembangan infrastruktur internet maka pada tahun 1999 dikeluarkan HTTP versi 1.1 untuk mengakomodasi proxy, cache dan koneksi yang persisten.
        //     PERBEDAAN WEB 1.0, WEB 2.0 dan WEB 3.0
        //     </p>
        //     <p>
        //     Web 1.0
        //     Merupakan teknologi Web generasi pertama yang merupakan revolusi baru di dunia Internet karena telah mengubah cara kerja dunia industri dan media. Pada dasarnya, Website yang dibangun pada generasi pertama ini secara umum dikembangkan untuk pengaksesan informasi dan memiliki sifat yang sedikit interaktif. Berbagai Website seperti situs berita “cnn.com” atau situs belanja “Bhinneka.com” dapat dikategorikan ke dalam jenis ini.</p><p>
            
        //     Web 2.0 Istilah Web 2.0 pertama kalinya diperkenalkan oleh O’Reilly Media pada tahun 2004 sebagai teknologi Web generasi kedua yang mengedepankan kolaborasi dan sharing informasi secara online. Menurut Tim O’Reilly, Web 2.0 dapat didefinisikan sebagai berikut: “Web 2.0 adalah revolusi bisnis di industri komputer yang disebabkan oleh penggunaan internet sebagai platform, dan merupakan suatu percobaan untuk memahami berbagai aturan untuk mencapai keberhasilan pada platform baru tersebut. Salah satu aturan terutama adalah: Membangun aplikasi yang mengeksploitasi efek jaringan untuk mendapatkan lebih banyak lagi pengguna aplikasi tersebut” Berbagai layanan berbasis web seperti jejaring sosial, wiki dan folksonomies (misalnya: “flickr.com”, “del.icio.us”) merupakan teknologi Web 2.0 yang menambah interaktifitas di antara para pengguna Web.</p>
        //     <p>Web 3.0 / Semantic Web</p><p>
        //     Waaupun masih dalam perdebatan di kalangan analis dan peneliti, istilah Web 3.0 tetap berpotensi menjadi generasi teknologi di dunia Internet. Saat ini, definisi untuk Web 3.0 sangat beragam mulai dari pengaksesan broadband secara mobile sampai kepada layanan Web berisikan perangkat lunak bersifat on-demand [Joh07]. Namun, menurut John Markoff, Web 3.0 adalah sekumpulan teknologi yang menawarkan cara baru yang efisien dalam membantu komputer mengorganisasi dan menarik kesimpulan dari data online. Berdasarkan definisi yang dikemukakan tersebut, maka pada dasarnya Semantic Web memiliki tujuan yang sama karena Semantic Web memiliki isi Web yang tidak dapat hanya diekpresikan di dalam bahasa alami yang dimengerti manusia, tetapi juga di dalam bentuk yang dapat dimengerti, diinterpretasi dan digunakan oleh perangkat lunak (software agents). Melalui Semantic Web inilah, berbagai perangkat lunak akan mampu mencari, membagi, dan mengintegrasikan informasi dengan cara yang lebih mudah [Tim01]. Pembuatan Semantic Web dimungkinkan dengan adanya sekumpulan standar yang dikoordinasi oleh World Wide Web Consortium (W3C). Standar yang paling penting dalam membangun Semantic Web adalah XML, XML Schema, RDF, OWL, dan SPARQL.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Desain web adalah suatu desain tata kelola tampilan konten-konten pada website yang akan ditampilkan kepada client atau penerima informasi melalui world wide web. Desain web merupakan bagian penting dalam pengembangan suatu website, karena suatu web akan dikatakan berkualitas ketika tidak hanya menonjolkan sisi fungsionalitas melainkan juga sisi seni dan estetika serta user interface dari website itu sendiri.',
        //     'body' => '<p>Desain web adalah suatu desain tata kelola tampilan konten-konten pada website yang akan ditampilkan kepada client atau penerima informasi melalui world wide web. Desain web merupakan bagian penting dalam pengembangan suatu website, karena suatu web akan dikatakan berkualitas ketika tidak hanya menonjolkan sisi fungsionalitas melainkan juga sisi seni dan estetika serta user interface dari website itu sendiri. </p>

        //     <p>
        //     Hal ini karena membantu untuk memudahkan client atau pengguna mendapatkan informasi yang diinginkan. Seiring berkembangnya teknologi mobile, kini desain web dituntut untuk dapat menampilkan konten-kontennya secara user friendly. Maka dari itu desain web dituntut untuk dapat menampilkan konten-kontennya secara responsive mengikuti ukuran perangkat yang mengaksesnya.
        //     </p>
        //     <p>
        //     Dalam pembuatannya, biasanya untuk mendesain suatu website menggunakan markup language yaitu HTML yang digunakan untuk mengatur struktur suatu website. Stylesheet language yaitu CSS yang digunakan untuk mengatur tampilan komponen-komponen yang terdapat pada website. Bahasa pemrograman web yaitu JavaScript yang digunakan untuk memberikan efek-efek dinamis seperti animasi dan validasi.
        //     </p>
        //     <p>
        //     Desain web adalah seni grafis, maka dari itu dalam perancangan web pun perlu memperhatikan penampilan yang sesuai dengan tema web yang dibuat. Kesesuaian warna pada tema web akan berpengaruh kuat terhadap psikologi dari pengunjung website.
        //     </p>
        //     <p>
        //     Pakar pemasaran, Neil Patel mengatakan bahwa delapan puluh lima persen alasan seseorang membeli suatu produk adalah karena warna. Maka dari itu penting untuk memperhatikan warna-warna yang digunakan dalam mendesain suatu website untuk mempengaruhi psikolog pengunjung agar mau membeli atau menggunakan barang maupun jasa yang kita tawarkan.
        //     </p>
        //     <p>
        //     Kembali ke awal dimana desain web adalah seni dalam menampilkan tata letak informasi-informasi pada suatu website. Para desainer web wajib untuk memperhatikan informasi-informasi yang akan diminta oleh pengunjung website. Diusahakan agar pengunjung dapat dengan mudah menemukan informasi yang ingin dicarinya.
        //     </p>
        //     <p>
        //     Maka dari itu perlu untuk mendesain web secara sesederhana mungkin, namun dapat memuat dan menampilkan informasi yang diinginkan oleh pengunjung suatu website agar dapat menjadi website yang berkualitas.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio aspernatur ducimus officia accusantium eaque, quaerat iste aliquam enim accusamus, mollitia quas ullam blanditiis sunt! Quisquam exercitationem tempora unde beatae et!', 
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque qui tempora harum. Iure nisi deleniti architecto ipsa suscipit quisquam reiciendis laudantium excepturi, voluptate, facilis placeat a tenetur corrupti doloribus. Laborum, inventore modi ipsa accusamus aliquam esse in ipsum repellat eius distinctio reprehenderit iusto maxime molestiae aperiam sed nam quos quis! Fugiat, quaerat nisi. Dignissimos aspernatur assumenda dolorem obcaecati ullam atque nemo sed id, optio modi accusantium reprehenderit suscipit eum quibusdam distinctio nihil itaque? Fuga, veritatis itaque! Qui neque officiis quidem ipsa distinctio atque sit maiores laudantium itaque eveniet, necessitatibus accusantium eius, facilis magnam autem in! Vitae ex similique fugiat esse tempore cupiditate laudantium autem repudiandae perferendis delectus veniam minus itaque at optio eligendi voluptatibus, ratione alias? Nam consectetur voluptates voluptatem commodi qui eveniet error, excepturi reiciendis quo modi soluta iste doloremque quis quisquam assumenda delectus laborum possimus ea totam! Eos repellendus dolor ea in dolores debitis, numquam sequi et exercitationem nostrum doloribus voluptatum pariatur id distinctio esse qui asperiores quae architecto vero nulla amet sit illo. Officia alias quidem officiis! Consequuntur quam minus tenetur perspiciatis, explicabo quae sit necessitatibus autem quibusdam, quod, amet natus molestiae reprehenderit rem facere ad quasi? Fugiat reprehenderit consectetur rem explicabo delectus aliquid maiores sapiente possimus.',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);

    }
}

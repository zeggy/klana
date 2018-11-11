<?php

use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trips')->insert(
            ['vendor_id' => 1, 'title' => 'Nusa Penida', 'location' => 'Nusa Penida, Bali', 'price' => 1150000, 
                'description' => 'Pulau Bali memang sudah terkenal didalam maupun luar negeri sebagai pulau yang memiliki keindahan
                alam bagaikan nirwana. Pada saat ini memang kebanyakan dari para wisatawan hanya pergi ketempat
                yang mainstream seperti Kuta, Ubud, Sanur, atau Tanah Lot. Padahal bali memiliki surga tersembunyi
                yang letaknya tidak jauh dari sanur. Dengan memiliki keindahan pemandangan yang menawan ditambah
                dengan keindahan bawah laut yang menakjubkan bernama Pulau Nusa Penida.
                <br /><br />
                Bagi anda yang berkeinginan untuk mendatangi Pulau Bali dalam waktu dekat ini, dan mungkin anda
                bosan dengan tempat wisata yang basic seperti dijelaskan diatas. Maka anda masuk pada website yang
                tepat, karena kami Wisata Nusa Penida Bali memiliki paket Paket murah nusa penida dengan waktu
                yang singkat. Anda tidak perlu untuk repot-repot check out dari hotel ataupun penginapan untuk
                menikmati keindahan Nusa Penida. Karena Paket Halfday ini hanya akan memakan waktu setengah hari
                saja. Karena paket ini dimulai pada pagi hari dan anda akan pulang pada saat sore harinya. Walaupun
                dengan waktu yang singkat, namun anda sudah dapat mengunjungi beberapa tempat yang asyik dan
                menarik. Tempat-tempat menarik tersebut diantaranya Kelingking Beaach, Broken Bay, Angle’s
                Billabong, dan tentunya Crystal Bay.
                <br/><br/>
                <h5>Biaya Sudah Termasuk</h5>
                <ul>
                <li>Tiket speed boat sanur – nusa penida (PP)</li>
                <li>Tour Setengah Hari (Mobil APV).</li>
                <li>Air Mineral</li>
                </ul>', 
                'belonging' => '
                <h2>Perlengkapan yang dibutuhkan:</h2>
                <ol>
                <li>Topi</li>
                <li>Kacamata Hitam</li>
                <li>Pakaian Ganti</li>
                <li>Sunblock</li>
                <li>Sepatu</li>
                <li>Snack</li>
                <li>Air Mineral</li>
                <li>Kamera (jika ada)</li>
                </ol>',
                'itinerary' => 'Start Point Pelabuhan Sanur
                Meeting Point di Pelabuhan Sanur (Dibantu Staff Khusus Kami)
                <br/><br/>
                Pukul : 07.30 Wita (Sudah ada di Sanur)<br/>
                Keberangkatan : 08.00 Wita<br/>
                Lokasi Wisata Paket Half Day Nusa Penida<br/>
                Kelingking Beach (Pohon Cinta)<br/>
                Paluang Cliff<br/>
                Broken Beach<br/>
                Angel’s Billabong<br/>
                Crystal Bay Beach<br/>
                <br/><br/><br/>
                <h6>Notes :</h6>
                Itinerary/rundown tour bersifat Kondisional/Menyesuaikan dengan kondisi di Lapangan, tanpa
                mengurangi destinasi & fasilitas tour yang sudah disebutkan.
                Tidak ada pengembalian Tiket Masuk Tempat wisata yang tidak terpakai oleh peserta',
                'date' => '2018-12-26', 'estimated_time' => '1 day']
        );
        DB::table('trips')->insert(
            ['vendor_id' => 2, 'title' => 'B29 Lumajang', 'location' => 'B29, Lumajang, Jawa Timur', 'price' => 750000, 
                'description' => 'Bukit dan lembah menghijau disertai kabut dengan udara dingin yang "menggigit" jemari pun mewarnai
                perjalanan penuh sensasi sekitar 15 menit . <br /> <br />
                Salah satu tujuan para wisatawan ke destinasi wisata baru di kawasan Taman Nasional Bromo Tengger
                Semeru (BTS) itu adalah menyaksikan sunrise atau matahari terbit. Momen terbaik adalah menunggu di
                atas bukit sejak pukul 04.00 WIB. Bahkan, tak sedikit pengunjung yang berkemah atau menggelar tenda
                di atas bukit Songolikur yang berarti 20 dalam bahasa jawa. <br /> <br />
                Puncak bukit berketinggian 2.900 meter di atas permukaan laut (mdpl), dapat memanjakan mata
                pengunjung dengan pemandangan indah menawan pegunungan Tengger. <br /> <br />
                Pesona sunrise di Bukit 29 atau puncak B29 hanya dapat dinikmati oleh rombongan kecil pelancong
                yang lebih dahulu tiba atau berkemah dan menunggu sejak malam hari.
                <br/><br/>
                <h2>Biaya Sudah Termasuk</h2>
                <ul>
                <li>Transportasi AC Jakarta – Lumajang PP</li>
                <li>Safety equipment</li>
                <li>Dokumentasi foto</li>
                <li>Guide dan instruktur</li>
                <li>Makan siang</li>
                </ul>', 
                'belonging' => '
                <h2>Perlengkapan yang dibutuhkan:</h2>
                <ol>
                <li>Topi</li>
                <li>Kacamata Hitam</li>
                <li>Pakaian Ganti</li>
                <li>Sunblock</li>
                <li>Sepatu</li>
                <li>Snack</li>
                <li>Air Mineral</li>
                <li>Kamera (jika ada)</li>
                </ol>',
                'itinerary' => '
                <h5>Hari 1 : Jakarta /Malang-Lumajang-Tumpak Sewu</h5>
                Pada jam 08.00 peserta akan dijemput oleh tim kami dan Klana. anda akan dimulai menuju Kota
                Lumajang kurang lebih 4 jam,Selanjutnya anda akan diajak mengunjungi Air terjun TUMPAK SEWU
                yang sangat indah,Menyaksikan keindahan air terjun dari View Panorama Poin dan jika anda
                mempunyai Stamina yang Prima dan Nyali yg besar, kami persilahkan untuk Menjelajahi Air terjun / GOA
                TETES menuruni lembah dengan didampingi Lokal Guide, Setelah puas menjelajahi Tumpak Sewu,
                Check in Hotel & Istirahat
                <br/><br/>
                Alternatif tampat wisata lain yg bisa dikunjungi jika anda kurang puas & waktu masih memungkinkan :
                Air Terjun Kabut pelangi, spot foto Jembatan Piket Nol Lumajang
                <br/><br/><br/>
                <h5>Hari 2 : Puncak B29 – Surabaya/Malang ( MP )</h5>
                Morning call Dini Hari Jam 04.00,anda akan diajak menikmati sunrise dan panorama di Puncak B29
                Panorama Bromo dari sisi yang berbeda, dan jika beruntung anda akan bisa menyaksikan Gugusan
                awan bergelombang yang begitu menakjubkan, memanjang dari bukit ke bukit dari lembah ke lembah,
                untuk menuju puncak B29 anda akan menggunakan kendararan lokal Ojek Sepeda motor yang telah
                kami siapkan, setelah puas menikmati panorama B29 kembali ke Hotel, Istirahat sejenak, Check Out
                dan Melanjutkan perjalanan kembali ke Jakarta,
                <br/><br/>
                Jam 17.00 tour selesai,Terima kasih atas partisipasi dan kebersamaan Anda, sampai jumpa dalam
                acara jalan-jalan kami lainnya.
                <br/><br/>
                Alternatif tampat wisata lain yg bisa dikunjungi jika anda kurang puas & waktu masih memungkinkan :
                Danau Ranu Klakah-Ranu Bedali-Ranu Pakis

                <br/><br/><br/>
                Perlengkapan Yang Harus Dibawa di Paket Wisata Tumpak Sewu B29 Lumajang : Sepatu/sandal yg
                nyaman. Jaket Tebal, Sarung Tangan, Syal, Penutup Kepala, Makanan Kecil, Obat Obatan, Camera,
                Uang Cash
                <br/><br/><br/>
                *Jam Makan Siang,Makan malam, Istirahat & Sholat Disesuaikan Dengan Request Peserta
                <br/><br/><br/>
                <h6>Notes :</h6>

                Itinerary/rundown tour bersifat Kondisional/Menyesuaikan dengan kondisi di Lapangan, tanpa
                mengurangi destinasi & fasilitas tour yang sudah disebutkan.
                Tidak ada pengembalian Tiket Masuk Tempat wisata yang tidak terpakai oleh peserta',
                'date' => '2018-12-26', 'estimated_time' => '2 days 1 night']
        );
        DB::table('trips')->insert(
            ['vendor_id' => 3, 'title' => 'Gunung Rinjani', 'location' => 'Gunung Rinjani, Lombok, Nusa Tenggara Timur (NTT)', 'price' => 3750000, 
                'description' => 'Berlokasi di Pulau Lombok, Nusa Tenggara Timur, Taman Nasional Gunung Rinjani (TNGR) memiliki
                luas mencapai 40.000 hektare. <br /> <br />
                TNGR dikenal dengan Gunung Rinjani yang menjadi salah satu gunung yang paling banyak diincar
                pendaki. <br /> <br />
                Untuk mendaki Gunung Rinjani, terdapat dua jalur yang cukup populer, yaitu Sembalun dan Senaru. <br /> <br />
                Kami menyediakan paket mendaki ke Gunung Rinjani 4 hari 3 malam termasuk transportasi dari
                Bandara Lombok dan akomodasi di area Taman Nasional Rinjani Gunung sebelum mulai mendaki di
                pagi hari yaitu desa Sembalun Lawang, sehingga aktivitas mendaki selama di Gunung Rinjani menjadi 3
                hari 2 malam, ya paket pendakian ini sangat cocok bagi seorang pendaki dan tidak cocok bagi pendaki
                pemula, mulai mendaki dari Sembalun Lawang - bermalam di perkemahan kawah Plawangan Sembalun
                - puncak gunung Rinjani - bermalam di perkemahan tepi Danau Segara Anak, kemudian mendaki lagi ke
                kawah Plawangan Senaru - berakhir turun ke desa Senaru
                <br/><br/>
                <h5>Biaya Sudah Termasuk</h5>
                <ul>
                <li>1 malam di Lembah Rinjani Hotel (twin share), termasuk sarapan</li>
                <li>Guide</li>
                <li>>Lokal Porter</li>
                <li>Tenda</li>
                <li>Toilet tenda</li>
                <li>Masing-masing mendapat kantong tidur</li>
                <li>Masing-masing mendapat Mattras</li>
                <li>Masing-masing mendapat botol air</li>
                <li>Peralatan memasak</li>
                <li>Aktivitas mendaki selama di gunung Rinjani 3 hari 2 malam</li>
                <li>Makan pagi, siang dan makan malam selama mendaki di Gunung Rinjani</li>
                <li>2 x Transport (Airport – Sembalun) (Senaru – Mataram)</li>
                <li>Tiket masuk obyek wisata</li>', 
                'belonging' => '
                <h5>Perlengkapan yang dibutuhkan:</h5>
                <ol>
                <li>Lips gloss khusus ke puncak</li>
                <li>Kamera</li>
                <li>Stik (trekking pole)</li>
                <li>Sunscreen</li>
                <li>Topi hangat dan kacamata</li>
                <li>Kertas toilet [tisu basah~kering]</li>
                <li>Obat Pribadi</li>
                <li>Sedikit jumlah uang</li>
                <li>Senter di kepala</li>
                <li>Item kebersihan pribadi (misalnya tampon, dll)</li>
                <li>Sweater atau Jaket</li>
                <li>Jas hujan (April, Oktober, November dan Desember)</li>
                <li>Handuk (untuk 3 hari)</li>
                <li>Baju Kaos</li>
                <li>Topi hangat (malam, pagi dan puncak)</li>
                <li>Tiger balm atau semprot otot (untuk otot nyeri)</li>
                <li>Pakaian renang (jika Anda berminat untuk berenang di sumber air panas)</li>
                <li>Kaos celana panjang dan celana pendek</li>
                <li>Sarung tangan</li>
                </ol>',
                'itinerary' => '
                <h5>HARI 1: Airport Lombok Tengah - Sembalun Lawang - bermalam hotel di Sembalun</h5>
                Di jemput dari Airport Lombok Tengah menuju desa Sembalun Lawang, mengendarai kurang lebih 2
                setengah jam. Bermalam di hotel Sembalun Lawang yaitu di Taman Nasional Gunung Rinjani
                <br/><br/><br/>
                HARI 2: Sembalun Lawang – bermalam di tepi kawah Plawangan Sembalun 2639 meter. lihat map
                gunung Rinjani
                Bangun pagi, setelah sarapan di hotel pukul 7 pagi brifing kepada pemandu, setelah registrasi di balai
                Taman Nasional Gunung Rinjani, kita mulai mendaki bersama porter dan pemandu, 2 jam kita sampai di
                post I dan beristirahat beberapa menit kemudian melanjutkan perjalanan menuju post 2 tiba sekitar 10
                pagi di Padang Savanah Sembalun Lawang ketinggian 1500 m dpl, istirahat di Padabalong ketinggian
                2200m persiapan soup untuk makan siang dari masakan dari porter kami. pukul 13.00 siang, kita
                menghadapi tanjakan yang cukup tinggi yang di sebut bukit penyesalan, sekitar 3 jam pendakian kita
                sudah sampai di kawah Plawangan Sembalun dengan ketinggian 2639 meters, pada pukul 16:00 atau
                17:00 sore telah tiba di Kawah Plawangan Sembalun yang berada di pertengahan badan Gunung
                Rinjani dengan ketinggian 2639 meter, porter kita akan memasang tenda dan persiapan makan malam
                dari masakan porter kami, dan selanjutnya bermalam di Kawah Plawangan Sembalun atau lihat
                lokasinya Plawangan Sembalun (di pertengahan punggung gunung Rinjani)
                <br/><br/><br/>
                HARI 3: Plawangan Sembalun – Puncak Gunung Rinjani – bermalam di tepi Danau Segara Anak
                Kita berada diketinggian 2639 meters yaitu Kawah Plawangan Sembalun, untuk melanjutkan ke puncak
                tertinggi gunung Rinjani 3726 meter, silahkan bergabung dengan peserta anda dapat berbagi atau
                (share), porter atau guide akan mengantar ke puncak dan di bayar Rp 150,000 untuk satu orang porter.
                Bilamana ada yang ingin ke puncak Gunung Rinjani ketinggian 3726 mdpl, di harapkan bangun sekitar
                pukul 02.00 atau 4 pagi, perjalanan ke puncak Gunung Rinjani membutuhkan waktu kurang lebih 3 atau
                5 jam, Medan pendakian menuju puncak gunung Rinjani cukup berat dan cukup melelahkan, kita akan
                menemukan padang pasir, kawah, dan jurang yang seolah tanpa dasar, akan memaksa berpacunya
                adrenalin selama 4-5 jam perjalanan, maka kami menganjurkan memakai kacamata, masker dan lip
                gloss untuk menghindar hempasan angin dingin, percikan pasir dan debu, kami anjurkan menggunakan
                baju hangat yang tebal, bilamana bagi pemula ke puncak harus berjalan secara perlahan, setelah kita
                sampai di puncak Gunung Rinjani 3.726m. diperkirakan tiba pada pukul 06.00 pagi, anda akan dapat
                melihat pemandangan sangat menakjubkan, karena anda dapat melihat bagian dari pulau Lombok
                secara menyeluruh, bahkan anda dapat melihat Gunung Tambora di Sumbawa, Gunung Agung di Bali,
                dan juga beberapa pulau kecil yang di sebut Gili di sekitar pulau Lombok, setelah 15 atau 20 menit di
                puncak gunung Rinjani, photo bersama untuk kenang-kenangan serta kegiatan aktivitas lainnya, kita
                akan kembali turun ke tenda (Kawah Plawangan Sembalun) masakan guide dan porter kami sudah
                selesai di sajikan, setelah sarapan kira-kira pukul 09.00 pagi, kita melanjutkan perjalanan menuju danau
                Segara Anak - perjalanan turun ke danau Segara Aanak kurang lebih 3-4 jam (menurun).. Kita harus
                extra hati-hati menurun terlihat cukup curam, para pendaki harus lincah menuruni lereng cadas dengan
                kemiringan berkisar 25-30 derajat, banyak kerikil dan batu. Setelah tiba di Danau Segara Anak sekitar
                pukul 12:00 atau pukul 03 sore beristirahat di tepi Danau Segara Anak ketinggian 2000 mdpl, terlihat
                Gunung Baru yang cantik masih aktif, sambil menikmati makan siang sudah di siapkan dari masakan
                porter di sekitar danau Segara Anak, beberapa menit kemudian kita menuju pemandian Air panas alami.
                Mandi di kolam air panas alami dipercaya dapat menyembuhkan segala macam penyakit, terutama
                penyakit kulit, rematik dan lain sebagainya, sambil menikmati suasana keindahan Air Terjun Aik Kalak
                kita kembali ketepi danau Segara Anak, hidangan makan siang atau malam sudah siap di sekitar danau
                Segara Anak, sambil menikmati aktivitas memancing pada pukul 16.00 sore, Anda dapat menikmati
                keindahan matahari terbenam dan pemandangan sore hari yang cantik disekitarnya, aktifitas malam
                hari, buat api unggun, menikmati bintang, bernyanyi serta kegiatan lainnya, dinner telah tersedia dan
                bermalam ditenda tepi danau Segara Anak.
                <br/><br/><br/>
                HARI 4: Danau Segara Anak – Kawah Plawangan Senaru - Desa Senaru - Senggigi atau Mataram dan
                sekitarnya
                Setelah sarapan pada pukul 6 pagi, kita melanjutkan mendaki lagi ke Kawah Pelawangan Senaru
                ketinggian 2641 m dpl, membutuhkan waktu mendaki 3 jam, jalur ini berliku seperti jalur tikus, banyak
                kerikil, batu dan akar pohon cemara yg kuat, diperkirakan tiba di Batu Ceper pada pukul 9 pagi, mendaki
                lagi ke Plawangan Senaru membutuhkan waktu satu jam, setelah tib di Plawangan Senaru istirahat
                mengambil foto, turun menuju pada akhir pendakian tiba di desa Senaru membutuhkan waktu 6 jam, dan
                beristirahat, jika memungkinkan memeliki waktu untuk mengunjungi mengunjungi ke dua Air terjun
                Sindang Gile dan Air terjun Tiu Kelep di Senaru, untuk mengunjungi ke 2 Air Terjun tersebut sebaiknya
                bangun pada pukul 4 pagi dari danau segara Anak? dimana kendaraan yang kami sediakan sudah
                menunggu, dan selanjutnya perjalanan di perkirakan tiba di Mataram dan sekitarnya pada pukul 7
                Petang. (terakhir)
                <br/><br/><br/>
                <h6>Notes :</h6>
                Itinerary/rundown tour bersifat Kondisional/Menyesuaikan dengan kondisi di Lapangan, tanpa
                mengurangi destinasi & fasilitas tour yang sudah disebutkan.
                Tidak ada pengembalian Tiket Masuk Tempat wisata yang tidak terpakai oleh peserta',
                'date' => '2018-12-26', 'estimated_time' => '4 days 3 nights']
        );
        DB::table('trips')->insert(
            ['vendor_id' => 1, 'title' => 'Danau Toba', 'location' => 'Danau Toba, Medan, Sumatera Utara', 'price' => 3750000, 
                'description' => 'Danau Toba merupakan keajaiban alam menakjubkan di Pulau Sumatera. Sulit membayangkan ada
                tempat yang lebih indah untuk dikunjungi di Sumatera Utara selain danau ini. Suasana sejuk
                menyegarkan, hamparan air jernih membiru, dan pemandangan memesona pegunungan hijau adalah
                sebagian kecil saja dari imaji danau raksasa yang berada 900 meter di atas permukaan laut itu.
                <br /><br />
                Akibat letusan gunung api super (Gunung Toba) diperkirakan telah menyebabkan kematian massal dan
                kepunahan beberapa spesies mahluk hidup. Letusan Gunung Toba telah menyebabkan terjadinya
                perubahan cuaca bumi dan mulainya masuk ke zaman es sehingga mempengaruhi peradaban dunia.
                <br /><br />
                Bagi masyarakat sekitar Danau Toba memiliki sejarah magis yang dipercayai sebagai tempat tinggal
                Namborru (tujuh dewi nenek moyang Suku Batak). Apabila suku Batak akan melakukan upacara di
                sekitar danau mak mereka harus berdoa dan meminta izin Namborru terlebih dahulu.
                <br /><br />
                Pulau Samosir adalah pulau yang unik karena merupakan pulau vulkanik di tengah Danau Toba.
                Ketinggiannya 1.000 meter di atas permukaan laut. Meskipun telah menjadi tempat tujuan wisata sejak
                lama, Samosir merupakan keindahan alam yang belum terjamah. Di tengah Pulau Samosir ini masih ada
                lagi dua danau indah yang diberi nama Danau Sidihoni dan Danau Aek Natonang. Daerah sekitar Danau
                Toba memiliki hutan-hutan pinus yang tertata asri. Di pinggiran Danau Toba terdapat beberapa air terjun
                yang sangat mempesona. Di sekitar Danau Toba juga akan Anda dapati tempat pemandian air belarang.
                <br /><br />
                Di Pulau Samosir Anda juga dapat menemukan pegunungan berkabut, air terjun yang jernih untuk
                berenang, dan masyarakat peladang. Keramahan masyarakat Batak pun akan memikat Anda karena
                kemanapun Anda pergi maka dengan segera dapat menemukan teman baru.
                <br /><br />
                Di Kota Parapat yang merupakan semenanjung yang menonjol ke danau Anda dapat Anda nikmati
                pemandangan spektakuler Danau Toba. Parapat dihuni masyarakat Batak Toba dan Batak Simalungan
                yang dikenal memiliki sifat ceria dan mudah bergaul, terkenal pula senang mendendangkan lagu
                bertema cinta yang riang namun penuh perasaan.
                <br /><br />
                Nikmati Paket Wisata Danau Toba bersama Klana . Temukan indahnya pesona Danau Toba di pulau
                Sumatera, menikmati suasana sejuk menyegarkan, hamparan air jernih membiru, dan pemandangan
                memesona pegunungan hijau. Temukan pengalaman serta teman yang baru, nikmati indah dan
                eksonisnya wisata di Danau Toba dengan berbagai pesona wisata yang ada di wilayah Danau Toba
                Sumatera Utara Indonesia.
                <br /><br />
                Jika berkunjung ke Sumatera maka Anda wajib untuk menjelajahi Danau Toba, sebuah danau tekto-
                vulkanik dengan ukuran panjang 100 kilometer dan lebar 30 kilometer yang terletak di Provinsi Sumatera
                <br /><br />
                Utara, Indonesia. Danau ini merupakan danau terbesar di Indonesia dan Asia Tenggara. Di tengah
                danau terdapat sebuah pulau vulkanik bernama Pulau Samosir. Danau Toba akan memberikan pesona
                wisata yang tak akan terlupakan oleh Anda. Bagaimana, Anda tertarik mengikuti Paket Wisata Danau
                Toba? Bagi Anda yang tertarik dengan Paket Wisata Danau Toba, kami membuka Open Trip khusus
                untuk Anda.
                <br/><br/><br/>
                
                <h5>Biaya Sudah Termasuk</h5>
                <ul>
                <li>Hotel sekamar berdua atau bertiga</li>
                <li>Makan sesuai program + lunch @Taman Simalem Resort (halal food)</li>
                <li>Transportasi Full AC</li>
                <li>Driver merangkap Guide</li>
                <li>Kapal Ferry Parapat – Samosri PP</li>
                <li>Tiket masuk objek wisata</li>
                <li>Parkir kendaraan</li>
                <li>Air mineral sebotol/orang/hari</li>
                </ul>', 
                'belonging' => '
                <h5>Perlengkapan yang dibutuhkan:</h5>
                <ol>
                <li>Topi</li>
                <li>Kacamata Hitam</li>
                <li>Pakaian Ganti</li>
                <li>Sunblock</li>
                <li>Sepatu</li>
                <li>Snack</li>
                <li>Air Mineral</li>
                <li>Kamera (jika ada)</li>
                </ol>',
                'date' => '2018-12-26', 'estimated_time' => '5 days 4 nights']
        );
        DB::table('trips')->insert(
            ['vendor_id' => 2, 'title' => 'Desa Baliem Papua', 'location' => 'Desa Baliem Papua, Papua, Jayapura', 'price' => 7960000, 
                'description' => 'Lembah Baliem merupakan lembah di pegunungan Jayawijaya. Lembah Baliem berada di ketinggian
                1600 meter dari permukaan laut yang dikelilingi pegunungan dengan pemandangannya yang indah dan
                masih alami. Suhu bisa mencapai 10-15 derajat celcius pada waktu malam. Lembah ini dikenal juga
                sebagai grand baliem valley merupakan tempat tinggal suku Dani yang terletak di Desa Wosilimo, 27 km
                dari Wamena, Papua. Selain Suku Dani beberapa suku lainnya hidup bertetangga di lembah ini yakni
                Suku Yali dan suku Lani.
                <br /><br />
                Lembah adalah sekitar 80 km panjang sebesar 20 km dengan lebar dan terletak di ketinggian sekitar
                1,600-1,700 m, dengan populasi sekitar 100.000 jiwa.
                <br /><br />
                Penemuan Lembah Baliem dan kehadiran tak terduga dari populasi yang besar pertaniannya ditemukan
                oleh ekspedisi ketiga zoologi Richard Archbold untuk New Guinea pada tahun 1938. Pada tanggal 21
                Juni sebuah selatan penerbangan udara Reconnaissance dari Hollandia (sekarang Jayapura)
                menemukan apa ekspedisi disebut ‘Grand Valley’. Secara bertahap kemudian lembah sejak itu telah
                dibuka terbatas untuk pariwisata yaitu dengan adanya Festival Lembah Baliem.', 
                'date' => '2018-12-26', 'estimated_time' => '4 days 3 nights']
        );
        DB::table('trips')->insert(
            ['vendor_id' => 3, 'title' => 'Kampung Lolai', 'location' => 'Kampung Lolai, Makassar, Sulawesi Selatan', 'price' => 3750000, 
                'description' => 'Pesona wisata ke Tana Toraja tidak hanya berupa adat dan budaya yang unik. Namun ada juga sebuah
                wisata alam, berupa hamparan permadani awan yaitu "Lolai - Negeri di atas Awan".
                <br /><br />
                Berada di puncak Lolai dengan hamparan awan yang terlihat lebih rendah dari puncak seolah kita
                berada negeri di atas awan. Gugusan awan putih yang dihiasi pancaran sinar matahari di balik awan
                menimbulkan hamparan permadani awan sangat indah di mata.', 
                'date' => '2018-12-26', 'estimated_time' => '3 days 2 nights']
        );
        DB::table('trips')->insert(
            ['vendor_id' => 3, 'title' => 'Pulau Komodo', 'location' => 'Pulau Komodo, Nusa Tenggara Timur (NTT)', 'price' => 2750000, 
                'description' => 'Dalam labuan bajo trip anda akan kami bawa ke semua destinasi terbaik disekitaran kawasan taman
                nasional komodo selama 3 hari 2 malam trip ini berlangsung. Open trip pulau Komodo dimulai dari
                Labuan Bajo, Flores, Nusa Tenggara Timur. Open trip Labuan bajo akan membawa kamu bertemu
                Komodo di Pulau komodo secara Wildlife, berenang bersama pari Manta rays, berjalan di indahnya Pink
                beach, menikmati landscape seperti surga di pulau Padar, Gili laba, kelor dan banyak tempat.
                <br/><br/><br/>
                <h5>Biaya Sudah Termasuk dan Destinasi</h5>
                <ul>
                <li>Pulau Komodo/Pulau Rinca</li>
                <li>Pulau Kelor</li>
                <li>Pulau Padar</li>
                <li>Gili Laba/Gili Lawa Darat</li>
                <li>Manta Point</li>
                <li>Pulau Kanawa</li>
                <li>SEBAYUR</li>
                <li>Pulau Kalong</li>
                <li>Pink Beach</li>
                <li>Manta Point</li>
                </ul>', 
                'belonging' => '
                <h5>Perlengkapan yang dibutuhkan:</h5>
                <ol>
                <li>Topi</li>
                <li>Kacamata Hitam</li>
                <li>Pakaian Ganti</li>
                <li>Sunblock</li>
                <li>Sepatu</li>
                <li>Snack</li>
                <li>Air Mineral</li>
                <li>Kamera (jika ada)</li>
                </ol>',
                'itinerary' => '
                <h5>Day 1 (L,D)</h5>
                Pick-up hotel/airports menuju pelabuhan (Paling lambat jam 5 pagi)
                Pulau Kelor. Foto-foto di pulau dengan pasir putih.
                Pulau Rinca. Short treking kurang lebih 1 jam untuk menemui habitat Komodo.
                Pulau Padar. Treking menuju atas bukit sekitar 20 menit.
                Overnight on board dimana kapal akan bersandar dan tidur di dalam kapal.
                Note: Disarankan untuk tiba di Labuan Bajo 1 hari sebelumnya.
                <br/><br/><br/>
                <h5>Day 2 (B,L,D)</h5>
                Pulau Komodo. Short treking kurang lebih 1 jam untuk menemui habitat Komodo.
                Pink Beach. Bisa snorkeling di sekitar pantai atau sekedar releksasi.
                Manta Point. Berenang atau snorkeling bersama Ikan Pari yang tidak berbahaya
                Pulau Kanawa. Bisa treking ke atas bukit atau sekedar bermain di pantai
                Kembali ke Labuan Bajo dan check-in hotel untuk bersih-bersih.
                Kuliner malam seafood bakar Kampung Ujung
                <br/><br/><br/>
                <h5>Day 3 (B)</h5>
                Setelah sarapan check-out hotel untuk melanjuti city tour Labuan Bajo.
                Bukit Cinta. Bukit kecil bersavana dengan pemandangan laut di sekitarnya.
                Goa Batu Cermin. Masuk ke celah-celah goa hingga ke dalam goa yang dingin dan gelap.
                Transfer bandara dan tour selesai.
                Note: Disarankan untuk mengambil penerbangan dari Labuan Bajo di atas jam 12 siang.
                B= Breakfast, L=Lunch, D=Dinner
                <br/><br/><br/>
                <h6>Notes :</h6>
                <br/><br/>
                Itinerary/rundown tour bersifat Kondisional/Menyesuaikan dengan kondisi di Lapangan, tanpa
                mengurangi destinasi & fasilitas tour yang sudah disebutkan.
                Tidak ada pengembalian Tiket Masuk Tempat wisata yang tidak terpakai oleh peserta',
                'date' => '2018-12-26', 'estimated_time' => '3 days 2 nights']
        );
        DB::table('trips')->insert(
            ['vendor_id' => 2, 'title' => 'Tanah Lot', 'location' => 'Tanah Lot, Beraban, Bali', 'price' => 750000, 
                'description' => 'Tanah lot ini merupakan objek wisata yang sangat terkenal karena tanah lot merupakan objek yang
                mempunyai bongkahan tebing yang berada ditengah pantai yang di atasnya terdapat pura. Bongkahan
                tebing tersebut pada sore hari tidak dapat dinikmati secara dekat karena adanya gejala alam yang
                disebut pasang surut. Selain itu, gerakan gelombangnya yang unik dan struktur geologinya yang
                menarik untuk dikaji.',
                'date' => '2018-12-28', 'estimated_time' => '1 day']
        );
        DB::table('trips')->insert(
            ['vendor_id' => 3, 'title' => 'Taman Nasional Tanjung Puting', 'location' => 'Taman Nasional Tanjung Puting, Teluk Pulai, Kalimantan Tengah', 'price' => 1750000, 
                'description' => '
                Paket wisata Tanjung Puting ini merupakan paket land arrangement di mana tiket pesawat belum
                termasuk dalam harga. Paket Tour Tj. Puting ini berdurasi 3 hari 2 malam untuk mengunjungi lokasi
                rehabilitasi Orang Utan, dalam perjalanannya anda akan dibawa menikmati keasrian suasana Hutan
                Hujan Tropis . Penjemputan akan dilakukan oleh team kami di bandara Iskandar, Pangkalan Bun.
                Tanjung Puting memiliki beberapa tempat rehabilitasi Orang Utan seperti Tanjung Hrapan, Pondok
                Tanggui dan Camp Leakey. Dengan konsep wisata `ecotourism` wisatawan dapat melihat tingkah laku
                Orang utan yang setengah jinak ataupun yang masih betul-betul liar di ekosistem aslinya. Selain orang
                utan masih banyak hewan dan tumbuhan yang menjadi daya tarik di Taman Nasional ini. Pengalaman
                menyusuri sungai di hutan dan bermalam di tengah hutan akan membawa pengalaman baru yang
                takkan terlupakan.', 
                'date' => '2018-11-16', 'estimated_time' => '3 days 2 nights']
        );
        DB::table('trips')->insert(
            ['vendor_id' => 4, 'title' => 'Other Side of Kota Tua', 'location' => 'Kota Tua, DKI Jakarta', 'price' => 750000, 
                'description' => '
                Ready for another fun journey on two wheels? Our #OtherSideofKOTATUA is BACK! – Jakarta’s oldest and most colorful neighborhood! Join us for an URBAN ADVENTURE like no other.
                <br/><br/>
                Double the Fun with not only one, but two trip leaders! Fun Urban Networking + Sightseeing + Cultural experience - That\'s what we\'re all about.
                <br/><br/>
                Saturday, 25 August 2018, 6AM - Lunch
                Price: Rp. 750k*) per pax - incl. tour + water + snacks + lunch - Bring Your Own Bike
                *) Rp.150k extra for bike & helmet rental if you need it.', 
                'date' => '2018-11-16', 'estimated_time' => '1 day']
        );
    }
}

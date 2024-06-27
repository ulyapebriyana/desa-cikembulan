@extends('templates.master')

@section('content')
    <div class="container mx-auto mt-10 max-w-6xl my-10">
        <h2 class="text-blue-500 text-3xl font-bold">Berita Desa</h2>

        <div class="mt-8">
            <h3 class="text-2xl font-semibold">Peran Tunjangan Kepala Desa Dalam Pemberdayaan Desa-Desa di Banyumas</h3>
            <p class="text-gray-500">Selasa, 24 Juni 2024</p>
            <img src="{{ asset('images/tunjangan-kades.webp') }}" class="w-full h-auto mt-4 max-w-md" alt="Kepala Desa">
            <p class="mt-4 text-gray-700"><span class="font-bold">Desa Cikembulan - </span>Peningkatan kesejahteraan
                masyarakat desa di Kabupaten Banyumas semakin menjadi prioritas dalam beberapa tahun terakhir. Salah satu
                upaya yang dilakukan adalah dengan meningkatkan tunjangan bagi Kepala Desa. Tunjangan ini tidak hanya
                sebagai bentuk apresiasi atas tugas dan tanggung jawab mereka, tetapi juga menjadi alat penting dalam upaya
                pemberdayaan desa.</p>
            <button onclick="openModal('modal1')" class="inline-block mt-4 text-blue-500 hover:underline">Selengkapnya
                &rarr;</button>
        </div>

        <div class="mt-8">
            <h3 class="text-2xl font-semibold">12 Hewan Kurban Disembelih Saat Idul Adha 1445 di Desa Cikembulan</h3>
            <p class="text-gray-500">Senin, 17 Juni 2024</p>
            <img src="{{ asset('images/korban.webp') }}" class="w-full h-auto mt-4 max-w-md" alt="Hewan Kurban">
            <p class="mt-4 text-gray-700"><span class="font-bold">Desa Cikembulan - </span>Daging kurban di Dusun Ceden,
                Desa Cikembulan, Banyumas, Jawa Tengah, mencapai 5 ton hingga dapat dibagikan ke tujuh kabupaten lain.
                Ternyata warga di Cikembulan mendukung Rp 10 ribu per hari demi bisa ikut berkurban.</p>
            <button onclick="openModal('modal2')" class="inline-block mt-4 text-blue-500 hover:underline">Selengkapnya
                &rarr;</button>
        </div>

        <div class="mt-8">
            <h3 class="text-2xl font-semibold">Gotong Royong</h3>
            <p class="text-gray-500">Selasa, 4 Juni 2024</p>
            <img src="{{ asset('images/gotong-royong.jpg') }}" class="w-full h-auto mt-4 max-w-md" alt="Kepala Desa">
            <p class="mt-4 text-gray-700"><span class="font-bold">Desa Cikembulan - </span>Gotong royong yang dulu digagas
                pertama kali oleh pendiri bangsa, Ir. Soekarno kian hari semakin terkikis dengan budaya individual ditengah
                persaingan yang begitu ketat dalam mencapai tujuan tertentu, kenyataan inilah yang membuat nilai-nilai
                sosial ditatanan masyarakat yang sejak dulu sudah ditanamkan</p>
            <button onclick="openModal('modal3')" class="inline-block mt-4 text-blue-500 hover:underline">Selengkapnya
                &rarr;</button>
        </div>
    </div>

    <!-- Modals -->
    <div id="modal1" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden"
        onclick="closeModal('modal1')">
        <div class="relative top-20 mx-auto p-5 border w-3/4 shadow-lg rounded-md bg-white">
            <h3 class="text-2xl font-semibold">Peran Tunjangan Kepala Desa Dalam Pemberdayaan Desa-Desa di Banyumas</h3>
            <p class="text-gray-500">Selasa, 24 Juni 2024</p>
            <p class="mt-4 text-gray-700">Desa Cikembulan - Peningkatan kesejahteraan masyarakat desa di Kabupaten Banyumas
                semakin menjadi prioritas dalam beberapa tahun terakhir. Salah satu upaya yang dilakukan adalah dengan
                meningkatkan tunjangan bagi Kepala Desa. Tunjangan ini tidak hanya sebagai bentuk apresiasi atas tugas dan
                tanggung jawab mereka, tetapi juga menjadi alat penting dalam upaya pemberdayaan desa. Kepala Dinas
                Pemberdayaan Masyarakat dan Desa (DPMD) Kabupaten Banyumas, Bapak Ahmad Suryadi, menyatakan bahwa
                peningkatan tunjangan ini diharapkan dapat mendorong kinerja para Kepala Desa dalam menjalankan
                tugas-tugasnya. "Dengan tunjangan yang memadai, diharapkan para Kepala Desa dapat lebih fokus dan
                bersemangat dalam mengelola dan mengembangkan desa masing-masing," ujarnya. Peningkatan tunjangan ini juga
                diharapkan dapat membantu Kepala Desa dalam menginisiasi berbagai program pemberdayaan masyarakat. Misalnya,
                di Desa Cikembulan, Kepala Desa berhasil memanfaatkan tunjangan tambahan untuk mengembangkan program
                pelatihan keterampilan bagi pemuda desa. Program ini meliputi pelatihan pertanian modern, keterampilan
                teknis, dan wirausaha. Kepala Desa Cikembulan, Bapak Rudi Hartono, mengungkapkan bahwa tunjangan yang lebih
                baik memungkinkan dirinya untuk mengalokasikan dana pribadi bagi kegiatan sosial dan pembangunan desa.
                "Tunjangan ini memberikan saya keleluasaan untuk lebih banyak berinvestasi dalam program-program yang
                bermanfaat bagi masyarakat. Kami sudah melihat dampak positifnya, terutama dalam hal peningkatan
                keterampilan dan pendapatan warga," kata Rudi. Selain itu, tunjangan yang memadai juga berperan dalam
                meningkatkan kualitas layanan publik di desa. Di beberapa desa di Banyumas, Kepala Desa telah menggunakan
                tunjangan tambahan untuk memperbaiki infrastruktur desa seperti jalan, jembatan, dan fasilitas umum lainnya.
                Hal ini tentunya meningkatkan aksesibilitas dan kualitas hidup masyarakat desa. Bupati Banyumas, Ibu Siti
                Nurhayati, menegaskan bahwa pemberian tunjangan yang lebih baik bagi Kepala Desa adalah bagian dari komitmen
                pemerintah daerah untuk memperkuat pemerintahan desa. "Kami percaya bahwa dengan meningkatkan kesejahteraan
                Kepala Desa, kita dapat mendorong mereka untuk bekerja lebih baik dalam melayani masyarakat dan
                mengembangkan desa," jelasnya. Dengan adanya tunjangan yang lebih memadai, diharapkan Kepala Desa di seluruh
                Banyumas dapat terus berinovasi dan berkontribusi secara maksimal dalam upaya pemberdayaan desa. Masyarakat
                pun diharapkan dapat merasakan manfaat dari program-program yang digagas oleh Kepala Desa, sehingga
                kesejahteraan dan kualitas hidup di desa-desa Banyumas dapat terus meningkat.</p>
        </div>
    </div>

    <div id="modal2" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden"
        onclick="closeModal('modal2')">
        <div class="relative top-20 mx-auto p-5 border w-3/4 shadow-lg rounded-md bg-white">
            <h3 class="text-2xl font-semibold">12 Hewan Kurban Disembelih Saat Idul Adha 1445 di Desa Cikembulan</h3>
            <p class="text-gray-500">Senin, 17 Juni 2024</p>
            <p class="mt-4 text-gray-700">Desa Cikembulan - Perayaan Idul Adha 1445 H di Desa Cikembulan, Banyumas,
                berlangsung meriah dan penuh kebersamaan. Sebagai bagian dari tradisi tahunan, masyarakat Desa Cikembulan
                menyembelih hewan kurban sebagai simbol ketakwaan dan rasa syukur kepada Allah SWT. Tahun ini, sebanyak 12
                hewan kurban, yang terdiri dari 6 ekor sapi dan 6 ekor kambing, telah disembelih dan dibagikan kepada warga
                desa.

                Proses penyembelihan dilakukan di halaman Masjid Al-Hidayah pada pagi hari setelah pelaksanaan salat Idul
                Adha. Acara ini dipimpin oleh Bapak Rudi Hartono, Kepala Desa Cikembulan, serta dihadiri oleh tokoh
                masyarakat dan warga desa. Dalam sambutannya, Bapak Rudi mengapresiasi partisipasi dan gotong royong warga
                dalam menyukseskan perayaan ini. "Idul Adha adalah momen untuk berbagi dan mempererat tali silaturahmi. Saya
                bangga melihat semangat kebersamaan dan kepedulian warga Desa Cikembulan," ujarnya.

                Pembagian daging kurban dilakukan secara merata kepada warga yang membutuhkan, termasuk fakir miskin dan
                kaum dhuafa. Panitia kurban, yang terdiri dari para pemuda karang taruna, telah mengatur distribusi daging
                dengan baik agar semua warga dapat merasakan berkah Idul Adha. Salah satu panitia, Siti Nurhaliza,
                menyampaikan bahwa daging kurban dibagikan langsung ke rumah-rumah warga untuk memastikan penerimaannya
                tepat sasaran.

                Warga desa menyambut gembira pembagian daging kurban ini. Ibu Ani, salah satu penerima daging kurban,
                mengungkapkan rasa syukurnya. "Alhamdulillah, kami sekeluarga sangat senang menerima daging kurban ini.
                Terima kasih kepada semua yang berkurban dan panitia yang telah bekerja keras," katanya.

                Selain penyembelihan hewan kurban, berbagai kegiatan lain juga turut memeriahkan perayaan Idul Adha di Desa
                Cikembulan. Mulai dari takbir keliling pada malam hari menjelang Idul Adha, hingga lomba masak daging kurban
                yang diadakan di balai desa. Kegiatan ini tidak hanya menambah keceriaan, tetapi juga mempererat hubungan
                antarwarga.

                Perayaan Idul Adha tahun ini di Desa Cikembulan menjadi bukti nyata dari semangat gotong royong dan
                kebersamaan masyarakat. Dengan penyembelihan 12 hewan kurban, diharapkan berkah dan rahmat Allah SWT
                senantiasa menyertai seluruh warga Desa Cikembulan. Kepala Desa Rudi Hartono juga berharap bahwa semangat
                ini terus terjaga dan menjadi inspirasi untuk kegiatan sosial lainnya di masa mendatang</p>
        </div>
    </div>

    <div id="modal3" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden"
        onclick="closeModal('modal3')">
        <div class="relative top-20 mx-auto p-5 border w-3/4 shadow-lg rounded-md bg-white">
            <h3 class="text-2xl font-semibold">Gotong Royong</h3>
            <p class="text-gray-500">Selasa, 4 Juni 2024</p>
            <p class="mt-4 text-gray-700">Desa Cikembulan - Upaya meningkatkan kesejahteraan masyarakat desa di Kabupaten
                Banyumas semakin ditingkatkan melalui berbagai inisiatif, salah satunya adalah peningkatan tunjangan bagi
                Kepala Desa. Peningkatan ini tidak hanya sebagai bentuk apresiasi atas dedikasi dan tanggung jawab mereka,
                tetapi juga sebagai sarana untuk mendorong pemberdayaan desa secara keseluruhan.

                Kepala Dinas Pemberdayaan Masyarakat dan Desa (DPMD) Kabupaten Banyumas, Bapak Ahmad Suryadi, menyampaikan
                bahwa tunjangan yang lebih tinggi diharapkan dapat meningkatkan motivasi dan kinerja Kepala Desa. "Tunjangan
                yang memadai memungkinkan para Kepala Desa lebih fokus dan termotivasi dalam menjalankan tugas-tugas mereka,
                serta menginisiasi berbagai program pemberdayaan masyarakat," ujarnya.

                Salah satu contoh nyata adalah di Desa Cikembulan, di mana Kepala Desa Rudi Hartono telah memanfaatkan
                tunjangan tambahan untuk mengembangkan berbagai program pemberdayaan masyarakat. Program-program ini
                meliputi pelatihan keterampilan bagi pemuda desa, pengembangan pertanian modern, serta inisiatif
                kewirausahaan yang membantu meningkatkan pendapatan warga.

                Menurut Rudi Hartono, tunjangan yang lebih baik memberinya fleksibilitas untuk mengalokasikan dana pribadi
                dalam kegiatan sosial dan pembangunan desa. "Dengan tunjangan yang lebih tinggi, saya dapat lebih banyak
                berinvestasi dalam program-program yang bermanfaat bagi masyarakat. Kami telah melihat dampak positif,
                terutama dalam peningkatan keterampilan dan pendapatan warga," kata Rudi.

                Selain itu, tunjangan yang memadai juga berperan penting dalam meningkatkan kualitas layanan publik di desa.
                Di beberapa desa lain di Banyumas, Kepala Desa telah menggunakan tunjangan tambahan untuk memperbaiki
                infrastruktur desa seperti jalan, jembatan, dan fasilitas umum lainnya, yang pada akhirnya meningkatkan
                aksesibilitas dan kualitas hidup masyarakat desa.

                Bupati Banyumas, Ibu Siti Nurhayati, menegaskan bahwa peningkatan tunjangan bagi Kepala Desa adalah bagian
                dari komitmen pemerintah daerah untuk memperkuat pemerintahan desa. "Kami percaya bahwa dengan meningkatkan
                kesejahteraan Kepala Desa, kita dapat mendorong mereka untuk bekerja lebih baik dalam melayani masyarakat
                dan mengembangkan desa," jelasnya.

                Dengan tunjangan yang lebih memadai, diharapkan Kepala Desa di seluruh Banyumas dapat terus berinovasi dan
                berkontribusi maksimal dalam upaya pemberdayaan desa. Masyarakat pun diharapkan dapat merasakan manfaat dari
                program-program yang digagas oleh Kepala Desa, sehingga kesejahteraan dan kualitas hidup di desa-desa
                Banyumas dapat terus meningkat.</p>
        </div>
    </div>

    <!-- Repeat similar modals for other articles -->

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }
    </script>
@endsection

<?php $__env->startSection('content'); ?>
    <section class="mb-8">
        <img src="https://wissemar.semarangkota.go.id:443/cc-content/themes/theme-v1/asset/img/banner/banner-wis-semar.png" alt="Banner Wisata Kota Semarang" class="w-full rounded-lg shadow-md" />
    </section>

    <section class="mb-12 text-center max-w-4xl mx-auto">
        <p class="text-lg leading-relaxed">
            Selamat datang di Website Info Wisata Kota Semarang, portal online yang akan membawa Anda dalam petualangan tak terlupakan untuk menjelajahi pesona menarik di Wilayah Kota Semarang. Dengan penuh antusiasme, kami merancang platform ini untuk memberikan panduan komprehensif mengenai destinasi wisata yang penuh keindahan, sejarah, dan budaya.
        </p>
        <p class="text-lg leading-relaxed mt-4">
            Website Info Wisata Kota Semarang, kami berkomitmen untuk menjadi teman setia perjalanan Anda, memberikan informasi terkini dan berguna tentang tempat-tempat menarik yang layak dikunjungi. Mulai dari landmark terkenal, objek wisata alam, hingga kegiatan budaya lokal, kami menyajikan konten yang terperinci dan menarik untuk memandu perjalanan Anda.
        </p>
        <p class="text-lg leading-relaxed mt-4">
            Keunggulan utama dari portal ini melibatkan ulasan terkini dari para pelancong yang telah mengunjungi destinasi tertentu. Kami percaya bahwa pengalaman pribadi memberikan gambaran yang lebih baik daripada sekadar deskripsi formal. Oleh karena itu, kami mengundang para pengguna untuk berbagi kisah, foto, dan tips mereka, menciptakan komunitas yang bersemangat dalam eksplorasi.
        </p>
        <p class="text-lg leading-relaxed mt-4">
            Navigasi yang mudah dan tata letak yang bersahabat membuat Anda dapat dengan cepat menemukan informasi yang Anda butuhkan. Apakah Anda mencari restoran lokal terbaik, tempat-tempat belanja unik, atau hanya ingin mengetahui daya tarik wisata tersembunyi, kami menyediakan panduan yang lengkap dan terkini.
        </p>
        <p class="text-lg leading-relaxed mt-4">
            Kami berharap dengan adanya website Info Wisata Kota Semarang dapat menjadi sumber daya utama bagi para pelancong yang haus akan pengetahuan dan petualangan. Bersama-sama, mari kita jelajahi keindahan Kota Semarang dan buat kenangan tak terlupakan dalam setiap perjalanan Anda. Terima kasih telah bergabung dengan kami, dan selamat menikmati setiap langkah perjalanan Anda!
        </p>
    </section>

    <section class="mb-12 max-w-6xl mx-auto">
        <h2 class="text-2xl font-semibold mb-6">Kategori Wisata</h2>
        <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 gap-6">
            <?php
                $categories = [
                    ['name' => 'Hotel', 'img' => 'https://infomudik.semarangkota.go.id/uploads/master_jenis/20220427084441-2022-04-27master_jenis084440.png', 'url' => 'https://wissemar.semarangkota.go.id/wisata/category/1'],
                    ['name' => 'Restoran', 'img' => 'https://infomudik.semarangkota.go.id/uploads/master_jenis/20220427084509-2022-04-27master_jenis084508.png', 'url' => 'https://wissemar.semarangkota.go.id/wisata/category/2'],
                    ['name' => 'Objek Wisata', 'img' => 'https://infomudik.semarangkota.go.id/uploads/master_jenis/20220427090737-2022-04-27master_jenis090735.png', 'url' => 'https://wissemar.semarangkota.go.id/wisata/category/3'],
                    ['name' => 'Kuliner', 'img' => 'https://infomudik.semarangkota.go.id/uploads/master_jenis/20220427090900-2022-04-27master_jenis090857.png', 'url' => 'https://wissemar.semarangkota.go.id/wisata/category/4'],
                    ['name' => 'Tempat Nongkrong', 'img' => 'https://infomudik.semarangkota.go.id/uploads/master_jenis/20220427090925-2022-04-27master_jenis090917.png', 'url' => 'https://wissemar.semarangkota.go.id/wisata/category/5'],
                    ['name' => 'Oleh-Oleh', 'img' => 'https://infomudik.semarangkota.go.id/uploads/master_jenis/20220427091045-2022-04-27master_jenis091042.png', 'url' => 'https://wissemar.semarangkota.go.id/wisata/category/6'],
                    ['name' => 'Kota Lama', 'img' => 'https://infomudik.semarangkota.go.id/uploads/master_jenis/20220427091426-2022-04-27master_jenis091424.png', 'url' => 'https://wissemar.semarangkota.go.id/wisata/category/7'],
                    ['name' => 'Pramuwisata', 'img' => 'https://infomudik.semarangkota.go.id/uploads/master_jenis/20220427091442-2022-04-27master_jenis091439.png', 'url' => 'https://wissemar.semarangkota.go.id/wisata/category/8'],
                    ['name' => 'Karaoke', 'img' => 'https://infomudik.semarangkota.go.id/uploads/master_jenis/20230403142548-2023-04-03master_jenis142535.png', 'url' => 'https://wissemar.semarangkota.go.id/wisata/category/15'],
                    ['name' => 'SPA', 'img' => 'https://infomudik.semarangkota.go.id/uploads/master_jenis/20230403142636-2023-04-03master_jenis142629.png', 'url' => 'https://wissemar.semarangkota.go.id/wisata/category/16'],
                ];
            ?>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($category['url']); ?>" target="_blank" class="flex flex-col items-center space-y-2 p-3 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <img src="<?php echo e($category['img']); ?>" alt="<?php echo e($category['name']); ?>" class="h-16 w-16 object-contain" />
                    <span class="text-sm font-medium"><?php echo e($category['name']); ?></span>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <section class="max-w-6xl mx-auto">
        <h2 class="text-2xl font-semibold mb-6">Wisata Kota Semarang</h2>
        <?php
            $gallery = [
                ['img' => 'https://infomudik.semarangkota.go.id/uploads/data_lokasi/20220427133128-2022-04-27data_lokasi133124.jpg', 'alt' => 'PO HOTEL'],
                ['img' => 'https://infomudik.semarangkota.go.id/uploads/data_lokasi/20220427133615-2022-04-27data_lokasi133610.jpg', 'alt' => 'HOTEL SANTIKA PREMIERE'],
                ['img' => 'https://infomudik.semarangkota.go.id/uploads/data_lokasi/20220427140350-2022-04-27data_lokasi140347.jpg', 'alt' => 'HOTEL OAK TREE EMERALD'],
                ['img' => 'https://infomudik.semarangkota.go.id/uploads/data_lokasi/20220427133331-2022-04-27data_lokasi133328.jpg', 'alt' => 'HOTEL TENTREM SEMARANG'],
                ['img' => 'https://wissemar.semarangkota.go.id:443/cc-content/themes/theme-v1/asset/img/photos/no-image.png', 'alt' => 'No Image'],
                ['img' => 'https://wissemar.semarangkota.go.id:443/cc-content/themes/theme-v1/asset/img/photos/no-image.png', 'alt' => 'No Image'],
                ['img' => 'https://infomudik.semarangkota.go.id/uploads/data_lokasi/20220427133456-2022-04-27data_lokasi133449.jpg', 'alt' => 'PT.SUNINDO INDAH/ HOTEL NOVOTEL'],
                ['img' => 'https://infomudik.semarangkota.go.id/uploads/data_lokasi/20220427132247-2022-04-27data_lokasi132243.jpg', 'alt' => 'GRAND CANDI HOTEL'],
                ['img' => 'https://infomudik.semarangkota.go.id/uploads/data_lokasi/20220427133805-2022-04-27data_lokasi133802.jpg', 'alt' => 'MG SUITES HOTEL AND APARTEMENT'],
                ['img' => 'https://infomudik.semarangkota.go.id/uploads/data_lokasi/20220427132110-2022-04-27data_lokasi132107.jpeg', 'alt' => 'GUMAYA HOTEL TOWER'],
                ['img' => 'https://infomudik.semarangkota.go.id/uploads/data_lokasi/20220427140229-2022-04-27data_lokasi140225.jpeg', 'alt' => 'HOLIDAY INN EXPRESS SEMARANG'],
                ['img' => 'https://infomudik.semarangkota.go.id/uploads/data_lokasi/20220427132439-2022-04-27data_lokasi132433.jpg', 'alt' => 'PT CIPUTRA SEMARANG'],
            ];
        ?>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
            <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-lg shadow p-2">
                    <img src="<?php echo e($item['img']); ?>" alt="<?php echo e($item['alt']); ?>" class="w-full h-48 object-cover rounded" />
                    <p class="mt-2 text-center text-sm font-medium"><?php echo e($item['alt']); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /project/sandbox/user-workspace/web-magang/resources/views/home.blade.php ENDPATH**/ ?>
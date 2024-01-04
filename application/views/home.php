<div id="id">
    <section class="bg-[url('<?= base_url() ?>public/images/banner/2.png')] bg-cover bg-no-repeat bg-center overflow-hidden xl:pb-[130px]">
        <div class="container relative">
            <div class="xl:max-w-[570px] xl:pt-[129px] lg:py-28 md:py-20 py-14 lg:space-y-10 space-y-6">
                <div id="headline" class="lg:text-[30px] lg:leading-[40.4px] md:text-6xl md:leading-[72px] text-black font-bold text-5xl leading-[62px]">
                    <?= $data["data"]["attributes"]["hero"]["Headline"] ?>
                </div>
                <div class="plain-text text-gray leading-[30px] border-l-2 border-primary pl-4">
                    <?= $data["data"]["attributes"]["hero"]["Descriptions"] ?>
                </div>
                <div class="md:flex md:space-x-4 space-y-3 md:space-y-0 pt-5">
                    <a href="https://www.youtube.com/watch?v=mbhXFTve9qo" target="_blank" class="btn btn-primary">Video Profile</a>
                    <a href="http://ppdb.smkpasundansubang.sch.id/" target="_blank" class="btn btn-black">PPDB Sekolah</a>
                </div>
            </div>
            <div class="imge-box hidden xl:block absolute right-[-60px] top-1/2 -translate-y-1/2 mt-[40px]">
                <?php foreach ($data["data"]["attributes"]["hero"]["Images"]["data"] as $key => $value) : ?>
                    <img src="<?= $base_url . $value["attributes"]["formats"]["small"]["url"] ?>" alt="" />
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- about area start -->
    <div class="about-area section-padding">
        <div class="container">
            <div class="grid grid-cols-1 gap-10">
               
                <div>
                    <div class="mini-title text-center">Tentang Sekolah</div>
                    <h4 class="column-title text-center">
                        SMKS
                        <span class="shape-bg">
                            Pasundan</span>
                        Subang
                    </h4>
                    <ul class="list-item space-y-6 pt-8">
                        
                        <li class="flex">
                            
                            <div class="flex-1">
                                <h4 class="text-xl mb-1">Visi</h4>
                                <div>
                                    <?= $data["data"]["attributes"]["about"]["Visi"] ?>
                                </div>
                            </div>
                        </li>

                        <li class="flex">
                            
                            <div class="flex-1">
                                <h4 class="text-xl mb-1">Misi</h4>
                                <div>
                                    <?= $data["data"]["attributes"]["about"]["Misi"] ?>
                                </div>
                            </div>
                        </li>

                    </ul>
                    <div class="pt-8">
                        <a href="<?php echo base_url(); ?>p/sejarah-sekolah" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradns section start -->
    <div class="brands-area section-padding-bottom">
        <div class="container">
            <div class="text-center text-black text-2xl font-medium mb-[50px]">
                Kerja Sama Dunia Industri
            </div>

            <ul class="flex flex-wrap items-center lg:justify-between justify-center">
                <!-- {{#each data.data.attributes.brandsection}}
                    <li class="mb-5 last:mb-0 mr-5 last:mr-0 transition duration-150 grayscale-[80] hover:grayscale-0">
                        <a href="#" class="block">
                            <img src="{{@root.baseUrl.base_strapi}}{{this.Images.data.attributes.formats.thumbnail.url}}" alt="" /></a>
                    </li>
                {{/each}} -->
                <?php foreach ($data["data"]["attributes"]['brandsection'] as $key => $value) : ?>
                    <li class="mb-5 last:mb-0 mr-5 last:mr-0 transition duration-150 grayscale-[80] hover:grayscale-0">
                        <a href="#" class="block">
                            <img src="<?= $base_url . $value['Images']['data']["attributes"]["formats"]["thumbnail"]["url"] ?>" alt="" style="height: 100px; margin: 10px" />
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <!-- Feture section start -->
    <div class="feature-area bg-[url('../images/all-img/section-bg-1.png')] bg-cover bg-no-repeat bg-center section-padding">
        <div class="container">
            <div class="text-center">
                <div class="mini-title">Kenapa Pilih Pasundan</div>
                <div class="column-title">
                    Program 
                    <span class="shape-bg">Unggulan</span>
                    Sekolah
                </div>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] pt-10">
                <?php foreach ($data["data"]["attributes"]["CoreFeatures"] as $value) : ?>
                    <div class="bg-white shadow-box rounded-[8px] p-10 group hover:bg-primary transition duration-150 hover:-translate-y-1">
                        <div class="h-[72px] w-[72px] rounded-full flex flex-col items-center justify-center text-secondary bg-green-paste mb-8 text-5xl group-hover:bg-black group-hover:bg-opacity-[0.1] group-hover:text-white transition duration-150">
                            <iconify-icon icon="<?= $value["Icon"] ?>"></iconify-icon>
                        </div>
                        <h4 class="lg:text-2xl text-[22px] leading-[30px] mb-4 transition duration-150 group-hover:text-white"><?= $value["Title"] ?></h4>
                        <div class="transition duration-150 group-hover:text-white"><?= $value["Descriptions"] ?></div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <!-- majors section start -->
    <div class="section-padding">
        <div class="container">
            <div class="text-center">
                <div class="mini-title">Kompetensi Keahlian Unggulan</div>
                <div class="column-title">
                    Pilih Kompetensi Keahlain
                    <span class="shape-bg">Terbaik</span>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] pt-10">
                <?php foreach ($data["data"]["attributes"]["majorshowcase"][0]["majors"]["data"] as $majors) : ?>
                    <a class=" bg-white shadow-box2 rounded-[8px] transition duration-100 hover:shadow-sm" href="<?php echo base_url() ?>jurusan/<?= $majors["attributes"]["Slug"] ?>">
                            <div class="course-thumb h-[248px] rounded-t-[8px]  relative">
                                <img src="<?= $base_url . $majors["attributes"]["Images"]["data"]["attributes"]["url"] ?>" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
                               
                            </div>
                            <div class="course-content p-8">
                                <h4 class=" text-xl mb-3 font-bold"><?= $majors["attributes"]["Name"] ?></h4>
                                <div class="flex justify-between  flex-wrap space-y-1 xl:space-y-0">
                                    <span class=" flex items-center space-x-2 ">
                                        <img src="<?php echo base_url() ?>public/images/svg/star.svg" alt="">
                                        <span><?= $majors["attributes"]["Rate"] ?></span>
                                    </span>
                                </div>
                            </div>
                        </a>
                <?php endforeach; ?>
            </div>
            <div class="text-center lg:pt-16 pt-10">
                <a href="/jurusan" class="btn btn-primary">Semua Jurusan</a>
            </div>
        </div>
    </div>
    <!-- cta start -->
    <div class="bg-[url('../images/all-img/section-bg-3.png')] bg-cover bg-no-repeat bg-center py-20">
        <div class="container">
            <div class="lg:flex lg:items-center lg:space-x-[70px]">
                <div class="flex-none">
                    <div class="flex items-center space-x-8 text-white max-w-[327px] mx-auto lg:mb-0 md:mb-10 mb-5">
                        <div class="flex-none">
                            <img src="/images/svg/big-mail.svg" alt="" />
                        </div>
                        <div class="flex-1 lg:text-[34px] lg:leading-[51px] md:text-3xl text-2xl font-bold">
                            Mau tahu tentang kami
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="md:flex items-center relative md:space-x-6 md:space-y-0 space-y-4">
                        <div class="flex-1 relative">
                            <span class="absolute left-0 top-1/2 -translate-y-1/2">
                                <img src="/images/icon/mail-white.svg" alt="" />
                            </span>
                            <input type="text" placeholder="Masukan Email anda" class="border-b border-t-0 border-l-0 border-r-0 border-[#B2E2DF] ring-0 focus:ring-0 bg-transparent text-white placeholder:text-[#B2E2DF] focus:outline-0 focus:border-[#B2E2DF] transition pl-8 text-lg" />
                        </div>
                        <div class="flex-none">
                            <button class="btn bg-white text-secondary md:w-auto w-full">Dapatkan Brosur</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- topics start -->
    <div class="section-padding">
        <div class="container">
            <div class="text-center">
                <div class="mini-title">Kembangkan Dirimu dengan</div>
                <div class="column-title">
                    Ekstra
                    <span class="shape-bg">kurikuler</span>
                    Terbaik
                </div>
            </div>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-[30px] pt-10">
                <?php foreach ($data["data"]["attributes"]["extracurricular"] as $extracurricular) : ?>
                    <a class="rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group <?= $extracurricular["BgColor"] ?> text-center px-6 py-[65px] hover:-translate-y-2" href="#">
                        <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-green-paste">
                            <img src="<?= $base_url . $extracurricular["Image"]["data"]["attributes"]["url"]; ?>" alt="" class="w-[32px] h-[32px] object-cover" />
                        </div>
                        <div class="course-content">
                            <h4 class="text-2xl mb-2 font-bold"><?= $extracurricular["Name"] ?></h4>
                            <p>Eskul Pilihan</p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- start testimonails -->
    <!-- testtimonal start -->
    <div class="section-padding bg-[url('../images/all-img/section-bg-16.png')] bg-cover bg-no-repeat lg:mt-[136px]">
        <div class="container lg:-mt-[250px] xl:pb-[136px] lg:pb-20 pb-10">
            <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] bg-white shadow-box14 rounded-md divide-x-2 divide-[#E4EEED] py-20">
                <?php foreach ($data["data"]["attributes"]["Counters"] as $counters) : ?>
                    <div class="text-center">
                        <h2 class="text-secondary font-bold">
                            <span class="counter"><?= $counters["Total"] ?></span>
                        </h2>
                        <span class="block text-black font-semibold"><?= $counters["Name"] ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- testimonial -->
        <div class="container">
            <div class="grid lg:grid-cols-2 grid-cols-1 xl:gap-[60px] gap-6">
                <div>
                    <div class="slider-nav">
                        <?php foreach ($data["data"]["attributes"]["testimoni"] as $testimoni) : ?>
                            <div class="single-item">
                                <div class="xl:h-[593px] lg:h-[400px] h-[150px] lg:w-full w-[130px] rounded-md">
                                    <img src="<?= $base_url . $testimoni["Image"]["data"]["attributes"]["formats"]["small"]["url"] ?>" alt="" class="object-cover w-full h-full rounded-md" />
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div>
                    <div class="mini-title">Testimonial</div>
                    <h4 class="column-title">
                        Testimoni Alumni SMK Pasundan
                        <span class="shape-bg text-black">
                            Subang</span>
                    </h4>
                    <div class="slider-for mt-10">
                        <?php foreach ($data["data"]["attributes"]["testimoni"] as $testimoni) : ?>
                            <div class="single-item">
                                <div>
                                    <div class="mb-8">
                                        <?= $testimoni["Descriptions"] ?>
                                    </div>
                                    <div>
                                        <span class="block font-semibold text-black mb-1"><?= $testimoni["Name"] ?></span>
                                        <span class="block font-semibold text-primary">
                                            <?= $testimoni["Profession"] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="space-x-5 flex lg:mt-10 mt-8">
                        <button class="lg:h-[64px] lg:w-[64px] h-12 w-12 flex flex-col items-center justify-center rounded-md bg-white hover:bg-primary hover:text-white shadow-box slickprev text-3xl text-primary">
                            <iconify-icon icon="heroicons:arrow-left-20-solid"></iconify-icon>
                        </button>
                        <button class="lg:h-[64px] lg:w-[64px] h-12 w-12 flex flex-col items-center justify-center rounded-md bg-white hover:bg-primary hover:text-white shadow-box slickprev text-3xl text-primary">
                            <iconify-icon icon="heroicons:arrow-right-20-solid"></iconify-icon>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team start -->
    <div class="section-padding">
        <div class="container">
            <div class="text-center">
                <div class="mini-title">Manajemen Sekolah</div>
                <div class="column-title">
                    Guru
                    <span class="shape-bg">Berpengalaman</span>
                </div>
            </div>
            <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] pt-10">
                <?php foreach ($data["data"]["attributes"]["teachershowcase"]["teachers"]["data"] as $teachers) : ?>
                    <div class="bg-white shadow-box3 rounded-[8px] transition-all duration-100 pt-10 pb-[28px] px-6 text-center hover:shadow-box4 border-t-4 border-transparent hover:border-secondary">
                        <div class="w-[170px] h-[170px] rounded-full relative mx-auto mb-8">
                            <img src="<?= $base_url . $teachers["attributes"]["Images"]["data"]["attributes"]["url"] ?>" alt="" class="w-full h-full object-cover rounded-full" />
                        </div>
                        <div class="course-content">
                            <h4 class="lg:text-1xl text-1xl mb-1 font-bold"><?= $teachers["attributes"]["Name"] ?></h4>
                            <div><?= $teachers["attributes"]["Position"] ?></div>
                            <ul class="space-x-4 flex justify-center pt-6">
                                <li>
                                    <a href="{{this.attributes.SosialMedia.FacebookUrl}}" class="h-10 w-10 rounded bg-red-paste text-primary flex flex-col justify-center items-center text-2xl transition hover:bg-primary hover:text-white">
                                        <iconify-icon icon="bxl:facebook"></iconify-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{this.attributes.SosialMedia.TwitterUrl}}" class="h-10 w-10 rounded bg-green-paste text-secondary flex flex-col justify-center items-center text-2xl transition hover:bg-secondary hover:text-white">
                                        <iconify-icon icon="bxl:twitter"></iconify-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="h-10 w-10 rounded bg-[#EEE8FF] text-#8861DB flex flex-col justify-center items-center text-2xl transition hover:bg-[#8861DB] hover:text-white">
                                        <iconify-icon icon="bxl:linkedin"></iconify-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="section-padding bg-[url('../images/all-img/section-bg-5.png')] bg-cover bg-no-repeat bg-center">
        <div class="container">
            <div class="lg:flex justify-between items-center">
                <div class="mb-3">
                    <div class="mini-title">Update</div>
                    <div class="column-title">
                        <span class="shape-bg">Artikel</span>
                        Terbaru
                    </div>
                </div>
                <div class="mb-3">
                    <a href="<?php echo base_url() ?>artikel" class="btn btn-primary">Baca Artikel Lainnya</a>
                </div>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] pt-7">
                <?php foreach ($data["data"]["attributes"]["blog"]["articles"]["data"] as $blog) : ?>
                    <div class="bg-white shadow-box5 rounded-[8px] transition duration-100 hover:shadow-box3">
                       <div class="course-thumb h-[260px] rounded-t-[8px] relative">
                            <?php $blogPic = isset($blog["attributes"]["Image"]["data"]["attributes"]["url"]) ? $base_url . $blog["attributes"]["Image"]["data"]["attributes"]["url"] : "https://via.placeholder.com/500" ?>
                            <img src="<?php echo $blogPic ?>" alt="" class="w-full h-full object-cover rounded-t-[8px]" />
                            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Education</span>
                            </div>
                        <div class="course-content p-8">
                            <div class="flex lg:space-x-10 space-x-5 mb-5">
                                <a class="flex items-center space-x-2" href="#">
                                    <img src="<?php echo base_url() ?>/public/images/svg/admin.svg" alt="" />
                                    <span>Suharta</span>
                                </a>
                                <a class="flex items-center space-x-2" href="$">
                                    <img src="<?php echo base_url() ?>/public/images/svg/calender.svg" alt="" />
                                    <span>
                                        <?= date("d F Y", strtotime($blog["attributes"]["publishedAt"])) ?>
                                    </span>
                                </a>
                            </div>
                            <h4 class="text-xl mb-5 font-bold">
                                <a href="<?php echo base_url() ?>artikel/<?= $blog["attributes"]["Slug"] ?>" class="hover:text-primary transition duration-150">
                                    <?= $blog["attributes"]["Title"] ?>
                                </a>
                            </h4>
                            <a href="<?php echo base_url() ?>artikel/<?= $blog["attributes"]["Slug"] ?>" class="text-black font-semibold hover:underline transition duration-150">Read More</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
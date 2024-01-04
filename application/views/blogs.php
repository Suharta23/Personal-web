<div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
    <div class="container text-center">
        <h2>Artikel</h2>
        <nav>
            <ol class="flex items-center justify-center space-x-3">
                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                <li class="breadcrumb-item">-</li>
                <li class="text-primary">Artikel</li>
            </ol>
        </nav>
    </div>
</div>
<div class="nav-tab-wrapper tabs  section-padding">
    <div class="container">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="lg:col-span-8 col-span-12">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-[30px]">
                    <?php foreach ($data["data"]["attributes"]["results"] as $articles) : ?>
                        <div class=" bg-white shadow-box12 rounded-[8px] transition duration-100 hover:shadow-box13">
                            <div class="course-thumb h-[260px] rounded-t-[8px]  relative">
                                <img src="<?= $base_url . $articles["Image"]["formats"]["thumbnail"]["url"] ?>" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
                                <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">
                                    <?= $articles["type"]["Name"] ?? null ?>
                                </span>
                            </div>
                            <div class="course-content p-8">
                                <div class="flex   lg:space-x-10 space-x-5 mb-5">
                                    <a class=" flex items-center space-x-2" href="<?php echo base_url() ?>artikel/detail">
                                        <img src="<?php echo base_url() ?>public/images/svg/admin.svg" alt="">
                                        <span><?= $articles["createdBy"]["firstname"] ?></span>
                                    </a>
                                    <a class=" flex items-center space-x-2" href="<?php echo base_url() ?>artikel/detail">
                                        <img src="<?php echo base_url() ?>public/images/svg/calender.svg" alt="">
                                        <span><?= date("d F Y", strtotime($articles["publishedAt"])) ?></span>
                                    </a>
                                </div>
                                <h4 class=" text-xl mb-5 font-bold">
                                    <a href="<?php echo base_url() ?>artikel/<?= $articles["Slug"] ?>" class=" hover:text-primary transition duration-150">
                                        <?= $articles["Title"] ?>
                                    </a>
                                </h4>
                                <a href="<?php echo base_url() ?>artikel/<?= $articles["Slug"] ?>" class=" text-black font-semibold hover:underline transition duration-150">Read More</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php
                    if (empty($data["data"]["attributes"]["results"])) : ?>
                        echo "<div class='text-center'>Artikel Tidak Ditemukan</div>";

                    <?php endif; ?>
                </div>
                <div class="pagination mt-14">
                    <!-- call pagination -->
                    <?php $this->load->view('layouts/pagination') ?>
                </div>
            </div>
            <div class="lg:col-span-4 col-span-12">
                <div class="sidebarWrapper space-y-[30px]">
                    <div class="wdiget widget_search">
                        <form action='' method="">
                            <div class="bg-[#F8F8F8] flex  rounded-md shadow-e1 items-center  py-[4px] pl-3  relative">
                                <div class="flex-1">
                                    <input type="text" name="keyword" id="keyword" placeholder="Search keyword..." class="border-none focus:ring-0 bg-transparent">
                                </div>
                                <div class="flex-none">
                                    <button class="btn btn-primary" type="submit" onclick="search()">
                                        <img src="/images/icon/search.svg" alt="">
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="wdiget widget_catagory">

                        <ul class=" list-item space-y-4">
                            <?php foreach ($types['data'] as $type) : ?>
                                <li class=" block">
                                    <a href="<?php echo base_url() ?>artikel?type=<?= $type["attributes"]["slug"] ?>&page=1" class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all
                        duration-150">
                                        <span>
                                            <?= $type["attributes"]["Name"] ?>
                                        </span>
                                        <span class=" text-2xl">
                                            <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="wdiget widget_catagory">
                        <h4 class="widget-title">Categories</h4>

                        <ul class=" list-item space-y-4">
                            <?php foreach ($categories['data'] as $cat) : ?>
                                <li class=" block">
                                    <a href="<?php echo base_url() ?>artikel?category=<?= $cat["attributes"]["Slug"] ?>&page=1" class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all
                        duration-150">
                                        <span>
                                            <?= $cat["attributes"]["Name"] ?>
                                        </span>
                                        <span class=" text-2xl">
                                            <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="wdiget widget-recent-post">
                        <h4 class=" widget-title">Postingan Terbaru</h4>
                        <ul class="list">
                            <?php foreach ($latesPost['data']['attributes']['results'] as $lates) : ?>
                                <li class=" flex space-x-4 border-[#ECECEC] pb-6 mb-6 last:pb-0 last:mb-0 last:border-0 border-b">
                                    <div class="flex-none ">
                                        <div class="h-20 w-20  rounded">
                                            <img src="
                                            <?= $base_url . $lates["Image"]["formats"]["thumbnail"]["url"] ?>
                                            " alt="" class=" w-full h-full object-cover rounded">
                                        </div>
                                    </div>
                                    <div class="flex-1 ">
                                        <div class="mb-1 font-semibold text-black">
                                            <?= $lates["Title"] ?>
                                        </div>
                                        <a class=" text-secondary font-semibold" href="<?php echo base_url() ?>artikel/<?= $lates["Slug"] ?>">Read More</a>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="wdiget">
                        <h4 class="widget-title">Instagram Feed</h4>
                        <div class="grid grid-cols-3 gap-4">

                            <div>
                                <a href="#" class="group relative block h-20 w-full rounded">
                                    <img src="/images/all-img/ins-1.png" alt="" class="block h-full w-full rounded object-cover" />
                                    <div class="absolute left-0 top-0 flex h-full w-full flex-col items-center justify-center rounded bg-black bg-opacity-40
                                                    text-3xl text-white opacity-0 transition-all duration-150 group-hover:opacity-100">
                                        <span class="scale-0 transition-all duration-150 group-hover:scale-100">
                                            <iconify-icon icon="akar-icons:instagram-fill"></iconify-icon>
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div>
                                <a href="#" class="group relative block h-20 w-full rounded">
                                    <img src="/images/all-img/ins-2.png" alt="" class="block h-full w-full rounded object-cover" />
                                    <div class="absolute left-0 top-0 flex h-full w-full flex-col items-center justify-center rounded bg-black bg-opacity-40
                                                    text-3xl text-white opacity-0 transition-all duration-150 group-hover:opacity-100">
                                        <span class="scale-0 transition-all duration-150 group-hover:scale-100">
                                            <iconify-icon icon="akar-icons:instagram-fill"></iconify-icon>
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div>
                                <a href="#" class="group relative block h-20 w-full rounded">
                                    <img src="/images/all-img/ins-3.png" alt="" class="block h-full w-full rounded object-cover" />
                                    <div class="absolute left-0 top-0 flex h-full w-full flex-col items-center justify-center rounded bg-black bg-opacity-40
                                                    text-3xl text-white opacity-0 transition-all duration-150 group-hover:opacity-100">
                                        <span class="scale-0 transition-all duration-150 group-hover:scale-100">
                                            <iconify-icon icon="akar-icons:instagram-fill"></iconify-icon>
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div>
                                <a href="#" class="group relative block h-20 w-full rounded">
                                    <img src="/images/all-img/ins-4.png" alt="" class="block h-full w-full rounded object-cover" />
                                    <div class="absolute left-0 top-0 flex h-full w-full flex-col items-center justify-center rounded bg-black bg-opacity-40
                                                    text-3xl text-white opacity-0 transition-all duration-150 group-hover:opacity-100">
                                        <span class="scale-0 transition-all duration-150 group-hover:scale-100">
                                            <iconify-icon icon="akar-icons:instagram-fill"></iconify-icon>
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div>
                                <a href="#" class="group relative block h-20 w-full rounded">
                                    <img src="/images/all-img/ins-5.png" alt="" class="block h-full w-full rounded object-cover" />
                                    <div class="absolute left-0 top-0 flex h-full w-full flex-col items-center justify-center rounded bg-black bg-opacity-40
                                                    text-3xl text-white opacity-0 transition-all duration-150 group-hover:opacity-100">
                                        <span class="scale-0 transition-all duration-150 group-hover:scale-100">
                                            <iconify-icon icon="akar-icons:instagram-fill"></iconify-icon>
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div>
                                <a href="#" class="group relative block h-20 w-full rounded">
                                    <img src="/images/all-img/ins-6.png" alt="" class="block h-full w-full rounded object-cover" />
                                    <div class="absolute left-0 top-0 flex h-full w-full flex-col items-center justify-center rounded bg-black bg-opacity-40
                                                    text-3xl text-white opacity-0 transition-all duration-150 group-hover:opacity-100">
                                        <span class="scale-0 transition-all duration-150 group-hover:scale-100">
                                            <iconify-icon icon="akar-icons:instagram-fill"></iconify-icon>
                                        </span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- create a function search -->
<script>
    function search() {
        let keyword = document.getElementById("keyword").value;
        window.location.href = "/artikel/search?keyword=" + keyword + "&page=1";
    }
</script>
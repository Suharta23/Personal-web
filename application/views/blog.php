<div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
    <div class="container text-center">
        <h2>Blog Details</h2>
        <nav>
            <ol class="flex items-center justify-center space-x-3">
                <li class="breadcrumb-item"><a href="index.html">Pages </a></li>
                <li class="breadcrumb-item">-</li>
                <li class="text-primary">Blog Details</li>
            </ol>
        </nav>
    </div>
</div>
<div class="nav-tab-wrapper tabs  section-padding">
    <div class="container">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="lg:col-span-8 col-span-12">
                <div class="bg-[#F8F8F8] rounded-md">
                    <img src="<?= $base_url . $data["data"]["attributes"]["results"][0]["Image"]["url"] ?>" alt="" class=" rounded-t-md mb-10">
                    <div class="px-10 pb-10">
                        <div class="flex  flex-wrap  xl:space-x-10 space-x-5 mt-6 mb-6">
                            <a class=" flex items-center space-x-2" href="#">
                                <img src="/images/svg/user3.svg" alt="">
                                <span>
                                    <?= $data["data"]["attributes"]["results"][0]["createdBy"]["firstname"] ?>
                                </span>
                            </a>
                            <a class=" flex items-center space-x-2" href="#">
                                <img src="/images/svg/calender.svg" alt="">
                                <span>
                                    <?= date("d F Y", strtotime($data["data"]["attributes"]["results"][0]["publishedAt"])) ?>
                                </span>
                            </a>
                            <a class=" flex items-center space-x-2" href="#">
                                <img src="/images/svg/comments.svg" alt="">
                                <span>02 Comments</span>
                            </a>
                        </div>
                        <h3>
                            <?= $data["data"]["attributes"]["results"][0]["Title"] ?>
                        </h3>
                        <!-- content -->
                        <div class="text-justify">
                            <?= $data["data"]["attributes"]["results"][0]["Content"] ?>
                        </div>
                        <!-- end -->
                        <div class="grid xl:grid-cols-2 grid-cols-1  gap-5 md:mt-14 mt-8 ">
                            <ul class="flex space-x-3 xl:justify-start items-center  ">
                                <li class=" text-black font-semibold">Share On:</li>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{@root.baseUrl.base_front}}artikel{{@root.path}}{{this.Slug}}" class="flex h-8 w-8">
                                        <img src="<?php echo base_url() ?>public/images/icon/fb.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#" class="flex h-8 w-8">
                                        <img src="<?php echo base_url() ?>public/images/icon/tw.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="#" class="flex h-8 w-8">
                                        <img src="<?php echo base_url() ?>public/images/icon/ins.svg" alt="">
                                    </a>
                                </li>
                            </ul>
                            <ul class="flex items-center xl:justify-end space-x-3 ">
                                <li class=" text-black font-semibold">Category:</li>
                                <?php foreach ($data["data"]["attributes"]["results"][0]["categories"] as $cat) : ?>
                                    <li>
                                        <a href="#" class="text-primary hover:text-primary transition duration-150">
                                            <?= $cat["Name"] ?>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
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
                                        <img src="<?php echo base_url() ?>public/images/icon/search.svg" alt="">
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="wdiget widget_catagory">
                        <h4 class="widget-title">Categories</h4>
                        <ul class=" list-item space-y-4">
                            <!-- {{#each categories.data as |cat|}} -->
                            <?php foreach ($categories['data'] as $cat) : ?>
                                <li class=" block">
                                    <a href="<?php echo base_url() ?>artikel?category=<?= $cat["attributes"]["Slug"] ?>?page=1" class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all
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
                                        <a class=" text-secondary font-semibold" href="<?php echo base_url() ?>artikel/{{this.Slug}}">Read More</a>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- <div class="wdiget">
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
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- create a function search -->
<script>
    function search() {
        let keyword = document.getElementById("keyword").value;
        window.location.href = "/artikel?keyword=" + keyword + "&page=1";
    }
</script>
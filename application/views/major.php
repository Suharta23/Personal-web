<div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
    <div class="container text-center">
        <h2>Majors Details</h2>
        <nav>
            <ol class="flex items-center justify-center space-x-3">
                <li class="breadcrumb-item"><a href="index.html">Pages </a></li>
                <li class="breadcrumb-item">-</li>
                <li class="text-primary">Details Jurusan </li>
            </ol>
        </nav>
    </div>
</div>

<div class="nav-tab-wrapper tabs section-padding">
    <div class="container">
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="lg:col-span-8 col-span-12">
                <div class="single-course-details">
                    <div class="xl:h-[470px] h-[350px] mb-10 course-main-thumb">
                        <img src="<?= $base_url . $data["data"]["attributes"]["Images"]["data"]["attributes"]["url"] ?>" alt="" class="rounded-md object-fut w-full h-full block" style="object-fit: cover;"/>
                    </div>
                    <h2>
                        <!-- {{data.data.attributes.Name}} -->
                        <?= $data["data"]["attributes"]["Name"] ?>
                    </h2>
                    <div class="author-meta mt-6 sm:flex lg:space-x-16 sm:space-x-5 space-y-5 sm:space-y-0 items-center">
                    </div>
                    <div class="nav-tab-wrapper mt-12">
                        <ul id="tabs-nav" class="course-tab mb-8">
                            <li>
                                <a href="#tab1">
                                    Overview
                                </a>
                            </li>
                            <li>
                                <a href="#tab2">
                                    Carriculum
                                </a>
                            </li>
                        </ul>
                        <div id="tabs-content">
                            <div id="tab1" class="tab-content">

                                <div>
                                    <h3 class="text-2xl">Tentang Jurusan</h3>
                                    <p class="mt-4">
                                        <!-- {{{data.data.attributes.Descriptions}}} -->
                                        <?= $data["data"]["attributes"]["Descriptions"] ?>
                                    </p>
                                </div>
                            </div>
                            <div id="tab2" class="tab-content">

                                <div>
                                    <h3 class="text-2xl">Mata Pelajaran</h3>
                                    <br />
                                    <ul class="list course-accrodain space-y-6">
                                        <!-- {{#each data.data.attributes.Course.courses.data}} -->
                                        <?php foreach ($data["data"]["attributes"]["Course"]["courses"]["data"] as $course) : ?>
                                            <li>
                                                <button type="button" class="accrodain-button">
                                                    <span class="icon-pm fle x-none"></span>
                                                    <span class="flex-1">
                                                        <?= $course["attributes"]["Name"] ?>
                                                    </span>
                                                </button>
                                                <div class="content hidden">
                                                    <!-- {{{this.attributes.Descriptions}}} -->
                                                    <?= $course["attributes"]["Descriptions"] ?>
                                                </div>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                            <div id="tab3" class="tab-content">

                                <div class="bg-[#F8F8F8] rounded-md p-8">
                                    <div class="md:flex space-x-5 mb-8">
                                        <div class="h-[310px] w-[270px] flex-none rounded mb-5 md:mb-0">
                                            <img src="/images/all-img/ux.png" alt="" class="w-full h-full object-cover rounded" />
                                        </div>
                                        <div class="flex-1">
                                            <div class="max-w-[300px]">
                                                <h4 class="text-[34px] font-bold leading-[51px]">
                                                    {{data.data.attributes.HeadOfDepartment.teacher.data.attributes.Name}}
                                                </h4>
                                                <div class="text-primary mb-6">
                                                    {{data.data.attributes.HeadOfDepartment.teacher.data.attributes.Position}}
                                                </div>
                                                <ul class="list space-y-4">

                                                    <li class="flex space-x-3">
                                                        <img src="/images/icon/file2.svg" alt="" />
                                                        <div>
                                                            65+ Courses
                                                        </div>
                                                    </li>

                                                    <li class="flex space-x-3">
                                                        <img src="/images/icon/user2.svg" alt="" />
                                                        <div>
                                                            2k+ Student Learned
                                                        </div>
                                                    </li>

                                                    <li class="flex space-x-3">
                                                        <img src="/images/icon/star.svg" alt="" />
                                                        <div>
                                                            547+ Reviews
                                                        </div>
                                                    </li>

                                                    <li class="flex space-x-3">
                                                        <img src="/images/icon/like.svg" alt="" />
                                                        <div>
                                                            4.9 Average Rating
                                                        </div>
                                                    </li>

                                                </ul>
                                                <ul class="flex space-x-3 mt-8">

                                                    <li class="">
                                                        <a href="#"><img src="/images/social/fb.svg" alt="" />
                                                        </a>
                                                    </li>

                                                    <li class="">
                                                        <a href="#"><img src="/images/social/ln.svg" alt="" />
                                                        </a>
                                                    </li>

                                                    <li class="">
                                                        <a href="#"><img src="/images/social/youtube.svg" alt="" />
                                                        </a>
                                                    </li>

                                                    <li class="">
                                                        <a href="#"><img src="/images/social/instra.svg" alt="" />
                                                        </a>
                                                    </li>

                                                    <li class="">
                                                        <a href="#"><img src="/images/social/twiiter.svg" alt="" />
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {{data.data.attributes.HeadOfDepartment.Descriptions}}
                                </div>
                            </div>
                            <div id="tab4" class="tab-content">

                                <div>
                                    <div class="grid grid-cols-12 gap-5">
                                        <div class="md:col-span-8 col-span-12">

                                            <div class="flex items-center space-x-4 mb-5 last:mb-0">
                                                <div class="flex-none">
                                                    <div class="flex space-x-1 text-xl">

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="progressbar-group flex items-center space-x-4">
                                                        <div class="rounded-[2px] overflow-hidden bg-opacity-10 bg-black h-[6px] relative flex-1">
                                                            <div class="ani h-[6px] bg-secondary block absolute left-0 top-1/2 -translate-y-1/2" data-progress="40"></div>
                                                        </div>
                                                        <div class="flex-none">
                                                            <span class="block mb-2 font-semibold">40%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex items-center space-x-4 mb-5 last:mb-0">
                                                <div class="flex-none">
                                                    <div class="flex space-x-1 text-xl">

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-[#E6E6E6]"></iconify-icon>

                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="progressbar-group flex items-center space-x-4">
                                                        <div class="rounded-[2px] overflow-hidden bg-opacity-10 bg-black h-[6px] relative flex-1">
                                                            <div class="ani h-[6px] bg-secondary block absolute left-0 top-1/2 -translate-y-1/2" data-progress="10"></div>
                                                        </div>
                                                        <div class="flex-none">
                                                            <span class="block mb-2 font-semibold">10%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex items-center space-x-4 mb-5 last:mb-0">
                                                <div class="flex-none">
                                                    <div class="flex space-x-1 text-xl">

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-[#E6E6E6]"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-[#E6E6E6]"></iconify-icon>

                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="progressbar-group flex items-center space-x-4">
                                                        <div class="rounded-[2px] overflow-hidden bg-opacity-10 bg-black h-[6px] relative flex-1">
                                                            <div class="ani h-[6px] bg-secondary block absolute left-0 top-1/2 -translate-y-1/2" data-progress="0"></div>
                                                        </div>
                                                        <div class="flex-none">
                                                            <span class="block mb-2 font-semibold">0%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex items-center space-x-4 mb-5 last:mb-0">
                                                <div class="flex-none">
                                                    <div class="flex space-x-1 text-xl">

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-[#E6E6E6]"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-[#E6E6E6]"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-[#E6E6E6]"></iconify-icon>

                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="progressbar-group flex items-center space-x-4">
                                                        <div class="rounded-[2px] overflow-hidden bg-opacity-10 bg-black h-[6px] relative flex-1">
                                                            <div class="ani h-[6px] bg-secondary block absolute left-0 top-1/2 -translate-y-1/2" data-progress="0"></div>
                                                        </div>
                                                        <div class="flex-none">
                                                            <span class="block mb-2 font-semibold">0%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex items-center space-x-4 mb-5 last:mb-0">
                                                <div class="flex-none">
                                                    <div class="flex space-x-1 text-xl">

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-[#E6E6E6]"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-[#E6E6E6]"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-[#E6E6E6]"></iconify-icon>

                                                        <iconify-icon icon="heroicons:star-20-solid" class="text-[#E6E6E6]"></iconify-icon>

                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <div class="progressbar-group flex items-center space-x-4">
                                                        <div class="rounded-[2px] overflow-hidden bg-opacity-10 bg-black h-[6px] relative flex-1">
                                                            <div class="ani h-[6px] bg-secondary block absolute left-0 top-1/2 -translate-y-1/2" data-progress="0"></div>
                                                        </div>
                                                        <div class="flex-none">
                                                            <span class="block mb-2 font-semibold">0%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="md:col-span-4 col-span-12">
                                            <div class="bg-white min-h-[219px] p-6 flex flex-col justify-center items-center shadow-box7 rounded space-y-3">
                                                <h2>
                                                    4.9
                                                </h2>
                                                <div class="flex space-x-3">
                                                    <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>
                                                    <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>
                                                    <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>
                                                    <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>
                                                    <iconify-icon icon="heroicons:star-20-solid" class="text-tertiary"></iconify-icon>
                                                </div>
                                                <span class="block">(2 Review)</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-4 col-span-12">

                <div class="sidebarWrapper space-y-[30px]">
                    <div class="wdiget custom-text space-y-5">
                        <div class="h-[220px] rounded relative block" href="#">
                            <iframe width="300" height="220" src="<?= $data["data"]["attributes"]["VideoUrl"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                            </iframe>
                        </div>
                        <ul class="list">

                            <li class="flex space-x-3 border-b border-[#ECECEC] mb-4 pb-4 last:pb-0 past:mb-0 last:border-0">
                                <div class="flex-1 space-x-3 flex">
                                    <img src="/images/icon/user.svg" alt="" />
                                    <div class="text-black font-semibold">Kaprog</div>
                                </div>
                                <div class="flex-none">
                                    <?= $data["data"]["attributes"]["HeadOfDepartment"]["teacher"]["data"]["attributes"]["Name"] ?>
                                </div>
                            </li>
                            <?php foreach ($data["data"]["attributes"]["HeadOfDepartment"]["biodata"] as $biodata) : ?>
                                <li class="flex space-x-3 border-b border-[#ECECEC] mb-4 pb-4 last:pb-0 past:mb-0 last:border-0">
                                    <div class="flex-1 space-x-3 flex">
                                        <img src="/images/icon/{{this.icon}}.svg" alt="" />
                                        <div class="text-black font-semibold">
                                            <?= $biodata["label"] ?>
                                        </div>
                                    </div>
                                    <div class="flex-none">
                                        <?= $biodata["value"] ?>
                                    </div>
                                </li>
                            <?php endforeach ?>

                        </ul>
                        <ul class="flex space-x-4 items-center pt-3">
                            <li class="text-black font-semibold">
                                Share On:
                            </li>
                            <li>
                                <a href="#" class="flex h-10 w-10">
                                    <img src="/images/icon/fb.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex h-10 w-10">
                                    <img src="/images/icon/tw.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex h-10 w-10">
                                    <img src="/images/icon/pn.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex h-10 w-10">
                                    <img src="/images/icon/ins.svg" alt="" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
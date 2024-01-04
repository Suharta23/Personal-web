<div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
    <div class="container text-center">
        <h2>Instructor</h2>
        <nav>
            <ol class="flex items-center justify-center space-x-3">
                <li class="breadcrumb-item"><a href="index.html">Pages </a></li>
                <li class="breadcrumb-item">-</li>
                <li class="text-primary">Instructor</li>
            </ol>
        </nav>
    </div>
</div>

<!-- team start -->
<div class=" section-padding">
    <div class="container">
        <div class="text-center">
            <div class="mini-title">Team Member</div>
            <div class="column-title ">
                Our Expert
                <span class="shape-bg">Instructors</span>
            </div>
        </div>
        <div class="grid xl:grid-cols-4 lg:grid-cols-3  sm:grid-cols-2 grid-cols-1 gap-7 pt-10">

            <!-- {{#each data}} -->
            <?php foreach ($data["data"] as $key => $value) : ?>
                <div class=" bg-white shadow-box3 rounded-[8px] transition-all duration-100 pt-10 pb-[28px] px-6 text-center hover:shadow-box4
                            border-t-4 border-transparent hover:border-primary ">
                    <div class="w-[170px] h-[170px] rounded-full  relative mx-auto mb-8">
                        <img src="<?= $base_url . $value["attributes"]["Images"]["data"]["attributes"]["url"] ?>" alt="" class=" w-full h-full object-cover rounded-full">
                    </div>
                    <div class="course-content">
                        <h4 class=" text-2xl mb-1 font-bold">
                            <!-- {{this.attributes.Name}} -->
                            <?= $value["attributes"]["Name"] ?>
                        </h4>
                        <div>
                            <!-- {{this.attributes.Position}} -->
                            <?= $value["attributes"]["Position"] ?>
                        </div>
                        <ul class="space-x-4 flex justify-center pt-6">
                            <li>
                                <a href="<?= $value["attributes"]["SosialMedia"]["FacebookUrl"] ?>" class=" h-10 w-10 rounded bg-red-paste text-primary flex flex-col justify-center items-center text-2xl transition
                                                hover:bg-primary hover:text-white">
                                    <iconify-icon icon="bxl:facebook"></iconify-icon>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $value["attributes"]["SosialMedia"]["TwitterUrl"] ?>" class=" h-10 w-10 rounded bg-green-paste text-secondary flex flex-col justify-center items-center text-2xl transition
                                                hover:bg-secondary hover:text-white">
                                    <iconify-icon icon="bxl:twitter"></iconify-icon>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $value["attributes"]["SosialMedia"]["LinkedinUrl"] ?>" class=" h-10 w-10 rounded bg-[#EEE8FF] text-#8861DB flex flex-col justify-center items-center text-2xl transition
                                                hover:bg-[#8861DB] hover:text-white">
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
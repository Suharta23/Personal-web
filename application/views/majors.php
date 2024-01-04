<div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
    <div class="container text-center">
        <h2>Jurusan</h2>
        <nav>
            <ol class="flex items-center justify-center space-x-3">
                <li class="breadcrumb-item"><a href="index.html">Pages </a></li>
                <li class="breadcrumb-item">-</li>
                <li class="text-primary">Jurusan </li>
            </ol>
        </nav>
    </div>
</div>

<div class="nav-tab-wrapper tabs pt-10 section-padding-bottom">
    <div class="container">
        <div id="tabs-content">
            <div id="tab1" class="tab-content">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
                    <?php foreach ($data["data"] as $majors) : ?>
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
            </div>
        </div>
    </div>
</div>
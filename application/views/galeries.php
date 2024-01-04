<div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
    <div class="container text-center">
        <h2>Galeri</h2>
        <nav>
            <ol class="flex items-center justify-center space-x-3">
                <li class="breadcrumb-item"><a href="index.html">Pages </a></li>
                <li class="breadcrumb-item">-</li>
                <li class="text-primary">Galeri</li>
            </ol>
        </nav>
    </div>
</div>

<div class="nav-tab-wrapper tabs  section-padding">
    <div class="container">
        <div class="grid  lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
            <!-- {{#each data.data}} -->
            <?php foreach ($data["data"] as $galery) : ?>
                <div class=" bg-white shadow-box5 rounded-[8px] transition duration-100 hover:shadow-box3">
                    <div class="course-thumb h-[297px] rounded-t-[8px]  relative">
                        <img src="<?= $base_url . $galery["attributes"]["Image"]["data"]["attributes"]["url"] ?>" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
                    </div>
                    <div class="course-content p-8">
                        <h4 class=" text-xl mb-5 font-bold">
                            <a href="#" class=" hover:text-primary transition duration-150">
                                <!-- {{this.attributes.Title}} -->
                                <?= $galery["attributes"]["Title"] ?>
                            </a>
                        </h4>
                        <p>
                            <!-- {{this.attributes.Description}} -->
                            <?= $galery["attributes"]["Description"] ?>
                        </p>

                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="pagination mt-14">
            <?php $this->load->view('layouts/pagination_galeri') ?>
        </div>
    </div>
</div>
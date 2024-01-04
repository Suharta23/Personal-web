<div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
    <div class="container text-center">
        <h2>
            <?= $data["data"]["attributes"]["Header"] ?>
        </h2>
        <nav>
            <ol class="flex items-center justify-center space-x-3">
                <li class="breadcrumb-item"><a href="index.html">Pages </a></li>
                <li class="breadcrumb-item">-</li>
                <li class="text-primary">Events</li>
            </ol>
        </nav>
    </div>
</div>

<div class="nav-tab-wrapper tabs section-padding">
    <div class="container">
        <img src="<?php echo base_url() ?>/public/images/CaFy1643962059.png" alt="" class="lg:mb-10 mb-6 block w-full" />
        <div class="grid grid-cols-12 gap-[30px]">
            <div class="lg:col-span-8 col-span-12">
                <h3>
                    <!-- {{data.data.attributes.Header}} -->
                    <?php $data["data"]["attributes"]["Header"] ?>
                </h3>
                <br />
                <div class="content">
                    <!-- {{data.data.attributes.Content}} -->
                    <?= $data["data"]["attributes"]["Content"] ?>
                </div>
            </div>
            <div class="lg:col-span-4 col-span-12 relative lg:-mt-20">
                <div class="sidebarWrapper max-w-[90%] mx-auto space-y-[30px]">
                    <div class="wdiget custom-text space-y-5">
                        <ul class="list space-y-6">
                            <!-- {{#each data.data.attributes.Widget}} -->
                            <?php foreach ($data["data"]["attributes"]["Widget"] as $widget) : ?>
                                <li class="flex space-x-3">
                                    <div class="flex-1 space-x-3 flex">
                                        <img src="<?php echo base_url() ?>/public/images/svg/{{this.Icon}}.svg" alt="" />
                                        <div>
                                            <?= $widget["Label"] ?>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
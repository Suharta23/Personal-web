<div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
    <div class="container text-center">
        <h2>Contact Us</h2>
        <nav>
            <ol class="flex items-center justify-center space-x-3">
                <li class="breadcrumb-item"><a href="index.html">Pages </a></li>
                <li class="breadcrumb-item">-</li>
                <li class="text-primary">Contact</li>
            </ol>
        </nav>
    </div>
</div>

<div class="nav-tab-wrapper tabs  section-padding">
    <div class="container" id="contact-app">
        <div class=" grid grid-cols-12 gap-[30px]">
            <div class="xl:col-span-5 lg:col-span-6 col-span-12 ">
                <div class="mini-title">Contact Us</div>
                <h4 class="column-title ">
                    <?= $data["data"]["attributes"]["Title"] ?>
                </h4>
                <div>
                    <?= $data["data"]["attributes"]["Subtitle"] ?>
                </div>
                <ul class=" list-item space-y-6 pt-8">
                    <li class="flex">
                        <div class="flex-none mr-6">
                            <div class="">
                                <img src="<?php echo base_url() ?>/public/images/svg/mail.svg" alt="" class="">
                            </div>
                        </div>
                        <div class="flex-1">
                            <h4 class=" lg:text-xl text-lg mb-1">Email-Us :</h4>
                            <div><?= $data["data"]["attributes"]["Email"] ?></div>
                        </div>
                    </li>
                    <li class="flex">
                        <div class="flex-none mr-6">
                            <div class="">
                                <img src="<?php echo base_url() ?>/public/images/svg/call.svg" alt="" class="">
                            </div>
                        </div>
                        <div class="flex-1">
                            <h4 class=" lg:text-xl text-lg mb-1">Call Us:</h4>
                            <div><?= $data["data"]["attributes"]["Phone"] ?></div>
                        </div>
                    </li>
                    <li class="flex">
                        <div class="flex-none mr-6">
                            <div class="">
                                <img src="<?php echo base_url() ?>/public/images/svg/map.svg" alt="" class="">
                            </div>
                        </div>
                        <div class="flex-1">
                            <h4 class="lg:text-xl text-lg mb-1">Office :</h4>
                            <div><?= $data["data"]["attributes"]["Address"] ?></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="xl:col-span-7 lg:col-span-6 col-span-12">
                <div class="bg-white shadow-box7 p-8 rounded-md">
                    <form class="form" method="post" action="<?php echo base_url() ?>/kontak/email">
                        <div class=" md:grid-cols-2 grid grid-cols-1 gap-[30px] mt-6 ">
                            <div>
                                <input type="text" name="name" class=" from-control" placeholder="Name*" v-model="fullname">
                            </div>
                            <div>
                                <input type="email" id="email" name="email" class="from-control" placeholder="Email*" v-model="email">
                            </div>
                            <div class="md:col-span-2 col-span-1">
                                <input type="text" id="subject" name="subject" class=" from-control" placeholder="Subject *" v-model="subject">
                            </div>
                            <div class="md:col-span-2 col-span-1">
                                <textarea class=" from-control" id="message" name="message" placeholder="Your Message*" rows="5" v-model="message"></textarea>
                            </div>
                        </div>
                        <div id="g-captcha" class="mt-4" data-sitekey=""></div>
                        <button class="btn btn-primary mt-[30px]" type="submit" name="submit" v-bind:disabled="btndisable" @click="submitForm">
                            {% btnText %}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- recive flashdata javascript-->
<?php if ($this->session->flashdata('message')) : ?>
    <script>
        alert("<?php echo $this->session->flashdata('message'); ?>");
    </script>
<?php endif; ?>
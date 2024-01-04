<header class="site-header  header-normal top-0 w-full z-[999] rt-sticky">
    <div class="main-header py-6">
        <div class="container">
            <div class=" flex items-center justify-between">
                <a href="<?php echo base_url(); ?>home" class="brand-logo lg:mr-10 md:w-auto max-w-[150px] ">
                    <img src="<?php echo base_url(); ?>/public/images/logo/logo.png" width="150" alt="">
                </a>
                <div class="flex items-center flex-1">
                    <div class="flex-1 main-menu relative mr-[74px]">
                        <ul class="menu-active-classes">
                            <li>
                                <a href="<?php echo base_url(); ?>home">Beranda</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Profil</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>p/sejarah-sekolah">Sejarah</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>p/identitas-sekolah">Identitas Sekolah</a>
                                    </li>
                                    <li>
                                        <a href="https://goo.gl/maps/gxJ4zX1FQSrFZVJv9" target="_blank">Lokasi</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>galeri">Galeri</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>pengajar">Pengajar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>artikel">Artikel</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>jurusan">Jurusan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>kontak">Kontak Kami</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-none flex space-x-[18px]">
                        <div class=" hidden lg:block">
                            <a href="https://tourmkr.com/F1JBeuJ0zf" target="_blank" class="btn btn-primary py-[15px] px-8">Tour</a>
                        </div>
                        <div class=" block   lg:hidden">
                            <button type="button" class=" text-3xl md:w-[56px] h-10 w-10 md:h-[56px] rounded bg-[#F8F8F8] flex flex-col items-center justify-center
                                        menu-click">
                                <iconify-icon icon="cil:hamburger-menu" rotate="180deg"></iconify-icon>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="openmobile-menu fixed top-0 h-screen pt-10 pb-6 bg-white shadow-box2 w-[320px] overflow-y-auto flex flex-col
        z-[999]">
    <div class="flex justify-between px-6 flex-none">
        <a href="index.html" class="brand-logo flex-none mr-10 ">
            <img src="/images/logo/logo.png" alt="" style="max-width: 200px;">
        </a>
        <span class=" text-3xl text-black cursor-pointer rt-mobile-menu-close">
            <iconify-icon icon="fe:close"></iconify-icon>
        </span>
    </div>
    <div class="mobile-menu mt-6 flex-1 ">
        <ul class="menu-active-classes">
            <li>
                <a href="/">Beranda</a>
            </li>
            <li class="menu-item-has-children">
                <a href="#">Profil</a>
                <ul class="sub-menu">
                    <li>
                        <a href="/p/sejarah-sekolah">Sejarah</a>
                    </li>
                    <li>
                        <a href="/p/identitas-sekolah">Identitas Sekolah</a>
                    </li>
                    <li>
                        <a href="https://goo.gl/maps/gxJ4zX1FQSrFZVJv9" target="_blank">Lokasi</a>
                    </li>
                    <li>
                        <a href="/galeri">Galeri</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/artikel">Informasi</a>
            </li>
            <li>
                <a href="/jurusan">Jurusan</a>
            </li>
            <li>
                <a href="/kontak">Kontak Kami</a>
            </li>
        </ul>
    </div>
    <div class=" flex-none pb-4">
        <div class=" text-center text-black font-semibold mb-2">Follow Us</div>
        <ul class="flex space-x-4 justify-center ">
            <li>
                <a href="#" class="flex h-10 w-10">
                    <img src="/images/icon/fb.svg" alt="">
                </a>
            </li>
            <li>
                <a href="#" class="flex h-10 w-10">
                    <img src="/images/icon/tw.svg" alt="">
                </a>
            </li>
            <li>
                <a href="#" class="flex h-10 w-10">
                    <img src="/images/icon/pn.svg" alt="">
                </a>
            </li>
            <li>
                <a href="#" class="flex h-10 w-10">
                    <img src="/images/icon/ins.svg" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>
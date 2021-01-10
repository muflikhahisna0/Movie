<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid text-white " style="background-image: url('/img/b.jpg'); background-size: contain;">
    <div class="row p-4 content-list  d-flex flex-column">
        <div class="col p-4">
            <h1 class="movie-title text-white mb-4"><strong>ABOUT &nbsp; US</strong></h1>
            <div class="row align-items-center">
                <div class="col-4 p-4 text-left align-item-center ">
                    <h3 class="text-warning font-weight-bold">HAPPY VIEWERS</h3>
                    <h1 class="text-white">WHY <strong>CHOOSE US</strong></h1>
                </div>
                <div class="col border border-warning" style="border-radius:25px">
                    <div class="row justify-content-between border-warning">
                        <div class="col p-4">
                            <b class="text-warning">Amazing Theaters</b>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quos quidem tempora enim sunt. Quasi harum ut voluptatem, aut in qui molestias minus sequi earum impedit. Ab nobis harum culpa.</p>
                            <b class="text-warning">Comfort Amenities</b>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quos quidem tempora enim sunt. Quasi harum ut voluptatem, aut in qui molestias minus sequi earum impedit. Ab nobis harum culpa.</p>
                        </div>
                        <div class="col p-4">
                            <b class="text-warning">Preorder Foods</b>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quos quidem tempora enim sunt. Quasi harum ut voluptatem, aut in qui molestias minus sequi earum impedit. Ab nobis harum culpa.</p>
                            <b class="text-warning">Reward</b>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quos quidem tempora enim sunt. Quasi harum ut voluptatem, aut in qui molestias minus sequi earum impedit. Ab nobis harum culpa.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col text-center p-4">
            <div class="row align-item-center">
                <div class="col-4 text-left">
                    <h1 class="text-warning">OUR <strong class="text-white">TEAM</strong></h1>
                </div>
                <div class="col pr-4">
                    <table class="table table-borderless text-white">
                        <tbody class="table-borderless">
                            <tr>
                                <td class="text-left"><img src="/img/1.jpg" alt="poto" class="rounded-circle" style="width: 60px;"></td>
                                <td class="text-left"><b class="text-warning">Muflikhah Isna</b> <br>
                                    <b>CEO</b> <br>
                                    <p>muflikhahisna0@gmail.com</p>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-borderless">
                            <tr>
                                <td class="text-left"><img src="/img/2.jpg" alt="poto" class="rounded-circle" style="width: 60px;"></td>
                                <td class="text-left"><b class="text-warning">Muflikhah Isna</b> <br>
                                    <b>CTO</b> <br>
                                    <p>muflikhahisna0@gmail.com</p>
                                </td>
                            </tr>
                        </tbody>
                        <tbody class="table-borderless">
                            <tr>
                                <td class="text-left"><img src="/img/3.jpg" alt="poto" class="rounded-circle" style="width: 60px;"></td>
                                <td class="text-left"><b class="text-warning">Muflikhah Isna</b> <br>
                                    <b>CMO</b> <br>
                                    <p>muflikhahisna0@gmail.com</p>
                                </td>
                                <td class="table-borderless" style="width: 500px;"></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-100 p-4 " style="background-color: black;">
    <div class="row text-center justify-content-center container-fluid social-media">
        <div class="rounded-lg m-2 yellow p-2 fit-content" style="width: 40px; height: 40px;">
            <b class="fa text-white fa-facebook"></b>
        </div>
        <div class="rounded-lg m-2 yellow p-2 fit-content" style="width: 40px; height: 40px;">
            <b class="fa text-white fa-twitter"></b>
        </div>
        <div class="rounded-lg m-2 yellow p-2 fit-content" style="width: 40px; height: 40px;">
            <b class="fa text-white fa-linkedin"></b>
        </div>
        <div class="rounded-lg m-2 yellow p-2 fit-content" style="width: 40px; height: 40px;">
            <b class="fa text-white fa-github"></b>
        </div>
    </div>
    <div class="d-flex mt-4 justify-content-center text-center">
        <p class="text-white">© Copyright 2020</p>
        &nbsp;
        <p class="text-warning pr-4 pl-4">|</p>
        &nbsp;
        <p class="text-white">Muflikhah Isna</p>
        &nbsp;
        <p class="text-warning pr-4 pl-4">|</p>
        &nbsp;
        <p class="text-white">Yogyakarta</p>
    </div>
</div>
<?= $this->endSection(); ?>
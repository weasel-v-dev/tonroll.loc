<?php include 'header.php' ?>
<div class="trl-jack-pot mt-2 rounded-4 p-1 d-flex justify-content-around align-items-center">
    <div class="trl-jack-pot__name fw-bold">JACKPOT</div>
    <div class="trl-jack-pot__amount fw-bold">150000</div>
</div>
<div class="trl-progressbar mt-2 rounded-5 position-relative">
    <div style="width: 10%;"
         class="trl-progressbar__filled py-2  trl-gr-blue rounded-5 d-flex justify-content-center"></div>
    <span style="margin-top: 1px"
          class="text-uppercase lh-1 font-14 position-absolute start-50 top-50 translate-middle">rolling in 12.35</span>
</div>
<div class="trl-roll p-2 trl-bg mt-2 rounded-5 position-relative">
    <img class="position-absolute translate-middle start-50 top-0 " src="/assets/img/pointer.png" width="15px" height="15px">
    <div class="trl-roll__list">
        <div class="trl-roll__el-wrap">
            <div class="trl-roll__el trl-gr-green rounded-5"></div>
        </div>
        <div class="trl-roll__el-wrap">
            <div class="trl-roll__el trl-gr-blue rounded-5"></div>
        </div>
        <div class="trl-roll__el-wrap">
            <div class="trl-roll__el trl-gr-red rounded-5"></div>
        </div>
        <div class="trl-roll__el-wrap">
            <div class="trl-roll__el trl-gr-red rounded-5"></div>
        </div>
        <div class="trl-roll__el-wrap">
            <div class="trl-roll__el trl-gr-red rounded-5"></div>
        </div>
        <div class="trl-roll__el-wrap">
            <div class="trl-roll__el trl-gr-red rounded-5"></div>
        </div>
        <div class="trl-roll__el-wrap">
            <div class="trl-roll__el trl-gr-red rounded-5"></div>
        </div>
        <div class="trl-roll__el-wrap">
            <div class="trl-roll__el trl-gr-red rounded-5"></div>
        </div>
    </div>
    <div class="d-flex mt-2 justify-content-between">
        <div class="trl-roll__desc me-2 fw-bold font-14" style="margin-bottom: -2px">История игр:</div>
        <div class="d-flex">
            <div class="trl-roll__el-history-wrap d-flex align-items-center">
                <div class="trl-color-blue fw-bold font-14 pe-1 lh-1">10</div>
                <div class="trl-roll__el-history trl-gr-blue rounded-5"></div>
            </div>
            <div class="trl-roll__el-history-wrap d-flex align-items-center">
                <div class="trl-color-green fw-bold font-14 pe-1 lh-1">30</div>
                <div class="trl-roll__el-history trl-gr-green rounded-5"></div>
            </div>
            <div class="trl-roll__el-history-wrap d-flex align-items-center">
                <div class="trl-color-red fw-bold font-14 pe-1 lh-1">50</div>
                <div class="trl-roll__el-history trl-gr-red rounded-5"></div>
            </div>
            <div class="trl-roll__el-history-wrap d-flex align-items-center">
                <div class="trl-color-yellow fw-bold font-14 pe-1 lh-1">10</div>
                <div class="trl-roll__el-history trl-gr-yellow rounded-5"></div>
            </div>
        </div>
    </div>
</div>
<ul class="nav nav-pills d-flex justify-content-between" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="p-2 nowrap font-14 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
            <span>Игроки/Ставки <span class="arr">▼</span></span>
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="p-2 nowrap font-14" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
            <span>История ставок <span class="arr">▼</span></span>
        </button>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        <div class="trl-bg js-trl-table rounded-5 py-2 px-2 d-flex  justify-content-center trl-players-bets__list overflow-auto"
             style="min-height: 103px;height: calc(100vh - 505px)">
            <div class="container">
                <div class="row g-0" style="height: fit-content">
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1  rounded-3">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto">
                            <div class="trl-gr-red trl-player-bet__cell p-1 rounded-1">X12</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1  rounded-3">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto">
                            <div class="trl-gr-blue trl-player-bet__cell p-1 rounded-1">X12</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1  rounded-3">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto">
                            <div class="trl-gr-yellow trl-player-bet__cell p-1 rounded-1">X12</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1 rounded-3">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2 ">
                            <div class="trl-player-bet__name">Дмитрий</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto">
                            <div class="trl-gr-green trl-player-bet__cell p-1 rounded-1">X12</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1  rounded-3">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto">
                            <div class="trl-gr-red trl-player-bet__cell p-1 rounded-1">X12</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1  rounded-3">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto">
                            <div class="trl-gr-blue trl-player-bet__cell p-1 rounded-1">X12</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1  rounded-3">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto">
                            <div class="trl-gr-yellow trl-player-bet__cell p-1 rounded-1">X12</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1  rounded-3">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto">
                            <div class="trl-gr-green trl-player-bet__cell p-1 rounded-1">X12</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1  rounded-3">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto">
                            <div class="trl-gr-red trl-player-bet__cell p-1 rounded-1">X12</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1  rounded-3">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto">
                            <div class="trl-gr-blue trl-player-bet__cell p-1 rounded-1">X12</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1  rounded-3">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto">
                            <div class="trl-gr-yellow trl-player-bet__cell p-1 rounded-1">X12</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1  rounded-3">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2 ">
                            <div class="trl-player-bet__name">Дмитрий</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto">
                            <div class="trl-gr-green trl-player-bet__cell p-1 rounded-1">X12</div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        <div class="js-trl-table trl-bg rounded-5 py-2 px-2 d-flex  justify-content-center trl-players-bets__list overflow-auto"
             style="min-height: 103px;height: calc(100vh - 505px)">
            <div class="container">
                <div class="row g-0" style="height: fit-content">
                    <div class="col-6">
                        <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                            <div class="me-1 rounded-4">
                                <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                            </div>
                            <div class="me-2">
                                <div class="trl-player-bet__name">Дмитрий</div>
                                <div>100 000</div>
                            </div>
                            <div class="ms-auto">
                                <div class="trl-gr-red trl-player-bet__cell p-1 rounded-1">X12</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';

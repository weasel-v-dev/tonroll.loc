<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ton Roll</title>
    <link rel="stylesheet" href="/libs/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="trl-bg-dark">
    <div class="container g-0" style="max-width: 540px">
    <div class="px-2 pt-2">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center trl-bg rounded-4 p-1">
                <button><img src="/assets/img/dynamic.png" class="pe-2 trl-avatar-header-icon" alt=""></button>
                <div class="trl-separator trl-bg-light"></div>
                <button><img src="/assets/img/i.png" class="ps-2 trl-avatar-header-icon" alt=""></button>
                <button><img src="/assets/img/armor.png" class="ps-2 trl-avatar-header-icon" alt=""></button>
            </div>
            <div class="trl-avatar trl-bg-green-blue d-flex justify-content-center align-items-center rounded-4">
                <img src="/assets/img/plug/avatar.png" alt="" >
            </div>


            <div class="d-flex align-items-center trl-bg rounded-4 p-1">
                <img src="/assets/img/wallet.png" class="pe-2 trl-avatar-header-icon--wallet" alt="">
                <div class="font-18 lh-0" style="margin-top: 3px;">$ 100000.00</div>
            </div>
        </div>
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
                <div class="trl-roll__desc me-2 fw-bold font-14" style="margin-bottom: -2px">Последние 100 игр:</div>
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
                <div class="trl-bg rounded-5 py-2 px-2 d-flex  justify-content-center trl-players-bets__list overflow-auto"
                     style="height: calc(100vh - 502px);min-height: 103px">
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
                <div class="trl-bg rounded-5 py-2 px-2 d-flex  justify-content-center trl-players-bets__list overflow-auto"
                     style="height: calc(100vh - 502px);min-height: 103px">
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

        <div class="trl-menu  mt-2"></div>
    </div>
</div>
    <div class="position-fixed start-0 bottom-0 w-100 trl-menu">
        <div style="max-width: 540px" class="container px-2" >
            <div class=" trl-bg rounded-5 px-2  py-2">
                <div class="d-flex justify-content-center align-items-center">
                    <div>
                        <button class="small-btn rounded-4 py-1 px-3 fw-bold trl-bg-light-2 font-18">Min</button>
                    </div>
                    <label class="mx-3">
                        <input type="text" class="w-100 rounded-4 text-center font-22 text-uppercase text-white fw-bold trl-bg-light-2">
                    </label>
                    <div>
                        <button class="small-btn rounded-4 py-1 px-3 fw-bold trl-bg-light-2 font-18">Max</button>
                    </div>
                </div>
                <div class="d-flex mt-2 ">
                    <button class="btn-bet lh-1  me-2 rounded-4 fw-bold text-center font-20 px-3 py-2 w-50 trl-gr-blue">Bet x2</button>
                    <button class="btn-bet lh-1  rounded-4 fw-bold text-center font-20 px-3 py-2 w-50 trl-gr-red">Bet x2</button>
                </div>
                <div class="d-flex mt-2">
                    <button class="btn-bet lh-1 rounded-4 me-2 fw-bold text-center font-20 px-3 py-2 w-50 trl-gr-yellow">Bet x2</button>
                    <button class="btn-bet lh-1 rounded-4 fw-bold text-center font-20 px-3 py-2 w-50 trl-gr-green">Bet x2</button>
                </div>
            </div>
            <div class="trl-menu__list trl-bg mt-2  d-flex justify-content-around align-items-center justify-content-between text-center bottom-0 px-3">
                <button class="trl-menu__item py-1 ">
                    <img src="/assets/img/rules.png" alt="">
                    <span class="lh-0 mt-1 d-block">Rules</span>
                </button>
                <button class="trl-menu__item py-1 ">
                    <img src="/assets/img/game.png" alt="">
                    <span class="lh-0 mt-1 d-block">Game</span>
                </button>
                <button class="trl-menu__item py-1 ">
                    <img src="/assets/img/chat.png" alt="">
                    <span class="lh-0 mt-1 d-block">Chat</span>
                </button>
                <button class="trl-menu__item py-1 ">
                    <img src="/assets/img/gifts.png" alt="">
                    <span class="lh-0 mt-1 d-block">Gifts</span>
                </button>
                <button class="trl-menu__item py-1 ">
                    <img src="/assets/img/menu.png" alt="">
                    <span class="lh-0 mt-1 d-block">Menu</span>
                </button>
            </div>
        </div>
     </div>
    <script src="/libs/bootstrap.min.js"></script>
</body>
</html>
<?php

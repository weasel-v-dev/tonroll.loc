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
<div class="container g-0">
    <div class="px-3 pt-3">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center trl-bg rounded-5 p-2">
                <img src="/assets/img/dynamic.png" class="pe-2 trl-avatar-header-icon" alt="">
                <div class="trl-separator trl-bg-light"></div>
                <img src="/assets/img/i.png" class="ps-2 trl-avatar-header-icon" alt="">
                <img src="/assets/img/armor.png" class="ps-2 trl-avatar-header-icon" alt="">
            </div>
            <div class="trl-avatar trl-bg-green-blue d-flex justify-content-center align-items-center rounded-5">
                <img src="/assets/img/plug/avatar.png" alt="">
            </div>


            <div class="d-flex align-items-center trl-bg rounded-5 p-2">
                <img src="/assets/img/wallet.png" class="pe-2 trl-avatar-header-icon" alt="">
                <div class="trl-color font-18">$ 100000.00</div>
            </div>
        </div>
        <div class="trl-jack-pot mt-3 rounded-5 p-1 d-flex justify-content-around align-items-center">
            <div class="trl-jack-pot__name fw-bold">JACKPOT</div>
            <div class="trl-jack-pot__amount fw-bold">150000</div>
        </div>
        <div class="trl-progressbar mt-3 rounded-5 position-relative">
            <div style="width: 10%;"
                 class="trl-progressbar__filled py-2  trl-gr-blue rounded-5 d-flex justify-content-center"></div>
            <span style="margin-top: 1px"
                  class="text-uppercase lh-1 font-14 position-absolute start-50 top-50 translate-middle">rolling in 12.35</span>
        </div>
        <div class="trl-roll trl-bg mt-3 rounded-5">
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
            <div class="d-flex">
                <div class="my-2 me-2 fw-bold font-14">Последние 100игр:</div>
                <div class="d-flex">
                    <div class="trl-roll__el-history-wrap d-flex align-items-center">
                        <div class="trl-color-blue fw-bold font-14 pe-1 lh-1">10</div>
                        <div class="trl-roll__el-history trl-gr-blue rounded-5"></div>
                    </div>
                    <div class="trl-roll__el-history-wrap d-flex align-items-center">
                        <div class="trl-color-green fw-bold font-14 pe-1 lh-1">40</div>
                        <div class="trl-roll__el-history trl-gr-green rounded-5"></div>
                    </div>
                    <div class="trl-roll__el-history-wrap d-flex align-items-center">
                        <div class="trl-color-red fw-bold font-14 pe-1 lh-1">50</div>
                        <div class="trl-roll__el-history trl-gr-red rounded-5"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div class="my-2 fw-bold nowrap pe-3 font-14">Игроки/Ставки</div>
            <div class="trl-divider  trl-bg-white"></div>
        </div>
        <div class="trl-bg rounded-5 py-2 px-2 d-flex  justify-content-center trl-players-bets__list overflow-auto"
             style="max-height: 195px">
            <div class="row g-0">
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий Вол...</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto me-2">
                            <div class="trl-gr-green p-1 d-inline-block lh-1 rounded-3 text-uppercase opacity-25">X12
                            </div>
                        </div>
                        <div>
                            <div class="trl-gr-green trl-player-bet__cell rounded-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий Вол...</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto me-2">
                            <div class="trl-gr-blue p-1 d-inline-block lh-1 rounded-3 text-uppercase opacity-25">X12
                            </div>
                        </div>
                        <div>
                            <div class="trl-gr-blue trl-player-bet__cell rounded-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий Вол...</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto me-2">
                            <div class="trl-gr-yellow p-1 d-inline-block lh-1 rounded-3 text-uppercase opacity-25">X12
                            </div>
                        </div>
                        <div>
                            <div class="trl-gr-yellow trl-player-bet__cell rounded-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий Вол...</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto me-2">
                            <div class="trl-gr-red p-1 d-inline-block lh-1 rounded-3 text-uppercase opacity-25">X12
                            </div>
                        </div>
                        <div>
                            <div class="trl-gr-red trl-player-bet__cell rounded-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий Вол...</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto me-2">
                            <div class="trl-gr-green p-1 d-inline-block lh-1 rounded-3 text-uppercase opacity-25">X12
                            </div>
                        </div>
                        <div>
                            <div class="trl-gr-green trl-player-bet__cell rounded-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий Вол...</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto me-2">
                            <div class="trl-gr-blue p-1 d-inline-block lh-1 rounded-3 text-uppercase opacity-25">X12
                            </div>
                        </div>
                        <div>
                            <div class="trl-gr-blue trl-player-bet__cell rounded-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий Вол...</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto me-2">
                            <div class="trl-gr-yellow p-1 d-inline-block lh-1 rounded-3 text-uppercase opacity-25">X12
                            </div>
                        </div>
                        <div>
                            <div class="trl-gr-yellow trl-player-bet__cell rounded-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий Вол...</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto me-2">
                            <div class="trl-gr-red p-1 d-inline-block lh-1 rounded-3 text-uppercase opacity-25">X12
                            </div>
                        </div>
                        <div>
                            <div class="trl-gr-red trl-player-bet__cell rounded-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="trl-player-bet rounded-5 px-2 py-1 d-flex align-items-center trl-bg-light-2 mx-1 my-1">
                        <div class="me-1">
                            <img src="/assets/img/plug/avatar.png" class="trl-player-bet__avatar" alt="">
                        </div>
                        <div class="me-2">
                            <div class="trl-player-bet__name">Дмитрий Вол...</div>
                            <div>100 000</div>
                        </div>
                        <div class="ms-auto me-2">
                            <div class="trl-gr-red p-1 d-inline-block lh-1 rounded-3 text-uppercase opacity-25">X12
                            </div>
                        </div>
                        <div>
                            <div class="trl-gr-red trl-player-bet__cell rounded-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3 trl-bg rounded-5 px-3 py-2 d-md-flex">
            <div class="d-flex me-md-3 justify-content-center align-items-center">
                <div>
                    <div class="small-btn rounded-5 py-1 px-3 fw-bold trl-bg-light-2 font-20">Min</div>
                </div>
                <div class="mx-3">
                    <input type="text" class="w-100 rounded-5 text-center font-30 text-uppercase text-white fw-bold trl-bg-light-2">
                </div>
                <div>
                    <div class="small-btn rounded-5 py-1 px-3 fw-bold trl-bg-light-2 font-20">Max</div>
                </div>
            </div>
            <div class="d-flex mt-2 mt-md-0 me-md-2">
                <div class="btn-bet me-2 rounded-5 fw-bold text-center font-22 px-3 py-2 w-50 trl-gr-blue">Bet x2</div>
                <div class="btn-bet rounded-5 fw-bold text-center font-22 px-3 py-2 w-50 trl-gr-red">Bet x2</div>
            </div>
            <div class="d-flex mt-2 mt-md-0">
                <div class="btn-bet me-2 rounded-5 fw-bold text-center font-22 px-3 py-2 w-50 trl-gr-yellow">Bet x2
                </div>
                <div class="btn-bet rounded-5 fw-bold text-center font-22 px-3 py-2 w-50 trl-gr-green">Bet x2</div>
            </div>
        </div>
        <div class="trl-menu mt-3"></div>
    </div>
</div>
<div class="trl-menu trl-bg position-fixed start-0 d-flex justify-content-around align-items-center justify-content-between text-center bottom-0 w-100 px-3">
    <div class="trl-menu__item">
      <img src="/assets/img/rules.png" alt="">
      <span class="font-12 lh-0 mt-1 d-block">Rules</span>
    </div>
    <div class="trl-menu__item">
      <img src="/assets/img/game.png" alt="">
      <span class="font-12 lh-0 mt-1 d-block">Game</span>
    </div>
    <div class="trl-menu__item">
      <img src="/assets/img/chat.png" alt="">
      <span class="font-12 lh-0 mt-1 d-block">Chat</span>
    </div>
    <div class="trl-menu__item">
      <img src="/assets/img/gifts.png" alt="">
      <span class="font-12 lh-0 mt-1 d-block">Gifts</span>
    </div>
    <div class="trl-menu__item">
      <img src="/assets/img/menu.png" alt="">
      <span class="font-12 lh-0 mt-1 d-block">Menu</span>
    </div>
</div>
<script src="/libs/bootstrap.min.js"></script>
</body>
</html>
<?php

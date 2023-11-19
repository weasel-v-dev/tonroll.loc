<?php
function isHome($fv, $sv)
{
    if ($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index.php") {
        return $fv;
    }
    return $sv;
} ?>

<div class="trl-menu mt-3" style="height: <?= isHome(198, 45) ?>px;"></div>
</div>
</div>

<div class="position-fixed start-0 bottom-0 w-100 js-trl-menu" style="height: <?= isHome(198, 50) ?>px">
    <div style="max-width: 540px" class="h-100 container px-2">
        <?php
        if ($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index.php") { ?>
            <div class=" trl-bg rounded-5 px-2  py-2">
                <div class="d-flex justify-content-center align-items-center">
                    <div>
                        <button class="small-btn rounded-4 py-1 fw-bold trl-bg-light-2 font-18">Min</button>
                    </div>
                    <div class="mx-1">
                        <button class="small-btn rounded-4 py-1 fw-bold trl-bg-light-2 font-18">1/2</button>
                    </div>
                    <label class="">
                        <input type="text"
                               class="pt-1 w-100 rounded-4 text-center font-22 text-uppercase text-white fw-bold trl-bg-light-2">
                    </label>
                    <div class="mx-1">
                        <button class="small-btn rounded-4 py-1 fw-bold trl-bg-light-2 font-18">X2</button>
                    </div>
                    <div>
                        <button class="small-btn rounded-4 py-1 fw-bold trl-bg-light-2 font-18">Max</button>
                    </div>
                </div>
                <div class="d-flex mt-2 ">
                    <button id="bet-blue" data-color-code="blue" data-color-name="Синий" class="btn-bet lh-1  me-2 rounded-4 fw-bold text-center font-20 px-3 py-2 w-50 trl-gr-blue">
                        Bet x2
                    </button>
                    <button id="bet-red" data-color-code="red" data-color-name="Красный" class="btn-bet lh-1  rounded-4 fw-bold text-center font-20 px-3 py-2 w-50 trl-gr-red">Bet
                        x2
                    </button>
                </div>
                <div class="d-flex mt-2">
                    <button id="bet-yellow" data-color-code="yellow" data-color-name="Желтый"
                        class="btn-bet lh-1 rounded-4 me-2 fw-bold text-center font-20 px-3 py-2 w-50 trl-gr-yellow">Bet
                        x2
                    </button>
                    <button id="bet-green" data-color-code="green" data-color-name="Зеленый" class="btn-bet lh-1 rounded-4 fw-bold text-center font-20 px-3 py-2 w-50 trl-gr-green">Bet
                        x2
                    </button>
                </div>
            </div>
            <div class="pt-2"></div>
        <?php } ?>
        <div
            class="trl-menu__list d-flex  h-100 trl-bg  d-flex justify-content-around align-items-center text-center px-3">
            <a class="trl-menu__item py-1 " href="/rules.php">
                <img src="/assets/img/rules.png" alt="">
                <span class="lh-0 mt-1 d-block">Правила</span>
            </a>

            <!--                <button class="trl-menu__item py-1 ">-->
            <!--                    <img src="/assets/img/chat.png" alt="">-->
            <!--                    <span class="lh-0 mt-1 d-block">Чат</span>-->
            <!--                </button>-->
            <a class="trl-menu__item py-1 " href="/methods-payment.php">
                <img src="/assets/img/gifts.png" alt="">
                <span class="lh-0 mt-1 d-block">Оплата</span>
            </a>
            <a class="trl-menu__item py-1 " href="/">
                <img src="/assets/img/game.png" alt="">
                <span class="lh-0 mt-1 d-block">Игра</span>
            </a>
            <a class="trl-menu__item py-1 " href="/methods-payoff.php">
                <img src="/assets/img/gifts.png" alt="">
                <span class="lh-0 mt-1 d-block">Выплата</span>
            </a>
            <!--                <button class="trl-menu__item py-1 ">-->
            <!--                    <img src="/assets/img/menu.png" alt="">-->
            <!--                    <span class="lh-0 mt-1 d-block">Menu</span>-->
            <!--                </button>-->
            <a class="trl-menu__item py-1 " href="/ref.php">
                <img src="/assets/img/menu.png" alt="">
                <span class="lh-0 mt-1 d-block">Рефералы</span>
            </a>
        </div>
    </div>
</div>
<div id="resultModal" style="display:none;" class="modal">
    <div class="modal-content">
<!--        <span class="close" style="color: white; float: right; font-size: 28px; font-weight: bold;">&times;</span>-->
        <p id="resultText"></p>
    </div>
</div>
<script src="/libs/bootstrap.min.js"></script>
<script src="/assets/js/game.js"></script>
<script src="https://telegram.org/js/telegram-web-app.js"></script>
</body>
</html>

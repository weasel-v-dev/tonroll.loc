<?php include 'header.php' ?>
  <div class="p-2 trl-bg mt-2 rounded-5 ">
    <h1 class=" mb-0 font-18 text-center">Заказать выплату
    </h1>
  </div>
  <div class="p-2 trl-bg mt-2 rounded-5 ">
    <h2 class="font-12 mt-2 text-center "><span class="trl-bg-light-2 py-1 px-2 rounded-4">Выберите способ выплаты: </span></h2>
    <div class="row payments text-center pt-2" >
        <div class="col-6 mb-2">
          <a class="payments__item d-block" href="/payoff.php"
             style="background-image: url('/assets/img/methods/tether.png')">
          </a>
          <div class="mt-2 trl-bg-light-2 py-1 px-2 rounded-4">Tether (TRC-20)</div>
        </div>
        <div class="col-6 mb-2">
          <a class="payments__item d-block" href="/payoff.php"
             style="background-image: url('/assets/img/methods/tynk.png')">
          </a>
          <div class="mt-2 trl-bg-light-2 py-1 px-2 rounded-4">Tinkoff</div>
        </div>
        <div class="col-6">
          <a class="payments__item d-block" href="/payoff.php"
             style="background-image: url('/assets/img/methods/quiwi.png')">
          </a>
          <div class="mt-2 trl-bg-light-2 py-1 px-2 rounded-4">Qiwi</div>
        </div>
      </div>
  </div>
<?php include 'footer.php';

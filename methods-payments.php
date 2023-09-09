<?php include 'header.php' ?>
  <div class="p-2 trl-bg mt-2 rounded-5 ">
    <h1 class=" mb-0 font-18 text-center">Баланс
    </h1>
    <h2 class="font-14 mt-2 text-center">Пополнить счет</h2>
    <div class="row payments" >
        <div class="col-6 mb-2">
          <a class="payments__item d-block" href="/charge-on.php"
             style="background-image: url('/assets/img/methods/tether.png')">
          </a>
        </div>
        <div class="col-6 mb-2">
          <a class="payments__item d-block" href="/charge-on.php"
             style="background-image: url('/assets/img/methods/tynk.png')">
          </a>
        </div>
        <div class="col-6">
          <a class="payments__item d-block" href="/charge-on.php"
             style="background-image: url('/assets/img/methods/quiwi.png')">
          </a>
        </div>


      </div>
    <h2 class="font-14 mt-2 text-center">Снять деньги</h2>
    <div class="row payments" >
      <div class="col-6 mb-2">
        <a class="payments__item d-block" href="/write-off.php"
           style="background-image: url('/assets/img/methods/tether.png')">
        </a>
      </div>
      <div class="col-6 mb-2">
        <a class="payments__item d-block" href="/write-off.php"
           style="background-image: url('/assets/img/methods/tynk.png')">
        </a>
      </div>
    </div>
  </div>
<?php include 'footer.php';

<?php include 'header.php' ?>
  <div class="p-2 trl-bg mt-2 rounded-5 ">
    <h1 class="mb-0 font-18 text-center">Оплата через Tinkoff
    </h1>
  </div>
  <div class="p-2 trl-bg mt-2 rounded-5 text-center">

<!--    <div class="font-12 ">-->
<!--      <div>Комиссия платежного шлюза составляет 1%</div>-->
<!--      <div>Выплаты производяться в сети TRC-20</div>-->
<!--      <div>в течение 5 минут</div>-->
<!--    </div>-->
    <div class="">
      <img style="width: 50%;" class="img-thumbnail" src="/assets/img/methods/tynk.png" alt="">
    </div>
<!--    <div class="font-12 mb-1">-->
<!--      C выплаты удерживаеться 1.5 USDT (стоимость перевода в сети)-->
<!--    </div>-->
<!--    <div>-->
<!--      <label class="">-->
<!--        <input placeholder="Курс: 96.59 руб = 1 USDT" type="text" readonly class="text-white px-2 py-1 w-100 rounded-4 text-center font-14 text-white fw-bold trl-bg-light-2">-->
<!--      </label>-->
<!--    </div>-->
<!--    <div>Минимальная оплата: 7 USDT</div>-->

  </div>
  <div class="d-flex align-items-center mt-2">
    <div class=" fw-bold nowrap pe-2 font-14">Пополнение</div>
    <div class="trl-divider  trl-bg-white"></div>
  </div>
  <div class="p-2 trl-bg mt-2 rounded-5 text-center">

    <div class="mb-2">
      <div class="font-12">Введите карту</div>
      <div class="mb-1">[Пример: 3423 2342 2343 2334]</div>
      <label class="">
        <input type="text" class="pt-1 w-100 rounded-4 text-center font-14 text-white fw-bold trl-bg-light-2">
      </label>
    </div>
    <div class="mb-2">
      <div class="font-12">Введите суму</div>
      <div class="mb-1">[Мин: 677руб.]</div>
      <label class="">
        <input type="text" class="pt-1 w-100 rounded-4 text-center font-14 text-white fw-bold trl-bg-light-2">
      </label>
    </div>
    <div class="pb-1">
      <button type="submit" class="btn-bet lh-1 rounded-4 fw-bold text-center font-14 px-3  py-2 trl-gr-green">Пополнить</button>
    </div>
  </div>
  <div class="d-flex align-items-center mt-2">
    <div class=" fw-bold nowrap pe-2 font-14">Ваши пополнения на Tinkoff</div>
    <div class="trl-divider  trl-bg-white"></div>
  </div>
  <div class="p-2 trl-bg mt-2 rounded-5 ">
    <div class="table-responsive">
      <table class="table charge-on text-light mb-0" style="border-collapse:separate;
  border-spacing: 0 5px;">
        <thead>
        <tr>
          <th scope="col" class="border-0 p-0 text-center">ID</th>
          <th scope="col" class="border-0 p-0 text-center">Cумма</th>
          <th scope="col" class="border-0 p-0 text-center">Карта</th>
          <th scope="col" class="border-0 p-0 text-center">Статус</th>
          <th scope="col" class="border-0 p-0 text-center">Дата</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
      <div class="text-center">
        <div class="pagination-controls"></div>
      </div>
    </div>
  </div>
  <script src="/assets/js/charge-on.js"></script>
<?php include 'footer.php';

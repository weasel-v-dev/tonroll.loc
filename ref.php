<?php include 'header.php';
?>
<div class="p-2 trl-bg mt-2 rounded-5 ">
    <h1 class="mb-0 font-18 text-uppercase text-center text-uppercase fw-bold trl-montserrat">Реферальная програма
    </h1>
</div>
<div class="p-2 trl-bg mt-2 rounded-5 ">
    <div>
      <div class="text-center mb-2">
        <p class="font-13">Ваша уникальная ссылка <wbr> для приглашения друзей (рефералов):</p>

        <label>
              <input value="https://tonroll.loc//?go=52391" id="urlInput" placeholder="Введите суму" type="text" class="p-1 w-100 rounded-4 text-center font-14 text-white fw-bold trl-bg-light-2">
        </label>
      </div>
      <div class="d-flex justify-content-center">
        <div class="me-3">
          <button type="submit" id="copyBtn" class="btn-bet lh-1 rounded-3 fw-bold text-center font-14 px-3  py-2 trl-gr-green">Скопировать</button>
        </div>
        <div>
          <button type="submit" class="btn-bet lh-1 rounded-3 fw-bold text-center font-14 px-3  py-2 trl-gr-blue">Поделиться</button>
        </div>
      </div>
     </div>
</div>
<div class="d-flex align-items-center mt-2">
  <div class=" fw-bold nowrap pe-2 font-14">Ваши рефералы по уровням</div>
  <div class="trl-divider  trl-bg-white"></div>
</div>
<div class="p-2 trl-bg mt-2 rounded-5 ">
  <div class="table-responsive">
    <div class="d-flex justify-content-between text-center">
      <div>
        <div class="font-12 fw-bold">
          1 Ур.
        </div>
        <div class="trl-divider my-1 trl-bg-white"></div>
        <div>
          22343 чел.
        </div>
      </div>
      <div>
        <div class="font-12 fw-bold">
          2 Ур.
        </div>
        <div class="trl-divider my-1 trl-bg-white"></div>
        <div>
          20000 чел.
        </div>
      </div>
      <div>
        <div class="font-12 fw-bold">
          3 Ур.
        </div>
        <div class="trl-divider my-1 trl-bg-white"></div>
        <div>
          1000 чел.
        </div>
      </div>
      <div>
        <div class="font-12 fw-bold">
          4 Ур.
        </div>
        <div class="trl-divider my-1 trl-bg-white"></div>
        <div>
          56600 чел.
        </div>
      </div>
      <div>
        <div class="font-12 fw-bold">
          5 Ур.
        </div>
        <div class="trl-divider my-1 trl-bg-white"></div>
        <div>
          33600 чел.
        </div>
      </div>
    </div>
  </div>
</div>
<div class="p-2 trl-bg mt-2 rounded-5 ref">
  <div class="table-responsive">
    <table class="table text-light mb-0 " style="border-collapse:separate;
  border-spacing: 0 5px;">
        <thead>
            <tr>
                <th scope="col" class="font-14 border-0 p-0">Пользователь</th>
                <th scope="col" class="font-14 border-0 p-0 text-center">Доход</th>
                <th scope="col" class="font-14 border-0 p-0 text-center">Рефералы</th>
                <th scope="col" class="font-14 border-0 p-0 text-center">На сайте</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
  </div>
  <div class="text-center">
    <div class="pagination-controls"></div>
  </div>
</div>
<script src="/assets/js/ref.js"></script>
<?php include 'footer.php';

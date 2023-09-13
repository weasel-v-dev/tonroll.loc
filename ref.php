<?php include 'header.php';
?>
<div class="p-2 trl-bg mt-2 rounded-5 ">
    <h1 class="mb-0 font-18 text-uppercase text-center text-uppercase fw-bold trl-montserrat">Реферальная програма
    </h1>
</div>
<div class="p-2 trl-bg mt-2 rounded-5 ">
    <div>
      <div class="text-center mb-2">
        <p class="font-12">Ваша уникальная ссылка <wbr> для приглашения друзей (рефералов):</p>

        <label>
              <input value="https://tonroll.loc//?go=52391" placeholder="Введите суму" type="text" class="p-1 w-100 rounded-4 text-center font-14 text-white fw-bold trl-bg-light-2">
          </label>
      </div>
      <div class="d-flex justify-content-center">
        <div class="me-3">
          <button type="submit" class="btn-bet lh-1 rounded-4 fw-bold text-center font-14 px-3  py-2 trl-gr-green">Скопировать</button>
        </div>
        <div>
          <button type="submit" class="btn-bet lh-1 rounded-4 fw-bold text-center font-14 px-3  py-2 trl-gr-blue">Поделиться</button>
        </div>
      </div>
     </div>
</div>
<div class="p-2 trl-bg mt-2 rounded-5 ref" style="    overflow: auto;
    height: calc(100vh - 304px);">
    <table class="table text-light mb-0 " style="border-collapse:separate;
  border-spacing: 0 5px;">
        <thead>
            <tr>
                <th scope="col" class="border-0 p-0">Пользователь</th>
                <th scope="col" class="border-0 p-0 text-center">Доход</th>
                <th scope="col" class="border-0 p-0 text-center">Рефералы</th>
                <th scope="col" class="border-0 p-0 text-center">На сайте</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
  <div class="text-center">
    <div class="pagination-controls"></div>
  </div>

</div>
<script src="/assets/js/ref.js"></script>
<?php include 'footer.php';

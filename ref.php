<?php include 'header.php' ?>
<div class="p-2 trl-bg mt-2 rounded-5 ">
    <h1 class=" font-20 text-center">Партнерская программа
    </h1>
    <div>
      <div class="text-center mb-2">
        <p class="font-12">Ваша уникальная ссылка для приглашения друзей (рефералов):</p>

        <label>
              <input value="https://tonroll.loc//?go=52391" placeholder="Введите суму" type="text" class="pt-1 w-100 rounded-4 text-center font-14 text-white fw-bold trl-bg-light-2">
          </label>
      </div>
      <div class="text-center">
        <button type="submit" class="btn-bet lh-1 rounded-4 fw-bold text-center font-14 px-3  py-2 trl-gr-green">Скопировать</button>
      </div>
     </div>
</div>
<div class="p-2 trl-bg mt-2 rounded-5 ">
    <table class="table font-14 text-light">
        <thead>
            <tr>
                <th scope="col">Данные</th>
                <th scope="col">Сумма / Статус</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div>23.04.2023</div>
                    <div class="fix-text">Олексей Никитич</div>
                </td>
                <td>
                  <div> <span>+50 рублей</span></div>
                  <div><span  class="trl-gr-green lh-1 p-1 d-inline-block rounded-4">Подтверждено</span></div>
                </td>
            </tr>
            <tr>
              <td>
                <div>23.04.2023</div>
                <div class="fix-text">Никита Смирнов</div>
              </td>
              <td>
                <div> <span>+50 рублей</span></div>
                <div><span  class="trl-gr-yellow lh-1 p-1 d-inline-block rounded-4">В ожидании</span></div>
              </td>
            </tr>
        </tbody>
    </table>
</div>

<?php include 'footer.php';

<?php include 'header.php' ?>
<div class="p-2 trl-bg mt-2 rounded-5 ">
    <h1 class=" font-18 text-center">Пополнить баланс
    </h1>


    <form class="text-center">
      <div class="">
        <img style="width: 50%;" class="img-thumbnail mb-2" src="/assets/img/methods/tynk.png" alt="">
      </div>
        <div class=" mb-2">
          <label class="">
            <input placeholder="Введите номер" type="text" class="pt-1 w-100 rounded-4 text-center font-14 text-white fw-bold trl-bg-light-2">
          </label>
        </div>
      <div class=" mb-2">
        <label class="">
              <input placeholder="Введите суму" type="text" class="pt-1 w-100 rounded-4 text-center font-14 text-white fw-bold trl-bg-light-2">
          </label>
      </div>
      <div class="">
        <button type="submit" class="btn-bet lh-1 rounded-4 fw-bold text-center font-14 px-3  py-2 trl-gr-green">Пополнить</button>

      </div>
     </form>
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
                    <div class="fix-text">485793lfgldu498jsdghdkg</div>
                </td>
                <td>
                  <div> <span>50 рублей</span></div>
                  <div><span  class="trl-gr-green lh-1 p-1 d-inline-block rounded-4">Оплачено</span></div>
                </td>
            </tr>
            <tr>
              <td>
                <div>23.04.2023</div>
                <div class="fix-text">485793lfgldu498jsdghdkg</div>
              </td>
              <td>
                <div> <span>50 рублей</span></div>
                <div><span  class="trl-gr-red lh-1 p-1 d-inline-block rounded-4">Отмена</span></div>
              </td>
            </tr>
        </tbody>
    </table>
</div>

<?php include 'footer.php';

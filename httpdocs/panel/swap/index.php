<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обмен сертификатов");
?>
<?
$user = $_GET['value'];
?>
<div class="l-container__swap">
  <div class="l-swap__left">
    <div class="l-swap__header">
      <div class="l-swap__title">
        Выберите сертификат
      </div>
      <div class="l-swap__choose">
        <span>Введите номер сертификата</span>
        <div class="l-swap__input">
          <form class=""  method="get">
            <input type="text" name="value" id="value" class="value" value="" placeholder="Введите номер">
          </form>
        </div>
      </div>
    </div>
    <div class="l-swap__footer">
      <div class="l-swap__title">
        Текущие данные о владельце номера
      </div>
      <div class="l-swap__info">
        <ul class="l-swap__info-static">
          <li>ФИО</li>
          <li>Номер телефона</li>
          <li>Номер сертификата</li>
        </ul>
        <ul class="l-swap__info-static dinamic">
          <li><?echo $user;?></li>
          <li>+7(000)000-00-00</li>
          <li>Номер билет</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="l-swap__right">
    <div class="l-swap__header">
      <div class="l-swap__title">
        Выберите сертификат
      </div>
      <div class="l-swap__choose">
        <span>Введите номер сертификата</span>
        <div class="l-swap__input">
          <form class=""  method="get">
            <input type="text" name="id" id="id" value="" placeholder="Введите номер">
          </form>
        </div>
      </div>
    </div>
    <div class="l-swap__footer">
      <div class="l-swap__title">
        Текущие данные о владельце номера
      </div>
      <div class="l-swap__info">
        <ul class="l-swap__info-static">
          <li>ФИО</li>
          <li>Номер телефона</li>
          <li>Номер сертификата</li>
        </ul>
        <ul class="l-swap__info-static dinamic">
          <li>Олегов Олег Олегович</li>
          <li>+7(000)000-00-00</li>
          <li>№2000</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="l-btn">
  <a href="#" class="l-swap__btn" onclick="click">Подтвердить!</a>
</div>

<script>
  $(document).ready(function() {
    $('.l-swap__btn').on('click', function() {
      var number = $('input').val();
      $.ajax({
        method: "GET",
        url: "https://xn--c1abvalcca0bku2fwa.xn--p1ai/api/Swap/getInfo/",
        dataType: "json",
        data: {
          value: number
        },
        success: function(data) {
          console.log(data);
        },
      })
    })
  });
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

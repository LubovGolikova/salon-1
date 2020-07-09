@include('header')
<section class="box-2s mb-5">
    <div class="box-2s-text align-items-center text-center justify-content-center">
        <h3>Мы находимся</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>г. Запорожье</h3>
                <p><h4>Вознесеновский  район</h4>
                <p><h4>ул. Яценко, 16</h4>
            </div>
        </div>
    </div>
    <div class="row align-items-center justify-content-center pt-5 text-center">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                		<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                        var setting = {"height":540,"width":803,"zoom":17,"queryString":"ул. Яценко, 16, Запорожье, Запорожская область, Украина","place_id":"ChIJV_LIsFJn3EARKIrEsJi0b1Q","satellite":false,"centerCoord":[47.83244131753346,35.149517749999966],"cid":"0x546fb498b0c48a28","lang":"ru","cityUrl":"/ukraine/zaporizhia-46653","cityAnchorText":"Карта [CITY1], Запорожье, Украина","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"236306"};
                        var d = document;
                        var s = d.createElement('script');
                        s.src = 'https://1map.com/js/script-for-user.js?embed_id=236306';
                        s.async = true;
                        s.onload = function (e) {
                          window.OneMap.initMap(setting)
                        };
                        var to = d.getElementsByTagName('script')[0];
                        to.parentNode.insertBefore(s, to);
                      })();</script><a href="https://1map.com/ru/map-embed">1 Map</a></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5 ">
            <div class="col-sm-4">
                <h3>Коротко о нас</h3>
                <p>Опыт работы более 5 лет в nail индустрии. Индивидуальный подход к каждому
                    клиенту в соответствии с трендом и направлением переменной моды.</p>
                <p>Используем в работе качественные материалы.</p>
            </div>
            <div class="col-sm-4">
                <h3>Наши услуги</h3>
                <p>Мы предлагаем классический (обрезной) маникюр, аппаратный, комбинированный.</p>
                <p>Покрытие ногтей гельлаком, наращивание ногтей, коррекция ногтей, ремонт ногтей.</p>
                <p>Мы рады Вам!</p>
            </div>
        </div>
    </div>


</section>
@include('footer')


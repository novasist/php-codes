<?php
/*
*Created by  Software Engineer: Sinan KAYAPINAR

* Date :15.10.2024
* Time :00:53
*/
if (!empty($_GET)) {
    $keyword = isset($_GET["search"]) ? $_GET["search"] : "";
    $kurallar = array_filter($kurallar, function ($kural) use ($keyword) {
        return stristr($kural["exp"], $keyword) or
            stristr($kural["icon1"], $keyword) or
            stristr($kural["icon2"], $keyword) or
            stristr((isset($kural["icon3"]) && !empty($kural["icon3"])) ? $kural["icon3"] : "", $keyword);
    });
}
?>
<div class="row justify-content-center mb-3">
    <form class="d-flex col-md-5">
        <input class="form-control me-2 input-group-sm" type="search" placeholder="Aramak istediğiniz özelllik"
               aria-label="Search" name="search" onfocus="this.placeholder = 'mümkünse tek kelime veya tek buton adı bro..' +
                '.'">
        <button style="font-size: x-small;" class="btn btn-outline-success btn-sm" type="submit">Arama Reset</button>
    </form>
</div>
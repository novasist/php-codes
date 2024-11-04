<?php
/*
*Created by  Software Engineer: Sinan KAYAPINAR

* Date :11.10.2024
* Time :21:49
*/
function jsonCekme($kurallar)
{
    $myFile = fopen("_jsonVariables.json", "w");
    $data=json_encode($kurallar,JSON_UNESCAPED_UNICODE);
    fwrite($myFile, $data);
    fclose($myFile);
    return $data;
}
function kuralEkle(&$kurallar, $icon1P, $icon2P, $expP, $icon3P = null)
{
    $kurallar[count($kurallar) + 1] = [
        "icon1" => $icon1P,
        "icon2" => $icon2P,
        "exp" => $expP,
        "icon3" => $icon3P,
    ];
    return $kurallar;
}

function iconTani($iconParam)
{
    switch ($iconParam) :
        case 'control':
            ?>
            <button class="btn btn-dark px-2 py-0" disabled>
                <i style="font-size: xx-small" class="bi bi-chevron-up  ms-4 "></i>
                <div class=" mt-n1" style="font-size: x-small">control</div>
            </button><?php
            break;
        case 'command':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <i class="bi bi-command medium "></i>
            </button><?php
            break;
        case 'slash':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <i class="bi bi-slash medium "></i>
            </button><?php
            break;
        case 'option':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <i class="bi bi-option medium"></i>
            </button> <?php
            break;
        case 'L':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <span class="medium text-light ">L</span>
            </button> <?php
            break;
        case 'Z':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <span class="medium text-light ">Z</span>
            </button> <?php
            break;
        case 'shift':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <i class="bi bi-shift medium"></i>
            </button> <?php
            break;
        case 'up-arrow':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <i class="bi bi-caret-up-fill"></i>
            </button> <?php
            break;
        case 'down-arrow':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <i class="bi bi-caret-down-fill"></i>
            </button> <?php
            break;
        case 'U':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <span class="medium text-light ">U</span>
            </button> <?php
            break;
        case 'C':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <span class="medium text-light ">C</span>
            </button> <?php
            break;
        case 'V':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <span class="medium text-light ">V</span>
            </button> <?php
            break;
        case 'D':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <span class="medium text-light ">D</span>
            </button> <?php
            break;
        case 'F':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <span class="medium text-light ">F</span>
            </button> <?php
            break;
        case 'R':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <span class="medium text-light ">R</span>
            </button> <?php
            break;
        case 'J':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <span class="medium text-light ">J</span>
            </button> <?php
            break;
        case 'backspace':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <i class="bi bi-backspace-fill"></i>
            </button> <?php
            break;
        case 'mouse':
            ?>
            <button class="btn btn-dark   px-3" disabled>
                <i class="bi bi-mouse2"></i>
            </button> <?php
            break;
        case 'enter':
            ?>
            <button class="btn btn-dark   px-3 py-0" disabled>
                <i style="font-size: small" class="bi bi-arrow-return-left  m-auto "></i>
                <div class=" mt-n1" style="font-size: x-small">enter</div>
            </button> <?php
            break;
        default:
            echo "<br>tanınlanamayan veri</br>";

    endswitch;
}


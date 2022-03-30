<?php

use App\Models\Country;
use App\Models\Mail;
use App\Models\Directory;
use Illuminate\Support\Facades\DB;

if(!function_exists('f_page_title')) {
    function f_page_title(?string $title = null) : string{
        return $title ? $title.' > '.config("app.name") : config("app.name");
    }
}

function f_getCookie($cookieName) {
    return isset($_COOKIE[$cookieName]) ? $_COOKIE[$cookieName] : null;
}

function f_hasCookie($cookieName) {
    return isset($_COOKIE[$cookieName]) ? true : false;
}

function f_setCookie($cookieName, $cookieValue) {
    setcookie($cookieName, $cookieValue, time() + 60 * 60 * 24 * 365 * 2, '/');
}

function f_deleteCookie($cookieName) {
    setcookie($cookieName, "", time() - 3600, '/');
}


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function getAllCountrySelect() {
    $countries = "";

    $data = Country::where("countryId", ">", 1)->orderBy('countryName')->get();

    foreach ($data as $item) {
        $countries = $countries."<option value='".$item["countryName"]."'>".$item["countryName"]."</option>";
    }

    return $countries;
}




function directory_exist($directoryUrl) {
    return (Directory::where('status', 1)->where('directoryUrl', $directoryUrl)->count() === 1) ? true : false;
}

function stringCutter($message, $length = 50) {
    return (strlen($message) > $length) ? substr($message, 0, $length)."..." : $message;
}

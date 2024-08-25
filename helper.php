<?php

const BASE_URL="http://localhost/database-project(ramzi)/";

function asset($file){
    return BASE_URL."/".$file;
}

function url($url){
    return BASE_URL.$url;
}
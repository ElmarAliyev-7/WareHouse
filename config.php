<?php
DEFINE("baseUrl", "http://" . $_SERVER['HTTP_HOST'] . "/WareHouse");
DEFINE("goBack" , isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "");

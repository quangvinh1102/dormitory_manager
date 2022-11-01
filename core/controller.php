<?php
class controller{
    public function base_url($url = '')
    {
        global $domain_block;
        $a = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"];
        if ($a == 'http://localhost') {
            $a = _WEB_ROOT;
        }
        return $a.'/'.$url;
    }

    public function redirect($url)
    {
        header("Location: {$url}");
        exit();
    }
}
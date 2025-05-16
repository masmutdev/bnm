<?php 
// Base URL helper
function base_url($path = '') {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $dir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
    return $protocol . $host . $dir . '/' . ltrim($path, '/');
}

// Menu aktif dinamis berdasarkan URL
function isActive($page) {
  return basename($_SERVER['PHP_SELF']) == $page ? 'active' : '';
}
function isMenuActive(array $pages) {
    return in_array(basename($_SERVER['PHP_SELF']), $pages) ? 'active menu-open' : '';
}
?>
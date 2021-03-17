<?php
function rrmdir($dir)
{
    if (is_dir($dir)) {
        $paths = scandir($dir, SCANDIR_SORT_NONE);
        echo "$paths";
        foreach ($paths as $path) {
            if ($path != "." && $path != "..") {
                if (is_dir($dir . "/" . $path)) {
                    rrmdir($dir . "/" . $path);
                } else {
                    unlink($dir . "/" . $path);
                }
            }
        }
        rmdir($dir);
        return true;
    } else {
        throw new Exception('Каталог не найден');
    }
}


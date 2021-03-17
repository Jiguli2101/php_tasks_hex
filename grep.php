<?php
function grep($needle, $globPattern)
{
    if (empty($needle)) {
        $result = null;
    } else {
        $result = [];
        foreach (glob($globPattern) as $filename) {
            $data = file($filename);
            foreach ($data as $row) {
                if (mb_strpos($row, $needle) !== false) {
                    $result[] = $row;
                }
            }
        }
        if (empty($result)) {
            $result = null;
        }
    }

    return $result;
}

print_r(sizeof(grep('test', './*'))); // 3
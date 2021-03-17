<?php
function cd($current_path, $path)
{
    if (strncmp($path, '/', 1) === 0) {
        $result = $path;
    } else {
        $path_prep = explode('/', $path);
        $step_back = 0;
        $target_directory = [];

        foreach ($path_prep as $element) {
            if ($element === '..') {
                $step_back++;
            } else {
                $target_directory[] = $element;
            }
        }

        $target_directory = array_diff($target_directory, ['.', '..']);
        $target_dir = implode('/', $target_directory);

        $current_path_prep = explode('/', $current_path);

        if ($step_back !== 0) {
            $current_path_prep = array_slice($current_path_prep, 0, $step_back * -1);
        }

        $dir_to_go = implode('/', $current_path_prep);
        $result = $dir_to_go . '/' . $target_dir;
    }
    return $result;
}

print_r(cd('/current/path', '/etc') . "\n");
print_r(cd('/current/path', '.././anotherpath') . "\n");
print_r(cd('/current/path/task_3', '../.././anotherpath/now_here') . "\n");
print_r(cd('/current/path/task_2', '../.././../anotherpath/now_here') . "\n");
print_r(cd('/current/path/task_1', './anotherpath/now_here') . "\n");
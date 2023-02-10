<?php

function findItem($item, $boxes) {
    foreach ($boxes as $box) {
        if (is_array($box)) {
            if (findItem($item, $box)) {
                return true;
            }
        } else {
            if ($box == $item) {
                return true;
            }
        }
    }
    return false;
}

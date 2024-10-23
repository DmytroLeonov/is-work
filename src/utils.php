<?php
function validate_id($id) {
    return filter_var($id, FILTER_VALIDATE_INT);
}

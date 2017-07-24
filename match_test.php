<?php
// The "i" after the pattern delimiter indicates a case-insensitive search
if (!preg_match("/^[a-zA-Z ]*$/", "PHP is the web scripting language of choice.")) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}
?>
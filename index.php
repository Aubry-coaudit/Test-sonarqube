# sonar-test/index.php
<?php
function hello($name) {
    return "Hello, $name!";
}

echo hello("World");


eval($_GET['danger']);


$password = 'admin';

function duplicate() {
    echo "same code";
    echo "same code";
}

function badCode($param) {
    // rien du tout
}
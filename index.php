# sonar-test/index.php
<?php
function hello($name) {
    return "Hello, $name!";
}

echo hello("World");


function duplicate() {
    echo "same code";
    echo "same code";
}

function badCode($param) {
    // rien du tout
}
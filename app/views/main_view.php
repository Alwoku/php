
<?php
if($_COOKIE["login"] == ''){
    header("location: http://localhost/reg");
    exit();
} else {
    header("location: http://localhost/reduction");
    exit();
}

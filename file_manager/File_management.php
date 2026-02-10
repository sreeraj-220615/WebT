<?php

mkdir("newfolder");

copy("sample.txt", "newfolder/copy.txt");

rename("newfolder/copy.txt", "newfolder/newname.txt");

unlink("newfolder/newname.txt");

rmdir("newfolder");

?>

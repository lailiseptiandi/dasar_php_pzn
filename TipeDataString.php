<?php

// single quote
echo 'Nama : ';

echo 'Laili Septiandi';

echo "\n";

// double quote

echo "Nama : ";
echo "Kang\t Jamil\t Tamvan\n";

// heredoc adalah fitur untuk membuat string yang panjang, sehingga
// kita tidak perlu lagi manual melakukan tab, dan enter 
echo <<<laili

Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Assumenda molestiae ea cumque ipsa ducimus? Aut laudantium, 
velit nobis nostrum fugiat assumenda in excepturi id eos at 
accusantium nam pariatur hic aliquid, veniam corporis dicta dignissimos optio, 
totam officia nemo eveniet.

laili;

// nowdoc
echo <<<'laili'

Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Assumenda molestiae ea cumque ipsa ducimus? Aut laudantium, 
velit nobis nostrum fugiat assumenda in excepturi id eos at 
accusantium nam pariatur hic aliquid, veniam corporis dicta dignissimos optio, 
totam officia nemo eveniet.

laili;
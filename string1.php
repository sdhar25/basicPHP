<?php

echo strlen("hello worrld");
echo "<br/>" . strrev("hello world");
echo "</br>" . str_replace("to all","Mohan","Good Morning to all");
echo "</br>" . strpos("hello world","hello");
echo "</br>" . strpos("bjsdh","h");
echo "</br>";
var_dump(strpos("dhgh","q"));


echo "</br>" . trim(" dge ");
echo "</br>" . trim("dgsdsf","f");
echo "</br>" . trim("fsdhfrjs","fjs");
echo "<br>";
echo chr(65);
echo "<br>";
echo substr("My name is dfhsdkjh",0);
echo "<br>";
echo substr("My name is hdfjk",1);
echo "<br>";
echo substr("hello world",11);
echo "<br>";
echo substr("hello world",-1);
echo "<br>";
echo substr("hello world",-4);
echo "<br>";
echo substr("hello world",1,2);
echo "<br>";
echo substr("hello world",2,5);
echo "<br>";
echo substr_replace("Hello World","earth",6);
echo "<br>";
echo substr_replace("Hello world","earth",0);
echo "<br>";
echo substr_replace("Hello world","earth",2);
echo "<br>";
echo substr_replace("Hello World","earth",11);

echo "<br>";
echo substr_replace("Hello world","earth",-1);
echo "<br>";
echo substr_replace("Hello world","earth",-2);
echo "<br>";
echo "<br>";
echo chunk_split("Hello world",2,".");
echo "<br>";
echo "<br>";
print_r (explode(" ","hello it's me"));
echo "<br>";
print_r (explode(",","asd,fds,gftd,gftgft"));
echo "<br>";
print_r(explode(",","dsd,dsd,f,ggrg,g",3));
echo "<br>";
echo "<br>";
echo (implode(" ",array('fgd','fdfg','dfsfs')));
echo "<br>";
echo "<br>";
$arr =array('apple','mango','guava');
echo(implode(" + ",$arr));
echo "<br>";
echo "<br>";
print_r(str_split("hello world"));
echo "<br>";
print_r(str_split("hello world",3));
echo "<br>";
echo strcmp("hello","hello");
echo "<br>";
echo strcmp("Hello","hello");
echo "<br>";
echo strcmp("hello","Hello");
echo "<br>";
echo strcmp("Hello world","Hello w");
echo "<br>";
echo "<br>";
echo stristr("Hello world","World");
echo "<br>";
echo stristr("Hello world","World",true);
echo "<br>";
echo stristr("hello world","e");
echo "<br>";
echo strtolower("GDHFE");
echo "<br>";
echo strtoupper("ngfj");
echo "<br>";
echo substr_count("hello hello hello","hello");
echo "<br>";
echo substr_count("he is llo is hello is hello","is",4);
echo "<br>";
echo substr_count("he is llo is hello is hello","is",4,8);
echo "<br>";
echo substr_count("he is llo is hello is hello","is",4,7);

?>
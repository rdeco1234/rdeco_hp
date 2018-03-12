<?
function django_deploy(){
    exec('/usr/local/bin/git -C /home/rdeco/www/rdeco.sakura.ne.jp/django-example-python2 pull', $op, $rv);
    print_r($op);
    print_r($rv);
    echo " django deploy\n";
}

function homepage_deploy(){
    exec('/usr/local/bin/git -C /home/rdeco/www/rdeco.sakura.ne.jp/htdocs/rdeco_hp pull', $op, $rv);
    print_r($op);
    print_r($rv);
    echo " homepage deploy\n";
}
echo $_GET['function'];
//if (cnt != 1) {
//	return;
//}
if ($_GET['function'] == 'django') {
	django_deploy();
    echo "django OK";
}else if($_GET['function'] == 'homepage'){
   homepage_deploy();
   echo "homepage OK";
}else{
	return;
}
?>

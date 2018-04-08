<?
function django_deploy(){
    exec('/usr/local/bin/git -C /home/rdeco/www/rdeco.sakura.ne.jp/django-example-python2 pull', $op, $rv);
}

function homepage_deploy(){
    exec('/usr/local/bin/git -C /home/rdeco/www/rdeco.sakura.ne.jp/htdocs/rdeco_hp pull', $op, $rv);
    exec('/usr/local/bin/git -C /home/rdeco/www/rdeco.sakura.ne.jp/htdocs/rdeco_hp_dev pull', $op, $rv);
}

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

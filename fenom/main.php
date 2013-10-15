<?

include('../data.inc');
#include('Smarty/libs/Smarty.class.php');

#$tpl = new Smarty();

$fenom_dir = './fenom/src/';
require_once $fenom_dir. 'Fenom.php';
// Dirty autoload
foreach (glob($fenom_dir.'Fenom/*.php') + glob($fenom_dir.'Fenom/Error/*.php') as $f) {
	require_once $f;
}
$tpl = Fenom::factory('.', '/tmp', Fenom::AUTO_ESCAPE/* | Fenom::FORCE_COMPILE | Fenom::DISABLE_CACHE*/);

#			$tpl = $this->fenom->compileCode($params['string'], $name);
#			return $tpl->fetch($replace);

#$tpl->template_dir = './';
#$tpl->compile_dir = './t_cache';
//$tpl->compile_check = true;
#$tpl->compile_check = false;
/*
// root vars
$tpl->assign(
    array (
        'num_total' => $_STAT['TOTAL'],
        'num_online'=> count($_STAT['ONLINE']),
        'poll_title' => $_POLL['TITLE'],
        'poll_question' =>  $_POLL['QUESTION'],
        'poll_button' => $_POLL['BUTTON'],
    )
);

// adverts
shuffle($_ADVERTS);
$tpl->assign('adverts',$_ADVERTS);


// sections
$tpl->assign('sections',$_SECTIONS);

// users
$tpl->assign('users',$_STAT['ONLINE']);

// news
$tpl->assign('news',$_NEWS);

// poll
$tpl->assign('poll_answers',$_POLL['ANSWERS']);

// out
$tpl->display('main.tpl');
*/
?>

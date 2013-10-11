<?

include('../data.inc');
include('Smarty/libs/Smarty.class.php');

$tpl = new Smarty();

$tpl->template_dir = './';
$tpl->compile_dir = './t_cache';
//$tpl->compile_check = true;
$tpl->compile_check = false;

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
$tpl->assign_by_ref('adverts',$_ADVERTS);


// sections
$tpl->assign_by_ref('sections',$_SECTIONS);

// users
$tpl->assign_by_ref('users',$_STAT['ONLINE']);

// news
$tpl->assign_by_ref('news',$_NEWS);

// poll
$tpl->assign_by_ref('poll_answers',$_POLL['ANSWERS']);

// out
$tpl->display('main.tpl');

?>

<?

include('../data.inc');
include('xtemplate.class.php');

$T = new XTemplate('main.tpl');

$T->assign(
    array (
        'num_total' => $_STAT['TOTAL'],
        'num_online'=> count($_STAT['ONLINE']),
        'poll_title' => $_POLL['TITLE'],
        'poll_question' =>  $_POLL['QUESTION'],
        'poll_button' => $_POLL['BUTTON'],
    )
);

// adverts
$random_keys = array_rand($_ADVERTS,3);
foreach ($random_keys as $i) {
    $T->assign(
        array(
            'url' => $_ADVERTS[$i][2],
            'title' => $_ADVERTS[$i][0],
            'body' => $_ADVERTS[$i][1]
        )
    );
    $T->parse('main.adverts');
}

// sections
$n_sections = count($_SECTIONS);
for($i=0; $i<$n_sections; $i++) {
    $idata = & $_SECTIONS[$i];
    $T->assign(
        array(
            'id'   => $idata[0],
            'name' => $idata[1],
        )
    );
    if ($idata[2]) {
        $T->parse('main.sections.rip');
    }
    $T->parse($i%2 ? 'main.sections.odd' : 'main.sections.even');
    $T->parse('main.sections');
}

// users
$users = $_STAT['ONLINE'];
$n_users = count($users);
for($i=0; $i<$n_users; $i++) {
    $T->assign(
         array(
             'id'    => $users[$i][0],
             'name'  => $users[$i][1],
         )
    );
    $T->parse('main.users');
}

// news
$n_news = count($_NEWS);
for($i=0; $i<$n_news; $i++) {
    $idata = & $_NEWS[$i];
    $T->assign(
        array(
            'id'    => $idata[1],
            'time'  => $idata[0],
            'title' => $idata[2],
            'short' => $idata[3],
        )
    );
    $T->parse('main.news');
}

// poll
$n_answers = count($_POLL['ANSWERS']);
for($i=0; $i<$n_answers; $i++) {
    $T->assign(
         array(
             'id'   => $i,
             'answer' => $_POLL['ANSWERS'][$i]
         )
    );
    $T->parse('main.poll_answers');
}

$T->parse('main');
$T->out('main');

?>

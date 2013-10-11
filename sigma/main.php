<?

include('../data.inc');
include('Sigma.php');

//$T = new HTML_Template_Sigma('./', './.cache');
$T = new HTML_Template_Sigma('./');

$T->loadTemplateFile('main.tpl');

$T->setErrorHandling(PEAR_ERROR_DIE);

// root vars
$T->setVariable(
    array (
        'num_total' => $_STAT['TOTAL'],
        'num_online'=> count($_STAT['ONLINE']),
        'poll_title' => $_POLL['TITLE'],
        'poll_question' =>  $_POLL['QUESTION'],
        'poll_button' => $_POLL['BUTTON'],
    )
);

// adverts
$random_keys =  array_rand($_ADVERTS,3);
$T->setCurrentBlock('adverts');
foreach($random_keys as $i) {
    $T->setVariable(
        array(
            'url' => $_ADVERTS[$i][2],
            'title' => $_ADVERTS[$i][0],
            'body' => $_ADVERTS[$i][1]
        )
    );
    $T->parseCurrentBlock();
}

// sections
$n_sections = count($_SECTIONS);
$T->setCurrentBlock('sections');
for($i=0; $i<$n_sections; $i++) {
    $idata = & $_SECTIONS[$i];
    $T->setVariable( 
        array(
            'id'   => $idata[0],
            'name' => $idata[1],
        )
    );
    if ($idata[2]) {
        $T->touchBlock('rip');
    }
    $T->touchBlock($i%2 ? 'odd' : 'even');
    $T->parseCurrentBlock();
}

// users
$users = $_STAT['ONLINE'];
$n_users = count($users);
$T->setCurrentBlock('users');
for($i=0; $i<$n_users; $i++) {
    $T->setVariable(
         array(
             'id'    => $users[$i][0],
             'name'  => $users[$i][1],
         )
    );
    $T->parseCurrentBlock();
}

// news
$n_news = count($_NEWS);
$T->setCurrentBlock('news');
for($i=0; $i<$n_news; $i++) {
    $T->setVariable(
        array(
            'id'    => $_NEWS[$i][1],
            'time'  => $_NEWS[$i][0],
            'title' => $_NEWS[$i][2],
            'short' => $_NEWS[$i][3],
        )
    );
    $T->parseCurrentBlock();
}

// poll
$n_answers = count($_POLL['ANSWERS']);
$T->setCurrentBlock('poll_answers');
for($i=0; $i<$n_answers; $i++) {
    $T->setVariable(
         array(
             'id'   => $i,
             'answer' => $_POLL['ANSWERS'][$i]
         )
    );
    $T->parseCurrentBlock();
}

$T->show();

?>

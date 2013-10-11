<?

include('../data.inc');
$T = new Blitz('main.tpl');

// root vars

$T->set_global(
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
foreach($random_keys as $i) {
    $T->block(
        '/adverts',
		array(
			'url' => $_ADVERTS[$i][2],
            'title' => $_ADVERTS[$i][0],
            'body' => $_ADVERTS[$i][1]
		)
    );
}

// sections
$n_sections = count($_SECTIONS);
for($i=0; $i<$n_sections; $i++) {
	$idata = & $_SECTIONS[$i];
    $T->block(
        '/sections',
		array(
			'id'   => $idata[0],
			'name' => $idata[1],
            'odd'  => $i%2,
            'rip'  => $idata[2]
		)
    );
}

// users
$users = $_STAT['ONLINE'];
$n_users = count($users);
for($i=0; $i<$n_users; $i++) {
     $T->block(
         '/users',
         array(
             'id'    => $users[$i][0],
             'name'  => $users[$i][1],
         )
     );

}

// news
$n_news = count($_NEWS);
for($i=0; $i<$n_news; $i++) {
    $T->block(
        '/news',
        array(
            'id'    => $_NEWS[$i][1],
            'time'  => $_NEWS[$i][0],
            'title' => $_NEWS[$i][2],
            'short' => $_NEWS[$i][3],
        )
    );

}

// poll
$n_answers = count($_POLL['ANSWERS']);
for($i=0; $i<$n_answers; $i++) {
    $T->block(
         '/poll_answers',
         array(
             'id'   => $i,
             'answer' => $_POLL['ANSWERS'][$i]
         )
    );

}

echo $T->parse();

?>

<?

include_once('../data.inc');


$data = array (
        'num_total' => & $_STAT['TOTAL'],
        'num_online'=> count($_STAT['ONLINE']),
        'poll_title' => & $_POLL['TITLE'],
        'poll_question' =>  & $_POLL['QUESTION'],
        'poll_button' => & $_POLL['BUTTON'],
        'adverts' =>  array(),
        'sections' => array(),
        'users' => array(),
        'news' => array(),
        'answers' => array()
);

// adverts
$random_keys =  array_rand($_ADVERTS, 3);
foreach ($random_keys as $i)
{
    $data['adverts'][] = array(
        'url' => $_ADVERTS[$i][2],
        'title' => $_ADVERTS[$i][0],
        'body' => $_ADVERTS[$i][1]
        );

}

// sections
foreach ($_SECTIONS as $i => $r)
{
    $row = array(
            'id' => $r[0],
            'name' => $r[1]);
        if ($r[2])
        {
            $row['rip'] = array(array());
        }
        if ($i % 2)
        {
            $row['odd'] = array(array());
        }
        else
        {
            $row['even'] = array(array());
        }
        $data['sections'][] = $row;
}

// users
foreach ($_STAT['ONLINE'] as $r)
{
    $data['users'][] = array(
        'id' => $r[0],
        'name' => $r[1]);
}

// news
foreach ($_NEWS as $r)
{
    $data['news'][] = array(
        'time' => $r[0],
        'id' => $r[1],
        'title' => $r[2],
        'short' => $r[3]);
}

// poll
foreach ($_POLL['ANSWERS'] as $i => $r)
{
    $data['poll_answers'][] = array(
        'id' => $i,
        'answer' => $r);
}


$T = new Blitz('main.tpl');
$T->set($data);

echo $T->parse();

?>

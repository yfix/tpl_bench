<?php if(!defined('YF_PATH')) exit(); /* date: 2013-10-29 21:38:30 GMT; compile_time: 0.0004; name: lebovski;  */ ?>
<table width=800>
<tr><td width=200>

<table bgcolor=#000000 cellspacing=2 cellpadding=4 border=0 width=100%>
<tr><td bgcolor=#ffffff><h1>BlitzExample</h1></td></tr>
</table>
</td>

<?php $__f_total = count($replace['adverts']); foreach (is_array($replace['adverts']) ? $replace['adverts'] : range(1, (int)$replace['adverts']) as $_k => $_v) {$__f_counter++; ?>
<td width=200 valign=top>
<table bgcolor=#000000 cellspacing=2 cellpadding=2 border=0 width=100%>
<tr><td><font color=#ffffff><b><?php echo $_v['0']; ?></b></font></td></tr>
<tr><td bgcolor=#ffffff><small><a href="<?php echo $_v['2']; ?>"><?php echo $_v['1']; ?></a></small>
</td></tr>
</table>
<?php } ?>

</td>
</tr>

<tr valign=top>
<td width=200>
<table width=100% cellpadding=3>

<?php $__f_total = count($replace['sections']); foreach (is_array($replace['sections']) ? $replace['sections'] : range(1, (int)$replace['sections']) as $_k => $_v) {$__f_counter++; ?>
<tr>
<td bgcolor=<?php if (($__f_counter % 2) == '1') { ?>#eeeeee<?php } else { ?>#dddddd<?php } ?>>
<font color=#ffffff><b>
<a href="/section.phtml?id=<?php echo $_v['0']; ?>"><?php echo $_v['1']; ?></a>
<?php if ($_v['2'] != '') { ?><font color=#999999>R.I.P.</font></font><?php } ?>
</td>
</tr>
<?php } ?>

</table>

<p><b>Users</b>: <?php echo $replace['num_total']; ?><br>

<b>Online</b>: <?php echo $replace['num_online']; ?><br>

<small>
<i>
<?php $__f_total = count($replace['users']); foreach (is_array($replace['users']) ? $replace['users'] : range(1, (int)$replace['users']) as $_k => $_v) {$__f_counter++; ?>
<a href="/user.phtml?id=<?php echo $_v['0']; ?>"><?php echo $_v['1']; ?></a>
<?php } ?>
</i>
</small>

</small>
<p><b><?php echo $replace['poll_title']; ?></b><br>
<small>
<?php echo $replace['poll_question']; ?>
<small><br>
<form method=post>
<table>
<?php $__f_total = count($replace['poll_answers']); foreach (is_array($replace['poll_answers']) ? $replace['poll_answers'] : range(1, (int)$replace['poll_answers']) as $_k => $_v) {$__f_counter++; ?>
<tr valign=center><td><small><input type=radio name=a><?php echo $_v; ?><br></td></tr>
<?php } ?>

<tr><td align=center><input type=submit name="OK" value="<?php echo $replace['poll_button']; ?>"></td></tr>
</table>
</form>
</td>

<td width=400 colspan=3>
<?php $__f_total = count($replace['news']); foreach (is_array($replace['news']) ? $replace['news'] : range(1, (int)$replace['news']) as $_k => $_v) {$__f_counter++; ?>
<b><?php echo $_v['0']; ?> <?php echo $_v['2']; ?></b><br>
<small><?php echo $_v['3']; ?><a href="/news.phtml?id=<?php echo $_v['1']; ?>">[ read full story ]</a></small>
<br>
<?php } ?>

</td>
</tr>
<tr>
<td colspan=4 align=center>
<hr>
<small>
<i>BlitzExample (Copyleft) Alexey A. Rybak, 2005.<br>
Texts are taken from IMDB.com, Memorable Quotes from "The Big Lebowski" (Ethan & Joel Coen, 1998). <br>

You are welcome to send any suggestions or comments to <b>raa@phpclub.net</b> </i>

</td>
</tr>
</table>

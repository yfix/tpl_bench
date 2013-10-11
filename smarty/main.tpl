<table width=800>
<tr><td width=200>

<table bgcolor=#000000 cellspacing=2 cellpadding=4 border=0 width=100%>
<tr><td bgcolor=#ffffff><h1>BlitzExample</h1></td></tr>
</table>
</td>

{section name=i loop=$adverts max=3}
<td width=200 valign=top>
<table bgcolor=#000000 cellspacing=2 cellpadding=2 border=0 width=100%>
<tr><td><font color=#ffffff><b>{$adverts[i].0}</b></font></td></tr>
<tr><td bgcolor=#ffffff><small><a href="{$adverts[i].2}">{$adverts[i].1}</a></small>
</td></tr>
</table>
{/section}

</td>
</tr>

<tr valign=top>
<td width=200>
<table width=100% cellpadding=3>

{section name=i loop=$sections}
<tr>
<td bgcolor={if $smarty.section.i.index is odd}#eeeeee{else}#dddddd{/if}>
<font color=#ffffff><b>
<a href="/section.phtml?id={$sections[i].0}">{$sections[i].1}</a>
{if $sections[i].2 }<font color=#999999>R.I.P.</font></font>{/if}
</td>
</tr>
{/section}

</table>

<p><b>Users</b>: {$num_total}<br>

<b>Online</b>: {$num_online}<br>

<small>
<i>
{foreach from=$users item=i}
<a href="/user.phtml?id={$i.0}">{$i.1}</a>
{/foreach}
</i>
</small>

</small>
<p><b>{$poll_title}</b><br>
<small>
{$poll_question}
<small><br>
<form method=post>
<table>
{foreach item=i from=$poll_answers}
<tr valign=center><td><small><input type=radio name=a>{$i}<br></td></tr>
{/foreach}

<tr><td align=center><input type=submit name="OK" value="{$poll_button}"></td></tr>
</table>
</form>
</td>

<td width=400 colspan=3>
{foreach item=i from=$news}
<b>{$i.0} {$i.2}</b><br>
<small>{$i.3}<a href="/news.phtml?id={$i.1}">[ read full story ]</a></small>
<br>
{/foreach}

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

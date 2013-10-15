<?php /* Smarty version 2.6.10, created on 2005-11-20 12:32:21
         compiled from main.tpl */ ?>
<table width=800>
<tr><td width=200>

<table bgcolor=#000000 cellspacing=2 cellpadding=4 border=0 width=100%>
<tr><td bgcolor=#ffffff><h1>BlitzExample</h1></td></tr>
</table>
</td>

<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['adverts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['max'] = (int)3;
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
<td width=200 valign=top>
<table bgcolor=#000000 cellspacing=2 cellpadding=2 border=0 width=100%>
<tr><td><font color=#ffffff><b><?php echo $this->_tpl_vars['adverts'][$this->_sections['i']['index']]['0']; ?>
</b></font></td></tr>
<tr><td bgcolor=#ffffff><small><a href="<?php echo $this->_tpl_vars['adverts'][$this->_sections['i']['index']]['2']; ?>
"><?php echo $this->_tpl_vars['adverts'][$this->_sections['i']['index']]['1']; ?>
</a></small>
</td></tr>
</table>
<?php endfor; endif; ?>

</td>
</tr>

<tr valign=top>
<td width=200>
<table width=100% cellpadding=3>

<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['sections']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
<tr>
<td bgcolor=<?php if ((1 & $this->_sections['i']['index'])): ?>#eeeeee<?php else: ?>#dddddd<?php endif; ?>>
<font color=#ffffff><b>
<a href="/section.phtml?id=<?php echo $this->_tpl_vars['sections'][$this->_sections['i']['index']]['0']; ?>
"><?php echo $this->_tpl_vars['sections'][$this->_sections['i']['index']]['1']; ?>
</a>
<?php if ($this->_tpl_vars['sections'][$this->_sections['i']['index']]['2']): ?><font color=#999999>R.I.P.</font></font><?php endif; ?>
</td>
</tr>
<?php endfor; endif; ?>

</table>

<p><b>Users</b>: <?php echo $this->_tpl_vars['num_total']; ?>
<br>

<b>Online</b>: <?php echo $this->_tpl_vars['num_online']; ?>
<br>

<small>
<i>
<?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
<a href="/user.phtml?id=<?php echo $this->_tpl_vars['i']['0']; ?>
"><?php echo $this->_tpl_vars['i']['1']; ?>
</a>
<?php endforeach; endif; unset($_from); ?>
</i>
</small>

</small>
<p><b><?php echo $this->_tpl_vars['poll_title']; ?>
</b><br>
<small>
<?php echo $this->_tpl_vars['poll_question']; ?>

<small><br>
<form method=post>
<table>
<?php $_from = $this->_tpl_vars['poll_answers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
<tr valign=center><td><small><input type=radio name=a><?php echo $this->_tpl_vars['i']; ?>
<br></td></tr>
<?php endforeach; endif; unset($_from); ?>

<tr><td align=center><input type=submit name="OK" value="<?php echo $this->_tpl_vars['poll_button']; ?>
"></td></tr>
</table>
</form>
</td>

<td width=400 colspan=3>
<?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
<b><?php echo $this->_tpl_vars['i']['0']; ?>
 <?php echo $this->_tpl_vars['i']['2']; ?>
</b><br>
<small><?php echo $this->_tpl_vars['i']['3']; ?>
<a href="/news.phtml?id=<?php echo $this->_tpl_vars['i']['1']; ?>
">[ read full story ]</a></small>
<br>
<?php endforeach; endif; unset($_from); ?>

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
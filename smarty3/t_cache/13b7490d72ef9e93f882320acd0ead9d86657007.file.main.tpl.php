<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-11 23:54:12
         compiled from "./main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6147280365258657429b9f3-77611635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13b7490d72ef9e93f882320acd0ead9d86657007' => 
    array (
      0 => './main.tpl',
      1 => 1132479139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6147280365258657429b9f3-77611635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adverts' => 0,
    'sections' => 0,
    'num_total' => 0,
    'num_online' => 0,
    'users' => 0,
    'i' => 0,
    'poll_title' => 0,
    'poll_question' => 0,
    'poll_answers' => 0,
    'poll_button' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525865743818c0_51624582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525865743818c0_51624582')) {function content_525865743818c0_51624582($_smarty_tpl) {?><table width=800>
<tr><td width=200>

<table bgcolor=#000000 cellspacing=2 cellpadding=4 border=0 width=100%<?php ?>>
<tr><td bgcolor=#ffffff><h1>BlitzExample</h1></td></tr>
</table>
</td>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['adverts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = (int) 3;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
<td width=200 valign=top>
<table bgcolor=#000000 cellspacing=2 cellpadding=2 border=0 width=100%<?php ?>>
<tr><td><font color=#ffffff><b><?php echo $_smarty_tpl->tpl_vars['adverts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][0];?>
</b></font></td></tr>
<tr><td bgcolor=#ffffff><small><a href="<?php echo $_smarty_tpl->tpl_vars['adverts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][2];?>
"><?php echo $_smarty_tpl->tpl_vars['adverts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][1];?>
</a></small>
</td></tr>
</table>
<?php endfor; endif; ?>

</td>
</tr>

<tr valign=top>
<td width=200>
<table width=100% cellpadding=3>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sections']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
<tr>
<td bgcolor=<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'])) {?>#eeeeee<?php } else { ?>#dddddd<?php }?>>
<font color=#ffffff><b>
<a href="/section.phtml?id=<?php echo $_smarty_tpl->tpl_vars['sections']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][0];?>
"><?php echo $_smarty_tpl->tpl_vars['sections']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][1];?>
</a>
<?php if ($_smarty_tpl->tpl_vars['sections']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][2]) {?><font color=#999999>R.I.P.</font></font><?php }?>
</td>
</tr>
<?php endfor; endif; ?>

</table>

<p><b>Users</b>: <?php echo $_smarty_tpl->tpl_vars['num_total']->value;?>
<br>

<b>Online</b>: <?php echo $_smarty_tpl->tpl_vars['num_online']->value;?>
<br>

<small>
<i>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
<a href="/user.phtml?id=<?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</a>
<?php } ?>
</i>
</small>

</small>
<p><b><?php echo $_smarty_tpl->tpl_vars['poll_title']->value;?>
</b><br>
<small>
<?php echo $_smarty_tpl->tpl_vars['poll_question']->value;?>

<small><br>
<form method=post>
<table>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['poll_answers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
<tr valign=center><td><small><input type=radio name=a><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<br></td></tr>
<?php } ?>

<tr><td align=center><input type=submit name="OK" value="<?php echo $_smarty_tpl->tpl_vars['poll_button']->value;?>
"></td></tr>
</table>
</form>
</td>

<td width=400 colspan=3>
<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
<b><?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value[2];?>
</b><br>
<small><?php echo $_smarty_tpl->tpl_vars['i']->value[3];?>
<a href="/news.phtml?id=<?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
">[ read full story ]</a></small>
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
<?php }} ?>

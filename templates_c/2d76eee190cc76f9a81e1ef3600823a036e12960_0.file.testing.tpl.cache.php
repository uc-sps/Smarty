<?php
/* Smarty version 3.1.44, created on 2022-11-10 10:44:47
  from '/Applications/XAMPP/xamppfiles/htdocs/smarty/ucertifyAssignment /template/testing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_636cc80f64fe10_61487450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d76eee190cc76f9a81e1ef3600823a036e12960' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/smarty/ucertifyAssignment /template/testing.tpl',
      1 => 1668058873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636cc80f64fe10_61487450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => '/Applications/XAMPP/xamppfiles/htdocs/smarty/ucertifyAssignment /templates_c/2d76eee190cc76f9a81e1ef3600823a036e12960_0.file.testing.tpl.cache.php',
    'uid' => '2d76eee190cc76f9a81e1ef3600823a036e12960',
    'call_name' => 'smarty_template_function_menu_173099734636cc80f4cefc2_51460992',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/function.fetch.php','function'=>'smarty_function_fetch',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),4=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),5=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),6=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/modifier.spacify.php','function'=>'smarty_modifier_spacify',),7=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),8=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),9=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/function.html_image.php','function'=>'smarty_function_html_image',),10=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),11=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),12=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/function.html_radios.php','function'=>'smarty_function_html_radios',),13=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/function.html_select_date.php','function'=>'smarty_function_html_select_date',),14=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/smarty/libs/plugins/function.html_select_time.php','function'=>'smarty_function_html_select_time',),));
$_smarty_tpl->compiled->nocache_hash = '173099734636cc80f4cefc2_51460992';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
    <style>
        .info {
            border: 3px outset red;
            background-color: lightblue;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="info">
        <?php echo smarty_function_fetch(array('file'=>'https://www.google.co.in/'),$_smarty_tpl);?>

    </div>

    
    <h1 style=" color: red; text-align: center; ">*** <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
 ***</h1>
    
    <h3>*** Printing array using key value pair ***</h3>

    <div class="info">
        <p>UserID-<?php echo $_smarty_tpl->tpl_vars['ContactInfo1']->value['UserID'];?>
 </p>
        <p>Email id -<?php echo $_smarty_tpl->tpl_vars['ContactInfo1']->value['email'];?>
</p>
        <p>Phone No-<?php echo $_smarty_tpl->tpl_vars['ContactInfo1']->value['phone']['ph1'];?>
 , <?php echo $_smarty_tpl->tpl_vars['ContactInfo1']->value['phone']['ph2'];?>
</p>

        </ul>
        </p>
    </div>

    <h3>*** Printing array using index ***</h3>

    <div class="info">
        <p>UserID-<?php echo $_smarty_tpl->tpl_vars['ContactInfo2']->value[0];?>

        <p>
        <p>Email id -<?php echo $_smarty_tpl->tpl_vars['ContactInfo2']->value[1];?>
</p>
        <p>Phone No-<?php echo $_smarty_tpl->tpl_vars['ContactInfo2']->value[2][0];?>
 , <?php echo $_smarty_tpl->tpl_vars['ContactInfo2']->value[2][1];?>
</p>

        </p>
    </div>

    <h3>*** Variables loaded from config files ***</h3>
    <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'config/foo.conf', null, 0);
?>


    <div class="info">
        <table align="center" border="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tableBorderSize');?>
" bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tableBgColor');?>
">
            <tr bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rowBgColor');?>
">
                <td>First</td>
                <td>Last</td>
                <td>Address</td>
            </tr>
        </table>
    </div>

    <h3>*** Attribute ***</h3>

    <div class="info">
        <p>*** Substring ***</p>
        <?php $_smarty_tpl->_assignInScope('foo', substr($_smarty_tpl->tpl_vars['Name']->value,6,6));?>
        <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
 <br>
        <p>*** String length ***</p>
        <?php $_smarty_tpl->_assignInScope('foo', strlen($_smarty_tpl->tpl_vars['Name']->value));?>
        <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
 <br>
    </div>

    <h3>*** Counter ***</h3>

    <div class="info">
        <?php echo smarty_function_counter(array('start'=>10,'skip'=>20),$_smarty_tpl);?>
 <br>
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 <br>
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 <br>
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 <br>
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 <br>
    </div>

    <h3>*** Printing table with smarty variables using function ***</h3>

    



    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array(), false);?>

    <div class="info">
        <button onclick="p()">Click me</button>
    </div>


    <h1 style="text-align:center;">*** Variable modifier ***</h1>
    <br>


    <div class="info">

        <p>*** Capitalizaation ***</p>

        <?php echo $_smarty_tpl->tpl_vars['book2']->value;?>
 <br>
        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['book2']->value);?>
 <br>
        <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['book2']->value,true);?>
 <br>

        <p>*** lover ***</p>

        <?php echo $_smarty_tpl->tpl_vars['book1']->value;?>
 <br>
        <?php echo mb_strtolower($_smarty_tpl->tpl_vars['book1']->value, 'UTF-8');?>
 <br>

        <p>*** now ***</p>

        <?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>


        <p>*** UPPER ***</p>

        <?php echo $_smarty_tpl->tpl_vars['book2']->value;?>
 <br>
        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['book2']->value, 'UTF-8');?>
 <br>

        <p>*** Concatination ***</p>

        <?php echo ($_smarty_tpl->tpl_vars['book1']->value).(" is my favourite book.");?>


        <p>*** count_characters ***</p>

        <?php echo $_smarty_tpl->tpl_vars['book1']->value;?>
 <br>
        <?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['book1']->value, $tmp);?>
 <br>
        <?php echo mb_strlen($_smarty_tpl->tpl_vars['book1']->value, 'UTF-8');?>


        <p>*** count_words ***</p>

        <?php echo $_smarty_tpl->tpl_vars['book1']->value;?>
 <br>
        <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['book1']->value, $tmp);?>
 <br>

        <p>*** count_paragraphs ***</p>

        <?php echo $_smarty_tpl->tpl_vars['Passage']->value;?>
 <br>
        <?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['Passage']->value, $tmp)+1);?>
 <br>

        <p>*** count_sentences ***</p>

        <?php echo $_smarty_tpl->tpl_vars['Passage']->value;?>
 <br>
        <?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['Passage']->value, $tmp);?>
 <br>

        <p>*** Default ***</p>

        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['Passage']->value)===null||$tmp==='' ? "Not avilable " : $tmp);?>
 <br><br>
        <p>Employee ID - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['employeeID']->value)===null||$tmp==='' ? "will update soon" : $tmp);?>
 <br>

        <p>*** count_sentences ***</p>

        <?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['Passage']->value, $tmp);?>
 <br>

        <p>*** replace ***</p>

        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['Passage']->value,"Smarty","The Smarty");?>


        <p>*** escape ***</p>

                <a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['EmailAddress']->value, 'hex');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['EmailAddress']->value, 'mail');?>
</a>

        <p>*** spacify ***</p>

        <?php echo $_smarty_tpl->tpl_vars['book2']->value;?>
 <br>
        <?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['book2']->value);?>
 <br>
        <?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['book2']->value,"^^");?>
 <br>

        <p>*** Trancate ***</p>
        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['Passage']->value,30);?>
 <br>
        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['Passage']->value,30,'..',true,'ture');?>
 <br>
        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['Passage']->value,30,"----");?>
 <br>

        <p>*** Combining modifier***</p>
        <?php echo smarty_modifier_spacify(mb_strtoupper($_smarty_tpl->tpl_vars['book2']->value, 'UTF-8'),"^^");?>
 <br>

    </div>


    <?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['book2']->value,5,"\n",false);?>


    <h1 style="text-align:center;">*** Build in function ***</h1>
    <div class="info">
        <p>*** Appending element to array ***</p>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['ContactInfo1']) ? $_smarty_tpl->tpl_vars['ContactInfo1']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["Address"] = "Meerut";
$_smarty_tpl->_assignInScope('ContactInfo1', $_tmp_array);?>

        <?php echo $_smarty_tpl->tpl_vars['ContactInfo1']->value['Address'];?>
 <br>

        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['ContactInfo2']) ? $_smarty_tpl->tpl_vars['ContactInfo2']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["Address"] = "Noida";
$_smarty_tpl->_assignInScope('ContactInfo2', $_tmp_array);?>

        <?php echo $_smarty_tpl->tpl_vars['ContactInfo2']->value['Address'];?>
 <br>

        <p>*** Capture ***</p>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, "A");?>Surya<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        My name is
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, "A");?>Pratap Singh<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['A']->value, 'text');
$_smarty_tpl->tpl_vars['text']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->do_else = false;
echo $_smarty_tpl->tpl_vars['text']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <p>*** for ***</p>
        <ul>
            <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
            <li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
            <?php }
}
?>
        </ul>

        <p>*** forelse ***</p>

        <?php $_smarty_tpl->_assignInScope('start', 10);?>
        <?php $_smarty_tpl->_assignInScope('to', 5);?>

        <ul>
            <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - ($_smarty_tpl->tpl_vars['start']->value) : $_smarty_tpl->tpl_vars['start']->value-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = $_smarty_tpl->tpl_vars['start']->value, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
            <li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
            <?php }} else { ?>
            no iteration
            <?php }
?>
        </ul>

        <p>*** Foreach without key value ***</p>

        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ContactInfo2']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$__foreach_value_1_saved = $_smarty_tpl->tpl_vars['value'];
?>
            <li><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
            <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

        <p>*** Foreach with key value ***</p>

        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ContactInfo1']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$__foreach_value_2_saved = $_smarty_tpl->tpl_vars['value'];
?>
            <li><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
 : <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
            <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

        <p>*** Foreach with nested item ***</p>

        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ContactInfo1']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$__foreach_value_3_saved = $_smarty_tpl->tpl_vars['value'];
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
$__foreach_data_4_saved = $_smarty_tpl->tpl_vars['data'];
?>
            <li><?php echo $_smarty_tpl->tpl_vars['data']->key;?>
 : <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</li>
            <?php
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </ul>

        <p>*** iterator ***</p>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ContactInfo2']->value, 'name');
$_smarty_tpl->tpl_vars['name']->iteration = 0;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->iteration++;
$__foreach_name_5_saved = $_smarty_tpl->tpl_vars['name'];
?>
        <?php if (!($_smarty_tpl->tpl_vars['name']->iteration % 4)) {?>
        <b><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</b> <br>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <br>
        <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <p>*** index ***</p>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ContactInfo2']->value, 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
$_smarty_tpl->tpl_vars['i']->index++;
$__foreach_i_6_saved = $_smarty_tpl->tpl_vars['i'];
?>
        <?php if ($_smarty_tpl->tpl_vars['i']->index == 3) {?>
                nbsp; <br>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 <br>
        <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_6_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <p>*** iteration example: is even/odd by ***</p>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'name');
$_smarty_tpl->tpl_vars['name']->iteration = 0;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->iteration++;
$__foreach_name_7_saved = $_smarty_tpl->tpl_vars['name'];
?>
        <?php if (!(1 & $_smarty_tpl->tpl_vars['name']->iteration / 3)) {?>
        <span style="color: #000"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span> <br>
        <?php } else { ?>
        <span style="color: magenta"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span> <br>
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_7_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <p>*** No of items in an array ***</p>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'item', true);
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_8_saved = $_smarty_tpl->tpl_vars['item'];
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->last) {?>
        <?php echo $_smarty_tpl->tpl_vars['item']->total;?>

        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_8_saved;
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
        ... no items to loop ...
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>

    <h1 style="text-align:center;">*** Custom Function ***</h1>
    <div class="info">

        <p>*** Counter ***</p>

        <?php echo smarty_function_counter(array('start'=>10,'skip'=>20),$_smarty_tpl);?>
 <br>
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 <br>
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 <br>
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 <br>
        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 <br>

        <p>*** Evaluate ***</p>
        <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'intro'), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>

        <p>*** html_image ***</p>
        <?php echo smarty_function_html_image(array('file'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Elon_Musk_Royal_Society_%28crop2%29.jpg/440px-Elon_Musk_Royal_Society_%28crop2%29.jpg'),$_smarty_tpl);?>


        <p>*** html_checkboxes ***</p>

        <?php echo smarty_function_html_checkboxes(array('name'=>'id','values'=>$_smarty_tpl->tpl_vars['cust_ids']->value,'output'=>$_smarty_tpl->tpl_vars['cust_names']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);?>



        <p>*** html_option ***</p>

        <?php echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['cust_names']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);?>


        <p>*** html_radios ***</p>

        <?php echo smarty_function_html_radios(array('name'=>'id','values'=>$_smarty_tpl->tpl_vars['cust_names']->value,'output'=>$_smarty_tpl->tpl_vars['cust_names']->value,'separator'=>'<br />'),$_smarty_tpl);?>


        <p>*** html_select_date ***</p>

        <?php echo smarty_function_html_select_date(array('prefix'=>'StartDate','time'=>$_smarty_tpl->tpl_vars['time']->value,'start_year'=>'-10','end_year'=>'+1','display_days'=>true),$_smarty_tpl);?>




        <p>*** html_select_time ***</p>

        <?php echo smarty_function_html_select_time(array('use_24_hours'=>true),$_smarty_tpl);?>



        <p>*** mailto ***</p>

        <a href="mailto:spsingh30042002@gmail.com" >Sent mail</a>


        



    </div>




</body>
<?php echo '<script'; ?>
>
    function p() {
        alert("surya");
    }
<?php echo '</script'; ?>
>

</html><?php }
/* smarty_template_function_menu_173099734636cc80f4cefc2_51460992 */
if (!function_exists('smarty_template_function_menu_173099734636cc80f4cefc2_51460992')) {
function smarty_template_function_menu_173099734636cc80f4cefc2_51460992(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <ul class="info">
        <li><?php echo $_smarty_tpl->tpl_vars['book1']->value;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['book2']->value;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['book3']->value;?>
</li>

    </ul>
    <?php
}}
/*/ smarty_template_function_menu_173099734636cc80f4cefc2_51460992 */
}

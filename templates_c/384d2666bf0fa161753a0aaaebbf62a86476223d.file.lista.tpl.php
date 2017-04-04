<?php /* Smarty version Smarty-3.1.14, created on 2017-04-04 02:12:09
         compiled from ".\templates\lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1631358d070a10e6144-79946523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '384d2666bf0fa161753a0aaaebbf62a86476223d' => 
    array (
      0 => '.\\templates\\lista.tpl',
      1 => 1491264719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1631358d070a10e6144-79946523',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58d070a10e98d3_35514616',
  'variables' => 
  array (
    'piezas' => 0,
    'pieza' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d070a10e98d3_35514616')) {function content_58d070a10e98d3_35514616($_smarty_tpl) {?>
<div class="table-responsive" >
        <table class="table table-striped">
          <thead>
            <tr>          
              <th>Codigo</th>
              <th>Descripcion</th>             
              <th>Cantidad</th>
              <th>Campaña</th>
              <th></th>
            </tr>
          </thead>
          
          <tbody>         
            <?php  $_smarty_tpl->tpl_vars['pieza'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pieza']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['piezas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pieza']->key => $_smarty_tpl->tpl_vars['pieza']->value){
$_smarty_tpl->tpl_vars['pieza']->_loop = true;
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['pieza']->value['codigo'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['pieza']->value['descripcion'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['pieza']->value['cantidad'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['pieza']->value['codigoc'];?>
</td>
              <td><a href="index.php?action=ver_pieza&idpieza='<?php echo $_smarty_tpl->tpl_vars['pieza']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
'"><i class="fa fa-info fa-2x" aria-hidden="true"></i></a></td>
            </tr>
            <?php } ?>  
            
          </tbody>
        </table>
 </div>
<?php }} ?>
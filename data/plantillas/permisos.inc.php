<?php
/****************************************************************************
* data/plantillas/permisos.inc.php
*
* plantilla para la visualizaci�n de la acci�n de cambio de permisos a ficheros
* y directorios
*

PHPfileNavigator versi�n 2.0.0

Copyright (C) 2004-2005 Lito <lito@eordes.com>

http://phpfilenavigator.litoweb.net/

Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los
t�rminos de la Licencia P�blica General de GNU seg�n es publicada por la Free
Software Foundation, bien de la versi�n 2 de dicha Licencia o bien (seg�n su
elecci�n) de cualquier versi�n posterior. 

Este programa se distribuye con la esperanza de que sea �til, pero SIN NINGUNA
GARANT�A, incluso sin la garant�a MERCANTIL impl�cita o sin garantizar la
CONVENIENCIA PARA UN PROP�SITO PARTICULAR. V�ase la Licencia P�blica General de
GNU para m�s detalles. 

Deber�a haber recibido una copia de la Licencia P�blica General junto con este
programa. Si no ha sido as�, escriba a la Free Software Foundation, Inc., en
675 Mass Ave, Cambridge, MA 02139, EEUU. 
*******************************************************************************/

defined('OK') && defined('ACCION') or die();
?>

		<div class="bloque_info"><h1><?php echo $PFN_conf->t('accion').' &raquo; '.$PFN_conf->t('permisos'); ?></h1></div>
		<form action="accion.php?<?php echo PFN_cambia_url('accion','permisos',false); ?>" method="post" onsubmit="return submitonce();">
		<fieldset>
		<input type="hidden" name="executa" value="true" />
		<input type="hidden" name="cal" value="<?php echo $cal; ?>" />

		<table class="tabla_info" summary="" style="text-align: center;">
			<tr>
				<th><?php echo $PFN_conf->t('escritura'); ?></th>
				<th><?php echo $PFN_conf->t('execucion'); ?></th>
				<th><?php echo $PFN_conf->t('lectura'); ?></th>
				<th>&nbsp;</th>
			</tr>
			<tr>
				<td><input type="checkbox" name="p200" value="200" <?php echo ($actuales & 0x0080)?'checked="checked"':''; ?> class="checkbox" /></td>
				<td><input type="checkbox" name="p100" value="100" <?php echo ($actuales & 0x0040)?'checked="checked"':''; ?> class="checkbox" /></td>
				<td><input type="checkbox" name="p400" value="400" <?php echo ($actuales & 0x0100)?'checked="checked"':''; ?> class="checkbox" /></td>
				<th><?php echo $PFN_conf->t('propietario'); ?></th>
			</tr>
			<tr>
				<td><input type="checkbox" name="p020" value="20" <?php echo ($actuales & 0x0010)?'checked="checked"':''; ?> class="checkbox" /></td>
				<td><input type="checkbox" name="p010" value="10" <?php echo ($actuales & 0x0008)?'checked="checked"':''; ?> class="checkbox" /></td>
				<td><input type="checkbox" name="p040" value="40" <?php echo ($actuales & 0x0020)?'checked="checked"':''; ?> class="checkbox" /></td>
				<th><?php echo $PFN_conf->t('grupo'); ?></th>
			</tr>
			<tr>
				<td><input type="checkbox" name="p002" value="2" <?php echo ($actuales & 0x0002)?(($perms & 0x0400)?'':'checked="checked"'):''; ?> class="checkbox" /></td>
				<td><input type="checkbox" name="p001" value="1" <?php echo ($actuales & 0x0001)?(($perms & 0x0200)?'':'checked="checked"'):''; ?> class="checkbox" /></td>
				<td><input type="checkbox" name="p004" value="4" <?php echo ($actuales & 0x0004)?(($perms & 0x0800)?'':'checked="checked"'):''; ?> class="checkbox" /></td>
				<th><?php echo $PFN_conf->t('todos'); ?></th>
			</tr>
		</table>
		<div style="text-align: center; margin-top: 10px;">
			<input type="reset" value=" <?php echo $PFN_conf->t('cancelar'); ?> " class="boton" onclick="enlace('navega.php?<?php echo PFN_get_url(false); ?>');" />
			<input type="submit" value=" <?php echo $PFN_conf->t('aceptar'); ?> " class="boton" style="margin-left: 40px;" />
		</div>
		</fieldset>
		</form>
	</div>
</div>

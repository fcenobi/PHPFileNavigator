<?php
/****************************************************************************
* xestion/grupos/index.inc.php
*
* Comprobaciones antes de modificar o a�adir un grupo
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

defined('OK') && defined('XESTION') or die();

$Fconfs = array();
$cnt_usuarios = 0;

$PFN_usuarios->init('configuracions');

for (; $PFN_usuarios->mais(); $PFN_usuarios->seguinte()) {
	if ($PFN_usuarios->get('vale') == 1) {
		$Fconfs[$PFN_usuarios->get('id')] = $PFN_usuarios->get('conf');
	}
}

$PFN_usuarios->init('grupo', $id_grupo);
?>
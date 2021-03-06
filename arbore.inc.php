<?php
/****************************************************************************
* arbore.inc.php
*
* Carga lo necesario para la visualizaci�n del �rbol de directorios
*

PHPfileNavigator versi�n 1.6.7

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

defined('OK') or die();

include_once ($PFN_paths['include'].'class_arbore.php');
include_once ($PFN_paths['include'].'class_imaxes.php');

$PFN_imaxes = new PFN_Imaxes($PFN_conf);
$PFN_arbore = new PFN_Arbore($PFN_conf);

$PFN_arbore->imaxes($PFN_imaxes);
$PFN_arbore->carga_arbore($PFN_conf->g('raiz','path'), './', $PFN_vars->get('completo'));

include ($PFN_paths['plantillas'].'arbore.inc.php');
?>

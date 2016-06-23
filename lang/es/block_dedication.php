<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

// Basic plugin strings.
$string['pluginname'] = 'Dedicación al curso';
$string['pagetitle'] = '{$a}: course dedication';

// Capabilites.
$string['dedication:addinstance'] = 'Permite añadir el bloque de Dedicación al curso';
$string['dedication:myaddinstance'] = 'Permite añadir el bloque de Dedicación al curso';
$string['dedication:use'] = 'Permite usar el bloque de Dedicación al curso';

// Block content.
$string['dedication_estimation'] = 'Tu tiempo de dedicación estimado es';
$string['access_button'] = 'Herramienta de Dedicación';
$string['access_info'] = 'Sólo para profesores:';

// Block form.
$string['show_dedication'] = 'Mostrar el tiempo de dedicación a los estudiantes';
$string['show_dedication_help'] = 'Por defecto, el tiempo de dedicación sólo puede ser visto por profesores. Esta parámetro permite a los estudiantes a ver sus tiempos de dedicación en el bloque.';

// Tool form.
$string['form'] = 'Configuración de Dedicación al curso';
$string['form_help'] = 'Este tiempo es estimado en base a los conceptos de sesión y duración de la sesión aplicada a las entradas del registro.

<strong>Click:</strong> Cada vez que el usuario accede a una página se almacena una entrada en el registro de Moodle.

<strong>Sesión:</strong> Conjunto de 2 o más clicks consecutivos en los que el tiempo transcurrido entre cada par de clicks consecutivos no sobrepasa el tiempo máximo establecido.

<strong>Duración de la sesión:</strong> Tiempo transcurrido entre el primer click y el último click de la sesión.

<strong>Tiempo de dedicación:</strong> La suma de todas las duraciones de sesión de un usuario.';
$string['form_text'] = 'Seleccione el rango de fechas y el tiempo máximo entre clicks de la misma sesión.';
$string['mintime'] = 'Inicio del periodo';
$string['mintime_help'] = 'Considera sólo las entradas del registro después de ésta fecha';
$string['maxtime'] = 'Fin del periodo';
$string['maxtime_help'] = 'Considera sólo las entradas del registro que acaban antes de ésta fecha';
$string['limit'] = 'Límite de tiempo entre clicks (en minutos)';
$string['limit_help'] = 'El límite entre clicks define si dos clicks forman parte de la misma sesión o no';
$string['submit'] = 'Calcular';

// Rows.
$string['dedicationrow'] = 'Dedicación al curso';
$string['connectionratiorow'] = 'Conexiones por día';
$string['sincerow'] = 'Desde';
$string['torow'] = 'Hasta';
$string['perioddiffrow'] = 'Tiempo transcurrido';

// Headers.
$string['period'] = 'Periodo desde <em>{$a->mintime}</em> hasta <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Tiempo transcurrido:</strong>  {$a}';
$string['totaldedication'] = '<strong>Dedicación total:</strong> {$a}';
$string['meandedication'] = '<strong>Dedicación media:</strong> {$a}';

// Actions.
// All action.
$string['dedicationall'] = 'Dedicación de todos los miembros del curso. Haz click sobre cualquier nombre para ver el detalle de la dedicación al curso del usuario.';
// Group action.
$string['dedicationgroup'] = 'Dedicación de todos los miembros del grupo <em>{$a}</em>. Elige cualquier miembro para ver el detalle de la dedicación al curso del usuario.';
// User action.
$string['userdedication'] = 'Dedicación al curso detallada de <em>{$a}</em>.';
$string['sessionstart'] = 'Inicio de la sesión';
$string['sessionduration'] = 'Duración';

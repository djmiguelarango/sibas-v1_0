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

/**
 * Strings for component 'enrol_manual', language 'es', branch 'MOODLE_20_STABLE'
 *
 * @package   enrol_manual
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Asignar rol';
$string['defaultperiod'] = 'Periodo de matriculación por defecto';
$string['defaultperiod_desc'] = 'Tiempo por defecto (en segundos) del periodo de matriculación por defecto.';
$string['defaultperiod_help'] = 'Periodo de tiempo predeterminado durante el que el la matrícula es válida, a partir del momento en que se inscribe el usuario. Si está desactivado, la duración de la inscripción será, por defecto, ilimitada.';
$string['enrolledincourserole'] = 'Matriculado en "{$a->course}" as "{$a->role}"';
$string['enrolusers'] = 'Matricular usuarios';
$string['manual:config'] = 'Configurar instancias de la matriculaciñon manual';
$string['manual:enrol'] = 'Matricular usuarios';
$string['manual:manage'] = 'Gestión de matriculas de usuario';
$string['manual:unenrol'] = 'Dar de baja usuarios del curso';
$string['manual:unenrolself'] = 'Darse de baja del curso';
$string['pluginname'] = 'Matriculacion manual';
$string['pluginname_desc'] = 'La extensión para la matriculación manual permite que los usuarios sean  matriculados de forma manual por un usuario con los permisos adecuados, como un profesor, mediante un enlace situado en la configuración de la administración del curso. La extensión debe normalmente estar activada, ya que algunas extensions de inscripción, tales como la matrícula libre, así lo requieran.';
$string['status'] = 'Habilita matriculación manual';
$string['status_desc'] = 'Permitir el acceso de los usuarios matriculados internamente. Esta opción debe estar hailitada en la mayoría de los casos.';
$string['statusdisabled'] = 'Deshabilitado';
$string['statusenabled'] = 'Habilitado';
$string['status_help'] = 'Esta configuración determina si los usuarios pueden ser matriculados de forma manual por un usuario con los permisos adecuados, como un profesor, mediante un enlace situado en la configuración de la administración del curso.';
$string['unenrolselfconfirm'] = '¿Desea realmente darse de baja del curso "{$a}" ?';
$string['unenroluser'] = '¿Desea realmente dar de baja la matrícula del usuario "{$a->user}" del curso "{$a->course}"';
$string['unenrolusers'] = 'Dar de baja usuarios';
$string['wscannotenrol'] = 'Con esta estensión (plugin) no se puede matricular manualmente un uusario en el curso id = {$a->courseid}';
$string['wsnoinstance'] = 'La extensión (plugin) para la matriculación manual no existe o está deshabilitada para el curso (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Usted no tiene permisos para asignar el rol ({$a->roleid}) a este usuario ({$a->userid}) en este curso ({$a->courseid}).';

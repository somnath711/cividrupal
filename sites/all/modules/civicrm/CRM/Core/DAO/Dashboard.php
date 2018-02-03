<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Core/Dashboard.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:3e0b2bd066d83876c81d84a574f29fe1)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Core_DAO_Dashboard constructor.
 */
class CRM_Core_DAO_Dashboard extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_dashboard';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = false;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Domain for dashboard
   *
   * @var int unsigned
   */
  public $domain_id;
  /**
   * Internal name of dashlet.
   *
   * @var string
   */
  public $name;
  /**
   * dashlet title
   *
   * @var string
   */
  public $label;
  /**
   * url in case of external dashlet
   *
   * @var string
   */
  public $url;
  /**
   * Permission for the dashlet
   *
   * @var string
   */
  public $permission;
  /**
   * Permission Operator
   *
   * @var string
   */
  public $permission_operator;
  /**
   * fullscreen url for dashlet
   *
   * @var string
   */
  public $fullscreen_url;
  /**
   * Is this dashlet active?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Is this dashlet reserved?
   *
   * @var boolean
   */
  public $is_reserved;
  /**
   * Number of minutes to cache dashlet content in browser localStorage.
   *
   * @var int unsigned
   */
  public $cache_minutes;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_dashboard';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'domain_id', 'civicrm_domain', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('DashletID') ,
          'required' => true,
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
        ) ,
        'domain_id' => array(
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Dashlet Domain') ,
          'description' => 'Domain for dashboard',
          'required' => true,
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => array(
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Dashlet Name') ,
          'description' => 'Internal name of dashlet.',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
        ) ,
        'label' => array(
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Dashlet Title') ,
          'description' => 'dashlet title',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
        ) ,
        'url' => array(
          'name' => 'url',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Dashlet URL') ,
          'description' => 'url in case of external dashlet',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
        ) ,
        'permission' => array(
          'name' => 'permission',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Dashlet Permission') ,
          'description' => 'Permission for the dashlet',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
        ) ,
        'permission_operator' => array(
          'name' => 'permission_operator',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Dashlet Permission Operator') ,
          'description' => 'Permission Operator',
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
        ) ,
        'fullscreen_url' => array(
          'name' => 'fullscreen_url',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Fullscreen URL') ,
          'description' => 'fullscreen url for dashlet',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Dashlet Active?') ,
          'description' => 'Is this dashlet active?',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
        ) ,
        'is_reserved' => array(
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Dashlet Reserved?') ,
          'description' => 'Is this dashlet reserved?',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
        ) ,
        'cache_minutes' => array(
          'name' => 'cache_minutes',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Cache Minutes') ,
          'description' => 'Number of minutes to cache dashlet content in browser localStorage.',
          'required' => true,
          'default' => '60',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'dashboard', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'dashboard', $prefix, array());
    return $r;
  }
}

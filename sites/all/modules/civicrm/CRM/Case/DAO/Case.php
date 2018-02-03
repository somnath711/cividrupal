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
 * Generated from xml/schema/CRM/Case/Case.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:4e1de0ce877b15b7ab3f394dad97c5ac)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Case_DAO_Case constructor.
 */
class CRM_Case_DAO_Case extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_case';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Unique Case ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to civicrm_case_type.id
   *
   * @var int unsigned
   */
  public $case_type_id;
  /**
   * Short name of the case.
   *
   * @var string
   */
  public $subject;
  /**
   * Date on which given case starts.
   *
   * @var date
   */
  public $start_date;
  /**
   * Date on which given case ends.
   *
   * @var date
   */
  public $end_date;
  /**
   * Details about the meeting (agenda, notes, etc).
   *
   * @var text
   */
  public $details;
  /**
   * Id of case status.
   *
   * @var int unsigned
   */
  public $status_id;
  /**
   *
   * @var boolean
   */
  public $is_deleted;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_case';
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'case_type_id', 'civicrm_case_type', 'id');
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
        'case_id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Case ID') ,
          'description' => 'Unique Case ID',
          'required' => true,
          'import' => true,
          'where' => 'civicrm_case.id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_case',
          'entity' => 'Case',
          'bao' => 'CRM_Case_BAO_Case',
        ) ,
        'case_type_id' => array(
          'name' => 'case_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Case Type') ,
          'description' => 'FK to civicrm_case_type.id',
          'required' => true,
          'import' => true,
          'where' => 'civicrm_case.case_type_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => false,
          'table_name' => 'civicrm_case',
          'entity' => 'Case',
          'bao' => 'CRM_Case_BAO_Case',
          'FKClassName' => 'CRM_Case_DAO_CaseType',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_case_type',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          )
        ) ,
        'case_subject' => array(
          'name' => 'subject',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Case Subject') ,
          'description' => 'Short name of the case.',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'import' => true,
          'where' => 'civicrm_case.subject',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_case',
          'entity' => 'Case',
          'bao' => 'CRM_Case_BAO_Case',
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'case_start_date' => array(
          'name' => 'start_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Case Start Date') ,
          'description' => 'Date on which given case starts.',
          'import' => true,
          'where' => 'civicrm_case.start_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_case',
          'entity' => 'Case',
          'bao' => 'CRM_Case_BAO_Case',
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'case_end_date' => array(
          'name' => 'end_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Case End Date') ,
          'description' => 'Date on which given case ends.',
          'import' => true,
          'where' => 'civicrm_case.end_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_case',
          'entity' => 'Case',
          'bao' => 'CRM_Case_BAO_Case',
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'details' => array(
          'name' => 'details',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Details') ,
          'description' => 'Details about the meeting (agenda, notes, etc).',
          'rows' => 8,
          'cols' => 60,
          'table_name' => 'civicrm_case',
          'entity' => 'Case',
          'bao' => 'CRM_Case_BAO_Case',
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'case_status_id' => array(
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Case Status') ,
          'description' => 'Id of case status.',
          'required' => true,
          'import' => true,
          'where' => 'civicrm_case.status_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => false,
          'table_name' => 'civicrm_case',
          'entity' => 'Case',
          'bao' => 'CRM_Case_BAO_Case',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'case_status',
            'optionEditPath' => 'civicrm/admin/options/case_status',
          )
        ) ,
        'case_deleted' => array(
          'name' => 'is_deleted',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Case is in the Trash') ,
          'import' => true,
          'where' => 'civicrm_case.is_deleted',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_case',
          'entity' => 'Case',
          'bao' => 'CRM_Case_BAO_Case',
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
    return self::$_tableName;
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'case', $prefix, array());
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'case', $prefix, array());
    return $r;
  }
}

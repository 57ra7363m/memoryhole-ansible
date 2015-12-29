<?php
// created: 2014-12-11 18:41:41
$dictionary["legal_arrestees_legal_charges"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'legal_arrestees_legal_charges' => 
    array (
      'lhs_module' => 'legal_arrestees',
      'lhs_table' => 'legal_arrestees',
      'lhs_key' => 'id',
      'rhs_module' => 'legal_charges',
      'rhs_table' => 'legal_charges',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'legal_arrestees_legal_charges_c',
      'join_key_lhs' => 'legal_arrestees_legal_chargeslegal_arrestees_ida',
      'join_key_rhs' => 'legal_arrestees_legal_chargeslegal_charges_idb',
    ),
  ),
  'table' => 'legal_arrestees_legal_charges_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'legal_arrestees_legal_chargeslegal_arrestees_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'legal_arrestees_legal_chargeslegal_charges_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'legal_arrestees_legal_chargesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'legal_arrestees_legal_charges_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'legal_arrestees_legal_chargeslegal_arrestees_ida',
        1 => 'legal_arrestees_legal_chargeslegal_charges_idb',
      ),
    ),
  ),
);
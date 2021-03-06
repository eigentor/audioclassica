<?php
// $Id: uc_order_line_item.inc,v 1.3.2.6 2009/09/23 19:14:42 rszrama Exp $

/**
 * @file
 * This file contains the callbacks for the default line items for orders and
 * the various functions that make line items work.
 *
 * Line items are defined using hook_line_item() and use a callback to handle
 * the different processes involved in line item viewing/editing/calculating.
 * The default line items are defined in uc_order_line_item() in uc_order.module.
 */

/**
 * Handle the subtotal line item.
 */
function uc_line_item_subtotal($op, $arg1) {
  switch ($op) {
    case 'load':
      $lines[] = array(
        'id' => 'subtotal',
        'title' => t('Subtotal'),
        'amount' => uc_order_get_total($arg1, TRUE),
      );
      return $lines;
    case 'cart-preview':
      $subtotal = 0;
      foreach ($arg1 as $item) {
        $total = ($item->qty) ? $item->qty * $item->price : $item->price;
        $subtotal += $total;
      }
      if (module_exists('uc_payment') && variable_get('uc_pane_payment_enabled', TRUE)) {
        uc_add_js("\$(document).ready( function() { set_line_item('subtotal', '". t('Subtotal') ."', ". $subtotal .", -10); } );", 'inline');
      }
      break;
  }
}

/**
 * Handle the total line item.
 */
function uc_line_item_total($op, $arg1) {
  switch ($op) {
    case 'display':
      $lines[] = array(
        'id' => 'total',
        'title' => t('Total'),
        'amount' => uc_order_get_total($arg1),
      );
      return $lines;
  }
}

/**
 * Calculate the total value of line items of types that should be calculated.
 */
function uc_line_items_calculate($order) {
  $total = 0;

  if (is_array($order->line_items)) {
    foreach ($order->line_items as $item) {
      if (_line_item_data($item['type'], 'calculated') == TRUE) {
        $total += $item['amount'];
      }
    }
  }

  return $total;
}

/**
 * Update a line item.
 */
function uc_order_update_line_item($id, $title, $amount, $data = NULL) {
  db_query("UPDATE {uc_order_line_items} SET title = '%s', amount = %f "
          ."WHERE line_item_id = %d", $title, $amount, $id);

  if (!is_null($data)) {
    db_query("UPDATE {uc_order_line_items} SET data = '%s' WHERE line_item_id = %d", serialize($data), $id);
  }

  return TRUE;
}

/**
 * Delete a line item, or pass $order as TRUE and $id as an order_id to delete
 * every line item attached to an order.
 */
function uc_order_delete_line_item($id, $order = FALSE) {
  if ($order === FALSE) {
    db_query("DELETE FROM {uc_order_line_items} WHERE line_item_id = %d", $id);
  }
  else {
    db_query("DELETE FROM {uc_order_line_items} WHERE order_id = %d", $id);
  }
  return TRUE;
}

function uc_order_line_item_add($order_id, $type, $title, $amount, $weight = NULL, $data = NULL) {
  if (is_null($weight)) {
    $weight = _line_item_data($type, 'weight');
  }

  db_query("INSERT INTO {uc_order_line_items} (order_id, type, title, amount, weight, data) VALUES (%d, '%s', '%s', %f, %d, '%s')", $order_id, $type, $title, $amount, $weight, serialize($data));

  return TRUE;
}

/**
 * Build a list of line items defined in the enabled modules.
 */
function _line_item_list($action = NULL) {
  static $items;

  if (count($items) > 0 && $action !== 'rebuild') {
    return $items;
  }

  $items = module_invoke_all('line_item', NULL);
  foreach ($items as $i => $value) {
    $items[$i]['enabled'] = variable_get('uc_li_'. $items[$i]['id'] .'_enabled', (!isset($items[$i]['enabled']) ? TRUE : $items[$i]['enabled']));
    $items[$i]['weight'] = variable_get('uc_li_'. $items[$i]['id'] .'_weight', (!isset($items[$i]['weight']) ? 1 : $items[$i]['weight']));
  }
  usort($items, 'uc_weight_sort');

  return $items;
}

/**
 * Return data from a line item by ID and the array key.
 */
function _line_item_data($item_id, $key) {
  $items = _line_item_list();
  foreach ($items as $item) {
    if ($item['id'] == $item_id) {
      return $item[$key];
    }
  }
}


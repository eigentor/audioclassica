<?php

/**
 * @file
 * Workflow-ng file for Ubercart attributes.
 */

function uc_attribute_condition_info() {
  $conditions = array();

  $conditions['uc_attribute_condition_ordered_product_option'] = array(
    '#label' => t('Order has a product with a particular attribute option'),
    '#description' => t('Search the products of an order for a particular option.'),
    '#module' => t('Order: Product'),
    '#arguments' => array(
      'order' => array('#entity' => 'order', '#title' => t('Order')),
    ),
  );

  return $conditions;
}

function uc_attribute_condition_ordered_product_option($order, $settings) {
  $result = FALSE;

  foreach ($order->products as $product) {
    if (!isset($product->data['attributes'])) {
      continue;
    }

    $attributes = $product->data['attributes'];

    // Once the order is made, the attribute data is changed to just the names.
    // If we can't find it by ID, check the names.
    if (is_int(key($attributes))) {
      if (in_array($settings['attribute_option'], $attributes)) {
        $result = TRUE;
        break;
      }
    }
    else {
      // Load the attribute data once, only if we need it.
      if (!isset($option)) {
        if ($option = uc_attribute_option_load($settings['attribute_option'])) {
          $attribute = uc_attribute_load($option->aid);
        }
      }

      if ($attribute) {
        if (isset($attributes[$attribute->name]) && $attributes[$attribute->name] == $option->name) {
          $result = TRUE;
          break;
        }
      }
    }
  }

  return $result;
}

function uc_attribute_condition_ordered_product_option_form($settings = array()) {
  $form = array();

  $options = array();
  $result = db_query("SELECT a.aid, a.name AS attr_name, a.ordering, o.oid, o.name AS opt_name, o.ordering FROM {uc_attributes} AS a JOIN {uc_attribute_options} AS o ON a.aid = o.aid ORDER BY a.ordering, o.ordering");
  while ($option = db_fetch_object($result)) {
    $options[$option->attr_name][$option->oid] = $option->opt_name;
  }

  $form['attribute_option'] = array(
    '#type' => 'select',
    '#title' => t('Attribute option'),
    '#default_value' => $settings['attribute_option'],
    '#options' => $options,
  );

  return $form;
}

function uc_attribute_condition_ordered_product_option_submit($form_id, $form_values) {
  return array('attribute_option' => $form_values['attribute_option']);
}

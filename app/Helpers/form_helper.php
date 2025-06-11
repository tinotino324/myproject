<?php

if (!function_exists('form_dropdown')) {
    /**
     * Drop-down Menu
     *
     * @param mixed $data
     * @param mixed $options
     * @param mixed $selected
     * @param mixed $extra
     * @return string
     */
    function form_dropdown($data = '', $options = array(), $selected = array(), $extra = '')
    {
        $defaults = array();

        if (is_array($data)) {
            if (isset($data['selected'])) {
                $selected = $data['selected'];
                unset($data['selected']);
            }

            if (isset($data['options'])) {
                $options = $data['options'];
                unset($data['options']);
            }
        } else {
            $defaults = array('name' => $data);
        }

        is_array($selected) OR $selected = array($selected);
        is_array($options) OR $options = array($options);

        if (empty($selected)) {
            if (is_array($data)) {
                if (isset($data['name'], $_POST[$data['name']])) {
                    $selected = array($_POST[$data['name']]);
                }
            } elseif (isset($_POST[$data])) {
                $selected = array($_POST[$data]);
            }
        }

        $extra = _attributes_to_string($extra);

        $multiple = (count($selected) > 1 && stripos($extra, 'multiple') === false) ? ' multiple="multiple"' : '';

        $form = '<select '.rtrim(_parse_form_attributes($data, $defaults)).$extra.$multiple.">\n";

        foreach ($options as $key => $val) {
            $key = (string) $key;

            if (is_array($val)) {
                if (empty($val)) {
                    continue;
                }

                $form .= '<optgroup label="'.$key."\">\n";

                foreach ($val as $optgroup_key => $optgroup_val) {
                    $sel = in_array($optgroup_key, $selected) ? ' selected="selected"' : '';
                    $form .= '<option value="'.htmlspecialchars($optgroup_key, ENT_QUOTES, 'UTF-8').'"'.$sel.'>'
                        .htmlspecialchars((string) $optgroup_val, ENT_QUOTES, 'UTF-8')."</option>\n";
                }

                $form .= "</optgroup>\n";
            } else {
                $sel = in_array($key, $selected) ? ' selected="selected"' : '';
                $form .= '<option value="'.htmlspecialchars($key, ENT_QUOTES, 'UTF-8').'"'.$sel.'>'
                    .htmlspecialchars((string) $val, ENT_QUOTES, 'UTF-8')."</option>\n";
            }
        }

        return $form."</select>\n";
    }
}

if (!function_exists('_attributes_to_string')) {
    function _attributes_to_string($attributes)
    {
        if (is_string($attributes)) {
            return $attributes !== '' ? ' '.$attributes : '';
        }

        $att = '';
        foreach ((array) $attributes as $key => $val) {
            $att .= ' '.$key.'="'.htmlspecialchars($val, ENT_QUOTES, 'UTF-8').'"';
        }

        return $att;
    }
}

if (!function_exists('_parse_form_attributes')) {
    function _parse_form_attributes($attributes, $default)
    {
        is_array($attributes) OR $attributes = array();

        if (is_array($default)) {
            $attributes = array_merge($default, $attributes);
        }

        $att = '';
        foreach ($attributes as $key => $val) {
            $att .= ' '.$key.'="'.htmlspecialchars($val, ENT_QUOTES, 'UTF-8').'"';
        }

        return $att;
    }
}

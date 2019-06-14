<?php

// 生成表单的函数
function general($elements)
{
    $items = '';
    $default = ['tag' => '', 'text'=>'', 'attr' => [], 'option' => [], 'default' => ''];
    foreach ($elements as $v) {
        $v = array_merge($default, $v);
        $v['attr'] = general_attr($v['attr']);
        $general = 'general_' . array_shift($v);
        $items .= '<tr>' . call_user_func_array($general, $v) . '</tr>';
    }
    return "<table>$items</table>";
}

// 拼接 表单元素的属性
function general_attr($attr, $items = '')
{
    foreach ($attr as $k => $v) {
        $items .= " $k=\"$v\" ";
    }
    return $items;
}

function general_input($text, $attr, $option, $default)
{
    if(empty($option)){
        $items = "<input $attr value=\"$default\">";
    } else {
        $items = '';
        foreach ($option as $k => $v) {
            $checked = in_array($k, (array)$default, true) ? 'checked' : '';
            $items .= "<label><input $checked $attr value=\"$k\">$v</label>";
        }
    }
    return "<th>$text</th><td>$items</td>";
}

// 拼接 文本域
function general_textarea($text, $attr, $option, $default)
{
    $textarea = "<textarea $attr>$default</textarea>";
    return "<th>$text</th><td>$textarea</td>";
}

// 拼接 下拉列表
function general_select($text, $attr, $option, $default)
{
    $items = '';
    foreach ($option as $k => $v) {
        $selected = ($default === $k) ? 'selected' : '';
        $items .= "<option $selected value=\"$k\">$v</option>";
    }
    $select = "<select $attr>$items</select>";
    return "<th>$text</th><td>$select</td>";
}

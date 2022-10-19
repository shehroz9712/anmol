<?php

// Attribute for select drop down
use Illuminate\Support\Str;

function matchSelected($param1, $param2)
{
    return $param1 == $param2 ? ' selected="selected" ' : '';
}

// Attribute for checkbox and radio button
function matchChecked($param1, $param2)
{
    return $param1 == $param2 ? ' checked="checked" ' : '';
}

function camelize($input, $separator = '_')
{
    return lcfirst(str_replace($separator, '', ucwords($input, $separator)));
}

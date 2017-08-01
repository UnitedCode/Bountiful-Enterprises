<?php

function classActivePath($path, $active = 'active')
{
    return Request::is($path) ? " class=$active" : '';
}


function classActiveSegment($segment, $value, $active = 'active')
{
    if(!is_array($value)) {
        return Request::segment($segment) == $value ? $active : '';
    }
    foreach ($value as $v) {
        if(Request::segment($segment) == $v) return $active;
    }
    return '';
}
<?php

if (! function_exists('i9faker')) {
    function i9faker()
    {
        return \I9Faker::create('pt_BR');
    }
}

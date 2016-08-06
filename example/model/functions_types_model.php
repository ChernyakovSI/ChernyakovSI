<?php

class type extends Model
{
    protected static $fields = array();
    protected static $field_types = array();

    public static function className()
    {
        return 'type';
    }

    public static function tableName()
    {
        return 'types';
    }
}
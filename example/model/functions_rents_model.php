<?php

class rent extends Model
{
    protected static $behaviours = [
        'type' => [
            'key' => 'type',
            'class' => 'type',
            'type' => 'one'
        ]
    ];
    protected static $fields = array();
    protected static $field_types = array();

    public static function className()
    {
        return 'rent';
    }

    public static function tableName()
    {
        return 'rentapartment';
    }
}
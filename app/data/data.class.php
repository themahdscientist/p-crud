<?php
require 'dataprovider.class.php';
class Data {
    private static $ds;
    public static function initialize(DataProvider $data_provider)
    {
        return self::$ds = $data_provider;
    }
    public static function get_terms()
    {
        return self::$ds->get_terms();
    }
    public static function get_term($term)
    {
        return self::$ds->get_term($term);
    }
    public static function search_terms($search)
    {
        return self::$ds->search_terms($search);
    }
    public static function add_term($term, $definition)
    {
        return self::$ds->add_term($term, $definition);
    }
    public static function update_term($original_term, $new_term, $definition)
    {
        return self::$ds->update_term($original_term, $new_term, $definition);
    }
    public static function delete_term($term)
    {
        return self::$ds->delete_term($term);
    }
}
<?php

class Database
{
    private static $host = DB_HOST;
    private static $user = DB_USER;
    private static $pass = DB_PASS;
    private static $db_name = DB_NAME;

    public static function conn()
    {
        return mysqli_connect(Database::$host, Database::$user, Database::$pass, Database::$db_name);
    }

    public static function query($query)
    {
        return mysqli_query(Database::conn(), $query);
    }

    public static function FindAll($table)
    {
        return Database::query("SELECT * FROM `$table`");
    }

    public static function find($table, $key, $value)
    {
        return Database::query("SELECT * FROM `$table` WHERE `$key` = '$value' ORDER BY `id` DESC")->fetch_object();
    }

    public static function delete($table, $key, $value)
    {
        return Database::query("DELETE FROM `$table` WHERE `$key` = '$value'");
    }

    public static function insert($table, $array = [])
    {
        $key = '`' . implode('`, `', array_keys($array)) . '`';
        $value = '\'' . implode('\', \'', $array) . '\'';
        $query = "INSERT INTO `$table` ($key) VALUES ($value)";
        return Database::query($query);
    }

    public static function update($table, $array1, $array2)
    {
        $i = 0;
        foreach ($array1 as $k => $v) {
            $i++;
            $key[$i] = '`' . $k . '`=\'' . $v . '\'';
        }
        $key = implode(' && ', $key);

        $j = 0;
        foreach ($array2 as $k => $v) {
            $j++;
            $val[$j] = '`' . $k . '`=\'' . $v . '\'';
        }
        $val = implode(', ', $val);

        return Database::query("UPDATE `$table` SET $val WHERE $key");
    }
}

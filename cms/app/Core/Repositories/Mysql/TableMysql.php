<?php
namespace App\Core\Repositories\Mysql;
use Illuminate\Support\Facades\DB;

class TableMysql
{
    /**
     * @param $table_name
     */
    public static function resetAutoIncrement($table_name)
    {
        DB::statement('SET @count = 0;');
        DB::statement("UPDATE `$table_name` SET `$table_name`.`id` = @count:= @count + 1;");
        DB::statement("ALTER TABLE `$table_name` AUTO_INCREMENT = 1;");
    }
}

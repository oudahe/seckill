<?php
/*
 * Model驱动类
 * 需要安装pdo扩展
 * @athor	Sandy
 * @date	2018-03-19
 */

class Model
{

    private $_pdo = null;

    /**
     * 构造器
     */
    public function __construct()
    {
        if ($this->_pdo == null) {
            $dsn = 'mysql:host=10.1.70.49;dbname=seckill';
            try {
                $this->_pdo = new PDO($dsn, 'root', '');
            } catch (PDOException $e) {
                echo '数据库链接失败' . $e->getMessage();
                exit;
            }
        }
    }

    /**
     * pdo handler
     */
    public function getHandler()
    {
        return $this->_pdo;
    }

    /**
     * 查询sql
     */
    public function query($sql)
    {
        $handel = $this->_pdo->query($sql);
        $result = [];
        foreach ($handel as $row) {
            $result[] = $row;
        }
        return $result;
    }

    /**
     * 执行sql
     */
    public function exect($sql)
    {
        $result = $this->_pdo->exec($sql);
        return $result;
    }

}

?>
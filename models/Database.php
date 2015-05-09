<?php

class Database
{
    private $db_host = "localhost";
    private $db_username = "root";
    private $db_password = "";
    private $db_name = "db_school";

    private static $_instance = NULL;

    private $_link;
    private $_db;
    private $_result;
    private $_numRows;

#================================================================================
#       Singleton Pattern
#================================================================================
    public static function getInstance()
    {
        if (self::$_instance instanceof self) {
            return self::$_instance;
        }
        return self::$_instance = new self();
    }

#================================================================================
#       can't create clone
#================================================================================
    private function __clone()
    {

    }

#================================================================================
#       loaded when created Object
#================================================================================
    private function __construct()
    {
        $this->_link = mysql_connect($this->db_host, $this->db_username, $this->db_password) or die(mysql_error());

        $this->_db = mysql_select_db($this->db_name, $this->_link) or die(mysql_error());
    }

#================================================================================
#       function for disconnect MySQL connection
#================================================================================
    public function disconnect()
    {
        mysql_close($this->_link);
    }

#================================================================================
#       this function unused but we can put public and get result on the outside
#================================================================================
    private function result()
    {
        return $this->_result;
    }

#================================================================================
#       this function unused but we can put public and get rows on the outside
#================================================================================
    private function rows()
    {
        $rows = array();
        for ($x = 0; $x < $this->_numRows; $x++) {
            $rows[] = mysql_fetch_assoc($this->_result);
        }
        return $rows;
    }

#================================================================================
#       check out existance table
#================================================================================
    private function tableExists($table)
    {
        $tablesInDb = mysql_query('SHOW TABLES FROM ' . $this->db_name . ' LIKE "' . $table . '"');

        if ($tablesInDb) {
            if (mysql_num_rows($tablesInDb) == 1) {

                return true;
            } else {

                return false;
            }
        }
    }

#================================================================================
#       function execute SELECT from MySQL database
#================================================================================
    public function select($table1, $rows = '*', $table2 = null, $table3 = null, $where = null, $group = null)
    {
        $q = 'SELECT ' . $rows . ' FROM ' . $table1;

        if ($table2 != null)
            $q .= ' NATURAL JOIN ' . $table2;
        if ($table3 != null)
            $q .= ' INNER JOIN ' . $table3;
        if ($where != null)
            $q .= ' WHERE ' . $where;
        if ($group != null)
            $q .= ' GROUP BY ' . $group;

        if ($this->tableExists($table1)) {
            $query = mysql_query($q) or die(mysql_error());
            if ($query) {
                $this->_numRows = mysql_num_rows($query);
                for ($i = 0; $i < $this->_numRows; $i++) {
                    $r = mysql_fetch_array($query);
                    $key = array_keys($r);

                    for ($x = 0; $x < count($key); $x++) {

                        if (!is_int($key[$x])) {
                            if (mysql_num_rows($query) >= 1)
                                $this->_result[$i][$key[$x]] = $r[$key[$x]];
                            else if (mysql_num_rows($query) < 1)
                                $this->_result = null;
                            else
                                $this->_result[$key[$x]] = $r[$key[$x]];
                        }
                    }
                }
                return true;

            } else {
                return false;
            }
        } else {
            return false;
        }
    }

#================================================================================
#       function building table with data
#================================================================================
    public function buildTable()
    {
        echo "<table border='1'>";
        echo "<tr>
            <th>N</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Class</th>
            <th>Subject</th>
            </tr>";

        for ($i = 0; $i < $this->_numRows; $i++) {
            $k = $i + 1;

            echo "<tr><td>";
            echo "{$k}";
            echo "</td><td>";
            if (isset($this->_result[$i]['student_fname'])) {
                echo $this->_result[$i]['student_fname'];
            };
            echo "</td><td>";
            if (isset($this->_result[$i]['student_lname'])) {
                echo $this->_result[$i]['student_lname'];
            };
            echo "</td><td>";
            if (isset($this->_result[$i]['class_name'])) {
                echo $this->_result[$i]['class_name'];
            };
            echo "</td><td>";
            if (isset($this->_result[$i]['subject_name'])) {
                echo $this->_result[$i]['subject_name'];
            };
            echo "</td></tr>";
        };

        echo "</table>";
    }

}

#================================================================================
#       End Class
#================================================================================

$db = Database::getInstance();

$db->select($table1, $rows, $table2, $table3, $where, $group);

$db->buildTable();

#$db->disconnect();
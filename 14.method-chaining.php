<?php
echo "<h4 style='text-align:center'>PHP method chaining</h4>";


class fakeString
{
    private $str;

    public function __construct()
    {
        $this->str = "";
    }
    
    public function addA()
    {
        $this->str .= "a";
        return $this;
    }
    
    public function addB()
    {
        $this->str .= "b";
        return $this;
    }
    
    public function getStr()
    {
        return $this->str;
    }
}


$a = new fakeString();


// echo $a->addA()->addB()->getStr();



class DBManager
{
    private $selectables = array();
    private $table;
    private $whereClause;
    private $limit;

    public function select() {
        $this->selectables = func_get_args();
        return $this;
    }

    public function from($table) {
        $this->table = $table;
        return $this;
    }

    public function where($where) {
        $this->whereClause = $where;
        return $this;
    }

    public function limit($limit) {
        $this->limit = $limit;
        return $this;
    }

    public function result() {
        $query[] = "SELECT";
        // if the selectables array is empty, select all
        if (empty($this->selectables)) {
            $query[] = "*";  
        }
        // else select according to selectables
        else {
            $query[] = join(', ', $this->selectables);
        }

        $query[] = "FROM";
        $query[] = $this->table;

        if (!empty($this->whereClause)) {
            $query[] = "WHERE";
            $query[] = $this->whereClause;
        }

        if (!empty($this->limit)) {
            $query[] = "LIMIT";
            $query[] = $this->limit;
        }

        return join(' ', $query);
    }
}

// Now to use the class and see how METHOD CHAINING works
// let us instantiate the class DBManager
$testOne = new DBManager();
$testOne->select()->from('users');
echo $testOne->result();
// OR
echo $testOne->select()->from('users')->result();
// both displays: 'SELECT * FROM users'

$testTwo = new DBManager();
$testTwo->select()->from('posts')->where('id > 200')->limit(10);
echo $testTwo->result();
// this displays: 'SELECT * FROM posts WHERE id > 200 LIMIT 10'

$testThree = new DBManager();
$testThree->select(
    'firstname',
    'email',
    'country',
    'city'
)->from('users')->where('id = 2399');
echo $testThree->result();
// this will display:
// 'SELECT firstname, email, country, city FROM users WHERE id = 2399'



// Another Way for static method chaining :
class Maker 
{
    private static $result      = null;
    private static $delimiter   = '.';
    private static $data        = [];

    public static function words($words)
    {
        if( !empty($words) && count($words) )
        {
            foreach ($words as $w)
            {
                self::$data[] = $w;
            }
        }        
        return new static;
    }

    public static function concate($delimiter)
    {
        self::$delimiter = $delimiter;
        foreach (self::$data as $d)
        {
            self::$result .= $d.$delimiter;
        }
        return new static;
    }

    public static function get()
    {
        return rtrim(self::$result, self::$delimiter);
    }    
}

echo Maker::words(['foo', 'bob', 'bar'])->concate('-')->get();
echo "<br />";
echo Maker::words(['foo', 'bob', 'bar'])->concate('>')->get();
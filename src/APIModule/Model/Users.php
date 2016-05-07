<?php

namespace APIModule\Model;

use Application\BaseModel;
use Doctrine\DBAL\Connection;

/**
 * Description of Users
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
class Users extends BaseModel
{

    static $instance;

	/**
     * Category model construct
     * 
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        parent::__construct($connection, 'users');
    }

	/**
     * Get Instance like singleton
     * 
     * @param Connection $connection
     * @return Users
     */
    static function getInstance(Connection $connection)
    {
        if (!(self::$instance instanceof Users)) {
            self::$instance = new Users($connection);
        }
        
        return self::$instance;
    }

	/**
     * Delete 
     * 
     * @param int $id
     * @return int
     * @throws \LogicException
     */
    public function delete($id = null)
    {
        if (!$id) {
            throw new \LogicException('Can\'t delete without param id.');
        }
        
        return $this->_delete(array('id' => $id));
    }

    /**
     * {@inheritdoc}
     */
    public function insert(array $data)
    {
        return $this->_insert($data);
    }

    /**
     * {@inheritdoc}
     */
    public function update($id = null, array $data = array())
    {
        if (!$id) {
            throw new \LogicException('Can\'t update without param id.');
        }

        $criteria = array('id' => $id);

        return $this->_update($data, $criteria);
    }

    /**
     * Get User by email
     * @param string $email User email
     * @return array|null
     */
    public function getByEmail($email)
    {       
        if (!is_null($this->_table) && !is_null($email)) {
            $this->_sql = "SELECT * FROM $this->_table WHERE email = '$email';";
            $row = $this->_select($this->_sql);
            return (isset($row[0])) ? $row[0] : null;
        }
    }

}
<?php

namespace APIModule\Model;

use Application\BaseModel;
use Doctrine\DBAL\Connection;

/**
 * Description of Perfils
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
class Perfils extends BaseModel
{

    static $instance;

	/**
     * Category model construct
     * 
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        parent::__construct($connection, 'perfils');
    }

	/**
     * Get Instance like singleton
     * 
     * @param Connection $connection
     * @return Perfils
     */
    static function getInstance(Connection $connection)
    {
        if (!(self::$instance instanceof Perfils)) {
            self::$instance = new Perfils($connection);
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

}
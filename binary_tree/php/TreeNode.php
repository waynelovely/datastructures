<?php

/**
 * code for treeNode
 *
 * PHP version 5
 *
 * @category  DataStructures
 * @package   PhpProject1
 * @author    Wayne Lovely <wayne.lovely@gmail.com>
 * @copyright 2013 Wayne Lovely
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version   SVN: <svn_id>
 * @link      http://pear.php.net/package/PackageName
 */

/**
 * a simple data structure for use in trees
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to re-use by permission of the author
 *
 * @category  DataStructures
 * @package   PhpProject1
 * @author    Wayne Lovely <wayne.lovely@gmail.com>
 * @copyright 2013 Wayne Lovely
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version   Release: <package_version>
 * @link      http://pear.php.net/package/PackageName
 */
class TreeNode
{
    private $_key;
    private $_value;
    private $_leftChild;
    private $_rightChild;

    
    /** 
     * constructor
     * 
     * @param string $key   the key of this node
     * @param string $value the value of this node
     * @param object $left  a reference to the left child
     * @param object $right a reference to the right child
     */
    function __construct($key=null, $value=null, $left=null, $right=null) 
    {
        $this->_key        = $key;
        $this->_value      = $value;
        $this->_leftChild  = $left;
        $this->_rightChild = $right;
    }
    
    /** 
     * set the node key for seaching
     * 
     * @param string $key a key to set this node with
     * 
     * @return null
     */
    function setKey( $key )
    {
        $this->_key = $key;
    }
    
    /** 
     * set the node value
     * 
     * @param string $value a value to set this node with
     * 
     * @return null
     */
    function setValue( $value )
    {
        $this->_value = $value;
    }
    /** 
     * set the left child 
     * 
     * @param object $left the node to the left
     * 
     * @return null
     */
    function setLeftChild( $left )
    {
        $this->_leftChild = $left;
    }
    
    /** 
     * set the right child 
     * 
     * @param object $right the node to the right
     * 
     * @return null
     */
    function setRightChild( $right )
    {
        $this->_rightChild = $right;
    }
    
    /**
     * get the key of this node
     * 
     * @return string key
     */
    function getKey()
    {
        return $this->_key;
    }
    
    /**
     * get the value of this node
     * 
     * @return string value
     */
    function getValue()
    {
        return $this->_value;
    }

    /**
     * get the leftChild of this node
     * 
     * @return obect
     */
    function getLeftChild()
    {
        return $this->_leftChild;
    }
    
    /**
     * get the rightChild of this node
     * 
     * @return obect
     */
    function getRightChild()
    {
        return $this->_rightChild;
    }
}

?>

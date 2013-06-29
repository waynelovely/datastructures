<?php

/**
 * code for BinaryTree
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

require_once 'TreeNode.php';

/**
 * a binary tree 
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
class BinaryTree
{
    
    private $_head;

    /**
     * constructor
     * 
     * @param NodeTree $head optionally pass in a TreeNode to root the tree
     */
    function __construct($head=null)
    {
        if (is_object($head) && (get_class($head) === 'TreeNode')) {
            $this->_head = $head;
        }
    }

    /**
     * return the root of the tree
     * 
     * @return TreeNode
     */
    function getHead()
    {
        return $this->_head;
    }
    
    /**
     * pass in a TreeNode to be the root of the tree
     * 
     * @param TreeNode $head a separate way to root the tree
     * 
     * @return none
     */
    function setHead($head)
    {
        if (is_object($head) && (get_class($head) === 'TreeNode')) {
            $this->_head = $head;
        }        
    }

    /**
     * insert nodes into the binary tree
     * 
     * @param TreeNode $node  a position in the tree to start insertion process
     * @param string   $key   data for the index
     * @param string   $value data to be stored
     * 
     * @return TreeNode
     */
    function insert(TreeNode $node, $key, $value)
    {
        // print "trying to insert $key, $value into tree\n";
        
        if ($key && $value) {
            
            if (strcmp($key, $node->getKey()) <= 0) {
                
                if (!$node->getLeftChild()) {
                    // add a node here and link the parent to it
                    $node->setLeftChild(new Treenode($key, $value));
                    return $node->getLeftChild();
                } else {
                    // print "recurse with args " .  $node->getLeftChild()->getKey() .  " key=$key, value=$value\n";
                    // recurse down the left branch to look for a place
                    $this->insert($node->getLeftChild(), $key, $value);
                }
                
            } else {
                
                if (!$node->getRightChild()) {
                    // add a node here and link the parent to it
                    $node->setRightChild(new Treenode($key, $value));
                    return $node->getRightChild();
                } else {
                    // recurse down the left branch to look for a place
                    $this->insert($node->getRightChild(), $key, $value);
                }
                
            }
            
        } else {
            return null;
        }
        
    }

    /**
     * search function
     * 
     * @param TreeNode $node a node to start search with
     * @param string   $key  text to search with
     * 
     * @return string
     */
    function search(TreeNode $node, $key)
    {        
        if (!$node || !$key || !$node->getKey()) {
            return null;
        }
        
        $cmp = strcmp($key, $node->getKey());
        if ($cmp == 0) {
            return $node->getValue();
        } else {
            if ($cmp < 0) {
                $left = $node->getLeftChild();
                if ($left) {
                    return $this->search($left, $key);
                } else {
                    return null;
                }
            } else {
                $right = $node->getRightChild();
                if ($right) {
                    return $this->search($right, $key);
                } else {
                    return null;
                }
            }
        }
    }
    
    
}

?>

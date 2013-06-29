<?php 

/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     Original Author <author@example.com>
 * @author     Another Author <another@example.com>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */


require_once 'TreeNode.php';
require_once 'BinaryTree.php';

 /**
  * Returns nothing
  * 
  * @param string $who who we are saying hello to
  * 
  * @return null
  */
function hello($who) 
{
    print "Hello " . $who . "\n";
    
} 

$myroot = new TreeNode('m','something about m');
$mytree = new BinaryTree($myroot);

$mytree->insert($mytree->getHead(), 'f', 'something about f');

$mytree->insert($mytree->getHead(), 'p', 'something about p');

$mytree->insert($mytree->getHead(), 'd', 'something about d');

$mytree->insert($mytree->getHead(), 'v', 'something about v');

$mytree->insert($mytree->getHead(), 'a', 'something about a');


$result = $mytree->search($myroot, 'a');

if ($result)
{
    print $result . "\n";
}
else
{
    print "Not found\n";
}

?>

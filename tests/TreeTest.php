<?php
include "../Tree.php";

class TreeTest extends PHPUnit_Framework_TestCase
{
    public function testTreeLevel1()
    {
        $tree = new Tree(1);
        $this->assertEquals("*", $tree->build());
    }

    public function testTreeLevel2()
    {
        $tree = new Tree(2);
        $this->assertEquals(" *\n***", $tree->build());
    }

    public function testTreeLevel3()
    {
        $tree = new Tree(3);
        $this->assertEquals("  *\n ***\n*****", $tree->build());
    }

    public function testTreeLevel4()
    {
        $tree = new Tree(4);
        $this->assertEquals("   *\n  ***\n *****\n*******", $tree->build());
    }

    public function testTreeLevel5()
    {
        $tree = new Tree(5);
        $this->assertEquals("    *\n   ***\n  *****\n *******\n*********", $tree->build());
    }
}
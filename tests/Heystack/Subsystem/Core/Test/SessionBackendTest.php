<?php

namespace Heystack\Subsystem\Core\Test;

use Heystack\Subsystem\Core\State\Backends\Session;

class SessionBackendTest extends \PHPUnit_Framework_TestCase
{
    
    protected $session;

    protected function setUp()
    {        
        $_SESSION = array();        
        $this->session = new Session(new \Session($_SESSION));        
    }

    protected function tearDown()
    {
        $this->session = null;    
    }
    
    public function testSetGetByKey()
    {
        
        $this->session->setByKey('test', 'yay');
        
        $this->assertEquals('yay', $this->session->getByKey('test'));
        
    }
    
    public function testGetKeys()
    {
        
        $this->session->setByKey('test', 'yay');
        
        $this->assertEquals(array('test'), $this->session->getKeys());
        
    }
    
    public function testRemoveByKey()
    {
        
        $this->session->setByKey('test', 'yay');
        
        $this->session->removeByKey('test');
        
        $this->assertEquals(false, $this->session->getByKey('test'));
        
    }
    
    public function testRemoveAll()
    {
        
        $this->session->setByKey('test', 'yay');        
        $this->session->setByKey('test2', 'yay');
        
        $this->session->removeAll();
        
        $this->assertEquals(false, $this->session->getByKey('test'));
        $this->assertEquals(false, $this->session->getByKey('test2'));
        
        $this->assertEquals(array(
            'test',
            'test2'
        ), $this->session->getKeys());
        
    }
    
    
}
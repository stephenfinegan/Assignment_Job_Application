<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 15/02/2016
 * Time: 09:40
 */
namespace ItbTest;

use Itb\Student;
    {
        class StudentTest extends \PHPUnit_Framework_TestCase
        {
            public function testCanCreateStudentObject()
            {
                //Arange
                $s = new Student();

                //Act

                //Assert
                $this->assertNotNull($s);
            }
        }
    }
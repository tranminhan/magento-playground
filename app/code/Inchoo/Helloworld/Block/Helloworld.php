<?php
/**
 * Created by IntelliJ IDEA.
 * User: antran
 * Date: 8/20/17
 * Time: 4:25 PM
 */

namespace Inchoo\Helloworld\Block;

class Helloworld extends \Magento\Framework\View\Element\Template
{
  public function getHelloWorldTxt()
  {
    return 'Hello world!';
  }
}
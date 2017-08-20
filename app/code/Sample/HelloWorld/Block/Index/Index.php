<?php namespace Sample\HelloWorld\Block\Index;

class Index extends \Magento\Framework\View\Element\Template
{

  /**
   * @return string
   */
  public function getHelloWorldText()
  {
    return 'Welcome to XinhSang.com from a Block';
  }
}

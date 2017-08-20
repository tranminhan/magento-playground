<?php
/**
 * Created by IntelliJ IDEA.
 * User: antran
 * Date: 8/20/17
 * Time: 10:17 PM
 */

namespace Mageplaza\Module1\Controller\Index;

use Magento\Framework\App\ResponseInterface;

class Display extends \Magento\Framework\App\Action\Action
{

  public function __construct(\Magento\Framework\App\Action\Context  $context)
  {
    parent::__construct($context);
  }

  /**
   * Dispatch request
   *
   * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
   * @throws \Magento\Framework\Exception\NotFoundException
   */
  public function execute()
  {
    echo "Hello World";
    exit;
  }
}
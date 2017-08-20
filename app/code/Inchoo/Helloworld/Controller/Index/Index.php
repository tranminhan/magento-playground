<?php

namespace Inchoo\Helloworld\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;


class Index extends \Magento\Framework\App\Action\Action
{

  protected $_resultPageFactory;

  public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
  {
    $this->_resultPageFactory = $resultPageFactory;
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
    $resultPage = $this->_resultPageFactory->create();
    return $resultPage;
  }
}
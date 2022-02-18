<?php
/**
 * Webkul Software.
 *
 * @category  Webkul
 * @package   Webkul_MyCustomCollection
 * @author    Webkul
 * @copyright Copyright (c) Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */
namespace Webkul\MyCustomCollection\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	/**
	 * @var \Magento\Framework\View\Result\PageFactory $pageFactory
	 */
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory
	){
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	/**
	 * Execute method
	 */
	public function execute()
	{
		return $this->_pageFactory->create();
	}
}

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
namespace Webkul\MyCustomCollection\Block\Navigation;

class State extends \Magento\LayeredNavigation\Block\Navigation\State
{
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Webkul\MyCustomCollection\Model\Layer\Resolver $layerResolver,
		array $data = []
	) {
		parent::__construct(
			$context,
			$layerResolver,
			$data
		);
	}
}

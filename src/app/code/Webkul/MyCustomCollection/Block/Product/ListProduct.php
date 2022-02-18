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
namespace Webkul\MyCustomCollection\Block\Product;

class ListProduct extends \Magento\Catalog\Block\Product\ListProduct
{
	public function __construct(
		\Magento\Catalog\Block\Product\Context $context,
		\Magento\Framework\Data\Helper\PostHelper $postDataHelper,
		\Webkul\MyCustomCollection\Model\Layer\Resolver $layerResolver,
		\Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository,
		\Magento\Framework\Url\Helper\Data $urlHelper,
		array $data = []
	) {
		parent::__construct(
			$context,
			$postDataHelper,
			$layerResolver,
			$categoryRepository,
			$urlHelper,
			$data
		);
	}
}

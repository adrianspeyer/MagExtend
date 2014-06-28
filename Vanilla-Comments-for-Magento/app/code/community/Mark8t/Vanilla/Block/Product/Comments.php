<?php
/**
 *
 * Adds Vanilla Forums comments to all product page.
 *
 * @category    Vanilla
 * @package     Mag_Van
 * @copyright   Copyright (c) 2014 by Adrian Speyer
 * @license     GPL 2
 */


class Mark8t_Vanilla_Block_Product_Comments extends Mage_Core_Block_Template {

    /**
     * Get Id of loaded product or return false when not active product
     *
     * @return int|bool id of loaded product or false
     */
    public function getProductId() {
        if ($product = Mage::registry('current_product')) {
            return $product->getId();
        }
        return false;
    }

    /**
     * Check Vanilla Comments enabled and page has loaded product ID
     *
     * @return <type>
     */
    public function isVanillaEnabled() {
        if (!$this->getProductId() || !$this->getVanillaForum()) {
            return false;
        }
        return true;
    }

    /**
     * Return entered Vanilla Forums URL
     *
     * @return string
     */
    public function getVanillaForum() {
        return Mage::getStoreConfig("vanilla/general/vanilla_forum_url");    
    }
	
	public function getVanillaForumDID() {
		return Mage::getStoreConfig("vanilla/general/vanilla_discussion_id");
	}
	
	public function getVanillaForumCID() {
	return Mage::getStoreConfig("vanilla/general/vanilla_category_id");
	}

    /**
     * Get url of loaded product or false
     *
     * @return string|bool
     */
    public function getProductUrl() {
        if ($product = Mage::registry('current_product')) {
            return $product->getProductUrl();
        }
        return false;
    }

    /**
     * Get unique vanilla identifier for current product page
     *
     * @return string
     */
    public function getVanillaIdentifier() {
        if ($forum = $this->getVanillaForum() && $productId = $this->getProductId()) {
            return substr(md5($forum), 0, 10) . '_id' . $productId;
        }
    }

    protected function _beforeToHtml() {
        if (!$this->isVanillaEnabled()) {
            return false;
        }
        return parent::_beforeToHtml();
    }

}
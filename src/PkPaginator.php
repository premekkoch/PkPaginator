<?php
namespace PremekKoch;

use Nette\Utils\Paginator;


/**
 * Extends standard Nette paginator
 * It allow to have different items count on first page than on the rest of pages
 * In this case you must set "itemsOnFirstPage" property (if not, original functionality is used)
 *
 * @author  Premek Koch
 *
 */
class PkPaginator extends Paginator
{
  /** @var int */
  private $itemsOnFirstPage = NULL;


  /**
   * Sets the number of items to display on a first page.
   *
   * @param int $itemsOnFirstPage
   * @return \PkPaginator
   */
  public function setItemsOnFirstPage($itemsOnFirstPage)
  {
    $this->itemsOnFirstPage = $itemsOnFirstPage;

    return $this;
  }


	/**
	 * Returns the total number of pages.
	 * @return int|NULL
	 */
	public function getPageCount()
  {
    if (!$this->itemsOnFirstPage) {
      return parent::getPageCount();
    }

    return $this->itemCount === NULL ? NULL : (int) ceil(1 + (($this->itemCount - $this->itemsOnFirstPage) / $this->itemsPerPage));
  }


}

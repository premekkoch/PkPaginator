PremekKoch\PkPaginator
=========================
Extended Nette framework paginator, which allows different items count on first page. 


Instalation
-----------

```
composer require premekkoch/pkpaginator
```

How to use
----------
Use PkPaginator instead of Nette\Utils\Paginator [by the same way](https://doc.nette.org/en/2.3/pagination). For different items count on first page, set this count by calling `setItemsOnFirstPage();`. If you don't do this, PkPaginator works with original behavior of Nette\Utils\Paginator with same items count on each page.

```
	$paginator = new PremekKoch\PkPaginator();
	$paginator->setItemCount(356); // total number of items
	$paginator->setItemsOnFirstPage(5); // items count on first page
	$paginator->setItemsPerPage(30); // items per 2nd and next pages
	$paginator->setPage(1); // actual page number
```



<?php
/**
 * @package Trean
 */
class SearchForm extends Horde_Form
{
    function SearchForm($vars)
    {
        parent::__construct($vars, _("Search Bookmarks"), 'Search_Bookmarks');

        $this->setButtons(_("Search"));
        $this->addVariable(_("Search for"), 'q', 'text', false);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: rv
 * Date: 04.04.17
 * Time: 22:11
 */

namespace Unit;

use BicBucStriim\CalibreFilter;
use PHPUnit\Framework\TestCase;

class CalibreFilterTest extends TestCase
{
    ##
    # No filter values - the raw table name is returned
    #
    function testNoFilter() {
        $filter = new CalibreFilter();
        $this->assertEquals('books', $filter->getBooksFilter());
    }

    ##
    # Language filter
    #
    function testLanguageFilter() {
        $filter = new CalibreFilter($lang=1);
        $this->assertEquals('(select * from books b left join books_languages_link bll on b.id=bll.book where lang_code=:lang)', $filter->getBooksFilter());
    }

    ##
    # Tag filter
    #
    function testTagFilter() {
        $filter = new CalibreFilter($lang=null, $tag=1);
        $this->assertEquals('(select * from books b where not exists (select * from books_tags_link btl where b.id=btl.book and tag=:tag))', $filter->getBooksFilter());
    }

    ##
    # Both filter values
    #
    function testLanguageAndTagFilter() {
        $filter = new CalibreFilter($lang=1, $tag=1);
        $this->assertEquals('(select * from (books b left join books_languages_link bll on b.id=bll.book) where lang_code=:lang and not exists (select * from books_tags_link btl where b.id=btl.book and tag=:tag))', $filter->getBooksFilter());
    }
}

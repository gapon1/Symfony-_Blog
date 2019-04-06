<?php
/**
 * Created by PhpStorm.
 * User: pro
 * Date: 2019-04-06
 * Time: 12:15
 */

namespace AppBundle\Utils;


class Markdown
{
    private $parser;
    public function __construct()
    {
        $this->parser = new \Parsedown();
    }
    public function toHtml($text)
    {
        return $this->parser->text($text);
    }

}
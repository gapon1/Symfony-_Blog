<?php
/**
 * Created by PhpStorm.
 * User: pro
 * Date: 2019-04-06
 * Time: 12:16
 */

namespace AppBundle\Twig;

use AppBundle\Utils\Markdown;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    private $parser;
    public function __construct(Markdown $parser)
    {
        $this->parser = $parser;
    }
    public function getFilters()
    {
        return [
            new TwigFilter(
                'md2html',
                [$this, 'markdownToHtml'],
                ['is_safe' => ['html'], 'pre_escape' => 'html']
            ),
        ];
    }
    public function markdownToHtml($content)
    {
        return $this->parser->toHtml($content);
    }
    public function getName()
    {
        return 'app_extension';
    }
}
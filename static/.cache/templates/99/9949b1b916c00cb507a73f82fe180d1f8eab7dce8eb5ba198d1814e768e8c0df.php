<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/metatags.html.twig */
class __TwigTemplate_fcdc4da40431796f6822e3d2f3ffeb881dcd5e4c222b27f4cb6780da24d9bafa extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        if (( !array_key_exists("title", $context) || twig_test_empty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })())))) {
            // line 3
            $context["title_divider"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 3), "title", [], "any", false, true, false, 3), "divider", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 3), "title", [], "any", false, true, false, 3), "divider", [], "any", false, false, false, 3), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 3), "title", [], "any", false, true, false, 3), "divider", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 3), "title", [], "any", false, true, false, 3), "divider", [], "any", false, false, false, 3), " &middot; ")) : (" &middot; ")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 3), "title", [], "any", false, true, false, 3), "divider", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 3), "title", [], "any", false, true, false, 3), "divider", [], "any", false, false, false, 3), " &middot; ")) : (" &middot; "))));
            // line 4
            $context["title_only"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 4), "title", [], "any", false, true, false, 4), "only", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 4), "title", [], "any", false, true, false, 4), "only", [], "any", false, false, false, 4), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 4), "title", [], "any", false, true, false, 4), "only", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 4), "title", [], "any", false, true, false, 4), "only", [], "any", false, false, false, 4), false)) : (false)))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 4), "title", [], "any", false, true, false, 4), "only", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 4), "title", [], "any", false, true, false, 4), "only", [], "any", false, false, false, 4), false)) : (false))));
            // line 5
            $context["title_pagination_shownumber"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", false, false, false, 5), (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", true, true, false, 5) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", false, false, false, 5)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", false, false, false, 5)) : (true)))) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", true, true, false, 5) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", false, false, false, 5)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", false, false, false, 5)) : (true))));
            // line 6
            $context["title_pagination_label"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "pagination", [], "any", false, true, false, 6), "label", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "pagination", [], "any", false, true, false, 6), "label", [], "any", false, false, false, 6), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "pagination", [], "any", false, true, false, 6), "label", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "pagination", [], "any", false, true, false, 6), "label", [], "any", false, false, false, 6), "Page %s")) : ("Page %s")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "pagination", [], "any", false, true, false, 6), "label", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "pagination", [], "any", false, true, false, 6), "label", [], "any", false, false, false, 6), "Page %s")) : ("Page %s"))));
            // line 7
            $context["title"] = ((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7)) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 7, $this->source); })())) . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7)));
            // line 8
            if ((isset($context["title_only"]) || array_key_exists("title_only", $context) ? $context["title_only"] : (function () { throw new RuntimeError('Variable "title_only" does not exist.', 8, $this->source); })())) {
                // line 9
                $context["title"] = twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9));
            }
            // line 11
            if ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 11, $this->source); })()), "type", [], "any", false, false, false, 11) == "homepage")) {
                // line 12
                $context["title"] = ((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12)) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 12, $this->source); })())) . twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "baseline", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "baseline", [], "any", false, false, false, 12), "")) : (""))));
                // line 13
                if (((isset($context["title_only"]) || array_key_exists("title_only", $context) ? $context["title_only"] : (function () { throw new RuntimeError('Variable "title_only" does not exist.', 13, $this->source); })()) || twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "baseline", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "baseline", [], "any", false, false, false, 13), "")) : (""))))) {
                    // line 14
                    $context["title"] = twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14));
                }
            }
            // line 17
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pagination", [], "any", false, true, false, 17), "current", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pagination", [], "any", false, true, false, 17), "current", [], "any", false, false, false, 17), 0)) : (0)) > 1)) {
                // line 18
                if ((isset($context["title_pagination_shownumber"]) || array_key_exists("title_pagination_shownumber", $context) ? $context["title_pagination_shownumber"] : (function () { throw new RuntimeError('Variable "title_pagination_shownumber" does not exist.', 18, $this->source); })())) {
                    // line 19
                    $context["title"] = ((((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19)) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 19, $this->source); })())) . twig_sprintf((isset($context["title_pagination_label"]) || array_key_exists("title_pagination_label", $context) ? $context["title_pagination_label"] : (function () { throw new RuntimeError('Variable "title_pagination_label" does not exist.', 19, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "pagination", [], "any", false, false, false, 19), "current", [], "any", false, false, false, 19))) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 19, $this->source); })())) . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19)));
                    // line 20
                    if ((isset($context["title_only"]) || array_key_exists("title_only", $context) ? $context["title_only"] : (function () { throw new RuntimeError('Variable "title_only" does not exist.', 20, $this->source); })())) {
                        // line 21
                        $context["title"] = ((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21)) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 21, $this->source); })())) . twig_sprintf((isset($context["title_pagination_label"]) || array_key_exists("title_pagination_label", $context) ? $context["title_pagination_label"] : (function () { throw new RuntimeError('Variable "title_pagination_label" does not exist.', 21, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 21, $this->source); })()), "pagination", [], "any", false, false, false, 21), "current", [], "any", false, false, false, 21)));
                    }
                }
            }
        }
        // line 27
        $context["description"] = twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "description", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "description", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27))) : (twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27))));
        // line 29
        $context["keywords"] = twig_escape_filter($this->env, twig_array_merge(((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tags", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tags", [], "any", false, false, false, 29), [])) : ([])), ((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "keywords", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "keywords", [], "any", false, false, false, 29), [])) : ([]))));
        // line 31
        $context["author"] = twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "author", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "author", [], "any", false, false, false, 31), ((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, false, false, 31), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, false, false, 31), "")) : ("")))));
        // line 32
        if ( !twig_test_empty((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 32, $this->source); })()))) {
            // line 33
            if ( !twig_test_iterable((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 33, $this->source); })()))) {
                // line 34
                $context["author"] = ["name" => (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 34, $this->source); })())];
            }
            // line 36
            if ((twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "firstname", [], "any", true, true, false, 36) && twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "lastname", [], "any", true, true, false, 36))) {
                // line 37
                $context["author"] = twig_array_merge((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 37, $this->source); })()), ["name" => ((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 37, $this->source); })()), "firstname", [], "any", false, false, false, 37)) . " ") . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 37, $this->source); })()), "lastname", [], "any", false, false, false, 37)))]);
            }
        }
        // line 41
        $context["robots"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 41), "robots", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 41), "robots", [], "any", false, false, false, 41), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 41), "robots", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 41), "robots", [], "any", false, false, false, 41), "index,follow")) : ("index,follow")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 41), "robots", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 41), "robots", [], "any", false, false, false, 41), "index,follow")) : ("index,follow"))));
        // line 42
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pagination", [], "any", false, true, false, 42), "current", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pagination", [], "any", false, true, false, 42), "current", [], "any", false, false, false, 42), 0)) : (0)) > 1)) {
            // line 43
            $context["robots"] = "noindex,follow";
        }
        // line 46
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 46), "favicon", [], "any", false, true, false, 46), "enabled", [], "any", true, true, false, 46) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 46), "favicon", [], "any", false, true, false, 46), "enabled", [], "any", false, false, false, 46)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 46), "favicon", [], "any", false, true, false, 46), "enabled", [], "any", false, false, false, 46)) : (true))) {
            // line 47
            $context["favicon_defaults"] = ["icon" => [0 => 32, 1 => 57, 2 => 76, 3 => 96, 4 => 128, 5 => 192, 6 => 228], "shortcut icon" => [0 => 196], "apple-touch-icon" => [0 => 120, 1 => 152, 2 => 180]];
        }
        // line 54
        if (( !array_key_exists("image", $context) || twig_test_empty((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 54, $this->source); })())))) {
            // line 55
            $context["image"] = ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "image", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "image", [], "any", false, false, false, 55), ((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "image", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "image", [], "any", false, false, false, 55))) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "image", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "image", [], "any", false, false, false, 55))) : (""))));
        }
        // line 58
        $context["opengraph"] = ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
(isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 59, $this->source); })()), "language", [], "any", false, false, false, 59), "locale", [], "any", false, false, false, 59), "site_name" => twig_get_attribute($this->env, $this->source,         // line 60
(isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 60, $this->source); })()), "title", [], "any", false, false, false, 60), "type" => "website", "title" =>         $this->renderBlock("title", $context, $blocks), "description" =>         $this->renderBlock("description", $context, $blocks), "url" => $this->extensions['Cecil\Renderer\Twig\Extension']->url(        // line 64
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 64, $this->source); })()), ["canonical" => true])];
        // line 66
        if ((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 66, $this->source); })())) {
            // line 67
            if ( !$this->extensions['Cecil\Renderer\Twig\Extension']->isAsset((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 67, $this->source); })()))) {
                // line 68
                $context["image_asset"] = $this->extensions['Cecil\Renderer\Twig\Extension']->asset((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 68, $this->source); })()));
            } else {
                // line 70
                $context["image_asset"] = (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 70, $this->source); })());
            }
            // line 72
            $context["opengraph"] = twig_array_merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 72, $this->source); })()), ["image" => $this->extensions['Cecil\Renderer\Twig\Extension']->resize((isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 72, $this->source); })()), 1200)]);
        }
        // line 74
        if ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 74, $this->source); })()), "section", [], "any", false, false, false, 74) == ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 74), "articles", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 74), "articles", [], "any", false, false, false, 74), "blog")) : ("blog")))) {
            // line 75
            $context["opengraph"] = twig_array_merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 75, $this->source); })()), ["type" => "article"]);
        }
        // line 77
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "opengraph", [], "any", true, true, false, 77) || twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "opengraph", [], "any", true, true, false, 77))) {
            // line 78
            $context["opengraph"] = twig_array_merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 78, $this->source); })()), ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "opengraph", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "opengraph", [], "any", false, false, false, 78), twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 78, $this->source); })()), "opengraph", [], "any", false, false, false, 78))) : (twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 78, $this->source); })()), "opengraph", [], "any", false, false, false, 78))));
        }
        // line 81
        $context["facebook"] = ["id" => "", "firstname" => ((twig_get_attribute($this->env, $this->source,         // line 83
($context["author"] ?? null), "firstname", [], "any", true, true, false, 83)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "firstname", [], "any", false, false, false, 83), "")) : ("")), "lastname" => ((twig_get_attribute($this->env, $this->source,         // line 84
($context["author"] ?? null), "lastname", [], "any", true, true, false, 84)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "lastname", [], "any", false, false, false, 84), "")) : ("")), "username" => ""];
        // line 87
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 87), "facebook", [], "any", true, true, false, 87) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, true, false, 87), "facebook", [], "any", true, true, false, 87))) {
            // line 88
            $context["facebook"] = twig_array_merge((isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 88, $this->source); })()), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 88), "facebook", [], "any", true, true, false, 88)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 88), "facebook", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 88, $this->source); })()), "social", [], "any", false, false, false, 88), "facebook", [], "any", false, false, false, 88))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 88, $this->source); })()), "social", [], "any", false, false, false, 88), "facebook", [], "any", false, false, false, 88))));
        }
        // line 91
        $context["twitter"] = ["site" => "", "creator" => ""];
        // line 95
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 95), "twitter", [], "any", true, true, false, 95) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, true, false, 95), "twitter", [], "any", true, true, false, 95))) {
            // line 96
            $context["twitter"] = twig_array_merge((isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 96, $this->source); })()), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 96), "twitter", [], "any", true, true, false, 96)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 96), "twitter", [], "any", false, false, false, 96), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 96, $this->source); })()), "social", [], "any", false, false, false, 96), "twitter", [], "any", false, false, false, 96))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 96, $this->source); })()), "social", [], "any", false, false, false, 96), "twitter", [], "any", false, false, false, 96))));
        }
        // line 100
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 101
        $this->displayBlock('description', $context, $blocks);
        echo "\" />";
        // line 102
        if ((isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 102, $this->source); })())) {
            echo "
    <meta name=\"keywords\" content=\"";
            // line 103
            echo twig_join_filter((isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 103, $this->source); })()), ", ");
            echo "\" />";
        }
        // line 105
        if ((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 105, $this->source); })())) {
            echo "
    <meta name=\"author\" content=\"";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 106, $this->source); })()), "name", [], "any", false, false, false, 106));
            echo "\" />";
        }
        // line 107
        echo "
    <meta name=\"robots\" content=\"";
        // line 108
        echo (isset($context["robots"]) || array_key_exists("robots", $context) ? $context["robots"] : (function () { throw new RuntimeError('Variable "robots" does not exist.', 108, $this->source); })());
        echo "\" />";
        // line 110
        if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 110), "favicon", [], "any", false, true, false, 110), "enabled", [], "any", true, true, false, 110) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 110), "favicon", [], "any", false, true, false, 110), "enabled", [], "any", false, false, false, 110)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 110), "favicon", [], "any", false, true, false, 110), "enabled", [], "any", false, false, false, 110)) : (true)) &&  !twig_test_empty($this->extensions['Cecil\Renderer\Twig\Extension']->asset(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 110), "favicon", [], "any", false, true, false, 110), "image", [], "any", true, true, false, 110)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 110), "favicon", [], "any", false, true, false, 110), "image", [], "any", false, false, false, 110), "favicon.png")) : ("favicon.png")), ["ignore_missing" => true])))) {
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 111), "favicon", [], "any", false, true, false, 111), "sizes", [], "any", true, true, false, 111)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 111), "favicon", [], "any", false, true, false, 111), "sizes", [], "any", false, false, false, 111), (isset($context["favicon_defaults"]) || array_key_exists("favicon_defaults", $context) ? $context["favicon_defaults"] : (function () { throw new RuntimeError('Variable "favicon_defaults" does not exist.', 111, $this->source); })()))) : ((isset($context["favicon_defaults"]) || array_key_exists("favicon_defaults", $context) ? $context["favicon_defaults"] : (function () { throw new RuntimeError('Variable "favicon_defaults" does not exist.', 111, $this->source); })()))));
            foreach ($context['_seq'] as $context["favicon_variant"] => $context["favicon_sizes"]) {
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["favicon_sizes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                    // line 113
                    $context["favicon_asset"] = $this->extensions['Cecil\Renderer\Twig\Extension']->asset(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 113), "favicon", [], "any", false, true, false, 113), "image", [], "any", true, true, false, 113)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 113), "favicon", [], "any", false, true, false, 113), "image", [], "any", false, false, false, 113), "favicon.png")) : ("favicon.png")), ["ignore_missing" => true]);
                    echo "
    <link rel=\"";
                    // line 114
                    echo $context["favicon_variant"];
                    echo "\" sizes=\"";
                    echo $context["size"];
                    echo "\" href=\"";
                    echo $this->extensions['Cecil\Renderer\Twig\Extension']->url($this->extensions['Cecil\Renderer\Twig\Extension']->resize((isset($context["favicon_asset"]) || array_key_exists("favicon_asset", $context) ? $context["favicon_asset"] : (function () { throw new RuntimeError('Variable "favicon_asset" does not exist.', 114, $this->source); })()), $context["size"]), ["canonical" => true]);
                    echo "\" type=\"";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["favicon_asset"]) || array_key_exists("favicon_asset", $context) ? $context["favicon_asset"] : (function () { throw new RuntimeError('Variable "favicon_asset" does not exist.', 114, $this->source); })()), "subtype", [], "any", false, false, false, 114);
                    echo "\" />";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['favicon_variant'], $context['favicon_sizes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 119
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "prev", [], "any", false, true, false, 119), "path", [], "any", true, true, false, 119)) {
            echo "
    <link rel=\"prev\" href=\"";
            // line 120
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 120, $this->source); })()), "prev", [], "any", false, false, false, 120), "path", [], "any", false, false, false, 120), ["canonical" => true]);
            echo "\">";
        }
        // line 122
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "next", [], "any", false, true, false, 122), "path", [], "any", true, true, false, 122)) {
            echo "
    <link rel=\"next\" href=\"";
            // line 123
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 123, $this->source); })()), "next", [], "any", false, false, false, 123), "path", [], "any", false, false, false, 123), ["canonical" => true]);
            echo "\">";
        }
        // line 126
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pagination", [], "any", false, true, false, 126), "pages", [], "any", true, true, false, 126)) {
            echo "
    <link rel=\"first\" href=\"";
            // line 127
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 127, $this->source); })()), "pagination", [], "any", false, false, false, 127), "links", [], "any", false, false, false, 127), "first", [], "any", false, false, false, 127), ["canonical" => true]);
            echo "\">";
            // line 128
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pagination", [], "any", false, true, false, 128), "links", [], "any", false, true, false, 128), "prev", [], "any", true, true, false, 128)) {
                echo "
    <link rel=\"prev\" href=\"";
                // line 129
                echo $this->extensions['Cecil\Renderer\Twig\Extension']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 129, $this->source); })()), "pagination", [], "any", false, false, false, 129), "links", [], "any", false, false, false, 129), "prev", [], "any", false, false, false, 129), ["canonical" => true]);
                echo "\">";
            }
            // line 131
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pagination", [], "any", false, true, false, 131), "links", [], "any", false, true, false, 131), "next", [], "any", true, true, false, 131)) {
                echo "
    <link rel=\"next\" href=\"";
                // line 132
                echo $this->extensions['Cecil\Renderer\Twig\Extension']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 132, $this->source); })()), "pagination", [], "any", false, false, false, 132), "links", [], "any", false, false, false, 132), "next", [], "any", false, false, false, 132), ["canonical" => true]);
                echo "\">";
            }
            // line 133
            echo "
    <link rel=\"last\" href=\"";
            // line 134
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 134, $this->source); })()), "pagination", [], "any", false, false, false, 134), "links", [], "any", false, false, false, 134), "last", [], "any", false, false, false, 134), ["canonical" => true]);
            echo "\">";
        }
        // line 137
        $this->loadTemplate("partials/alternates.html.twig", "partials/metatags.html.twig", 137)->display(twig_to_array(["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 137, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 137, $this->source); })())]));
        // line 139
        $this->loadTemplate("partials/alternateslang.html.twig", "partials/metatags.html.twig", 139)->display(twig_to_array(["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 139, $this->source); })())]));
        // line 140
        echo "
    <meta property=\"og:locale\" content=\"";
        // line 141
        echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 141, $this->source); })()), "locale", [], "any", false, false, false, 141);
        echo "\" />
    <meta property=\"og:site_name\" content=\"";
        // line 142
        echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 142, $this->source); })()), "site_name", [], "any", false, false, false, 142);
        echo "\" />
    <meta property=\"og:type\" content=\"";
        // line 143
        echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 143, $this->source); })()), "type", [], "any", false, false, false, 143);
        echo "\" />
    <meta property=\"og:title\" content=\"";
        // line 144
        echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 144, $this->source); })()), "title", [], "any", false, false, false, 144);
        echo "\" />
    <meta property=\"og:description\" content=\"";
        // line 145
        echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 145, $this->source); })()), "description", [], "any", false, false, false, 145);
        echo "\" />
    <meta property=\"og:url\" content=\"";
        // line 146
        echo $this->extensions['Cecil\Renderer\Twig\Extension']->url((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 146, $this->source); })()), ["canonical" => true]);
        echo "\" />";
        // line 147
        if (twig_get_attribute($this->env, $this->source, ($context["opengraph"] ?? null), "image", [], "any", true, true, false, 147)) {
            echo "
    <meta property=\"og:image\" content=\"";
            // line 148
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->url(twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 148, $this->source); })()), "image", [], "any", false, false, false, 148), ["canonical" => true]);
            echo "\" />
    <meta property=\"og:image:type\" content=\"";
            // line 149
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 149, $this->source); })()), "image", [], "any", false, false, false, 149), "subtype", [], "any", false, false, false, 149);
            echo "\" />
    <meta property=\"og:image:width\" content=\"";
            // line 150
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 150, $this->source); })()), "image", [], "any", false, false, false, 150), "width", [], "any", false, false, false, 150);
            echo "\" />
    <meta property=\"og:image:height\" content=\"";
            // line 151
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 151, $this->source); })()), "image", [], "any", false, false, false, 151), "height", [], "any", false, false, false, 151);
            echo "\" />
    <meta property=\"og:image:alt\" content=\"";
            // line 152
            echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 152, $this->source); })()), "title", [], "any", false, false, false, 152);
            echo "\" />";
        }
        // line 155
        if (twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155)) {
            echo "
    <meta property=\"fb:profile_id\" content=\"";
            // line 156
            echo twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 156, $this->source); })()), "id", [], "any", false, false, false, 156);
            echo "\" />";
        }
        // line 158
        if (twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 158, $this->source); })()), "firstname", [], "any", false, false, false, 158)) {
            echo "
    <meta property=\"profile:first_name\" content=\"";
            // line 159
            echo twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 159, $this->source); })()), "firstname", [], "any", false, false, false, 159);
            echo "\" />";
        }
        // line 161
        if (twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 161, $this->source); })()), "lastname", [], "any", false, false, false, 161)) {
            echo "
    <meta property=\"profile:last_name\" content=\"";
            // line 162
            echo twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 162, $this->source); })()), "lastname", [], "any", false, false, false, 162);
            echo "\" />";
        }
        // line 164
        if (twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 164, $this->source); })()), "username", [], "any", false, false, false, 164)) {
            echo "
    <meta property=\"profile:username\" content=\"";
            // line 165
            echo twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 165, $this->source); })()), "username", [], "any", false, false, false, 165);
            echo "\" />";
        }
        // line 167
        echo "
    <meta name=\"twitter:title\" content=\"";
        // line 168
        echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 168, $this->source); })()), "title", [], "any", false, false, false, 168);
        echo "\" />
    <meta name=\"twitter:description\" content=\"";
        // line 169
        echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 169, $this->source); })()), "description", [], "any", false, false, false, 169);
        echo "\" />";
        // line 170
        if ((twig_get_attribute($this->env, $this->source, ($context["opengraph"] ?? null), "image", [], "any", true, true, false, 170) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 170, $this->source); })()), "image", [], "any", false, false, false, 170), "width", [], "any", false, false, false, 170) > 500))) {
            echo "
    <meta name=\"twitter:card\" content=\"summary_large_image\" />
    <meta name=\"twitter:image\" content=\"";
            // line 172
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->url(twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 172, $this->source); })()), "image", [], "any", false, false, false, 172), ["canonical" => true]);
            echo "\" />
    <meta name=\"twitter:image:alt\" content=\"";
            // line 173
            echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 173, $this->source); })()), "title", [], "any", false, false, false, 173);
            echo "\" />";
        } else {
            // line 174
            echo "
    <meta name=\"twitter:card\" content=\"summary\" />";
        }
        // line 177
        if (twig_get_attribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 177, $this->source); })()), "site", [], "any", false, false, false, 177)) {
            echo "
    <meta name=\"twitter:site\" content=\"@";
            // line 178
            echo twig_get_attribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 178, $this->source); })()), "site", [], "any", false, false, false, 178);
            echo "\" />";
        }
        // line 180
        if (twig_get_attribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 180, $this->source); })()), "creator", [], "any", false, false, false, 180)) {
            echo "
    <meta name=\"twitter:creator\" content=\"@";
            // line 181
            echo twig_get_attribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 181, $this->source); })()), "creator", [], "any", false, false, false, 181);
            echo "\" />";
        }
        // line 183
        echo "
";
        // line 184
        $this->loadTemplate("partials/jsonld.js.twig", "partials/metatags.html.twig", 184)->display(twig_array_merge($context, ["author" => (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 184, $this->source); })()), "favicon_url" => ((array_key_exists("favicon_url", $context)) ? (_twig_default_filter((isset($context["favicon_url"]) || array_key_exists("favicon_url", $context) ? $context["favicon_url"] : (function () { throw new RuntimeError('Variable "favicon_url" does not exist.', 184, $this->source); })()), "")) : (""))]));
    }

    // line 100
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 100, $this->source); })());
    }

    // line 101
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 101, $this->source); })());
    }

    public function getTemplateName()
    {
        return "partials/metatags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 101,  404 => 100,  400 => 184,  397 => 183,  393 => 181,  389 => 180,  385 => 178,  381 => 177,  377 => 174,  373 => 173,  369 => 172,  364 => 170,  361 => 169,  357 => 168,  354 => 167,  350 => 165,  346 => 164,  342 => 162,  338 => 161,  334 => 159,  330 => 158,  326 => 156,  322 => 155,  318 => 152,  314 => 151,  310 => 150,  306 => 149,  302 => 148,  298 => 147,  295 => 146,  291 => 145,  287 => 144,  283 => 143,  279 => 142,  275 => 141,  272 => 140,  270 => 139,  268 => 137,  264 => 134,  261 => 133,  257 => 132,  253 => 131,  249 => 129,  245 => 128,  242 => 127,  238 => 126,  234 => 123,  230 => 122,  226 => 120,  222 => 119,  204 => 114,  200 => 113,  196 => 112,  192 => 111,  190 => 110,  187 => 108,  184 => 107,  180 => 106,  176 => 105,  172 => 103,  168 => 102,  165 => 101,  160 => 100,  157 => 96,  155 => 95,  153 => 91,  150 => 88,  148 => 87,  146 => 84,  145 => 83,  144 => 81,  141 => 78,  139 => 77,  136 => 75,  134 => 74,  131 => 72,  128 => 70,  125 => 68,  123 => 67,  121 => 66,  119 => 64,  118 => 60,  117 => 59,  116 => 58,  113 => 55,  111 => 54,  108 => 47,  106 => 46,  103 => 43,  101 => 42,  99 => 41,  95 => 37,  93 => 36,  90 => 34,  88 => 33,  86 => 32,  84 => 31,  82 => 29,  80 => 27,  74 => 21,  72 => 20,  70 => 19,  68 => 18,  66 => 17,  62 => 14,  60 => 13,  58 => 12,  56 => 11,  53 => 9,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/metatags.html.twig", "phar:///web/roanbuysse/buysse.io/www/cecil.phar/src/../resources/layouts/partials/metatags.html.twig");
    }
}

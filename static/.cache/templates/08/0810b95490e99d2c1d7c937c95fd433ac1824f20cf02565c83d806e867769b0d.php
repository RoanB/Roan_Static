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

/* feed.twig */
class __TwigTemplate_f5dce1e038f833e00311a50105eb28e5c03e05c6a889cccd24eeb8ef46f0dcc9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'feed' => [$this, 'block_feed'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["pages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 1, $this->source); })()), "pages", [], "any", false, false, false, 1), "showable", [], "any", false, false, false, 1);
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pages", [], "any", true, true, false, 3)) {
            // line 4
            $context["pages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 4, $this->source); })()), "pages", [], "any", false, false, false, 4), "showable", [], "any", false, false, false, 4);
        }
        // line 7
        $context["first"] = twig_first($this->env, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 7, $this->source); })()));
        // line 8
        $context["title"] = ((twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8) . " - ") . twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8));
        // line 9
        $context["date"] = ((twig_get_attribute($this->env, $this->source, ($context["first"] ?? null), "date", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["first"] ?? null), "date", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "time", [], "any", false, false, false, 9))) : (twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "time", [], "any", false, false, false, 9)));
        // line 10
        $context["lang"] = ((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "language", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "language", [], "any", false, false, false, 10), "en")) : ("en"));
        // line 12
        if ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12) == "homepage")) {
            // line 13
            $context["title"] = twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13);
        }
        // line 16
        $this->displayBlock('feed', $context, $blocks);
    }

    public function block_feed($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "feed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  55 => 13,  53 => 12,  51 => 10,  49 => 9,  47 => 8,  45 => 7,  42 => 4,  40 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "feed.twig", "phar:///web/roanbuysse/buysse.io/www/cecil.phar/src/../resources/layouts/feed.twig");
    }
}

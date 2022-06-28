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

/* sitemap.xml.twig */
class __TwigTemplate_9b84e6574bb0995fdb921094f27e6d5c1cb27dccbf66eac630f472949b698d9d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"yes\" ?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
  xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Twig\Extension']->sortByDate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 4, $this->source); })()), "pages", [], "any", false, false, false, 4), "showable", [], "any", false, false, false, 4)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            echo "  <url>
    <loc>";
            // line 6
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->url($context["page"], ["canonical" => true]);
            echo "</loc>
    <lastmod>";
            // line 7
            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "date", [], "any", false, false, false, 7), "Y-m-d");
            echo "</lastmod>
    <changefreq>";
            // line 8
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, true, false, 8), "changefreq", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, true, false, 8), "changefreq", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "defaultpages", [], "any", false, false, false, 8), "sitemap", [], "any", false, false, false, 8), "changefreq", [], "any", false, false, false, 8))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "defaultpages", [], "any", false, false, false, 8), "sitemap", [], "any", false, false, false, 8), "changefreq", [], "any", false, false, false, 8)));
            echo "</changefreq>
    <priority>";
            // line 9
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, true, false, 9), "priority", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, true, false, 9), "priority", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "defaultpages", [], "any", false, false, false, 9), "sitemap", [], "any", false, false, false, 9), "priority", [], "any", false, false, false, 9))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "defaultpages", [], "any", false, false, false, 9), "sitemap", [], "any", false, false, false, 9), "priority", [], "any", false, false, false, 9)));
            echo "</priority>";
            // line 10
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "translations", [], "any", false, false, false, 10)) >= 1) && twig_get_attribute($this->env, $this->source, $context["page"], "language", [], "any", true, true, false, 10))) {
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["page"], "translations", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["alternate"]) {
                    echo "
    <xhtml:link rel=\"alternate\" hreflang=\"";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["alternate"], "language", [], "any", false, false, false, 12);
                    echo "\" href=\"";
                    echo $this->extensions['Cecil\Renderer\Twig\Extension']->url($context["alternate"], ["canonical" => true]);
                    echo "\" />";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alternate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "
    <xhtml:link rel=\"alternate\" hreflang=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["page"], "language", [], "any", false, false, false, 14);
                echo "\" href=\"";
                echo $this->extensions['Cecil\Renderer\Twig\Extension']->url($context["page"], ["canonical" => true]);
                echo "\" />";
            }
            // line 15
            echo "
  </url>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</urlset>";
    }

    public function getTemplateName()
    {
        return "sitemap.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 18,  90 => 15,  84 => 14,  81 => 13,  72 => 12,  66 => 11,  64 => 10,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sitemap.xml.twig", "phar:///web/roanbuysse/buysse.io/www/cecil.phar/src/../resources/layouts/sitemap.xml.twig");
    }
}

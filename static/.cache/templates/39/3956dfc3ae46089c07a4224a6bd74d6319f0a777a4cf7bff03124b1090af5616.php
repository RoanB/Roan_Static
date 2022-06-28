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

/* robots.txt.twig */
class __TwigTemplate_e3515600b64fe2f2dd86d4e4a8b04da368239cd7b6d2ae785dfac4dd4e54d387 extends \Twig\Template
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
        echo "User-agent: *
Allow: /
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 5, $this->source); })()), "allpages", [], "any", false, false, false, 5), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "redirect", [], "any", true, true, false, 5) && (twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 5, $this->source); })()), "type", [], "any", false, false, false, 5) == "page")); }));
        foreach ($context['_seq'] as $context["_key"] => $context["redirect"]) {
            // line 6
            echo "Disallow: ";
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->url($context["redirect"], ["canonical" => false]);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redirect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 9), 404, [], "any", true, true, false, 9)) {
            // line 10
            echo "Disallow: ";
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 10, $this->source); })()), "pages", [], "any", false, false, false, 10), 404, [], "any", false, false, false, 10), ["canonical" => false]);
            // line 11
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 11, $this->source); })()), "pages", [], "any", false, false, false, 11), 404, [], "any", false, false, false, 11), "translations", [], "any", false, false, false, 11) > 0)) {
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()), "pages", [], "any", false, false, false, 12), 404, [], "any", false, false, false, 12), "translations", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
                    echo "
Disallow: ";
                    // line 13
                    echo $this->extensions['Cecil\Renderer\Twig\Extension']->url($context["translation"], ["canonical" => false]);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 15
            echo "
";
        }
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 18), "sitemap", [], "any", true, true, false, 18)) {
            // line 19
            echo "Sitemap: ";
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->url("sitemap", ["canonical" => true]);
        }
    }

    public function getTemplateName()
    {
        return "robots.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  78 => 18,  74 => 15,  67 => 13,  61 => 12,  59 => 11,  56 => 10,  54 => 9,  45 => 6,  41 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "robots.txt.twig", "phar:///web/roanbuysse/buysse.io/www/cecil.phar/src/../resources/layouts/robots.txt.twig");
    }
}

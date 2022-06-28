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

/* partials/alternates.html.twig */
class __TwigTemplate_caadf04491afe3537ad2e4ed09d44ffad64304323e4ad009bf62232924f31395 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "alternates", [], "any", true, true, false, 1)) {
            // line 2
            if ( !array_key_exists("title", $context)) {
                $context["title"] = twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2);
            }
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "alternates", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["alternate"]) {
                echo "
    <link rel=\"";
                // line 4
                echo twig_get_attribute($this->env, $this->source, $context["alternate"], "rel", [], "any", false, false, false, 4);
                echo "\" type=\"";
                echo twig_get_attribute($this->env, $this->source, $context["alternate"], "type", [], "any", false, false, false, 4);
                echo "\" title=\"";
                echo twig_trim_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()));
                if ((twig_get_attribute($this->env, $this->source, $context["alternate"], "format", [], "any", false, false, false, 4) != "html")) {
                    echo " (";
                    echo twig_get_attribute($this->env, $this->source, $context["alternate"], "title", [], "any", false, false, false, 4);
                    echo ")";
                }
                echo "\" href=\"";
                echo $this->extensions['Cecil\Renderer\Twig\Extension']->url((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 4, $this->source); })()), ["canonical" => true, "format" => twig_get_attribute($this->env, $this->source, $context["alternate"], "format", [], "any", false, false, false, 4)]);
                echo "\" />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alternate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "partials/alternates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/alternates.html.twig", "phar:///web/roanbuysse/buysse.io/www/cecil.phar/src/../resources/layouts/partials/alternates.html.twig");
    }
}

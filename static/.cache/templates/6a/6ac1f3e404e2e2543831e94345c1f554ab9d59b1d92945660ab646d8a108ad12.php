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

/* partials/alternateslang.html.twig */
class __TwigTemplate_e71409fd1c8348805d41c1cf79235079579afa454a89c1f8aa5ceb173be17b42 extends \Twig\Template
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
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 1, $this->source); })()), "translations", [], "any", false, false, false, 1)) >= 1) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "language", [], "any", true, true, false, 1))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "translations", [], "any", false, false, false, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["alternate"]) {
                echo "
    <link rel=\"alternate\" hreflang=\"";
                // line 3
                echo twig_get_attribute($this->env, $this->source, $context["alternate"], "language", [], "any", false, false, false, 3);
                echo "\" href=\"";
                echo $this->extensions['Cecil\Renderer\Twig\Extension']->url($context["alternate"], ["canonical" => true]);
                echo "\">";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alternate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 4
            echo "
    <link rel=\"alternate\" hreflang=\"x-default\" href=\"";
            // line 5
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->url((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 5, $this->source); })()), ["canonical" => true]);
            echo "\">";
        }
    }

    public function getTemplateName()
    {
        return "partials/alternateslang.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 5,  54 => 4,  45 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/alternateslang.html.twig", "phar:///web/roanbuysse/buysse.io/www/cecil.phar/src/../resources/layouts/partials/alternateslang.html.twig");
    }
}

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

/* partials/navigation.html.twig */
class __TwigTemplate_50595156d43597247978717d3a9b09756008367f526c3f3ed8702f02d9a99988 extends \Twig\Template
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
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 1, $this->source); })()), "main")) : ("main"));
        // line 2
        echo "      <nav>
        <ul>";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Twig\Extension']->sortByWeight(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 4, $this->source); })()), "menus", [], "any", false, false, false, 4), (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 4, $this->source); })()), [], "any", false, false, false, 4)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "
          <li>
            <a href=\"";
            // line 6
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->url(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 6));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 6);
            echo "</a>
          </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
        </ul>
      </nav>";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  49 => 6,  42 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/navigation.html.twig", "phar:///web/roanbuysse/buysse.io/www/cecil.phar/src/../resources/layouts/partials/navigation.html.twig");
    }
}

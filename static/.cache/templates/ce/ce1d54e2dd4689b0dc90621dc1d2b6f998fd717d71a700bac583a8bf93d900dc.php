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

/* partials/googleanalytics.js.twig */
class __TwigTemplate_f1cd2b137450ca30af4fced415a6e3342c9509fd389f65c57d683a292df33fba extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "googleanalytics", [], "any", true, true, false, 1)) {
            // line 2
            echo "    <!-- Google Analytics -->
    <script>";
            // line 3
            ob_start(function () { return ''; });
            // line 4
            echo "      window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
      ga('create', '";
            // line 5
            echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 5, $this->source); })()), "googleanalytics", [], "any", false, false, false, 5);
            echo "', 'auto');
      ga('send', 'pageview');
    ";
            $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 3
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->minifyJs($___internal_parse_2_);
            // line 7
            echo "</script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/googleanalytics.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  53 => 3,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/googleanalytics.js.twig", "phar:///web/roanbuysse/buysse.io/www/cecil.phar/src/../resources/layouts/partials/googleanalytics.js.twig");
    }
}

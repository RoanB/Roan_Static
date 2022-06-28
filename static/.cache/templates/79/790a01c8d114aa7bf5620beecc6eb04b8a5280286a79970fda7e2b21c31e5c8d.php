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

/* _default/list.atom.twig */
class __TwigTemplate_8cfbadbeeef57619d33bab453cb7f7961aab96721c347a10381a5aa816451a69 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'feed' => [$this, 'block_feed'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return "feed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["author_name"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, true, false, 1), "name", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, true, false, 1), "name", [], "any", false, false, false, 1), twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 1, $this->source); })()), "title", [], "any", false, false, false, 1))) : (twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 1, $this->source); })()), "title", [], "any", false, false, false, 1)));
        // line 2
        $context["author_uri"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, true, false, 2), "url", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, true, false, 2), "url", [], "any", false, false, false, 2), twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "baseurl", [], "any", false, false, false, 2))) : (twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "baseurl", [], "any", false, false, false, 2)));
        // line 4
        $this->parent = $this->loadTemplate("feed.twig", "_default/list.atom.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_feed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<?xml-stylesheet type=\"text/xsl\" href=\"";
        // line 8
        echo $this->extensions['Cecil\Renderer\Twig\Extension']->url("atom.xsl");
        echo "\" media=\"all\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\" xml:lang=\"";
        // line 9
        echo (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 9, $this->source); })());
        echo "\">
  <id>";
        // line 10
        echo $this->extensions['Cecil\Renderer\Twig\Extension']->url((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 10, $this->source); })()), ["canonical" => true]);
        echo "</id>
  <title>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })()));
        echo "</title>
  <subtitle><![CDATA[";
        // line 12
        echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12);
        echo "]]></subtitle>
  <link href=\"";
        // line 13
        echo $this->extensions['Cecil\Renderer\Twig\Extension']->url((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 13, $this->source); })()), ["canonical" => true, "format" => "atom"]);
        echo "\" rel=\"self\" type=\"application/atom+xml\" />
  <link href=\"";
        // line 14
        echo $this->extensions['Cecil\Renderer\Twig\Extension']->url((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 14, $this->source); })()), ["canonical" => true, "format" => "html"]);
        echo "\" rel=\"alternate\" type=\"text/html\" />
  <updated>";
        // line 15
        echo twig_date_format_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 15, $this->source); })()), "c");
        echo "</updated>
  <author>
    <name>";
        // line 17
        echo (isset($context["author_name"]) || array_key_exists("author_name", $context) ? $context["author_name"] : (function () { throw new RuntimeError('Variable "author_name" does not exist.', 17, $this->source); })());
        echo "</name>
    <uri>";
        // line 18
        echo (isset($context["author_uri"]) || array_key_exists("author_uri", $context) ? $context["author_uri"] : (function () { throw new RuntimeError('Variable "author_uri" does not exist.', 18, $this->source); })());
        echo "</uri>
  </author>";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Twig\Extension']->sortByDate((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 20, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo "
  <entry xml:lang=\"";
            // line 21
            echo (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 21, $this->source); })());
            echo "\">
    <id>";
            // line 22
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->url($context["p"], ["canonical" => true]);
            echo "</id>
    <title>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 23));
            echo "</title>";
            // line 24
            if (twig_in_filter("txt", ((twig_get_attribute($this->env, $this->source, $context["p"], "output", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["p"], "output", [], "any", false, false, false, 24), "html")) : ("html")))) {
                echo "
    <content type=\"text\">
      <![CDATA[";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["p"], "content", [], "any", false, false, false, 26);
                echo "]]>
    </content>";
            } else {
                // line 28
                echo "
    <content type=\"html\">
      <![CDATA[";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["p"], "content", [], "any", false, false, false, 30);
                echo "]]>
    </content>";
            }
            // line 32
            echo "
    <link href=\"";
            // line 33
            echo $this->extensions['Cecil\Renderer\Twig\Extension']->url($context["p"], ["canonical" => true]);
            echo "\" rel=\"alternate\" type=\"text/html\" />
    <published>";
            // line 34
            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "date", [], "any", false, false, false, 34), "c");
            echo "</published>
    <updated>";
            // line 35
            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "date", [], "any", false, false, false, 35), "c");
            echo "</updated>
  </entry>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
</feed>
";
    }

    public function getTemplateName()
    {
        return "_default/list.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 37,  146 => 35,  142 => 34,  138 => 33,  135 => 32,  130 => 30,  126 => 28,  121 => 26,  116 => 24,  113 => 23,  109 => 22,  105 => 21,  99 => 20,  95 => 18,  91 => 17,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  55 => 7,  51 => 6,  46 => 4,  44 => 2,  42 => 1,  35 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "_default/list.atom.twig", "phar:///web/roanbuysse/buysse.io/www/cecil.phar/src/../resources/layouts/_default/list.atom.twig");
    }
}

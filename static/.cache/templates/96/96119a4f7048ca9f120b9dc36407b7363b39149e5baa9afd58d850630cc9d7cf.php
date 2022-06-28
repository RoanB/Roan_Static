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

/* atom.xslt.twig */
class __TwigTemplate_2c2c470b38773ffcef51a421e9e813c6bdb64c797b9e6fcc91152da58760a620 extends \Twig\Template
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
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<xsl:stylesheet xmlns:xsl=\"http://www.w3.org/1999/XSL/Transform\" xmlns:atom=\"http://www.w3.org/2005/Atom\" version=\"1.0\">
  <xsl:output method=\"html\" version=\"1.0\" encoding=\"utf-8\" indent=\"yes\" />
  <xsl:template match=\"/\">
    <html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 5
        echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 5, $this->source); })()), "language", [], "any", false, false, false, 5);
        echo "\">
      <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width\" />
        <title><xsl:value-of select=\"atom:feed/atom:title\" /> (feed)</title>
        <style type=\"text/css\">
          html {
            margin: 0;
            padding: 0;
          }
          body {
            background-color: #F3F7FC;
            color: hsl(180, 1%, 31%);
            font-family: Helvetica, Arial, sans-serif;
            font-size: 1rem;
            line-height: 1.5rem;
            margin: 5%;
            padding: 0;
          }
          input {
            min-width: 100%;
            margin-left: .2rem;
            padding-left: .2rem;
            padding-right: .2rem;
          }
          ol {
            list-style-type: disc;
            padding-left: 1rem;
          }
          h2 {
            font-size: 1.5rem;
            font-weight: inherit;
          }
          @media (min-width: 768px) {
            input {
              min-width: 20rem;
            }
          }
        </style>
      </head>
      <body>
        <h1><a><xsl:attribute name=\"href\"><xsl:value-of select=\"atom:feed/atom:link[@rel='alternate']/@href\" /></xsl:attribute><xsl:value-of select=\"atom:feed/atom:title\" /></a></h1>
        <p>To subscribe to this feed, copy its URL to your <a href=\"https://wikipedia.org/wiki/Comparison_of_feed_aggregators\">feed reader</a>.</p>
        <p>
          <label for=\"url\">Feed URL:</label>
          <input onClick=\"this.select();\">
            <xsl:attribute name=\"type\">url</xsl:attribute>
            <xsl:attribute name=\"url\">URL</xsl:attribute>
            <xsl:attribute name=\"spellcheck\">false</xsl:attribute>
            <xsl:attribute name=\"value\"><xsl:value-of select=\"atom:feed/atom:link[@rel='self']/@href\" /></xsl:attribute>
           </input>
        </p>
        <hr />
        <p>Feed’s entries:</p>
        <ol>
          <xsl:for-each select=\"atom:feed/atom:entry\">
          <li>
            <h2><a><xsl:attribute name=\"href\"><xsl:value-of select=\"atom:link/@href\" /></xsl:attribute><xsl:value-of select=\"atom:title\" /></a></h2>
          </li>
          </xsl:for-each>
        </ol>
        <hr />
        <p>Powered by <a href=\"";
        // line 67
        echo twig_get_attribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 67, $this->source); })()), "url", [], "any", false, false, false, 67);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 67, $this->source); })()), "poweredby", [], "any", false, false, false, 67);
        echo "</a></p>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>";
    }

    public function getTemplateName()
    {
        return "atom.xslt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 67,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "atom.xslt.twig", "phar:///web/roanbuysse/buysse.io/www/cecil.phar/src/../resources/layouts/atom.xslt.twig");
    }
}

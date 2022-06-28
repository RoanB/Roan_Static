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

/* _default/page.html.twig */
class __TwigTemplate_ecc1d90f56749e675b582a63341da329ccd980adf85f4bb58b6978ce1f6e370a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "language", [], "any", false, false, false, 2);
        echo "\">
  <head>";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 490
        echo "
  </head>
  <body>
    <header>
      <h1>";
        // line 494
        echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 494, $this->source); })()), "title", [], "any", false, false, false, 494);
        echo "</h1>";
        // line 495
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 495, $this->source); })()), "menus", [], "any", false, false, false, 495), "main", [], "any", false, false, false, 495)) > 1)) {
            echo "
";
            // line 496
            $this->loadTemplate("partials/navigation.html.twig", "_default/page.html.twig", 496)->display($context);
        }
        // line 497
        echo "
    </header>
    <main>";
        // line 500
        $this->displayBlock('content', $context, $blocks);
        // line 502
        echo "
    <main>
    <footer>
      <small>Powered by <a href=\"";
        // line 505
        echo twig_get_attribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 505, $this->source); })()), "url", [], "any", false, false, false, 505);
        echo "\">Cecil</a> &amp; <a href=\"https://newcss.net\">new.css</a></small>
    </footer>
";
        // line 507
        $this->loadTemplate("partials/googleanalytics.js.twig", "_default/page.html.twig", 507)->display(twig_to_array(["site" => (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 507, $this->source); })())]));
        echo "
  </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"theme-color\" media=\"(prefers-color-scheme: light)\" content=\"white\" />
    <meta name=\"theme-color\" media=\"(prefers-color-scheme: dark)\" content=\"black\" />
";
        // line 9
        $this->loadTemplate("partials/metatags.html.twig", "_default/page.html.twig", 9)->display(twig_to_array(["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "site" => (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })())]));
        echo "
    <style>";
        // line 10
        $___internal_parse_0_ = ('' === $tmp = "      /* source: https://github.com/xz/new.css/blob/80e7107b491b1062193331ae93ff3670c6a2398d/new.css */
      :root {
        --nc-font-sans: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";
        --nc-font-mono: Consolas, monaco, 'Ubuntu Mono', 'Liberation Mono', 'Courier New', Courier, monospace;

        /* Light theme */
        --nc-tx-1: #000000;
        --nc-tx-2: #1A1A1A;
        --nc-bg-1: #FFFFFF;
        --nc-bg-2: #F6F8FA;
        --nc-bg-3: #E5E7EB;
        --nc-lk-1: #0070F3;
        --nc-lk-2: #0366D6;
        --nc-lk-tx: #FFFFFF;
        --nc-ac-1: #79FFE1;
        --nc-ac-tx: #0C4047;

        /* Dark theme */
        --nc-d-tx-1: #ffffff;
        --nc-d-tx-2: #eeeeee;
        --nc-d-bg-1: #000000;
        --nc-d-bg-2: #111111;
        --nc-d-bg-3: #222222;
        --nc-d-lk-1: #3291FF;
        --nc-d-lk-2: #0070F3;
        --nc-d-lk-tx: #FFFFFF;
        --nc-d-ac-1: #7928CA;
        --nc-d-ac-tx: #FFFFFF;
      }

      @media (prefers-color-scheme: dark) {
        :root {
          --nc-tx-1: var(--nc-d-tx-1);
          --nc-tx-2: var(--nc-d-tx-2);
          --nc-bg-1: var(--nc-d-bg-1);
          --nc-bg-2: var(--nc-d-bg-2);
          --nc-bg-3: var(--nc-d-bg-3);
          --nc-lk-1: var(--nc-d-lk-1);
          --nc-lk-2: var(--nc-d-lk-2);
          --nc-lk-tx: var(--nc--dlk-tx);
          --nc-ac-1: var(--nc-d-ac-1);
          --nc-ac-tx: var(--nc--dac-tx);
        }
      }

      * {
        /* Reset margins and padding */
        margin: 0;
        padding: 0;
      }

      address,
      area,
      article,
      aside,
      audio,
      blockquote,
      datalist,
      details,
      dl,
      fieldset,
      figure,
      form,
      input,
      iframe,
      img,
      meter,
      nav,
      ol,
      optgroup,
      option,
      output,
      p,
      pre,
      progress,
      ruby,
      section,
      table,
      textarea,
      ul,
      video {
        /* Margins for most elements */
        margin-bottom: 1rem;
      }

      html,input,select,button {
        /* Set body font family and some finicky elements */
        font-family: var(--nc-font-sans);
      }

      body {
        /* Center body in page */
        margin: 0 auto;
        max-width: 750px;
        padding: 2rem;
        border-radius: 6px;
        overflow-x: hidden;
        word-break: break-word;
        overflow-wrap: break-word;
        background: var(--nc-bg-1);

        /* Main body text */
        color: var(--nc-tx-2);
        font-size: 1.03rem;
        line-height: 1.5;
      }

      ::selection {
        /* Set background color for selected text */
        background: var(--nc-ac-1);
        color: var(--nc-ac-tx);
      }

      h1,h2,h3,h4,h5,h6 {
        line-height: 1;
        color: var(--nc-tx-1);
        padding-top: .875rem;
      }

      h1,
      h2,
      h3 {
        color: var(--nc-tx-1);
        padding-bottom: 2px;
        margin-bottom: 8px;
        border-bottom: 1px solid var(--nc-bg-2);
      }

      h4,
      h5,
      h6 {
        margin-bottom: .3rem;
      }

      h1 {
        font-size: 2.25rem;
      }

      h2 {
        font-size: 1.85rem;
      }

      h3 {
        font-size: 1.55rem;
      }

      h4 {
        font-size: 1.25rem;
      }

      h5 {
        font-size: 1rem;
      }

      h6 {
        font-size: .875rem;
      }

      a {
        color: var(--nc-lk-1);
      }

      a:hover {
        color: var(--nc-lk-2);
      }

      abbr:hover {
        /* Set the '?' cursor while hovering an abbreviation */
        cursor: help;
      }

      blockquote {
        padding: 1.5rem;
        background: var(--nc-bg-2);
        border-left: 5px solid var(--nc-bg-3);
      }

      abbr {
        cursor: help;
      }

      blockquote *:last-child {
        padding-bottom: 0;
        margin-bottom: 0;
      }

      header {
        background: var(--nc-bg-2);
        border-bottom: 1px solid var(--nc-bg-3);
        padding: 2rem 1.5rem;

        /* This sets the right and left margins to cancel out the body's margins. It's width is still the same, but the background stretches across the page's width. */

        margin: -2rem calc(50% - 50vw) 2rem;

        /* Shorthand for:

        margin-top: -2rem;
        margin-bottom: 2rem;

        margin-left: calc(50% - 50vw);
        margin-right: calc(50% - 50vw); */

        padding-left: calc(50vw - 50%);
        padding-right: calc(50vw - 50%);
      }

      header h1,
      header h2,
      header h3 {
        padding-bottom: 0;
        border-bottom: 0;
      }

      header > *:first-child {
        margin-top: 0;
        padding-top: 0;
      }

      header > *:last-child {
        margin-bottom: 0;
      }

      a button,
      button,
      input[type=\"submit\"],
      input[type=\"reset\"],
      input[type=\"button\"] {
        font-size: 1rem;
        display: inline-block;
        padding: 6px 12px;
        text-align: center;
        text-decoration: none;
        white-space: nowrap;
        background: var(--nc-lk-1);
        color: var(--nc-lk-tx);
        border: 0;
        border-radius: 4px;
        box-sizing: border-box;
        cursor: pointer;
        color: var(--nc-lk-tx);
      }

      a button[disabled],
      button[disabled],
      input[type=\"submit\"][disabled],
      input[type=\"reset\"][disabled],
      input[type=\"button\"][disabled] {
        cursor: default;
        opacity: .5;

        /* Set the [X] cursor while hovering a disabled link */
        cursor: not-allowed;
      }

      .button:focus,
      .button:enabled:hover,
      button:focus,
      button:enabled:hover,
      input[type=\"submit\"]:focus,
      input[type=\"submit\"]:enabled:hover,
      input[type=\"reset\"]:focus,
      input[type=\"reset\"]:enabled:hover,
      input[type=\"button\"]:focus,
      input[type=\"button\"]:enabled:hover {
        background: var(--nc-lk-2);
      }

      a img {
        margin-bottom: 0px;
      }

      code,
      pre,
      kbd,
      samp {
        /* Set the font family for monospaced elements */
        font-family: var(--nc-font-mono);
      }

      code,
      samp,
      kbd,
      pre {
        /* The main preformatted style. This is changed slightly across different cases. */
        background: var(--nc-bg-2);
        border: 1px solid var(--nc-bg-3);
        border-radius: 4px;
        padding: 3px 6px;
        /* ↓ font-size is relative to containing element, so it scales for titles*/
        font-size: 0.9em;
      }

      kbd {
        /* Makes the kbd element look like a keyboard key */
        border-bottom: 3px solid var(--nc-bg-3);
      }

      pre {
        padding: 1rem 1.4rem;
        max-width: 100%;
        overflow: auto;
      }

      pre code {
        /* When <code> is in a <pre>, reset it's formatting to blend in */
        background: inherit;
        font-size: inherit;
        color: inherit;
        border: 0;
        padding: 0;
        margin: 0;
      }

      code pre {
        /* When <pre> is in a <code>, reset it's formatting to blend in */
        display: inline;
        background: inherit;
        font-size: inherit;
        color: inherit;
        border: 0;
        padding: 0;
        margin: 0;
      }

      details {
        /* Make the <details> look more \"clickable\" */
        padding: .6rem 1rem;
        background: var(--nc-bg-2);
        border: 1px solid var(--nc-bg-3);
        border-radius: 4px;
      }

      summary {
        /* Makes the <summary> look more like a \"clickable\" link with the pointer cursor */
        cursor: pointer;
        font-weight: bold;
      }

      details[open] {
        /* Adjust the <details> padding while open */
        padding-bottom: .75rem;
      }

      details[open] summary {
        /* Adjust the <details> padding while open */
        margin-bottom: 6px;
      }

      details[open]>*:last-child {
        /* Resets the bottom margin of the last element in the <details> while <details> is opened. This prevents double margins/paddings. */
        margin-bottom: 0;
      }

      dt {
        font-weight: bold;
      }

      dd::before {
        /* Add an arrow to data table definitions */
        content: '→ ';
      }

      hr {
        /* Reset the border of the <hr> separator, then set a better line */
        border: 0;
        border-bottom: 1px solid var(--nc-bg-3);
        margin: 1rem auto;
      }

      fieldset {
        margin-top: 1rem;
        padding: 2rem;
        border: 1px solid var(--nc-bg-3);
        border-radius: 4px;
      }

      legend {
        padding: auto .5rem;
      }

      table {
        /* border-collapse sets the table's elements to share borders, rather than floating as separate \"boxes\". */
        border-collapse: collapse;
        width: 100%
      }

      td,
      th {
        border: 1px solid var(--nc-bg-3);
        text-align: left;
        padding: .5rem;
      }

      th {
        background: var(--nc-bg-2);
      }

      tr:nth-child(even) {
        /* Set every other cell slightly darker. Improves readability. */
        background: var(--nc-bg-2);
      }

      table caption {
        font-weight: bold;
        margin-bottom: .5rem;
      }

      textarea {
        /* Don't let the <textarea> extend off the screen naturally or when dragged by the user */
        max-width: 100%;
      }

      ol,
      ul {
        /* Replace the browser default padding */
        padding-left: 2rem;
      }

      li {
        margin-top: .4rem;
      }

      ul ul,
      ol ul,
      ul ol,
      ol ol {
        margin-bottom: 0;
      }

      mark {
        padding: 3px 6px;
        background: var(--nc-ac-1);
        color: var(--nc-ac-tx);
      }

      textarea,
      select,
      input {
        padding: 6px 12px;
        margin-bottom: .5rem;
        background: var(--nc-bg-2);
        color: var(--nc-tx-2);
        border: 1px solid var(--nc-bg-3);
        border-radius: 4px;
        box-shadow: none;
        box-sizing: border-box;
      }

      img {
        max-width: 100%;
      }

      /* nav */
      nav ul {
        padding: 0;
        margin: 0;
      }
      nav li {
        display: inline-block;
        margin: 0 .5rem 0 0;
      }
      nav a {
        text-decoration: none;
      }
      nav a:hover {
        text-decoration: underline;
      }
      /* footer */
      footer {
        border-top: 1px solid var(--nc-bg-3);
        padding-top: 1rem;
        margin-top: 2rem;
      }
      /* image */
      img {
        height: auto;
      }
    ") ? '' : new Markup($tmp, $this->env->getCharset());
        echo $this->extensions['Cecil\Renderer\Twig\Extension']->minifyCss($___internal_parse_0_);
        // line 489
        echo "</style>";
    }

    // line 500
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "
      ";
        // line 501
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 501, $this->source); })()), "content", [], "any", false, false, false, 501);
    }

    public function getTemplateName()
    {
        return "_default/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  593 => 501,  587 => 500,  583 => 489,  102 => 10,  98 => 9,  88 => 4,  80 => 507,  75 => 505,  70 => 502,  68 => 500,  64 => 497,  61 => 496,  57 => 495,  54 => 494,  48 => 490,  46 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_default/page.html.twig", "phar:///web/roanbuysse/buysse.io/www/cecil.phar/src/../resources/layouts/_default/page.html.twig");
    }
}

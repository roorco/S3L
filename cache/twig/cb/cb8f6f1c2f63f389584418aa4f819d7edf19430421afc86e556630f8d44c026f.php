<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/page/js-css.html.twig */
class __TwigTemplate_bab4b18184a931efbccac531a12db55e143602a42ec3f1b2d514c9e495d4675c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylehseets' => [$this, 'block_stylehseets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('stylehseets', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        $this->displayBlock('assets', $context, $blocks);
        // line 28
        echo "
<style>
";
        // line 32
        echo "img { max-width: 100%; }

";
        // line 35
        if ((($this->getAttribute(($context["style"] ?? null), "visually_impared_mode", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["style"] ?? null), "visually_impared_mode", []), false)) : (false))) {
            // line 36
            echo "@font-face {
  font-family: 'AtkinsonHL';
  src: 
       url('";
            // line 39
            echo ($context["theme_url"] ?? null);
            echo "/fonts/WOFF2/Atkinson-Hyperlegible-Regular-102a.woff2') format('woff2'), /* Super Modern Browsers */
       url('";
            // line 40
            echo ($context["theme_url"] ?? null);
            echo "/fonts/WOFF/Atkinson-Hyperlegible-Regular-102.woff') format('woff'), /* Pretty Modern Browsers */
       url('";
            // line 41
            echo ($context["theme_url"] ?? null);
            echo "/fonts/TTF/Atkinson-Hyperlegible-Regular-102.ttf')  format('truetype'); /* Safari, Android, iOS */
}
@font-face {
  font-family: 'AtkinsonHL';
  font-weight: bold;
  src: 
       url('";
            // line 47
            echo ($context["theme_url"] ?? null);
            echo "/fonts/WOFF2/Atkinson-Hyperlegible-Bold-102a.woff2') format('woff2'), /* Super Modern Browsers */
       url('";
            // line 48
            echo ($context["theme_url"] ?? null);
            echo "/fonts/WOFF/Atkinson-Hyperlegible-Bold-102.woff') format('woff'), /* Pretty Modern Browsers */
       url('";
            // line 49
            echo ($context["theme_url"] ?? null);
            echo "/fonts/TTF/Atkinson-Hyperlegible-Bold-102.ttf')  format('truetype'); /* Safari, Android, iOS */
}
@font-face {
  font-family: 'AtkinsonHL';
  font-style: italic;
  src: 
       url('";
            // line 55
            echo ($context["theme_url"] ?? null);
            echo "/fonts/WOFF2/Atkinson-Hyperlegible-Italic-102a.woff2') format('woff2'), /* Super Modern Browsers */
       url('";
            // line 56
            echo ($context["theme_url"] ?? null);
            echo "/fonts/WOFF/Atkinson-Hyperlegible-Italic-102.woff') format('woff'), /* Pretty Modern Browsers */
       url('";
            // line 57
            echo ($context["theme_url"] ?? null);
            echo "/fonts/TTF/Atkinson-Hyperlegible-Italic-102.ttf')  format('truetype'); /* Safari, Android, iOS */
}
@font-face {
  font-family: 'AtkinsonHL';
  font-weight: bold;
  font-style: italic;
  src: 
       url('";
            // line 64
            echo ($context["theme_url"] ?? null);
            echo "/fonts/WOFF2/Atkinson-Hyperlegible-BoldItalic-102a.woff2') format('woff2'), /* Super Modern Browsers */
       url('";
            // line 65
            echo ($context["theme_url"] ?? null);
            echo "/fonts/WOFF/Atkinson-Hyperlegible-BoldItalic-102.woff') format('woff'), /* Pretty Modern Browsers */
       url('";
            // line 66
            echo ($context["theme_url"] ?? null);
            echo "/fonts/TTF/Atkinson-Hyperlegible-BoldItalic-102.ttf')  format('truetype'); /* Safari, Android, iOS */
}
p, li { font-family: 'AtkinsonHL'; }
";
        }
        // line 69
        echo " ";
        // line 70
        echo "
body {
";
        // line 72
        echo ((($this->getAttribute(($context["style"] ?? null), "width", []) != "default")) ? ((("max-width: " . $this->getAttribute(($context["style"] ?? null), "width", [])) . "px;")) : (""));
        echo "
";
        // line 75
        if (($this->getAttribute(($context["style"] ?? null), "configuration", []) == "default")) {
            // line 76
            echo "    margin-left: 8px;
    margin-right: 8px;
";
        } else {
            // line 79
            echo "    margin-left: auto;
    margin-right: auto;
";
        }
        // line 82
        echo "} ";
        // line 83
        echo "
";
        // line 85
        echo ((($this->getAttribute(($context["style"] ?? null), "customCSS", []) != "")) ? ($this->getAttribute(($context["style"] ?? null), "customCSS", [])) : (""));
        echo "
</style>";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 1
    public function block_stylehseets($context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 5
        if ((($context["stylesheet"] ?? null) != "default")) {
            // line 6
            echo "  ";
            if (($this->getAttribute(($context["style"] ?? null), "include_type", []) == "inline")) {
                // line 7
                echo "    ";
                // line 8
                echo "    <style>";
                echo twig_include($this->env, $context, (("css/" . ($context["stylesheet"] ?? null)) . ".css"));
                echo "</style>
  ";
            } elseif ( !$this->getAttribute(            // line 9
($context["style"] ?? null), "allowCSS", [])) {
                // line 10
                echo "    ";
                // line 11
                echo "    <link href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc((("theme://css/" . ($context["stylesheet"] ?? null)) . ".css"));
                echo "\" rel=\"stylesheet\" />
  ";
            } else {
                // line 13
                echo "    ";
                // line 14
                echo "    ";
                $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (("theme://css/" . ($context["stylesheet"] ?? null)) . ".css")], "method");
                // line 15
                echo "  ";
            }
        }
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        // line 20
        echo "  ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 24
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 25
        echo "  ";
        if (($context["allowCSS"] ?? null)) {
            echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        }
        // line 26
        echo "  ";
        if (($context["allowJS"] ?? null)) {
            echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        }
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    public function getTemplateName()
    {
        return "partials/page/js-css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 26,  215 => 25,  212 => 24,  203 => 20,  200 => 19,  194 => 15,  191 => 14,  189 => 13,  183 => 11,  181 => 10,  179 => 9,  174 => 8,  172 => 7,  169 => 6,  167 => 5,  164 => 2,  161 => 1,  154 => 85,  151 => 83,  149 => 82,  144 => 79,  139 => 76,  137 => 75,  133 => 72,  129 => 70,  127 => 69,  120 => 66,  116 => 65,  112 => 64,  102 => 57,  98 => 56,  94 => 55,  85 => 49,  81 => 48,  77 => 47,  68 => 41,  64 => 40,  60 => 39,  55 => 36,  53 => 35,  49 => 32,  45 => 28,  43 => 24,  40 => 22,  38 => 19,  35 => 18,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block stylehseets %}

{# Add the stylesheet #}
{# TODO: Add sourcing options from unpkg rather than locally #}
{% if stylesheet != 'default' %}
  {% if style.include_type == 'inline' %}
    {# User *explicitly* wants it imported in style tags #}
    <style>{{ include('css/' ~ stylesheet ~ '.css') }}</style>
  {% elseif not style.allowCSS %}
    {# User wants it via href, but doesn't have CSS pipeline running #}
    <link href=\"{{ url('theme://css/'~stylesheet~'.css') }}\" rel=\"stylesheet\" />
  {% else %}
    {# User wants it href and is allowing CSS #}
    {% do assets.addCss('theme://css/'~stylesheet~'.css') %}
  {% endif %}
{% endif %}
{% endblock %}

{% block javascripts %}
  {# Hypertext doesn't add any JS, but if it did it would go here. #}
{% endblock %}

{# Regular CSS/JS includes #}
{% block assets deferred %}
  {% if allowCSS %}{{ assets.css()|raw }}{% endif %}
  {% if allowJS %}{{ assets.js()|raw }}{% endif %}
{% endblock %}

<style>
{# This is the one piece of style that is practically unavoidable. 
   Sorry, author's discretion. See website for details. #}
img { max-width: 100%; }

{# Hyperlegible font family declarations, if needed #}
{% if style.visually_impared_mode|default(false) %}
@font-face {
  font-family: 'AtkinsonHL';
  src: 
       url('{{ theme_url }}/fonts/WOFF2/Atkinson-Hyperlegible-Regular-102a.woff2') format('woff2'), /* Super Modern Browsers */
       url('{{ theme_url }}/fonts/WOFF/Atkinson-Hyperlegible-Regular-102.woff') format('woff'), /* Pretty Modern Browsers */
       url('{{ theme_url }}/fonts/TTF/Atkinson-Hyperlegible-Regular-102.ttf')  format('truetype'); /* Safari, Android, iOS */
}
@font-face {
  font-family: 'AtkinsonHL';
  font-weight: bold;
  src: 
       url('{{ theme_url }}/fonts/WOFF2/Atkinson-Hyperlegible-Bold-102a.woff2') format('woff2'), /* Super Modern Browsers */
       url('{{ theme_url }}/fonts/WOFF/Atkinson-Hyperlegible-Bold-102.woff') format('woff'), /* Pretty Modern Browsers */
       url('{{ theme_url }}/fonts/TTF/Atkinson-Hyperlegible-Bold-102.ttf')  format('truetype'); /* Safari, Android, iOS */
}
@font-face {
  font-family: 'AtkinsonHL';
  font-style: italic;
  src: 
       url('{{ theme_url }}/fonts/WOFF2/Atkinson-Hyperlegible-Italic-102a.woff2') format('woff2'), /* Super Modern Browsers */
       url('{{ theme_url }}/fonts/WOFF/Atkinson-Hyperlegible-Italic-102.woff') format('woff'), /* Pretty Modern Browsers */
       url('{{ theme_url }}/fonts/TTF/Atkinson-Hyperlegible-Italic-102.ttf')  format('truetype'); /* Safari, Android, iOS */
}
@font-face {
  font-family: 'AtkinsonHL';
  font-weight: bold;
  font-style: italic;
  src: 
       url('{{ theme_url }}/fonts/WOFF2/Atkinson-Hyperlegible-BoldItalic-102a.woff2') format('woff2'), /* Super Modern Browsers */
       url('{{ theme_url }}/fonts/WOFF/Atkinson-Hyperlegible-BoldItalic-102.woff') format('woff'), /* Pretty Modern Browsers */
       url('{{ theme_url }}/fonts/TTF/Atkinson-Hyperlegible-BoldItalic-102.ttf')  format('truetype'); /* Safari, Android, iOS */
}
p, li { font-family: 'AtkinsonHL'; }
{% endif %} {# End Hyperlegible declarations. #}

body {
{{ style.width != 'default' ? \"max-width: #{style.width}px;\" : \"\"}}
{# Set only left and right margins because some stylesheets set vertical. #}
{# Also reset to 8px, the Chrome default (`unset` doesn't work). #}
{% if style.configuration == 'default' %}
    margin-left: 8px;
    margin-right: 8px;
{% else %}
    margin-left: auto;
    margin-right: auto;
{% endif %}
} {# End body section #}

{# User's custom styles *always* take priority #}
{{ style.customCSS != '' ? style.customCSS : \"\" }}
</style>", "partials/page/js-css.html.twig", "/srv/http/S3L/user/themes/hypertext/templates/partials/page/js-css.html.twig");
    }
}

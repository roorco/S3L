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

/* partials/base.html.twig */
class __TwigTemplate_5368372e2839fd132ba02771680297b85fc07272638b7ae568c100ea9d8aefb8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'item_head' => [$this, 'block_item_head'],
            'content' => [$this, 'block_content'],
            'children' => [$this, 'block_children'],
            'item_footer' => [$this, 'block_item_footer'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["structure"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "structure", []);
        // line 2
        $context["style"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "style", []);
        // line 3
        $context["menu"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "menu", []);
        // line 4
        $context["partials"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []), "partials", []);
        // line 5
        $context["html5"] = ((($this->getAttribute(($context["structure"] ?? null), "html_mode", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["structure"] ?? null), "html_mode", []), "default")) : ("default")) == "default");
        // line 6
        echo "
";
        // line 7
        $context["allowCSS"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "allowCSS", []) == "enabled") || (((($this->getAttribute($this->getAttribute(        // line 8
($context["page"] ?? null), "header", [], "any", false, true), "allowCSS", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "allowCSS", []), "default")) : ("default")) == "default") && ($this->getAttribute(        // line 9
($context["style"] ?? null), "allowCSS", []) == "1")));
        // line 10
        $context["allowJS"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "allowJS", []) == "enabled") || (((($this->getAttribute($this->getAttribute(        // line 11
($context["page"] ?? null), "header", [], "any", false, true), "allowJS", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "allowJS", []), "default")) : ("default")) == "default") && ($this->getAttribute(        // line 12
($context["style"] ?? null), "allowJS", []) == "1")));
        // line 13
        echo "
";
        // line 15
        $context["stylesheets"] = [0 => "air", 1 => "hypertext++", 2 => "latex", 3 => "marx", 4 => "modest", 5 => "sakura-dark-solarized", 6 => "sakura-dark", 7 => "sakura-earthly", 8 => "sakura-vader", 9 => "sakura", 10 => "stylize", 11 => "tacit", 12 => "tufte", 13 => "w3c-chocolate", 14 => "w3c-midnight", 15 => "w3c-modernist", 16 => "w3c-oldstyle", 17 => "w3c-steely", 18 => "w3c-swiss", 19 => "w3c-traditional", 20 => "w3c-ultramarine", 21 => "water-dark", 22 => "water-light", 23 => "writ", 24 => "yorha"];
        // line 19
        echo "
";
        // line 21
        $context["stylesheet"] = (($this->getAttribute(($context["uri"] ?? null), "query", [0 => "theme"], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["uri"] ?? null), "query", [0 => "theme"], "method"), $this->getAttribute(($context["style"] ?? null), "stylesheet", []))) : ($this->getAttribute(($context["style"] ?? null), "stylesheet", [])));
        // line 22
        if (preg_match("/^\\d+\$/", ($context["stylesheet"] ?? null))) {
            // line 23
            echo "  ";
            $context["stylesheet"] = $this->getAttribute(($context["stylesheets"] ?? null), (($context["stylesheet"] ?? null) % twig_length_filter($this->env, ($context["stylesheets"] ?? null))), [], "array");
        }
        // line 25
        echo "
";
        // line 27
        echo "
<!DOCTYPE html>


";
        // line 32
        if ($this->getAttribute(($context["uri"] ?? null), "query", [0 => "headless"], "method")) {
            // line 33
            echo "<html>
  <head>
    <title>";
            // line 35
            if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
                echo " | ";
            }
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
            echo "</title>
  </head>
  <body>
  ";
            // line 38
            $this->displayBlock("content", $context, $blocks);
            echo "
  </body>
</html>


";
        } else {
            // line 45
            echo "<html lang=\"";
            echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
            echo "\">
<head>
";
            // line 47
            $this->displayBlock('head', $context, $blocks);
            // line 64
            echo "</head>


<body class=\"";
            // line 67
            echo $this->getAttribute(($context["page"] ?? null), "template", []);
            echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bodyClasses", [])) ? (" {{ page.header.bodyClasses }}") : (""));
            echo "\">
  ";
            // line 69
            echo "  ";
            echo ((($context["html5"] ?? null)) ? ("<header>") : ("<div class=\"header\">"));
            echo "
  ";
            // line 70
            $this->displayBlock('header', $context, $blocks);
            // line 73
            echo "  ";
            echo ((($context["html5"] ?? null)) ? ("</header>") : ("</div>"));
            echo "
  
  ";
            // line 76
            echo "  ";
            echo ((($context["html5"] ?? null)) ? ("<main>") : ("<div class=\"main\">"));
            echo "
    ";
            // line 77
            echo ((($context["html5"] ?? null)) ? ("<article>") : ("<div class=\"item\">"));
            echo "

    ";
            // line 80
            echo "    ";
            $this->displayBlock('item_head', $context, $blocks);
            // line 83
            echo "
    ";
            // line 85
            echo "    ";
            $this->displayBlock('content', $context, $blocks);
            // line 88
            echo "
    ";
            // line 90
            echo "    ";
            $this->displayBlock('children', $context, $blocks);
            // line 93
            echo "
    ";
            // line 95
            echo "    ";
            $this->displayBlock('item_footer', $context, $blocks);
            // line 98
            echo "
    ";
            // line 99
            echo ((($context["html5"] ?? null)) ? ("</article>") : ("</div>"));
            echo "
  ";
            // line 100
            echo ((($context["html5"] ?? null)) ? ("</main>") : ("</div>"));
            echo "

  ";
            // line 103
            echo "  ";
            echo ((($context["html5"] ?? null)) ? ("<footer>") : ("<div class=\"footer\">"));
            echo "
  ";
            // line 104
            $this->displayBlock('footer', $context, $blocks);
            // line 107
            echo "  ";
            echo ((($context["html5"] ?? null)) ? ("</footer>") : ("</div>"));
            echo "

</body>
";
        }
        // line 111
        echo "</html>
";
    }

    // line 47
    public function block_head($context, array $blocks = [])
    {
        // line 48
        echo "  <meta charset=\"utf-8\" />
  <link rel=\"canonical\" href=\"";
        // line 49
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 53
            echo "    <meta ";
            if ($this->getAttribute($context["meta"], "name", [])) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", [])) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", [])) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", [])) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", []);
                echo "\" ";
            }
            echo "/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
  <title>";
        // line 56
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

  ";
        // line 58
        if ($this->getAttribute(($context["structure"] ?? null), "use_favicon", [])) {
            // line 59
            echo "  <link rel=\"icon\" type=\"image/png\" href=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("image://favicon.png");
            echo "\" />
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        $this->loadTemplate("partials/page/js-css.html.twig", "partials/base.html.twig", 62)->display($context);
    }

    // line 70
    public function block_header($context, array $blocks = [])
    {
        // line 71
        echo "    ";
        $this->loadTemplate("partials/page/header.html.twig", "partials/base.html.twig", 71)->display($context);
        // line 72
        echo "  ";
    }

    // line 80
    public function block_item_head($context, array $blocks = [])
    {
        // line 81
        echo "    ";
        $this->loadTemplate("partials/item/header.html.twig", "partials/base.html.twig", 81)->display($context);
        // line 82
        echo "    ";
    }

    // line 85
    public function block_content($context, array $blocks = [])
    {
        // line 86
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    ";
    }

    // line 90
    public function block_children($context, array $blocks = [])
    {
        // line 91
        echo "    ";
        $this->loadTemplate("partials/item/children.html.twig", "partials/base.html.twig", 91)->display($context);
        // line 92
        echo "    ";
    }

    // line 95
    public function block_item_footer($context, array $blocks = [])
    {
        // line 96
        echo "    ";
        $this->loadTemplate("partials/item/footer.html.twig", "partials/base.html.twig", 96)->display($context);
        // line 97
        echo "    ";
    }

    // line 104
    public function block_footer($context, array $blocks = [])
    {
        // line 105
        echo "    ";
        $this->loadTemplate("partials/page/footer.html.twig", "partials/base.html.twig", 105)->display($context);
        // line 106
        echo "  ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 106,  331 => 105,  328 => 104,  324 => 97,  321 => 96,  318 => 95,  314 => 92,  311 => 91,  308 => 90,  301 => 86,  298 => 85,  294 => 82,  291 => 81,  288 => 80,  284 => 72,  281 => 71,  278 => 70,  274 => 62,  271 => 61,  265 => 59,  263 => 58,  254 => 56,  251 => 55,  218 => 53,  214 => 52,  208 => 49,  205 => 48,  202 => 47,  197 => 111,  189 => 107,  187 => 104,  182 => 103,  177 => 100,  173 => 99,  170 => 98,  167 => 95,  164 => 93,  161 => 90,  158 => 88,  155 => 85,  152 => 83,  149 => 80,  144 => 77,  139 => 76,  133 => 73,  131 => 70,  126 => 69,  121 => 67,  116 => 64,  114 => 47,  108 => 45,  99 => 38,  89 => 35,  85 => 33,  83 => 32,  77 => 27,  74 => 25,  70 => 23,  68 => 22,  66 => 21,  63 => 19,  61 => 15,  58 => 13,  56 => 12,  55 => 11,  54 => 10,  52 => 9,  51 => 8,  50 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set structure = config.themes.hypertext.structure %}
{% set style = config.themes.hypertext.style %}
{% set menu = config.themes.hypertext.menu %}
{% set partials = config.themes.hypertext.partials %}
{% set html5 = structure.html_mode|default('default') == 'default' %}

{% set allowCSS = page.header.allowCSS == 'enabled' or
                    (page.header.allowCSS|default('default') == 'default' and 
                     style.allowCSS == '1') %}
{% set allowJS  = page.header.allowJS  == 'enabled' or
                    (page.header.allowJS|default('default') == 'default' and 
                     style.allowJS == '1') %}

{# Why set this here? Because we might want to pivot semantic flow depending on the sheet someday. #}
{% set stylesheets = ['air', 'hypertext++', 'latex', 'marx', 'modest', 'sakura-dark-solarized', 'sakura-dark',
                      'sakura-earthly', 'sakura-vader','sakura', 'stylize', 'tacit', 'tufte', 'w3c-chocolate', 'w3c-midnight', 'w3c-modernist',
                      'w3c-oldstyle', 'w3c-steely', 'w3c-swiss', 'w3c-traditional', 'w3c-ultramarine', 'water-dark', 'water-light', 'writ',
                      'yorha'] %}

{# Set a stylesheet from URI or style config #}
{% set stylesheet = uri.query('theme')|default(style.stylesheet) %}
{% if stylesheet matches '/^\\\\d+\$/' %}
  {% set stylesheet = stylesheets[stylesheet % stylesheets|length] %}
{% endif %}

{# ------------------------------------------------------------------------ #}

<!DOCTYPE html>


{# ## HEADLESS RENDERING ## #}
{% if uri.query('headless') %}
<html>
  <head>
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
  </head>
  <body>
  {{ block('content') }}
  </body>
</html>


{% else %}
{# ## ORDINARY RENDER ## #}
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
  <meta charset=\"utf-8\" />
  <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  {% for meta in page.metadata %}
    <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
  {% endfor %}

  <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

  {% if structure.use_favicon %}
  <link rel=\"icon\" type=\"image/png\" href=\"{{ url('image://favicon.png') }}\" />
  {% endif %}

  {% include 'partials/page/js-css.html.twig' %}
{% endblock head %}
</head>


<body class=\"{{ page.template }}{{ page.header.bodyClasses ? ' {{ page.header.bodyClasses }}' : ''}}\">
  {# ## HEADER ## #}
  {{ html5 ? '<header>' : '<div class=\"header\">' }}
  {% block header %}
    {% include 'partials/page/header.html.twig' %}
  {% endblock %}
  {{ html5 ? '</header>' : '</div>' }}
  
  {# ## BODY ## #}
  {{ html5 ? '<main>' : '<div class=\"main\">' }}
    {{ html5 ? '<article>' : '<div class=\"item\">'}}

    {# ARTICLE HEAD #}
    {% block item_head %}
    {% include 'partials/item/header.html.twig' %}
    {% endblock %}

    {# ARTICLE BODY #}
    {% block content %}
    {{ page.content|raw }}
    {% endblock %}

    {# CHILD PAGES #}
    {% block children %}
    {% include 'partials/item/children.html.twig' %}
    {% endblock %}

    {# ARTICLE FOOTER #}
    {% block item_footer %}
    {% include 'partials/item/footer.html.twig' %}
    {% endblock %}

    {{ html5 ? '</article>' : '</div>'}}
  {{ html5 ? '</main>' : '</div>' }}

  {# ## FOOTER ## #}
  {{ html5 ? '<footer>' : '<div class=\"footer\">' }}
  {% block footer %}
    {% include 'partials/page/footer.html.twig' %}
  {% endblock %}
  {{ html5 ? '</footer>' : '</div>' }}

</body>
{% endif %}
</html>
", "partials/base.html.twig", "/srv/http/S3L/user/themes/hypertext/templates/partials/base.html.twig");
    }
}

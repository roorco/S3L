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

/* partials/page/navigation.html.twig */
class __TwigTemplate_032d28c6e40e3a3a099fbd7779f92e00fa555da83e86580ab3415661a92e057c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["hasNav"] = (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", [])) >= 1) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 2
($context["config"] ?? null), "themes", []), "hypertext", []), "menu", []), "menuItems", [])) >= 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", [])));
        // line 4
        echo "
";
        // line 5
        if (($context["hasNav"] ?? null)) {
            // line 6
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "hypertext", []));
            echo "

";
            // line 8
            echo ((($context["html5"] ?? null)) ? ("<nav>") : ("<div class=\"nav\">"));
            echo "

  ";
            // line 11
            echo "  ";
            if ($this->getAttribute(($context["structure"] ?? null), "inline_navbar", [])) {
                // line 12
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 13
                    echo "      <a href=\"";
                    echo $this->getAttribute($context["child"], "url", []);
                    echo "\"";
                    echo ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? (" class=\"current\"") : (""));
                    echo ">";
                    echo $this->getAttribute($context["child"], "menu", []);
                    echo "</a>
      ";
                    // line 14
                    if ($this->getAttribute(($context["structure"] ?? null), "use_decorators", [])) {
                        // line 15
                        echo "        ";
                        echo ((( !$this->getAttribute($context["loop"], "last", []) || (twig_length_filter($this->env, $this->getAttribute(($context["menu"] ?? null), "menuItems", [])) >= 1))) ? ("|") : (""));
                        echo "
      ";
                    }
                    // line 17
                    echo "    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                // line 18
                echo "
    ";
                // line 20
                echo "    ";
                if ((twig_length_filter($this->env, $this->getAttribute(($context["menu"] ?? null), "menuItems", [])) >= 1)) {
                    // line 21
                    echo "    <span>
    ";
                    // line 22
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["menu"] ?? null), "menuItems", []));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
                        // line 23
                        echo "      <a href=\"";
                        echo $this->getAttribute($context["menuItem"], "href", []);
                        echo "\"
        ";
                        // line 24
                        echo (($this->getAttribute($context["menuItem"], "rel", [])) ? (sprintf("rel=\"%s\" ", $this->getAttribute($context["menuItem"], "rel", []))) : (""));
                        echo "
        ";
                        // line 25
                        echo (($this->getAttribute($context["menuItem"], "name", [])) ? (sprintf("name=\"%s\" ", $this->getAttribute($context["menuItem"], "name", []))) : (""));
                        echo "
        ";
                        // line 26
                        echo (($this->getAttribute($context["menuItem"], "isOffsite", [])) ? ("class=\"offsite\"") : (""));
                        echo "
        ";
                        // line 27
                        echo (($this->getAttribute($context["menuItem"], "target", [])) ? (sprintf("target=\"%s\" ", $this->getAttribute($context["menuItem"], "target", []))) : (""));
                        echo "
        ";
                        // line 28
                        echo (($this->getAttribute($context["menuItem"], "isNewWindow", [])) ? ("target=\"_blank\"") : (""));
                        echo ">";
                        echo $this->getAttribute($context["menuItem"], "text", []);
                        echo "</a>
      ";
                        // line 29
                        if ($this->getAttribute(($context["structure"] ?? null), "use_decorators", [])) {
                            // line 30
                            echo "        ";
                            echo (( !$this->getAttribute($context["loop"], "last", [])) ? ("|") : (""));
                            echo "
      ";
                        }
                        // line 32
                        echo "    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "    </span>
    ";
                }
                // line 34
                echo " ";
                // line 35
                echo "    
    ";
                // line 36
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
                    // line 37
                    echo "      [";
                    $this->loadTemplate("partials/login-status.html.twig", "partials/page/navigation.html.twig", 37)->display($context);
                    echo "]
    ";
                }
                // line 39
                echo "  ";
            } else {
                // line 40
                echo "
  ";
                // line 42
                echo "  <ul>
    ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 44
                    echo "    <li><a href=\"";
                    echo $this->getAttribute($context["child"], "url", []);
                    echo "\"";
                    echo ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? (" class=\"current\"") : (""));
                    echo ">";
                    echo $this->getAttribute($context["child"], "menu", []);
                    echo "</a></li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "
    ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["menu"] ?? null), "menuItems", []));
                foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
                    // line 48
                    echo "      <li><a href=\"";
                    echo $this->getAttribute($context["menuItem"], "href", []);
                    echo "\"
          ";
                    // line 49
                    echo (($this->getAttribute($context["menuItem"], "rel", [])) ? (sprintf("rel=\"%s\" ", $this->getAttribute($context["menuItem"], "rel", []))) : (""));
                    echo "
          ";
                    // line 50
                    echo (($this->getAttribute($context["menuItem"], "name", [])) ? (sprintf("name=\"%s\" ", $this->getAttribute($context["menuItem"], "name", []))) : (""));
                    echo "
          ";
                    // line 51
                    echo (($this->getAttribute($context["menuItem"], "isOffsite", [])) ? ("class=\"offsite\"") : (""));
                    echo "
          ";
                    // line 52
                    echo (($this->getAttribute($context["menuItem"], "target", [])) ? (sprintf("target=\"%s\" ", $this->getAttribute($context["menuItem"], "target", []))) : (""));
                    echo "
          ";
                    // line 53
                    echo (($this->getAttribute($context["menuItem"], "isNewWindow", [])) ? ("target=\"_blank\"") : (""));
                    echo ">";
                    echo $this->getAttribute($context["menuItem"], "text", []);
                    echo "</a></li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "
    ";
                // line 56
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
                    // line 57
                    echo "      <li>[";
                    $this->loadTemplate("partials/login-status.html.twig", "partials/page/navigation.html.twig", 57)->display($context);
                    echo "]</li>
    ";
                }
                // line 59
                echo "  </ul>
  ";
            }
            // line 60
            echo " ";
            // line 61
            echo "
  ";
            // line 63
            echo "  ";
            // line 64
            echo "    <hr>
  ";
            // line 66
            echo "  
  ";
            // line 68
            echo "  ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
                // line 69
                echo "    ";
                $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/page/navigation.html.twig", 69)->display($context);
                // line 70
                echo "  ";
            }
            // line 71
            echo ((($context["html5"] ?? null)) ? ("</nav>") : ("</div>"));
            echo "

";
        }
        // line 73
        echo " ";
    }

    public function getTemplateName()
    {
        return "partials/page/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 73,  295 => 71,  292 => 70,  289 => 69,  286 => 68,  283 => 66,  280 => 64,  278 => 63,  275 => 61,  273 => 60,  269 => 59,  263 => 57,  261 => 56,  258 => 55,  248 => 53,  244 => 52,  240 => 51,  236 => 50,  232 => 49,  227 => 48,  223 => 47,  220 => 46,  207 => 44,  203 => 43,  200 => 42,  197 => 40,  194 => 39,  188 => 37,  186 => 36,  183 => 35,  181 => 34,  177 => 33,  163 => 32,  157 => 30,  155 => 29,  149 => 28,  145 => 27,  141 => 26,  137 => 25,  133 => 24,  128 => 23,  111 => 22,  108 => 21,  105 => 20,  102 => 18,  87 => 17,  81 => 15,  79 => 14,  70 => 13,  52 => 12,  49 => 11,  44 => 8,  39 => 6,  37 => 5,  34 => 4,  32 => 3,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set hasNav = pages.children.visible|length >= 1 or
                config.themes.hypertext.menu.menuItems|length >= 1 or
                (config.plugins.login.enabled and grav.user.username) %}

{% if hasNav %}
{{ dump(config.themes.hypertext) }}

{{ html5 ? '<nav>' : '<div class=\"nav\">' }}

  {# INLINE/TEXT NAV BAR #}
  {% if structure.inline_navbar %}
    {% for child in pages.children.visible %}
      <a href=\"{{ child.url }}\"{{ (child.active or child.activeChild) ? ' class=\"current\"' :'' }}>{{ child.menu }}</a>
      {% if structure.use_decorators %}
        {{ not loop.last or menu.menuItems|length >= 1 ? '|' : '' }}
      {% endif %}
    {% endfor %} {# End child pages loop #}

    {# Write additional links #}
    {% if menu.menuItems|length >= 1 %}
    <span>
    {% for menuItem in menu.menuItems %}
      <a href=\"{{ menuItem.href }}\"
        {{ menuItem.rel ? 'rel=\"%s\" '|format(menuItem.rel) : '' }}
        {{ menuItem.name ? 'name=\"%s\" '|format(menuItem.name) : '' }}
        {{ menuItem.isOffsite ? 'class=\"offsite\"' : '' }}
        {{ menuItem.target ? 'target=\"%s\" '|format(menuItem.target) : '' }}
        {{ menuItem.isNewWindow ? 'target=\"_blank\"' : '' }}>{{ menuItem.text}}</a>
      {% if structure.use_decorators %}
        {{ not loop.last ? '|' : '' }}
      {% endif %}
    {% endfor %}
    </span>
    {% endif %} {# End additional links loop #}
    
    {% if config.plugins.login.enabled and grav.user.username %}
      [{% include 'partials/login-status.html.twig' %}]
    {% endif %}
  {% else %}

  {# UL/LI NAV BAR #}
  <ul>
    {% for child in pages.children.visible %}
    <li><a href=\"{{ child.url }}\"{{ (child.active or child.activeChild) ? ' class=\"current\"' :'' }}>{{ child.menu }}</a></li>
    {% endfor %}

    {% for menuItem in menu.menuItems %}
      <li><a href=\"{{ menuItem.href }}\"
          {{ menuItem.rel ? 'rel=\"%s\" '|format(menuItem.rel) : '' }}
          {{ menuItem.name ? 'name=\"%s\" '|format(menuItem.name) : '' }}
          {{ menuItem.isOffsite ? 'class=\"offsite\"' : '' }}
          {{ menuItem.target ? 'target=\"%s\" '|format(menuItem.target) : '' }}
          {{ menuItem.isNewWindow ? 'target=\"_blank\"' : '' }}>{{ menuItem.text}}</a></li>
    {% endfor %}

    {% if config.plugins.login.enabled and grav.user.username %}
      <li>[{% include 'partials/login-status.html.twig' %}]</li>
    {% endif %}
  </ul>
  {% endif %} {# End of navigation links #}

  {# Drop in a separator if there's no theme at all OR we have breadcrumbs. #}
  {#{% if uri.query('theme')|default(style.stylesheet) == 'default' or breadcrumbs.get()|length > 1 %}#}
    <hr>
  {#{% endif %}#}
  
  {# Breadcrumbs #}
  {% if config.plugins.breadcrumbs.enabled %}
    {% include 'partials/breadcrumbs.html.twig' %}
  {% endif %}
{{ html5 ? '</nav>' : '</div>' }}

{% endif %} {# end if has nav #}", "partials/page/navigation.html.twig", "/srv/http/S3L/user/themes/hypertext/templates/partials/page/navigation.html.twig");
    }
}

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

/* partials/item/header.html.twig */
class __TwigTemplate_227d36b3d953a63677c4c52140d20428746cc5d9f8fafacb625cf776b0e12bb9 extends \Twig\Template
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
        $context["show_image"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_header_image", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_header_image", []), false)) : (false));
        // line 2
        echo "  ";
        $context["header_image_name"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "header_image_file", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "header_image_file", []), "header.png")) : ("header.png"));
        // line 3
        echo "  ";
        $context["header_image"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", [], "any", false, true), "images", [], "any", false, true), ($context["header_image_name"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", [], "any", false, true), "images", [], "any", false, true), ($context["header_image_name"] ?? null), [], "array")))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", [], "any", false, true), "images", [], "any", false, true), ($context["header_image_name"] ?? null), [], "array")) : (((($this->getAttribute(        // line 4
($context["media"] ?? null), ("image://" . ($context["header_image_name"] ?? null)), [], "array", true, true) &&  !(null === $this->getAttribute(($context["media"] ?? null), ("image://" . ($context["header_image_name"] ?? null)), [], "array")))) ? ($this->getAttribute(($context["media"] ?? null), ("image://" . ($context["header_image_name"] ?? null)), [], "array")) : (((($this->getAttribute(        // line 5
($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . ".png"), [], "array", true, true) &&  !(null === $this->getAttribute(($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . ".png"), [], "array")))) ? ($this->getAttribute(($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . ".png"), [], "array")) : (((($this->getAttribute(        // line 6
($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . ".jpg"), [], "array", true, true) &&  !(null === $this->getAttribute(($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . ".jpg"), [], "array")))) ? ($this->getAttribute(($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . ".jpg"), [], "array")) : (((($this->getAttribute(        // line 7
($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . ".gif"), [], "array", true, true) &&  !(null === $this->getAttribute(($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . ".gif"), [], "array")))) ? ($this->getAttribute(($context["media"] ?? null), (("image://" . $this->getAttribute(($context["page"] ?? null), "slug", [], "method")) . ".gif"), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(        // line 8
($context["page"] ?? null), "media", []), "images", []))))))))))));
        // line 9
        echo "  ";
        $context["use_image_crop"] = (($this->getAttribute(($context["style"] ?? null), "image_cropping", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["style"] ?? null), "image_cropping", []), false)) : (false));
        // line 10
        echo "  ";
        $context["image_width"] = ((($context["use_image_crop"] ?? null)) ? (($this->getAttribute(($context["style"] ?? null), "width", []) - 10)) : ($this->getAttribute(($context["header_image"] ?? null), "width", [])));
        // line 11
        echo "  ";
        $context["image_height"] = ((($context["use_image_crop"] ?? null)) ? (($this->getAttribute(($context["style"] ?? null), "width", []) / 5)) : ($this->getAttribute(($context["header_image"] ?? null), "height", [])));
        // line 12
        echo "  ";
        $context["header_image_url"] = ((($context["use_image_crop"] ?? null)) ? ($this->getAttribute($this->getAttribute(($context["header_image"] ?? null), "cropZoom", [0 => ($context["image_width"] ?? null), 1 => ($context["image_height"] ?? null)], "method"), "url", [])) : ($this->getAttribute(($context["header_image"] ?? null), "url", [])));
        // line 13
        echo "
";
        // line 14
        $context["show_date"] = ((($this->getAttribute(($context["structure"] ?? null), "show_date", [], "any", true, true) &&  !(null === $this->getAttribute(($context["structure"] ?? null), "show_date", [])))) ? ($this->getAttribute(($context["structure"] ?? null), "show_date", [])) : (false));
        // line 15
        echo "
";
        // line 17
        echo "
";
        // line 19
        if ( !$this->getAttribute(($context["page"] ?? null), "home", [], "method")) {
            // line 20
            echo "<h2>
  <a href=\"";
            // line 21
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</a>
</h2>
";
        }
        // line 24
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", [])) {
            echo "<strong>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []);
            echo "</strong>";
        }
        // line 25
        echo "
<p> ";
        // line 27
        echo "
";
        // line 29
        if ((($context["show_image"] ?? null) && ($context["header_image"] ?? null))) {
            // line 30
            echo "  <a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">
    <img src=\"";
            // line 31
            echo ($context["header_image_url"] ?? null);
            echo "\" width=\"";
            echo ($context["header_image_width"] ?? null);
            echo "\" height=\"";
            echo ($context["header_image_height"] ?? null);
            echo "\">
  </a>
  <br>
";
        }
        // line 35
        echo "
";
        // line 37
        if (($context["show_date"] ?? null)) {
            // line 38
            echo "<sub>
  ";
            // line 39
            if (($context["html5"] ?? null)) {
                // line 40
                echo "    <time datetime=\"";
                echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "c");
                echo "\">";
                echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []));
                echo "</time>
  ";
            } else {
                // line 42
                echo "    <span class=\"datetime\">";
                echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "pages", []), "dateformat", []), "short", []));
                echo "</span>
  ";
            }
            // line 44
            echo "</sub>
";
        }
        // line 46
        echo "
";
        // line 48
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", [])) {
            // line 49
            echo "  Categories: <small>
  ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 51
                echo "    ";
                echo (($this->getAttribute(($context["structure"] ?? null), "use_decorators", [])) ? ("[") : (""));
                echo "<a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []), "/");
                echo "/category";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["category"];
                echo "\">";
                echo $context["category"];
                echo "</a>";
                echo (($this->getAttribute(($context["structure"] ?? null), "use_decorators", [])) ? ("]") : (""));
                echo (( !$this->getAttribute($context["loop"], "last", [])) ? (",") : (""));
                echo "
  ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "</small>
  ";
            // line 53
            echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) ? ("<br>") : (""));
            echo "
";
        }
        // line 55
        echo "
";
        // line 56
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 57
            echo "  Tags: <small>
  ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 59
                echo "    ";
                echo (($this->getAttribute(($context["structure"] ?? null), "use_decorators", [])) ? ("[") : (""));
                echo "<a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>";
                echo (($this->getAttribute(($context["structure"] ?? null), "use_decorators", [])) ? ("]") : (""));
                echo (( !$this->getAttribute($context["loop"], "last", [])) ? (",") : (""));
                echo "
  ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "</small>
";
        }
        // line 62
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "partials/item/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 62,  249 => 60,  222 => 59,  205 => 58,  202 => 57,  200 => 56,  197 => 55,  192 => 53,  189 => 52,  162 => 51,  145 => 50,  142 => 49,  140 => 48,  137 => 46,  133 => 44,  127 => 42,  119 => 40,  117 => 39,  114 => 38,  112 => 37,  109 => 35,  98 => 31,  93 => 30,  91 => 29,  88 => 27,  85 => 25,  79 => 24,  71 => 21,  68 => 20,  66 => 19,  63 => 17,  60 => 15,  58 => 14,  55 => 13,  52 => 12,  49 => 11,  46 => 10,  43 => 9,  41 => 8,  40 => 7,  39 => 6,  38 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set show_image = page.header.show_header_image|default(false) %}
  {% set header_image_name = page.header.header_image_file|default('header.png') %}
  {% set header_image = page.media.images[header_image_name] ??
                        media['image://' ~ header_image_name] ??
                        media['image://' ~ page.slug()~'.png'] ??
                        media['image://' ~ page.slug()~'.jpg'] ??
                        media['image://' ~ page.slug()~'.gif'] ??
                        page.media.images|first %}
  {% set use_image_crop = style.image_cropping|default(false) %}
  {% set image_width = use_image_crop ? style.width - 10 : header_image.width %}
  {% set image_height = use_image_crop ? style.width / 5 : header_image.height %}
  {% set header_image_url = use_image_crop ? header_image.cropZoom(image_width, image_height).url : header_image.url %}

{% set show_date = structure.show_date ?? false %}

{# ------------------------------------------------------------------------ #}

{# Title & Subtitle #}
{% if not page.home() %}
<h2>
  <a href=\"{{ page.url }}\">{{ page.title }}</a>
</h2>
{% endif %}
{% if page.header.subtitle %}<strong>{{ page.header.subtitle }}</strong>{% endif %}

<p> {# The next set of items should be somewhat close together. #}

{# Image #}
{% if show_image and header_image %}
  <a href=\"{{ page.url }}\">
    <img src=\"{{ header_image_url }}\" width=\"{{ header_image_width }}\" height=\"{{ header_image_height }}\">
  </a>
  <br>
{% endif %}

{# Date #}
{% if show_date %}
<sub>
  {% if html5 %}
    <time datetime=\"{{ page.date|date(\"c\") }}\">{{ page.date|date(system.pages.dateformat.short) }}</time>
  {% else %}
    <span class=\"datetime\">{{ page.date|date(system.pages.dateformat.short) }}</span>
  {% endif %}
</sub>
{% endif %}

{# Categories #}
{% if page.taxonomy.category %}
  Categories: <small>
  {% for category in page.taxonomy.category %}
    {{ structure.use_decorators ? '[' : '' }}<a href=\"{{ page.parent.url|rtrim('/') }}/category{{ config.system.param_sep }}{{ category }}\">{{ category }}</a>{{ structure.use_decorators ? ']' : '' }}{{ not loop.last ? ',' : '' }}
  {% endfor %}</small>
  {{ page.taxonomy.tag ? '<br>' : '' }}
{% endif %}

{% if page.taxonomy.tag %}
  Tags: <small>
  {% for tag in page.taxonomy.tag %}
    {{ structure.use_decorators ? '[' : '' }}<a href=\"{{ page.parent.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a>{{ structure.use_decorators ? ']' : '' }}{{ not loop.last ? ',' : '' }}
  {% endfor %}</small>
{% endif %}

</p>
", "partials/item/header.html.twig", "/srv/http/S3L/user/themes/hypertext/templates/partials/item/header.html.twig");
    }
}

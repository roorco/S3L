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

/* partials/page/header.html.twig */
class __TwigTemplate_93267287942c4d114f25430b4853db924dff1dc8c4f0d71dc3365586b955fe7b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header_navigation' => [$this, 'block_header_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<h1><a href=\"";
        echo ($context["home_url"] ?? null);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</a></h1>

";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", [])) {
            // line 4
            echo ((($context["html5"] ?? null)) ? ("<aside>") : ("<p class=\"subtitle\">"));
            echo "
  ";
            // line 5
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []);
            echo "
";
            // line 6
            echo ((($context["html5"] ?? null)) ? ("</aside>") : ("</p>"));
            echo "
";
        }
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "messages", []), "all", [])) {
            // line 14
            echo "    ";
            $this->loadTemplate("partials/page/messages.html.twig", "partials/page/header.html.twig", 14)->display($context);
        }
    }

    // line 9
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 10
        echo "    ";
        $this->loadTemplate("partials/page/navigation.html.twig", "partials/page/header.html.twig", 10)->display($context);
    }

    public function getTemplateName()
    {
        return "partials/page/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  70 => 9,  64 => 14,  62 => 13,  59 => 12,  57 => 9,  54 => 8,  49 => 6,  45 => 5,  41 => 4,  39 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h1><a href=\"{{ home_url }}\">{{ site.title|e('html') }}</a></h1>

{% if site.metadata.description %}
{{ html5 ? '<aside>' : '<p class=\"subtitle\">' }}
  {{ site.metadata.description }}
{{ html5 ? '</aside>' : '</p>' }}
{% endif %}

{% block header_navigation %}
    {% include 'partials/page/navigation.html.twig' %}
{% endblock %}

{% if grav.messages.all %}
    {% include 'partials/page/messages.html.twig' %}
{% endif %}", "partials/page/header.html.twig", "/srv/http/S3L/user/themes/hypertext/templates/partials/page/header.html.twig");
    }
}

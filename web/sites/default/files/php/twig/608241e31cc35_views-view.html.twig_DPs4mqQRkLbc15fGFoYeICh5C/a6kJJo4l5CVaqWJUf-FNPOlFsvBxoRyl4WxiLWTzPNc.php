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

/* themes/custom/abogados/templates/views/views-view.html.twig */
class __TwigTemplate_790b9cfc9ce87114894df18779d6ef081d5930ae6e6ebe4a0b5276b02270782d extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        $context["classes"] = [0 => ((        // line 35
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 35, $this->source))) : (""))];
        // line 38
        echo "<section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
        echo ">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xl-10 offset-xl-1 col-xxl-12 offset-xxl-0\">

\t\t\t\t";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 43, $this->source), "html", null, true);
        echo "
\t\t\t\t";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 44, $this->source), "html", null, true);
        echo "
\t\t\t\t";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 45, $this->source), "html", null, true);
        echo "

\t\t\t\t";
        // line 47
        if (($context["header"] ?? null)) {
            // line 48
            echo "\t\t\t\t\t<header>
\t\t\t\t\t\t";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 49, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</header>
\t\t\t\t";
        }
        // line 52
        echo "
\t\t\t\t";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 53, $this->source), "html", null, true);
        echo "
\t\t\t\t";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 54, $this->source), "html", null, true);
        echo "

\t\t\t\t";
        // line 56
        if (($context["rows"] ?? null)) {
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 57, $this->source), "html", null, true);
            echo "
\t\t\t\t";
        } elseif (        // line 58
($context["empty"] ?? null)) {
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 59, $this->source), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 61
        echo "
\t\t\t\t";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 62, $this->source), "html", null, true);
        echo "

\t\t\t\t";
        // line 64
        if (((($context["footer"] ?? null) || ($context["more"] ?? null)) || ($context["pager"] ?? null))) {
            // line 65
            echo "\t\t\t\t\t<footer>
\t\t\t\t\t\t";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 66, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 67, $this->source), "html", null, true);
            echo "
\t\t\t\t\t\t";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 68, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</footer>
\t\t\t\t";
        }
        // line 71
        echo "
\t\t\t\t";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 72, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/abogados/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 72,  127 => 71,  121 => 68,  117 => 67,  113 => 66,  110 => 65,  108 => 64,  103 => 62,  100 => 61,  95 => 59,  93 => 58,  89 => 57,  87 => 56,  82 => 54,  78 => 53,  75 => 52,  69 => 49,  66 => 48,  64 => 47,  59 => 45,  55 => 44,  51 => 43,  42 => 38,  40 => 35,  39 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for main view template.
 *
 * Available variables:
 * - attributes: Remaining HTML attributes for the element.
 * - css_name: A css-safe version of the view name.
 * - css_class: The user-specified classes names, if any.
 * - header: The optional header.
 * - footer: The optional footer.
 * - rows: The results of the view query, if any.
 * - empty: The content to display if there are no rows.
 * - pager: The optional pager next/prev links to display.
 * - exposed: Exposed widget form/info to display.
 * - feed_icons: Optional feed icons to display.
 * - more: An optional link to the next page of results.
 * - title: Title of the view, only used when displaying in the admin preview.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the view title.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the view title.
 * - attachment_before: An optional attachment view to be displayed before the
 *   view content.
 * - attachment_after: An optional attachment view to be displayed after the
 *   view content.
 * - dom_id: Unique id for every view being printed to give unique class for
 *   Javascript.
 *
 * @see template_preprocess_views_view()
 */
#}
{%
  set classes = [
    dom_id ? 'js-view-dom-id-' ~ dom_id,
  ]
%}
<section{{attributes.addClass(classes)}}>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xl-10 offset-xl-1 col-xxl-12 offset-xxl-0\">

\t\t\t\t{{ title_prefix }}
\t\t\t\t{{ title }}
\t\t\t\t{{ title_suffix }}

\t\t\t\t{% if header %}
\t\t\t\t\t<header>
\t\t\t\t\t\t{{ header }}
\t\t\t\t\t</header>
\t\t\t\t{% endif %}

\t\t\t\t{{ exposed }}
\t\t\t\t{{ attachment_before }}

\t\t\t\t{% if rows -%}
\t\t\t\t\t{{ rows }}
\t\t\t\t{% elseif empty -%}
\t\t\t\t\t{{ empty }}
\t\t\t\t{% endif %}

\t\t\t\t{{ attachment_after }}

\t\t\t\t{% if footer or more or pager %}
\t\t\t\t\t<footer>
\t\t\t\t\t\t{{ pager }}
\t\t\t\t\t\t{{ more }}
\t\t\t\t\t\t{{ footer }}
\t\t\t\t\t</footer>
\t\t\t\t{% endif %}

\t\t\t\t{{ feed_icons }}
\t\t\t</div>
\t\t</div>
\t</div>
</section>", "themes/custom/abogados/templates/views/views-view.html.twig", "/app/web/themes/custom/abogados/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 47);
        static $filters = array("escape" => 38);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

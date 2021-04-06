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

/* themes/custom/abogados/templates/content/node--new.html.twig */
class __TwigTemplate_f87e67a5669d6c0a4faa823b262ee04806e7b8639850805d67a61d9e647259df extends \Twig\Template
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
        // line 1
        echo "<section class=\"news-initial\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 class=\"text-center mb-md-5 mb-1\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</h2>
\t\t\t\t<picture>
\t\t\t\t\t<img class=\"news-img\" src=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 7), "entity", [], "any", false, false, true, 7), "fileuri", [], "any", false, false, true, 7), 7, $this->source)]), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_image", [], "any", false, false, true, 7), "alt", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
\t\t\t\t</picture>
\t\t\t\t<p class=\"text-center my-md-4 my-1\">
\t\t\t\t\t<span class=\"author-new mr-4\">
\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_author", [], "any", false, false, true, 12), "entity", [], "any", false, false, true, 12), "name", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"date-new\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt\"></i>
\t\t\t\t\t\t";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "created", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source), "m/d/Y"), "html", null, true);
        echo "
\t\t\t\t\t</span>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_blocks", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/abogados/templates/content/node--new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  67 => 16,  60 => 12,  50 => 7,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"news-initial\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 class=\"text-center mb-md-5 mb-1\">{{node.label}}</h2>
\t\t\t\t<picture>
\t\t\t\t\t<img class=\"news-img\" src=\"{{ file_url(node.field_image.entity.fileuri) }}\" alt=\"{{ node.field_image.alt }}\">
\t\t\t\t</picture>
\t\t\t\t<p class=\"text-center my-md-4 my-1\">
\t\t\t\t\t<span class=\"author-new mr-4\">
\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t{{node.field_author.entity.name.value}}
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"date-new\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt\"></i>
\t\t\t\t\t\t{{node.created.value|date(\"m/d/Y\")  }}
\t\t\t\t\t</span>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t{{content.field_blocks}}
</section>
", "themes/custom/abogados/templates/content/node--new.html.twig", "/app/web/themes/custom/abogados/templates/content/node--new.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5, "date" => 16);
        static $functions = array("file_url" => 7);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
                ['file_url']
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

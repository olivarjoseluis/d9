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

/* themes/custom/abogados/templates/paragraph/paragraph--work-experience.html.twig */
class __TwigTemplate_4dfdbc58ef2648c531119c1d2b8bb790dfed6eb5fd3c39df8ffa5c26b7e955be extends \Twig\Template
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
        echo "<section class=\"work-experience\">
\t<div class=\"card-work-experience\">
\t\t<div class=\"row no-gutters\">
\t\t\t<div class=\"col-12 col-md-5\">
\t\t\t\t<div class=\"work-details p-3 text-center\">
\t\t\t\t\t<p class=\"title-work\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_url", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t<p class=\"date-work\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_title", [], "any", false, false, true, 7), "value", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-7\">
\t\t\t\t<div class=\"work-description p-3\">
\t\t\t\t\t";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_summary", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12), 12, $this->source));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/abogados/templates/paragraph/paragraph--work-experience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"work-experience\">
\t<div class=\"card-work-experience\">
\t\t<div class=\"row no-gutters\">
\t\t\t<div class=\"col-12 col-md-5\">
\t\t\t\t<div class=\"work-details p-3 text-center\">
\t\t\t\t\t<p class=\"title-work\">{{paragraph.field_url.value}}</p>
\t\t\t\t\t<p class=\"date-work\">{{paragraph.field_title.value}}</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-7\">
\t\t\t\t<div class=\"work-description p-3\">
\t\t\t\t\t{{paragraph.field_summary.value|raw}}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
", "themes/custom/abogados/templates/paragraph/paragraph--work-experience.html.twig", "/app/web/themes/custom/abogados/templates/paragraph/paragraph--work-experience.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6, "raw" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw'],
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

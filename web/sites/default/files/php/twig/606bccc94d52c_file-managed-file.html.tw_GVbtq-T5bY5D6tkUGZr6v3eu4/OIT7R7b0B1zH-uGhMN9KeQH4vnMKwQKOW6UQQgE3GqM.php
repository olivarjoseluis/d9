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

/* core/themes/seven/templates/classy/content-edit/file-managed-file.html.twig */
class __TwigTemplate_b4b69f1aef0d09abc569ebf8b1fb592b4faa8e9adc964a97f931c8bbc06b7de9 extends \Twig\Template
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
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("seven/classy.file"), "html", null, true);
        echo "
";
        // line 15
        $context["classes"] = [0 => "js-form-managed-file", 1 => "form-managed-file"];
        // line 20
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 20), 20, $this->source), "html", null, true);
        echo ">
  ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 21, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/classy/content-edit/file-managed-file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 21,  45 => 20,  43 => 15,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a file form widget.
 *
 * Available variables:
 * - element: Form element for the file upload.
 * - attributes: HTML attributes for the containing element.
 *
 * @see template_preprocess_file_managed_file()
 */
#}
{{ attach_library('seven/classy.file') }}
{%
  set classes = [
    'js-form-managed-file',
    'form-managed-file',
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ element }}
</div>
", "core/themes/seven/templates/classy/content-edit/file-managed-file.html.twig", "/app/web/core/themes/seven/templates/classy/content-edit/file-managed-file.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15);
        static $filters = array("escape" => 13);
        static $functions = array("attach_library" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['attach_library']
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

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

/* @abogados/nav/inner-menu.html.twig */
class __TwigTemplate_6231bfea500a690559fbdf0e33b6fde6cd28a1180053807a4d12972b7101394a extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "\t";
            $context["active"] = ((twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, true, 2)) ? (" is-active") : (""));
            // line 3
            echo "\t<li class=\"item-navegation-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_level"] ?? null), 3, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active"] ?? null), 3, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "submenu", [], "any", false, false, true, 3)) ? ("item-dropdown") : ("")));
            echo "\">
\t\t<a class=\"link-item-";
            // line 4
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_level"] ?? null), 4, $this->source), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "</a>
\t\t<span class=\"z-activa-fl\"></span>
\t\t";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["item"], "submenu", [], "any", false, false, true, 6)) {
                // line 7
                echo "\t\t\t";
                $context["default_level"] = (($context["default_level"] ?? null) + 1);
                // line 8
                echo "\t\t\t<ul class=\"menu-level-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["default_level"] ?? null), 8, $this->source), "html", null, true);
                echo "\">
\t\t\t\t";
                // line 9
                $this->loadTemplate("@abogados/nav/inner-menu.html.twig", "@abogados/nav/inner-menu.html.twig", 9)->display(twig_array_merge($context, ["items" => twig_get_attribute($this->env, $this->source, $context["item"], "submenu", [], "any", false, false, true, 9)]));
                // line 10
                echo "\t\t\t</ul>
\t\t";
            }
            // line 12
            echo "\t</li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@abogados/nav/inner-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 12,  89 => 10,  87 => 9,  82 => 8,  79 => 7,  77 => 6,  68 => 4,  59 => 3,  56 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@abogados/nav/inner-menu.html.twig", "/app/web/themes/custom/abogados/src/components/nav/inner-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1, "set" => 2, "if" => 6, "include" => 9);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'include'],
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

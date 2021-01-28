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

/* themes/custom/abogados/templates/menu/menu--main.html.twig */
class __TwigTemplate_7c5c42c9121c83f2d89a009b6c76641e69e8d30055f5d4c0de286f143187545b extends \Twig\Template
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
        $context["items"] = call_user_func_array($this->env->getFunction('simplify_menu')->getCallable(), ["main"]);
        // line 2
        $context["default_level"] = 1;
        // line 3
        $context["item_level"] = 0;
        // line 4
        echo "<nav class=\"main-menu\">
\t<div class=\"main-brand\">
\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t<picture>
\t\t\t\t<img class=\"logo\" data-src=\"/themes/custom/abogados/assets/img/logos/logo.png\" src=\"/themes/custom/abogados/assets/img/logos/logo.png\" alt=\"Rodriguez Abogados2\">
\t\t\t</picture>
\t\t</a>
\t\t<div class=\"menu-btn\">
\t\t\t<div class=\"menu-btn__burger\"></div>
\t\t</div>
\t</div>
\t<div class=\"content-menu\">
\t\t<nav>
\t\t\t<ul class=\"menu-main level-";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["default_level"] ?? null), 17, $this->source), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "menu_tree", [], "any", false, false, true, 18));
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
            // line 19
            echo "\t\t\t\t\t";
            $context["active"] = ((twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, true, 19)) ? (" is-active") : (""));
            // line 20
            echo "\t\t\t\t\t";
            $context["active_tr"] = ($this->sandbox->ensureToStringAllowed(($context["active"] ?? null), 20, $this->source) . ((twig_get_attribute($this->env, $this->source, $context["item"], "active_trail", [], "any", false, false, true, 20)) ? (" is-active-trail") : ("")));
            // line 21
            echo "\t\t\t\t\t<li class=\"item-navegation ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active"] ?? null), 21, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "submenu", [], "any", false, false, true, 21)) ? ("item-dropdown") : ("")));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_tr"] ?? null), 21, $this->source), "html", null, true);
            echo "\">
\t\t\t\t\t\t<a class=\"link-item\" href=\"";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["item"], "submenu", [], "any", false, false, true, 23)) {
                // line 24
                echo "\t\t\t\t\t\t\t<span class=\"z-activa-fl\"></span>
\t\t\t\t\t\t\t";
                // line 25
                $context["default_level"] = (($context["default_level"] ?? null) + 1);
                // line 26
                echo "\t\t\t\t\t\t\t";
                $context["item_level"] = (($context["item_level"] ?? null) + 1);
                // line 27
                echo "\t\t\t\t\t\t\t<ul class=\"menu-level-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["default_level"] ?? null), 27, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 28
                $this->loadTemplate("@abogados/nav/inner-menu.html.twig", "themes/custom/abogados/templates/menu/menu--main.html.twig", 28)->display(twig_array_merge($context, ["items" => twig_get_attribute($this->env, $this->source, $context["item"], "submenu", [], "any", false, false, true, 28), "item_level" => ($context["item_level"] ?? null)]));
                // line 29
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t</li>
\t\t\t\t";
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
        // line 33
        echo "\t\t\t</ul>
\t\t</nav>
\t</div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/abogados/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  123 => 31,  119 => 29,  117 => 28,  112 => 27,  109 => 26,  107 => 25,  104 => 24,  102 => 23,  96 => 22,  87 => 21,  84 => 20,  81 => 19,  64 => 18,  60 => 17,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set items = simplify_menu('main') %}
{% set default_level = 1 %}
{% set item_level = 0 %}
<nav class=\"main-menu\">
\t<div class=\"main-brand\">
\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t<picture>
\t\t\t\t<img class=\"logo\" data-src=\"/themes/custom/abogados/assets/img/logos/logo.png\" src=\"/themes/custom/abogados/assets/img/logos/logo.png\" alt=\"Rodriguez Abogados2\">
\t\t\t</picture>
\t\t</a>
\t\t<div class=\"menu-btn\">
\t\t\t<div class=\"menu-btn__burger\"></div>
\t\t</div>
\t</div>
\t<div class=\"content-menu\">
\t\t<nav>
\t\t\t<ul class=\"menu-main level-{{ default_level }}\">
\t\t\t\t{% for item in items.menu_tree %}
\t\t\t\t\t{% set active = (item.active) ? ' is-active' : '' %}
\t\t\t\t\t{% set active_tr = active ~ ((item.active_trail) ? ' is-active-trail' : '') %}
\t\t\t\t\t<li class=\"item-navegation {{ active }} {{ item.submenu ? 'item-dropdown' }} {{ active_tr }}\">
\t\t\t\t\t\t<a class=\"link-item\" href=\"{{ item.url }}\">{{ item.text }}</a>
\t\t\t\t\t\t{% if item.submenu %}
\t\t\t\t\t\t\t<span class=\"z-activa-fl\"></span>
\t\t\t\t\t\t\t{% set default_level = default_level+1 %}
\t\t\t\t\t\t\t{% set item_level  = item_level +1 %}
\t\t\t\t\t\t\t<ul class=\"menu-level-{{ default_level }}\">
\t\t\t\t\t\t\t\t{% include \"@abogados/nav/inner-menu.html.twig\" with {\"items\":item.submenu,\"item_level\":item_level} %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</nav>
\t</div>
</nav>
", "themes/custom/abogados/templates/menu/menu--main.html.twig", "/app/web/themes/custom/abogados/templates/menu/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 18, "if" => 23, "include" => 28);
        static $filters = array("escape" => 17);
        static $functions = array("simplify_menu" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['escape'],
                ['simplify_menu']
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

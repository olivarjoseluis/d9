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
class __TwigTemplate_d1323989abf19ca126b8a23e8c00e8f23fceb1255d7730376c9aea251ba866e0 extends \Twig\Template
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
        echo "<nav class=\"main-menu\">
  <div class=\"main-brand\">
    <a class=\"navbar-brand\" href=\"/\">
      <picture>
        <img class=\"logo\" data-src=\"/themes/custom/abogados/assets/img/logos/logo.png\"
             src=\"/themes/custom/abogados/assets/img/logos/logo.png\"
             alt=\"Rodriguez Abogados2\">
      </picture>
    </a>
    <div class=\"menu-btn\">
      <div class=\"menu-btn__burger\"></div>
    </div>
  </div>
  <div class=\"content-menu\">
    <nav>
      <ul class=\"menu-main level-";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["default_level"] ?? null), 18, $this->source), "html", null, true);
        echo "\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "menu_tree", [], "any", false, false, true, 19));
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
            // line 20
            echo "          ";
            $context["active"] = ((twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, true, 20)) ? (" is-active") : (""));
            // line 21
            echo "          ";
            $context["active_tr"] = ($this->sandbox->ensureToStringAllowed(($context["active"] ?? null), 21, $this->source) . ((twig_get_attribute($this->env, $this->source, $context["item"], "active_trail", [], "any", false, false, true, 21)) ? (" is-active-trail") : ("")));
            // line 22
            echo "          <li
            class=\"item-navegation ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active"] ?? null), 23, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "submenu", [], "any", false, false, true, 23)) ? ("item-dropdown") : ("")));
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_tr"] ?? null), 23, $this->source), "html", null, true);
            echo "\">
            <a class=\"link-item\" href=\"";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</a>
            ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["item"], "submenu", [], "any", false, false, true, 25)) {
                // line 26
                echo "              <span class=\"z-activa-fl\"></span>
              ";
                // line 27
                $context["default_level"] = (($context["default_level"] ?? null) + 1);
                // line 28
                echo "              <ul class=\"menu-level-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["default_level"] ?? null), 28, $this->source), "html", null, true);
                echo "\">
                ";
                // line 29
                $this->loadTemplate("@abogados/nav/inner-menu.html.twig", "themes/custom/abogados/templates/menu/menu--main.html.twig", 29)->display(twig_array_merge($context, ["items" => twig_get_attribute($this->env, $this->source, $context["item"], "submenu", [], "any", false, false, true, 29)]));
                // line 30
                echo "              </ul>
            ";
            }
            // line 32
            echo "          </li>
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
        // line 34
        echo "      </ul>
    </nav>
  </div>
</nav>";
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
        return array (  137 => 34,  122 => 32,  118 => 30,  116 => 29,  111 => 28,  109 => 27,  106 => 26,  104 => 25,  98 => 24,  90 => 23,  87 => 22,  84 => 21,  81 => 20,  64 => 19,  60 => 18,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/abogados/templates/menu/menu--main.html.twig", "/app/web/themes/custom/abogados/templates/menu/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 19, "if" => 25, "include" => 29);
        static $filters = array("escape" => 18);
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

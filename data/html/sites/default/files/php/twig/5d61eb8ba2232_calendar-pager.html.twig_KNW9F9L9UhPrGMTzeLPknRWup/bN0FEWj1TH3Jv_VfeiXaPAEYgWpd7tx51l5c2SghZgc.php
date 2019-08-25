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

/* profiles/opigno_lms/modules/contrib/calendar/templates/calendar-pager.html.twig */
class __TwigTemplate_2ef1497d8e08de680360faf02507845f80a97f1b82631dbd7e025a3ac97d18d7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 12];
        $filters = ["t" => 14, "escape" => 18, "without" => 18, "default" => 19];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape', 'without', 'default'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 12
        if ((($this->getAttribute(($context["items"] ?? null), "previous", []) || $this->getAttribute(($context["items"] ?? null), "next", [])) &&  !($context["exclude"] ?? null))) {
            // line 13
            echo "    <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
        <h4 class=\"visually-hidden\">";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination"));
            echo "</h4>
        <ul class=\"js-pager__items\">
            ";
            // line 16
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 17
                echo "                <li class=\"pager__item pager__item--previous\">
                    <a href=\"";
                // line 18
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "url", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
                        <span aria-hidden=\"true\">";
                // line 19
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [])), t("‹‹"))) : (t("‹‹"))), "html", null, true);
                echo "</span>
                        <span>";
                // line 20
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous"));
                echo "</span>
                    </a>
                </li>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute(($context["items"] ?? null), "current", [])) {
                // line 25
                echo "                <li class=\"pager__item pager__item--current\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "current", [])), "html", null, true);
                echo "</li>
            ";
            }
            // line 27
            echo "            ";
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 28
                echo "                <li class=\"pager__item pager__item--next\">
                    <a href=\"";
                // line 29
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "url", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
                        <span>";
                // line 30
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next"));
                echo "</span>
                        <span aria-hidden=\"true\">";
                // line 31
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [])), t("››"))) : (t("››"))), "html", null, true);
                echo "</span>
                    </a>
                </li>
            ";
            }
            // line 35
            echo "        </ul>
    </nav>
";
        }
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/modules/contrib/calendar/templates/calendar-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 38,  123 => 35,  116 => 31,  112 => 30,  104 => 29,  101 => 28,  98 => 27,  92 => 25,  89 => 24,  82 => 20,  78 => 19,  70 => 18,  67 => 17,  65 => 16,  60 => 14,  57 => 13,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/modules/contrib/calendar/templates/calendar-pager.html.twig", "/var/www/html/profiles/opigno_lms/modules/contrib/calendar/templates/calendar-pager.html.twig");
    }
}

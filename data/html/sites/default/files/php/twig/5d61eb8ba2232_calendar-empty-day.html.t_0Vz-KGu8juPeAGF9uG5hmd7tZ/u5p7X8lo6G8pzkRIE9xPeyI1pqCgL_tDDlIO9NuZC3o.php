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

/* profiles/opigno_lms/modules/contrib/calendar/templates/calendar-empty-day.html.twig */
class __TwigTemplate_a063eee11dfe5a82e5c9e6327c92778ff2d92e4bb6be00b63ccea913cd3b05df extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 13, "trans" => 16];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                [],
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
        // line 13
        if (($this->getAttribute($this->getAttribute(($context["view"] ?? null), "dateInfo", []), "calendarType", []) != "day")) {
            // line 14
            echo "  <div class=\"calendar-empty\">&nbsp;</div>
";
        } else {
            // line 16
            echo "  <div class=\"calendar-dayview-empty\">";
            echo t("Empty day", array());
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/modules/contrib/calendar/templates/calendar-empty-day.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  57 => 14,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/modules/contrib/calendar/templates/calendar-empty-day.html.twig", "/var/www/html/profiles/opigno_lms/modules/contrib/calendar/templates/calendar-empty-day.html.twig");
    }
}

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

/* profiles/opigno_lms/modules/opigno/opigno_scorm/templates/opigno-scorm--player.html.twig */
class __TwigTemplate_695b86626578d5e735c9ca7efb5ca089659392d19b4959549c8244ac37d2aaa5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 1];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        // line 1
        echo "<div class=\"scorm-ui-player\" id=\"scorm-ui-player-scorm-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scorm_id"] ?? null)), "html", null, true);
        echo ">\" data-scorm-id=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scorm_id"] ?? null)), "html", null, true);
        echo "\">
  ";
        // line 3
        echo "    ";
        // line 4
        echo "      ";
        // line 5
        echo "    ";
        // line 6
        echo "  ";
        // line 7
        echo "
  <div class=\"scorm-ui-player-iframe-wrapper\">
    <iframe data-sco-id=\"";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["start_sco"] ?? null), "id", [])), "html", null, true);
        echo "\" src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["start_sco"] ?? null), "base_path", [])), "html", null, true);
        echo "opigno-scorm/player/sco/";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["start_sco"] ?? null), "id", [])), "html", null, true);
        echo "\"></iframe>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/modules/opigno/opigno_scorm/templates/opigno-scorm--player.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 9,  70 => 7,  68 => 6,  66 => 5,  64 => 4,  62 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/modules/opigno/opigno_scorm/templates/opigno-scorm--player.html.twig", "/var/www/html/profiles/opigno_lms/modules/opigno/opigno_scorm/templates/opigno-scorm--player.html.twig");
    }
}

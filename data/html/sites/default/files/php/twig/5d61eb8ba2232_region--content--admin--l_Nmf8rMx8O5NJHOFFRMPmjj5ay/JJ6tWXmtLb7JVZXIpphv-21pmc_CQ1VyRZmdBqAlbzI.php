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

/* profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/region--content--admin--learning-path.html.twig */
class __TwigTemplate_655e10ce1f1462335d64951f9abece213dd79c203e80caad867cb1438ff1de8e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 17];
        $filters = ["escape" => 19];
        $functions = ["attach_library" => 20];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['attach_library']
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
        // line 17
        if (($context["content"] ?? null)) {
            // line 18
            echo "  <div>
    ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["step_list_top"] ?? null)), "html", null, true);
            echo "
    ";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("opigno_learning_path/creation_steps"), "html", null, true);
            echo "
  </div>
  <div class=\"d-flex justify-content-end mb-4 text-uppercase\">
    ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_link"] ?? null)), "html", null, true);
            echo "
  </div>
  <div class=\"row\">
    <div class=\"col-md-3 aside-col\">
      ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["step_list_aside"] ?? null)), "html", null, true);
            echo "
    </div>
    <div class=\"col-md-9 content-col\">
      <div";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">
        ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["add_member_link"] ?? null)), "html", null, true);
            echo "
        ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
            echo "
      </div>
    </div>
  </div>

";
        }
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/region--content--admin--learning-path.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  87 => 31,  83 => 30,  77 => 27,  70 => 23,  64 => 20,  60 => 19,  57 => 18,  55 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/region--content--admin--learning-path.html.twig", "/var/www/html/profiles/opigno_lms/modules/opigno/opigno_learning_path/templates/region--content--admin--learning-path.html.twig");
    }
}

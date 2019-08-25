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

/* profiles/opigno_lms/themes/contrib/platon/templates/page/page.html.twig */
class __TwigTemplate_7075ab80d97b80b74d6a25b6d361b2b18a07662c5084dd325fab6225714f9cbd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 49, "if" => 56];
        $filters = ["escape" => 52];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
        // line 48
        echo "
";
        // line 49
        $this->loadTemplate("@platon/layout/header.html.twig", "profiles/opigno_lms/themes/contrib/platon/templates/page/page.html.twig", 49)->display($context);
        // line 50
        echo "
<div id=\"main\" class=\"flex-column container\">
  ";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

  <div class=\"";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_wrapper_classes"] ?? null)), "html", null, true);
        echo "\">
    <div id=\"main-content\" class=\"row\">
      ";
        // line 56
        if ($this->getAttribute(($context["page"] ?? null), "top", [])) {
            // line 57
            echo "        <div class=\"col-12\">
          ";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 61
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 62
            echo "        <div class=\"col-lg-4 mb-4 mb-lg-0\" id=\"sidebar-first\">
          ";
            // line 63
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </div>
        <div class=\"col-lg-8 p-static\" id=\"content\">
        ";
        } else {
            // line 67
            echo "          <div class=\"col-lg-12 p-static\" id=\"content\">
          ";
        }
        // line 69
        echo "          <div class=\"message-wrapper\">
            ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "status_messages", [])), "html", null, true);
        echo "
          </div>
          <div class=\"content-wrapper\">
            ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/themes/contrib/platon/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 73,  105 => 70,  102 => 69,  98 => 67,  91 => 63,  88 => 62,  85 => 61,  79 => 58,  76 => 57,  74 => 56,  69 => 54,  64 => 52,  60 => 50,  58 => 49,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/themes/contrib/platon/templates/page/page.html.twig", "/var/www/html/profiles/opigno_lms/themes/contrib/platon/templates/page/page.html.twig");
    }
}

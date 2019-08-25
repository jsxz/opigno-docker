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

/* profiles/opigno_lms/modules/opigno/opigno_dashboard/templates/opigno-dashboard.html.twig */
class __TwigTemplate_77e831c40b3b9eb68095037d6d21036de9caad4bd95460b8827f764b61dbad38 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 1, "raw" => 13, "t" => 16];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'raw', 't'],
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
        echo "<base href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["base_href"] ?? null))), "html", null, true);
        echo "\">

<script type=\"text/javascript\">
  window.appConfig = {
    columns: 3,
    positions: [[], [], [], []],
    apiBaseUrl: '";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "',
    apiRouteName: '";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["route_name"] ?? null)), "html", null, true);
        echo "',
    getPositioningUrl: '/opigno_dashboard/get-positioning',
    getDefaultPositioningUrl: '/opigno_dashboard/get-default-positioning',
    setPositioningUrl: '/opigno_dashboard/set-positioning',
    getBlocksContentUrl: '/opigno_dashboard/get-blocks',
    defaultConfig: '";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["default_config"] ?? null)));
        echo "',
    defaultColumns: '";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["default_columns"] ?? null)));
        echo "',
    locales: {
      manageYourDashboard: '";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Manage your dashboard"));
        echo "',
      remove: '";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("remove"));
        echo "',
      close: '";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("close"));
        echo "',
      layout: '";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Layout"));
        echo "',
      oneColumn: '";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("1 column"));
        echo "',
      twoColumns: '";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("2 columns"));
        echo "',
      asymColumns: '";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("1/3-2/3 columns"));
        echo "',
      threeColumns: '";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("3 columns"));
        echo "',
      addBlocks: '";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Add blocks by dragging them below into the canvas"));
        echo "',
      restoreYourDashboard: '";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Restore your dashboard to default:"));
        echo "',
      restoreToDefault: '";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("restore to default"));
        echo "'
    }
  };
</script>

<app-root class=\"d-block dashboard\">";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Loading dashboard..."));
        echo "</app-root>
";
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/modules/opigno/opigno_dashboard/templates/opigno-dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 31,  126 => 26,  122 => 25,  118 => 24,  114 => 23,  110 => 22,  106 => 21,  102 => 20,  98 => 19,  94 => 18,  90 => 17,  86 => 16,  81 => 14,  77 => 13,  69 => 8,  65 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/modules/opigno/opigno_dashboard/templates/opigno-dashboard.html.twig", "/var/www/html/profiles/opigno_lms/modules/opigno/opigno_dashboard/templates/opigno-dashboard.html.twig");
    }
}

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

/* profiles/opigno_lms/modules/opigno/opigno_group_manager/templates/opigno-group-manager.html.twig */
class __TwigTemplate_7e4efc75d8f16e2b0a16fac622cfdfa8437ad7e3e25fd8c4b3532f5113fa5017 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
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
        echo "<!-- group/{group}}/manager -->

<base href=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["base_href"] ?? null))), "html", null, true);
        echo "\">

<script type=\"text/javascript\">
  window.appConfig = {
    formSubmitBtn: false,
    groupId: ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_id"] ?? null)), "html", null, true);
        echo ",
    apiBaseUrl: '";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "',
    viewType: 'manager',
    userHasInfoCard: '";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_has_info_card"] ?? null)), "html", null, true);
        echo "',
    hideInfocardUrl: '/opigno-group-manager/hide-info-card',
    getEntitiesUrl: '/group/%groupId/get-items',
    getEntitiesPositionsUrl: '/group/%groupId/get-positions',
    setEntitiesPositionsUrl: '/group/%groupId/set-positions',
    getEntitiesTypesUrl: '/group/%groupId/get-item-types',
    getEntitiesAvailableUrl: '/group/%groupId/get-available-items',
    getEntityFormUrl: '/group/%groupId/item-form/%bundle/%entityId',
    getActivitiesUrl: '/group/%moduleId/get-activities',
    getGuidedNavigationUrl: '/group/%groupId/get-guided-navigation',
    getRequiredActivitiesUrl: '/group/%moduleId/get-activities-required',
    submitAddEntityFormUrl: '/group/%groupId/create-item/%bundle',
    addEntityUrl: '/group/%groupId/add-item',
    removeEntityUrl: '/group/%groupId/remove-item',
    addEntityLinkUrl: '/group/%groupId/add-link',
    updateEntityLinkUrl: '/group/%groupId/update-link',
    removeEntityLinkUrl: '/group/%groupId/remove-link',
    updateEntityMandatoryUrl: '/group/%groupId/update-mandatory',
    updateEntityMinScoreUrl: '/group/%groupId/update-min-score',
    updateEntitiesUrl: '/group/%groupId/update-entities',
    updateGuidedNavigationUrl: '/group/%groupId/update-guided-navigation',

    manageableEntities: ['ContentTypeCourse'],
    nextLink: '";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_link"] ?? null)), "html", null, true);
        echo "'
  };
</script>

<app-root class=\"d-block\">Loading app...</app-root>
";
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/modules/opigno/opigno_group_manager/templates/opigno-group-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  76 => 11,  71 => 9,  67 => 8,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/modules/opigno/opigno_group_manager/templates/opigno-group-manager.html.twig", "/var/www/html/profiles/opigno_lms/modules/opigno/opigno_group_manager/templates/opigno-group-manager.html.twig");
    }
}

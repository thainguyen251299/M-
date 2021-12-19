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

/* default/social/personal_data.tpl */
class __TwigTemplate_31a2b68a7951bd85f1830492a2a83312285e4605d4759a2af7a264e6a2ddf25f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(api_find_template("layout/layout_1_col.tpl"), "default/social/personal_data.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["display"] = $this->loadTemplate("default/macro/macro.tpl", "default/social/personal_data.tpl", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "<div class=\"row\">
    ";
        // line 6
        $context["columns"] = "12";
        // line 7
        echo "    ";
        if (($context["social_menu_block"] ?? null)) {
            // line 8
            echo "        <div class=\"col-md-3\">
            <div class=\"social-network-menu\">
                ";
            // line 10
            echo ($context["social_avatar_block"] ?? null);
            echo "
                ";
            // line 11
            echo ($context["social_menu_block"] ?? null);
            echo "
            </div>
        </div>
        ";
            // line 14
            $context["columns"] = "9";
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    <div class=\"col-md-";
        // line 17
        echo ($context["columns"] ?? null);
        echo "\">
        ";
        // line 18
        echo $context["display"]->getpanel(get_lang("PersonalDataIntroductionTitle"), get_lang("PersonalDataIntroductionText"));
        echo "
        ";
        // line 19
        echo $context["display"]->getcollapse("pnl-personal-data", get_lang("PersonalDataKeptOnYou"), $this->getAttribute(($context["personal_data"] ?? null), "data", []), false, "false");
        echo "

        ";
        // line 21
        if ($this->getAttribute(($context["personal_data"] ?? null), "responsible", [])) {
            // line 22
            echo "            ";
            echo $context["display"]->getpanel(get_lang("PersonalDataResponsibleOrganizationTitle"), $this->getAttribute(($context["personal_data"] ?? null), "responsible", []));
            echo "
        ";
        }
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute(($context["personal_data"] ?? null), "treatment", [])) {
            // line 26
            echo "        <div class=\"panel personal-data-treatment\">
            <div class=\"panel-title\">";
            // line 27
            echo get_lang("PersonalDataTreatmentTitle");
            echo "</div>
            <div class=\"personal-data-treatment-description\">
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["personal_data"] ?? null), "treatment", []));
            foreach ($context['_seq'] as $context["_key"] => $context["treatment"]) {
                // line 30
                echo "                    ";
                if ($this->getAttribute($context["treatment"], "content", [])) {
                    // line 31
                    echo "                    <div class=\"sub-section\">
                        <div class=\"panel-sub-title\">";
                    // line 32
                    echo $this->getAttribute($context["treatment"], "title", []);
                    echo "</div>
                        <div class=\"panel-body\">";
                    // line 33
                    echo $this->getAttribute($context["treatment"], "content", []);
                    echo "</div>
                    </div>
                    ";
                }
                // line 36
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treatment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </div>
        </div>
        ";
        }
        // line 40
        echo "        ";
        if ($this->getAttribute(($context["personal_data"] ?? null), "officer_name", [])) {
            // line 41
            echo "            ";
            ob_start(function () { return ''; });
            // line 42
            echo "            <div class=\"panel personal-data-responsible\">
                <div class=\"panel-title\">";
            // line 43
            echo get_lang("PersonalDataOfficerName");
            echo "</div>
                <div class=\"personal-data-responsible-description\">
                    <a href=\"mailto:";
            // line 45
            echo $this->getAttribute(($context["personal_data"] ?? null), "officer_email", []);
            echo "\">";
            echo $this->getAttribute(($context["personal_data"] ?? null), "officer_name", []);
            echo "</a>
                </div>
                <div class=\"panel-title\">";
            // line 47
            echo get_lang("PersonalDataOfficerRole");
            echo "</div>
                <div class=\"personal-data-responsible-description\">
                    ";
            // line 49
            echo $this->getAttribute(($context["personal_data"] ?? null), "officer_role", []);
            echo "
                </div>
            </div>
            ";
            $context["officer_data"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 53
            echo "            ";
            echo $context["display"]->getpanel(get_lang("PersonalDataOfficer"), ($context["officer_data"] ?? null));
            echo "
        ";
        }
        // line 55
        echo "
        ";
        // line 56
        if (($context["term_link"] ?? null)) {
            // line 57
            echo "            ";
            echo $context["display"]->getpanel(get_lang("TermsAndConditions"), ($context["term_link"] ?? null));
            echo "
        ";
        }
        // line 59
        echo "
        ";
        // line 60
        echo $context["display"]->getpanel(get_lang("PersonalDataPermissionsYouGaveUs"), ($context["permission"] ?? null));
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/social/personal_data.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 60,  189 => 59,  183 => 57,  181 => 56,  178 => 55,  172 => 53,  165 => 49,  160 => 47,  153 => 45,  148 => 43,  145 => 42,  142 => 41,  139 => 40,  134 => 37,  128 => 36,  122 => 33,  118 => 32,  115 => 31,  112 => 30,  108 => 29,  103 => 27,  100 => 26,  98 => 25,  95 => 24,  89 => 22,  87 => 21,  82 => 19,  78 => 18,  74 => 17,  71 => 16,  68 => 15,  66 => 14,  60 => 11,  56 => 10,  52 => 8,  49 => 7,  47 => 6,  44 => 5,  41 => 4,  37 => 1,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/social/personal_data.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\social\\personal_data.tpl");
    }
}

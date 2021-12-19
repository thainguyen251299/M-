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

/* default/mail/user_edit_content.tpl */
class __TwigTemplate_81c68899a19ae5025e144c69535a1671e45610f6f7283c99967434e5e802c21c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<p>";
        echo get_lang("Dear");
        echo " ";
        echo ($context["complete_name"] ?? null);
        echo ",</p>
<p>";
        // line 2
        echo get_lang("YouAreReg");
        echo " ";
        echo $this->getAttribute(($context["_s"] ?? null), "site_name", []);
        echo " ";
        echo get_lang("WithTheFollowingSettings");
        echo "</p>
<p>";
        // line 3
        echo get_lang("Username");
        echo " : ";
        echo ($context["login_name"] ?? null);
        echo "<br>
";
        // line 4
        if ((($context["original_password"] ?? null) != "")) {
            // line 5
            echo get_lang("Pass");
            echo " : ";
            echo ($context["original_password"] ?? null);
            echo "</p>
";
        }
        // line 7
        echo "<p>";
        echo get_lang("Address");
        echo " ";
        echo $this->getAttribute(($context["_s"] ?? null), "site_name", []);
        echo " ";
        echo get_lang("Is");
        echo " : ";
        echo ($context["portal_url"] ?? null);
        echo "</p>
<p>";
        // line 8
        echo get_lang("Problem");
        echo "</p>
<p>";
        // line 9
        echo get_lang("SignatureFormula");
        echo "</p>
<p>";
        // line 10
        echo $this->getAttribute(($context["_admin"] ?? null), "name", []);
        echo ", ";
        echo $this->getAttribute(($context["_admin"] ?? null), "surname", []);
        echo "<br>
    ";
        // line 11
        echo get_lang("Manager");
        echo " ";
        echo $this->getAttribute(($context["_s"] ?? null), "site_name", []);
        echo "<br>
    ";
        // line 12
        echo (($this->getAttribute(($context["_admin"] ?? null), "telephone", [])) ? (("T. " . $this->getAttribute(($context["_admin"] ?? null), "telephone", []))) : (""));
        echo "<br>
    ";
        // line 13
        echo (($this->getAttribute(($context["_admin"] ?? null), "email", [])) ? (((get_lang("Email") . ": ") . $this->getAttribute(($context["_admin"] ?? null), "email", []))) : (""));
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "default/mail/user_edit_content.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 13,  91 => 12,  85 => 11,  79 => 10,  75 => 9,  71 => 8,  60 => 7,  53 => 5,  51 => 4,  45 => 3,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/mail/user_edit_content.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\mail\\user_edit_content.tpl");
    }
}

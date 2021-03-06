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

/* default/layout/login_form.tpl */
class __TwigTemplate_b8e7dcac9b4ff176d61a059bf87bf25b7378fc454173cb109426e26118ed526a extends \Twig\Template
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
        if (($this->getAttribute(($context["_u"] ?? null), "logged", []) == 0)) {
            // line 2
            echo "    ";
            if (($context["login_form"] ?? null)) {
                // line 3
                echo "        <div id=\"login-block\" class=\"panel panel-default\">
            <div class=\"panel-body\">
            ";
                // line 5
                echo ($context["login_language_form"] ?? null);
                echo "
            ";
                // line 6
                if ( !(null === ($context["plugin_login_top"] ?? null))) {
                    // line 7
                    echo "                <div id=\"plugin_login_top\">
                    ";
                    // line 8
                    echo ($context["plugin_login_top"] ?? null);
                    echo "
                </div>
            ";
                }
                // line 11
                echo "
            ";
                // line 12
                echo ($context["login_failed"] ?? null);
                echo "
            ";
                // line 13
                echo ($context["login_form"] ?? null);
                echo "

            ";
                // line 15
                if (((api_get_setting("allow_lostpassword") == "true") || (api_get_setting("allow_registration") == "true"))) {
                    // line 16
                    echo "                <ul class=\"nav nav-pills nav-stacked\">
                    ";
                    // line 17
                    if ((api_get_setting("allow_registration") != "false")) {
                        // line 18
                        echo "                        <li><a href=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
                        echo "auth/inscription.php\"> ";
                        echo get_lang("SignUp");
                        echo " </a></li>
                    ";
                    }
                    // line 20
                    echo "
                    ";
                    // line 21
                    if ((api_get_setting("allow_lostpassword") == "true")) {
                        // line 22
                        echo "                        ";
                        $context["pass_reminder_link"] = api_get_configuration_value("pass_reminder_custom_link");
                        // line 23
                        echo "                        ";
                        $context["lost_password_link"] = ($this->getAttribute(($context["_p"] ?? null), "web_main", []) . "auth/lostPassword.php");
                        // line 24
                        echo "
                        ";
                        // line 25
                        if ( !twig_test_empty(($context["pass_reminder_link"] ?? null))) {
                            // line 26
                            echo "                            ";
                            $context["lost_password_link"] = ($context["pass_reminder_link"] ?? null);
                            // line 27
                            echo "                        ";
                        }
                        // line 28
                        echo "
                        <li><a href=\"";
                        // line 29
                        echo ($context["lost_password_link"] ?? null);
                        echo "\"> ";
                        echo get_lang("LostPassword");
                        echo " </a></li>
                    ";
                    }
                    // line 31
                    echo "                </ul>
            ";
                }
                // line 33
                echo "
            ";
                // line 34
                if ( !(null === ($context["plugin_login_bottom"] ?? null))) {
                    // line 35
                    echo "                <div id=\"plugin_login_bottom\">
                    ";
                    // line 36
                    echo ($context["plugin_login_bottom"] ?? null);
                    echo "
                </div>
            ";
                }
                // line 39
                echo "            </div>
        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/layout/login_form.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 39,  125 => 36,  122 => 35,  120 => 34,  117 => 33,  113 => 31,  106 => 29,  103 => 28,  100 => 27,  97 => 26,  95 => 25,  92 => 24,  89 => 23,  86 => 22,  84 => 21,  81 => 20,  73 => 18,  71 => 17,  68 => 16,  66 => 15,  61 => 13,  57 => 12,  54 => 11,  48 => 8,  45 => 7,  43 => 6,  39 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/login_form.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\layout\\login_form.tpl");
    }
}

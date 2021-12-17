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

/* default/layout/page_header.tpl */
class __TwigTemplate_94a94a6ddd774e5c3ecaaa6ff925a349307a39b57259e6a71d4f26ceaae2cd12 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'topbar' => [$this, 'block_topbar'],
            'menu' => [$this, 'block_menu'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"navigation\" class=\"notification-panel\">
    ";
        // line 2
        echo ($context["help_content"] ?? null);
        echo "
    ";
        // line 3
        echo ($context["bug_notification"] ?? null);
        echo "
</div>
";
        // line 5
        $this->displayBlock('topbar', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        if ( !(null === ($context["header_extra_content"] ?? null))) {
            // line 10
            echo "    ";
            echo ($context["header_extra_content"] ?? null);
            echo "
";
        }
        // line 12
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-3\">
            ";
        // line 15
        if (($this->getAttribute(($context["_u"] ?? null), "logged", []) != 1)) {
            // line 16
            echo "                <div class=\"key-login\">
                    <a href=\"#login-block\" id=\"btn-login\" class=\"btn btn-default\">
                        <img src=\"";
            // line 18
            echo Display::get_icon_path("key.png", 22);
            echo "\" alt=\"key\"> ";
            echo get_lang("LoginAsThisUser");
            echo "
                    </a>
                </div>
            ";
        }
        // line 22
        echo "            <div class=\"logo\">
                ";
        // line 23
        echo ($context["logo"] ?? null);
        echo "
            </div>
        </div>
        <div class=\"col-xs-12 col-md-9\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    ";
        // line 29
        if ( !(null === ($context["plugin_header_left"] ?? null))) {
            // line 30
            echo "                        <div id=\"plugin_header_left\">
                            ";
            // line 31
            echo ($context["plugin_header_left"] ?? null);
            echo "
                        </div>
                    ";
        }
        // line 34
        echo "                </div>
                <div class=\"col-sm-3\">
                    ";
        // line 36
        if ( !(null === ($context["plugin_header_center"] ?? null))) {
            // line 37
            echo "                        <div id=\"plugin_header_center\">
                            ";
            // line 38
            echo ($context["plugin_header_center"] ?? null);
            echo "
                        </div>
                    ";
        }
        // line 41
        echo "                </div>
                <div class=\"col-sm-5\">
                    <ol class=\"header-ol\">
                        ";
        // line 44
        if ( !(null === ($context["plugin_header_right"] ?? null))) {
            // line 45
            echo "                            <li>
                                <div id=\"plugin_header_right\">
                                    ";
            // line 47
            echo ($context["plugin_header_right"] ?? null);
            echo "
                                </div>
                            </li>
                        ";
        }
        // line 51
        echo "                        <li>
                            <div class=\"section-notifications\">
                                ";
        // line 53
        if ((($this->getAttribute(($context["_u"] ?? null), "logged", []) == 1) &&  !($context["user_in_anon_survey"] ?? null))) {
            // line 54
            echo "                                    <ul id=\"notifications\" class=\"nav nav-pills pull-right\">
                                    </ul>
                                ";
        }
        // line 57
        echo "                            </div>
                        </li>
                        <li>
                            ";
        // line 60
        echo ($context["accessibility"] ?? null);
        echo "
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 69
        $this->displayBlock('menu', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->loadTemplate(api_find_template("layout/course_navigation.tpl"), "default/layout/page_header.tpl", 73)->display($context);
    }

    // line 5
    public function block_topbar($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        $this->loadTemplate(api_find_template("layout/topbar.tpl"), "default/layout/page_header.tpl", 6)->display($context);
    }

    // line 69
    public function block_menu($context, array $blocks = [])
    {
        // line 70
        $this->loadTemplate(api_find_template("layout/menu.tpl"), "default/layout/page_header.tpl", 70)->display($context);
    }

    public function getTemplateName()
    {
        return "default/layout/page_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 70,  178 => 69,  173 => 6,  170 => 5,  166 => 73,  163 => 72,  161 => 69,  149 => 60,  144 => 57,  139 => 54,  137 => 53,  133 => 51,  126 => 47,  122 => 45,  120 => 44,  115 => 41,  109 => 38,  106 => 37,  104 => 36,  100 => 34,  94 => 31,  91 => 30,  89 => 29,  80 => 23,  77 => 22,  68 => 18,  64 => 16,  62 => 15,  57 => 12,  51 => 10,  49 => 9,  46 => 8,  44 => 5,  39 => 3,  35 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/page_header.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\layout\\page_header.tpl");
    }
}

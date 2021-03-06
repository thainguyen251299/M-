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

/* default/layout/show_header.tpl */
class __TwigTemplate_c082bdd4f84d1317d9d4cb16a863784d1bf634706019de0d98af91462e7baf6f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html lang=\"";
        // line 2
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>    <html lang=\"";
        // line 3
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>    <html lang=\"";
        // line 4
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"";
        // line 6
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js\"> <!--<![endif]-->
<head>
    ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "</head>
<body class=\"";
        // line 12
        echo (("page_origin") ? (("page_origin_" . ($context["page_origin"] ?? null))) : (""));
        echo "\">

<!-- START MAIN -->
<main id=\"main\" dir=\"";
        // line 15
        echo ($context["text_direction"] ?? null);
        echo "\" class=\"";
        echo ($context["section_name"] ?? null);
        echo " ";
        echo ($context["login_class"] ?? null);
        echo "\">
    <noscript>";
        // line 16
        echo get_lang("NoJavascript");
        echo "</noscript>
    ";
        // line 17
        if ((($context["displayCookieUsageWarning"] ?? null) == true)) {
            // line 18
            echo "        <!-- START DISPLAY COOKIES VALIDATION -->
        <div class=\"toolbar-cookie alert-warning\">
            <form onSubmit=\"\$(this).toggle('slow')\" action=\"\" method=\"post\">
                <input value=1 type=\"hidden\" name=\"acceptCookies\"/>
                <div class=\"cookieUsageValidation\">
                    ";
            // line 23
            echo get_lang("YouAcceptCookies");
            echo "
                    <span style=\"margin-left:20px;\" onclick=\"\$(this).next().toggle('slow'); \$(this).toggle('slow')\">
                                (";
            // line 25
            echo get_lang("More");
            echo ")
                            </span>
                    <div style=\"display:none; margin:20px 0;\">
                        ";
            // line 28
            echo get_lang("HelpCookieUsageValidation");
            echo "
                    </div>
                    <span style=\"margin-left:20px;\" onclick=\"\$(this).parent().parent().submit()\">
                                (";
            // line 31
            echo get_lang("Accept");
            echo ")
                            </span>
                </div>
            </form>
        </div>
        <!-- END DISPLAY COOKIES VALIDATION -->
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if ((($context["show_header"] ?? null) == true)) {
            // line 40
            echo "        <!-- START HEADER -->
        <header id=\"cm-header\">
            ";
            // line 42
            $this->loadTemplate(api_find_template("layout/page_header.tpl"), "default/layout/show_header.tpl", 42)->display($context);
            // line 43
            echo "        </header>
        <!-- END HEADER -->
    ";
        }
        // line 46
        echo "
    <!-- START CONTENT -->
    <section id=\"cm-content\">
        <div class=\"container\">
            ";
        // line 50
        if ((($context["show_header"] ?? null) == true)) {
            // line 51
            echo "                ";
            if ( !(null === ($context["show_course_shortcut"] ?? null))) {
                // line 52
                echo "                    <!-- TOOLS SHOW COURSE -->
                    <div id=\"cm-tools\" class=\"nav-tools\">
                        ";
                // line 54
                echo ($context["show_course_shortcut"] ?? null);
                echo "
                    </div>
                    <!-- END TOOLS SHOW COURSE -->
                ";
            }
            // line 58
            echo "
                ";
            // line 59
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 62
            echo "            ";
        }
        // line 63
        echo "            ";
        echo ($context["flash_messages"] ?? null);
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        // line 9
        echo "        ";
        $this->loadTemplate(api_find_template("layout/head.tpl"), "default/layout/show_header.tpl", 9)->display($context);
        // line 10
        echo "    ";
    }

    // line 59
    public function block_breadcrumb($context, array $blocks = [])
    {
        // line 60
        echo "                    ";
        echo ($context["breadcrumb"] ?? null);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "default/layout/show_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 60,  173 => 59,  169 => 10,  166 => 9,  163 => 8,  158 => 63,  155 => 62,  153 => 59,  150 => 58,  143 => 54,  139 => 52,  136 => 51,  134 => 50,  128 => 46,  123 => 43,  121 => 42,  117 => 40,  115 => 39,  112 => 38,  102 => 31,  96 => 28,  90 => 25,  85 => 23,  78 => 18,  76 => 17,  72 => 16,  64 => 15,  58 => 12,  55 => 11,  53 => 8,  48 => 6,  43 => 4,  39 => 3,  35 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/show_header.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\layout\\show_header.tpl");
    }
}

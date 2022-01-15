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

/* default/layout/no_layout.tpl */
class __TwigTemplate_5141fdb4826128ce8596d092be84f95b41d11f0cd54cf47bfe778c3496b6df82 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
<!--[if gt IE 8]><!--><html lang=\"";
        // line 5
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js\"> <!--<![endif]-->
<head>
";
        // line 7
        $this->loadTemplate(api_find_template("layout/head.tpl"), "default/layout/no_layout.tpl", 7)->display($context);
        // line 8
        echo "</head>
<body dir=\"";
        // line 9
        echo ($context["text_direction"] ?? null);
        echo "\" class=\"";
        echo ($context["section_name"] ?? null);
        echo "\">
<section id=\"content-scorm\">
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "</section>
</body>
</html>";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        // line 12
        echo "    ";
        echo ($context["content"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/layout/no_layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  71 => 11,  65 => 14,  63 => 11,  56 => 9,  53 => 8,  51 => 7,  46 => 5,  42 => 4,  38 => 3,  34 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/no_layout.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\layout\\no_layout.tpl");
    }
}

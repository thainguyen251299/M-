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

/* default/mail/header.tpl */
class __TwigTemplate_0423405f9dba7afebd1f88db4e0aed68e3ff7b9a7bc5785ab183d689ca9c8be5 extends \Twig\Template
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
        echo "<div id=\"logo-header\" ";
        echo ($context["mail_header_style"] ?? null);
        echo ">
    <div style=\"margin-bottom: 20px; margin-top: 10px;\">
        ";
        // line 3
        echo ($context["logo"] ?? null);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/mail/header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/mail/header.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\mail\\header.tpl");
    }
}

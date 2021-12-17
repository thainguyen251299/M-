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

/* default/javascript/editor/ckeditor/templates.tpl */
class __TwigTemplate_53e59dd06cc7742ffaa95fd87be49058bed359a262d6af4a69a10338fb92495d extends \Twig\Template
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
        echo "CKEDITOR.addTemplates(\"default\",
{
    imagesPath: ' ',
    templates:
        ";
        // line 5
        echo ($context["templates"] ?? null);
        echo "
});";
    }

    public function getTemplateName()
    {
        return "default/javascript/editor/ckeditor/templates.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/javascript/editor/ckeditor/templates.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\javascript\\editor\\ckeditor\\templates.tpl");
    }
}

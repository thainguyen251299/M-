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

/* default/course_description/index.tpl */
class __TwigTemplate_20cc92ac13f790e35f5f55cecc0964eaaa96689d20b827541ff434718ac4626b extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 2
            echo "    ";
            echo $context["message"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["listing"] ?? null), "descriptions", []));
        foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
            // line 5
            echo "    ";
            if ( !twig_test_empty($context["description"])) {
                // line 6
                echo "        <div id=\"description_";
                echo $this->getAttribute($context["description"], "description_type", []);
                echo "\" class=\"panel panel-default\"
             data-id=\"";
                // line 7
                echo $this->getAttribute($context["description"], "id", []);
                echo "\" data-c_id=\"";
                echo $this->getAttribute($context["description"], "c_id", []);
                echo "\" data-type=\"course_description\">
            <div class=\"panel-heading\">
                ";
                // line 9
                if (($context["is_allowed_to_edit"] ?? null)) {
                    // line 10
                    echo "                    <div class=\"pull-right\">
                        ";
                    // line 11
                    if ((($context["session_id"] ?? null) == $this->getAttribute($context["description"], "session_id", []))) {
                        // line 12
                        echo "                            <a href=\"";
                        echo $this->getAttribute(($context["_p"] ?? null), "web_self", []);
                        echo "?action=edit&id=";
                        echo $this->getAttribute($context["description"], "id", []);
                        echo "&";
                        echo $this->getAttribute(($context["_p"] ?? null), "web_cid_query", []);
                        echo "\"
                               title=\"";
                        // line 13
                        echo get_lang("Edit");
                        echo "\">
                                <img src=\"";
                        // line 14
                        echo Display::get_icon_path("edit.png", 22);
                        echo "\"/>
                            </a>
                            <a href=\"";
                        // line 16
                        echo $this->getAttribute(($context["_p"] ?? null), "web_self", []);
                        echo "?action=delete&id=";
                        echo $this->getAttribute($context["description"], "id", []);
                        echo "&";
                        echo $this->getAttribute(($context["_p"] ?? null), "web_cid_query", []);
                        echo "\"
                               onclick = \"javascript:return confirmation('";
                        // line 17
                        echo twig_escape_filter($this->env, $this->getAttribute($context["description"], "title_js", []), "js");
                        echo "');\"
                               title=\"";
                        // line 18
                        echo get_lang("Delete");
                        echo "\">
                                <img src=\"";
                        // line 19
                        echo Display::get_icon_path("delete.png", 22);
                        echo "\"/>
                            </a>
                        ";
                    } else {
                        // line 22
                        echo "                            <img title=\"";
                        echo get_lang("EditionNotAvailableFromSession");
                        echo "\"
                                 alt=\"";
                        // line 23
                        echo get_lang("EditionNotAvailableFromSession");
                        echo "\"
                                 src=\"";
                        // line 24
                        echo Display::get_icon_path("edit_na.png", 22);
                        echo "\" width=\"22\" height=\"22\"
                                 style=\"vertical-align:middle;\">
                        ";
                    }
                    // line 27
                    echo "                    </div>
                ";
                }
                // line 29
                echo "                ";
                echo Security::remove_XSS($this->getAttribute($context["description"], "title", []));
                echo "
            </div>
            <div class=\"panel-body\">
                ";
                // line 32
                echo Security::remove_XSS($this->getAttribute($context["description"], "content", []));
                echo "
            </div>
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/course_description/index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 32,  128 => 29,  124 => 27,  118 => 24,  114 => 23,  109 => 22,  103 => 19,  99 => 18,  95 => 17,  87 => 16,  82 => 14,  78 => 13,  69 => 12,  67 => 11,  64 => 10,  62 => 9,  55 => 7,  50 => 6,  47 => 5,  43 => 4,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/course_description/index.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\course_description\\index.tpl");
    }
}

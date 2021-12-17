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

/* default/catalog/course_catalog.tpl */
class __TwigTemplate_3f6b6f7b7204fdaa4bfa04c532bd78f36f6c18b16eb61927c7336ee2f193c9c2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'course_grid' => [$this, 'block_course_grid'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(api_find_template("layout/layout_1_col.tpl"), "default/catalog/course_catalog.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        echo ($context["content"] ?? null);
        echo "
    <style>
        .input-group .form-control {
            z-index: auto !important;
        }
        /* WIP: To be move in base.css */
        .search-courses .form-inline-box .input-group {
            width: 80%;
            padding-bottom: 14px;
            z-index: auto;
        }
        .search-courses .form-inline-box .input-group label {
            margin-bottom: 0px;
            z-index: auto;
        }
    </style>
<div>
    ";
        // line 21
        echo get_lang("TotalNumberOfAvailableCourses");
        echo " :
    <strong>";
        // line 22
        echo ($context["total_number_of_courses"] ?? null);
        echo "</strong>
</div>
<div>
    ";
        // line 25
        echo get_lang("NumberOfMatchingCourses");
        echo " :
    <strong>";
        // line 26
        echo ($context["total_number_of_matching_courses"] ?? null);
        echo "</strong>
</div>
    ";
        // line 28
        $this->displayBlock('course_grid', $context, $blocks);
        // line 39
        echo "    <div class=\"col-md-12\">
        ";
        // line 40
        echo ($context["pagination"] ?? null);
        echo "
    </div>
";
    }

    // line 28
    public function block_course_grid($context, array $blocks = [])
    {
        // line 29
        echo "        <div class=\"grid-courses row\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 31
            echo "                <div class=\"col-xs-12 col-sm-6 col-md-4\">
                    <div class=\"items items-courses\">
                        ";
            // line 33
            $this->loadTemplate(api_find_template("catalog/course_item_catalog.tpl"), "default/catalog/course_catalog.tpl", 33)->display($context);
            // line 34
            echo "                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "default/catalog/course_catalog.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 37,  123 => 34,  121 => 33,  117 => 31,  100 => 30,  97 => 29,  94 => 28,  87 => 40,  84 => 39,  82 => 28,  77 => 26,  73 => 25,  67 => 22,  63 => 21,  42 => 4,  39 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/catalog/course_catalog.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\catalog\\course_catalog.tpl");
    }
}

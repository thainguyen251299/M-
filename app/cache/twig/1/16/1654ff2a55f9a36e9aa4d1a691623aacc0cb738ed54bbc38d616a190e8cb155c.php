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

/* default/catalog/course_item_catalog.tpl */
class __TwigTemplate_276bd136fa8b9ce58d59731ad90858e75c0d89058a356399da1f4737239bdc92 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'course_item' => [$this, 'block_course_item'],
            'course_image' => [$this, 'block_course_image'],
            'course_thumbnail' => [$this, 'block_course_thumbnail'],
            'course_description_button' => [$this, 'block_course_description_button'],
            'course_description' => [$this, 'block_course_description'],
            'course_title' => [$this, 'block_course_title'],
            'course_rating' => [$this, 'block_course_rating'],
            'course_extras' => [$this, 'block_course_extras'],
            'course_teacher_info' => [$this, 'block_course_teacher_info'],
            'course_buy_course' => [$this, 'block_course_buy_course'],
            'course_toolbar' => [$this, 'block_course_toolbar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('course_item', $context, $blocks);
    }

    public function block_course_item($context, array $blocks = [])
    {
        // line 2
        echo "    ";
        $this->displayBlock('course_image', $context, $blocks);
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('course_description', $context, $blocks);
    }

    // line 2
    public function block_course_image($context, array $blocks = [])
    {
        // line 3
        echo "        <div class=\"image\">
            ";
        // line 4
        $this->displayBlock('course_thumbnail', $context, $blocks);
        // line 19
        echo "
            ";
        // line 20
        if ($this->getAttribute(($context["course"] ?? null), "category_title", [])) {
            // line 21
            echo "                <span class=\"category\">
                    <a href=\"";
            // line 22
            echo $this->getAttribute(($context["course"] ?? null), "category_code_link", []);
            echo "\">
                        ";
            // line 23
            echo $this->getAttribute(($context["course"] ?? null), "category_title", []);
            echo "
                    </a>
                </span>
                <div class=\"cribbon\"></div>
            ";
        }
        // line 28
        echo "
            ";
        // line 29
        $this->displayBlock('course_description_button', $context, $blocks);
        // line 34
        echo "        </div>
    ";
    }

    // line 4
    public function block_course_thumbnail($context, array $blocks = [])
    {
        // line 5
        echo "                ";
        $context["class"] = "";
        // line 6
        echo "                ";
        if (twig_in_filter("ajax", $this->getAttribute(($context["course"] ?? null), "image_url", []))) {
            // line 7
            echo "                    ";
            $context["class"] = "ajax";
            // line 8
            echo "                ";
        }
        // line 9
        echo "                <a
                    href=\"";
        // line 10
        echo $this->getAttribute(($context["course"] ?? null), "image_url", []);
        echo "\"
                    data-size=\"lg\"
                    data-title=\"";
        // line 12
        echo $this->getAttribute(($context["course"] ?? null), "title", []);
        echo "\"
                    title=\"";
        // line 13
        echo $this->getAttribute(($context["course"] ?? null), "title", []);
        echo "\"
                    class=\"";
        // line 14
        echo ($context["class"] ?? null);
        echo "\"
                >
                    <img class=\"img-responsive\" src=\"";
        // line 16
        echo $this->getAttribute(($context["course"] ?? null), "thumbnail", []);
        echo "\"  alt=\"";
        echo $this->getAttribute(($context["course"] ?? null), "title", []);
        echo "\"/>
                </a>
            ";
    }

    // line 29
    public function block_course_description_button($context, array $blocks = [])
    {
        // line 30
        echo "                <div class=\"user-actions\">
                    ";
        // line 31
        echo $this->getAttribute(($context["course"] ?? null), "description_button", []);
        echo "
                </div>
            ";
    }

    // line 37
    public function block_course_description($context, array $blocks = [])
    {
        // line 38
        echo "        <div class=\"description\">
            ";
        // line 39
        $this->displayBlock('course_title', $context, $blocks);
        // line 64
        echo "
            ";
        // line 65
        $this->displayBlock('course_rating', $context, $blocks);
        // line 68
        echo "
            ";
        // line 69
        $this->displayBlock('course_extras', $context, $blocks);
        // line 97
        echo "
            ";
        // line 98
        $this->displayBlock('course_teacher_info', $context, $blocks);
        // line 101
        echo "
            ";
        // line 102
        $this->displayBlock('course_buy_course', $context, $blocks);
        // line 105
        echo "
            ";
        // line 106
        $this->displayBlock('course_toolbar', $context, $blocks);
        // line 122
        echo "        </div>
    ";
    }

    // line 39
    public function block_course_title($context, array $blocks = [])
    {
        // line 40
        echo "                <div class=\"block-title\">
                    <h4 class=\"title\">
                        ";
        // line 42
        $context["class"] = "";
        // line 43
        echo "                        ";
        if (twig_in_filter("ajax", $this->getAttribute(($context["course"] ?? null), "title_url", []))) {
            // line 44
            echo "                            ";
            $context["class"] = "ajax";
            // line 45
            echo "                        ";
        }
        // line 46
        echo "
                        <a
                            data-size=\"lg\"
                            data-title=\"";
        // line 49
        echo $this->getAttribute(($context["course"] ?? null), "title", []);
        echo "\"
                            title=\"";
        // line 50
        echo $this->getAttribute(($context["course"] ?? null), "title", []);
        echo "\"
                            href=\"";
        // line 51
        echo $this->getAttribute(($context["course"] ?? null), "title_url", []);
        echo "\"
                            class=\"";
        // line 52
        echo ($context["class"] ?? null);
        echo "\"
                        >
                            ";
        // line 54
        echo $this->getAttribute(($context["course"] ?? null), "title", []);
        echo "
                        </a>
                        ";
        // line 56
        if ($this->getAttribute(($context["course"] ?? null), "admin_url", [])) {
            // line 57
            echo "                            <a href=\"";
            echo $this->getAttribute(($context["course"] ?? null), "admin_url", []);
            echo "\">
                                ";
            // line 58
            echo Display::get_image("edit.png", 22, get_lang("Edit"));
            echo "
                            </a>
                        ";
        }
        // line 61
        echo "                    </h4>
                </div>
            ";
    }

    // line 65
    public function block_course_rating($context, array $blocks = [])
    {
        // line 66
        echo "                ";
        echo $this->getAttribute(($context["course"] ?? null), "rating", []);
        echo "
            ";
    }

    // line 69
    public function block_course_extras($context, array $blocks = [])
    {
        // line 70
        echo "                ";
        if ($this->getAttribute(($context["course"] ?? null), "extra_data", [])) {
            // line 71
            echo "                    <div class=\"toolbar row\">
                        <div class=\"col-sm-12\">
                            ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["course"] ?? null), "extra_data", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 74
                echo "                                ";
                if ($this->getAttribute($context["field"], "value_as_array", [])) {
                    // line 75
                    echo "                                    <div class=\"panel-tags\">
                                        <ul class=\"list-inline course-tags\">
                                            <li> ";
                    // line 77
                    echo $this->getAttribute($context["field"], "text", []);
                    echo " :</li>
                                            ";
                    // line 78
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "value_as_array", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 79
                        echo "                                                <li class=\"label label-info\">
                                                    <span>
                                                        <a href=\"";
                        // line 81
                        echo ($context["catalog_url_no_extra_fields"] ?? null);
                        echo "&extra_";
                        echo $this->getAttribute($context["field"], "variable", []);
                        echo "%5B%5D=";
                        echo $context["tag"];
                        echo "\" >
                                                            ";
                        // line 82
                        echo $context["tag"];
                        echo "
                                                        </a>
                                                    </span>
                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "                                        </ul>
                                    </div>
                                ";
                } else {
                    // line 90
                    echo "                                    ";
                    echo $this->getAttribute($context["field"], "text", []);
                    echo " : ";
                    echo $this->getAttribute($context["field"], "value", []);
                    echo " <br />
                                ";
                }
                // line 92
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                        </div>
                    </div>
                ";
        }
        // line 96
        echo "            ";
    }

    // line 98
    public function block_course_teacher_info($context, array $blocks = [])
    {
        // line 99
        echo "                ";
        echo $this->getAttribute(($context["course"] ?? null), "teacher_info", []);
        echo "
            ";
    }

    // line 102
    public function block_course_buy_course($context, array $blocks = [])
    {
        // line 103
        echo "                ";
        echo $this->getAttribute(($context["course"] ?? null), "buy_course", []);
        echo "
            ";
    }

    // line 106
    public function block_course_toolbar($context, array $blocks = [])
    {
        // line 107
        echo "                <div class=\"toolbar row\">
                    ";
        // line 108
        if ($this->getAttribute(($context["course"] ?? null), "already_registered_formatted", [])) {
            // line 109
            echo "                        <div class=\"col-sm-6\">
                            ";
            // line 110
            echo $this->getAttribute(($context["course"] ?? null), "unregister_formatted", []);
            echo "
                        </div>
                        <div class=\"col-sm-6\">
                            ";
            // line 113
            echo $this->getAttribute(($context["course"] ?? null), "already_registered_formatted", []);
            echo "
                        </div>
                    ";
        } else {
            // line 116
            echo "                        <div class=\"col-sm-12\">
                            ";
            // line 117
            echo $this->getAttribute(($context["course"] ?? null), "subscribe_formatted", []);
            echo "
                        </div>
                    ";
        }
        // line 120
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "default/catalog/course_item_catalog.tpl";
    }

    public function getDebugInfo()
    {
        return array (  397 => 120,  391 => 117,  388 => 116,  382 => 113,  376 => 110,  373 => 109,  371 => 108,  368 => 107,  365 => 106,  358 => 103,  355 => 102,  348 => 99,  345 => 98,  341 => 96,  336 => 93,  330 => 92,  322 => 90,  317 => 87,  306 => 82,  298 => 81,  294 => 79,  290 => 78,  286 => 77,  282 => 75,  279 => 74,  275 => 73,  271 => 71,  268 => 70,  265 => 69,  258 => 66,  255 => 65,  249 => 61,  243 => 58,  238 => 57,  236 => 56,  231 => 54,  226 => 52,  222 => 51,  218 => 50,  214 => 49,  209 => 46,  206 => 45,  203 => 44,  200 => 43,  198 => 42,  194 => 40,  191 => 39,  186 => 122,  184 => 106,  181 => 105,  179 => 102,  176 => 101,  174 => 98,  171 => 97,  169 => 69,  166 => 68,  164 => 65,  161 => 64,  159 => 39,  156 => 38,  153 => 37,  146 => 31,  143 => 30,  140 => 29,  131 => 16,  126 => 14,  122 => 13,  118 => 12,  113 => 10,  110 => 9,  107 => 8,  104 => 7,  101 => 6,  98 => 5,  95 => 4,  90 => 34,  88 => 29,  85 => 28,  77 => 23,  73 => 22,  70 => 21,  68 => 20,  65 => 19,  63 => 4,  60 => 3,  57 => 2,  53 => 37,  50 => 36,  47 => 2,  41 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/catalog/course_item_catalog.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\catalog\\course_item_catalog.tpl");
    }
}

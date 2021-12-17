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

/* default/layout/hot_course_item.tpl */
class __TwigTemplate_7a2153c864bbc25e163ca5ded3486953b10da62f0aa6e201973cfc240a56b364 extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(($context["hot_courses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    ";
            if ($this->getAttribute($context["item"], "title", [])) {
                // line 3
                echo "        <div class=\"col-xs-12 col-sm-6 col-md-4\">
            <div class=\"items items-hotcourse\">
                <div class=\"image\">
                    ";
                // line 6
                ob_start(function () { return ''; });
                // line 7
                echo "                    <a title=\"";
                echo $this->getAttribute($context["item"], "title", []);
                echo "\" href=\"";
                echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                echo "course/";
                echo $this->getAttribute($context["item"], "real_id", []);
                echo "/about\">
                        <img src=\"";
                // line 8
                echo $this->getAttribute($context["item"], "course_image_large", []);
                echo "\" class=\"img-responsive\" alt=\"";
                echo $this->getAttribute($context["item"], "title", []);
                echo "\">
                    </a>
                    ";
                $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 11
                echo "                    ";
                echo Security::remove_XSS(($context["title"] ?? null));
                echo "

                    ";
                // line 13
                if (($this->getAttribute($context["item"], "categoryName", []) != "")) {
                    // line 14
                    echo "                        <span class=\"category\">";
                    echo $this->getAttribute($context["item"], "categoryName", []);
                    echo "</span>
                        <div class=\"cribbon\"></div>
                    ";
                }
                // line 17
                echo "                    <div class=\"user-actions\">";
                echo $this->getAttribute($context["item"], "description_button", []);
                echo "</div>
                </div>
                <div class=\"description\">
                    <div class=\"block-title\">
                        ";
                // line 21
                ob_start(function () { return ''; });
                // line 22
                echo "                            <h5 class=\"title\">
                                ";
                // line 23
                if (($this->getAttribute($context["item"], "is_course_student", []) || $this->getAttribute($context["item"], "is_course_teacher", []))) {
                    // line 24
                    echo "                                    <a alt=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\" href=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "courses/";
                    echo $this->getAttribute($context["item"], "directory", []);
                    echo "/\">
                                        ";
                    // line 25
                    echo $this->getAttribute($context["item"], "title_cut", []);
                    echo "
                                    </a>
                                ";
                } else {
                    // line 28
                    echo "                                    <a alt=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["item"], "title", []);
                    echo "\" href=\"";
                    echo $this->getAttribute(($context["_p"] ?? null), "web", []);
                    echo "course/";
                    echo $this->getAttribute($context["item"], "real_id", []);
                    echo "/about\">
                                        ";
                    // line 29
                    echo $this->getAttribute($context["item"], "title_cut", []);
                    echo "
                                    </a>
                                ";
                }
                // line 32
                echo "                            </h5>
                        ";
                $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 34
                echo "                        ";
                echo Security::remove_XSS(($context["title"] ?? null));
                echo "
                    </div>
                    <div class=\"ranking\">
                        ";
                // line 37
                echo $this->getAttribute($context["item"], "rating_html", []);
                echo "
                    </div>
                    <div class=\"toolbar row\">
                        <div class=\"col-sm-4\">
                            ";
                // line 41
                if ($this->getAttribute($context["item"], "price", [])) {
                    // line 42
                    echo "                                ";
                    echo $this->getAttribute($context["item"], "price", []);
                    echo "
                            ";
                }
                // line 44
                echo "                        </div>
                        <div class=\"col-sm-8\">
                            <div class=\"btn-group\" role=\"group\">
                                ";
                // line 47
                echo $this->getAttribute($context["item"], "register_button", []);
                echo "
                                ";
                // line 48
                echo $this->getAttribute($context["item"], "unsubscribe_button", []);
                echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/layout/hot_course_item.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 48,  156 => 47,  151 => 44,  145 => 42,  143 => 41,  136 => 37,  129 => 34,  125 => 32,  119 => 29,  108 => 28,  102 => 25,  91 => 24,  89 => 23,  86 => 22,  84 => 21,  76 => 17,  69 => 14,  67 => 13,  61 => 11,  53 => 8,  44 => 7,  42 => 6,  37 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/hot_course_item.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\layout\\hot_course_item.tpl");
    }
}

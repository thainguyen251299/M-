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

/* default/course_home/activity.tpl */
class __TwigTemplate_5b2fd06905038f1144208bac4cfd60de24af58d27a5dd8ad4c961d4f4f9b68d0 extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 2
            echo "    ";
            if ($this->getAttribute($context["block"], "title", [])) {
                // line 3
                echo "        <div class=\"page-header\">
            <h4 class=\"title-tools\">";
                // line 4
                echo $this->getAttribute($context["block"], "title", []);
                echo "</h4>
        </div>
    ";
            }
            // line 7
            echo "
    <div class=\"row ";
            // line 8
            echo $this->getAttribute($context["block"], "class", []);
            echo "\">
        ";
            // line 9
            if ((api_get_setting("homepage_view") == "activity")) {
                // line 10
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "content", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 11
                    echo "                <div class=\"offset2 col-md-4 course-tool\">
                    ";
                    // line 12
                    echo $this->getAttribute($context["item"], "extra", []);
                    echo "
                    ";
                    // line 13
                    echo $this->getAttribute($context["item"], "visibility", []);
                    echo "
                    ";
                    // line 14
                    echo $this->getAttribute($context["item"], "only_icon_small", []);
                    echo "
                    ";
                    // line 15
                    echo $this->getAttribute($context["item"], "link", []);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "        ";
            }
            // line 19
            echo "
        ";
            // line 20
            if ((api_get_setting("homepage_view") == "activity_big")) {
                // line 21
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "content", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 22
                    echo "                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <div class=\"course-tool\">
                        <div class=\"big_icon\">
                            ";
                    // line 25
                    echo $this->getAttribute($this->getAttribute($context["item"], "tool", []), "image", []);
                    echo "
                        </div>
                        <div class=\"content\">
                            ";
                    // line 28
                    echo $this->getAttribute($context["item"], "visibility", []);
                    echo "
                            ";
                    // line 29
                    echo $this->getAttribute($context["item"], "extra", []);
                    echo "
                            ";
                    // line 30
                    echo $this->getAttribute($context["item"], "link", []);
                    echo "
                        </div>
                    </div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "        ";
            }
            // line 36
            echo "    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/course_home/activity.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  127 => 35,  116 => 30,  112 => 29,  108 => 28,  102 => 25,  97 => 22,  92 => 21,  90 => 20,  87 => 19,  84 => 18,  75 => 15,  71 => 14,  67 => 13,  63 => 12,  60 => 11,  55 => 10,  53 => 9,  49 => 8,  46 => 7,  40 => 4,  37 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/course_home/activity.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\course_home\\activity.tpl");
    }
}

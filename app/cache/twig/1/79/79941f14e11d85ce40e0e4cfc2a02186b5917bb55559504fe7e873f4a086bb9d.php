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

/* default/admin/questions.tpl */
class __TwigTemplate_7891e0a9add50b075199421ca5f473580e6c0c60eb0f7293a0759ac98fc173e2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(api_find_template("layout/layout_1_col.tpl"), "default/admin/questions.tpl", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["display"] = $this->loadTemplate("default/macro/macro.tpl", "default/admin/questions.tpl", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "    ";
        echo ($context["toolbar"] ?? null);
        echo "
    ";
        // line 6
        echo ($context["form"] ?? null);
        echo "
";
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(($context["start"] ?? null), ($context["end"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "        ";
            if ($this->getAttribute(($context["pagination"] ?? null), $context["i"], [], "array", true, true)) {
                // line 10
                echo "            ";
                $context["question"] = $this->getAttribute(($context["pagination"] ?? null), $context["i"], [], "array");
                // line 11
                echo "            ";
                echo $context["display"]->getcollapse($this->getAttribute(                // line 12
($context["question"] ?? null), "iid", []), ((((("#" . $this->getAttribute(                // line 13
($context["question"] ?? null), "courseCode", [])) . "-") . $this->getAttribute(($context["question"] ?? null), "iid", [])) . " - ") . $this->getAttribute(($context["question"] ?? null), "question", [])), $this->getAttribute(                // line 14
($context["question"] ?? null), "questionData", []), false, false);
                // line 18
                echo "
        ";
            }
            // line 20
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    ";
        // line 22
        if ((($context["question_count"] ?? null) > ($context["pagination_length"] ?? null))) {
            // line 23
            echo "        ";
            echo ($context["pagination"] ?? null);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "default/admin/questions.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  83 => 22,  80 => 21,  74 => 20,  70 => 18,  68 => 14,  67 => 13,  66 => 12,  64 => 11,  61 => 10,  58 => 9,  53 => 8,  49 => 6,  44 => 5,  41 => 4,  37 => 1,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/admin/questions.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\admin\\questions.tpl");
    }
}

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

/* default/layout/show_footer.tpl */
class __TwigTemplate_112ea54858468506aaece0e13b7398357031602ae881277b58f216688f426800 extends \Twig\Template
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
        echo "    </div>
    </section>
    <!-- END CONTENT -->

    ";
        // line 5
        if ((($context["show_footer"] ?? null) == true)) {
            // line 6
            echo "    <!-- START FOOTER -->
    <footer class=\"footer\">
        ";
            // line 8
            $this->loadTemplate(api_find_template("layout/page_footer.tpl"), "default/layout/show_footer.tpl", 8)->display($context);
            // line 9
            echo "    </footer>
    <!-- END FOOTER -->
    ";
        }
        // line 12
        echo "
    </main>
    <!-- END MAIN -->

    ";
        // line 16
        $this->loadTemplate(api_find_template("layout/modals.tpl"), "default/layout/show_footer.tpl", 16)->display($context);
        // line 17
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "default/layout/show_footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  55 => 16,  49 => 12,  44 => 9,  42 => 8,  38 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/layout/show_footer.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\layout\\show_footer.tpl");
    }
}

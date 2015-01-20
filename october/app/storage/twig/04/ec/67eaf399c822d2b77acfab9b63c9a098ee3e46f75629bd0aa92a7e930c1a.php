<?php

/* /var/www/html/fmca/october/themes/responsiv-flat/partials/subscribe.htm */
class __TwigTemplate_04ec67eaf399c822d2b77acfab9b63c9a098ee3e46f75629bd0aa92a7e930c1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <form>
            <div class=\"col-sm-8\">
                <input type=\"text\" placeholder=\"Enter your e-mail\" spellcheck=\"false\">
            </div>
            <div class=\"col-sm-4\">
                <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                    Join newsletter
                </button>
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/fmca/october/themes/responsiv-flat/partials/subscribe.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

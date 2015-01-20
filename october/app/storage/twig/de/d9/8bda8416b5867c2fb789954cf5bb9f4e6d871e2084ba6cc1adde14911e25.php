<?php

/* /var/www/html/fmca/october/themes/jtherczeg-multi/partials/about.htm */
class __TwigTemplate_ded98bda8416b5867c2fb789954cf5bb9f4e6d871e2084ba6cc1adde14911e25 extends Twig_Template
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

            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">About Us</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    ";
        // line 10
        echo $this->env->getExtension('CMS')->contentFunction("about/video.htm"        );
        // line 11
        echo "                </div>

                <div class=\"col-sm-6 wow fadeInRight\">
                    ";
        // line 14
        echo $this->env->getExtension('CMS')->contentFunction("about/capabilities.htm"        );
        // line 15
        echo "                </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/fmca/october/themes/jtherczeg-multi/partials/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  37 => 14,  32 => 11,  30 => 10,  19 => 1,);
    }
}

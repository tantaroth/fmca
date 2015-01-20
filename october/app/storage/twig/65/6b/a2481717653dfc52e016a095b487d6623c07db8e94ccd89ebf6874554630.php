<?php

/* /var/www/html/fmca/october/themes/jtherczeg-multi/partials/team.htm */
class __TwigTemplate_656ba2481717653dfc52e016a095b487d6623c07db8e94ccd89ebf6874554630 extends Twig_Template
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
                <h2 class=\"section-title text-center wow fadeInDown\">Meet The Team</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/team/01.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Bin Burhan</h3>
                            <span>Co-Founder</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/team/02.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Jane Man</h3>
                            <span>Project Manager</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 47
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/team/03.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Pahlwan</h3>
                            <span>Designer</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 65
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/team/04.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Nasir uddin</h3>
                            <span>UI/UX</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    ";
        // line 86
        echo $this->env->getExtension('CMS')->contentFunction("team/skills.htm"        );
        // line 87
        echo "                </div>

                <div class=\"col-sm-4\">
                    ";
        // line 90
        echo $this->env->getExtension('CMS')->contentFunction("team/history.htm"        );
        // line 91
        echo "                </div>

                <div class=\"col-sm-4\">
                    ";
        // line 94
        echo $this->env->getExtension('CMS')->contentFunction("team/faqs.htm"        );
        // line 95
        echo "                </div>

            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/fmca/october/themes/jtherczeg-multi/partials/team.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 95,  132 => 94,  127 => 91,  125 => 90,  120 => 87,  118 => 86,  94 => 65,  73 => 47,  52 => 29,  31 => 11,  19 => 1,);
    }
}

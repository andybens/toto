<?php

/* ::navbar.html.twig */
class __TwigTemplate_ad0cb12282e750427f0b4f8f5a7cb8a8c0e245772198f58eca2e133df86fdae4 extends Twig_Template
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
        $__internal_0ba945dfff55d0e0064a356d16883d27ca36ca7576d263896184595a46891089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba945dfff55d0e0064a356d16883d27ca36ca7576d263896184595a46891089->enter($__internal_0ba945dfff55d0e0064a356d16883d27ca36ca7576d263896184595a46891089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navbar.html.twig"));

        $__internal_8580aa57a230158812fa678f71d8af0ca8aa5a9ab96cea06a05f2c00bd46168f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8580aa57a230158812fa678f71d8af0ca8aa5a9ab96cea06a05f2c00bd46168f->enter($__internal_8580aa57a230158812fa678f71d8af0ca8aa5a9ab96cea06a05f2c00bd46168f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navbar.html.twig"));

        // line 1
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\"> LES BON PETITS PLATS D'ANDREA</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav\">

                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demo_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home"), "html", null, true);
        echo "</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("services"), "html", null, true);
        echo "</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demo_contact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact"), "html", null, true);
        echo "</a></li>

            </ul>
        </div>
    </nav>

";
        
        $__internal_0ba945dfff55d0e0064a356d16883d27ca36ca7576d263896184595a46891089->leave($__internal_0ba945dfff55d0e0064a356d16883d27ca36ca7576d263896184595a46891089_prof);

        
        $__internal_8580aa57a230158812fa678f71d8af0ca8aa5a9ab96cea06a05f2c00bd46168f->leave($__internal_8580aa57a230158812fa678f71d8af0ca8aa5a9ab96cea06a05f2c00bd46168f_prof);

    }

    public function getTemplateName()
    {
        return "::navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  41 => 10,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\"> LES BON PETITS PLATS D'ANDREA</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav\">

                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path(\"demo_homepage\") }}\">{{ 'home'|trans }}</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">{{ 'services'|trans }}</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path(\"demo_contact\") }}\">{{ 'contact'|trans }}</a></li>

            </ul>
        </div>
    </nav>

", "::navbar.html.twig", "/Users/oualid/toto/app/Resources/views/navbar.html.twig");
    }
}

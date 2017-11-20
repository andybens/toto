<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_24d4ba4d82738e7385b7ba1283e8d480e1cc97305985065e32342236b6dfa421 extends Twig_Template
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
        $__internal_9518822e3772b9eee909023a9a22e456a4cc1e55c7d0abdc09348e3702b7f1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9518822e3772b9eee909023a9a22e456a4cc1e55c7d0abdc09348e3702b7f1fa->enter($__internal_9518822e3772b9eee909023a9a22e456a4cc1e55c7d0abdc09348e3702b7f1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_4d0c2c8a0fcdbddf4fbbae0c082532bc3eec6e2044d9328d6711955d1d232a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0c2c8a0fcdbddf4fbbae0c082532bc3eec6e2044d9328d6711955d1d232a84->enter($__internal_4d0c2c8a0fcdbddf4fbbae0c082532bc3eec6e2044d9328d6711955d1d232a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9518822e3772b9eee909023a9a22e456a4cc1e55c7d0abdc09348e3702b7f1fa->leave($__internal_9518822e3772b9eee909023a9a22e456a4cc1e55c7d0abdc09348e3702b7f1fa_prof);

        
        $__internal_4d0c2c8a0fcdbddf4fbbae0c082532bc3eec6e2044d9328d6711955d1d232a84->leave($__internal_4d0c2c8a0fcdbddf4fbbae0c082532bc3eec6e2044d9328d6711955d1d232a84_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}

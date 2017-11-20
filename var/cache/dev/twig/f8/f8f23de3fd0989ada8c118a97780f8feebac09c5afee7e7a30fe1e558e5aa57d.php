<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fc1396e7a26e4ce3ab17d63da2f336896c7ce6038db3ad2809c91c5f3b9d0b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bdf4208acb9ea61b656d62e0b273aebcab9d989b03e39c699b25c9dc455d8dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bdf4208acb9ea61b656d62e0b273aebcab9d989b03e39c699b25c9dc455d8dd->enter($__internal_2bdf4208acb9ea61b656d62e0b273aebcab9d989b03e39c699b25c9dc455d8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_269d68fda2374dcd0b8998db1a13eeaa1bc0784dd4aa9cc26949657adba92b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269d68fda2374dcd0b8998db1a13eeaa1bc0784dd4aa9cc26949657adba92b61->enter($__internal_269d68fda2374dcd0b8998db1a13eeaa1bc0784dd4aa9cc26949657adba92b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2bdf4208acb9ea61b656d62e0b273aebcab9d989b03e39c699b25c9dc455d8dd->leave($__internal_2bdf4208acb9ea61b656d62e0b273aebcab9d989b03e39c699b25c9dc455d8dd_prof);

        
        $__internal_269d68fda2374dcd0b8998db1a13eeaa1bc0784dd4aa9cc26949657adba92b61->leave($__internal_269d68fda2374dcd0b8998db1a13eeaa1bc0784dd4aa9cc26949657adba92b61_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_603a49770d2eb91d11f0379e2094fb165fcaba9909e3a6539640ad4b55194ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603a49770d2eb91d11f0379e2094fb165fcaba9909e3a6539640ad4b55194ead->enter($__internal_603a49770d2eb91d11f0379e2094fb165fcaba9909e3a6539640ad4b55194ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5f6f79c31b1615a9072b4d010f6b2372c8999baaed2d04e1a2cb974fdc2ae7a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6f79c31b1615a9072b4d010f6b2372c8999baaed2d04e1a2cb974fdc2ae7a2->enter($__internal_5f6f79c31b1615a9072b4d010f6b2372c8999baaed2d04e1a2cb974fdc2ae7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5f6f79c31b1615a9072b4d010f6b2372c8999baaed2d04e1a2cb974fdc2ae7a2->leave($__internal_5f6f79c31b1615a9072b4d010f6b2372c8999baaed2d04e1a2cb974fdc2ae7a2_prof);

        
        $__internal_603a49770d2eb91d11f0379e2094fb165fcaba9909e3a6539640ad4b55194ead->leave($__internal_603a49770d2eb91d11f0379e2094fb165fcaba9909e3a6539640ad4b55194ead_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

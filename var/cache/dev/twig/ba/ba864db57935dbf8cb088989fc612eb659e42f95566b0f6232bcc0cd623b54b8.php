<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_36d8645567333f757560b90d44afa540ed53e385faa975d37a64849601896444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77cdd2c6c2bcf2ac1827361717c2fbffaf2db59fb4a9bd02bb0091e1323da02e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77cdd2c6c2bcf2ac1827361717c2fbffaf2db59fb4a9bd02bb0091e1323da02e->enter($__internal_77cdd2c6c2bcf2ac1827361717c2fbffaf2db59fb4a9bd02bb0091e1323da02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_bdb8dd6c1bb0b5be17e1c765988c8d7cd0195d221404e16728be702d7ea4495c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb8dd6c1bb0b5be17e1c765988c8d7cd0195d221404e16728be702d7ea4495c->enter($__internal_bdb8dd6c1bb0b5be17e1c765988c8d7cd0195d221404e16728be702d7ea4495c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77cdd2c6c2bcf2ac1827361717c2fbffaf2db59fb4a9bd02bb0091e1323da02e->leave($__internal_77cdd2c6c2bcf2ac1827361717c2fbffaf2db59fb4a9bd02bb0091e1323da02e_prof);

        
        $__internal_bdb8dd6c1bb0b5be17e1c765988c8d7cd0195d221404e16728be702d7ea4495c->leave($__internal_bdb8dd6c1bb0b5be17e1c765988c8d7cd0195d221404e16728be702d7ea4495c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_14c641c008cee897ebbaa97a75bf7457344ccb1d57682edc91cc9915b8d74282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c641c008cee897ebbaa97a75bf7457344ccb1d57682edc91cc9915b8d74282->enter($__internal_14c641c008cee897ebbaa97a75bf7457344ccb1d57682edc91cc9915b8d74282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91db4c1d21e7e7a7c97a97393b0498b88b72bc5462a5fab8bf08553ff5c9de90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91db4c1d21e7e7a7c97a97393b0498b88b72bc5462a5fab8bf08553ff5c9de90->enter($__internal_91db4c1d21e7e7a7c97a97393b0498b88b72bc5462a5fab8bf08553ff5c9de90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_91db4c1d21e7e7a7c97a97393b0498b88b72bc5462a5fab8bf08553ff5c9de90->leave($__internal_91db4c1d21e7e7a7c97a97393b0498b88b72bc5462a5fab8bf08553ff5c9de90_prof);

        
        $__internal_14c641c008cee897ebbaa97a75bf7457344ccb1d57682edc91cc9915b8d74282->leave($__internal_14c641c008cee897ebbaa97a75bf7457344ccb1d57682edc91cc9915b8d74282_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_844c1a1acc95a72fe3267945c57136deaccf07fcceeb08174a684f4b22eb5ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844c1a1acc95a72fe3267945c57136deaccf07fcceeb08174a684f4b22eb5ce5->enter($__internal_844c1a1acc95a72fe3267945c57136deaccf07fcceeb08174a684f4b22eb5ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79e1e4cf685a9ff45922b88982e14342f2dad5f635d798f0d4acfd95d9b1c4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e1e4cf685a9ff45922b88982e14342f2dad5f635d798f0d4acfd95d9b1c4e3->enter($__internal_79e1e4cf685a9ff45922b88982e14342f2dad5f635d798f0d4acfd95d9b1c4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_79e1e4cf685a9ff45922b88982e14342f2dad5f635d798f0d4acfd95d9b1c4e3->leave($__internal_79e1e4cf685a9ff45922b88982e14342f2dad5f635d798f0d4acfd95d9b1c4e3_prof);

        
        $__internal_844c1a1acc95a72fe3267945c57136deaccf07fcceeb08174a684f4b22eb5ce5->leave($__internal_844c1a1acc95a72fe3267945c57136deaccf07fcceeb08174a684f4b22eb5ce5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

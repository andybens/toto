<?php

/* DemoBundle:Default:index.html.twig */
class __TwigTemplate_7daa54b044bb041d15655b73aa6e7e86f4a63fafd2b714bb92f221ae0a19dfe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DemoBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b664648b4d336cf244da22fb84cba2cbe33a1f4f4ed4054dfe8271b942510b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b664648b4d336cf244da22fb84cba2cbe33a1f4f4ed4054dfe8271b942510b90->enter($__internal_b664648b4d336cf244da22fb84cba2cbe33a1f4f4ed4054dfe8271b942510b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DemoBundle:Default:index.html.twig"));

        $__internal_1d3c8af8fdc4a13989f5e433fe0da6e4c5004ef54f4828b5132731299d7b2dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3c8af8fdc4a13989f5e433fe0da6e4c5004ef54f4828b5132731299d7b2dd2->enter($__internal_1d3c8af8fdc4a13989f5e433fe0da6e4c5004ef54f4828b5132731299d7b2dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DemoBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b664648b4d336cf244da22fb84cba2cbe33a1f4f4ed4054dfe8271b942510b90->leave($__internal_b664648b4d336cf244da22fb84cba2cbe33a1f4f4ed4054dfe8271b942510b90_prof);

        
        $__internal_1d3c8af8fdc4a13989f5e433fe0da6e4c5004ef54f4828b5132731299d7b2dd2->leave($__internal_1d3c8af8fdc4a13989f5e433fe0da6e4c5004ef54f4828b5132731299d7b2dd2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62452e0c10eb05f745d4dcd252f0d126b367060752f27b1a05294bfb5cea0cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62452e0c10eb05f745d4dcd252f0d126b367060752f27b1a05294bfb5cea0cad->enter($__internal_62452e0c10eb05f745d4dcd252f0d126b367060752f27b1a05294bfb5cea0cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d74a1a8c1de4859108ce7e2b03be794e16cc870043be6644cbaecfdfedabeff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74a1a8c1de4859108ce7e2b03be794e16cc870043be6644cbaecfdfedabeff2->enter($__internal_d74a1a8c1de4859108ce7e2b03be794e16cc870043be6644cbaecfdfedabeff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   ";
        $this->loadTemplate("::navbar.html.twig", "DemoBundle:Default:index.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("::head.html.twig", "DemoBundle:Default:index.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate("::panel.html.twig", "DemoBundle:Default:index.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "DemoBundle:Default:index.html.twig", 7)->display($context);
        
        $__internal_d74a1a8c1de4859108ce7e2b03be794e16cc870043be6644cbaecfdfedabeff2->leave($__internal_d74a1a8c1de4859108ce7e2b03be794e16cc870043be6644cbaecfdfedabeff2_prof);

        
        $__internal_62452e0c10eb05f745d4dcd252f0d126b367060752f27b1a05294bfb5cea0cad->leave($__internal_62452e0c10eb05f745d4dcd252f0d126b367060752f27b1a05294bfb5cea0cad_prof);

    }

    public function getTemplateName()
    {
        return "DemoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
   {% include'::navbar.html.twig' %}
    {% include'::head.html.twig' %}
    {% include'::panel.html.twig' %}
    {% include'::footer.html.twig' %}
{% endblock %}
", "DemoBundle:Default:index.html.twig", "/Users/oualid/toto/src/DemoBundle/Resources/views/Default/index.html.twig");
    }
}

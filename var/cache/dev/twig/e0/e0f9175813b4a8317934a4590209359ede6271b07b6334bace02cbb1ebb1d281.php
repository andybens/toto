<?php

/* DemoBundle:Default:test.html.twig */
class __TwigTemplate_6e783ce84549e3c0b13a268b1109b3e47568e86b5597a2aaa04ec3b742c03158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DemoBundle:Default:test.html.twig", 1);
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
        $__internal_d02cd6e4c4980aeb7471969e2a7b6aa702eaa57452c88e39daba4b7f45b5eefa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02cd6e4c4980aeb7471969e2a7b6aa702eaa57452c88e39daba4b7f45b5eefa->enter($__internal_d02cd6e4c4980aeb7471969e2a7b6aa702eaa57452c88e39daba4b7f45b5eefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DemoBundle:Default:test.html.twig"));

        $__internal_3357fef1c481d524163d12a81757ed32aa77c018bbcdc2f1fa9ae8d048bd9677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3357fef1c481d524163d12a81757ed32aa77c018bbcdc2f1fa9ae8d048bd9677->enter($__internal_3357fef1c481d524163d12a81757ed32aa77c018bbcdc2f1fa9ae8d048bd9677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DemoBundle:Default:test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d02cd6e4c4980aeb7471969e2a7b6aa702eaa57452c88e39daba4b7f45b5eefa->leave($__internal_d02cd6e4c4980aeb7471969e2a7b6aa702eaa57452c88e39daba4b7f45b5eefa_prof);

        
        $__internal_3357fef1c481d524163d12a81757ed32aa77c018bbcdc2f1fa9ae8d048bd9677->leave($__internal_3357fef1c481d524163d12a81757ed32aa77c018bbcdc2f1fa9ae8d048bd9677_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eed0e8e2b202e998677a60b9dda8e9a8b7665df42de5b037834fbe94969ae129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed0e8e2b202e998677a60b9dda8e9a8b7665df42de5b037834fbe94969ae129->enter($__internal_eed0e8e2b202e998677a60b9dda8e9a8b7665df42de5b037834fbe94969ae129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_abf696bfebb9495343fe09197e6c8cadf9bf67c62805ab7d8f024c0a69f7de9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf696bfebb9495343fe09197e6c8cadf9bf67c62805ab7d8f024c0a69f7de9b->enter($__internal_abf696bfebb9495343fe09197e6c8cadf9bf67c62805ab7d8f024c0a69f7de9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"text-center\">
        Formulaire test <br />

       ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "

        ";
        // line 9
        if ((( !(null === ($context["name"] ?? $this->getContext($context, "name"))) ||  !(null === ($context["email"] ?? $this->getContext($context, "email")))) ||  !(null === ($context["objet"] ?? $this->getContext($context, "objet"))))) {
            // line 10
            echo "        valeur formulaire : <br />
        name : <b> ";
            // line 11
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo " </b> <br />
            email : <b> ";
            // line 12
            echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
            echo " </b> <br />
            objet : <b>";
            // line 13
            echo twig_escape_filter($this->env, ($context["objet"] ?? $this->getContext($context, "objet")), "html", null, true);
            echo " </b> <br />
        ";
        }
        // line 15
        echo "
    </div>
";
        
        $__internal_abf696bfebb9495343fe09197e6c8cadf9bf67c62805ab7d8f024c0a69f7de9b->leave($__internal_abf696bfebb9495343fe09197e6c8cadf9bf67c62805ab7d8f024c0a69f7de9b_prof);

        
        $__internal_eed0e8e2b202e998677a60b9dda8e9a8b7665df42de5b037834fbe94969ae129->leave($__internal_eed0e8e2b202e998677a60b9dda8e9a8b7665df42de5b037834fbe94969ae129_prof);

    }

    public function getTemplateName()
    {
        return "DemoBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  72 => 13,  68 => 12,  64 => 11,  61 => 10,  59 => 9,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"text-center\">
        Formulaire test <br />

       {{ form(form) }}

        {% if (name is not null) or (email is not null) or (objet is not null) %}
        valeur formulaire : <br />
        name : <b> {{name}} </b> <br />
            email : <b> {{email}} </b> <br />
            objet : <b>{{objet}} </b> <br />
        {% endif %}

    </div>
{% endblock %}
", "DemoBundle:Default:test.html.twig", "/Users/oualid/toto/src/DemoBundle/Resources/views/Default/test.html.twig");
    }
}

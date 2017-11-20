<?php

/* DemoBundle:Default:contact.html.twig */
class __TwigTemplate_4fb970a595544b316af42bc3420ece3bd219d69d704ed7dd888a557f14895f2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DemoBundle:Default:contact.html.twig", 1);
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
        $__internal_bf81605fc52e3f53ed44db6c601d1c6f78193c57e755db387ea30aab22583e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf81605fc52e3f53ed44db6c601d1c6f78193c57e755db387ea30aab22583e23->enter($__internal_bf81605fc52e3f53ed44db6c601d1c6f78193c57e755db387ea30aab22583e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DemoBundle:Default:contact.html.twig"));

        $__internal_727977b6db88ef1016be57091c9480f1f6a6cb19fdf75d88a07d49e3787f657f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_727977b6db88ef1016be57091c9480f1f6a6cb19fdf75d88a07d49e3787f657f->enter($__internal_727977b6db88ef1016be57091c9480f1f6a6cb19fdf75d88a07d49e3787f657f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DemoBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf81605fc52e3f53ed44db6c601d1c6f78193c57e755db387ea30aab22583e23->leave($__internal_bf81605fc52e3f53ed44db6c601d1c6f78193c57e755db387ea30aab22583e23_prof);

        
        $__internal_727977b6db88ef1016be57091c9480f1f6a6cb19fdf75d88a07d49e3787f657f->leave($__internal_727977b6db88ef1016be57091c9480f1f6a6cb19fdf75d88a07d49e3787f657f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7685368190be1710f3c971c40a67cb5d4ecae9d9009de6a4a194a7ab723a15a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7685368190be1710f3c971c40a67cb5d4ecae9d9009de6a4a194a7ab723a15a1->enter($__internal_7685368190be1710f3c971c40a67cb5d4ecae9d9009de6a4a194a7ab723a15a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6fdb17604b2946f2b1b5e45bfa15985685570a243019505987a4eb3f2914c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6fdb17604b2946f2b1b5e45bfa15985685570a243019505987a4eb3f2914c6e->enter($__internal_b6fdb17604b2946f2b1b5e45bfa15985685570a243019505987a4eb3f2914c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("::navbar.html.twig", "DemoBundle:Default:contact.html.twig", 4)->display($context);
        // line 5
        echo "
    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
        </div>
    </div>


    <div class=\"text-center mt25\">
        <ol class=\"breadcrumb cl\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Library</a></li>
            <li><a href=\"#\">Data</a></li>
        </ol>
    </div>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 24
            echo "        <div class=\"mt20 container abso col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"rows text-center\">
                <div class=\"h alert alert-success alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"fa fa-times fa-2x\"></i></button>
                    <h3>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.success.timer"), "html", null, true);
            echo " <b id=\"timer\"></b> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.success.unity"), "html", null, true);
            echo "</h3>
                    <h4><i class=\"fa fa-envelope\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.success.head"), "html", null, true);
            echo " </h4>
                    <h5>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact.success.msg"), "html", null, true);
            echo " </h5>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
<div class=\"container rows\"><!-- container -->

    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
    </div>


    <div class=\"col-lg-6 col-md-5 col-sm-6 col-xs-12\">
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>

    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
    </div>

    </div>

";
        
        $__internal_b6fdb17604b2946f2b1b5e45bfa15985685570a243019505987a4eb3f2914c6e->leave($__internal_b6fdb17604b2946f2b1b5e45bfa15985685570a243019505987a4eb3f2914c6e_prof);

        
        $__internal_7685368190be1710f3c971c40a67cb5d4ecae9d9009de6a4a194a7ab723a15a1->leave($__internal_7685368190be1710f3c971c40a67cb5d4ecae9d9009de6a4a194a7ab723a15a1_prof);

    }

    public function getTemplateName()
    {
        return "DemoBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 43,  103 => 35,  92 => 30,  88 => 29,  82 => 28,  76 => 24,  72 => 23,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
        </div>
    </div>


    <div class=\"text-center mt25\">
        <ol class=\"breadcrumb cl\">
            <li class=\"active\"><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Library</a></li>
            <li><a href=\"#\">Data</a></li>
        </ol>
    </div>

    {% for flash_message in app.session.flashbag.get('success') %}
        <div class=\"mt20 container abso col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"rows text-center\">
                <div class=\"h alert alert-success alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><i class=\"fa fa-times fa-2x\"></i></button>
                    <h3>{{ 'contact.success.timer'|trans }} <b id=\"timer\"></b> {{ 'contact.success.unity'|trans }}</h3>
                    <h4><i class=\"fa fa-envelope\"></i> {{ 'contact.success.head'|trans }} </h4>
                    <h5>{{ 'contact.success.msg'|trans }} </h5>
                </div>
            </div>
        </div>
    {% endfor %}

<div class=\"container rows\"><!-- container -->

    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
    </div>


    <div class=\"col-lg-6 col-md-5 col-sm-6 col-xs-12\">
        {{ form(form) }}
    </div>

    <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
    </div>

    </div>

{% endblock %}
", "DemoBundle:Default:contact.html.twig", "/Users/oualid/toto/src/DemoBundle/Resources/views/Default/contact.html.twig");
    }
}

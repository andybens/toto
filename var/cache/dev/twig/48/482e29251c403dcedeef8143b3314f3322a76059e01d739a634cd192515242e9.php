<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_0e8c04b94a86c19a3eae1a0c07ca9eb6b982fbedfcdd9eeb79a994d0bc5ec73c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d1ac6dcf8c1aca41eea5426f814948cdf152fb24b3368e693c5d2ed515c09f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1ac6dcf8c1aca41eea5426f814948cdf152fb24b3368e693c5d2ed515c09f4->enter($__internal_0d1ac6dcf8c1aca41eea5426f814948cdf152fb24b3368e693c5d2ed515c09f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3ae2c6dd29333c29deec71893c6dad3291d058d5da5da10b3cf2d07951ea5539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae2c6dd29333c29deec71893c6dad3291d058d5da5da10b3cf2d07951ea5539->enter($__internal_3ae2c6dd29333c29deec71893c6dad3291d058d5da5da10b3cf2d07951ea5539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d1ac6dcf8c1aca41eea5426f814948cdf152fb24b3368e693c5d2ed515c09f4->leave($__internal_0d1ac6dcf8c1aca41eea5426f814948cdf152fb24b3368e693c5d2ed515c09f4_prof);

        
        $__internal_3ae2c6dd29333c29deec71893c6dad3291d058d5da5da10b3cf2d07951ea5539->leave($__internal_3ae2c6dd29333c29deec71893c6dad3291d058d5da5da10b3cf2d07951ea5539_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_184869e7a9aee83f5286156e14f16f46896ce200e0550dc32dcf6c36dfa3485b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_184869e7a9aee83f5286156e14f16f46896ce200e0550dc32dcf6c36dfa3485b->enter($__internal_184869e7a9aee83f5286156e14f16f46896ce200e0550dc32dcf6c36dfa3485b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4a12e5f9a973f091dfc6073317eff5e69bd792738aa530a1a04705e6326ec3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a12e5f9a973f091dfc6073317eff5e69bd792738aa530a1a04705e6326ec3e9->enter($__internal_4a12e5f9a973f091dfc6073317eff5e69bd792738aa530a1a04705e6326ec3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4a12e5f9a973f091dfc6073317eff5e69bd792738aa530a1a04705e6326ec3e9->leave($__internal_4a12e5f9a973f091dfc6073317eff5e69bd792738aa530a1a04705e6326ec3e9_prof);

        
        $__internal_184869e7a9aee83f5286156e14f16f46896ce200e0550dc32dcf6c36dfa3485b->leave($__internal_184869e7a9aee83f5286156e14f16f46896ce200e0550dc32dcf6c36dfa3485b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e00b6472d9fe922edabf41d49a82fedb8ef3a2e20f5233ce8ee55c19dc3b5b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00b6472d9fe922edabf41d49a82fedb8ef3a2e20f5233ce8ee55c19dc3b5b99->enter($__internal_e00b6472d9fe922edabf41d49a82fedb8ef3a2e20f5233ce8ee55c19dc3b5b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a76b5e94d147942e3b8da46780805cc74e63543cc87a0e74586664c35f63549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a76b5e94d147942e3b8da46780805cc74e63543cc87a0e74586664c35f63549->enter($__internal_6a76b5e94d147942e3b8da46780805cc74e63543cc87a0e74586664c35f63549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_6a76b5e94d147942e3b8da46780805cc74e63543cc87a0e74586664c35f63549->leave($__internal_6a76b5e94d147942e3b8da46780805cc74e63543cc87a0e74586664c35f63549_prof);

        
        $__internal_e00b6472d9fe922edabf41d49a82fedb8ef3a2e20f5233ce8ee55c19dc3b5b99->leave($__internal_e00b6472d9fe922edabf41d49a82fedb8ef3a2e20f5233ce8ee55c19dc3b5b99_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

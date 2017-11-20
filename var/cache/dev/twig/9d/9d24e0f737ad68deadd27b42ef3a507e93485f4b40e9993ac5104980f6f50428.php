<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1f7d93ea79ecfc70708c6c9582d066811949c3def5f0179bcd7311a3a1ec837c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e4dcac9d5e1310a4494d6ecd72bbbd20e699fad8de962a7c5876c4361225844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e4dcac9d5e1310a4494d6ecd72bbbd20e699fad8de962a7c5876c4361225844->enter($__internal_9e4dcac9d5e1310a4494d6ecd72bbbd20e699fad8de962a7c5876c4361225844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_466c28f72863993780dcb532b731d699051df325a56b0035036d269d4dd466b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466c28f72863993780dcb532b731d699051df325a56b0035036d269d4dd466b9->enter($__internal_466c28f72863993780dcb532b731d699051df325a56b0035036d269d4dd466b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e4dcac9d5e1310a4494d6ecd72bbbd20e699fad8de962a7c5876c4361225844->leave($__internal_9e4dcac9d5e1310a4494d6ecd72bbbd20e699fad8de962a7c5876c4361225844_prof);

        
        $__internal_466c28f72863993780dcb532b731d699051df325a56b0035036d269d4dd466b9->leave($__internal_466c28f72863993780dcb532b731d699051df325a56b0035036d269d4dd466b9_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c23087b22e3dcdcb6d337b58085bf089274c3c8ee166be01de2b60a893301c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c23087b22e3dcdcb6d337b58085bf089274c3c8ee166be01de2b60a893301c40->enter($__internal_c23087b22e3dcdcb6d337b58085bf089274c3c8ee166be01de2b60a893301c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_deee6c6dd8d6c20994425ea9e60f33f0074ddf02a8d80dfce586d9f18d5f3e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deee6c6dd8d6c20994425ea9e60f33f0074ddf02a8d80dfce586d9f18d5f3e8f->enter($__internal_deee6c6dd8d6c20994425ea9e60f33f0074ddf02a8d80dfce586d9f18d5f3e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_deee6c6dd8d6c20994425ea9e60f33f0074ddf02a8d80dfce586d9f18d5f3e8f->leave($__internal_deee6c6dd8d6c20994425ea9e60f33f0074ddf02a8d80dfce586d9f18d5f3e8f_prof);

        
        $__internal_c23087b22e3dcdcb6d337b58085bf089274c3c8ee166be01de2b60a893301c40->leave($__internal_c23087b22e3dcdcb6d337b58085bf089274c3c8ee166be01de2b60a893301c40_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b09aa70c9bc5b7b13311e151665656c663f023db9b3c2091f37fb722f70e88aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09aa70c9bc5b7b13311e151665656c663f023db9b3c2091f37fb722f70e88aa->enter($__internal_b09aa70c9bc5b7b13311e151665656c663f023db9b3c2091f37fb722f70e88aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1d6c6522344916ece1ac5de1ee74059ceeedd4cbbbe45829510f976a9d88858d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6c6522344916ece1ac5de1ee74059ceeedd4cbbbe45829510f976a9d88858d->enter($__internal_1d6c6522344916ece1ac5de1ee74059ceeedd4cbbbe45829510f976a9d88858d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1d6c6522344916ece1ac5de1ee74059ceeedd4cbbbe45829510f976a9d88858d->leave($__internal_1d6c6522344916ece1ac5de1ee74059ceeedd4cbbbe45829510f976a9d88858d_prof);

        
        $__internal_b09aa70c9bc5b7b13311e151665656c663f023db9b3c2091f37fb722f70e88aa->leave($__internal_b09aa70c9bc5b7b13311e151665656c663f023db9b3c2091f37fb722f70e88aa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_507a2ed4a342ac2903f0977f7bf86cb50b9f34f95e8b349a4bceceb5f6311d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_216e22b19946f636d41bedd1476a4f26bff0088a61829ede9af5c0db3ec9b311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216e22b19946f636d41bedd1476a4f26bff0088a61829ede9af5c0db3ec9b311->enter($__internal_216e22b19946f636d41bedd1476a4f26bff0088a61829ede9af5c0db3ec9b311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_508812c4e8330c99bbca3c8c6f4cee42def42c2f376e1e2c6fa2a83609468a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508812c4e8330c99bbca3c8c6f4cee42def42c2f376e1e2c6fa2a83609468a70->enter($__internal_508812c4e8330c99bbca3c8c6f4cee42def42c2f376e1e2c6fa2a83609468a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_216e22b19946f636d41bedd1476a4f26bff0088a61829ede9af5c0db3ec9b311->leave($__internal_216e22b19946f636d41bedd1476a4f26bff0088a61829ede9af5c0db3ec9b311_prof);

        
        $__internal_508812c4e8330c99bbca3c8c6f4cee42def42c2f376e1e2c6fa2a83609468a70->leave($__internal_508812c4e8330c99bbca3c8c6f4cee42def42c2f376e1e2c6fa2a83609468a70_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06cd5da219d3a7ff0c044648a1debc1558a00485eae42c58182be0bbeb3b224c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06cd5da219d3a7ff0c044648a1debc1558a00485eae42c58182be0bbeb3b224c->enter($__internal_06cd5da219d3a7ff0c044648a1debc1558a00485eae42c58182be0bbeb3b224c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5eaf608f398d6e94fc602cb5b1eeaf4a04590ebb8295d89a9ae21a6d61e32795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eaf608f398d6e94fc602cb5b1eeaf4a04590ebb8295d89a9ae21a6d61e32795->enter($__internal_5eaf608f398d6e94fc602cb5b1eeaf4a04590ebb8295d89a9ae21a6d61e32795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_5eaf608f398d6e94fc602cb5b1eeaf4a04590ebb8295d89a9ae21a6d61e32795->leave($__internal_5eaf608f398d6e94fc602cb5b1eeaf4a04590ebb8295d89a9ae21a6d61e32795_prof);

        
        $__internal_06cd5da219d3a7ff0c044648a1debc1558a00485eae42c58182be0bbeb3b224c->leave($__internal_06cd5da219d3a7ff0c044648a1debc1558a00485eae42c58182be0bbeb3b224c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

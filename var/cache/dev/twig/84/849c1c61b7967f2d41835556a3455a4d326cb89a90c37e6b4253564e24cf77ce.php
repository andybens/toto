<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_926ddf51dee66af77fa340368715fc8103f32fdb6fcc36935de48a6c8327b2ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc06ba8b3c6237a240367a1f9b8dc022aab4249264e2a63a3f71134569937370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc06ba8b3c6237a240367a1f9b8dc022aab4249264e2a63a3f71134569937370->enter($__internal_dc06ba8b3c6237a240367a1f9b8dc022aab4249264e2a63a3f71134569937370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_a927cf4a58aceb5e152cfa4fd5ea0822b0641fa1cea3857c9656faffa7cd6ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a927cf4a58aceb5e152cfa4fd5ea0822b0641fa1cea3857c9656faffa7cd6ada->enter($__internal_a927cf4a58aceb5e152cfa4fd5ea0822b0641fa1cea3857c9656faffa7cd6ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc06ba8b3c6237a240367a1f9b8dc022aab4249264e2a63a3f71134569937370->leave($__internal_dc06ba8b3c6237a240367a1f9b8dc022aab4249264e2a63a3f71134569937370_prof);

        
        $__internal_a927cf4a58aceb5e152cfa4fd5ea0822b0641fa1cea3857c9656faffa7cd6ada->leave($__internal_a927cf4a58aceb5e152cfa4fd5ea0822b0641fa1cea3857c9656faffa7cd6ada_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06b47bd0e9108eb443cbd4f9ae565765af0d2e24d97d9f5fdfd3ca24d904a5a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b47bd0e9108eb443cbd4f9ae565765af0d2e24d97d9f5fdfd3ca24d904a5a2->enter($__internal_06b47bd0e9108eb443cbd4f9ae565765af0d2e24d97d9f5fdfd3ca24d904a5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_73d180a828017e8e820e19e6d75aa2dc13ec9d553d2aba8c5467642cc873b707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d180a828017e8e820e19e6d75aa2dc13ec9d553d2aba8c5467642cc873b707->enter($__internal_73d180a828017e8e820e19e6d75aa2dc13ec9d553d2aba8c5467642cc873b707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_73d180a828017e8e820e19e6d75aa2dc13ec9d553d2aba8c5467642cc873b707->leave($__internal_73d180a828017e8e820e19e6d75aa2dc13ec9d553d2aba8c5467642cc873b707_prof);

        
        $__internal_06b47bd0e9108eb443cbd4f9ae565765af0d2e24d97d9f5fdfd3ca24d904a5a2->leave($__internal_06b47bd0e9108eb443cbd4f9ae565765af0d2e24d97d9f5fdfd3ca24d904a5a2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ace07bd29151e3416914c2b57d1eb4b0c9b54623c2bc438d1aea2973214719a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ace07bd29151e3416914c2b57d1eb4b0c9b54623c2bc438d1aea2973214719a->enter($__internal_8ace07bd29151e3416914c2b57d1eb4b0c9b54623c2bc438d1aea2973214719a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dec6f647dcf2aece616fe6a9d492735026f0999b50bf53acb4b9712d308b3d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec6f647dcf2aece616fe6a9d492735026f0999b50bf53acb4b9712d308b3d32->enter($__internal_dec6f647dcf2aece616fe6a9d492735026f0999b50bf53acb4b9712d308b3d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dec6f647dcf2aece616fe6a9d492735026f0999b50bf53acb4b9712d308b3d32->leave($__internal_dec6f647dcf2aece616fe6a9d492735026f0999b50bf53acb4b9712d308b3d32_prof);

        
        $__internal_8ace07bd29151e3416914c2b57d1eb4b0c9b54623c2bc438d1aea2973214719a->leave($__internal_8ace07bd29151e3416914c2b57d1eb4b0c9b54623c2bc438d1aea2973214719a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d204c086eba1a95dbbd30c7895f9090be0119d3abd439839571986923b54007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d204c086eba1a95dbbd30c7895f9090be0119d3abd439839571986923b54007->enter($__internal_8d204c086eba1a95dbbd30c7895f9090be0119d3abd439839571986923b54007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_28268aac9bbdd445f4bac2cad88e1bb32a91c5fea7ca108a4bed2c26d7f009aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28268aac9bbdd445f4bac2cad88e1bb32a91c5fea7ca108a4bed2c26d7f009aa->enter($__internal_28268aac9bbdd445f4bac2cad88e1bb32a91c5fea7ca108a4bed2c26d7f009aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_28268aac9bbdd445f4bac2cad88e1bb32a91c5fea7ca108a4bed2c26d7f009aa->leave($__internal_28268aac9bbdd445f4bac2cad88e1bb32a91c5fea7ca108a4bed2c26d7f009aa_prof);

        
        $__internal_8d204c086eba1a95dbbd30c7895f9090be0119d3abd439839571986923b54007->leave($__internal_8d204c086eba1a95dbbd30c7895f9090be0119d3abd439839571986923b54007_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

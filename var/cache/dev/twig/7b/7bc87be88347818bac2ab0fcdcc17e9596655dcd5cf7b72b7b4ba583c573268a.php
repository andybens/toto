<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d01b0177464e59c1e38ede54a939a12148c99bf28e472d7396c559489361c325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b6cc053287e2e3eccbad9abfe7724b36a1e29bd806a24fbab194708734fa2e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6cc053287e2e3eccbad9abfe7724b36a1e29bd806a24fbab194708734fa2e50->enter($__internal_b6cc053287e2e3eccbad9abfe7724b36a1e29bd806a24fbab194708734fa2e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b3a72fb9768f0f6bdd8d7955b2fbede62a5ac31bf76856f22525dc1ad08b95e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a72fb9768f0f6bdd8d7955b2fbede62a5ac31bf76856f22525dc1ad08b95e1->enter($__internal_b3a72fb9768f0f6bdd8d7955b2fbede62a5ac31bf76856f22525dc1ad08b95e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6cc053287e2e3eccbad9abfe7724b36a1e29bd806a24fbab194708734fa2e50->leave($__internal_b6cc053287e2e3eccbad9abfe7724b36a1e29bd806a24fbab194708734fa2e50_prof);

        
        $__internal_b3a72fb9768f0f6bdd8d7955b2fbede62a5ac31bf76856f22525dc1ad08b95e1->leave($__internal_b3a72fb9768f0f6bdd8d7955b2fbede62a5ac31bf76856f22525dc1ad08b95e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41c63ac1e21e3c3f115a922e87ba6e3a524508add1a9d55a6d389c0bb2afc8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c63ac1e21e3c3f115a922e87ba6e3a524508add1a9d55a6d389c0bb2afc8dc->enter($__internal_41c63ac1e21e3c3f115a922e87ba6e3a524508add1a9d55a6d389c0bb2afc8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa8a8f7100031a05af47488dc95c1c55923e2b72fb8623d7299ee19bf1a278f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8a8f7100031a05af47488dc95c1c55923e2b72fb8623d7299ee19bf1a278f8->enter($__internal_aa8a8f7100031a05af47488dc95c1c55923e2b72fb8623d7299ee19bf1a278f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_aa8a8f7100031a05af47488dc95c1c55923e2b72fb8623d7299ee19bf1a278f8->leave($__internal_aa8a8f7100031a05af47488dc95c1c55923e2b72fb8623d7299ee19bf1a278f8_prof);

        
        $__internal_41c63ac1e21e3c3f115a922e87ba6e3a524508add1a9d55a6d389c0bb2afc8dc->leave($__internal_41c63ac1e21e3c3f115a922e87ba6e3a524508add1a9d55a6d389c0bb2afc8dc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21f586c7dcc4b09185d371d4f92ff8876092d3ba06df27551fe2ad49c020c1f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f586c7dcc4b09185d371d4f92ff8876092d3ba06df27551fe2ad49c020c1f2->enter($__internal_21f586c7dcc4b09185d371d4f92ff8876092d3ba06df27551fe2ad49c020c1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_838316e13d38a0e746c9951cba5a161b4abb9af23c7c3fdbfa11595ad1d6e71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838316e13d38a0e746c9951cba5a161b4abb9af23c7c3fdbfa11595ad1d6e71d->enter($__internal_838316e13d38a0e746c9951cba5a161b4abb9af23c7c3fdbfa11595ad1d6e71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_838316e13d38a0e746c9951cba5a161b4abb9af23c7c3fdbfa11595ad1d6e71d->leave($__internal_838316e13d38a0e746c9951cba5a161b4abb9af23c7c3fdbfa11595ad1d6e71d_prof);

        
        $__internal_21f586c7dcc4b09185d371d4f92ff8876092d3ba06df27551fe2ad49c020c1f2->leave($__internal_21f586c7dcc4b09185d371d4f92ff8876092d3ba06df27551fe2ad49c020c1f2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62cba15fc3b21cc2b73e501c8288a84296c58b7314fccd4e7d6c1692376e8e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62cba15fc3b21cc2b73e501c8288a84296c58b7314fccd4e7d6c1692376e8e51->enter($__internal_62cba15fc3b21cc2b73e501c8288a84296c58b7314fccd4e7d6c1692376e8e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a3530ed5bf499377d05e938a4eabaae3ab5fd6245fa72abc3c37fdf56e67afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3530ed5bf499377d05e938a4eabaae3ab5fd6245fa72abc3c37fdf56e67afe->enter($__internal_0a3530ed5bf499377d05e938a4eabaae3ab5fd6245fa72abc3c37fdf56e67afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0a3530ed5bf499377d05e938a4eabaae3ab5fd6245fa72abc3c37fdf56e67afe->leave($__internal_0a3530ed5bf499377d05e938a4eabaae3ab5fd6245fa72abc3c37fdf56e67afe_prof);

        
        $__internal_62cba15fc3b21cc2b73e501c8288a84296c58b7314fccd4e7d6c1692376e8e51->leave($__internal_62cba15fc3b21cc2b73e501c8288a84296c58b7314fccd4e7d6c1692376e8e51_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

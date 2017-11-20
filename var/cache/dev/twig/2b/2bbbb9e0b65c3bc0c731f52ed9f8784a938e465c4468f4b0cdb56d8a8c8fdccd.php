<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_eb33ff0e97c6db375bffc453ace2a03b59ff01ad388071bc2e4611a23bff2e66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56001edd5a0ee6bb052159db18ade611af2905844d3c4f903ff0727948f4d6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56001edd5a0ee6bb052159db18ade611af2905844d3c4f903ff0727948f4d6ff->enter($__internal_56001edd5a0ee6bb052159db18ade611af2905844d3c4f903ff0727948f4d6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_8dfa259388a13d6789f9495514444ea0d910dd9a33ebf1939cca34edbd4081eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfa259388a13d6789f9495514444ea0d910dd9a33ebf1939cca34edbd4081eb->enter($__internal_8dfa259388a13d6789f9495514444ea0d910dd9a33ebf1939cca34edbd4081eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_56001edd5a0ee6bb052159db18ade611af2905844d3c4f903ff0727948f4d6ff->leave($__internal_56001edd5a0ee6bb052159db18ade611af2905844d3c4f903ff0727948f4d6ff_prof);

        
        $__internal_8dfa259388a13d6789f9495514444ea0d910dd9a33ebf1939cca34edbd4081eb->leave($__internal_8dfa259388a13d6789f9495514444ea0d910dd9a33ebf1939cca34edbd4081eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

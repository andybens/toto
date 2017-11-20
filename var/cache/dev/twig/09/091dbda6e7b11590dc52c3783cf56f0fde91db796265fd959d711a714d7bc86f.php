<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bbfffd661f397fd6bddc66c7842cd5302c22ed16bf64577e2fd77add6cb4364f extends Twig_Template
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
        $__internal_d8ed7c8847ed9eebda99a1dd32e65f50ed335c81c5db268723ad5dccebd1e945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ed7c8847ed9eebda99a1dd32e65f50ed335c81c5db268723ad5dccebd1e945->enter($__internal_d8ed7c8847ed9eebda99a1dd32e65f50ed335c81c5db268723ad5dccebd1e945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a145b632181aaaa589aec781a9336ac7826dfbd2424be91aa5f3653afe8dfc2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a145b632181aaaa589aec781a9336ac7826dfbd2424be91aa5f3653afe8dfc2f->enter($__internal_a145b632181aaaa589aec781a9336ac7826dfbd2424be91aa5f3653afe8dfc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d8ed7c8847ed9eebda99a1dd32e65f50ed335c81c5db268723ad5dccebd1e945->leave($__internal_d8ed7c8847ed9eebda99a1dd32e65f50ed335c81c5db268723ad5dccebd1e945_prof);

        
        $__internal_a145b632181aaaa589aec781a9336ac7826dfbd2424be91aa5f3653afe8dfc2f->leave($__internal_a145b632181aaaa589aec781a9336ac7826dfbd2424be91aa5f3653afe8dfc2f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

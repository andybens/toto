<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_08dbd07e2658db7a6ec7eacbe466d09ed65046698769c65384921d39c05cbc19 extends Twig_Template
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
        $__internal_73e70252574d6a1f4aa4d7a2de3697cafc08c0a98332ef757c342c4b0d3ee8f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e70252574d6a1f4aa4d7a2de3697cafc08c0a98332ef757c342c4b0d3ee8f6->enter($__internal_73e70252574d6a1f4aa4d7a2de3697cafc08c0a98332ef757c342c4b0d3ee8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_43cc94bdf7af191f55f42cd6b5b73917803fa9825ec0dcbc0fddebf53c0f3ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43cc94bdf7af191f55f42cd6b5b73917803fa9825ec0dcbc0fddebf53c0f3ca4->enter($__internal_43cc94bdf7af191f55f42cd6b5b73917803fa9825ec0dcbc0fddebf53c0f3ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_73e70252574d6a1f4aa4d7a2de3697cafc08c0a98332ef757c342c4b0d3ee8f6->leave($__internal_73e70252574d6a1f4aa4d7a2de3697cafc08c0a98332ef757c342c4b0d3ee8f6_prof);

        
        $__internal_43cc94bdf7af191f55f42cd6b5b73917803fa9825ec0dcbc0fddebf53c0f3ca4->leave($__internal_43cc94bdf7af191f55f42cd6b5b73917803fa9825ec0dcbc0fddebf53c0f3ca4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

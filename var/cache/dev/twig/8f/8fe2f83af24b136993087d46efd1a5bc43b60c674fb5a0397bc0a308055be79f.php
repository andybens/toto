<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_45555ce6a299c038a6dadbb3ca6bdd35972b55636af3985fed3c6cc0bf1a263d extends Twig_Template
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
        $__internal_3f97e5602442603761607b17fe7f055a5eb53ad75a098ef40509ee2624a4d08e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f97e5602442603761607b17fe7f055a5eb53ad75a098ef40509ee2624a4d08e->enter($__internal_3f97e5602442603761607b17fe7f055a5eb53ad75a098ef40509ee2624a4d08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_0fa317272051b6bcccaca4e48bd2861809a82a46930d0b2a27fcb98c5e63716c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa317272051b6bcccaca4e48bd2861809a82a46930d0b2a27fcb98c5e63716c->enter($__internal_0fa317272051b6bcccaca4e48bd2861809a82a46930d0b2a27fcb98c5e63716c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3f97e5602442603761607b17fe7f055a5eb53ad75a098ef40509ee2624a4d08e->leave($__internal_3f97e5602442603761607b17fe7f055a5eb53ad75a098ef40509ee2624a4d08e_prof);

        
        $__internal_0fa317272051b6bcccaca4e48bd2861809a82a46930d0b2a27fcb98c5e63716c->leave($__internal_0fa317272051b6bcccaca4e48bd2861809a82a46930d0b2a27fcb98c5e63716c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

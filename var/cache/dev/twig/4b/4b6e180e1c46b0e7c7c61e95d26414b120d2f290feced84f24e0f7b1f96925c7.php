<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d646cba13e9b1259cddb17ec4564530374228da32ab7346f85db8b995b32e115 extends Twig_Template
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
        $__internal_cce6b0bb36bd6dbbe568c218e5710e94b88f37b843c1ef1bab815f7c2a22c358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cce6b0bb36bd6dbbe568c218e5710e94b88f37b843c1ef1bab815f7c2a22c358->enter($__internal_cce6b0bb36bd6dbbe568c218e5710e94b88f37b843c1ef1bab815f7c2a22c358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e555e36723d68580dcfb3fd20ebbd7a67fff633e3dd98c1a4e66e95dd103a1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e555e36723d68580dcfb3fd20ebbd7a67fff633e3dd98c1a4e66e95dd103a1e2->enter($__internal_e555e36723d68580dcfb3fd20ebbd7a67fff633e3dd98c1a4e66e95dd103a1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_cce6b0bb36bd6dbbe568c218e5710e94b88f37b843c1ef1bab815f7c2a22c358->leave($__internal_cce6b0bb36bd6dbbe568c218e5710e94b88f37b843c1ef1bab815f7c2a22c358_prof);

        
        $__internal_e555e36723d68580dcfb3fd20ebbd7a67fff633e3dd98c1a4e66e95dd103a1e2->leave($__internal_e555e36723d68580dcfb3fd20ebbd7a67fff633e3dd98c1a4e66e95dd103a1e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

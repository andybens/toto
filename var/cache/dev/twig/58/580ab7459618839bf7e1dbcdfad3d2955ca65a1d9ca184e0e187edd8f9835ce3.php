<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_bdc62edbbcb7ad6781dc27ab7c2564628d78f41af6db2e125e2690da90dd4f13 extends Twig_Template
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
        $__internal_62c7753b999a3648dc28d0bed4686d31541960a0d78be1d5790c3984d138df92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c7753b999a3648dc28d0bed4686d31541960a0d78be1d5790c3984d138df92->enter($__internal_62c7753b999a3648dc28d0bed4686d31541960a0d78be1d5790c3984d138df92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_edd8b2e45b2663a0e7bf9c2cadb6a84015b283b211e5d024f2d7f0e10d831c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd8b2e45b2663a0e7bf9c2cadb6a84015b283b211e5d024f2d7f0e10d831c08->enter($__internal_edd8b2e45b2663a0e7bf9c2cadb6a84015b283b211e5d024f2d7f0e10d831c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_62c7753b999a3648dc28d0bed4686d31541960a0d78be1d5790c3984d138df92->leave($__internal_62c7753b999a3648dc28d0bed4686d31541960a0d78be1d5790c3984d138df92_prof);

        
        $__internal_edd8b2e45b2663a0e7bf9c2cadb6a84015b283b211e5d024f2d7f0e10d831c08->leave($__internal_edd8b2e45b2663a0e7bf9c2cadb6a84015b283b211e5d024f2d7f0e10d831c08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}

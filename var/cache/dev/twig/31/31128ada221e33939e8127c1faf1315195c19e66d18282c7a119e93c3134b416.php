<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b7e574554c86b6bb1cb922b6ec1b32bcbfba6a587d9741651b31c374520cc1d6 extends Twig_Template
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
        $__internal_b8855dad125b8645a422d3c49dcbf620a15400feb0143f320aff3396d9c9741f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8855dad125b8645a422d3c49dcbf620a15400feb0143f320aff3396d9c9741f->enter($__internal_b8855dad125b8645a422d3c49dcbf620a15400feb0143f320aff3396d9c9741f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8b6effeb96e3965a27f84a0189df4fb999eaf285dd1fde24eaccc1ef5c0d02a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6effeb96e3965a27f84a0189df4fb999eaf285dd1fde24eaccc1ef5c0d02a3->enter($__internal_8b6effeb96e3965a27f84a0189df4fb999eaf285dd1fde24eaccc1ef5c0d02a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b8855dad125b8645a422d3c49dcbf620a15400feb0143f320aff3396d9c9741f->leave($__internal_b8855dad125b8645a422d3c49dcbf620a15400feb0143f320aff3396d9c9741f_prof);

        
        $__internal_8b6effeb96e3965a27f84a0189df4fb999eaf285dd1fde24eaccc1ef5c0d02a3->leave($__internal_8b6effeb96e3965a27f84a0189df4fb999eaf285dd1fde24eaccc1ef5c0d02a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

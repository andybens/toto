<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e3c538d9405551f4d43e95f8e60248a54d959a8e2bdd030d196ac69b034d916a extends Twig_Template
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
        $__internal_63ec8016245f2d77d0f0431c80c501ed208c8e31e588593878df1b352385b3c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ec8016245f2d77d0f0431c80c501ed208c8e31e588593878df1b352385b3c5->enter($__internal_63ec8016245f2d77d0f0431c80c501ed208c8e31e588593878df1b352385b3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_f756002050b072f05a81dd76f32c7f0d4b1c44cde2e94df225538f894de01f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f756002050b072f05a81dd76f32c7f0d4b1c44cde2e94df225538f894de01f80->enter($__internal_f756002050b072f05a81dd76f32c7f0d4b1c44cde2e94df225538f894de01f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_63ec8016245f2d77d0f0431c80c501ed208c8e31e588593878df1b352385b3c5->leave($__internal_63ec8016245f2d77d0f0431c80c501ed208c8e31e588593878df1b352385b3c5_prof);

        
        $__internal_f756002050b072f05a81dd76f32c7f0d4b1c44cde2e94df225538f894de01f80->leave($__internal_f756002050b072f05a81dd76f32c7f0d4b1c44cde2e94df225538f894de01f80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

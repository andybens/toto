<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_625ef54e0dd7c29acc0dbf310ac809f1844f69dfb483027201b2c6d4ed952c5d extends Twig_Template
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
        $__internal_4b9067fa14ea8ce5d610d8f0efb0246fc569e61308e89b065a9b39cf7df4f99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b9067fa14ea8ce5d610d8f0efb0246fc569e61308e89b065a9b39cf7df4f99f->enter($__internal_4b9067fa14ea8ce5d610d8f0efb0246fc569e61308e89b065a9b39cf7df4f99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_65c0da882e01636a62a1e3953087af4f8ba5e1a6ab2e919fbb16e6a974a7d296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c0da882e01636a62a1e3953087af4f8ba5e1a6ab2e919fbb16e6a974a7d296->enter($__internal_65c0da882e01636a62a1e3953087af4f8ba5e1a6ab2e919fbb16e6a974a7d296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4b9067fa14ea8ce5d610d8f0efb0246fc569e61308e89b065a9b39cf7df4f99f->leave($__internal_4b9067fa14ea8ce5d610d8f0efb0246fc569e61308e89b065a9b39cf7df4f99f_prof);

        
        $__internal_65c0da882e01636a62a1e3953087af4f8ba5e1a6ab2e919fbb16e6a974a7d296->leave($__internal_65c0da882e01636a62a1e3953087af4f8ba5e1a6ab2e919fbb16e6a974a7d296_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}

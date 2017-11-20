<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5cdfdf89ee0568314ae2c484d168f274445ebb2f7761735c4ec54443c05384e9 extends Twig_Template
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
        $__internal_ac9bf84b8c2c19d391e15194d70d5e62bd7169924f4ed8926ebbd260eeaa2155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac9bf84b8c2c19d391e15194d70d5e62bd7169924f4ed8926ebbd260eeaa2155->enter($__internal_ac9bf84b8c2c19d391e15194d70d5e62bd7169924f4ed8926ebbd260eeaa2155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c63be9fb48228cd34f81affa1dcfe9390da306a5152cf42027a60a64a3af0510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63be9fb48228cd34f81affa1dcfe9390da306a5152cf42027a60a64a3af0510->enter($__internal_c63be9fb48228cd34f81affa1dcfe9390da306a5152cf42027a60a64a3af0510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ac9bf84b8c2c19d391e15194d70d5e62bd7169924f4ed8926ebbd260eeaa2155->leave($__internal_ac9bf84b8c2c19d391e15194d70d5e62bd7169924f4ed8926ebbd260eeaa2155_prof);

        
        $__internal_c63be9fb48228cd34f81affa1dcfe9390da306a5152cf42027a60a64a3af0510->leave($__internal_c63be9fb48228cd34f81affa1dcfe9390da306a5152cf42027a60a64a3af0510_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

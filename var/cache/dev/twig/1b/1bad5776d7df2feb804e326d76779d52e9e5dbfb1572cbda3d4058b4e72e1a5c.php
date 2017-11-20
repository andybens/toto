<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1511033c0b46a8b52b78f169ec98f29c5ef8c21b80e304041a559099cab4ffc8 extends Twig_Template
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
        $__internal_a2790de0840e481a3e9aeffd68118a53c38144285c533591914eaeae9d8f8ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2790de0840e481a3e9aeffd68118a53c38144285c533591914eaeae9d8f8ec4->enter($__internal_a2790de0840e481a3e9aeffd68118a53c38144285c533591914eaeae9d8f8ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c42d414f87e4cfc4003c85fabb0fdb86a2f48808899c8c4ef197c29033cf8696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42d414f87e4cfc4003c85fabb0fdb86a2f48808899c8c4ef197c29033cf8696->enter($__internal_c42d414f87e4cfc4003c85fabb0fdb86a2f48808899c8c4ef197c29033cf8696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a2790de0840e481a3e9aeffd68118a53c38144285c533591914eaeae9d8f8ec4->leave($__internal_a2790de0840e481a3e9aeffd68118a53c38144285c533591914eaeae9d8f8ec4_prof);

        
        $__internal_c42d414f87e4cfc4003c85fabb0fdb86a2f48808899c8c4ef197c29033cf8696->leave($__internal_c42d414f87e4cfc4003c85fabb0fdb86a2f48808899c8c4ef197c29033cf8696_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

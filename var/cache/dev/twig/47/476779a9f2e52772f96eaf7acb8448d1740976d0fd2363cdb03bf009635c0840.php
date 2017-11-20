<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_40dc2c6b83902c19058ecc46e97fc72258fab5e35967349d4d819902e1cd453b extends Twig_Template
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
        $__internal_00e59e3f6d7f4d94ff66f1fcff117ffb9ba6ade30e9991b8909ae2dbce858afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e59e3f6d7f4d94ff66f1fcff117ffb9ba6ade30e9991b8909ae2dbce858afe->enter($__internal_00e59e3f6d7f4d94ff66f1fcff117ffb9ba6ade30e9991b8909ae2dbce858afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_85b80350e3d7d1a1e48c2d0740e734634ca9ffe20db2de2ebb7d029e06a974db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b80350e3d7d1a1e48c2d0740e734634ca9ffe20db2de2ebb7d029e06a974db->enter($__internal_85b80350e3d7d1a1e48c2d0740e734634ca9ffe20db2de2ebb7d029e06a974db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_00e59e3f6d7f4d94ff66f1fcff117ffb9ba6ade30e9991b8909ae2dbce858afe->leave($__internal_00e59e3f6d7f4d94ff66f1fcff117ffb9ba6ade30e9991b8909ae2dbce858afe_prof);

        
        $__internal_85b80350e3d7d1a1e48c2d0740e734634ca9ffe20db2de2ebb7d029e06a974db->leave($__internal_85b80350e3d7d1a1e48c2d0740e734634ca9ffe20db2de2ebb7d029e06a974db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}

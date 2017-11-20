<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_003f53c762c812e25ba4dfab2f5307aad8eae5db82efd3f5d4152503e652e98b extends Twig_Template
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
        $__internal_393e9c8477326c306a961634449a0c148b191581903236c46c2257bef0ec4dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393e9c8477326c306a961634449a0c148b191581903236c46c2257bef0ec4dd5->enter($__internal_393e9c8477326c306a961634449a0c148b191581903236c46c2257bef0ec4dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_215b257c255f9233574389d9dccd5a0b33a6f694f8007a7ffb2a30dd8a5ae084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215b257c255f9233574389d9dccd5a0b33a6f694f8007a7ffb2a30dd8a5ae084->enter($__internal_215b257c255f9233574389d9dccd5a0b33a6f694f8007a7ffb2a30dd8a5ae084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_393e9c8477326c306a961634449a0c148b191581903236c46c2257bef0ec4dd5->leave($__internal_393e9c8477326c306a961634449a0c148b191581903236c46c2257bef0ec4dd5_prof);

        
        $__internal_215b257c255f9233574389d9dccd5a0b33a6f694f8007a7ffb2a30dd8a5ae084->leave($__internal_215b257c255f9233574389d9dccd5a0b33a6f694f8007a7ffb2a30dd8a5ae084_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}

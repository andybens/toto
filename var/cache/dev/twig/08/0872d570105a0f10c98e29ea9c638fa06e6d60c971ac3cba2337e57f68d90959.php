<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_286d87f6ef6a3ae05c8292d2de97f8d10327b3fc44501a925761cfa8ad97fc36 extends Twig_Template
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
        $__internal_7bf52b93ff51e851092591599edb226a6f22bedcb797279b205ddf673eda9eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf52b93ff51e851092591599edb226a6f22bedcb797279b205ddf673eda9eb8->enter($__internal_7bf52b93ff51e851092591599edb226a6f22bedcb797279b205ddf673eda9eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_04da59efe4138932ee9dc6586a14de675f7c984e9f4559de77bed746680496dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04da59efe4138932ee9dc6586a14de675f7c984e9f4559de77bed746680496dc->enter($__internal_04da59efe4138932ee9dc6586a14de675f7c984e9f4559de77bed746680496dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7bf52b93ff51e851092591599edb226a6f22bedcb797279b205ddf673eda9eb8->leave($__internal_7bf52b93ff51e851092591599edb226a6f22bedcb797279b205ddf673eda9eb8_prof);

        
        $__internal_04da59efe4138932ee9dc6586a14de675f7c984e9f4559de77bed746680496dc->leave($__internal_04da59efe4138932ee9dc6586a14de675f7c984e9f4559de77bed746680496dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}

<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e955fcd3ac92414e74233c402235ea9975f507bf042d139e0f22f3dc1d9085d6 extends Twig_Template
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
        $__internal_659fc51888aa3b13be30533204dd63d9a2f7f11783ae9b5c5ef1fe59ae89340d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659fc51888aa3b13be30533204dd63d9a2f7f11783ae9b5c5ef1fe59ae89340d->enter($__internal_659fc51888aa3b13be30533204dd63d9a2f7f11783ae9b5c5ef1fe59ae89340d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_cd4a67f8701cced60166c5eb813d0698f0e9cc77ff70012ded4967955b650df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4a67f8701cced60166c5eb813d0698f0e9cc77ff70012ded4967955b650df3->enter($__internal_cd4a67f8701cced60166c5eb813d0698f0e9cc77ff70012ded4967955b650df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_659fc51888aa3b13be30533204dd63d9a2f7f11783ae9b5c5ef1fe59ae89340d->leave($__internal_659fc51888aa3b13be30533204dd63d9a2f7f11783ae9b5c5ef1fe59ae89340d_prof);

        
        $__internal_cd4a67f8701cced60166c5eb813d0698f0e9cc77ff70012ded4967955b650df3->leave($__internal_cd4a67f8701cced60166c5eb813d0698f0e9cc77ff70012ded4967955b650df3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}

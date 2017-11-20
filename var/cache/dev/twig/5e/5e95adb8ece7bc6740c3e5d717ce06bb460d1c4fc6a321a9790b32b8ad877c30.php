<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7f65cb4ec8f8fdf5b6821142cf1a18de79ddf4d0d28e5f65fb3313be083df236 extends Twig_Template
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
        $__internal_9f55c8f4e1add5c84963a19b60f499f2f1b2ffb0d51a76a08282db38054f6e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f55c8f4e1add5c84963a19b60f499f2f1b2ffb0d51a76a08282db38054f6e11->enter($__internal_9f55c8f4e1add5c84963a19b60f499f2f1b2ffb0d51a76a08282db38054f6e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_068a21595341c0c1d862ea9eb2e969da8824e230bf717752424a8af6f75c9c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068a21595341c0c1d862ea9eb2e969da8824e230bf717752424a8af6f75c9c23->enter($__internal_068a21595341c0c1d862ea9eb2e969da8824e230bf717752424a8af6f75c9c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_9f55c8f4e1add5c84963a19b60f499f2f1b2ffb0d51a76a08282db38054f6e11->leave($__internal_9f55c8f4e1add5c84963a19b60f499f2f1b2ffb0d51a76a08282db38054f6e11_prof);

        
        $__internal_068a21595341c0c1d862ea9eb2e969da8824e230bf717752424a8af6f75c9c23->leave($__internal_068a21595341c0c1d862ea9eb2e969da8824e230bf717752424a8af6f75c9c23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}

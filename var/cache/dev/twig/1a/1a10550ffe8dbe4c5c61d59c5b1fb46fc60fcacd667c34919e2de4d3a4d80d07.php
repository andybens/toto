<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ff295cee10770e31705f37bde630097c3913492ab9e893bd9125c78a717893a8 extends Twig_Template
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
        $__internal_3957f3aa8cde0299f60fed9f9299b8469f05b23647a7b9296aa8c95d4249918f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3957f3aa8cde0299f60fed9f9299b8469f05b23647a7b9296aa8c95d4249918f->enter($__internal_3957f3aa8cde0299f60fed9f9299b8469f05b23647a7b9296aa8c95d4249918f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3fd507edcb277c4bd6c099021b0f747b46759f9e58a94f3f21ee64207ae49017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd507edcb277c4bd6c099021b0f747b46759f9e58a94f3f21ee64207ae49017->enter($__internal_3fd507edcb277c4bd6c099021b0f747b46759f9e58a94f3f21ee64207ae49017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3957f3aa8cde0299f60fed9f9299b8469f05b23647a7b9296aa8c95d4249918f->leave($__internal_3957f3aa8cde0299f60fed9f9299b8469f05b23647a7b9296aa8c95d4249918f_prof);

        
        $__internal_3fd507edcb277c4bd6c099021b0f747b46759f9e58a94f3f21ee64207ae49017->leave($__internal_3fd507edcb277c4bd6c099021b0f747b46759f9e58a94f3f21ee64207ae49017_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

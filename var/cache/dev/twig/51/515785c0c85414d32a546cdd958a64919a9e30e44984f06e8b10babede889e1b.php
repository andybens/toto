<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e77f512d42d4442b878fd2b8425fc32b38b11c76d096de8ecd1f98dc60310803 extends Twig_Template
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
        $__internal_3c31c505950357c41bb4be01503dd2f3bb5d377b7b9bd261d81697dc5889bafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c31c505950357c41bb4be01503dd2f3bb5d377b7b9bd261d81697dc5889bafd->enter($__internal_3c31c505950357c41bb4be01503dd2f3bb5d377b7b9bd261d81697dc5889bafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_50d97d21bda6168fb631f98294f042564c18885ab9258e8ed0814ea5a6263f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d97d21bda6168fb631f98294f042564c18885ab9258e8ed0814ea5a6263f41->enter($__internal_50d97d21bda6168fb631f98294f042564c18885ab9258e8ed0814ea5a6263f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3c31c505950357c41bb4be01503dd2f3bb5d377b7b9bd261d81697dc5889bafd->leave($__internal_3c31c505950357c41bb4be01503dd2f3bb5d377b7b9bd261d81697dc5889bafd_prof);

        
        $__internal_50d97d21bda6168fb631f98294f042564c18885ab9258e8ed0814ea5a6263f41->leave($__internal_50d97d21bda6168fb631f98294f042564c18885ab9258e8ed0814ea5a6263f41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

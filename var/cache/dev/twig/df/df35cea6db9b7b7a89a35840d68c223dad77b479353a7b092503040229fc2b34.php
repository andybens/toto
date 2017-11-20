<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7cc09403f73d6b0046f79fa28281f405fef13866e5dc2e035b724cc0fe2511c8 extends Twig_Template
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
        $__internal_77f0e736676a7ebf119138e13c2431c65ab4995344981c35fa1146d140d26733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f0e736676a7ebf119138e13c2431c65ab4995344981c35fa1146d140d26733->enter($__internal_77f0e736676a7ebf119138e13c2431c65ab4995344981c35fa1146d140d26733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5b33a5947aebb21e12d86b6978d4c200f1d76c9655a9f6d642503e157ba3e85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b33a5947aebb21e12d86b6978d4c200f1d76c9655a9f6d642503e157ba3e85a->enter($__internal_5b33a5947aebb21e12d86b6978d4c200f1d76c9655a9f6d642503e157ba3e85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_77f0e736676a7ebf119138e13c2431c65ab4995344981c35fa1146d140d26733->leave($__internal_77f0e736676a7ebf119138e13c2431c65ab4995344981c35fa1146d140d26733_prof);

        
        $__internal_5b33a5947aebb21e12d86b6978d4c200f1d76c9655a9f6d642503e157ba3e85a->leave($__internal_5b33a5947aebb21e12d86b6978d4c200f1d76c9655a9f6d642503e157ba3e85a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

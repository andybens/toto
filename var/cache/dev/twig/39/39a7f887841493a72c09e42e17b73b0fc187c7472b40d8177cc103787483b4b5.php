<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_7768c91b5fcaccda99bc6c8f5368b5064f15d61f4016f760aeabb71ef6c5bb7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7a662a678ba6aeae71228b49ef7f2afe1b9fd846206a19751c39669dd65c6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a662a678ba6aeae71228b49ef7f2afe1b9fd846206a19751c39669dd65c6e1->enter($__internal_b7a662a678ba6aeae71228b49ef7f2afe1b9fd846206a19751c39669dd65c6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_2ee3562b13a6d362ba3371957fdb38ffa5187433e2251ae5a2e0df1370470982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee3562b13a6d362ba3371957fdb38ffa5187433e2251ae5a2e0df1370470982->enter($__internal_2ee3562b13a6d362ba3371957fdb38ffa5187433e2251ae5a2e0df1370470982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_b7a662a678ba6aeae71228b49ef7f2afe1b9fd846206a19751c39669dd65c6e1->leave($__internal_b7a662a678ba6aeae71228b49ef7f2afe1b9fd846206a19751c39669dd65c6e1_prof);

        
        $__internal_2ee3562b13a6d362ba3371957fdb38ffa5187433e2251ae5a2e0df1370470982->leave($__internal_2ee3562b13a6d362ba3371957fdb38ffa5187433e2251ae5a2e0df1370470982_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_b07dede5df8bf5e3b6fb1f0d86f9299d459f4fb31e9592bfc798df9a72c38dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b07dede5df8bf5e3b6fb1f0d86f9299d459f4fb31e9592bfc798df9a72c38dad->enter($__internal_b07dede5df8bf5e3b6fb1f0d86f9299d459f4fb31e9592bfc798df9a72c38dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_68ef90e5ab0d6942bc2719329e6fdc2da168c650bfd98bbed4d3defd4582270c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ef90e5ab0d6942bc2719329e6fdc2da168c650bfd98bbed4d3defd4582270c->enter($__internal_68ef90e5ab0d6942bc2719329e6fdc2da168c650bfd98bbed4d3defd4582270c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_68ef90e5ab0d6942bc2719329e6fdc2da168c650bfd98bbed4d3defd4582270c->leave($__internal_68ef90e5ab0d6942bc2719329e6fdc2da168c650bfd98bbed4d3defd4582270c_prof);

        
        $__internal_b07dede5df8bf5e3b6fb1f0d86f9299d459f4fb31e9592bfc798df9a72c38dad->leave($__internal_b07dede5df8bf5e3b6fb1f0d86f9299d459f4fb31e9592bfc798df9a72c38dad_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_582ed8d24e30435481182b58545c918e01865b54f80ef138638a716d01852e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582ed8d24e30435481182b58545c918e01865b54f80ef138638a716d01852e78->enter($__internal_582ed8d24e30435481182b58545c918e01865b54f80ef138638a716d01852e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_18ee420ddd19b7ceb8989951bb84d45851fa6949cbdf7514ef3589372d0a3f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ee420ddd19b7ceb8989951bb84d45851fa6949cbdf7514ef3589372d0a3f9f->enter($__internal_18ee420ddd19b7ceb8989951bb84d45851fa6949cbdf7514ef3589372d0a3f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_18ee420ddd19b7ceb8989951bb84d45851fa6949cbdf7514ef3589372d0a3f9f->leave($__internal_18ee420ddd19b7ceb8989951bb84d45851fa6949cbdf7514ef3589372d0a3f9f_prof);

        
        $__internal_582ed8d24e30435481182b58545c918e01865b54f80ef138638a716d01852e78->leave($__internal_582ed8d24e30435481182b58545c918e01865b54f80ef138638a716d01852e78_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_6851e3838cbac37c6f6af6e9973cd56c3309d2faaec454831e757a7ede0c9c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6851e3838cbac37c6f6af6e9973cd56c3309d2faaec454831e757a7ede0c9c3f->enter($__internal_6851e3838cbac37c6f6af6e9973cd56c3309d2faaec454831e757a7ede0c9c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_b418d52e347423147aaf57b9ef89f8b5b95bee1b03528e9adcae8151f0e146f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b418d52e347423147aaf57b9ef89f8b5b95bee1b03528e9adcae8151f0e146f7->enter($__internal_b418d52e347423147aaf57b9ef89f8b5b95bee1b03528e9adcae8151f0e146f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_b418d52e347423147aaf57b9ef89f8b5b95bee1b03528e9adcae8151f0e146f7->leave($__internal_b418d52e347423147aaf57b9ef89f8b5b95bee1b03528e9adcae8151f0e146f7_prof);

        
        $__internal_6851e3838cbac37c6f6af6e9973cd56c3309d2faaec454831e757a7ede0c9c3f->leave($__internal_6851e3838cbac37c6f6af6e9973cd56c3309d2faaec454831e757a7ede0c9c3f_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_de35323b8211b13f97b2634d28c02c598c9f7fce67e9435c7ac5165065449877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de35323b8211b13f97b2634d28c02c598c9f7fce67e9435c7ac5165065449877->enter($__internal_de35323b8211b13f97b2634d28c02c598c9f7fce67e9435c7ac5165065449877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1601b5ca5d8abb1b0130726c39ee9d9b51aa905f1995f1fb3795a1744000b6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1601b5ca5d8abb1b0130726c39ee9d9b51aa905f1995f1fb3795a1744000b6f0->enter($__internal_1601b5ca5d8abb1b0130726c39ee9d9b51aa905f1995f1fb3795a1744000b6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_1601b5ca5d8abb1b0130726c39ee9d9b51aa905f1995f1fb3795a1744000b6f0->leave($__internal_1601b5ca5d8abb1b0130726c39ee9d9b51aa905f1995f1fb3795a1744000b6f0_prof);

        
        $__internal_de35323b8211b13f97b2634d28c02c598c9f7fce67e9435c7ac5165065449877->leave($__internal_de35323b8211b13f97b2634d28c02c598c9f7fce67e9435c7ac5165065449877_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_274adb9a52402fa19d6b7deec1bd982c4f162e9ba18b0f0a25aaa7ee6a69a618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274adb9a52402fa19d6b7deec1bd982c4f162e9ba18b0f0a25aaa7ee6a69a618->enter($__internal_274adb9a52402fa19d6b7deec1bd982c4f162e9ba18b0f0a25aaa7ee6a69a618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e6b083afa2c9682730fc927dd39294db583b504b253e37c420de0f60b5e3c315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b083afa2c9682730fc927dd39294db583b504b253e37c420de0f60b5e3c315->enter($__internal_e6b083afa2c9682730fc927dd39294db583b504b253e37c420de0f60b5e3c315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e6b083afa2c9682730fc927dd39294db583b504b253e37c420de0f60b5e3c315->leave($__internal_e6b083afa2c9682730fc927dd39294db583b504b253e37c420de0f60b5e3c315_prof);

        
        $__internal_274adb9a52402fa19d6b7deec1bd982c4f162e9ba18b0f0a25aaa7ee6a69a618->leave($__internal_274adb9a52402fa19d6b7deec1bd982c4f162e9ba18b0f0a25aaa7ee6a69a618_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_64e3713ac2af590eb42ab58f63c9936ea8915a99e97d36d91393f9846134626c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e3713ac2af590eb42ab58f63c9936ea8915a99e97d36d91393f9846134626c->enter($__internal_64e3713ac2af590eb42ab58f63c9936ea8915a99e97d36d91393f9846134626c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_66e3aa551886374450eca8f5a41d35b41cf54063c9d8473d4a6392d95d9d2255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e3aa551886374450eca8f5a41d35b41cf54063c9d8473d4a6392d95d9d2255->enter($__internal_66e3aa551886374450eca8f5a41d35b41cf54063c9d8473d4a6392d95d9d2255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_66e3aa551886374450eca8f5a41d35b41cf54063c9d8473d4a6392d95d9d2255->leave($__internal_66e3aa551886374450eca8f5a41d35b41cf54063c9d8473d4a6392d95d9d2255_prof);

        
        $__internal_64e3713ac2af590eb42ab58f63c9936ea8915a99e97d36d91393f9846134626c->leave($__internal_64e3713ac2af590eb42ab58f63c9936ea8915a99e97d36d91393f9846134626c_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_a3b7192bec4837428f6a45925c2a8fd41586879d0809378c12b2387dde2550b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b7192bec4837428f6a45925c2a8fd41586879d0809378c12b2387dde2550b6->enter($__internal_a3b7192bec4837428f6a45925c2a8fd41586879d0809378c12b2387dde2550b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_dad55598e0c1c305d1adc5ce9abc917d6323dc35cc37b8ec5020947b478a672d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad55598e0c1c305d1adc5ce9abc917d6323dc35cc37b8ec5020947b478a672d->enter($__internal_dad55598e0c1c305d1adc5ce9abc917d6323dc35cc37b8ec5020947b478a672d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dad55598e0c1c305d1adc5ce9abc917d6323dc35cc37b8ec5020947b478a672d->leave($__internal_dad55598e0c1c305d1adc5ce9abc917d6323dc35cc37b8ec5020947b478a672d_prof);

        
        $__internal_a3b7192bec4837428f6a45925c2a8fd41586879d0809378c12b2387dde2550b6->leave($__internal_a3b7192bec4837428f6a45925c2a8fd41586879d0809378c12b2387dde2550b6_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f794663dd4fcb098a1d889690d2c1de1e1b0c376c74129e22949eeee332f1a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f794663dd4fcb098a1d889690d2c1de1e1b0c376c74129e22949eeee332f1a75->enter($__internal_f794663dd4fcb098a1d889690d2c1de1e1b0c376c74129e22949eeee332f1a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_9312beecdcac1de5f23c9f59960fbf8ce681450e7b5115237ba5df82e6870db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9312beecdcac1de5f23c9f59960fbf8ce681450e7b5115237ba5df82e6870db8->enter($__internal_9312beecdcac1de5f23c9f59960fbf8ce681450e7b5115237ba5df82e6870db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9312beecdcac1de5f23c9f59960fbf8ce681450e7b5115237ba5df82e6870db8->leave($__internal_9312beecdcac1de5f23c9f59960fbf8ce681450e7b5115237ba5df82e6870db8_prof);

        
        $__internal_f794663dd4fcb098a1d889690d2c1de1e1b0c376c74129e22949eeee332f1a75->leave($__internal_f794663dd4fcb098a1d889690d2c1de1e1b0c376c74129e22949eeee332f1a75_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_931c56c1c965a824b840805d85dcefe674d7101dfb5719454d9ea79be32717cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931c56c1c965a824b840805d85dcefe674d7101dfb5719454d9ea79be32717cc->enter($__internal_931c56c1c965a824b840805d85dcefe674d7101dfb5719454d9ea79be32717cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_4c71f2b24588adde571f5c88ed6e816f9e1f075f70319e7f76e6f4acd781c701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c71f2b24588adde571f5c88ed6e816f9e1f075f70319e7f76e6f4acd781c701->enter($__internal_4c71f2b24588adde571f5c88ed6e816f9e1f075f70319e7f76e6f4acd781c701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4c71f2b24588adde571f5c88ed6e816f9e1f075f70319e7f76e6f4acd781c701->leave($__internal_4c71f2b24588adde571f5c88ed6e816f9e1f075f70319e7f76e6f4acd781c701_prof);

        
        $__internal_931c56c1c965a824b840805d85dcefe674d7101dfb5719454d9ea79be32717cc->leave($__internal_931c56c1c965a824b840805d85dcefe674d7101dfb5719454d9ea79be32717cc_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a775e0e1d907f8c5ee72c6837d45381f2dfbf9c3f1f4a6ed19d9b48468314bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a775e0e1d907f8c5ee72c6837d45381f2dfbf9c3f1f4a6ed19d9b48468314bb1->enter($__internal_a775e0e1d907f8c5ee72c6837d45381f2dfbf9c3f1f4a6ed19d9b48468314bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_75e84037717cac845aae65c537c595857924673458581ac94f7fb979fc62bd37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e84037717cac845aae65c537c595857924673458581ac94f7fb979fc62bd37->enter($__internal_75e84037717cac845aae65c537c595857924673458581ac94f7fb979fc62bd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_75e84037717cac845aae65c537c595857924673458581ac94f7fb979fc62bd37->leave($__internal_75e84037717cac845aae65c537c595857924673458581ac94f7fb979fc62bd37_prof);

        
        $__internal_a775e0e1d907f8c5ee72c6837d45381f2dfbf9c3f1f4a6ed19d9b48468314bb1->leave($__internal_a775e0e1d907f8c5ee72c6837d45381f2dfbf9c3f1f4a6ed19d9b48468314bb1_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/Users/oualid/toto/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}

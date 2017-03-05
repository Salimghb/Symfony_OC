<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c4ce05921829ab9e8618ad92cc4f2aeed7403f604d7593a0504b1dc59c38f067 extends Twig_Template
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
        $__internal_169c4ec2c9a106db45a5d8c4c5c63e82ceeb8fe066e8857dd549b55e4d301620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169c4ec2c9a106db45a5d8c4c5c63e82ceeb8fe066e8857dd549b55e4d301620->enter($__internal_169c4ec2c9a106db45a5d8c4c5c63e82ceeb8fe066e8857dd549b55e4d301620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_daa99560da6d56613fabf0f8e6bb99b61cc860e3e8a74253fad4df86eb9586fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa99560da6d56613fabf0f8e6bb99b61cc860e3e8a74253fad4df86eb9586fe->enter($__internal_daa99560da6d56613fabf0f8e6bb99b61cc860e3e8a74253fad4df86eb9586fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_169c4ec2c9a106db45a5d8c4c5c63e82ceeb8fe066e8857dd549b55e4d301620->leave($__internal_169c4ec2c9a106db45a5d8c4c5c63e82ceeb8fe066e8857dd549b55e4d301620_prof);

        
        $__internal_daa99560da6d56613fabf0f8e6bb99b61cc860e3e8a74253fad4df86eb9586fe->leave($__internal_daa99560da6d56613fabf0f8e6bb99b61cc860e3e8a74253fad4df86eb9586fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}

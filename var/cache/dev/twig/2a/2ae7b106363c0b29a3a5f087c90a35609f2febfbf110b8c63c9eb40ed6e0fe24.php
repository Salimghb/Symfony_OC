<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_71fad4b8f8f0a704383a073e7530ad0ab79a4eda6e833cddba57eb6d5755386c extends Twig_Template
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
        $__internal_6f3e526b5da3508afd233d25fcd840564d8eb88f4ac24b892bc6162efe586699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3e526b5da3508afd233d25fcd840564d8eb88f4ac24b892bc6162efe586699->enter($__internal_6f3e526b5da3508afd233d25fcd840564d8eb88f4ac24b892bc6162efe586699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_58ebf63fe4493429101b8c42bf665f0723bfef558b648355eef0314a8f3ba43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ebf63fe4493429101b8c42bf665f0723bfef558b648355eef0314a8f3ba43d->enter($__internal_58ebf63fe4493429101b8c42bf665f0723bfef558b648355eef0314a8f3ba43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6f3e526b5da3508afd233d25fcd840564d8eb88f4ac24b892bc6162efe586699->leave($__internal_6f3e526b5da3508afd233d25fcd840564d8eb88f4ac24b892bc6162efe586699_prof);

        
        $__internal_58ebf63fe4493429101b8c42bf665f0723bfef558b648355eef0314a8f3ba43d->leave($__internal_58ebf63fe4493429101b8c42bf665f0723bfef558b648355eef0314a8f3ba43d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}

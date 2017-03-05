<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ebfd5ace12b238358b83b89fff067be87118f7d5c896aa0ec1a13c49f82fea2f extends Twig_Template
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
        $__internal_691ab9e1653b4272de333e508a76d5bac55daf7a2498983b24e0348b433236a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691ab9e1653b4272de333e508a76d5bac55daf7a2498983b24e0348b433236a7->enter($__internal_691ab9e1653b4272de333e508a76d5bac55daf7a2498983b24e0348b433236a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_0e857d2ad67e05e5ae8550867c531a999e7210a3212d01ae6c54dee79a5a73fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e857d2ad67e05e5ae8550867c531a999e7210a3212d01ae6c54dee79a5a73fc->enter($__internal_0e857d2ad67e05e5ae8550867c531a999e7210a3212d01ae6c54dee79a5a73fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_691ab9e1653b4272de333e508a76d5bac55daf7a2498983b24e0348b433236a7->leave($__internal_691ab9e1653b4272de333e508a76d5bac55daf7a2498983b24e0348b433236a7_prof);

        
        $__internal_0e857d2ad67e05e5ae8550867c531a999e7210a3212d01ae6c54dee79a5a73fc->leave($__internal_0e857d2ad67e05e5ae8550867c531a999e7210a3212d01ae6c54dee79a5a73fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1a13ef417360f111dc8823e38a6fb3985a1c1f47a2ad650e4fb0b8666c609571 extends Twig_Template
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
        $__internal_4430b86b9a09023fdb44076b374ff60d2ff98812485c913453e3f8959f556c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4430b86b9a09023fdb44076b374ff60d2ff98812485c913453e3f8959f556c54->enter($__internal_4430b86b9a09023fdb44076b374ff60d2ff98812485c913453e3f8959f556c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_fcad2fe1b6420adf52f50e6cbada42ae981626282e5741f32626160f9b8e4d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcad2fe1b6420adf52f50e6cbada42ae981626282e5741f32626160f9b8e4d47->enter($__internal_fcad2fe1b6420adf52f50e6cbada42ae981626282e5741f32626160f9b8e4d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4430b86b9a09023fdb44076b374ff60d2ff98812485c913453e3f8959f556c54->leave($__internal_4430b86b9a09023fdb44076b374ff60d2ff98812485c913453e3f8959f556c54_prof);

        
        $__internal_fcad2fe1b6420adf52f50e6cbada42ae981626282e5741f32626160f9b8e4d47->leave($__internal_fcad2fe1b6420adf52f50e6cbada42ae981626282e5741f32626160f9b8e4d47_prof);

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

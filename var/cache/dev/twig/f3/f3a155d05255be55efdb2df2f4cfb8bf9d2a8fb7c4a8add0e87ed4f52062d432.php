<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f2c75c71d755c20233abb6dae5681d4ad78b3f519dc5ee83edf32e5282f28ad7 extends Twig_Template
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
        $__internal_3a4c5d4b508bb3c7f91db79a114786ca59603cd6dff7c9490e8c745615860943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4c5d4b508bb3c7f91db79a114786ca59603cd6dff7c9490e8c745615860943->enter($__internal_3a4c5d4b508bb3c7f91db79a114786ca59603cd6dff7c9490e8c745615860943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_28dd6db26dc573745be69370b271237c9c150cd43a88386239eaa475ae899e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28dd6db26dc573745be69370b271237c9c150cd43a88386239eaa475ae899e7d->enter($__internal_28dd6db26dc573745be69370b271237c9c150cd43a88386239eaa475ae899e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_3a4c5d4b508bb3c7f91db79a114786ca59603cd6dff7c9490e8c745615860943->leave($__internal_3a4c5d4b508bb3c7f91db79a114786ca59603cd6dff7c9490e8c745615860943_prof);

        
        $__internal_28dd6db26dc573745be69370b271237c9c150cd43a88386239eaa475ae899e7d->leave($__internal_28dd6db26dc573745be69370b271237c9c150cd43a88386239eaa475ae899e7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

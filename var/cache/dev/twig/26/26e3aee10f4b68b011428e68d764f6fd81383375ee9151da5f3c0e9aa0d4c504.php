<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dbe3596093799abfcc846c93c6aef5fe75cbd6a3fa3eb6d816cf5d49cfd6e8c5 extends Twig_Template
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
        $__internal_82e9d40fd90752a48485b8576945cdcf50cfe5ff096f770a2131fb5ba0af529d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e9d40fd90752a48485b8576945cdcf50cfe5ff096f770a2131fb5ba0af529d->enter($__internal_82e9d40fd90752a48485b8576945cdcf50cfe5ff096f770a2131fb5ba0af529d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7a959454329beca3262dc00daecec5e8a5a03af3aafd42b91bcb748b671b2d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a959454329beca3262dc00daecec5e8a5a03af3aafd42b91bcb748b671b2d35->enter($__internal_7a959454329beca3262dc00daecec5e8a5a03af3aafd42b91bcb748b671b2d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_82e9d40fd90752a48485b8576945cdcf50cfe5ff096f770a2131fb5ba0af529d->leave($__internal_82e9d40fd90752a48485b8576945cdcf50cfe5ff096f770a2131fb5ba0af529d_prof);

        
        $__internal_7a959454329beca3262dc00daecec5e8a5a03af3aafd42b91bcb748b671b2d35->leave($__internal_7a959454329beca3262dc00daecec5e8a5a03af3aafd42b91bcb748b671b2d35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}

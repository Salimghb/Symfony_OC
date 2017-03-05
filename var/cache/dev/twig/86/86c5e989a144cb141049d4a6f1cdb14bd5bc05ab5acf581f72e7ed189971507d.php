<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_12070d718bfc51e8a51c7abb3735953deaf59e9121363fd43fe8f77c18067e86 extends Twig_Template
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
        $__internal_d3fa32bd8f129692c1088314a165258c7a93729721eb1d18ec10fef209429ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3fa32bd8f129692c1088314a165258c7a93729721eb1d18ec10fef209429ff6->enter($__internal_d3fa32bd8f129692c1088314a165258c7a93729721eb1d18ec10fef209429ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b75d1e36df450589f16af6cb6b88c71fff57c8f2bebae56c1ba8d6cd51d46acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75d1e36df450589f16af6cb6b88c71fff57c8f2bebae56c1ba8d6cd51d46acb->enter($__internal_b75d1e36df450589f16af6cb6b88c71fff57c8f2bebae56c1ba8d6cd51d46acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d3fa32bd8f129692c1088314a165258c7a93729721eb1d18ec10fef209429ff6->leave($__internal_d3fa32bd8f129692c1088314a165258c7a93729721eb1d18ec10fef209429ff6_prof);

        
        $__internal_b75d1e36df450589f16af6cb6b88c71fff57c8f2bebae56c1ba8d6cd51d46acb->leave($__internal_b75d1e36df450589f16af6cb6b88c71fff57c8f2bebae56c1ba8d6cd51d46acb_prof);

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

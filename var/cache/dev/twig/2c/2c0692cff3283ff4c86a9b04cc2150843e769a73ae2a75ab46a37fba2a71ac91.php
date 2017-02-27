<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_841de668e0710b00073832b496127d5bfb678ba1ef750def646f3b188f7f556f extends Twig_Template
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
        $__internal_bf5ea7a0627271a0f28b1cb69142ce6197c2faf5202aedae0579ffdf208b706a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5ea7a0627271a0f28b1cb69142ce6197c2faf5202aedae0579ffdf208b706a->enter($__internal_bf5ea7a0627271a0f28b1cb69142ce6197c2faf5202aedae0579ffdf208b706a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_55685037ed47c94095eca51798e5cdae202a532e67df18a9a732e84a037040de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55685037ed47c94095eca51798e5cdae202a532e67df18a9a732e84a037040de->enter($__internal_55685037ed47c94095eca51798e5cdae202a532e67df18a9a732e84a037040de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_bf5ea7a0627271a0f28b1cb69142ce6197c2faf5202aedae0579ffdf208b706a->leave($__internal_bf5ea7a0627271a0f28b1cb69142ce6197c2faf5202aedae0579ffdf208b706a_prof);

        
        $__internal_55685037ed47c94095eca51798e5cdae202a532e67df18a9a732e84a037040de->leave($__internal_55685037ed47c94095eca51798e5cdae202a532e67df18a9a732e84a037040de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}

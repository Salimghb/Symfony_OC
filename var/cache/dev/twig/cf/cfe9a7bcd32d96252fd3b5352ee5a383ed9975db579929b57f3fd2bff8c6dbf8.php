<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e75baf544d14334debdb9011590cd4ff2eb394362b774ee9d4827ef13ed32c9d extends Twig_Template
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
        $__internal_c7771a4223713c7e78992133082bf1128863c9c8533512d4b6df6de77174aebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7771a4223713c7e78992133082bf1128863c9c8533512d4b6df6de77174aebd->enter($__internal_c7771a4223713c7e78992133082bf1128863c9c8533512d4b6df6de77174aebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0a4ad119b2b39a6dd4688d35aab396aa6e78159b714a9cc52e9dc9c023f80466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4ad119b2b39a6dd4688d35aab396aa6e78159b714a9cc52e9dc9c023f80466->enter($__internal_0a4ad119b2b39a6dd4688d35aab396aa6e78159b714a9cc52e9dc9c023f80466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c7771a4223713c7e78992133082bf1128863c9c8533512d4b6df6de77174aebd->leave($__internal_c7771a4223713c7e78992133082bf1128863c9c8533512d4b6df6de77174aebd_prof);

        
        $__internal_0a4ad119b2b39a6dd4688d35aab396aa6e78159b714a9cc52e9dc9c023f80466->leave($__internal_0a4ad119b2b39a6dd4688d35aab396aa6e78159b714a9cc52e9dc9c023f80466_prof);

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

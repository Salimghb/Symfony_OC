<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_765cf7567bd13cb000f0a7606104138743636c1065830633d4ad1d23e480ec9a extends Twig_Template
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
        $__internal_07466e981ef042dc180f964e3e97a35010c0a3fc8ab54d11f5e1a851918c6029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07466e981ef042dc180f964e3e97a35010c0a3fc8ab54d11f5e1a851918c6029->enter($__internal_07466e981ef042dc180f964e3e97a35010c0a3fc8ab54d11f5e1a851918c6029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_333a77757f40508745e749b5daf08ca41fc2f4ac07d4e1173b1a193959ecf337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333a77757f40508745e749b5daf08ca41fc2f4ac07d4e1173b1a193959ecf337->enter($__internal_333a77757f40508745e749b5daf08ca41fc2f4ac07d4e1173b1a193959ecf337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_07466e981ef042dc180f964e3e97a35010c0a3fc8ab54d11f5e1a851918c6029->leave($__internal_07466e981ef042dc180f964e3e97a35010c0a3fc8ab54d11f5e1a851918c6029_prof);

        
        $__internal_333a77757f40508745e749b5daf08ca41fc2f4ac07d4e1173b1a193959ecf337->leave($__internal_333a77757f40508745e749b5daf08ca41fc2f4ac07d4e1173b1a193959ecf337_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}

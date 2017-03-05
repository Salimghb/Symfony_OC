<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ebb8106dc31eb97b3a188d8aa8937984ef45a6b8bb72ce572cb34f50ccab72be extends Twig_Template
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
        $__internal_548de938ea3a8b5d4e808093848f069e71fcc2b2ad2d01544115009ff6c2da86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548de938ea3a8b5d4e808093848f069e71fcc2b2ad2d01544115009ff6c2da86->enter($__internal_548de938ea3a8b5d4e808093848f069e71fcc2b2ad2d01544115009ff6c2da86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_fadab62603bc57436e5ea21679d74d0cf18d93cecb3c30a57b7d1cb89d9c9c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fadab62603bc57436e5ea21679d74d0cf18d93cecb3c30a57b7d1cb89d9c9c49->enter($__internal_fadab62603bc57436e5ea21679d74d0cf18d93cecb3c30a57b7d1cb89d9c9c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_548de938ea3a8b5d4e808093848f069e71fcc2b2ad2d01544115009ff6c2da86->leave($__internal_548de938ea3a8b5d4e808093848f069e71fcc2b2ad2d01544115009ff6c2da86_prof);

        
        $__internal_fadab62603bc57436e5ea21679d74d0cf18d93cecb3c30a57b7d1cb89d9c9c49->leave($__internal_fadab62603bc57436e5ea21679d74d0cf18d93cecb3c30a57b7d1cb89d9c9c49_prof);

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

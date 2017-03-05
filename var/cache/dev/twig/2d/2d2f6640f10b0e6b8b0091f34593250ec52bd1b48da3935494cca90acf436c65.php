<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7345753f1263fb07fdb6bb031c63503a12ea2307d17e7e833d223670dc9697be extends Twig_Template
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
        $__internal_5d0fa54e95176470864f477773a56456cd11644e85d7ec8db2c071036c68f909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0fa54e95176470864f477773a56456cd11644e85d7ec8db2c071036c68f909->enter($__internal_5d0fa54e95176470864f477773a56456cd11644e85d7ec8db2c071036c68f909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_28c433bea719663fc8958c1c505ff153d8fd0247e89d4c2e0fd4ff1a8fa8d852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c433bea719663fc8958c1c505ff153d8fd0247e89d4c2e0fd4ff1a8fa8d852->enter($__internal_28c433bea719663fc8958c1c505ff153d8fd0247e89d4c2e0fd4ff1a8fa8d852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5d0fa54e95176470864f477773a56456cd11644e85d7ec8db2c071036c68f909->leave($__internal_5d0fa54e95176470864f477773a56456cd11644e85d7ec8db2c071036c68f909_prof);

        
        $__internal_28c433bea719663fc8958c1c505ff153d8fd0247e89d4c2e0fd4ff1a8fa8d852->leave($__internal_28c433bea719663fc8958c1c505ff153d8fd0247e89d4c2e0fd4ff1a8fa8d852_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

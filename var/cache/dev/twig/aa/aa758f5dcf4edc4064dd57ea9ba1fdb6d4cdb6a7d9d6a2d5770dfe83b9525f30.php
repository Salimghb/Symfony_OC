<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7f34bdbb47e0523c6c5e4a9664bb6f5eefa327992fecedc20cc046d780be37a1 extends Twig_Template
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
        $__internal_ff567b7eb6ff6195fa8605220a4906dae50f08515a2dad05d0a85ac553e5f307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff567b7eb6ff6195fa8605220a4906dae50f08515a2dad05d0a85ac553e5f307->enter($__internal_ff567b7eb6ff6195fa8605220a4906dae50f08515a2dad05d0a85ac553e5f307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d27a599c83009ebbe3da8a227327353ea66ed7a3c24bf96a8d052b3d9d0dc128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27a599c83009ebbe3da8a227327353ea66ed7a3c24bf96a8d052b3d9d0dc128->enter($__internal_d27a599c83009ebbe3da8a227327353ea66ed7a3c24bf96a8d052b3d9d0dc128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ff567b7eb6ff6195fa8605220a4906dae50f08515a2dad05d0a85ac553e5f307->leave($__internal_ff567b7eb6ff6195fa8605220a4906dae50f08515a2dad05d0a85ac553e5f307_prof);

        
        $__internal_d27a599c83009ebbe3da8a227327353ea66ed7a3c24bf96a8d052b3d9d0dc128->leave($__internal_d27a599c83009ebbe3da8a227327353ea66ed7a3c24bf96a8d052b3d9d0dc128_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}

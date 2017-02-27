<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_58117fd9f6d2d7dc38774a342f0865639da2fab6efeb424eac1b69b8e8b293d4 extends Twig_Template
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
        $__internal_f5d1f7f0ec7f60e3a1e9152001daf9c052e83351e0242f5162ceadc2ed92b05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d1f7f0ec7f60e3a1e9152001daf9c052e83351e0242f5162ceadc2ed92b05f->enter($__internal_f5d1f7f0ec7f60e3a1e9152001daf9c052e83351e0242f5162ceadc2ed92b05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_441082c87ed4132ff99d320148e1011be2f605a5209821a5e7c69716f55f6b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441082c87ed4132ff99d320148e1011be2f605a5209821a5e7c69716f55f6b3f->enter($__internal_441082c87ed4132ff99d320148e1011be2f605a5209821a5e7c69716f55f6b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f5d1f7f0ec7f60e3a1e9152001daf9c052e83351e0242f5162ceadc2ed92b05f->leave($__internal_f5d1f7f0ec7f60e3a1e9152001daf9c052e83351e0242f5162ceadc2ed92b05f_prof);

        
        $__internal_441082c87ed4132ff99d320148e1011be2f605a5209821a5e7c69716f55f6b3f->leave($__internal_441082c87ed4132ff99d320148e1011be2f605a5209821a5e7c69716f55f6b3f_prof);

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

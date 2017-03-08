<?php

/* SalimPlateformeBundle:Advert:form.html.twig */
class __TwigTemplate_2a7fb1696414f4005540a78e1b84dfeba89331b1f9e699315a145ca1b59b1692 extends Twig_Template
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
        $__internal_475a2a8c31bb51da397b71a025d0023332b06cf06376b43cc0b87a8c260b7fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475a2a8c31bb51da397b71a025d0023332b06cf06376b43cc0b87a8c260b7fe9->enter($__internal_475a2a8c31bb51da397b71a025d0023332b06cf06376b43cc0b87a8c260b7fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:form.html.twig"));

        $__internal_83339b393f2365592f8f122ef24a0ea2bfd22192e344c41f2160657dd6d187b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83339b393f2365592f8f122ef24a0ea2bfd22192e344c41f2160657dd6d187b8->enter($__internal_83339b393f2365592f8f122ef24a0ea2bfd22192e344c41f2160657dd6d187b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SalimPlateformeBundle:Advert:form.html.twig"));

        // line 1
        echo "<h3>Formulaire d'annonce</h3>

<div class=\"well\">
\t";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>

";
        
        $__internal_475a2a8c31bb51da397b71a025d0023332b06cf06376b43cc0b87a8c260b7fe9->leave($__internal_475a2a8c31bb51da397b71a025d0023332b06cf06376b43cc0b87a8c260b7fe9_prof);

        
        $__internal_83339b393f2365592f8f122ef24a0ea2bfd22192e344c41f2160657dd6d187b8->leave($__internal_83339b393f2365592f8f122ef24a0ea2bfd22192e344c41f2160657dd6d187b8_prof);

    }

    public function getTemplateName()
    {
        return "SalimPlateformeBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Formulaire d'annonce</h3>

<div class=\"well\">
\t{{form(form)}}
</div>

", "SalimPlateformeBundle:Advert:form.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Salim\\PlateformeBundle\\Resources\\views\\Advert\\form.html.twig");
    }
}

<?php

/* post/new.html.twig */
class __TwigTemplate_7949183ecc4a9e6e1e80d80924586d7c9fcf83cad966e093c7c6fbc8cbef1820 extends Twig_Template
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
        $__internal_21d5eb02c272e5542d52a66c5e74ad3e9952ece4b9937384d1d6664a3619df6c = $this->env->getExtension("native_profiler");
        $__internal_21d5eb02c272e5542d52a66c5e74ad3e9952ece4b9937384d1d6664a3619df6c->enter($__internal_21d5eb02c272e5542d52a66c5e74ad3e9952ece4b9937384d1d6664a3619df6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        // line 1
        echo "<h2>Écrire un commentaire</h2>

";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("post_new")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Envoyer\" />
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_21d5eb02c272e5542d52a66c5e74ad3e9952ece4b9937384d1d6664a3619df6c->leave($__internal_21d5eb02c272e5542d52a66c5e74ad3e9952ece4b9937384d1d6664a3619df6c_prof);

    }

    public function getTemplateName()
    {
        return "post/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <h2>Écrire un commentaire</h2>*/
/* */
/* {{ form_start(form, {'method': 'post', 'action': path('post_new')}) }}*/
/*     {{ form_widget(form) }}*/
/*         <input type="submit" value="Envoyer" />*/
/*     {{ form_end(form) }}*/
/* */

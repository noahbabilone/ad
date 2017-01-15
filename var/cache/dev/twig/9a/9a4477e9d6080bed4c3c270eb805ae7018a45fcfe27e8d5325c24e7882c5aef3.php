<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_dc56a6cd2ed38a8ba90be81212cccf0aec41cfe2c74c6dafa8edb88f31d055a6 extends Twig_Template
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
        $__internal_4509a81bd0364e0566060b383496553401b9abd28ca8e171f4291be1ae3711d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4509a81bd0364e0566060b383496553401b9abd28ca8e171f4291be1ae3711d8->enter($__internal_4509a81bd0364e0566060b383496553401b9abd28ca8e171f4291be1ae3711d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_a451187bc2a4e267da74b1a65d4c248ce062f5b1eafdec5851eb43e4f8a6bc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a451187bc2a4e267da74b1a65d4c248ce062f5b1eafdec5851eb43e4f8a6bc88->enter($__internal_a451187bc2a4e267da74b1a65d4c248ce062f5b1eafdec5851eb43e4f8a6bc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
<div class=\"content\">
    <!-- BEGIN LOGIN FORM -->
    <form class=\"login-form\"
          action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <h3 class=\"form-title\">Connexion </h3>
        <div class=\"alert alert-danger display-hide\">
            <button class=\"close\" data-close=\"alert\"></button>
            <span> Veuillez saisir votre login et mot de passer.</span>
        </div>
        ";
        // line 12
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 13
            echo "            <div class=\"alert alert-danger\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span> ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo ".</span>
            </div>
        ";
        }
        // line 18
        echo "        <div class=\"form-group\">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class=\"control-label visible-ie8 visible-ie9\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"input-icon\">
                <i class=\"fa fa-user\"></i>
                <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\"
                       placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" name=\"_username\"
                       value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/></div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label visible-ie8 visible-ie9\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <div class=\"input-icon\">
                <i class=\"fa fa-lock\"></i>
                <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\"
                       placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" name=\"_password\"/></div>
        </div>
        <div class=\"form-actions\">
            <label class=\"rememberme mt-checkbox mt-checkbox-outline\">
                <input type=\"checkbox\" name=\"remember\" value=\"1\"/> ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                <span></span>
            </label>
            <a href=\"javascript:;\" id=\"forget-password\" class=\"pull-right\">Mot de passe oublié ?</a>


            ";
        // line 43
        echo "            ";
        // line 44
        echo "            <button type=\"submit\"
                    class=\"btn red-mint pull-right btn-block\"> ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
        </div>

        <div class=\"form-group\">

        </div>

        <div class=\"forget-password\">
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class=\"forget-form\" action=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_user_reset_password");
        echo "\" method=\"post\">
        <h3 class=\"form-title\">Mot de passe oublié ?</h3>
        <div class=\"alert alert-danger display-hide\">
            <button class=\"close\" data-close=\"alert\"></button>
            <span>Aucun compte n'est associé à cette adresse e-mail.</span>
        </div>

        <p class=\"form-subtitle\" style=\"padding-left: 0px !important;\">Saisissez votre adresse e-mail pour réinitialiser
            votre mot de passe.
            Vous devrez peut-être consulter votre dossier de spams ou autoriser no-reply@b2b.com.</p>
        <div class=\"form-group\">
            <div class=\"input-icon\">
                <i class=\"fa fa-envelope\"></i>
                <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\"
                       placeholder=\"E-mail\" name=\"email\" id=\"input_email\"/></div>
        </div>
        <div class=\"form-actions\">
            <button type=\"button\" id=\"back-btn\" class=\"btn red btn-outline\">Retour</button>
            <button type=\"submit\" class=\"btn green pull-right btn-forget-form\"> Envoyer</button>
        </div>
        <input type=\"hidden\" value=\"0\" id=\"heck_email\">
    </form>

    <!-- END FORGOT PASSWORD FORM -->

</div>
";
        
        $__internal_4509a81bd0364e0566060b383496553401b9abd28ca8e171f4291be1ae3711d8->leave($__internal_4509a81bd0364e0566060b383496553401b9abd28ca8e171f4291be1ae3711d8_prof);

        
        $__internal_a451187bc2a4e267da74b1a65d4c248ce062f5b1eafdec5851eb43e4f8a6bc88->leave($__internal_a451187bc2a4e267da74b1a65d4c248ce062f5b1eafdec5851eb43e4f8a6bc88_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 57,  101 => 45,  98 => 44,  96 => 43,  87 => 36,  80 => 32,  73 => 28,  67 => 25,  63 => 24,  56 => 20,  52 => 18,  46 => 15,  42 => 13,  40 => 12,  31 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"content\">
    <!-- BEGIN LOGIN FORM -->
    <form class=\"login-form\"
          action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        <h3 class=\"form-title\">Connexion </h3>
        <div class=\"alert alert-danger display-hide\">
            <button class=\"close\" data-close=\"alert\"></button>
            <span> Veuillez saisir votre login et mot de passer.</span>
        </div>
        {% if error %}
            <div class=\"alert alert-danger\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span> {{ error.messageKey|trans(error.messageData, 'security') }}.</span>
            </div>
        {% endif %}
        <div class=\"form-group\">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class=\"control-label visible-ie8 visible-ie9\">{{ 'security.login.username'|trans }}</label>
            <div class=\"input-icon\">
                <i class=\"fa fa-user\"></i>
                <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\"
                       placeholder=\"{{ 'security.login.username'|trans }}\" name=\"_username\"
                       value=\"{{ last_username }}\"/></div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label visible-ie8 visible-ie9\">{{ 'security.login.password'|trans }}</label>
            <div class=\"input-icon\">
                <i class=\"fa fa-lock\"></i>
                <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\"
                       placeholder=\"{{ 'security.login.password'|trans }}\" name=\"_password\"/></div>
        </div>
        <div class=\"form-actions\">
            <label class=\"rememberme mt-checkbox mt-checkbox-outline\">
                <input type=\"checkbox\" name=\"remember\" value=\"1\"/> {{ 'security.login.remember_me'|trans }}
                <span></span>
            </label>
            <a href=\"javascript:;\" id=\"forget-password\" class=\"pull-right\">Mot de passe oublié ?</a>


            {#<input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn green pull-right btn-block\"#}
            {#value=\"{{ 'security.login.submit'|trans }}\"/>#}
            <button type=\"submit\"
                    class=\"btn red-mint pull-right btn-block\"> {{ 'security.login.submit'|trans }}</button>
        </div>

        <div class=\"form-group\">

        </div>

        <div class=\"forget-password\">
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class=\"forget-form\" action=\"{{ path('back_user_reset_password') }}\" method=\"post\">
        <h3 class=\"form-title\">Mot de passe oublié ?</h3>
        <div class=\"alert alert-danger display-hide\">
            <button class=\"close\" data-close=\"alert\"></button>
            <span>Aucun compte n'est associé à cette adresse e-mail.</span>
        </div>

        <p class=\"form-subtitle\" style=\"padding-left: 0px !important;\">Saisissez votre adresse e-mail pour réinitialiser
            votre mot de passe.
            Vous devrez peut-être consulter votre dossier de spams ou autoriser no-reply@b2b.com.</p>
        <div class=\"form-group\">
            <div class=\"input-icon\">
                <i class=\"fa fa-envelope\"></i>
                <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\"
                       placeholder=\"E-mail\" name=\"email\" id=\"input_email\"/></div>
        </div>
        <div class=\"form-actions\">
            <button type=\"button\" id=\"back-btn\" class=\"btn red btn-outline\">Retour</button>
            <button type=\"submit\" class=\"btn green pull-right btn-forget-form\"> Envoyer</button>
        </div>
        <input type=\"hidden\" value=\"0\" id=\"heck_email\">
    </form>

    <!-- END FORGOT PASSWORD FORM -->

</div>
", "@FOSUser/Security/login_content.html.twig", "/Users/yann/Sites/B2B/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}

<?php

/* StudioSiteBundle:Site:legal_notice.html.twig */
class __TwigTemplate_22460fc488fada2abcbe37c350db6b109dc029e5c62f176b3b9f8e95d37cf642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "StudioSiteBundle:Site:legal_notice.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    
<h1>Mentions légales</h1>



<h2>Lois directement applicables</h2>
<ul>
    <li>Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique :art. 6-III et art. 19</li>
    <li>Loi n° 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés : art. 22 et art. 32</li>
    <li>Code de la consommation : art. L. 121-18</li>
    <li>Code général des impôts : art. 286 ter</li>
    <li>Loi n° 82-652 du 29 juillet 1982 sur la communication audiovisuelle : art. 93-2</li>
</ul>

<h2>Identification du site</h2>
<ul>
    <li>Nom du site : Studio 33</li>
    <li>URL complète du site : http://wp.dev/</li>
</ul>

<h2>Identification du propriétaire du site</h2>
<ul>
    <li>Personne physique nom et prénoms : Baillet Marine</li>
    <li>Personne morale raison sociale et forme sociale : Melle</li>
    <li>Adresse du domicile ou du siège social : 33300 Bordeaux</li>
    <li>Contact mail : marineb40@gmail.com</li>
    <li>Contact téléphonique : 0645484530</li>
</ul>

<h2>Insertion des numéros d'identification</h2>
<ul>
    <li>Numéro et ville d’inscription au RCS ou au Répertoire des métiers : __________________</li>
    <li>Capital social de la société : __________________________________________________</li>
    <li>Numéro d’assujettissement à la TVA (CGI, art. 286 ter) : __________________________</li>
</ul>

<h2>Publication du site</h2>
<ul>
    <li>Nom du directeur de publication : Baillet Marine</li>
    <li>Nom du responsable de rédaction: Baillet Marine</li>
    <li>Webmaster du site : Baillet Marine</li>
</ul>

<h2>Hebergeur du site</h2>
<ul>
    <li>Nom de l’hébergeur : _______________________________________________________</li>
    <li>Sa raison sociale : __________________________________________________________</li>
    <li>Son adresse postale : ________________________________________________________</li>
    <li>Son numéro de téléphone : ___________________________________________________</li>
    <li>Ou, à défaut, une adresse mail : _______________________________________________</li>
</ul>

<h2>Professions réglementées</h2>
<ul>
    <li>Titre professionnel : _________________________________________________________</li>
    <li>Nom de l’ordre ou de l’organisme professionnel auprès duquel elle est inscrite (ex. assureurs, voyagistes,médecin,notaires,avocats,etc.):</li>
    <li>Référence (ex. adresse postale ou lien internet) aux règles professionnelles applicables : </li>
    <li>Pays de délivrance du titre professionnel : _______________________________________</li>
    <li>Nom de l’ordre ou de l’organisme d’inscription : __________________________________</li>
</ul>

<h2>Données personnelles</h2>
<ul>
    <li>Numéro de la déclaration obtenue auprès de la Cnil : </li>
    <li>Nom du responsable du traitement : ____________________________________________</li>
    <li>Coordonnées de contact (mail ou téléphone) pour faire valoir ses droits : ______________</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "StudioSiteBundle:Site:legal_notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "layout.twig" %}*/
/* */
/* */
/* {% block content %}*/
/*     */
/* <h1>Mentions légales</h1>*/
/* */
/* */
/* */
/* <h2>Lois directement applicables</h2>*/
/* <ul>*/
/*     <li>Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique :art. 6-III et art. 19</li>*/
/*     <li>Loi n° 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés : art. 22 et art. 32</li>*/
/*     <li>Code de la consommation : art. L. 121-18</li>*/
/*     <li>Code général des impôts : art. 286 ter</li>*/
/*     <li>Loi n° 82-652 du 29 juillet 1982 sur la communication audiovisuelle : art. 93-2</li>*/
/* </ul>*/
/* */
/* <h2>Identification du site</h2>*/
/* <ul>*/
/*     <li>Nom du site : Studio 33</li>*/
/*     <li>URL complète du site : http://wp.dev/</li>*/
/* </ul>*/
/* */
/* <h2>Identification du propriétaire du site</h2>*/
/* <ul>*/
/*     <li>Personne physique nom et prénoms : Baillet Marine</li>*/
/*     <li>Personne morale raison sociale et forme sociale : Melle</li>*/
/*     <li>Adresse du domicile ou du siège social : 33300 Bordeaux</li>*/
/*     <li>Contact mail : marineb40@gmail.com</li>*/
/*     <li>Contact téléphonique : 0645484530</li>*/
/* </ul>*/
/* */
/* <h2>Insertion des numéros d'identification</h2>*/
/* <ul>*/
/*     <li>Numéro et ville d’inscription au RCS ou au Répertoire des métiers : __________________</li>*/
/*     <li>Capital social de la société : __________________________________________________</li>*/
/*     <li>Numéro d’assujettissement à la TVA (CGI, art. 286 ter) : __________________________</li>*/
/* </ul>*/
/* */
/* <h2>Publication du site</h2>*/
/* <ul>*/
/*     <li>Nom du directeur de publication : Baillet Marine</li>*/
/*     <li>Nom du responsable de rédaction: Baillet Marine</li>*/
/*     <li>Webmaster du site : Baillet Marine</li>*/
/* </ul>*/
/* */
/* <h2>Hebergeur du site</h2>*/
/* <ul>*/
/*     <li>Nom de l’hébergeur : _______________________________________________________</li>*/
/*     <li>Sa raison sociale : __________________________________________________________</li>*/
/*     <li>Son adresse postale : ________________________________________________________</li>*/
/*     <li>Son numéro de téléphone : ___________________________________________________</li>*/
/*     <li>Ou, à défaut, une adresse mail : _______________________________________________</li>*/
/* </ul>*/
/* */
/* <h2>Professions réglementées</h2>*/
/* <ul>*/
/*     <li>Titre professionnel : _________________________________________________________</li>*/
/*     <li>Nom de l’ordre ou de l’organisme professionnel auprès duquel elle est inscrite (ex. assureurs, voyagistes,médecin,notaires,avocats,etc.):</li>*/
/*     <li>Référence (ex. adresse postale ou lien internet) aux règles professionnelles applicables : </li>*/
/*     <li>Pays de délivrance du titre professionnel : _______________________________________</li>*/
/*     <li>Nom de l’ordre ou de l’organisme d’inscription : __________________________________</li>*/
/* </ul>*/
/* */
/* <h2>Données personnelles</h2>*/
/* <ul>*/
/*     <li>Numéro de la déclaration obtenue auprès de la Cnil : </li>*/
/*     <li>Nom du responsable du traitement : ____________________________________________</li>*/
/*     <li>Coordonnées de contact (mail ou téléphone) pour faire valoir ses droits : ______________</li>*/
/* </ul>*/
/* {% endblock %}*/

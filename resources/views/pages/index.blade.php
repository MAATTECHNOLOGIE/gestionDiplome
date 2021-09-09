@extends('layouts.master')

@section('content')

<body class="form-v4">
  <div class="image">
    <img alt="IUA" src="{{ asset('assets_client/images/header-iua-diplome.svg') }}" href="index.html">
  </div>
  <div class="page-content">
    <div class="form-v4-content">
      <div class="form-left">
        <h2>INFORMATION</h2>
        <p class="text-1">
          Bienvenue sur diplome.iua.com Vous avez perdu votre attestation de
          réussite ou votre diplôme ? Pas de panique ! En quelques minutes,
          diplome.iua.com vous permet de télécharger une attestation de
          diplôme.Vous pourrez également permettre à d'autres personnes de
          vérifier l’authenticité de votre diplôme.<br>Consulter la liste des
          diplômes concernés On vous a communiqué une clé de contrôle et vous
          souhaitez vérifier l'obtention d'un diplôme ?
          <br />Vérifiez en un clic qu’une personne a bien obtenu le diplôme
          dont elle vous a indiqué la « clé de contrôle » .
        </p>
      </div>
      <form class="form-detail" action="#" method="post" id="myform">
        <h1>Vérifier une attestation de diplôme</h1>
        <div class="form-group">
        </div>
        <div class="form-row">
          <label for="your_name">Nom du diplômé</label>
          <input type="text" name="your_name" id="your_name" class="input-text" placeholder="Nom du diplômé" />
        </div>
        <div class="form-row">
          <label for="your_key">Clé de contrôle</label>
          <input type="text" name="your_key" id="your_name" class="input-text" placeholder="Clé de contrôle" />
        </div>


        <div class="form-checkbox">
          <label class="container">
            <p>
              J'accepte <a href="#" class="text">les conditions générales d'utilisation</a>
            </p>
            <input type="checkbox" name="checkbox" />
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="form-row-last">
          <input type="submit" name="Vérifier" class="Vérifier" value="Vérifier" />
        </div>
      </form>
    </div>
  </div>
  

@endsection
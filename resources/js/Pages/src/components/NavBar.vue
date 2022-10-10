<template>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
        <div class="container containernav">
            <a class="navbar-brand" href="#"><img class="logoimg" src="../assets/images/logo.png"
              /></a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto mt-1 navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link ms-2 active" aria-current="page" href="#navbar">
                            <p style="font-weight: bold">Accueil</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2" href="#about">
                            <p style="font-weight: bold">à propos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2" href="#services">
                            <p style="font-weight: bold">Services</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2" href="#process">
                            <p style="font-weight: bold">Process</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2" href="#realisations">
                            <p style="font-weight: bold">Réalisations</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link ms-2" href="#TÉMOIGNAGES">
                            <p style="font-weight: bold">TÉMOIGNAGES</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link ms-2 me-4" href="#contact">
                            <p style="font-weight: bold">contact</p>
                        </a>
                    </li>
                </ul>
                <span class="nav-item">
                  <div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-notify modal-warning" role="document">
            <!--Content-->
            <div class="modal-content">
              <!--Header-->
              <div class="modal-header text-center">
                <p class="modal-title text-white w-100 font-weight-bold">COMMENÇONS LE TRAVAIL ENSEMBLE</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text text-white">&times;</span>
                </button>
            </div>

            <!--Body-->
            <form @submit.prevent="saveData()">
                <div class="modal-body">
                    <div class="md-form mb-4">
                        <label data-error="wrong" data-success="right" for="form3">Choisissez-votre formule :</label><br />
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="formule" value="Script" v-model="devis.formule">
                            <label class="form-check-label" for="inlineCheckbox1">Script</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="formule" value="Voix-Off" v-model="devis.formule">
                            <label class="form-check-label" for="inlineCheckbox2">Voix-Off</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="formule" value="Animation" v-model="devis.formule">
                            <label class="form-check-label" for="inlineCheckbox3">Animation</label>
                        </div>
                    </div>

                    <div class="md-form mb-4">
                        <label data-error="wrong" data-success="right" for="form3">Choisissez la langue de votre vidéo :</label><br />
                        <select class="form-control" name="langue" id="exampleFormControlSelect1" v-model="devis.langue">
                      <option value="français">Français</option>
                      <option value="anglais">Anglais</option>
                      <option value="arabe">Arabe</option>
                      <option value="darija">Arabe(Darija)</option>
                    </select>
                    </div>

                    <div class="md-form mb-4">
                        <label data-error="wrong" data-success="right" for="form3">Choisissez le nombre de minutes souhaité :</label><br />
                        <select class="form-control" name="nombredeminutes" v-model="devis.nombredeminutes" id="exampleFormControlSelect1">
                        <option value="1>">Moins d'une minute</option>
                        <option value="1-2">Entre 1 min et 2 min</option>
                        <option value="1<">Plus d'une minute</option>
                      </select>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-6 col-md-6">
                            <label data-error="wrong" data-success="right" for="form3">Nom complet *</label>
                            <input type="text" name="nomcomplet" v-model="devis.nomcomplet" class="form-control" id="name" placeholder="Votre nom complet *" required>
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label data-error="wrong" data-success="right" for="form3">Société</label>
                            <input type="text" class="form-control" name="societe" v-model="devis.societe" id="email" placeholder="Votre société" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-6 col-md-6">
                            <label data-error="wrong" data-success="right" for="form3">Téléphone *</label>
                            <input type="text" name="telephone" v-model="devis.telephone" class="form-control" id="name" placeholder="Votre num de téléphone" required>
                        </div>
                        <div class="col-lg-6 col-md-6 form-group">
                            <label data-error="wrong" data-success="right" for="form3">Email *</label>
                            <input type="text" class="form-control" name="email" v-model="devis.email" id="email" placeholder="Votre email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label data-error="wrong" data-success="right" for="form3">Brief description de votre projet</label>
                        <textarea class="form-control" name="message" v-model="devis.message" rows="5" required></textarea>
                    </div>
                </div>


            <!--Footer-->
            <div class="modal-footer justify-content-right">
                <input type="submit" id="btn" class="btn btn-outline-warning waves-effect" value="C'est parti !"/>
            </div>
            </form>
        </div>
        <!--/.Content-->
        </div>
        </div>


        <div class="devis text-center">
            <a href="" class="btn-navbar text-white btn btn-default btn-rounded" data-toggle="modal" data-target="#orangeModalSubscription">demander un devis</a>
        </div>

        </span>
        </div>
        </div>
    </nav>
</template>

<script>
import $ from 'jquery';
export default {
    name: 'NavBar',
    data() {
        return {
            'devis': {
                'formule': '',
                'langue': '',
                'nombredeminutes': '',
                'nomcomplet': '',
                'societe': '',
                'telephone': '',
                'email': '',
                'message': '',
            }
        }
    },
    methods: {
        saveData() {
            axios.post('/devis/create',this.devis)
            .then(
                (response) => {
                    console.log(response);
                }
            )
            .catch(error =>{
                console.log('There was an error');
            })
        }
    }
}
$(function() {
    $(document).scroll(function() {
        var $nav = $(".navbar");
        var $item = $(".nav-item a p")
        var $itembtn = $(".btn-navbar")
        $nav.toggleClass('bg-navbar', $(this).scrollTop() > 50);
        $item.toggleClass('text-dark', $(this).scrollTop() > 50);
        $itembtn.removeClass('text-white', $(this).scrollTop() > 50);
        $itembtn.toggleClass('text-white', $(this).scrollTop() == 0);
        $itembtn.toggleClass('devisnewclass', $(this).scrollTop() > 50)
    });
});
</script>

<style>
.modal-header {
    background-color: #f3ba44;
}

label {
    margin-bottom: 8px;
}

.modal-body {
    padding: 16px 19px;
}

#btn {
    color: #f3ba44;
    text-decoration: none;
}

#btn:hover {
    color: white;
}

.devis a {
    text-decoration: none;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 14px;
}

.devis {
    text-transform: uppercase;
    font-weight: bold;
    margin-top: 5px;
    border: 2px solid #f3ba44;
}

.waves-effect {
    border: 2px solid;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14.5px;
}
</style>

<template>
    <section id="contact" class="services contactsection">
        <div class="container">
            <div class="section-title2" data-aos="fade-in" data-aos-delay="100">
                <div class="traitvertical"></div>
                <p class="titlecontact">CONTACTEZ-NOUS</p>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-12" data-aos="fade-up">
                    <h1 class="section-heading text-white" >NOUS AIMERIONS RECEVOIR DE VOS NOUVELLES</h1>
                    <p class="section-p section-pcontact">
                        Avez-vous une question à nous poser ? Ou souhaitez-vous créer votre propre vidéo explicative ? Notre équipe est prête à répondre à toutes vos questions.
                    </p>
                </div>
            </div>
            <div class="contact">
                <form @submit.prevent="saveData()">

                    <div class="row m-6">
                        <div class="col-xl-6 form-group">
                            <input type="text" name="nomcomplet" v-model="message.nomcomplet" class="form-control" id="name" placeholder="Nom complet *" required>
                        </div>
                        <div class="col-xl-6 form-group">
                            <input type="text" class="form-control" name="societe" v-model="message.societe" placeholder="Société" required>
                        </div>
                    </div>
                    <div class="row row2">
                        <div class="col-xl-6 form-group">
                            <input type="text" name="telephone" v-model="message.telephone" class="form-control" id="name" placeholder="Téléphone" required>
                        </div>
                        <div class="col-xl-6 form-group">
                            <input type="email" class="form-control" name="email"  v-model="message.email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" v-model="message.message" rows="5" placeholder="Comment pouvons-nous vous aider ? *" required></textarea>
                    </div>
                    <div class="text-center"><button class="submitbtn" type="submit">Envoyer</button></div>
                    <div class="text-center coordonnees">
                        <p class="contactemail text-white">contact@oblivius.ma</p>
                        <p class="contactnumber text-white">(+212) 05 37 77 83 48 / 06 10 15 85 99</p>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
            <hr />
            <p class="realiseavec text-white">Réalisé avec <i class="bi bi-suit-heart-fill "></i> au Maroc. © Afriquindus 2022</p>
            <div class="socialmedia ">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-google"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-vimeo"></i></a>
                <a href=""><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </section>
</template>

<script>
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

export default {
    name: 'Contact',
    data() {
        return {
            'message': {
                'nomcomplet':'',
                'societe':'',
                'telephone':'',
                'email':'',
                'message':''
            }
        }
    },
    methods: {
        saveData(){
            axios.post('/message/create',this.message)
            .then(
                (response) => {
                    console.log(response);
                }
            )
            .catch(error => {
                console.log('There was an error creating the message');
            })
        }
    }
}
</script>

<style scoped>
.submitbtn {
    margin-top: 20px;
}
textarea{
    margin-top: 20px;
}
.titlecontact, .section-pcontact{
    color: black;
    font-weight: 550;
}
::placeholder {
  color : white;
}
.contactnumber{
    margin-bottom: 28px;
}
.socialmedia i{
    color: #f7c200;
}
</style>

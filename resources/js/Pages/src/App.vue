<template>
    <NavBar />
    <HeaderSection />
    <AboutSection />
    <ServiceSection />
    <ProcessSection />
    <RealisationsSection />
    <TestimonialsSection />
    <ClientsSection />
    <ContactSection />

    <!-- End Clients Section -->
</template>

<script>
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import NavBar from "./components/NavBar.vue";
import HeaderSection from "./components/HeaderSection.vue";
import AboutSection from "./components/AboutSection.vue";
import ServiceSection from "./components/ServiceSection.vue";
import ProcessSection from "./components/ProcessSection.vue";
import RealisationsSection from "./components/RealisationsSection.vue";
import TestimonialsSection from "./components/TestimonialsSection.vue";
import ClientsSection from "./components/ClientsSection.vue";
import ContactSection from "./components/ContactSection.vue";
export default {
    name: "App",
    components: {
        NavBar,
        HeaderSection,
        AboutSection,
        ServiceSection,
        ProcessSection,
        RealisationsSection,
        TestimonialsSection,
        ClientsSection,
        ContactSection
    },
};
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
@media (max-width: 1000px) {
    header {
        height: 61vh !important;
    }
    .navbar {
        margin-top: -12px !important;
        height: 90px;
    }
    .navbar-nav {
        display: none;
    }
    .logoimg {
        width: 80px !important;
        height: 80px !important;
    }
    .nav-link p,
    .devis {
        color: #012970 !important;
        margin-top: 7px !important;
    }
    .devis {
        text-align: center !important;
    }
    .navbar-nav {
        height: 68vh !important;
    }
    .navbar-collapse {
        margin-top: 22px;
    }
    .herosection {
        margin-top: 33px;
    }
    .about-video {
        padding: 0% !important;
        margin: 0% !important;
    }
    .about-video iframe {
        width: 100% !important;
    }
    .feature-1 {
        margin-bottom: 100px !important;
        padding: 0%;
    }
    input{
        margin-top: 20px !important;
    }
    .row2{
        margin-top: -22px !important;
    }
    .iconimg{
        width: 140px !important;
    }

    .feature-1 h3 {
        margin-top: 10px !important;
        font-size: 44px !important;
        font-weight: bolder !important;
    }
    .section-heading {
        font-size: 48px !important;
    }
    .section-title p{
        font-size: 29px !important;
    }
    .realiseavec{
        display: flex;
        justify-content: center;
    }
    .socialmedia{
        display: flex;
        justify-content: center;
        margin-top: 20px !important;
    }
    .section-p {
        font-size: 24px !important;
    }
    .feature-1 p {
        margin-top: 30px !important;
        font-size: 24px !important;
        width: 100%;
        margin: 0 auto !important;
    }
    .feature-1 .wrap-icon {
        height: 310px !important;
        width: 310px !important;
    }
    .feature-1 .wrap-icon i {
        font-size: 120px !important;
    }
    .realisationscontainer {
        width: 100% !important;
        padding: 0% !important;
    }
    .img-fluid {
        width: 100% !important;
        margin-bottom: 28px;
    }
    .realisationtitle {
        font-size: 35px !important;
        font-weight: bolder;
        margin-bottom: 29px;
        line-height: 33px !important;
    }
    .realisationp {
        font-size: 24px !important;
        margin-bottom: 33px;
    }
    .carousel {
        height: 610px !important;
    }
    .containercarousel{
        height: 610px !important;
    }
    .carousel-item{
        height: 240px !important;
    }
}

.test {
    width: 100%;
    height: 300px;
    background-color: #012970;
}
@media (max-width: 800px) {
    .carousel {
        height: 650px !important;
    }
    .containercarousel{
        height: 650px !important;
    }
    .carousel-item{
        height: 330px !important;
    }
}
.carousel {
    background-image: linear-gradient(rgba(219, 0, 56, 0.93), rgba(219, 0, 56, 0.91)), url("https://www.realease-capital.fr/wp-content/uploads/2017/03/visuel-erreur-pas-commetre-062020.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: left top;
    height: 400px;
}

/* Since positioning the image, we need to help out the caption */

.carousel-caption {
    bottom: 3rem;
    z-index: 10;
}

.carousel-item {
    height: 200px;
}

.carousel-item>img {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    height: 32rem;
}

nav {
    position: inherit;
    top: 0%;
    height: 77px;
}

.scrolled {
    background-color: #012970;
}

.navbar-light {
    background-color: #519dd9;
}

.bg-navbar {
    background: #0a9aff;
}

.navbar-nav {
    margin-right: 33px;
    height: 33px;
}

.nav-item {
    margin-top: -2px;
}

.nav-item a p {
    color: white;
    font-size: 14px;
    text-transform: uppercase;
}

.colorgray {
    color: gray;
}

.nav-item a p:hover {
    color: #f7c200;
}

.devisnewclass {
    border: 2px solid black;
    border-radius: 0%;
    color: white;
}

.logoimg {
    width: 90px;
    height: 80px;
}

header {
    position: relative;
    background-color: black;
    height: 89.9vh;
    width: 100%;
    overflow: hidden;
}

header video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: 0;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}

header .container {
    position: relative;
    z-index: 2;
}

header .overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-image: linear-gradient(rgba(10, 154, 255, 0.94), rgba(219, 0, 56, 0.90));
    opacity: 0.8;
    z-index: 1;
}

.herosection {
    opacity: 1;
}

.herotitle {
    text-transform: uppercase;
}

.herop {
    width: 50%;
    margin: 0 auto;
    font-size: 13px;
    font-weight: 500;
}

.herobtn {
    text-transform: uppercase;
    margin-top: 18px;
    border: 3px solid #f7c200;
    border-radius: 0%;
    color: white;
    font-weight: bolder;
    font-size: 13px;
    padding: 12px;
}

.about {
    background-image: url("header-background.jpg");
    background-size: cover;
    background-position: center right;
}

.about .content {
    background-color: #f6f9ff;
    padding: 40px;
}

.about h3 {
    font-size: 14px;
    font-weight: 700;
    color: #519dd9;
    text-transform: uppercase;
}

.about h2 {
    font-size: 24px;
    font-weight: 700;
    color: #012970;
}

.about p {
    margin: 15px 0 30px 0;
    line-height: 24px;
}

.about .btn-read-more {
    line-height: 0;
    padding: 15px 40px;
    border-radius: 4px;
    transition: 0.5s;
    color: #fff;
    background: #519dd9;
    box-shadow: 0px 5px 25px rgba(65, 84, 241, 0.3);
}

.about .btn-read-more span {
    font-family: "Nunito", sans-serif;
    font-weight: 600;
    font-size: 16px;
    letter-spacing: 1px;
}

.about .btn-read-more i {
    margin-left: 5px;
    font-size: 18px;
    transition: 0.3s;
}

.about .btn-read-more:hover i {
    transform: translateX(5px);
}

.trait {
    width: 80px;
    height: 4.5px;
    background-color: #db0038;
    margin-top: 6.6px;
    margin-left: -83px;
}

.abouttitle {
    display: flex;
}

.texttitleabout {
    margin-left: 6px;
    text-transform: uppercase;
    font-weight: lighter;
    color: black;
}

.about-video iframe {
    width: 80%;
    height: 50vh;
    text-align: center;
    margin: 0 auto;
    display: flex;
    justify-content: center;
}

.aboutbtn {
    border: 3.5px solid #f7c200;
    border-radius: 0%;
    padding: 9px;
    font-weight: 900;
    text-transform: uppercase;
    font-size: 14px;
    color: #f7c200;
    text-align: left;
}

section {
    padding: 60px 0;
    overflow: hidden;
}

.section-bg {
    background-color: #f4f9fc;
}

.about .traitvertical {
    width: 3px;
    height: 44px;
    background-color: #db0038;
    margin: 0 auto;
    top: 66px;
    position: relative;
    margin-top: -66px;
}

.section-title .traitvertical {
    text-align: center;
    width: 3px;
    height: 44px;
    background-color: #db0038;
    margin: 0 auto;
    margin-top: -60px;
}

.section-title2 .traitvertical {
    text-align: center;
    width: 3px;
    height: 44px;
    background-color: #db0038;
    margin: 0 auto;
    margin-top: -60px;
}

.services .traitvertical2 {
    width: 3px;
    height: 44px;
    background-color: #db0038;
    margin: 0 auto;
    top: 66px;
    position: relative;
    margin-top: -50px;
}

.process .traitvertical2 {
    width: 3px;
    height: 44px;
    background-color: #db0038;
    margin: 0 auto;
    position: relative;
    margin-top: -66px;
}

.process .traitvertical3 {
    width: 3px;
    height: 44px;
    background-color: #db0038;
    margin: 0 auto;
    position: relative;
    top: 60px;
}

.clients .traitvertical3 {
    width: 3px;
    height: 44px;
    background-color: #db0038;
    margin: 0 auto;
    position: relative;
    top: 35px;
}

.section-title p {
    text-transform: uppercase;
    font-size: 15px;
    text-align: center;
    margin-top: 20px;
    color: black;
    opacity: 68%;
}

.section-title2 p {
    text-transform: uppercase;
    font-size: 15px;
    text-align: center;
    margin-top: 20px;
    opacity: 100%;
    font-weight: light;
    font-family: open Sans;
    opacity: 88%;
}

.feature-1 .wrap-icon {
    margin: 0 auto;
    height: 100px;
    width: 100px;
    border-radius: 50%;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 0 15px 22px 0 rgba(0, 0, 0, 0.27);
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.feature-1 .wrap-icon.icon-1 {
    background: #e4e4e4;
}

.feature-1 .wrap-icon i {
    font-size: 38px;
    line-height: 0;
    color: #19a5fe;
}

.feature-1 h3 {
    font-size: 18px;
}

.feature-1 p {
    color: black;
    font-weight: light;
    font-size: 12px;
}

.section-heading {
    width: 100%;
    font-weight: 700;
    color: black;
    font-family: 'Roboto';
    text-transform: uppercase;
}

.section-p {
    font-size: 13px;
}

.services {
    background-color: #f5f5f5;
}

.clients {
    padding: 33px 100px;
    text-align: center;
}

.clients img {
    max-width: 75%;
    transition: all 0.4s ease-in-out;
    display: inline-block;
    padding: 15px 0;
}

.carousel-caption {
    color: white;
}

.clients img:hover {
    filter: none;
    transform: scale(1.15);
}

.contact {
    width: 75%;
    margin: 0 auto;
    margin-top: -42px;
}

.contactsection {
    background-image: linear-gradient(rgba(10, 154, 255, 0.91), rgba(219, 0, 56, 0.87)), url('https://www.itespresso.fr/wp-content/uploads/2019/12/img-itespresso-684x513.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    backdrop-filter: center left;
}
.socialmedia i:hover{
    color: white;
}
.submitbtn {
    font-weight: bolder;
    padding: 8px 28px;
    text-transform: uppercase;
    font-size: 14px;
    border: 2.8px solid #f7c200;
    background: rgba(0, 0, 0, 0);
}

.form-control {
    background: rgba(0, 0, 0, 0);
    border-bottom: 1.5px solid #f7c200;
    border-top: 0;
    border-left: 0;
    border-right: 0;
}

.submitbtn:hover {
    background-color: #f7c200;
    color: white;
}

.coordonnees {
    margin-top: 16px;
    margin-bottom: -14px;
}

.contactemail {
    font-weight: bolder;
    font-size: 16px;
    font-family: 'Poppins', open Sans;
}
.iconimg{
        width: 58px;
        margin-top: 2px;
    }
.contactnumber {
    font-size: 20px;
    font-weight: bolder;
    margin-top: -5px;
    font-family: 'Poppins', open Sans;
}

.realisations {
    background-color: #f5f5f5;
}

.realisationscontainer {
    width: 88%;
    margin: 0 auto;
    margin-top: -15px;
}

.realisationtitle {
    font-family: 'Poppins', sans-serif;
    font-weight: light;
    font-size: 18px;
    margin-top: 8px;
}

.realisationtitle a {
    text-decoration: none;
    color: #243952;
}

.realisationp {
    font-family: 'Open Sans', sans-serif;
    margin-top: -15px;
}

.gaptitletestimonial {
    height: 20px;
}

.containercarousel {
    margin-top: 35px;
    height: 200px;
}

.titlecarousel {
    margin: 0 auto;
    display: flex;
}

.quote {
    display: flex;
    margin: 0 auto;
    justify-content: center;
}

.quoteimg {
    width: 40px;
    height: 40px;
    margin: 0 40px;
}

.textquote {
    font-family: open Sans;
    font-weight: normal;
    font-size: 15px;
    color: #fff;
    text-align: center;
    float: left;
    line-height: 19px;
}

.personne {
    font-family: 'Poppins', open Sans;
    font-size: 14px;
    text-align: center;
    text-transform: uppercase;
    display: inherit;
    margin-bottom: 9px !important;
}

.societe {
    font-family: 'Open Sans', sans-serif;
}

.footer {
    margin-top: -30px;
    padding: 0;
    width: 70%;
    text-align: center;
    margin: 0 auto;
}

.bi-suit-heart-fill {
    color: red;
}

.realiseavec {
    text-align: left;
    font-family: 'Poppins', open Sans;
    font-size: 12px;
    font-weight: light;
}

hr {
    color: white;
    border: 0.6px solid white;
}

.socialmedia {
    text-align: right;
    margin-top: -41px;
}

.socialmedia i {
    margin: 0 9px;
    color: white;
}
</style>

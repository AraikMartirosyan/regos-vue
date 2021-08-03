<template>
  <div class="main-container">
    <Navbar NavbarStyle="NavbarStyle" />

    <HeroBanner />

    <About AboutStyle="about-style-2" />

    <BestappTwo />

    <FeatureTwo />

    <screenShots />

    <block_6 />

    <Footer FooterStyle="footer-style-2" />
  </div>
</template>


<script>
import Navbar from "../components/Navbar";
import HeroBanner from "../components/HeroBanner";
import About from "../components/About";
import BestappTwo from "../components/BestappTwo";
import FeatureTwo from "../components/FeatureTwo";
import Footer from "../components/Footer";
import screenShots from "../components/screenShots";
import block_6 from "../components/block-6";

export default {
  name: "app",
  components: {
    Navbar,
    HeroBanner,
    About,
    BestappTwo,
    FeatureTwo,
    screenShots,
    block_6,
    Footer,
  },
  
};
</script>


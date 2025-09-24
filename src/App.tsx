import React from 'react';
import Header from './components/Header';
import Hero from './components/Hero';
import Metrics from './components/Metrics';
import About from './components/About';
import Services from './components/Services';
import WhyChooseUs from './components/WhyChooseUs';
import Contact from './components/Contact';
import Footer from './components/Footer';
import Team from './components/Team';

function App() {
  return (
    <div className="min-h-screen bg-white">
      <Header />
      <Hero />
      <Metrics />
      <About />
      <Services />
      <WhyChooseUs />
       <Team />
      <Contact />
      <Footer />
    </div>
  );
}

export default App;
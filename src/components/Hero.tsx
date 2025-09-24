import React, { useState, useEffect } from 'react';
import { ArrowRight, Heart, Stethoscope, Shield } from 'lucide-react';

import img1 from '../assets/AAAA.00_00_29_18.Still003.png';
import img2 from '../assets/AAAA.00_00_20_17.Still002.png';
import img3 from '../assets/DSC_0284.jpg';
import img4 from '../assets/DSC_0367.jpg';

const Hero = () => {
  const [currentSlide, setCurrentSlide] = useState(0);

  const backgroundImages = ['https://images.pexels.com/photos/5407212/pexels-photo-5407212.jpeg', 'https://images.pexels.com/photos/5327914/pexels-photo-5327914.jpeg', 'https://images.pexels.com/photos/5327915/pexels-photo-5327915.jpeg', 'https://images.pexels.com/photos/4989172/pexels-photo-4989172.jpeg']; // Use imported variables

  useEffect(() => {
    const interval = setInterval(() => {
      setCurrentSlide((prev) => (prev + 1) % backgroundImages.length);
    }, 5000); // Change slide every 5 seconds

    return () => clearInterval(interval);
  }, [backgroundImages.length]);

  return (
    <section id="home" className="pt-20 relative overflow-hidden min-h-screen flex items-center">
      {/* Sliding Background Images */}
      <div className="absolute inset-0">
        {backgroundImages.map((image, index) => (
          <div
            key={index}
            className={`absolute inset-0 transition-opacity duration-1000 ${
              index === currentSlide ? 'opacity-100' : 'opacity-0'
            }`}
          >
            <img
              src={image}
              alt={`Hospital background ${index + 1}`}
              className="w-full h-full object-cover"
            />
            <div className="absolute inset-0 bg-black bg-opacity-50"></div>
          </div>
        ))}
      </div>

      {/* Gradient Overlay */}
      <div className="absolute inset-0 bg-gradient-to-r from-blue-900/80 via-blue-800/60 to-transparent"></div>
      
      {/* Medical Icons Pattern */}
      <div className="absolute inset-0 opacity-10">
        <div className="absolute top-32 left-1/4 text-white">
          <Heart className="h-8 w-8" />
        </div>
        <div className="absolute top-60 right-1/3 text-white">
          <Stethoscope className="h-6 w-6" />
        </div>
        <div className="absolute bottom-32 left-1/3 text-white">
          <Shield className="h-7 w-7" />
        </div>
      </div>
      
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20 relative z-10">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div>
            <h1 className="text-4xl lg:text-6xl font-bold text-white leading-tight">
              Advanced <span className="text-blue-400">Telemedicine</span> Solutions
            </h1>
            <p className="mt-6 text-lg text-gray-200 leading-relaxed">
              Experience healthcare from the comfort of your home with our comprehensive telemedicine platform. 
              Connect with top medical professionals, get prescriptions, and receive quality care 
              anytime, anywhere in Nigeria.
            </p>
            
            <div className="mt-8">
              <a
                href="#signup"
                className="inline-flex items-center justify-center px-8 py-3.5 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors duration-200 text-lg"
              >
                Sign Up Now
                <ArrowRight className="ml-2 h-5 w-5" />
              </a>
            </div>

          </div>

          <div className="relative lg:block hidden">
            <div className="absolute inset-0 bg-gradient-to-r from-blue-400 to-emerald-400 rounded-2xl transform rotate-3 opacity-20"></div>
            <div className="relative bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
              <div className="text-center text-white">
                <Heart className="h-16 w-16 text-blue-400 mx-auto mb-4" />
                <h3 className="text-2xl font-bold mb-2">24/7 Virtual Care</h3>
                <p className="text-gray-200">
                  Connect with doctors anytime, anywhere through our secure telemedicine platform
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* Slide Indicators */}
      <div className="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
        {backgroundImages.map((_, index) => (
          <button
            key={index}
            onClick={() => setCurrentSlide(index)}
            className={`w-3 h-3 rounded-full transition-colors duration-200 ${
              index === currentSlide ? 'bg-blue-400' : 'bg-white/50'
            }`}
          />
        ))}
      </div>
    </section>
  );
};

export default Hero;
import React, { useState } from 'react';
import { Menu, X, Heart } from 'lucide-react';
import logo from '../logo.png'; 

const Header = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const navigation = [
    { name: 'Home', href: '#home' },
    { name: 'About', href: '#about' },
    { name: 'Services', href: '#services' },
    { name: 'Contact', href: '#contact' },
  ];

  return (
    <header className= "bg-white shadow-sm fixed w-full top-0 z-50" >
    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" >
      <div className="flex justify-between items-center py-4" >
        <div className="flex items-center" >
        
            <img 
    src={logo}
  alt = "Sahad Hospitals"
  className = "h-[75px] w-[160px]"
    />
    </div>


  {/* Desktop Navigation */ }
  <nav className="hidden md:flex space-x-8" >
  {
    navigation.map((item) => (
      <a
                key= { item.name }
                href = { item.href }
                className = "text-gray-700 hover:text-green-600 px-3 py-2 text-sm font-medium transition-colors duration-200"
      >
      { item.name }
      </a>
    ))
  }
    </nav>

    <div className="hidden md:flex items-center space-x-3">
      <a
        href="https://app.medicareemedicine.com/login"
        className="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200 border border-gray-300 rounded-lg hover:border-blue-400"
      >
        Log In
      </a>
      <a
        href="/signup"
        className="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors duration-200"
      >
        Sign Up
      </a>
    </div>

  {/* Mobile menu button */ }
  <div className="md:hidden" >
    <button
              onClick={ () => setIsMenuOpen(!isMenuOpen) }
  className = "text-gray-700 hover:text-green-600"
    >
    { isMenuOpen?<X className = "h-6 w-6" /> : <Menu className="h-6 w-6" />}
</button>
  </div>
  </div>

{/* Mobile Navigation */ }
{
  isMenuOpen && (
    <div className="md:hidden" >
      <div className="px-2 pt-2 pb-3 space-y-1 bg-white border-t" >
      {
        navigation.map((item) => (
          <a
                  key= { item.name }
                  href = { item.href }
                  className = "text-gray-700 hover:text-green-600 block px-3 py-2 text-base font-medium"
                  onClick = {() => setIsMenuOpen(false)}
        >
        { item.name }
        </a>
              ))
}
<a
                href="/signup"
              className="bg-blue-600 text-white block px-3 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors duration-200 mt-4"
  >
  Sign Up
    </a>
    </div>
    </div>
        )}
</div>
  </header>
  );
};

export default Header;
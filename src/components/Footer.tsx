import { Mail, MapPin, Facebook, Twitter, Instagram, Linkedin, Phone } from 'lucide-react';

const Footer = () => {
  const socialLinks = [
    { icon: <Facebook className="h-5 w-5" />, href: '#', label: 'Facebook' },
    { icon: <Twitter className="h-5 w-5" />, href: '#', label: 'Twitter' },
    { icon: <Instagram className="h-5 w-5" />, href: '#', label: 'Instagram' },
    { icon: <Linkedin className="h-5 w-5" />, href: '#', label: 'LinkedIn' }
  ];

  const quickLinks = [
    { name: 'About Us', href: '#about' },
    { name: 'Our Services', href: '#services' },
    { name: 'Emergency Care', href: '#contact' },
    { name: 'Appointments', href: '#contact' }
  ];

  const services = [
    { name: 'Cardiology', href: '#services' },
    { name: 'Neurology', href: '#services' },
    { name: 'Orthopedics', href: '#services' },
    { name: 'Pediatrics', href: '#services' }
  ];

  return (
    <footer className="bg-gray-900 text-white border-t border-gray-800">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {/* Hospital Info */}
          <div>
            <div className="flex items-center mb-4">
              <div className="bg-blue-600 p-2 rounded-lg mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" className="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                </svg>
              </div>
              <div>
                <h3 className="text-2xl font-bold bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">MediCare</h3>
                <p className="text-sm text-blue-300 mt-1">24/7 Telehealth Services</p>
              </div>
            </div>
            <p className="text-gray-300 text-sm leading-relaxed mb-4">
              Your trusted partner in accessible healthcare. We provide exceptional 
              medical care through our secure telemedicine platform, connecting you 
              with top healthcare professionals 24/7.
            </p>
            <div className="flex space-x-4">
              {socialLinks.map((link, index) => (
                <a
                  key={index}
                  href={link.href}
                  className="text-gray-400 hover:text-blue-400 transition-colors duration-200"
                  aria-label={link.label}
                >
                  {link.icon}
                </a>
              ))}
            </div>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="text-lg font-semibold mb-4 text-white">Quick Links</h4>
            <ul className="space-y-3">
              {quickLinks.map((link, index) => (
                <li key={index}>
                  <a
                    href={link.href}
                    className="text-gray-300 hover:text-blue-300 transition-colors duration-200 text-sm flex items-center group"
                  >
                    <span className="w-1 h-1 bg-blue-400 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                    {link.name}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Services */}
          <div>
            <h4 className="text-lg font-semibold mb-4 text-white">Our Services</h4>
            <ul className="space-y-3">
              {services.map((service, index) => (
                <li key={index}>
                  <a
                    href={service.href}
                    className="text-gray-300 hover:text-blue-300 transition-colors duration-200 text-sm flex items-center group"
                  >
                    <span className="w-1 h-1 bg-blue-400 rounded-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                    {service.name}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Contact Info */}
          <div>
            <h4 className="text-lg font-semibold mb-4 text-white">Contact Us</h4>
            <ul className="space-y-4">
              <li className="flex items-start">
                <div className="bg-blue-600/20 p-1.5 rounded-lg mr-3">
                  <MapPin className="h-4 w-4 text-blue-300" />
                </div>
                <div>
                  <p className="text-sm text-blue-100 mb-1">Location</p>
                  <p className="text-gray-300 text-sm">123 Health St, MedCity</p>
                </div>
              </li>
              <li className="flex items-start">
                <div className="bg-blue-600/20 p-1.5 rounded-lg mr-3">
                  <Mail className="h-4 w-4 text-blue-300" />
                </div>
                <div>
                  <p className="text-sm text-blue-100 mb-1">Email Us</p>
                  <a href="mailto:support@medicare.health" className="text-gray-300 hover:text-blue-300 text-sm transition-colors">support@medicare.health</a>
                </div>
              </li>
              <li className="flex items-start">
                <div className="bg-blue-600/20 p-1.5 rounded-lg mr-3">
                  <Phone className="h-4 w-4 text-blue-300" />
                </div>
                <div>
                  <p className="text-sm text-blue-100 mb-1">24/7 Emergency</p>
                  <a href="tel:+18005550199" className="text-gray-300 hover:text-blue-300 text-sm transition-colors">+1 (800) 555-0199</a>
                </div>
              </li>
            </ul>
          </div>
          <div className="mt-4 p-3 bg-blue-900 rounded-lg">
            <p className="text-blue-200 text-xs font-medium">
              Emergency: 24/7 Available
            </p>
          </div>
        </div>

        <div className="border-t border-gray-800 mt-8 pt-8">
          <div className="flex flex-col md:flex-row justify-between items-center">
            <p className="text-gray-400 text-sm">
              © 2025 MediCare . All rights reserved.
            </p>
            <div className="flex space-x-6 mt-4 md:mt-0">
              <a href="#" className="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
              <a href="#" className="text-gray-400 hover:text-white text-sm">Terms of Service</a>
              <a href="#" className="text-gray-400 hover:text-white text-sm">Sitemap</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
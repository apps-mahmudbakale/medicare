import React, { useEffect, useRef, useState } from 'react';
import { Shield, Smartphone, Clock, Video, Phone, Mail, MapPin, Clock as ClockIcon } from 'lucide-react';

// Simple fade-in animation component
const FadeIn = ({ children, delay = 0, className = '' }: { 
  children: React.ReactNode; 
  delay?: number;
  className?: string;
}) => {
  const [isVisible, setIsVisible] = useState(false);
  const ref = useRef<HTMLDivElement>(null);

  useEffect(() => {
    if (!ref.current) return;

    const observer = new IntersectionObserver(
      ([entry]) => {
        if (entry.isIntersecting) {
          setIsVisible(true);
          observer.unobserve(entry.target);
        }
      },
      { threshold: 0.1 }
    );

    observer.observe(ref.current);
    return () => observer.disconnect();
  }, []);

  return (
    <div
      ref={ref}
      className={`transition-all duration-700 ease-out ${className} ${
        isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'
      }`}
      style={{ transitionDelay: `${delay}ms` }}
    >
      {children}
    </div>
  );
};

// Simple hover effect component
const HoverEffect = ({ children, className = '' }: { 
  children: React.ReactNode; 
  className?: string;
}) => {
  return (
    <div className={`transition-transform duration-300 hover:-translate-y-1 ${className}`}>
      {children}
    </div>
  );
};

const About = () => {
  const features = [
    {
      icon: <Shield className="h-6 w-6" />,
      title: 'Secure & Private',
      description: 'HIPAA-compliant platform ensuring your health data remains confidential and secure'
    },
    {
      icon: <Smartphone className="h-6 w-6" />,
      title: 'Easy Access',
      description: 'Connect with healthcare providers from your smartphone, tablet, or computer'
    },
    {
      icon: <Clock className="h-6 w-6" />,
      title: '24/7 Availability',
      description: 'Access to healthcare professionals around the clock, whenever you need it'
    },
    {
      icon: <Video className="h-6 w-6" />,
      title: 'Virtual Consultations',
      description: 'Face-to-face video consultations with board-certified physicians'
    }
  ];

  return (
    <section id="about" className="relative py-16 lg:py-24 overflow-hidden bg-gradient-to-br from-blue-50 to-blue-100">
      {/* Background pattern */}
      <div className="absolute inset-0 opacity-30 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8cmVjdCB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIGZpbGw9IiNlZmY1ZmYiIGZpbGwtb3BhY2l0eT0iMC4yIi8+Cjwvc3ZnPg==')]"></div>
      
      {/* Animated circles */}
      <div className="absolute top-1/4 -left-20 w-64 h-64 bg-blue-200 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-float-slow"></div>
      <div className="absolute bottom-1/4 -right-20 w-72 h-72 bg-blue-100 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-float-slower"></div>

      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        
        {/* Section Heading */}
        <FadeIn className="text-center mb-16">
          <span className="inline-block px-4 py-1.5 text-sm font-medium text-blue-700 bg-blue-100 rounded-full mb-4">
            Our Mission
          </span>
          <h2 className="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
            About <span className="text-blue-600">MediCare</span> Telehealth
          </h2>
          <p className="text-lg text-gray-700 max-w-3xl mx-auto text-center">
            MediCare is a leading telemedicine platform bringing quality healthcare to your fingertips. 
            We connect patients with experienced healthcare professionals through secure, convenient, 
            and affordable virtual consultations, making healthcare accessible to everyone, everywhere.
          </p>
        </FadeIn>

        {/* Vision & Mission Section */}
        <FadeIn className="mb-12">
          <div className="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div className="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-blue-50 shadow-sm">
              <h3 className="text-xl font-bold text-blue-700 mb-2">VISION</h3>
              <p className="text-gray-700">
                Our vision is to revolutionize healthcare by providing accessible, high-quality medical services to individuals everywhere through innovative technology.
              </p>
            </div>
            <div className="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-blue-50 shadow-sm">
              <h3 className="text-xl font-bold text-blue-700 mb-2">MISSION</h3>
              <p className="text-gray-700">
                Our mission is to deliver convenient, patient-centered healthcare through cutting-edge telemedicine technology.
              </p>
            </div>
          </div>
        </FadeIn>

        {/* Features Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          {features.map((feature, index) => (
            <FadeIn key={index} delay={index * 100}>
              <HoverEffect>
                <div className="text-center p-6 rounded-2xl bg-white/80 backdrop-blur-sm border border-blue-50 shadow-sm hover:shadow-md transition-all duration-300">
                  <div className="inline-flex items-center justify-center w-14 h-14 bg-blue-50 text-blue-600 rounded-xl mb-4">
                    {React.cloneElement(feature.icon, { className: 'h-6 w-6' })}
                  </div>
                  <h3 className="text-lg font-semibold text-gray-900 mb-2">
                    {feature.title}
                  </h3>
                  <p className="text-gray-700 text-sm leading-relaxed">
                    {feature.description}
                  </p>
                </div>
              </HoverEffect>
            </FadeIn>
          ))}
        </div>

        {/* Detailed About Section */}
        <FadeIn className="mt-20">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div>
              <div className="relative bg-white/80 backdrop-blur-sm p-8 rounded-2xl border border-blue-50 shadow-sm">
                <div className="absolute -top-6 -left-6 w-24 h-24 bg-blue-100 rounded-full opacity-30 -z-10"></div>
                <div className="absolute -bottom-8 -right-8 w-32 h-32 bg-blue-100 rounded-full opacity-20 -z-10"></div>
                
                <h3 className="text-2xl font-bold text-gray-900 mb-6">
                  Revolutionizing <span className="text-blue-600">Healthcare</span> Access
                </h3>
                <p className="text-gray-700 mb-4 text-justify">
                  At MediCare, we believe that quality healthcare should be accessible to everyone, 
                  regardless of location or circumstance. Our telemedicine platform breaks down 
                  traditional barriers to healthcare by connecting patients with licensed 
                  healthcare providers through secure video, phone, or chat consultations.
                </p>
                <p className="text-gray-700 mb-4 text-justify">
                  Our network includes board-certified physicians, specialists, and healthcare 
                  professionals across various medical fields. Whether you need a routine check-up, 
                  specialist consultation, or follow-up care, our platform makes it easy to get 
                  the care you need without the wait times or travel.
                </p>
                <div className="mt-6 bg-blue-50/60 rounded-xl p-4 border border-blue-100">
                  <p className="text-blue-700 font-semibold mb-2">
                    With Medicare Telemedicine, you don’t have to wait in long hospital queues or travel far for care. We bring the doctor’s office into your pocket.
                  </p>
                  <p className="text-blue-900 font-bold text-lg">
                    Medicare Telemedicine – Your Health. Anywhere. Anytime.
                  </p>
                </div>
              </div>
            </div>
            
            <div className="relative">
              <FadeIn delay={100}>
                <div className="space-y-6">
                  <div className="relative overflow-hidden rounded-2xl shadow-xl">
                    <img
                      src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                      alt="Doctor video consultation"
                      className="w-full h-auto rounded-2xl transform hover:scale-105 transition-transform duration-700"
                    />
                    <div className="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent rounded-2xl"></div>
                    <div className="absolute bottom-0 left-0 right-0 p-6 text-white">
                      <h3 className="text-2xl font-bold mb-2">Your Health, Our Priority</h3>
                      <p className="text-blue-100">Compassionate care from the comfort of your home</p>
                    </div>
                    <div className="absolute bottom-16 left-0 right-0 p-6">
                      <ul className="space-y-2">
                        <li className="flex items-start text-white">
                          <span className="text-green-300 mr-2">✓</span>
                          <span>Secure and private consultations</span>
                        </li>
                        <li className="flex items-start text-white">
                          <span className="text-green-300 mr-2">✓</span>
                          <span>Prescriptions sent directly to your pharmacy</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <HoverEffect>
                      <div className="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-blue-50 shadow-sm hover:shadow-md transition-all duration-300 h-full">
                        <div className="flex items-center mb-3">
                          <div className="p-2 bg-blue-100 rounded-lg mr-4">
                            <Shield className="h-5 w-5 text-blue-600" />
                          </div>
                          <h4 className="font-bold text-gray-900">Home Care</h4>
                        </div>
                        <p className="text-sm text-gray-700">Immediate medical attention for urgent health concerns, 24/7 availability.</p>
                      </div>
                    </HoverEffect>
                    
                    <HoverEffect>
                      <div className="bg-white/80 backdrop-blur-sm p-6 rounded-2xl border border-blue-50 shadow-sm hover:shadow-md transition-all duration-300 h-full">
                        <div className="flex items-center mb-3">
                          <div className="p-2 bg-blue-100 rounded-lg mr-4">
                            <Video className="h-5 w-5 text-blue-600" />
                          </div>
                          <h4 className="font-bold text-gray-900">Virtual Visits</h4>
                        </div>
                        <p className="text-sm text-gray-700">Consult with our doctors from anywhere, anytime through secure video calls.</p>
                      </div>
                    </HoverEffect>
                  </div>

                  {/* Contact Information Box */}
                  <FadeIn delay={200}>
                    <div className="bg-gradient-to-br from-blue-600 to-blue-700 text-white p-6 rounded-2xl shadow-xl">
                      <h4 className="font-bold text-xl mb-4 flex items-center">
                        <span className="w-10 h-10 inline-flex items-center justify-center bg-white/20 rounded-full mr-3">
                          <Clock className="h-5 w-5" />
                        </span>
                        24/7 Support
                      </h4>
                      
                      <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div className="flex items-start">
                          <div className="flex-shrink-0 mt-1">
                            <Phone className="h-5 w-5 text-blue-200" />
                          </div>
                          <div className="ml-3">
                            <p className="text-sm font-medium text-blue-100">24/7 Emergency</p>
                            <p className="text-base font-medium text-white">+1 (800) 555-0199</p>
                          </div>
                        </div>
                        <div className="flex items-start">
                          <div className="flex-shrink-0 mt-1">
                            <Mail className="h-5 w-5 text-blue-200" />
                          </div>
                          <div className="ml-3">
                            <p className="text-sm font-medium text-blue-100">Email Us</p>
                            <p className="text-base font-medium text-white">support@medicare.health</p>
                          </div>
                        </div>
                        <div className="flex items-start">
                          <div className="flex-shrink-0 mt-1">
                            <ClockIcon className="h-5 w-5 text-blue-200" />
                          </div>
                          <div className="ml-3">
                            <p className="text-sm font-medium text-blue-100">Clinic Hours</p>
                            <p className="text-base font-medium text-white">Mon-Sun: 24/7</p>
                          </div>
                        </div>
                        <div className="flex items-start">
                          <div className="flex-shrink-0 mt-1">
                            <MapPin className="h-5 w-5 text-blue-200" />
                          </div>
                          <div className="ml-3">
                            <p className="text-sm font-medium text-blue-100">Location</p>
                            <p className="text-base font-medium text-white">123 Health St, MedCity</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </FadeIn>
                </div>
              </FadeIn>
            </div>
          </div>
        </FadeIn>
      </div>
    </section>
  );
};

export default About;

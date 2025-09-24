import React from 'react';
import { 
  ShieldCheck,
  Clock,
  Smartphone,
  Zap,
  UserCheck,
  HeartPulse,
  Lock,
  Award,
  ThumbsUp,
  Headphones
} from 'lucide-react';

const WhyChooseUs = () => {
  const features = [
    {
      icon: <ShieldCheck className="h-8 w-8" />,
      title: 'HIPAA-Compliant Platform',
      description: 'Your health information is protected with bank-level encryption and strict privacy controls.'
    },
    {
      icon: <Clock className="h-8 w-8" />,
      title: '24/7 On-Demand Care',
      description: 'Access healthcare professionals anytime, anywhere - no more waiting for appointments.'
    },
    {
      icon: <Smartphone className="h-8 w-8" />,
      title: 'Easy-to-Use Technology',
      description: 'Our intuitive platform works seamlessly across all your devices with just a few taps.'
    },
    {
      icon: <Zap className="h-8 w-8" />,
      title: 'Rapid Response Times',
      description: 'Connect with a healthcare provider in minutes, not hours or days.'
    },
    {
      icon: <UserCheck className="h-8 w-8" />,
      title: 'Board-Certified Specialists',
      description: 'Consult with experienced, licensed physicians and specialists across various fields.'
    },
    {
      icon: <HeartPulse className="h-8 w-8" />,
      title: 'Continuity of Care',
      description: 'Build lasting relationships with providers who get to know you and your health history.'
    },
    {
      icon: <Lock className="h-8 w-8" />,
      title: 'Secure Messaging',
      description: 'Communicate with your doctor safely through our encrypted messaging system.'
    },
    {
      icon: <Award className="h-8 w-8" />,
      title: 'Proven Results',
      description: 'Join thousands of satisfied patients who trust us with their healthcare needs.'
    }
  ];

  return (
    <section id="why-choose-us" className="py-16 lg:py-24 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
            Why Choose MediCare Telehealth?
          </h2>
          <p className="text-lg text-gray-600 max-w-3xl mx-auto">
            We're redefining healthcare delivery with a patient-first approach that combines 
            cutting-edge technology with compassionate, convenient care.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          {features.map((feature, index) => (
            <div
              key={index}
              className="group p-6 bg-blue-50 rounded-xl hover:bg-blue-100 transition-all duration-300 hover:shadow-lg border border-blue-100"
            >
              <div className="inline-flex items-center justify-center w-12 h-12 bg-blue-100 text-blue-600 rounded-lg mb-4 group-hover:bg-blue-200 transition-colors duration-300">
                {feature.icon}
              </div>
              <h3 className="text-xl font-semibold text-gray-900 mb-3">
                {feature.title}
              </h3>
              <p className="text-gray-600 leading-relaxed">
                {feature.description}
              </p>
            </div>
          ))}
        </div>

        <div className="mt-16 text-center">
          <div className="inline-flex items-center justify-center p-8 bg-gradient-to-r from-blue-50 to-blue-100 rounded-2xl shadow-inner">
            <div className="text-center max-w-2xl">
              <h3 className="text-2xl font-bold text-gray-900 mb-3">
                Ready to Experience the Future of Healthcare?
              </h3>
              <p className="text-gray-600 mb-6 text-lg">
                Join our community of thousands who enjoy convenient, high-quality care on their terms.
              </p>
              <div className="flex flex-col sm:flex-row justify-center gap-4">
                <a
                  href="#signup"
                  className="inline-flex items-center justify-center px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors duration-200"
                >
                  <ThumbsUp className="w-5 h-5 mr-2" />
                  Get Started Now
                </a>
                <a
                  href="#contact"
                  className="inline-flex items-center justify-center px-6 py-3 border-2 border-blue-600 text-blue-600 rounded-lg font-medium hover:bg-blue-50 transition-colors duration-200"
                >
                  <Headphones className="w-5 h-5 mr-2" />
                  Contact Support
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default WhyChooseUs;
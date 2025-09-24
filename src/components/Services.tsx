import React from 'react';
import { 
  Video,
  MessageSquare,
  FileText,
  Smartphone,
  Clock,
  Calendar,
  UserCheck,
  Activity
} from 'lucide-react';

const Services = () => {
  const services = [
    {
      icon: <Video className="h-8 w-8" />,
      title: 'Video Consultations',
      description: 'Face-to-face virtual visits with board-certified physicians from the comfort of your home',
      features: ['General Medicine', 'Specialist Referrals', 'Follow-up Care']
    },
    {
      icon: <MessageSquare className="h-8 w-8" />,
      title: 'Chat with Doctors',
      description: 'Secure messaging for non-urgent medical questions and prescription refills',
      features: ['Quick Questions', 'Prescription Refills', 'Lab Results']
    },
    {
      icon: <FileText className="h-8 w-8" />,
      title: 'E-Prescriptions',
      description: 'Get prescriptions sent directly to your preferred pharmacy',
      features: ['New Prescriptions', 'Refills', 'Medication Management']
    },
    {
      icon: <Smartphone className="h-8 w-8" />,
      title: 'Mobile Health',
      description: 'Access healthcare services on-the-go with our mobile app',
      features: ['Symptom Checker', 'Appointment Scheduling', 'Health Records']
    },
    {
      icon: <Clock className="h-8 w-8" />,
      title: '24/7 Urgent Care',
      description: 'Immediate care for non-emergency conditions, available around the clock',
      features: ['Minor Illnesses', 'Injuries', 'Infections']
    },
    {
      icon: <Calendar className="h-8 w-8" />,
      title: 'Scheduled Care',
      description: 'Book appointments in advance with specialists and primary care providers',
      features: ['Specialist Visits', 'Therapy Sessions', 'Wellness Exams']
    },
    {
      icon: <UserCheck className="h-8 w-8" />,
      title: 'Mental Health',
      description: 'Confidential counseling and therapy sessions with licensed professionals',
      features: ['Therapy', 'Counseling', 'Psychiatric Care']
    },
    {
      icon: <Activity className="h-8 w-8" />,
      title: 'Chronic Care Management',
      description: 'Personalized care plans for managing ongoing health conditions',
      features: ['Diabetes', 'Hypertension', 'Asthma', 'More']
    }
  ];

  return (
    <section id="services" className="py-16 lg:py-24 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
            Our Telehealth Services
          </h2>
          <p className="text-lg text-gray-600 max-w-3xl mx-auto">
            Access comprehensive healthcare services from the comfort of your home. 
            Our platform connects you with experienced healthcare professionals 
            through secure, convenient virtual visits.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {services.map((service, index) => (
            <div
              key={index}
              className="bg-blue-50 rounded-xl p-6 shadow-sm hover:shadow-lg transition-all duration-300 border border-blue-100 hover:border-blue-200"
            >
              <div className="inline-flex items-center justify-center w-16 h-16 bg-blue-100 text-blue-600 rounded-xl mb-4">
                {service.icon}
              </div>
              
              <h3 className="text-xl font-semibold text-gray-900 mb-3">
                {service.title}
              </h3>
              
              <p className="text-gray-600 mb-4 text-sm leading-relaxed">
                {service.description}
              </p>
              
              <ul className="space-y-2">
                {service.features.map((feature, featureIndex) => (
                  <li key={featureIndex} className="text-sm text-gray-500 flex items-center">
                    <div className="w-2 h-2 bg-blue-400 rounded-full mr-2"></div>
                    {feature}
                  </li>
                ))}
              </ul>
            </div>
          ))}
        </div>

        <div className="text-center mt-12">
          <a
            href="#contact"
            className="inline-flex items-center justify-center px-8 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-green-700 transition-colors duration-200"
          >
            Schedule Appointment
          </a>
        </div>
      </div>
    </section>
  );
};

export default Services;
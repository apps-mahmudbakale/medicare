import React from 'react';
import { 
  Phone, 
  Mail, 
  MapPin, 
  Clock, 
  Calendar,
  MessageCircle
} from 'lucide-react';

const Contact = () => {
  const contactInfo = [
    {
      icon: <Phone className="h-6 w-6" />,
      title: '24/7 Emergency',
      details: '+1 (800) 555-0199',
      subtitle: 'Immediate assistance available'
    },
    {
      icon: <Mail className="h-6 w-6" />,
      title: 'Email Us',
      details: 'support@medicare.health',
      subtitle: 'We respond within 24 hours'
    },
    {
      icon: <MapPin className="h-6 w-6" />,
      title: 'Location',
      details: '123 Health St, MedCity',
      subtitle: 'Visit our headquarters'
    },
    {
      icon: <Clock className="h-6 w-6" />,
      title: 'Clinic Hours',
      details: 'Mon-Sun: 24/7',
      subtitle: 'Emergency services always available'
    }
  ];

  const hours = [
    { day: 'Monday - Sunday', time: '24/7' },
    { day: 'Emergency Services', time: 'Always Available' },
    { day: 'Virtual Consultations', time: '24/7' },
    { day: 'Pharmacy Services', time: '24/7' }
  ];

  return (
    <section id="contact" className="py-16 lg:py-24 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
            Contact MediCare Telehealth
          </h2>
          <p className="text-lg text-gray-600 max-w-3xl mx-auto">
            Have questions or need assistance? Our team is here to help you with 
            any inquiries about our telemedicine services and how we can support your healthcare needs.
          </p>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
          {/* Contact Information */}
          <div className="lg:col-span-2">
            <div className="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
              {contactInfo.map((info, index) => (
                <div
                  key={index}
                  className="bg-blue-50 rounded-xl p-6 shadow-sm border border-blue-100 hover:border-blue-200 transition-colors duration-200"
                >
                  <div className="flex items-center mb-4">
                    <div className="inline-flex items-center justify-center w-12 h-12 bg-blue-100 text-blue-600 rounded-lg mr-4">
                      {info.icon}
                    </div>
                    <div>
                      <h3 className="text-lg font-semibold text-gray-900">
                        {info.title}
                      </h3>
                      <p className="text-sm text-gray-500">{info.subtitle}</p>
                    </div>
                  </div>
                  <p className="text-gray-900 font-medium">{info.details}</p>
                </div>
              ))}
            </div>

            {/* Quick Actions */}
            <div className="grid grid-cols-1 md:grid-cols-3 gap-4">
              <a
                href="tel:+2348012345678"
                className="flex items-center justify-center px-6 py-3 bg-red-600 text-white rounded-lg font-medium hover:bg-red-700 transition-colors duration-200 shadow-md hover:shadow-lg"
              >
                <Phone className="mr-2 h-4 w-4" />
                Emergency Call
              </a>
              <a
                href="#services"
                className="flex items-center justify-center px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors duration-200 shadow-md hover:shadow-lg"
              >
                <Calendar className="mr-2 h-4 w-4" />
                Book Appointment
              </a>
              <a
                href="mailto:info@sahadhospitals.com"
                className="flex items-center justify-center px-6 py-3 border-2 border-blue-600 text-blue-600 rounded-lg font-medium hover:bg-blue-50 transition-colors duration-200"
              >
                <MessageCircle className="mr-2 h-4 w-4" />
                Send Message
              </a>
            </div>
          </div>

          {/* Hours of Operation */}
          <div className="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
            <div className="flex items-center mb-6">
              <Clock className="h-6 w-6 text-green-600 mr-3" />
              <h3 className="text-lg font-semibold text-gray-900">
                Hours of Operation
              </h3>
            </div>
            
            <div className="space-y-4">
              {hours.map((hour, index) => (
                <div key={index} className="flex justify-between items-center py-2 border-b border-gray-100 last:border-b-0">
                  <span className="text-gray-600 text-sm">{hour.day}</span>
                  <span className="text-gray-900 font-medium text-sm">{hour.time}</span>
                </div>
              ))}
            </div>

            <div className="mt-6 p-4 bg-blue-50 rounded-lg">
              <p className="text-sm text-blue-800">
                <strong>Need Help?</strong> Our dedicated medical team is available 24/7 to assist with any health concerns or questions you may have.
              </p>
            </div>
            <div className="mt-6 p-4 bg-blue-50 rounded-lg">
              <p className="text-sm text-blue-800">
                <strong>Emergency Services:</strong> Available 24/7 for urgent medical care. 
                Call <span className="font-semibold">+1 (800) 555-0199</span> for immediate assistance.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contact;
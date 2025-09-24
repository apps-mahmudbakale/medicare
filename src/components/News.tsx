import React from 'react';
import { Calendar, Clock, ArrowRight, Award, Users, Heart } from 'lucide-react';

const News = () => {
  const newsItems = [
    {
      id: 1,
      title: 'Sahad Hospitals Launches Advanced Cardiac Care Unit',
      excerpt: 'Our new state-of-the-art cardiac care unit is now operational, featuring the latest in cardiovascular treatment technology and specialized care.',
      date: '2025-01-15',
      readTime: '3 min read',
      category: 'Medical Innovation',
      image: 'https://images.pexels.com/photos/4021775/pexels-photo-4021775.jpeg?auto=compress&cs=tinysrgb&w=800',
      icon: <Heart className="h-5 w-5" />
    },
    {
      id: 2,
      title: 'Free Health Screening Program for Apo Community',
      excerpt: 'Join us for our monthly community health screening program offering free basic health checks, blood pressure monitoring, and health consultations.',
      date: '2025-01-10',
      readTime: '2 min read',
      category: 'Community Health',
      image: 'https://images.pexels.com/photos/4173251/pexels-photo-4173251.jpeg?auto=compress&cs=tinysrgb&w=800',
      icon: <Users className="h-5 w-5" />
    },
    {
      id: 3,
      title: 'Sahad Hospitals Receives Excellence in Healthcare Award',
      excerpt: 'We are honored to receive the Excellence in Healthcare Award 2024 for our outstanding patient care and medical innovation in the FCT.',
      date: '2025-01-05',
      readTime: '4 min read',
      category: 'Awards & Recognition',
      image: 'https://images.pexels.com/photos/4021775/pexels-photo-4021775.jpeg?auto=compress&cs=tinysrgb&w=800',
      icon: <Award className="h-5 w-5" />
    }
  ];

  const formatDate = (dateString: string) => {
    const date = new Date(dateString);
    return date.toLocaleDateString('en-US', { 
      year: 'numeric', 
      month: 'long', 
      day: 'numeric' 
    });
  };

  return (
    <section id="news" className="py-16 lg:py-24 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
            Latest News & Updates
          </h2>
          <p className="text-lg text-gray-600 max-w-3xl mx-auto">
            Stay informed about the latest developments, achievements, and community 
            initiatives at Sahad Hospitals.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {newsItems.map((item) => (
            <article
              key={item.id}
              className="bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300 border border-gray-100 overflow-hidden"
            >
              <div className="relative">
                <img
                  src={item.image}
                  alt={item.title}
                  className="w-full h-48 object-cover"
                />
                <div className="absolute top-4 left-4">
                  <span className="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                    {item.icon}
                    <span className="ml-1">{item.category}</span>
                  </span>
                </div>
              </div>
              
              <div className="p-6">
                <div className="flex items-center text-sm text-gray-500 mb-3">
                  <Calendar className="h-4 w-4 mr-2" />
                  <span>{formatDate(item.date)}</span>
                  <Clock className="h-4 w-4 ml-4 mr-2" />
                  <span>{item.readTime}</span>
                </div>
                
                <h3 className="text-xl font-semibold text-gray-900 mb-3 line-clamp-2">
                  {item.title}
                </h3>
                
                <p className="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">
                  {item.excerpt}
                </p>
                
                <a
                  href="#"
                  className="inline-flex items-center text-green-600 hover:text-green-700 font-medium text-sm transition-colors duration-200"
                >
                  Read More
                  <ArrowRight className="ml-2 h-4 w-4" />
                </a>
              </div>
            </article>
          ))}
        </div>

        <div className="text-center mt-12">
          <a
            href="#"
            className="inline-flex items-center justify-center px-8 py-3 border-2 border-green-600 text-green-600 rounded-lg font-medium hover:bg-green-50 transition-colors duration-200"
          >
            View All News
            <ArrowRight className="ml-2 h-4 w-4" />
          </a>
        </div>
      </div>
    </section>
  );
};

export default News;
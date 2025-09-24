import React from 'react';
import { Users, Stethoscope, Calendar, Heart } from 'lucide-react';

const MetricCard = ({ value, label, icon: Icon, color }: { value: string; label: string; icon: React.ElementType; color: string }) => (
  <div className="bg-white p-6 rounded-xl shadow-lg text-center transform transition-all duration-300 hover:scale-105">
    <div className={`w-16 h-16 ${color} rounded-full flex items-center justify-center mx-auto mb-4`}>
      <Icon className="h-8 w-8 text-white" />
    </div>
    <h3 className="text-3xl font-bold text-gray-800 mb-2">{value}</h3>
    <p className="text-gray-600">{label}</p>
  </div>
);

const Metrics = () => {
  const metrics = [
    { value: '50+', label: 'Expert Doctors', icon: Stethoscope, color: 'bg-blue-500' },
    { value: '15+', label: 'Years Experience', icon: Calendar, color: 'bg-green-500' },
    { value: '10,000+', label: 'Happy Patients', icon: Heart, color: 'bg-amber-500' },
    { value: '24/7', label: 'Available Hours', icon: Users, color: 'bg-purple-500' },
  ];

  return (
    <section className="py-12 bg-gray-50 -mt-16 relative z-20">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8 -mt-20">
          {metrics.map((metric, index) => (
            <MetricCard key={index} {...metric} />
          ))}
        </div>
      </div>
    </section>
  );
};

export default Metrics;

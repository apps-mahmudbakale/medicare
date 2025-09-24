import React, { useState } from 'react';
import { X, ZoomIn, ChevronLeft, ChevronRight } from 'lucide-react';
import Facility1 from '../assets/facility/DSC_0112.jpg';
import Facility2 from '../assets/facility/DSC_0115.jpg';
import Facility3 from '../assets/facility/DSC_0132.jpg';
import Facility4 from '../assets/facility/DSC_0134.jpg';
import Facility5 from '../assets/facility/DSC_0150.jpg';
import Facility6 from '../assets/facility/DSC_0152.jpg';
import Facility7 from '../assets/facility/DSC_0190.jpg';
import Facility8 from '../assets/facility/DSC_0259.jpg';
import Facility9 from '../assets/facility/DSC_0267.jpg';
import Facility10 from '../assets/facility/DSC_0409.jpg';
import Facility11 from '../assets/facility/DSC_0486.jpg';
import Facility12 from '../assets/facility/DSC_0489.jpg';
import Facility13 from '../assets/facility/DSC_0493.jpg';
import Facility14 from '../assets/facility/DSC_0769.jpg';
import Facility15 from '../assets/facility/DSC_0774.jpg';
import Facility16 from '../assets/facility/DSC_0937.jpg';
import Lab1 from '../assets/lab/DSC_0132 - Copy.jpg';
import Lab2 from '../assets/lab/DSC_0134 - Copy.jpg';
import Lab3 from '../assets/lab/DSC_0137 - Copy.jpg';
import Lab4 from '../assets/lab/DSC_0119.jpg';
import Lab5 from '../assets/lab/DSC_0120.jpg';
import Lab6 from '../assets/lab/DSC_0125.jpg';
import Lab7 from '../assets/lab/DSC_0127.jpg';
import Equipment1 from '../assets/equipment/DSC_0552.jpg';
import Equipment2 from '../assets/equipment/DSC_0561.jpg';
import Equipment3 from '../assets/equipment/DSC_0562.jpg';
import Equipment4 from '../assets/equipment/DSC_0563.jpg';
import Equipment5 from '../assets/equipment/DSC_0564.jpg';
import Equipment6 from '../assets/equipment/DSC_0565.jpg';
import Equipment7 from '../assets/equipment/DSC_0566.jpg';
import Equipment8 from '../assets/equipment/DSC_0592.jpg';
import Equipment9 from '../assets/equipment/DSC_0595.jpg';
import Equipment10 from '../assets/equipment/DSC_0751.jpg';
import Equipment11 from '../assets/equipment/DSC_0764.jpg';
import Paediatric1 from '../assets/paediatrics/DSC_0148.jpg';
import Paediatric2 from '../assets/paediatrics/DSC_0149.jpg';
import Paediatric3 from '../assets/paediatrics/DSC_0150 - Copy (2).jpg';
import Paediatric4 from '../assets/paediatrics/DSC_0152 - Copy.jpg';

import Sugery1 from '../assets/surgery/DSC_0282.jpg';
import Sugery2 from '../assets/surgery/DSC_0283.jpg';
import Sugery3 from '../assets/surgery/DSC_0284.jpg';

import Emergency1 from '../assets/emergency/DSC_0339.jpg';
import Emergency2 from '../assets/emergency/DSC_0342.jpg';
import Emergency3 from '../assets/emergency/DSC_0346.jpg';
import Emergency4 from '../assets/emergency/DSC_0350.jpg';
import Emergency5 from '../assets/emergency/DSC_0361.jpg';
import Emergency6 from '../assets/emergency/DSC_0366.jpg';

import Staff1 from '../assets/staff/DSC_0161.jpg';
import Staff2 from '../assets/staff/DSC_0224.jpg';
import Staff3 from '../assets/staff/DSC_0418.jpg';
import Staff4 from '../assets/staff/DSC_0703.jpg';
import Staff5 from '../assets/staff/DSC_0710.jpg';
import Staff6 from '../assets/staff/DSC_0731.jpg';
import Staff7 from '../assets/staff/DSC_0801.jpg';

import PatientCare1 from '../assets/patient/DSC_0327.jpg';
import PatientCare2 from '../assets/patient/DSC_0431.jpg';
import PatientCare3 from '../assets/patient/DSC_0466.jpg';



const Gallery = () => {
  const [selectedImage, setSelectedImage] = useState<number | null>(null);

  const galleryImages = [
    {
      id: 1,
      src: Facility1,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 2,
      src: Equipment1,
      alt: 'Advanced medical equipment and technology',
      category: 'Equipment'
    },
    {
      id: 3,
      src: Staff1,
      alt: 'Medical professionals in consultation',
      category: 'Staff'
    },
    {
      id: 4,
      src: PatientCare1,
      alt: 'Patient care and consultation room',
      category: 'Patient Care'
    },

    {
      id: 6,
      src: Emergency1,
      alt: 'Emergency department and trauma care',
      category: 'Emergency'
    },
    {
      id: 7,
      src: Lab1,
      alt: 'Laboratory with advanced diagnostic equipment',
      category: 'Laboratory'
    },
    {
      id: 8,
      src: Sugery1,
      alt: 'Surgical suite and operating room',
      category: 'Surgery'
    },
     {
      id: 9,
      src: Facility2,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 10,
      src: Facility3,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 11,
      src: Facility4,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 12,
      src: Facility5,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 13,
      src: Facility6,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 14,
      src: Facility7,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 15,
      src: Facility8,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 16,
      src: Facility9,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 17,
      src: Facility10,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 18,
      src: Facility11,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 19,
      src: Facility12,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 20,
      src: Facility13,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 21,
      src: Facility14,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 22,
      src: Facility15,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 23,
      src: Facility16,
      alt: 'Modern hospital lobby and reception area',
      category: 'Facilities'
    },
    {
      id: 24,
      src: Lab2,
      alt: 'Laboratory with advanced diagnostic equipment',
      category: 'Laboratory'
    },
    {
      id: 25,
      src: Lab3,
      alt: 'Laboratory with advanced diagnostic equipment',
      category: 'Laboratory'
    }
    , {
      id: 26,
      src: Lab4,
      alt: 'Laboratory with advanced diagnostic equipment',
      category: 'Laboratory'
    }
    , {
      id: 27,
      src: Lab5,
      alt: 'Laboratory with advanced diagnostic equipment',
      category: 'Laboratory'
    }
    , {
      id: 28,
      src: Lab6,
      alt: 'Laboratory with advanced diagnostic equipment',
      category: 'Laboratory'
    }
    , {
      id: 29,
      src: Lab7,
      alt: 'Laboratory with advanced diagnostic equipment',
      category: 'Laboratory'
    }
    , {
      id: 30,
      src: Equipment2,
      alt: 'Advanced medical equipment and technology',
      category: 'Equipment'
    }
    , {
      id: 31,
      src: Equipment3,
      alt: 'Advanced medical equipment and technology',
      category: 'Equipment'
    }
    , {
      id: 32,
      src: Equipment4,
      alt: 'Advanced medical equipment and technology',
      category: 'Equipment'
    }
    , {
      id: 33,
      src: Equipment5,
      alt: 'Advanced medical equipment and technology',
      category: 'Equipment'
    }
    , {
      id: 34,
      src: Equipment6,
      alt: 'Advanced medical equipment and technology',
      category: 'Equipment'
    }
    , {
      id: 35,
      src: Equipment7,
      alt: 'Advanced medical equipment and technology',
      category: 'Equipment'
    },
    {
      id: 36,
      src: Equipment8,
      alt: 'Advanced medical equipment and technology',
      category: 'Equipment'
    },
     {
      id: 37,
      src: Equipment9,
      alt: 'Advanced medical equipment and technology',
      category: 'Equipment'
    },
     {
      id: 38,
      src: Equipment10,
      alt: 'Advanced medical equipment and technology',
      category: 'Equipment'
    },
     {
      id: 39,
      src: Equipment11,
      alt: 'Advanced medical equipment and technology',
      category: 'Equipment'
    },
    {
      id: 40,
      src: Paediatric1,
      alt: 'Pediatric ward and children care',
      category: 'Pediatrics'
    },
    {
      id: 41,
      src: Paediatric2,
      alt: 'Pediatric ward and children care',
      category: 'Pediatrics'
    },
    {
      id: 42,
      src: Paediatric3,
      alt: 'Pediatric ward and children care',
      category: 'Pediatrics'
    },
    {
      id: 43,
      src: Paediatric4,
      alt: 'Pediatric ward and children care',
      category: 'Pediatrics'
    },
    {
      id: 44,
      src: Sugery2,
      alt: 'Surgical suite and operating room',
      category: 'Surgery'
    },
    {
      id: 45,
      src: Sugery3,
      alt: 'Surgical suite and operating room',
      category: 'Surgery'
    },
    {
      id: 46,
      src: Emergency2,
      alt: 'Emergency department and trauma care',
      category: 'Emergency'
    },
    {
      id: 47,
      src: Emergency3,
      alt: 'Emergency department and trauma care',
      category: 'Emergency'
    },
    {
      id: 48,
      src: Emergency4,
      alt: 'Emergency department and trauma care',
      category: 'Emergency'
    },
    {
      id: 49,
      src: Emergency5,
      alt: 'Emergency department and trauma care',
      category: 'Emergency'
    },
    {
      id: 50,
      src: Emergency6,
      alt: 'Emergency department and trauma care',
      category: 'Emergency'
    },
    {
      id: 51,
      src: Staff2,
      alt: 'Medical professionals in consultation',
      category: 'Staff'
    },
    {
      id: 52,
      src: Staff3,
      alt: 'Medical professionals in consultation',
      category: 'Staff'
    },
    {
      id: 53,
      src: Staff4,
      alt: 'Medical professionals in consultation',
      category: 'Staff'
    },
    {
      id: 54,
      src: Staff5,
      alt: 'Medical professionals in consultation',
      category: 'Staff' 
    },
    {
      id: 55,
      src: Staff6,
      alt: 'Medical professionals in consultation',
      category: 'Staff' 
    },
    {
      id: 56,
      src: Staff7,
      alt: 'Medical professionals in consultation',
      category: 'Staff' 
    },
    {
      id: 57,
      src: PatientCare2,
      alt: 'Patient care and consultation room',
      category: 'Patient Care'
    },
    {
      id: 58,
      src: PatientCare3,
      alt: 'Patient care and consultation room',
      category: 'Patient Care'
    },
  ];

  const categories = ['All', ...Array.from(new Set(galleryImages.map(img => img.category)))];
  const [activeCategory, setActiveCategory] = useState('All');

  const filteredImages = activeCategory === 'All' 
    ? galleryImages 
    : galleryImages.filter(img => img.category === activeCategory);

  const openModal = (imageId: number) => {
    setSelectedImage(imageId);
  };

  const closeModal = () => {
    setSelectedImage(null);
  };

  const navigateImage = (direction: 'prev' | 'next') => {
    if (selectedImage === null) return;
    
    const currentIndex = filteredImages.findIndex(img => img.id === selectedImage);
    let newIndex;
    
    if (direction === 'prev') {
      newIndex = currentIndex > 0 ? currentIndex - 1 : filteredImages.length - 1;
    } else {
      newIndex = currentIndex < filteredImages.length - 1 ? currentIndex + 1 : 0;
    }
    
    setSelectedImage(filteredImages[newIndex].id);
  };

  const selectedImageData = galleryImages.find(img => img.id === selectedImage);

  return (
    <section id="gallery" className="py-16 lg:py-24 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
            Hospital Gallery
          </h2>
          <p className="text-lg text-gray-600 max-w-3xl mx-auto">
            Take a virtual tour of our state-of-the-art facilities, advanced medical 
            equipment, and the caring environment we provide for our patients.
          </p>
        </div>

        {/* Category Filter */}
        <div className="flex flex-wrap justify-center gap-4 mb-12">
          {categories.map((category) => (
            <button
              key={category}
              onClick={() => setActiveCategory(category)}
              className={`px-6 py-2 rounded-full text-sm font-medium transition-colors duration-200 ${
                activeCategory === category
                  ? 'bg-green-600 text-white'
                  : 'bg-white text-gray-600 hover:bg-green-50 hover:text-green-600'
              }`}
            >
              {category}
            </button>
          ))}
        </div>

        {/* Gallery Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          {filteredImages.map((image) => (
            <div
              key={image.id}
              className="relative group cursor-pointer overflow-hidden rounded-xl bg-white shadow-sm hover:shadow-lg transition-shadow duration-300"
              onClick={() => openModal(image.id)}
            >
              <img
                src={image.src}
                alt={image.alt}
                className="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105"
              />
              <div className="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-opacity duration-300 flex items-center justify-center">
                <ZoomIn className="h-8 w-8 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" />
              </div>
              <div className="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                <span className="inline-block px-2 py-1 bg-green-600 text-white text-xs rounded-full mb-2">
                  {image.category}
                </span>
                <p className="text-white text-sm font-medium">{image.alt}</p>
              </div>
            </div>
          ))}
        </div>

        {/* Modal */}
        {selectedImage && selectedImageData && (
          <div className="fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center p-4">
            <div className="relative max-w-4xl max-h-full">
              <button
                onClick={closeModal}
                className="absolute top-4 right-4 text-white hover:text-gray-300 z-10"
              >
                <X className="h-8 w-8" />
              </button>
              
              <button
                onClick={() => navigateImage('prev')}
                className="absolute left-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 z-10"
              >
                <ChevronLeft className="h-8 w-8" />
              </button>
              
              <button
                onClick={() => navigateImage('next')}
                className="absolute right-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 z-10"
              >
                <ChevronRight className="h-8 w-8" />
              </button>
              
              <img
                src={selectedImageData.src}
                alt={selectedImageData.alt}
                className="max-w-full max-h-full object-contain rounded-lg"
              />
              
              <div className="absolute bottom-4 left-4 right-4 text-center">
                <span className="inline-block px-3 py-1 bg-green-600 text-white text-sm rounded-full mb-2">
                  {selectedImageData.category}
                </span>
                <p className="text-white text-lg font-medium">{selectedImageData.alt}</p>
              </div>
            </div>
          </div>
        )}
      </div>
    </section>
  );
};

export default Gallery;
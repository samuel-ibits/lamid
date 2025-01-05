import React from 'react';
import BusinessInnovationZone from './BusinessHeader';

const SustainableDevelopment = () => {
  return (
    <div className="relative  min-h-screen bg-black text-white">
        {/* Background Overlay Image */}
        <div className="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
            <img
                src={require('../../assets/images/Logo.png')}
                alt="Background"
                className="w-full h-full object-cover"
            />
        </div>
        {/* Sustainable Development Section */}
      <div className="relative max-w-7xl mx-auto px-8 py-16">
        {/* Title and Tagline Container */}
        <div className="max-w-full  mx-auto">
          {/* Left Image and Title */}
          <div className="flex items-center gap-4 mb-4">
            <div className="w-22 h-44 rounded-lg overflow-hidden">
              <img
                src={require('../../assets/images/earth.png')}
                alt="Hands holding globe"
                className="w-full h-full object-cover"
              />
            </div>
            <div className="flex-1">
              <h2 className="text-3xl mb-2">
                <span className="text-green-500">S</span>ustainable 
                <span className="text-green-500">D</span>evelopment
              </h2>
              <div className="border border-green-700 w-fit rounded-lg bg-black/50 p-4">
                <p className="text-gray-300">
                  Growing groups to world-class communities with sustainable development
                </p>
              </div>
            </div>
            {/* Right Image */}
            <div className="w-[25rem] h-[30rem] rounded-lg overflow-hidden">
              <img
                src= {require('../../assets/images/earth2.png')}
                alt="Hands holding illuminated globe"
                className="w-full h-full object-cover"
              />
            </div>
          </div>

          {/* Achievement Text */}
          <div className="mt-16">
            <p className="text-xl text-gray-300 mb-4">
              We achieved social inclusion, managed healthcare partnerships, gender equality...
            </p>
            <button className="flex items-center text-gray-400 hover:text-gray-300 transition-colors">
              SEE HOW
              <span className="ml-2">→</span>
            </button>
          </div>
        </div>

     
      </div>
    </div>
  );
};

export default SustainableDevelopment;
import React from 'react';
import { ArrowRight } from 'lucide-react';

const BusinessHeader = () => {
  return (
    <div className="w-full bg-black text-white p-8">
      <div className="max-w-full mx-auto text-center">
        {/* Centered Business Innovation Zone Text */}
        <h1 className="text-2xl font-semibold">
          <span className="text-blue-600">B</span>usiness
          <span className="text-blue-600">I</span>nnovation
          <span className="text-blue-600">Z</span>one
        </h1>

      <div className='flex mx-auto items-center justify-center'>
      <div className="flex justify-center mt-6">
          {/* Logo and Main Title Section */}
          <div className="flex items-center gap-4 mb-4">
            <div className="bg-[#111] p-4 ">
              <div className="flex items-center">
                {/* Replace the below image source with your logo image path */}
                <div className="w-20 h-22 ">
                  <img src={require('../assets/images/BizSection.png')} alt="Logo" className="w-20 h-22 object-cover" />
                </div>
              </div>
            </div>
          </div>
        </div>

        {/* Main Tagline */}
        <div className="border border-blue-600 h-9 rounded-lg px-4 justify-center items-center">
          <p className="text-m mx-auto text-center">
            The one-stop place that rapidly nurtures and expands startups to deliver exceptional value and become world-class organizations
          </p>
        </div>
      </div>

        {/* Secondary Tagline */}
        <p className="text-sm text-center mb-12 text-gray-300">
          We help all organizations continuously innovate around the client and adapt to the digital age for efficiency and competitiveness.
        </p>

        {/* BEST Section */}
        <div className="flex items-center w-fit mx-auto justify-between">
          <div className="flex-1">
            <div className="border border-gray-800 rounded-lg p-4 bg-[#111]">
              <h2 className="text-xl mb-4">
                <span className="text-orange-500">B</span>usiness
                <span className="text-orange-500">E</span>xpansion
                <span className="text-white">Strategy & Technology</span>
                <span className="text-gray-500"> -BEST-</span>
                <span className="text-gray-400 ml-2">our all-in-one growth tool box</span>
              </h2>
            </div>

            <p className="text-sm text-gray-400 mb-2">
              Our portfolio of simple, easy-to-use entrepreneurial management know-how that generates
              sustainable growth by executing a lean plan on digitalized, client-centered systems and processes.
            </p>

            <div className="flex items-center gap-2 text-gray-400">
              <span className="text-sm">READ MORE</span>
              <ArrowRight size={16} />
            </div>
          </div>

          <div className="ml-4">
            <div className="w-24 h-24 bg-[#98CA3F] rounded-full flex items-center justify-center">
              <div className="w-16 h-16 bg-[#FFB347] rounded-full transform rotate-45"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default BusinessHeader;

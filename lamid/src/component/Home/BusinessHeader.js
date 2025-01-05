import React from 'react';

const BusinessInnovationZone = () => {
  return (
    <div className="bg-black text-white min-h-fit flex flex-col justify-center items-center p-8">
      {/* Header Section */}
      <div className="text-center mb-8">
        <h1 className="text-3xl font-bold">
          <span className="text-blue-800">B</span>usiness
          <span className="text-blue-800">I</span>nnovation
          <span className="text-blue-800">Z</span>one
        </h1>
      </div>

      {/* Main Headline */}
      <div className="flex flex-col md:flex-row items-center mb-1 text-center md:text-left">
        <div className="w-40 h-30 rounded-lg flex items-center justify-center mb-4 md:mb-0 md:mr-4">
          <img
            src={require('../../assets/images/biz.png')}
            alt="BIZ Logo"
            className="w-40 h-30"
          />
        </div>
        <p className="text-m border border-blue-900 rounded-lg p-4 ">
          The one-stop place that rapidly nurtures and expands startups to deliver exceptional value and become world-class organizations.
        </p>
      </div>

      {/* Subheading */}
      <p className="text-center text-lg mb-32">
        We help all organizations continuously innovate around the client and adapt to the digital age for efficiency and competitiveness.
      </p>

      {/* BEST Section */}
      <div className="flex flex-col md:flex-row  items-center justify-center text-center md:text-left">
        <div className="flex-1  mb-8 md:mb-0">
          <div className="border border-gray-400  w-[100%] rounded-lg p-2 mb-4 bg-black">
            <h2 className="text-2xl">
              <span className="text-orange-500">B</span>usiness
              <span className="text-red-500">E</span>xpansion
              <span className="text-white">Strategy & Technology</span>
              <span className="text-gray-400">-BEST-</span>
              <span className="text-white"> our all-in-one growth tool box</span>
            </h2>
          </div>
          <p className="text-gray-400 text-sm mt-2 w-[100%] flex items-end">
            Our portfolio of simple, easy-to- use entrepreneurial management know-how that generates <br/> sustainable growth by executing a lean plan on digitalized, client-centered systems and processes.
            <a href="#" className="text-gray-400 ml-2 flex items-center">
              READ MORE<span className="ml-1">→</span>
            </a>
          </p>

        </div>
        <div className="w-32 h-35 ml-0 md:ml-8">
          <img
            src={require('../../assets/images/tools.png')}
            alt="Tools Icon"
            className="w-full h-full"
          />
        </div>
      </div>
    </div>
  );
};

export default BusinessInnovationZone;

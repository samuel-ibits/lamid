import React from 'react';

const ServicesHeader = () => {
  return (
    <div className="bg-black text-white py-8 relative">
      {/* Title Container */}
      <div className=" ">
        {/* Services Title with Border */}
        <div className="inline-block">
          <button className="text-lg  px-6 py-2 border border-white/30 rounded-md">
            SERVICES
          </button>
        </div>

        {/* Decorative Line */}
        <div className="mt-6 mb-8">
          <div className="w-1/2 h-[1px] bg-white/30"></div>
        </div>

        {/* Description Text */}
        <p className="ml-32 text-lg leading-relaxed">
          We reveal uncommon opportunities from everyday ideas and grow you to dominate 
          the competition. We are known for transforming organizations using customized 
          Management Solutions, Innovation Consulting, Strategy, Process Improvement 
          and Talent Development.
        </p>
      </div>
    </div>
  );
};

export default ServicesHeader;
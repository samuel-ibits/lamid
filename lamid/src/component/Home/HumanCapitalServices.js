import React from 'react';
import SectionHeader from './SectionHeader';
import ServiceSection from './ServiceSection';

const ServiceCard = ({ title, description, buttons, className = '' }) => {
  return (
    <div className={`relative flex flex-col ${className}`}>
      <div className="border border-orange-500/20 rounded-lg bg-black/40 p-6">
        <h3 className="text-orange-500 text-xl mb-4">{title}</h3>
        <p className="text-gray-300 mb-6 text-sm">{description}</p>
        <div className="flex gap-4">
          {buttons.map((label, index) => (
            <button
              key={index}
              className="bg-zinc-800 text-white px-4 py-2 rounded hover:bg-zinc-700 
                        transition-colors text-sm"
            >
              {label}
            </button>
          ))}
        </div>
      </div>
    </div>
  );
};

const HumanCapitalServices = () => {
  return (
    <div className="bg-black min-h-1/2">
      {/* Header Section */}
      <SectionHeader
        title="Human Capital Development"
        subtitle="Attracting and Growing World-class Talent"
        logo={
          <div className="w-36 h-16 relative">
            <div className="">
              {/* Placeholder for the lightbulb head icon - replace with actual icon */}
              <img
                src={require('../../assets/images/hcdlogo.png')}
                alt="Human Capital"
                className=" object-cover p-2"
              />
            </div>
          </div>
        }
        variant="orange"
      />

      {/* Services Grid */}
      <ServiceSection />
    </div>
  );
};

export default HumanCapitalServices;
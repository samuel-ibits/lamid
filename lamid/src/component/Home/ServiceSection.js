import React from 'react';

const ServiceSection = () => {
  const services = [
    { text: 'STRATEGY', color: 'bg-gray-700' },
    { text: 'SOFT SKILLS', color: 'bg-orange-600' },
    { text: 'LEADERSHIP', color: 'bg-green-700' },
    { text: 'MANAGEMENT', color: 'bg-purple-700' },
    { text: 'ENTREPRENEU', color: 'bg-amber-700' },
    { text: 'MARKETING', color: 'bg-blue-600' },
    { text: 'SALES', color: 'bg-blue-800' }
  ];

  return (
    <div className="bg-black text-white min-h-[40vh] p-8">
      <div className="max-w-7xl mx-auto">
        {/* Top Section */}
        <div className="grid sm:grid-cols-1 md:grid-cols-2 gap-8 mb-16">
          {/* Recruitment Section */}
          <div className="space-y-4 mt-12">
            <div className="flex items-center gap-6">
              <div className="w-32 h-32 sm:w-52 sm:h-52 bg-gray-200 rounded-full"></div>
              <div className="space-y-4">
                <h2 className="text-2xl text-orange-500 border border-orange-500 inline-block px-4 py-2 rounded">
                  Recruitment
                </h2>
                <p className="text-gray-300">
                  We recognize and deal with the challenges posed by the <br /> growing
                  scarcity of skilled management and technical talent.
                </p>
                <div className="flex flex-col sm:flex-row gap-4">
                  <button className="bg-gray-800 text-white w-full sm:w-auto px-4 py-2 rounded hover:bg-gray-700 transition">
                    Learn How
                  </button>
                  <button className="bg-gray-800 text-white w-full sm:w-auto px-4 py-2 rounded hover:bg-gray-700 transition">
                    Learn How
                  </button>
                </div>
              </div>
            </div>
          </div>

          {/* Training Section */}
          <div className="space-y-4 flex flex-col ml-auto justify-center">
            <h2 className="text-2xl text-orange-500 border w-fit border-orange-500 inline-block px-4 py-2 rounded">
              Training
            </h2>
            <p className="text-gray-300">
              We light-up your team and remodel their mindset and <br />
              strategies to succeed beyond the 21st century.
            </p>
            <button className="bg-gray-800 text-white w-full sm:w-auto px-4 py-2 rounded hover:bg-gray-700 transition">
              See How
            </button>
          </div>
        </div>

        {/* Bottom Section */}
        <div className="flex flex-col sm:flex-row items-center justify-between gap-8">
          <h3 className="text-xl text-orange-500 border border-orange-500 px-4 py-2 rounded">
            BENEFITS & RESULTS
          </h3>

          <div className="flex flex-wrap justify-center gap-4">
            {services.map((service, index) => (
              <span
                key={index}
                className={`${service.color} px-4 py-2 rounded text-white text-center`}
              >
                {service.text}
              </span>
            ))}
          </div>
        </div>
      </div>
    </div>
  );
};

export default ServiceSection;

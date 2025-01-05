import React from 'react';

const BusinessNav = () => {
  // Correct image paths (use require or import images properly)
  const images = {
    biz: require('../../assets/images/biz.png'),
    hcd: require('../../assets/images/hcd.png'),
    global: require('../../assets/images/sd.png')
  };

  const sections = [
    {
      title: 'Business Innovation Zone',
      image: images.biz,
      color: 'blue',
      titleColors: ['text-blue-500', 'text-blue-500', 'text-blue-500'],
      dimensions: 'w-[120px] h-[90px] sm:w-[150px] sm:h-[110px] md:w-[200px] md:h-[150px]'
    },
    {
      title: 'Human Capital Development',
      image: images.hcd,
      color: 'orange',
      titleColors: ['text-orange-500', 'text-orange-500', 'text-orange-500', 'text-orange-500'],
      dimensions: 'w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[150px] md:h-[220px]'
    },
    {
      title: 'Sustainable Development',
      image: images.global,
      color: 'green',
      titleColors: ['text-green-500', 'text-green-500'],
      dimensions: 'w-[120px] h-[90px] sm:w-[150px] sm:h-[110px] md:w-[200px] md:h-[150px]'
    }
  ];

  return (
    <div className="w-full bg-black py-8">
      <div className="max-w-6xl mx-auto">
        {/* Responsive grid with 1, 2, and 3 columns depending on screen size */}
        <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-center">
          {sections.map((section, index) => (
            <div key={index} className="flex flex-col items-center space-y-4">
              {/* Image Container */}
              <div className="group transition-transform duration-300 hover:scale-105">
                <div className={`relative ${section.dimensions} rounded-tl-3xl rounded-br-3xl overflow-hidden border-2 border-${section.color}-500 hover:border-${section.color}-400`}>
                  <img
                    src={section.image}
                    alt={section.title}
                    className="w-full h-full object-cover"
                  />
                </div>
              </div>

              {/* Title with multi-colored first letter */}
              <div className="text-center">
                {section.title.split(' ').map((word, wordIndex) => {
                  return (
                    <span key={wordIndex}>
                      {/* First letter of the word */}
                      <span className={`${section.titleColors[wordIndex]} font-semibold`}>
                        {word[0]}
                      </span>
                      {/* Remaining part of the word */}
                      <span className="text-white">
                        {word.slice(1)}
                      </span>
                      {' '}
                    </span>
                  );
                })}
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
};

export default BusinessNav;

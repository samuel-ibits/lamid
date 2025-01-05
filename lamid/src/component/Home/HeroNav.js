import { useEffect, useState } from 'react';

const HeroNav = () => {
  const [bgImage, setBgImage] = useState('');

  useEffect(() => {
    const imagePath = require('../../assets/images/HeroServices.png');
    setBgImage(imagePath);
  }, []);

  return (
    <div 
      className="bg-cover bg-center flex w-full h-[450px] items-end justify-end border-[2px] border-[#C12129] rounded-bl-3xl" 
      style={{ backgroundImage: `url(${require('../../assets/images/Heroimg.png')})` }} // New background image
    >
      <div 
        className="relative w-full  mb-9 h-[250px] bg-cover bg-center bg-no-repeat max-w-[500px] sm:w-full" 
        style={{ backgroundImage: `url(${bgImage})` }}
      >
        {/* Content container */}
        <div className="relative z-10 flex items-center justify-center h-full gap-2 px-4">
          {/* Biz Section */}
          <div className="group transition-transform duration-300  hover:scale-105">
            <div className="relative w-30 h-22 rounded-tr-3xl rounded-bl-3xl overflow-hidden border-2 border-blue-500 hover:border-blue-400">
              <img 
                src={require('../../assets/images/biz.png')} 
                alt="Business" 
                className="w-full h-full object-cover"
              />
            </div>
          </div>

          {/* Ideas Section (Middle image, taller height) */}
          <div className="group transition-transform duration-300 hover:scale-105">
            <div className="relative w-30 h-46 rounded-tl-3xl rounded-br-3xl overflow-hidden border-2 border-orange-500 hover:border-orange-400">
              <img 
                src={require('../../assets/images/hcd.png')}  
                alt="Ideas" 
                className="w-full h-full object-cover"
              />
            </div>
          </div>

          {/* Global Section */}
          <div className="group transition-transform duration-300 hover:scale-105">
            <div className="relative w-30 h-22 rounded-tr-3xl rounded-bl-3xl overflow-hidden border-2 border-green-500 hover:border-green-400">
              <img 
                src={require('../../assets/images/sd.png')} 
                alt="Global" 
                className="w-full h-full object-cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default HeroNav;

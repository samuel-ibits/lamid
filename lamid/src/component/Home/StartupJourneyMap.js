import React from 'react';

const StartupJourneyMap = () => {
  return (
    <div className="relative w-full py-16 bg-black">
      {/* Main container with circuit board background */}
      <div className="max-w-full mx-auto px-4">
        <div className="relative rounded-xl bg-[#001220] p-8 overflow-hidden" style={{ height: '500px' }}>
          {/* Background pattern overlay */}
          <div
            className="absolute inset-0"
            style={{
              backgroundImage: `url(${require('../../assets/images/road.png')})`,
              backgroundSize: 'cover',
              backgroundPosition: 'center',
              height: '100%',
            }}
          />

          {/* Success Text
          <div className="absolute bottom-4 left-0 right-0 text-center text-white">
            <p className="text-lg">
              Over 3000 start-ups created and accelerated. Be the next raving success!
            </p>
          </div> */}
        </div>

        {/* Bottom CTAs */}
        <div className="flex justify-between items-center">
          <div className="bg-black/50 p-4 border-[1px] border-[#fff] rounded-lg">
            <p className="text-white font-bold">Build Right! Don't struggle along by costly trial and error.</p>
          </div>
          <div className="bg-black/50 p-4 border-[1px] border-[#fff] rounded-lg">
            <p className="text-white font-bold cursor-pointer hover:text-blue-400 transition-colors">
              Get started - FREE Diagnostics, Limited time only! Click here
            </p>
          </div>
        </div>
      </div>
    </div>
  );
};

export default StartupJourneyMap;
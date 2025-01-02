import React from 'react';
import HeroNav from './HeroNav';

const HeroSection = () => {
    return (
        <div className="w-full min-h-full mt-[4rem] bg-black flex">
            {/* Left side - Text content */}
            <div className="w-2/3 flex flex-col justify-center px-12">
                <h1 className="text-white text-4xl font-bold mb-6">
                We build and grow world-class organizations
                </h1>
            </div>

            {/* Right side - HeroNav component */}
            <div className="w-1/3 items-end justify-end">
               <div className="w-full">
               <HeroNav />
               </div>
            </div>
        </div>
    );
};

export default HeroSection;
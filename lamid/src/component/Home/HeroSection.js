import React from 'react';
import HeroNav from './HeroNav';

const HeroSection = () => {
    return (
        <div className="w-full min-h-full mt-[4rem] bg-black flex flex-col md:flex-row">
            {/* Left side - Text content */}
            <div className="w-full md:w-2/3 flex flex-col justify-center px-6 md:px-12 py-8">
                <h1 className="text-white text-2xl sm:text-4xl font-bold mb-4 text-center md:text-left">
                    We build and grow world-class organizations
                </h1>
            </div>

            {/* Right side - HeroNav component */}
            <div className="w-full md:w-1/3 flex justify-center md:justify-end items-center py-8">
                <div className="w-full">
                    <HeroNav />
                </div>
            </div>
        </div>
    );
};

export default HeroSection;

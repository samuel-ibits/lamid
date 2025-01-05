import React, { useState, useEffect } from 'react';

const MissionApproachCarousel = () => {
    const [activeIndex, setActiveIndex] = useState(0);

    const contents = [
        {
            id: 1,
            title: 'MISSION',
            titleColor: 'bg-blue-600',
            content: 'We improve your  performance and achieve massive results by providing a million-dollar value with an A+ effort, as you pay less for more!'
        },
        {
            id: 2,
            title: 'Our Approach',
            titleColor: 'bg-orange-600',
            content: 'A great company can be measured by its performance (generating enough cash-flow through highly profitable operations that become self-sustaining). The greatness of a company has a lot to do with its leadership and planning is always the starting point of all great endeavors.'
        }
    ];

    useEffect(() => {
        const timer = setInterval(() => {
            setActiveIndex((current) => (current + 1) % contents.length);
        }, 5000); // Change slide every 5 seconds

        return () => clearInterval(timer);
    }, []);

    return (
        <div className="bg-black min-h-[400px] flex items-center justify-center p-8 overflow-hidden">
            <div className="max-w-xl relative mb-32 w-full">
                {contents.map((item, index) => (
                    <div
                        key={item.id}
                        className={`absolute w-full transition-all duration-1000 ease-in-out transform 
              ${activeIndex === index
                                ? 'opacity-100 translate-x-0'
                                : 'opacity-0 translate-x-full'}`}
                    >
                        {/* Title */}
                        <div className="flex mb-8">
                            <div className={`${item.titleColor} px-6 py-2 rounded-md`}>
                                <h2 className="text-white text-3xl font-semibold">{item.title}</h2>
                            </div>
                        </div>

                        {/* Content */}
                        <div className="text-left px-6">
                            <p className="text-white text-sm leading-relaxed">
                                {item.content}
                            </p>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
};

export default MissionApproachCarousel;

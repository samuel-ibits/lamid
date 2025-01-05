import React from 'react';
import './styles.css'; // Ensure this is linked to the custom CSS file.

const BusinessMetrics = () => {
    const metrics = [
        {
            title: 'Efficiency',
            subtitle: 'Time Management',
            image: require('../../assets/images/eff.png') // Replace with actual image URL
        },
        {
            title: 'Cost Effectiveness',
            subtitle: 'Budget Control',
            image: require('../../assets/images/flex.png') // Replace with actual image URL
        },
        {
            title: 'Client Responsiveness',
            subtitle: 'Customer Focus',
            image: require('../../assets/images/cli.png') // Replace with actual image URL
        },
        {
            title: 'Staff Engagement',
            subtitle: 'Team Spirit',
            image: require('../../assets/images/prod.png') // Replace with actual image URL
        },
        {
            image: require('../../assets/images/tra.png') // Replace with actual image URL
        }
    ];

    return (
        <div className="bg-black text-white min-h-[30vh] p-8 flex justify-center items-center">
            <div className="max-w-7xl w-full">
                <div className="flex space-x-16 overflow-x-auto px-8 py-4 scrollbar-hide">
                    {metrics.map((metric, index) => (
                        <div
                            key={index}
                            className="flex flex-col items-center justify-center flex-shrink-0 space-y-4"
                        >
                            <div className="relative items-center justify-center">
                                {/* Title */}
                                {metric.title && (
                                    <p className="text-center whitespace-nowrap text-lg font-semibold">
                                        {metric.title}
                                    </p>
                                )}

                                <div className="w-42 h-42 flex items-center justify-center">
                                    <img
                                        src={metric.image}
                                        alt={metric.title || 'Metric Image'}
                                        className="w-42 h-42 object-contain"
                                    />
                                </div>
                                {/* Subtitle */}
                                {metric.subtitle && (
                                    <p className="text-sm text-center whitespace-nowrap mt-2 text-gray-400">
                                        {metric.subtitle}
                                    </p>
                                )}
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </div>
    );
};

export default BusinessMetrics;

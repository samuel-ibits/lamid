import React from 'react';

const ImpactSection = () => {
    const impactItems = [
        {
            id: 1,
            title: 'Job and Wealth Creation for Social Cohesion & Economic Recovery',
            icon: '👥',
            description: 'We re-positioned cooperatives to re-set globalization; starting from few groups to communities and nations. By experience, we see job and wealth creation with cooperatives as ...',
            highlight: 'Learn how this unique opportunity transformed over 5000 cooperatives.',
            image: require('../../assets/images/rec1.png'),
            imagePosition: 'left',
        },
        {
            id: 2,
            title: 'Building Communities on Managed Healthcare Partnerships',
            icon: '🏥',
            description:
                "We improved maternal care, child survival and primary healthcare delivery and achieved organizational and financial sustainability among five communities' partnerships—ten years after USAID's grant withdrawal by Johns Hopkins' University, Center for Educational Development and Population Activities (CEDPA), and BASICS/Initiative Virginia.",
            image: require('../../assets/images/rec2.png'),
            imagePosition: 'left',
        },
        {
            id: 3,
            title: 'Combating Climate Change with Renewable Energy',
            icon: '⚡',
            description:
                "By building women and youth-led entrepreneurial services clusters around Shell's renewable energy assets, we achieved equalization, mediation, and peace-making in the volatile, conflict-prone Niger Delta communities with environmental remediation and tactical stakeholder engagements.",
            image: require('../../assets/images/rec3.png'),
            imagePosition: 'right',
        },
        {
            id: 4,
            title: 'Bridging the Digital and Generational Divide for Global Partnerships.',
            icon: '🤝',
            description:
                'We addressed youth unemployment and bridged the wealth creation gap by: supporting startups, addressing youth unemployability, generating high-growth jobs, and retaining local talents through ...',
            image: require('../../assets/images/rec4.png'),
            imagePosition: 'right',
            hasReadMore: true,
        },
    ];

    return (
        <div className="bg-black text-white p-8">
            <h1 className="text-4xl text-gray-300 mb-12">Impact</h1>

            <div className="space-y-12">
                {impactItems.map((item) => (
                    <div key={item.id} className="flex flex-col sm:flex-row sm:items-start sm:gap-8">
                        {/* Left Image */}
                        {item.imagePosition === 'left' && (
                            <div
                                className={`w-full sm:w-72 h-48 sm:h-48 overflow-hidden flex-shrink-0 ${
                                    item.id === 1 || item.id === 3
                                        ? 'rounded-tl-[6rem] rounded-tr-[6rem] sm:rounded-tl-[6rem] sm:rounded-tr-[6rem]'
                                        : 'rounded-bl-[6rem] rounded-br-[6rem] sm:rounded-bl-[6rem] sm:rounded-br-[6rem]'
                                }`}
                            >
                                <img
                                    src={item.image}
                                    alt=""
                                    className="w-full h-full object-cover"
                                />
                            </div>
                        )}

                        <div className="flex-1 mt-6 sm:mt-0">
                            <div className="flex items-center gap-2 mb-2">
                                <span className="text-2xl">{item.icon}</span>
                                <div className="border border-green-500 rounded-lg py-2 px-4 bg-black/50">
                                    <h3 className="text-green-500">{item.title}</h3>
                                </div>
                            </div>

                            <p className="text-gray-400 mb-2">{item.description}</p>

                            {item.highlight && (
                                <p className="text-orange-500">{item.highlight}</p>
                            )}

                            {item.hasReadMore && (
                                <button className="flex items-center text-gray-400 hover:text-gray-300 mt-2">
                                    READ MORE
                                    <span className="ml-2">→</span>
                                </button>
                            )}
                        </div>

                        {/* Right Image */}
                        {item.imagePosition === 'right' && (
                            <div
                                className={`w-full sm:w-32 h-32 overflow-hidden flex-shrink-0 ${
                                    item.id === 1 || item.id === 3
                                        ? 'rounded-tl-[6rem] rounded-tr-[6rem] sm:rounded-tl-[6rem] sm:rounded-tr-[6rem]'
                                        : 'rounded-bl-[6rem] rounded-br-[6rem] sm:rounded-bl-[6rem] sm:rounded-br-[6rem]'
                                }`}
                            >
                                <img
                                    src={item.image}
                                    alt=""
                                    className="w-full h-full object-cover"
                                />
                            </div>
                        )}
                    </div>
                ))}
            </div>
        </div>
    );
};

export default ImpactSection;

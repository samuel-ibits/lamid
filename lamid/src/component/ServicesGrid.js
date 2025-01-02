import React from 'react';
import { Rocket, ClipboardEdit, Settings2 } from 'lucide-react';

const ServicesGrid = () => {
    return (
        <div className="w-full min-h-full bg-black p-8 border-b-[1px] border-[#7C7C7C]">
            <div className="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 relative">
                {/* Top row with 3 items (reduced width) */}
                <div className="bg-blue-800 rounded-lg p-6 flex flex-col items-start justify-center h-32 w-3/4 md:w-2/3 mx-auto">
                    <h3 className="text-white text-lg mx-auto font-semibold">Process Transformation</h3>
                    <ClipboardEdit className="w-6 h-6 text-white mb-2 mx-auto" />
                </div>

                <div className="bg-black rounded-lg p-6 flex flex-col items-center justify-center h-32 w-3/4 md:w-2/3 mx-auto">
                    <Rocket className="w-12 h-12 text-white mb-2 mx-auto" />
                    <h3 className="text-white text-lg mx-auto font-semibold"> Innovation Consulting</h3>
                </div>

                <div className="bg-green-800 rounded-lg p-6 flex flex-col items-start justify-center h-32 w-3/4 md:w-2/3 mx-auto">
                    <h3 className="text-white text-lg mx-auto font-semibold">Sustainable Development</h3>
                    <Rocket className="w-6 h-6 text-white mb-2 mx-auto" />
                </div>

                {/* Bottom row with specific color requirements */}
                <div className="grid grid-cols-1 md:grid-cols-5 gap-6 md:col-span-3">
                    <div className="bg-blue-800 rounded-lg p-6 flex flex-col items-start justify-center h-32">
                    <Rocket className="w-6 h-6 text-white mb-2 mx-auto" />
                        <h3 className="text-white text-lg mx-auto font-semibold">Digital Transformation </h3>
                    </div>

                    <div className="bg-black rounded-lg p-6 flex flex-col items-start justify-center h-32">
                        <h3 className="text-white text-lg mx-auto font-semibold">Strategy Development</h3>
                        <Rocket className="w-12 h-12 text-white mb-2 mx-auto" />
                    </div>

                    <div className="bg-orange-800 rounded-lg p-6 flex flex-col items-start justify-center h-32">
                        <h3 className="text-white text-lg mx-auto font-semibold">Talent Sourcing</h3>
                    </div>

                    <div className="bg-black rounded-lg p-5 flex flex-col items-start justify-center h-32">
                        <h3 className="text-white text-lg mx-auto font-semibold">Management Solutions</h3>
                    </div>

                    <div className="bg-orange-800 rounded-lg p-6 flex flex-col items-start justify-center h-32">
                        <h3 className="text-white text-lg mx-auto font-semibold">HR, Training & Support</h3>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default ServicesGrid;

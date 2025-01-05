import React from 'react';
import { Target, Users, TrendingUp } from 'lucide-react';

const WhoWeAreSection = () => {
  return (
    <div className="relative min-h-screen bg-[#001a2c] text-white overflow-hidden">
      {/* Background Overlay Image */}
      <div className="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
        <img
          src={require('../../assets/images/Logo.png')}
          alt="Background"
          className="w-full h-full object-cover"
        />
      </div>

      <div className="relative z-10 container mx-auto px-8 py-16">
        {/* Header */}
        <div className="bg-gray-800/50 px-6 py-2 rounded-lg inline-block mb-12">
          <h1 className="text-2xl font-bold tracking-wider">WHO WE ARE</h1>
        </div>

        {/* Main Description */}
        <p className="text-xl max-w-4xl mb-24 leading-relaxed">
          Since 1988, LAMID Consulting has accelerated clients' performance with transformational results, by creating partnerships that customize innovative and sustainable solutions in confidence Our verifiable track performance with the private sector, international organizations, and governments have earned us their referrals and a lasting leadership position.
        </p>

        {/* Three Columns */}
        <div className="grid grid-cols-1 md:grid-cols-3 gap-12 mb-24">
          {/* Values and Approach */}
          <div className="space-y-4">
            <div className="flex items-center gap-4">
              <Users className="w-12 h-12 text-white" />
              <button className="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors">
                Our Values and Approach
              </button>
            </div>
            <p className="text-gray-300 text-sm">
              What we stand for, has defined and shaped our approach to proffering solutions and what sums up our business ideals, culture, and services are embedded in our values, as represented by :
            </p>
            <ul className="text-xs text-gray-400 space-y-1">
              <li>Authenticity and simplicity, guided by Integrity.</li>
              <li>Mission alignment based on common good in confidence.</li>
              <li>Committing our re-existing refined talent to evolve workable solutions.</li>
            </ul>
          </div>

          {/* Mission */}
          <div className="space-y-4">
            <div className="flex items-center gap-4">
              <Target className="w-12 h-12 text-white" />
              <button className="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">
                Our Mission
              </button>
            </div>
            <p className="text-gray-300 text-sm">
              We improve your performance and achieve massive results by providing a million-dollar value with an effort as you pay less for more!
            </p>
          </div>

          {/* Pledge */}
          <div className="space-y-4">
            <div className="flex items-center gap-4">
              <TrendingUp className="w-12 h-12 text-white" />
              <button className="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition-colors">
                Our Pledge
              </button>
            </div>
            <p className="text-gray-300 text-sm">
              We go the extra mile always, because we value and build long-term relationships with incentives, in order to retain and grow our core of loyal clients; that is why they come back for more service and provide referrals.
            </p>
          </div>
        </div>

        {/* Bottom Buttons */}
        <div className="flex justify-center gap-8">
          <button className="bg-green-600 text-white px-8 py-2 rounded-md hover:bg-green-700 transition-colors">
            ACHIEVEMENT
          </button>
          <button className="bg-blue-600 text-white px-8 py-2 rounded-md hover:bg-blue-700 transition-colors">
            MANAGEMENT
          </button>
        </div>

        {/* Logo */}
        <div className="absolute bottom-8 right-8">
          <img
            src={require('../../assets/images/Logo-w.png')}
            alt="LAMID Consulting Logo"
            className="w-48"
          />
        </div>
      </div>
    </div>
  );
};

export default WhoWeAreSection;
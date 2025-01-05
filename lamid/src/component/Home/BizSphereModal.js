import React from 'react';
import { X } from 'lucide-react';

const BizSphereModal = ({ onClose }) => {
  return (
    <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50">
      <div className="bg-white rounded-lg shadow-xl max-w-lg w-full p-8 relative">
        {/* Close button */}
        <button 
          onClick={onClose}
          className="absolute right-4 top-4 text-gray-600 hover:text-gray-800"
        >
          <X size={24} />
        </button>

        {/* Rest of your modal content remains the same */}
        <div className="flex flex-col items-center mb-8">
          <div className="flex gap-2 mb-3">
            <div className="h-2 w-2 rounded-full bg-red-700"></div>
            <div className="h-2 w-2 rounded-full bg-red-300"></div>
            <div className="h-2 w-2 rounded-full bg-gray-200"></div>
          </div>
          <h1 className="text-2xl font-bold tracking-wide">BIZSPHERE</h1>
          <p className="text-sm text-gray-600">It's all about business</p>
        </div>

        <div className="text-center mb-8">
          <p className="text-lg">
            The exclusive online networking{' '}
            <span className="text-red-700">marketplace</span>, where sellers meet
            buyers, and exchange services and products
          </p>
        </div>

        <div className="flex justify-center">
          <button className="bg-red-800 hover:bg-red-900 text-white px-6 py-2 rounded-md transition-colors">
            Join our Community
          </button>
        </div>
      </div>
    </div>
  );
};

export default BizSphereModal;
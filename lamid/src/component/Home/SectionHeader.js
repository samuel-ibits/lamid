import React from 'react';

const SectionHeader = ({
  title = '',
  subtitle = '',
  logo = null,
  variant = 'blue', // default to blue
  className = '',
}) => {
  const colorSchemes = {
    green: {
      border: 'border-green-500',
      firstLetter: 'text-green-500',
      text: 'text-green-500',
    },
    blue: {
      border: 'border-blue-500',
      firstLetter: 'text-blue-500',
      text: 'text-blue-300',
    },
    orange: {
      border: 'border-orange-500',
      firstLetter: 'text-orange-500',
      text: 'text-orange-300',
    },
  };

  const colors = colorSchemes[variant];
  const words = title.split(' ');

  return (
    <div className={`bg-black w-full py-6 ${className}`}>
      <div className="max-w-6xl mx-auto flex items-center px-4 sm:px-0">
        {/* Logo */}
        {logo && (
          <div className="flex-shrink-0 bg-black p-2 -mt-24">
            {typeof logo === 'string' ? (
              <img
                src={logo}
                alt="Logo"
                className="w-12 h-12 sm:w-16 sm:h-16 object-contain rounded-full border border-gray-600"
              />
            ) : (
              logo
            )}
          </div>
        )}

        {/* Text */}
        <div className="flex-1 -ml-4">
          {/* Title */}
          <h1 className="text-2xl sm:text-3xl font-bold mb-3 text-center ml-2 flex items-center space-x-2 hidden sm:flex">
            {words.map((word, index) => (
              <span key={index}>
                <span className={colors.firstLetter}>{word.charAt(0)}</span>
                <span className="text-white">{word.slice(1)}</span>
                {index < words.length - 1 ? ' ' : ''}
              </span>
            ))}
          </h1>

          {/* Subtitle */}
          {subtitle && (
            <div
              className={`border ${colors.border} rounded-lg px-4 py-2 bg-black/70 shadow-md w-fit hidden sm:block`}
            >
              <p className="text-gray-300 text-lg sm:text-2xl px-5">{subtitle}</p>
            </div>
          )}
        </div>
      </div>
    </div>
  );
};

export default SectionHeader;

import React, { useState } from 'react';
import { Menu, X, ChevronDown } from 'lucide-react';

const Navbar = () => {
  const [isOpen, setIsOpen] = useState(false);
  const [activeItem, setActiveItem] = useState('home');
  const [servicesOpen, setServicesOpen] = useState(false);

  const toggleMenu = () => {
    setIsOpen(!isOpen);
  };

  const handleNavClick = (item) => {
    setActiveItem(item);
    if (item === 'services') {
      setServicesOpen(!servicesOpen);
    } else {
      setServicesOpen(false);
    }
  };

  return (
    <nav className="bg-black border-b-[2px] border-[#C12129] fixed top-0 w-full z-50">
      <div className="max-w-full px-4">
        <div className="flex items-center h-16">
          {/* Logo */}
          <div className="flex-shrink-0">
            <a href="#home" className="flex items-center outline-none">
              <img
                src={require('../assets/images/Logo.png')}
                alt="Lamid Consulting Logo"
                className="h-12 w-auto"
              />
            </a>
          </div>

          {/* Desktop Menu */}
          <div className="hidden md:flex items-center justify-end flex-1 space-x-12 pr-4">
            <a
              href="#home"
              onClick={() => handleNavClick('home')}
              className={`text-sm font-semibold hover:text-gray-300 ${
                activeItem === 'home' ? 'text-[#C12129]' : 'text-white'
              }`}
            >
              HOME
            </a>
            <a
              href="#portfolio"
              onClick={() => handleNavClick('portfolio')}
              className={`text-sm font-semibold hover:text-gray-300 ${
                activeItem === 'portfolio' ? 'text-[#C12129]' : 'text-white'
              }`}
            >
              PORTFOLIO
            </a>
            <div className="relative">
              <button
                onClick={() => handleNavClick('services')}
                className={`text-sm font-semibold flex items-center hover:text-gray-300 ${
                  activeItem === 'services' ? 'text-[#C12129]' : 'text-white'
                }`}
              >
                SERVICES
                <ChevronDown size={16} className="ml-1" />
              </button>
              {servicesOpen && (
                <div className="absolute mt-2 bg-white rounded-md shadow-lg py-2 z-10">
                  <a
                    href="#biz"
                    className="block px-4 py-2 text-[#151EE5] hover:bg-gray-100"
                  >
                    Biz
                  </a>
                  <a
                    href="#hcd"
                    className="block px-4 py-2 text-[#FF7702] hover:bg-gray-100"
                  >
                    HCD
                  </a>
                  <a
                    href="#sd"
                    className="block px-4 py-2 text-[#00FF89] hover:bg-gray-100"
                  >
                    SD
                  </a>
                </div>
              )}
            </div>
            <a
              href="#contact"
              onClick={() => handleNavClick('contact')}
              className={`text-sm font-semibold hover:text-gray-300 ${
                activeItem === 'contact' ? 'text-[#C12129]' : 'text-white'
              }`}
            >
              CONTACT US
            </a>
          </div>

          {/* Mobile Menu Button */}
          <div className="md:hidden ml-auto">
            <button
              onClick={toggleMenu}
              className="text-white hover:text-gray-300 focus:outline-none"
              aria-label="Toggle menu"
            >
              {isOpen ? <X size={24} /> : <Menu size={24} />}
            </button>
          </div>
        </div>

        {/* Mobile Menu */}
        {isOpen && (
          <div className="md:hidden">
            <div className="px-2 pt-2 pb-3 space-y-1">
              <a
                href="#home"
                onClick={() => handleNavClick('home')}
                className={`block text-sm font-semibold hover:text-gray-300 px-3 py-2 ${
                  activeItem === 'home' ? 'text-[#C12129]' : 'text-white'
                }`}
              >
                HOME
              </a>
              <a
                href="#portfolio"
                onClick={() => handleNavClick('portfolio')}
                className={`block text-sm font-semibold hover:text-gray-300 px-3 py-2 ${
                  activeItem === 'portfolio' ? 'text-[#C12129]' : 'text-white'
                }`}
              >
                PORTFOLIO
              </a>
              <div>
                <button
                  onClick={() => handleNavClick('services')}
                  className={`block text-sm font-semibold hover:text-gray-300 px-3 py-2 w-full text-left ${
                    activeItem === 'services' ? 'text-[#C12129]' : 'text-white'
                  }`}
                >
                  SERVICES
                </button>
                {servicesOpen && (
                  <div className="pl-4">
                    <a
                      href="#biz"
                      className="block text-[#151EE5] hover:bg-gray-700 px-3 py-1"
                    >
                      Biz
                    </a>
                    <a
                      href="#hcd"
                      className="block text-[#FF7702] hover:bg-gray-700 px-3 py-1"
                    >
                      HCD
                    </a>
                    <a
                      href="#sd"
                      className="block text-[#00FF89] hover:bg-gray-700 px-3 py-1"
                    >
                      SD
                    </a>
                  </div>
                )}
              </div>
              <a
                href="#contact"
                onClick={() => handleNavClick('contact')}
                className={`block text-sm font-semibold hover:text-gray-300 px-3 py-2 ${
                  activeItem === 'contact' ? 'text-[#C12129]' : 'text-white'
                }`}
              >
                CONTACT US
              </a>
            </div>
          </div>
        )}
      </div>
    </nav>
  );
};

export default Navbar;
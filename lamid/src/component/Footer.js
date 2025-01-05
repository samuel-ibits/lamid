import React from 'react';
import { Facebook, Twitter, Instagram, Linkedin, Mail } from 'lucide-react';

const Footer = () => {
  const navButtons = [
    { text: 'Bizphere', color: 'bg-red-900' },
    { text: 'Events', color: 'bg-red-900' },
    { text: 'BIZ', color: 'bg-red-900' },
    { text: 'HCD', color: 'bg-red-900' },
    { text: 'SD', color: 'bg-red-900' },
  ];

  return (
    <footer className="bg-[#181818] text-white px-6 py-12">
      <div className="max-w-7xl mx-auto">
        <div className="grid md:grid-cols-2 gap-12">
          {/* Left Column */}
          <div className="space-y-8">
            {/* Logo */}
            <div className="w-48">
              <img
                src={require('../assets/images/Logo.png')}
                alt="Lamid Consulting Logo"
                className="w-full"
              />
            </div>

            {/* Social Media Icons */}
            <div className="flex gap-6">
              <a href="#" className="hover:text-red-500 transition">
                <Facebook size={24} />
              </a>
              <a href="#" className="hover:text-red-500 transition">
                <Twitter size={24} />
              </a>
              <a href="#" className="hover:text-red-500 transition">
                <Instagram size={24} />
              </a>
              <a href="#" className="hover:text-red-500 transition">
                <Linkedin size={24} />
              </a>
            </div>

            {/* Contact Section */}
            <div className="space-y-4">
              <h3 className="text-red-500 text-xl">Contact Us</h3>
              <div className="flex items-center gap-2 text-gray-300">
                <Mail size={20} />
                <a href="mailto:hp@lamidconsulting.com" className="hover:text-red-500 transition">
                  hp@lamidconsulting.com
                </a>
              </div>
            </div>
          </div>

          {/* Right Column */}
          <div className="space-y-8">
            {/* Newsletter Section */}
            <div className="space-y-4">
              <h3 className="text-red-500 text-xl">Newsletter</h3>
              <p className="text-gray-300">
                Sign up for our news letter to stay up to date on the latest from Lamid Consulting.
              </p>
              <div className="flex gap-2">
                <input
                  type="email"
                  placeholder="your mail here..."
                  className="flex-1 px-4 py-2 bg-red-600 rounded text-white placeholder-gray-200"
                />
                <button className="bg-white text-red-600 px-4 py-2 rounded font-semibold hover:bg-red-100 transition">
                  SIGNUP
                </button>
              </div>
            </div>

            {/* Navigation Buttons */}
            <div className="flex flex-wrap gap-3">
              {navButtons.map((button, index) => (
                <button
                  key={index}
                  className={`${button.color} px-4 py-2 rounded hover:opacity-90 transition`}
                >
                  {button.text}
                </button>
              ))}
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
import React from 'react';

const EventsSection = () => {
  const navItems = ['Startups', 'Growth Firms', 'Co-operatives', 'Social Sector'];

  const events = [
    {
      id: 1,
      name: 'Event Name',
      image: require('../../assets/images/cir1.png'),
    
    },
    {
      id: 2,
      name: 'Event Name',
      image: require('../../assets/images/cir2.png'),
    
    },
    {
      id: 3,
      name: 'Event Name',
      image: require('../../assets/images/cir3.png'),
      
    },
    {
      id: 4,
      name: 'Event Name',
      image: require('../../assets/images/cir4.png'),
      action: null,
    },
  ];

  return (
    <div className="bg-black text-white min-h-screen p-8 flex flex-col">
      {/* Navigation */}
      <nav className="flex justify-center gap-8 mb-8">
        {navItems.map((item) => (
          <a
            key={item}
            href="#"
            className="text-orange-500 hover:text-orange-400 transition-colors"
          >
            {item}
          </a>
        ))}
      </nav>

      {/* Events Button */}
      <div className="mb-12 flex ">
        <button className="border border-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-500 transition-colors">
          EVENTS
        </button>
      </div>

      {/* Events Grid */}
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        {events.map((event) => (
          <div key={event.id} className="flex flex-col items-center">
            <div className="w-48 h-48 rounded-full overflow-hidden mb-4">
              <img
                src={event.image}
                alt={event.name}
                className="w-full h-full object-cover"
              />
            </div>
            <h3 className="text-white mb-4">{event.name}</h3>
            {event.action && (
              <button
                className="bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition-colors"
              >
                {event.action}
              </button>
            )}
          </div>
        ))}
      </div>

      {/* Single Sign Up and More Buttons */}
      <div className="mt-12 flex justify-center gap-4">
        <button className="bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition-colors">
          Sign Up
        </button>
        <button className="bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition-colors">
          More
        </button>
      </div>
    </div>
  );
};

export default EventsSection;

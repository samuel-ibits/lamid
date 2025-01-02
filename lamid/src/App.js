import React from 'react';
import Nav from './component/Nav';
import HeroSection from './component/HeroSection';
import ServicesHeader from './component/ServicesHeader';
import { Bus } from 'lucide-react';
import BusinessNav from './component/BusinessNav';
import ServicesGrid from './component/ServicesGrid';
import BusinessHeader from './component/BusinessHeader';


function App() {
  return (
    <div className="min-h-screen bg-gray-100">
      <Nav />
      <HeroSection />
      <ServicesHeader />
      <BusinessNav />
      <ServicesGrid />
      <BusinessHeader />
    </div>
  );
}

export default App;
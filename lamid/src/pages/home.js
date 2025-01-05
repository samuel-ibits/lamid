import React, { useState, useEffect } from 'react';
import { Bus } from 'lucide-react';
import Nav from '../component/Nav';
import HeroSection from '../component/Home/HeroSection';
import ServicesHeader from '../component/Home/ServicesHeader';
import BusinessNav from '../component/Home/BusinessNav';
import ServicesGrid from '../component/Home/ServicesGrid';
import BusinessHeader from '../component/Home/BusinessHeader';
import StartupJourneyMap from '../component/Home/StartupJourneyMap';
import HumanCapitalServices from '../component/Home/HumanCapitalServices';
import BusinessMetrics from '../component/Home/BusinessMetrics';
import EventSection from '../component/Home/EventsSection';
import SustainableDevelopment from '../component/Home/SustainableDevelopment';
import ImpactSection from '../component/Home/ImpactSection';
import WhoWeAreSection from '../component/Home/WhoWeAreSection';
import MissionApproachCarousel from '../component/Home/MissionApproachCarousel';
import BizSphereModal from '../component/Home/BizSphereModal';
import Footer from '../component/Footer';

function App() {
  const [showModal, setShowModal] = useState(false);
  const [hasShownModal, setHasShownModal] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      if (!hasShownModal) {
        // Check if user has scrolled to bottom
        const windowHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight;
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        
        // Consider "bottom" to be when user is within 100px of the bottom
        const isBottom = windowHeight + scrollTop >= documentHeight - 100;

        if (isBottom) {
          setShowModal(true);
          setHasShownModal(true); // Ensure modal only shows once
        }
      }
    };

    window.addEventListener('scroll', handleScroll);

    return () => {
      window.removeEventListener('scroll', handleScroll);
    };
  }, [hasShownModal]);

  const handleCloseModal = () => {
    setShowModal(false);
  };

  return (
    <div className="min-h-screen bg-gray-100">
      <Nav />
      <HeroSection />
      <ServicesHeader />
      <BusinessNav />
      <ServicesGrid />
      <BusinessHeader />
      <StartupJourneyMap />
      <HumanCapitalServices />
      <BusinessMetrics />
      <EventSection />
      <SustainableDevelopment />
      <ImpactSection />
      <WhoWeAreSection />
      <MissionApproachCarousel />
      <Footer />
      {showModal && <BizSphereModal onClose={handleCloseModal} />}
    </div>
  );
}

export default App;
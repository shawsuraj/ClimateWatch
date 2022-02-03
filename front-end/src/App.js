import './App.css';

import { BrowserRouter as Router, Route, Routes} from 'react-router-dom';

// Bootstrap
import 'bootstrap/dist/css/bootstrap.min.css';

// Importing components
import { NavigationBar } from './components/NavigationBar';
import {Footer} from "./components/Footer";

// Importing pages
import Home from './pages/Home/Home'
import About from "./pages/About/About";

function App() {
  return (
      <Router>
          {/* Navigation Bar */}
          <NavigationBar />

          <Routes>
              {/*Landing Page / Home Page*/}
              <Route path="/" element={<Home />} />
              <Route path="/home" element={<Home />} />

              {/*/!*About us*!/*/}
              <Route path="/about" element={<About />} />

              {/*/!*Contact*!/*/}
              {/*<Route path="/contact" element={<Contact />} />*/}

              {/*/!*Login and Register*!/*/}
              {/*<Route path="/login" element={<Login />} />*/}
              {/*<Route path="/register" element={<Register />} />*/}

          </Routes>

          {/* Footer */}
          <Footer />
      </Router>

  );
}

export default App;

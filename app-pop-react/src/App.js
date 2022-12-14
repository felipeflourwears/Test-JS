import React from 'react';
import Navbar from '../src/componentes/Narvar';
import Base from '../src/componentes/base';
import {
  ChakraProvider,
  Box,
  Text,
  Link,
  VStack,
  Code,
  Grid,
  theme,
} from '@chakra-ui/react';
import { ColorModeSwitcher } from './ColorModeSwitcher';
import { Logo } from './Logo';

function App() {
  return (
    <ChakraProvider>
      <Base/> 
    </ChakraProvider>
  );
}

export default App;

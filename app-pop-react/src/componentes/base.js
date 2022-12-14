import {
	Box,
	VStack,
	Image,
	Text,
	Menu,
	MenuItem,
	MenuButton,
	MenuList,
	Button,
	AccordionButton,
} from '@chakra-ui/react';

const Base = () =>{
	return (
		<Box
			h = "full"
			alignItems = "flex-start"
			background = "black"
			paddingTop={2}
		>
			<VStack>
				<Image src={"../assets/avatar/Avatar.png"}></Image>
				<Text> Carlos Alfaro </Text>
				<Text> Web Developer </Text>
			</VStack>
			<VStack>
				<Menu>
					<MenuButton as={Button} > 
						Clientes
					</MenuButton>
					<MenuList>
						<MenuItem> Agregar cliente </MenuItem>
						<MenuItem> Lista de clientes </MenuItem>
						<MenuItem> Buscar cliente </MenuItem>
					</MenuList>
				</Menu>
				<Menu>
					<MenuButton as={Button} > 
						Items
					</MenuButton>
					<MenuList>
						<MenuItem> Agregar item </MenuItem>
						<MenuItem> Lista de items </MenuItem>
						<MenuItem> Buscar item </MenuItem>
					</MenuList>
				</Menu>
			</VStack>
		</Box>
	)
};

export default Base;
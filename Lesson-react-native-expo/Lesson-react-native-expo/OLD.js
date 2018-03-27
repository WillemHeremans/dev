import React from 'react';
import {View,Text,StyleSheet} from 'react-native';
import { Button } from 'react-native';
import TitleOne from './composents/TitleOne.js';
import TitleTwo from './composents/TitleTwo.js';
import Carre from './composents/Carre.js';
class App extends React.Component{
	firstFunction(){
		alert("Hello you");
	}
	render(){
		return(
			 <View style={styles.main}>
			 <TitleOne text={'My props'} textTwo={'Ok two'} />
			 <TitleTwo />
			 	<View style={styles.carre}>
			 	<Text>Hello!</Text>
			 	</View>
			 <Carre textCarre={'Texte dans carré bleu clair via props :-)'} />
			 
			 <Button
  onPress={this.firstFunction.bind(this)}
  title="Learn More"
  color="#841584"
  accessibilityLabel="Learn more about this purple button"
/>
			</View>
			
			)
	}
}
export default App;

const styles = StyleSheet.create ({
	main:{
		
		flex:1,
		justifyContent:'center',
		alignItems:'center',
		
		
	},
	titleone:{flex:1},
	titletwo:{flex:1},
	
	carre:{
		height:100,
		width:100,
		backgroundColor:'red',
		justifyContent:'center',
		alignItems:'center',
	
	
	}

})

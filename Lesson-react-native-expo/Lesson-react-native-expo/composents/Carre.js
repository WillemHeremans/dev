import React from 'react';
import {View,Text,StyleSheet} from 'react-native';
class Carre extends React.Component{
	render(){
		return(
			 <View style={styles.carre}>
			 	<Text>{this.props.textCarre}</Text>
			 	</View>
			 	
			)
	}
}
export default Carre;

const styles = StyleSheet.create ({
	
	Carre:{flex:1},
	
	carre:{
		height:150,
		width:150,
		backgroundColor:'lightblue',
		justifyContent:'center',
		alignItems:'center',
	
	
	}

})

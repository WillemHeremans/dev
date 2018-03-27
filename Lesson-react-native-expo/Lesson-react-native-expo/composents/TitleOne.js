import React from 'react';
import {View,Text} from 'react-native';
class TitleOne extends React.Component{
	render(){
		return(
			 <View>
			 <Text>{this.props.text}</Text>
			 <Text>{this.props.textTwo}</Text>
			</View>
			)
	}
}
export default TitleOne;

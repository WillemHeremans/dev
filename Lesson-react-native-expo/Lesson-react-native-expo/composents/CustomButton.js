import React from "react";
import { View, Text, TouchableOpacity, StyleSheet } from "react-native";

class CustomButton extends React.Component {
render() {
return (
<TouchableOpacity>
<Text style={styles.buttonStyle}>Click Me</Text>
</TouchableOpacity>
)
}
}

export default CustomButton;

const styles = StyleSheet.create({
buttonStyle:{
height: 45,
width: '100%',
backgroundColor: 'lightblue',
alignItems: 'center',
justifyContent:'center',
fontSize: 30
}
});


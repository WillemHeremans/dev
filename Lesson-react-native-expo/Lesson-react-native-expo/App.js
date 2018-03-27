import React from 'react';
import { View, Text, StyleSheet } from 'react-native';
import Header from './composents/Header.js';
import CustomButton from './composents/CustomButton.js';
import Card from './composents/Card.js';

class App extends React.Component {
render() {
return (
<View style={styles.main}>
<Header headerTitle={"Grocery List"} />
<Card/>
<View style={styles.button}>
<CustomButton/>
</View>
</View>
)
}
}

export default App;

const styles = StyleSheet.create({
main: {
flex:1,
alignItems: "center",
backgroundColor: "#f9f9f9"
},
button: {
position: 'absolute',
bottom:0,
left:0,
right:0
}
});

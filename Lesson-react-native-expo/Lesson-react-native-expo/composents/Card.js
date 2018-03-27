import React from "react";
import { View, Text, StyleSheet } from "react-native";

class Card extends React.Component {
render() {
return (
<View>
<Text style={styles.card}>Card</Text>
</View>
);
}
}

export default Card;

const styles = StyleSheet.create({
card:{
width: '100%',
height: 45,
backgroundColor: '#f4f4f4',
elevation: 15
}
});


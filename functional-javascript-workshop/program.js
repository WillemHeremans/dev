
// exo 1:
// module.exports = function upperCaser(input) {return input.toUpperCase();}



// exo 2:
//function repeat(operation, num) {
//      for (i = 0; i < num; i++) {operation()}
//    }
//    
//    module.exports = repeat


// exo 3:
//function doubleAll(numbers) {
//      
//      return numbers.map(x => x * 2)
//    }
//    
//    module.exports = doubleAll


// exo 4:

 function getShortMessages(messages) {
  var filtered = messages.filter(function(msg) {
  	if(msg.message && msg.message.length < 50) {
  		return true;
  	}
  });

  
  return filtered.map(function(msg) {
  	return msg.message;
  })
}
    module.exports = getShortMessages
 



//var words = ['spray', 'limit', 'elite', 'exuberant', 'destruction', 'present'];

//const result = words.filter(word => word.length > 6);

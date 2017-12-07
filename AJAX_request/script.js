$.post(
  './request.php',
  {getTab:true},
  function(data,status){
    console.log(data);
    data = JSON.parse(data);
    console.log(data);
  }
)

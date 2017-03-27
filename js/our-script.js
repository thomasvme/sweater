// function readSingleFile(e) {
//   var file = e.target.files[0];
//   if (!file) {
//     return;
//   }
//   var reader = new FileReader();
//   reader.onload = function (e) {
//     var contents = e.target.result;
//     displayContents(contents);
//   };
//   reader.readAsText(file);
// };


function readDummyJSON() {
  var json = '{"result":true,"count":1}',
    obj = JSON.parse(json);

  console.log(obj.count);

};

var jqxhr = $.getJSON("http://localhost/data.json", function () {
  console.log("success");
});


// function print() {
console.log("Tetje");
console.log(jqxhr);

// };
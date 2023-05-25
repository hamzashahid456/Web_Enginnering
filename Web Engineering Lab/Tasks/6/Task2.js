var arr1 = [1,2,3,4];
var arr2 = [2,4,6,8];

function ShowOutput(arr1, arr2){
    var res = [];
    var len = 0;
    if(arr1.length > arr2.length){
        len = arr1.length;
    } else {
        len = arr2.length;
    }

    for(var i=0; i<len; i++){
        for(var j=0; j<len; j++){
            if(arr1[i] == arr2[j]){
                res.push(arr1[i]);
            }
        }
    }
    return res;
}

var out = ShowOutput(arr1, arr2);
document.getElementById("output").textContent = out;
function Book(name, author){
    this.name = name;
    this.author = author;
    this.read = false;

    this.ReadBook = function(){
        this.read = true;
    }

    this.alreadyRead = function() {
        return this.read;
    }
    
}

var b1 = new Book('Book 1', 'Ali');
var b2 = new Book('Book 2', 'Faizan');
var b3 = new Book('Book 3', 'Farouq');
var b4 = new Book('Book 4', 'Haider');
var b5 = new Book('Book 5', 'Ahmed');

b2.ReadBook();

var arr = [b1, b2, b3, b4, b5];

var list = document.createElement("ul");
document.getElementById("myList").appendChild(list);

for (let i = 0; i < arr.length; i++) {
    var elem = document.createElement("li");
    elem.innerText = arr[i].name + " by " + arr[i].author;
    if(arr[i].alreadyRead() == true){
        elem.innerText = arr[i].name + " by " + arr[i].author + "   (Already read)";
    } else{
        elem.innerText = arr[i].name + " by " + arr[i].author + "   (Haven't read yet)";
    }
    list.appendChild(elem);  
}


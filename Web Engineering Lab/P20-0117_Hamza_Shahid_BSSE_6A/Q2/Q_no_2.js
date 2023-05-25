class vehicle{

    $make;
    $model;
    $year;
    $color;

    vehicle(){
        this.$make = "Toyota";
        this.$model = "Corolla";
        this.$year = "2022";
        this.$color = "red";
    }


    function method() {
        console.log("Driving the "+ $make + " " + $model);
    }

    function modify() {
        this.$color = "blue";
    }

    function honk(){
        console.log("Beep Beep!");
    }

}




const car = {
    type: "Hat",
    color: "white",
    fullName: function(){
        return this.type+" "+this.color;
    }
}
console.log(car.color);
console.log(car.fullName());